<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student.css">
    <title>current schedule</title>
</head>
<body>
<?php
                $host='localhost';
                $user='root';
                $pasword='';
                $db='std' ;
                $conn=mysqli_connect($host,$user,$pasword,$db);

                $q=mysqli_query($conn,"select * from admin"); ?>
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
    
</body>
</html>