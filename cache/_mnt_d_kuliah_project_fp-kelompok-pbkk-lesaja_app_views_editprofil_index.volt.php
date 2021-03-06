<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Profil</title>
    <link rel="stylesheet" type="text/css" href="/css/murid.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">
</head>
<body class="bg-guest">
<?= $this->flashSession->output() ?>
<?= $this->tag->form(['editprofil/editSubmit', 'method' => 'post']) ?>
    <div class="box" align = "center"> 
        <div class="content" align="center">
            <p>
                <?= $this->tag->linkTo(['dashboard', $this->tag->image(['img/lesaja.png', 'width' => '200'])]) ?>
            </p>
            <div class="css-tabluar">
                <div class="css-lapisankedua">
                    <div class="css-lapisanketiga">
                        <div class="css-boxprofile">
                            <div class="css-editborder">
                                <a herf='/editprofil' class="css-active-title">Profile</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="css-boxpassword">
                        <div class="lapisankeduaa">
                            <div class="css-bordernormal">
                                <a href='/changepassword' class="css-title">Password</a>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
            <p><br><br>
            <input class="form-control mr-sm-2" name="nama" type="text" required value="<?php echo $this->session->get('AUTH_NAME'); ?>">
            </p>
            <p><br>
            <input class="form-control mr-sm-2" name="tgl-lahir" type="date" required value="<?php echo $this->session->get('AUTH_TGLLAHIR'); ?>">
            </p><br><br>
            <div class="btnbawah" align="center">
                <div align="center">
                    <a href='/dashboard' class="btn btn-outline-small btncancel btn-css btn-primary:hover" type="button">CANCEL</a>
                    <?= $this->tag->submitButton(['SUBMIT', 'class' => 'btn btn-submit btnyesbtn-css-1 btn-primary:hover']) ?>
                </div>
            </div>
       </div>   
    </div> 
<?= $this->tag->endform() ?>
</body>
</html>