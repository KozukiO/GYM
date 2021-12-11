<?php
/*
session_start(); 

include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uemail = validate($_POST['email']);

    $pass = validate($_POST['password']);


    if (empty($uemail)) {

        header("Location: LOGIN2.php?error=User Email is required");

        exit();

    }else if(empty($pass)){

        header("Location: LOGIN2.php?error=Password is required");

        exit();

    }else{

            $sql = "SELECT * FROM Login WHERE email='$uemail' AND password='$pass'";
    
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) === 1) {
    
                $row = mysqli_fetch_assoc($result);
    
                if ($row['user_email'] === $uemail && $row['password'] === $pass) {
    
                    echo "Logged in!";
    
                    $_SESSION['email'] = $row['email'];
    
                    header("Location: index2.php");
    
                    exit();
                
                } else{

                        header("Location: LOGIN2.php?error=Incorect Email or password");
        
                        exit();
        
                    } 
                }else{

                    header("Location: LOGIN2.php?error=Incorect email or password");
        
                    exit();
                     }   

                }
            }   else{

                header("Location: LOGIN2.php");
            
                exit();       
            }
        
    
*/
    ?>

    
            