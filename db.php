


<?php

/*
This file has the logic to store the registration data of the user
*/

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])){
    if (isset($_POST['name'])  && isset($_POST['contact']) && isset($_POST['email']) && 
        isset($_POST['password']) && isset($_POST['cpassword'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];


            if (filesize("users.txt") == 0){
                $myfile = fopen("users.txt", "w") or die("Unable to open file!");
                $x = array($email=>[$cpassword,$name,$contact]);
                fwrite($myfile, json_encode($x));
                fclose($myfile);
            }
            else{
                $myfile = fopen("users.txt", "r") or die("Unable to open file!");
                $x = fread($myfile,filesize("users.txt"));
                fclose($myfile);
                $x = json_decode($x,true);
                if(array_key_exists($email,$x)){
                    echo '<script>
                            alert("User already Exists");
                            window.location.href="register.php";
                        </script>';
                        return;
                }
                else{
                    $myfile = fopen("users.txt", "w") or die("Unable to open file!");
                $x = array_merge($x,array($email=>[$cpassword,$name,$contact]));
                fwrite($myfile, json_encode($x));

                }  

            }
        echo '<script>
        alert("Registration Successfull\nPlease Login");
        window.location.href="login.php";
        </script>';
    }
}





?>



