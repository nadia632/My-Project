<?php
require_once './autoload.php';

$data=new EmployesController();
$employes=$data->getAllEmployes();
if(isset($_POST['find']))
{
$data=new EmployesController();
$employes=$data->findEmploye();

}

?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-12 mx-auto">
          <?php include_once './views/includes/alert.php';?>
            <div class="card">
                <div class="card-body bg-light">
<a  class="btn btn-sm btn-primary mb-4"href="<?php echo BASE_URL ;?>add">
              <i class="fas fa-plus"></i></a>
              <a  class="btn btn-sm btn-secondary mb-4"href="<?php echo BASE_URL ;?>home">
              <i class="fas fa-home"></i></a>
              <a  class="btn btn-sm btn-link mb-4"href="<?php echo BASE_URL ;?>logout" title="Déconnexion" style="text-decoration:none;">
              <i class="fas fa-user mr-2"></i><?php echo $_SESSION['username'] ;?></a>
              <form class="float-right mb-2 d-flex flex-row" method="post">
               <input type="text" class="form-control" name="search" placeholde="Rechercher">
               <button class="btn btn-info btn-sm" name="find" type="submit">
                 <i class="fa fa-search"></i>
               </button>
              </form>
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nom & Prénom</th>
      <th scope="col">Matricule</th>
      <th scope="col">Département</th>
      <th scope="col">Poste</th>
      <th scope="col">Date Embauche</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
     foreach ($employes as $employe)
     :
       
     ?>
    <tr>
      <th><?php echo $employe['nom'].' '.$employe['prenom']; ?></th>
      <td><?php echo $employe['matricule'];?></td>
      <td><?php echo  $employe['departement']; ?></td>
      <td><?php echo  $employe['post']; ?></td>
      <td><?php echo  $employe['date_embauche'];  ?></td>
      <td><?php echo $employe['status']?
      '<span class="badge badge-success">Active</span>':
      '<span class="badge badge-danger">Résilié</span>';
      ?></td>
      <td class="d-flex flex-row">
          <form method="post" action="update" class="mr-1">
              <input type="hidden" name="id" value="<?php echo $employe['id'];?>">
              <button type="submit" name="update" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
          </form>
          <form method="post" action="delete" class="mr-1">
              <input type="hidden" name="id" value="<?php echo $employe['id'];?>">
              <button type="submit" name="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
          </form>
      </td>
    </tr>
 <?php  endforeach; ?>
      
  </tbody>
</table>
</div>
            </div>
        </div>
    </div>
</div>