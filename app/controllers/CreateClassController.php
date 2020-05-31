<?php  
declare(strict_types=1);

namespace App\Controllers;

Use App\Models\Kelas;

class CreateClassController extends ControllerBase
{  
    public function indexAction() {

    }
     
    public function createClassSubmitAction()
    {
        $user = new Murid();
        // get value
        $nama_murid = $this->request->getPost('nama', 'string');
        $email_murid = $this->request->getPost('email', 'string');
        $password_murid = $this->request->getPost('password', 'string');
        $confirm = $this->request->getPost('confirm', 'string');

        $exist = Murid::findFirst(
            [
                'conditions' => 'email_murid = :email:',
                'bind'       => [
                    'email' => $email_murid,
                ],
            ]
        );

        if ($exist){
            $this->flashSession->error("Email telah terdaftar");
            $this->response->redirect('register');
        }

        else{
            if ($password_murid != $confirm){
                $this->flashSession->error("Password tidak cocok");
                $this->response->redirect('register');
                return false;
            }
            else{
                // set value
                $user->nama_murid = $nama_murid;
                $user->email_murid = $email_murid;
                $user->password_murid = $password_murid;

                $success = $user->save();
                var_dump($success); 

                // Log the user
                if ($success)
                {
                    $this->flashSession->success("Berhasil terdaftar!");
                    // Set a session
                    $this->session->set('AUTH_ID', $user->id_murid);
                    $this->session->set('AUTH_NAME', $user->nama_murid);
                    $this->session->set('AUTH_EMAIL', $user->email_murid);
                    $this->session->set('AUTH_PASS', $user->password_murid);  
                    
                    $this->response->redirect("/dashboard");

                }
                else
                {
                    return $this->response->redirect('login');
                }
            }
        }
     }
}     