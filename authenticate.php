<?php

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])){
    if (isset($_POST['email']) && isset($_POST['password']) ){
            
            $email = $_POST['email'];
            $password = $_POST['password'];
            

            if (filesize("users.txt") == 0){

                echo '<script>
                            alert("User does not Exists\nPlease register!");
                            window.location.href="register.php";
                        </script>';
            }
            else{

                $myfile = fopen("users.txt", "r") or die("Unable to open file!");
                $x = fread($myfile,filesize("users.txt"));
                fclose($myfile);
                $x = json_decode($x,true);
                if(array_key_exists($email,$x) && $x[$email][0] == $password){
                    echo '<script>
                            alert("Login Successfull");
                            window.location.href="https://www.simplilearn.com";
                        </script>';
                        return;
                }
                else{
                    echo '<script>
                            alert("Invalid Username or Password");
                            window.location.href="login.php";
                        </script>';

                }  

            }
        echo '<script>
        alert("Registration Successfull\nPlease Login");
        window.location.href="login.php";
        </script>';
    }
}

?>