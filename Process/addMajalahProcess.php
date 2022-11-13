<?php 
include '../component/sidebar.php';
if(isset($_POST['confirm'])){ 
    include('../db.php'); 
     $judul = $_POST['judul'];
     $topik = $_POST['topik'];
     $jumlah_halaman = $_POST['jumlah'];
     $harga = $_POST['harga']; 
     
     $query = mysqli_query($con,
     "INSERT INTO majalah(judul, topik, jumlah_halaman, harga)
     VALUES
     ('$judul', '$topik', $jumlah_halaman, $harga)") or die(mysqli_error($con));

     if($query){ 
            echo 
            '<script> 
            alert("Add Majalah Success"); 
            window.location = "../page/listMajalahPage.php" 
            </script>'; 
        }else{ 
            echo 
            '<script> 
            alert("Add Majalah Failed"); 
            </script>'; 
        } 

    }else{ 
        echo 
        '<script> 
        window.location = "../page/listMajalahPage.php" 
        </script>'; 
    }
?>