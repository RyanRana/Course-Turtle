<?php
            include_once 'db.inc.php';
            if (isset($_POST["submit"])){
                $name = $_POST["name"];
                $state = $_POST["state"];
                $school = $_POST["school"];
                $grade = $_POST["grade"];
                $pass = $_POST["pass"];
                $email = $_POST["email"];
                $p1 = $_POST["p1"];
                $p2 = $_POST["p2"];
                $p3 = $_POST["p3"];
                $p4 = $_POST["p4"];
                $p5 = $_POST["p5"];
                $p6 = $_POST["p6"];
                $p7 = $_POST["p7"];
                $p8 = $_POST["p8"];
                $p1t = $_POST["p1t"];
                $p2t = $_POST["p2t"];
                $p3t = $_POST["p3t"];
                $p4t = $_POST["p4t"];
                $p5t = $_POST["p5t"];
                $p6t = $_POST["p6t"];
                $p7t = $_POST["p7t"];
                $p8t = $_POST["p8t"];
                $sql = "INSERT INTO users (name,pass,email,state,school,grade,p1,p2,p3,p4,p5,p6,p7,p8,p1t,p2t,p3t,p4t,p5t,p6t,p7t,p8t) VALUES ('$name','$pass','$email','$state','$school','$grade','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p1t','$p2t','$p3t','$p4t','$p5t','$p6t','$p7t','$p8t') ";
                if (mysqli_query($conn,$sql)){
                    echo'sucess';
                }
            }
    ?>
   

