<?php
declare(strict_types=1);

namespace App\Controllers;
Use App\Models\Tentor;
Use App\Models\Mapel;
Use App\Models\Murid;

class TentorController extends ControllerBase
{
    public function indexAction()
    {
    }

    public function tentorAction(){
        
        // $getUserId = $this->session->get('AUTH_ID');

        // $query = $this->modelsManager->createQuery(
        //     "SELECT DISTINCT nama_tentor, lulusan, jkel, email_tentor FROM tentor = $getUserId");
        // $list= $query->execute();

        // echo var_dump($tentor);

        $tentor = Tentor::find();
        $this->view->tentor = $tentor;
        // $this->view->disable();
    }

}