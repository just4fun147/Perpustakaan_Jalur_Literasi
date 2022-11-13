<?php 
    session_start(); 
    if(isset($_POST['confirm'])){ 
        include('../db.php'); 
        //tampung data dari editBukuPage pakai POST
        $judul = $_POST['judul']; 
        //tampung gambar blm bener
        //$gambar = $_POST['gambar'];
        $gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
        $jumlah = $_POST['jumlah']; 
        $id = $_POST['id'];
        $queryEdit = mysqli_query($con, "UPDATE buku SET judul='$judul', gambar='$gambar', jumlah=$jumlah WHERE id=$id") 
        or die(mysqli_error($con)); 
        if($queryEdit){ 
            echo 
            '<script> 
            alert("Edit Buku Success"); 
            window.location = "../page/listBukuPage.php" 
            </script>'; 
        }else{ 
            echo 
            '<script> 
            alert("Edit Buku Failed"); 
            window.location = "../page/listBukuPage.php" 
            </script>'; 
        } 
    }else { 
        echo 
        '<script> 
        window.history.back() 
        </script>';
    } 