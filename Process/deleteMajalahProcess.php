<?php 
session_start(); 
if(isset($_GET['id'])){
    include('../db.php'); 
    $id = $_GET['id']; 
     
    $query = mysqli_query($con, "DELETE FROM majalah WHERE id='$id'") 
        or die(mysqli_error($con)); 
     if($query){ 
            echo 
            '<script> 
            alert("Delete Majalah Success"); 
            window.location = "../page/listMajalahPage.php" 
            </script>'; 
        }else{ 
            echo 
            '<script> 
            alert("Delete Majalah Failed"); 
            </script>'; 
        } 

    }else{ 
        echo 
        '<script> 
        window.location = "../page/listMajalahPage.php" 
        </script>'; 
    }
?>