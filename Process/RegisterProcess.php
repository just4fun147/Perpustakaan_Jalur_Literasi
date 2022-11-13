<?php 
if(isset($_POST['register'])){ 
    include('../db.php'); 
    //tampung data dari registerPage pakai POST
     $email = $_POST['email']; 
     $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
     $name = $_POST['name']; 
    // $photo = $_POST['photo'];
     $image = addslashes(file_get_contents($_FILES['photo']['tmp_name'])); // code insert image to database
     
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 
            '<script> 
            alert("Invalid Email Format")
            window.location = "../page/registerPage.php" 
            </script>'; 
      }else{
        $emailCheck = mysqli_query($con,
     "SELECT * FROM users WHERE email like '%".$email."%'");
     if(mysqli_num_rows($emailCheck) != 0){
        echo 
        '<script> 
        alert("Email sudah terdaftar");
        window.location = "../page/registerPage.php" 
        </script>';
     }else{
        $query = mysqli_query($con,
      "INSERT INTO users(email, password, name, photo) 
      VALUES
      ('$email', '$password', '$name', '$image')") or die(mysqli_error($con));
        
        if($query){ 
            echo 
            '<script> 
            alert("Register Success"); 
            window.location = "../index.php" 
            </script>'; 
        }else{ 
            echo 
            '<script> 
            alert("Register Failed"); 
            </script>'; 
        } 

     }
     
      }
    //cek email harus unik
     
    }else{ 
        echo 
        '<script> 
        window.history.back() 
        </script>'; 
    }
?>