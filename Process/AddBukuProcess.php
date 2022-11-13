<?php 
session_start();
if(isset($_POST['confirm'])){ 
    include('../db.php'); 
    //tampung data dari addBukuPage pakai POST
     $judul = $_POST['judul']; 
   //  $gambar = $_POST['gambar'];
     $gambar = addslashes(@file_get_contents($_FILES['gambar']['tmp_name']));
     $jumlah = $_POST['jumlah']; 
    
    //cek buku sudah ada atau belum
     $query_judul = mysqli_query($con, "SELECT * FROM buku WHERE judul ='$judul'") or 
     die(mysqli_error($con)); 
     
      if(mysqli_num_rows($query_judul) != 0){
          echo 
          '<script> 
          alert("Buku sudah ada");
          window.location = "../page/listBukuPage.php" 
          </script>';
      }else {
        $query_insert = mysqli_query($con, "INSERT INTO buku (gambar, judul, jumlah) VALUES ('$gambar', '$judul', '$jumlah')") or die(mysqli_error($con)); 
          
        if($query_insert){ 
            echo 
            '<script> 
            alert("Add Buku Success"); 
            window.location = "../page/listBukuPage.php" 
            </script>'; 
        }else{ 
            echo 
            '<script> 
            alert("Add Buku Failed"); 
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