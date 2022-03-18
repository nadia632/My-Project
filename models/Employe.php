<?php
class Employe
{
    static public function getAll()
    {
         $stmt=DB::connect()->prepare("SELECT * FROM employes");
        $stmt->execute();
        return $stmt->fetchAll();
        //$stmt->close();
        $stmt=null;
    }
   static public function getEmploye($data)
    {
        $id=$data['id'];
        try{
            $query='SELECT * FROM employes WHERE id=:id';
            $stmt=DB::connect()->prepare($query);
            $stmt->execute(array(':id' => $id));
            $employe=$stmt->fetch(PDO::FETCH_OBJ);
            return $employe;
        }catch(PDOException $e){
            die('error:'.$e->getMessage());
        }
    }
    static public function add($data)
    {
       $stmt=DB::connect()->prepare("INSERT INTO employes(nom,prenom,matricule,departement,post,date_embauche,status)
        VALUES(:nom,:prenom,:matricule,:departement,:post,:date_embauche,:status)");
       $stmt->bindParam(':nom',$data['nom']);
       $stmt->bindParam(':prenom',$data['prenom']);
       $stmt->bindParam(':matricule',$data['matricule']);
       $stmt->bindParam(':departement',$data['departement']);
       $stmt->bindParam(':post',$data['post']);
       $stmt->bindParam(':date_embauche',$data['date_embauche']);
       $stmt->bindParam(':status',$data['status']);
      
       if($stmt->execute()) {
           return 'ok';
       }else{
           return 'error';
       }
      // $stmt->close();
       $stmt=null;
    }
    static public function update($data)
    {
        $query="UPDATE employes SET nom=:nom, prenom=:prenom,matricule=:matricule, 
        departement=:departement,post=:post,date_embauche=:date_embauche,status=:status WHERE id=:id ";
        $stmt=DB::connect()->prepare($query);
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':nom',$data['nom']);
        $stmt->bindParam(':prenom',$data['prenom']);
        $stmt->bindParam(':matricule',$data['matricule']);
        $stmt->bindParam(':departement',$data['departement']);
        $stmt->bindParam(':post',$data['post']);
        $stmt->bindParam(':date_embauche',$data['date_embauche']);
        $stmt->bindParam(':status',$data['status']);

        if($stmt->execute()){
            return 'ok';
       }else{
           return 'error';
       }
        $stmt=null;
    }
    static function delete($data)
    {
        $id=$data['id'];
        try{
        $query="DELETE FROM employes WHERE id = :id";
        $stmt=DB::connect()->prepare($query);
        $stmt->bindParam(':id',$id);
        if($stmt->execute())
        {
          return 'ok';
        }else{
            return 'error';
        }
    }catch(PDOException $e)
        {
            $stmt=null;
        }
        
    }
    static public function find($data)
    {
        $search=$data['search'];
        try{
     $sql="SELECT * FROM employes WHERE nom LIKE ? OR prenom LIKE ?";
     $stmt=DB::connect()->prepare($sql);
    $stmt->execute(array('%'.$search.'%','%'.$search.'%'));
     $employes=$stmt->fetchAll();
      return $employes;
    }catch(PDOException $e)
    {
        die(''.$e->getMessage()); 
    }
}
}

?>