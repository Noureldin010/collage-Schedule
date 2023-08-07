
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="foul.css">
    <title>login</title>
</head>
<body>
<?php 

$host="localhost";
$user="root";
$password="";
$db="nooo";
mysqli_connect ($host,$user,$password,$db);


if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from login where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }}
    ?>
    <div class="coo">
        <img src="download.png"/>
            <form method='POST' action='#'>
                <div class="form-input">
                    <input type="text" name="text" placeholder="Enter the User Name"/>	
                </div>
                <div class="form-input">
                    <input type="password" name="password" placeholder="password"/>
                </div>
                <input  type="submit" value="LOGIN" name="button" class="btn-login"/>
            </form>
    
</body>
</html>