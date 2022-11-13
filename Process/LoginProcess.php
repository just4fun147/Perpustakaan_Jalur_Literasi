<?php 
    if(isset($_POST['login'])){ 
        include('../db.php'); 
        //tampung data dari loginPage pakai POST
        $email = $_POST['email']; 
        $password = $_POST['password']; 
        $query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or 
        die(mysqli_error($con)); 
        
        //cek email
        if(mysqli_num_rows($query) == 0){ 
            echo 
            '<script> 
            alert("Email not found!"); 
            window.location = "../page/loginPage.php" 
            </script>'; 
        }else{ 
            $user = mysqli_fetch_assoc($query); 
            if(password_verify($password, $user['password'])){
                session_start(); 

                $_SESSION['isLogin'] = true; 
                $_SESSION['user'] = $user; 
                $user_login = $_SESSION['user'];
                $name = $user_login['name'];
                
                if($name=="admin"){
                    echo 
                        '<script> 
                            alert("Login Admin Success"); 
                            window.location = "../page/dashboardPage.php"
                        </script>'; 
                } else{
                    echo
                        '<script>
                            alert("Login Success");
                            window.location = "../page/dashboardPage.php"
                        </script>';
                }
            }else { 
                echo 
                '<script> alert("Email or Password Invalid"); 
                window.location = "../page/loginPage.php" 
                </script>'; 
            } 
        } 
    }else{
         echo 
         '<script>
          window.history.back() 
          </script>';
    }
?>