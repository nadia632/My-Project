<?php
require_once './autoload.php';

if(isset($_POST['register']))
{
$create_user=new UsersController();
$users=$create_user->register();

}

?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-12 mx-auto">
          <?php include_once './views/includes/alert.php';?>
            <div class="card">
              <div class="card-header">
                <h3>Inscription</h3>
              </div>
                <div class="card-body bg-light">
             <form method="POST" action="" class="mr-1">
             <div class="form-group">
                  <input type="text" class="form-control" name="fullname" placeholder="Nom & Prenom">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="pseudo">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="password">
                </div>
              
        <button type="submit" class="btn btn-sm btn-primary" name="register" >Register</button>
</div></form>
<div class="card-footer">
  <a href="<?php echo BASE_URL?>?login" class="btn btn-link" style="text-decoration:none;">Connexion</a>
</div>
            </div>
        </div>
    </div>
</div>