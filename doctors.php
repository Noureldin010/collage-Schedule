<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="no.css">
    <title>admin</title>
</head>
<body> 
                <?php
                $host='localhost';
                $user='root';
                $pasword='';
                $db='std' ;
                $conn=mysqli_connect($host,$user,$pasword,$db);

                $q=mysqli_query($conn,"select * from doctors");
                $department='';
                $subject_name='';
                $doctor_name='';
                $empty_days='';
                $empty_time='';
                
                if(isset($_POST['department'])){

                    $department=$_POST['department'];
                } 
                if(isset($_POST['subject_name'])){

                    $subject_name=$_POST['subject_name'];
                }
                if(isset($_POST['doctor_name'])){

                    $doctor_name=$_POST['doctor_name'];
                }
                if(isset($_POST['empty_days'])){

                    $empty_days=$_POST['empty_days'];
                }
                if(isset($_POST['empty_time'])){

                    $empty_time=$_POST['empty_time'];
                }
                $sq='';
                if(isset($_POST['add'])){

                    $sq="insert into doctors values ('$department','$subject_name','$doctor_name','$empty_days','$empty_time')";
                    mysqli_query($conn,$sq);
                    header("location:doctors.php");}
                    if (isset($_POST['del'])){

                        $sq="delete from doctors where doctor_name='$doctor_name' ";
                        mysqli_query($conn,$sq);
                        header("location:doctors.php");
                    
                }
                
                ?>
                     
                 <div class="form-input">
                 <form method='post'>
                     <div id="but">
                 <div class="img">
                 <img src="computer-log-in.gif"/>
                 </div>
                 <lable> CHI SYSTEM (doctors)</lable> <br><br>
                  
              
                  <label id="info"> department: </label><br>
                  <input type='text' name='department' placeholder='department' ><br>
              
                  <label id="info">subject name: </label><br>
                 <input type ='text' name='subject_name' placeholder=' subject' ><br>

                  <label id="info">doctor name: </label><br>
                  <input type='text' name='doctor_name' placeholder='user name' ><br>

                  <label id="info"> empty days: </label><br>
                  <input type='text' name='empty_days' placeholder='free days' > <br>

                  <label id="info">empty time: </label><br>
                  <input type='text' name='empty_time' placeholder='free time' > <br><br>
    
                  <button name='add' > add</button>

                  <button name='del' > delete</button>
 
                  <br> <br>

                  <div id="lik">
                  <p> chi web site <a href="https://chi.edu.eg/">(CHI)</a></p>
                  </div>                
                </div> <br>
                <div class="center4">
                <div class="button4" >
		  <button class="btn"><a href="http://localhost/project/login.php">log out</a></button>
</div>
</div> 
<br>
<div class="center5">
<div class="button5" >
		  <button ><a href="http://localhost/project/doctor%20home.php">home</a></button>
</div>
</div>
</div>

 <main id="tb">
                <table>
                    <tr>
                        <th>department</th>
                        <th>subject name</th>
                        <th>doctor name</th>
                        <th>empty days</th>
                        <th> empty time</th>

                    </tr>
                    <?php
                    while ($row =mysqli_fetch_array($q)){

                        echo"<tr>";
                        echo "<td>".$row['department'].   "</td>";
                        echo "<td>".$row['subject_name'].   "</td>";
                        echo "<td>".$row['doctor_name'].   "</td>";
                        echo "<td>".$row['empty_days'].   "</td>";
                        echo "<td>".$row['empty_time'].  "</td>";
                        echo"</tr>";
                    }
                    
                    ?>
                </table>
</main>
</form>
</body>
</html>