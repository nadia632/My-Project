<?php
require_once './autoload.php';

if(isset($_POST['id'])){
$existEmploye=new EmployesController();
$employe=$existEmploye->getOneEmploye();
//print_r($employes);
}
if(isset($_POST['valider']))
{
    $updateEmploye=new EmployesController();
    $updateEmploye->updateEmploye();
}
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">Ajouter Un Employer</div>
                <div class="card-body bg-light">
<a  class="btn btn-sm btn-secondary mb-4" href="<?php echo BASE_URL ;?>home">
              <i class="fas fa-home"></i></a>
<form method="POST">
<input type="hidden" name="id" value="<?php echo $employe->id; ?>" />

<div class="form-group">
    <label >Nom</label>
    <input type="text"class="form-control" name="nom" placeholder="Nom" value="<?php echo $employe->nom; ?>">
</div>
<div class="form-group">
    <label >Prenom</label>
    <input type="text"class="form-control" name="prenom" placeholder="Prenom"  value="<?php echo $employe->prenom; ?>">
</div>
<div class="form-group">
    <label >Matricule</label>
    <input type="text"class="form-control" name="matricule" placeholder="matricule"  value="<?php echo $employe->matricule; ?>">
</div>
<div class="form-group">
    <label >Département</label>
    <input type="text"class="form-control" name="departement" placeholder="département"  value="<?php echo $employe->departement; ?>">
</div>
<div class="form-group">
    <label >Post</label>
    <input type="text"class="form-control" name="post" placeholder="post"  value="<?php echo $employe->post; ?>">
</div>
<div class="form-group">
    <label >Date Embauche</label>
    <input type="date"class="form-control" name="date_embauche" placeholder="date embauche"  >
</div>
<div class="form-group">
<select class="form-control" name="status">
<option value="<?php echo $employe->status?'': '1'; ?>">Active</option>
<option value="<?php echo $employe->status?'': '0'; ?>">Résilié</option>
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