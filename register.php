
<?php //include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	//header("Location: voter.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
       body{
      	background-image: url(backgpic.jpg);
      	background-position: center;
      	background-repeat: no-repeat;
      	background-size: cover;
      	background-attachment: fixed;

      }
      form{
        margin-left:20px;
      }
      .head{
        margin-top:150px;
        margin-left:50px;
        border:3px solid #0F6292;
  
        width:300px;
        height:270px;
      }
      input[type=submit]{
      	border-radius:20px;
        width:100px;
        height:30px;
        margin-left:80px;
      }
      input[type=submit]:hover{
        background-color:#0F6292;
        color:white;
      }
      input[type=text],input[type=password]{
         border:1px solid black;
      }
      h3{
        margin-left:100px;
      }
    </style>
  </head>
  <body>
<div class="head">

<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<legend> <h3> Register </h3></legend>
<form action= "reg_action.php" method= "post" id="myform" >
Firstname:
<input type="text" name="firstname" value="" />
<br>
<br>
Lastname: 
<input type="text" name="lastname" value="" />
<br>
<br>
Username: 
<input type="text" name="username" value="" />
<br>
<br>
Password: 
<input type="password" name="password" value="" />
<br>
<br>
<input type="submit" name="submit" value="submit" />
</form>
</div>

  </body>
</html>
