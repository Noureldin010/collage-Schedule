<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="ye.css">
	<title>login</title>
</head>
<body>
<?php
    if(isset($_POST['con'])){
    $host='localhost';
    $user='root';
    $pasword='';
    $db='std' ;
    $conn=mysqli_connect($host,$user,$pasword,$db);
    $user_name=$_POST['user'];
    $password=$_POST['pass'];
    $id=$_POST['code'];
    
	$sql="select* from login where id='".$id."'    And name  ='".$user_name."' And pass  ='".$password."' ";
	$result=mysqli_query($conn,$sql);

	if (mysqli_num_rows($result)==1){

		
		header("location:after-login.php");
	}
	else{

		echo "incorrect pass , user or id"; 
		
	}
}

	
     ?>
     <form action="" method="post">
     <div class ="cmm"> 
           <img src="google-login.gif"/>
            
              <div class="form-input">
                  <input type ="text" name="code" placeholder=" enter your id"  > 
              </div>
              
              <div class="form-input">
                  <input type="text" name="user" placeholder=" enter your username" >
              </div>
              <div class="form-input">
                  <input type ="password" name="pass" placeholder="  enter your password" > 
              </div>
                  <input id="butto" type ="submit" value="login" name="con">
				  <p class="login-register-text"> dont Have an account? <a href="siu.php">signup Here</a>.</p>
     </form>

</body>
</html>