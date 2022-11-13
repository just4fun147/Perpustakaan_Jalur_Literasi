<?php 
include '../component/sidebar.php';
if(isset($_GET['id'])){ 
    include('../db.php'); 
     $id = $user_id;
     $majalah_id = $_GET['id']; 
     
     $query = mysqli_query($con,
     "INSERT INTO pembelian(majalah_id, pembeli_id,status)
     VALUES
     ($majalah_id, $id,'Belum Dibayar')") or die(mysqli_error($con));

     if($query){ 
            echo 
            '<script> 
            alert("Add Pembelian Success"); 
            window.location = "../page/listPembelianMajalahPage.php" 
            </script>'; 
        }else{ 
            echo 
            '<script> 
            alert("Add Pembelian Failed"); 
            </script>'; 
        } 

    }else{ 
        echo 
        '<script> 
        window.location = "../page/listPembelianMajalahPage.php" 
        </script>'; 
    }
?>