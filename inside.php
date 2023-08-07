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

                $q=mysqli_query($conn,"select * from admin");
                $department='';
                $subject_name='';
                $doctor_name='';
                $day='';
                $time='';
                
                if(isset($_POST['department'])){

                    $department=$_POST['department'];
                } 
                if(isset($_POST['subject_name'])){

                    $subject_name=$_POST['subject_name'];
                }
                if(isset($_POST['doctor_name'])){

                    $doctor_name=$_POST['doctor_name'];
                }
                if(isset($_POST['day'])){

                    $day=$_POST['day'];
                }
                if(isset($_POST['time'])){

                    $time=$_POST['time'];
                }
                $sq='';
                if(isset($_POST['add'])){

                    $sq="insert into admin values ('$department','$subject_name','$doctor_name','$day','$time')";
                    mysqli_query($conn,$sq);
                    header("location:inside.php");}
                    if (isset($_POST['del'])){

                        $sq="delete from admin where day='$day' ";
                        mysqli_query($conn,$sq);
                        header("location:inside.php");
                    
                }
                
                ?>
                     
                 <div class="form-input">
                 <form method='post'>
                     <div id="but">
                 <div class="img">
                 <img src="computer-log-in.gif"/>
                 </div>
                 <lable> CHI SYSTEM (admin)</lable> <br><br>
                  
              
                  <label id="info"> department: </label><br>
                  <input type='text' name='department' placeholder='department' ><br>
              
                  <label id="info">subject name </label><br>
                 <input type ='text' name='subject_name' placeholder=' subject' ><br>

                  <label id="info">doctor name </label><br>
                  <input type='text' name='doctor_name' placeholder='user name' ><br>

                  <label id="info">day </label><br>
                  <input type='text' name='day' placeholder='date' > <br>

                  <label id="info">time: </label><br>
                  <input type='text' name='time' placeholder='date' > <br><br>
    
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
		  <button ><a href="http://localhost/project/after-login.php#">home</a></button>
</div>
</div>
</div>

 <main id="tb">
                <table>
                    <tr>
                        <th>department</th>
                        <th>subject name</th>
                        <th>doctor name</th>
                        <th>day</th>
                        <th>time</th>

                    </tr>
                    <?php
                    while ($row =mysqli_fetch_array($q)){

                        echo"<tr>";
                        echo "<td>".$row['department'].   "</td>";
                        echo "<td>".$row['subject_name'].   "</td>";
                        echo "<td>".$row['doctor_name'].   "</td>";
                        echo "<td>".$row['day'].   "</td>";
                        echo "<td>".$row['time'].  "</td>";
                        echo"</tr>";
                    }
                    
                    ?>
                </table>
</main>
</form>
</body>
</html>