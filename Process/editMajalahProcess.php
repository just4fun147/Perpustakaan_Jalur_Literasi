<?php 
    session_start(); 
    if(isset($_POST['confirm'])){ 
        include('../db.php'); 
        $judul = $_POST['judul']; 
        $jumlah_halaman = $_POST['jumlah']; 
        $topik = $_POST['topik'];
        $harga = $_POST['harga'];
        $id = $_POST['id'];
        $queryEdit = mysqli_query($con, "UPDATE majalah SET judul='$judul', topik='$topik', jumlah_halaman=$jumlah_halaman, harga=$harga WHERE id=$id") 
        or die(mysqli_error($con)); 
        if($queryEdit){ 
            echo 
            '<script> 
            alert("Edit Majalah Success"); 
            window.location = "../page/listMajalahPage.php" 
            </script>'; 
        }else{ 
            echo 
            '<script> 
            alert("Edit Majalah Failed"); 
            window.location = "../page/listMajalahPage.php" 
            </script>'; 
        } 
    }else { 
        echo 
        '<script> 
        window.history.back() 
        </script>';
    } 