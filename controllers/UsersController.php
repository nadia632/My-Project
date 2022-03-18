<?php

class  UsersController{
    public function register()
    {
      if(isset($_POST['register']))
      {
         $options=[
             'cost'=>12
         ];
         $password = password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
         $data=array(
             'fullname'=>$_POST['fullname'],
             'username'=> $_POST['username'],
             'password'=> $password,
         );
        
         $result=USER::createUser($data);
         if($result==='ok')
         {
             Redirect::to('login');
             Session::set('session','Un nouveu utilisateur a jouter');
         }else{
             echo $result;
         }
      }
    }
    public function auth()
    {
        $data['username']=$_POST['username'];
        $result=User::login($data);
        if(($result->username === $_POST['username']) && (password_verify($_POST['password'],$result->password)))
        { 
            $_SESSION['logged']=true;
            $_SESSION['username']=$result->username;
            Redirect::to('home');
        }else
        {
            Session::set('error','username ou password est inccorect');
            Redirect::to('login');    
        }
    }
   static public function logout()
    {
        session_destroy();

    }
}

?>