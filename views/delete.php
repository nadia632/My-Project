<?php
if(isset($_POST['id']))
{
  $deleteEmploye = new EmployesController();
  $deleteEmploye->deleteEmploye();
}
?>