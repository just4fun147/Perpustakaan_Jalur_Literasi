<?php 
session_start(); 
if(isset($_GET['id'])){
    include('../db.php'); 
    $id = $_GET['id']; 
     
    $query = mysqli_query($con, "UPDATE pembelian SET status='Sudah Dibayar' WHERE id=$id") 
        or die(mysqli_error($con)); 
     if($query){ 
            echo 
            '<script> 
            alert("Pembayaran Success"); 
            window.location = "../page/listPembelianMajalahPage.php" 
            </script>'; 
        }else{ 
            echo 
            '<script> 
            alert("Pembayaran Failed"); 
            window.location = "../page/listPembelianMajalahPage.php" 
            </script>'; 
        }
    }
?>