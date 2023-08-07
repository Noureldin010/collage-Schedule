<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="yeess.css">
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

    $uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($user_name)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql="select* from login where id='".$id."'    And name  ='".$user_name."' And pass  ='".$password."' ";;

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}

}else{
	header("Location: index.php");
	exit();
} 

	
     ?>
     <form action="" method="post">
     <div class ="cmm"> 
           <img src="google-login.gif"/>
            <br>
            <input type="checkbox" id="doc"> <label>student</label>
            
            <input type="checkbox" id="doc1"><label>doctor</label>
            <input type="checkbox" id="doc2"><label>admin</label>

              <div class="form-input">
                  <input type ="text" name="code" placeholder=" enter your id"  > 
              </div>
              
              <div class="form-input">
                  <input type="text" name="user" placeholder=" enter your username" >
              </div>
              <div class="form-input">
                  <input type ="password" name="pass" placeholder="  enter your password" > 
              </div>
                  <input type ="submit" value="login" name="con">
				  <p class="login-register-text"> dont Have an account? <a href="siu.php">signup Here</a>.</p>
     </form>

</body>
</html>