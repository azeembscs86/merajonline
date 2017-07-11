<?php
session_start();
if(isset($_POST['submit']))
{
  include("dbconnection.php");
  $email      =  mysql_real_escape_string($_POST['email']);
  $password   =  mysql_real_escape_string(md5($_POST['password']));
  if(isset($_SESSION['current_url']))
    {
       $url=$_SESSION['current_url'];
    }else
    {
       $url="latest-products";
    }
    $result=  userLogin($email,$password);  
    $row=mysql_fetch_array($result);        
            $loginuser       = $row['email'];
            $user_id         = $row['user_id'];
            $login_user_name = $row['user_name'];
            $loginpassword   = $row['password'];
            $isactive        = $row['isActive'];
            

       if($isactive=='no')
       {
              header("location:login-error?active");
       }else{
       if(($loginuser==$email and $loginpassword==$password))
       {	       
            $_SESSION['loged_email']=$loginuser;  
            $_SESSION['user_loged_id']=$user_id;           
            $_SESSION['loged_user_name']=$login_user_name; 
            header("location:$url");       
       }
       else if(($login_user_name==$email and $loginpassword==$password)) 
       {
            $_SESSION['loged_email']=$loginuser;            
            $_SESSION['user_loged_id']=$user_id;           
            $_SESSION['loged_user_name']=$login_user_name; 
            header("location:$url");         
          }          
         else
          {
            header("location:login-error?msg");
          } 
       }
}else
{
    header("location:user-login");
}
?>
