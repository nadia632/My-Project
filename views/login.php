<?php
require_once './autoload.php';
if(isset($_POST['connexion']))
{
  $login=new UsersController();
  $login->auth();
}
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-6 mx-auto">
        <?php include_once './views/includes/alert.php';?>
            <div class="card">
                <div class="card-header">
                <h3 class="text-center">Connexion</h3>
                </div>
                <div class="card-body bg-light">
                    <form class="mr-1" method="POST" action="">
                   
                       <div class="form-group">
                           <input type="text" class="form-control" name="username" placeholder="Pseudo">
                       </div>
                       <div class="form-group">
                           <input type="password" class="form-control" name="password" placeholder="password">
                       </div>
                       <button class="btn btn-sm btn-primary" name="connexion" type="submit">Connexion</button>
                    </form>
                 </div>
                 <div class="card-footer">
                     <a  class="btn btn-link" href="<?php echo BASE_URL;?>register" style="text-decoration:none;">Inscription</a>
                 </div>
            </div>
        </div>
    </div>
</div>