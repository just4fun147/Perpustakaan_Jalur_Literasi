<?php 
session_start(); 
if(isset($_GET['id'])){
    include('../db.php'); 
    $id = $_GET['id']; 
     
    $query = mysqli_query($con, "DELETE FROM pembelian WHERE id='$id'") 
        or die(mysqli_error($con)); 
     if($query){ 
            echo 
            '<script> 
            alert("Majalah Tidak jadi dibeli"); 
            window.location = "../page/listPembelianMajalahPage.php" 
            </script>'; 
        }else{ 
            echo 
            '<script> 
            alert("Majalah Gagal Dibatalkan"); 
            </script>'; 
        } 

    }else{ 
        echo 
        '<script> 
        window.location = "../page/listPembelianMajalahPage.php" 
        </script>'; 
    }
?>