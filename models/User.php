<?php

class User{

    static  public function createUser($data)
    { 
         $query="INSERT INTO users(fullname,username,password) VALUES(:fullname,:username,:password)";
           $stmt=DB::connect()->prepare($query);
          $stmt->bindParam(':fullname',$data['fullname']);
          $stmt->bindParam(':username',$data['username']); 
          $stmt->bindParam(':password',$data['password']);
          $result = $stmt->execute();
          if($result)
          {
              return 'ok';
          }else{

            return 'error';
          }
          $stmt->closeCursor();
          $stmt=null;
    }

    static public function login($data)
    {
        $username=$data['username']; 
        try{
        $query="SELECT * FROM users WHERE username=:username";
        $stmt=DB::connect()->prepare($query);
        $stmt->execute(array(':username' => $username));
        $user=$stmt->fetch(PDO::FETCH_OBJ);
        return $user;
       }
       catch(PDOException $e)
       {
          die('error'.$e->getMessage());
       }
    }
}





?>