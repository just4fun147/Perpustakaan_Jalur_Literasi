<?php
session_start();
 if(isset($_POST['saveBtn'])){
    include('../db.php'); 

    $user_login = $_SESSION['user'];
    $id = $user_login['id'];
    $user_name = $user_login['name'];

    
    if($user_name != "admin") { //paramater $user_email diganti jadi name, sebelumnya email
        //jika user ingin mengubah data profil
        $email = $_POST['email']; 
        $name = $_POST['name'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  
    
        $image = addslashes(@file_get_contents($_FILES['gambar']['tmp_name']));// code insert image to database

       
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 
                '<script> 
                alert("Invalid Email Format")
                window.location = "../page/profilePage.php"
                </script>'; 
          }else{
            $query = mysqli_query($con, "UPDATE users SET email='$email',  password='$password', name='$name', photo='$image' WHERE id='$id'") or die(mysqli_error($con));     
            $query_session = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'") or 
    
            die(mysqli_error($con)); 
            if($query) {
                $user_update = mysqli_fetch_assoc($query_session);
                $_SESSION['user'] = $user_update; 
                echo
                '<script>
                    alert("Update Profile Success"); 
                    window.location = "../page/profilePage.php"
                    </script>';
            }else {
                echo
                '<script>
                alert("Edit Profile Failed");
                </script>';
            }
          }
        
        
        }else {
        //jika admin ingin mengubah password saja
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
        $image = addslashes(@file_get_contents($_FILES['gambar']['tmp_name']));
        $query = mysqli_query($con, "UPDATE users SET password='$password', photo='$image' WHERE id='$id'") or die(mysqli_error($con));  
        $query_session = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'") or 
        die(mysqli_error($con)); 

        if($query) {
            $user_update = mysqli_fetch_assoc($query_session);
            $_SESSION['user'] = $user_update; 
            echo
            '<script>
                alert("Update Password Admin Success"); 
                window.location = "../page/profilePage.php"
                </script>';
        }else {
            echo
            '<script>
            alert("Edit Profile Failed");
            </script>';
        }
    }
 }else {
    echo
        '<script>
            window.history.back()
        </script>'; 
 }
?>