<?php
require_once './autoload.php';
if(isset($_POST['valider'])){
$newEmploye=new EmployesController();
$newEmploye->addEmploye();
//print_r($employes);
}
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">Ajouter Un Employer</div>
                <div class="card-body bg-light">
<a  class="btn btn-sm btn-secondary mb-4"href="<?php echo BASE_URL ;?>home">
              <i class="fas fa-home"></i></a>
<form method="POST">
<div class="form-group">
    <label >Nom</label>
    <input type="text"class="form-control" name="nom" placeholder="Nom">
</div>
<div class="form-group">
    <label >Prenom</label>
    <input type="text"class="form-control" name="prenom" placeholder="Prenom">
</div>
<div class="form-group">
    <label >Matricule</label>
    <input type="text"class="form-control" name="matricule" placeholder="matricule">
</div>
<div class="form-group">
    <label >Département</label>
    <input type="text"class="form-control" name="departement" placeholder="département">
</div>
<div class="form-group">
    <label >Post</label>
    <input type="text"class="form-control" name="post" placeholder="post">
</div>
<div class="form-group">
    <label >Date Embauche</label>
    <input type="date"class="form-control" name="date_embauche" placeholder="date embauche">
</div>
<div class="form-group">
<select class="form-control" name="status">
<option value="1">Active</option>
<option value="0">Résilié</option>
</select>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary" name="valider">Valider</button>
</div>
</form>
</div>
            </div>
        </div>
    </div>
</div>