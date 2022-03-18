<?php

class EmployesController
{
    public function getAllEmployes()
    {
        $employes=Employe::getAll();
        return $employes;
    }

    public function addEmploye()
    { 
          $data=array(
              'nom' => $_POST['nom'],
              'prenom' => $_POST['prenom'],
              'matricule'=> $_POST['matricule'],
              'departement'=> $_POST['departement'],
              'post'=> $_POST['post'],
              'date_embauche'=> $_POST['date_embauche'],
              'status'=> $_POST['status']
          );
          $result=Employe::add($data);
          if($result==='ok')
          {
            Session::set('success','Employer est ajouter');
            Redirect::to('home');
          }else{
              echo $result;
          }
      }

      public function getOneEmploye()
    {
           $data=array('id'=>$_POST['id']);
           $employe=Employe::getEmploye($data);
           return $employe;
    }

    public function updateEmploye()
    {
        $data=array(
            'id' => $_POST['id'],
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'matricule'=> $_POST['matricule'],
            'departement'=> $_POST['departement'],
            'post'=> $_POST['post'],
            'date_embauche'=> $_POST['date_embauche'],
            'status'=> $_POST['status']
        );
        $result=Employe::update($data);
        if($result==='ok')
        {
          Session::set('success','Employer est modifier');
          Redirect::to('home');
        }else{
            echo $result;
        }
    }

    public function deleteEmploye()
    {
        $data = array('id' =>$_POST['id']);
        $result=Employe::delete($data);
        if($result ==='ok')
        {
            Session::set('success','Employer est supprimer');
            Redirect::to('home');
        }else{
            echo $result;
        }
    }
    public function findEmploye()
    {
        if(isset($_POST['search']))
        {
            $data=array('search'=>$_POST['search']);
        }
        $employes=Employe::find($data);
        return $employes;
}
}
?>