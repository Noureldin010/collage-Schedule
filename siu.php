<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ye.css">

    <script src='jquery-3.6.0.min.js'></script> 
    <script>/*
    $(document).ready(function(){

        $('#b1').click(function(){
            $('body').css{(
                'color':'black'
                'background':'white'
            });
        });
    });
    $(document).ready(function(){

$('#b2').click(function(){
    $('body').css{(
        'color':'white'
        'background':'black'
    });
});
});
    </script>

    <title>signup</title>
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
    $insert="insert into login values($id,'$user_name','$password')";
    $q=mysqli_query($conn,$insert);
    /*
    if ($conn){
        echo "yes it is ";
    }else{
        echo "no it is";
    } }*/
    header("location:login.php");
    }?>
    <button id='b1' title="white mode">🌞</button>
    <button id='b2' title="dark mode">🌛</button>
    <form method='post'>
 
        <div class ="cmm"> 
           <img src="google-login.gif"/>
              <div class="form-input">
                  <input type ="text" name="code" placeholder=" id" > 
              </div>
              <div class="form-input">
                  <input type="text" name="user" placeholder="user name" >
              </div>
              <div class="form-input">
                  <input type ="password" name="pass" placeholder=" password" > 
              </div>
                  <input id="butto" type ="submit" value="signup" name="con">
                  
                 

                  <p class>Have an account? <a href="login.php">Login Here</a>.</p>
</div>


</body>
</html>