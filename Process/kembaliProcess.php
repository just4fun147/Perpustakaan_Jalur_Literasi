<?php 
session_start(); 
if(isset($_GET['id'])){
    include('../db.php'); 
    $id = $_GET['id']; 
     
    $query = mysqli_query($con, "UPDATE peminjaman SET status='Sudah Dikembalian' WHERE id=$id") 
        or die(mysqli_error($con)); 
     if($query){ 

        $query2 = mysqli_query($con, "SELECT * FROM peminjaman WHERE id=$id") or
                die(mysqli_error($con));
                $data = mysqli_fetch_assoc($query2);
                $buku_id = $data['buku_id'];
        $query3 = mysqli_query($con, "SELECT * FROM buku WHERE id=$buku_id") or
                die(mysqli_error($con));
                $data2 = mysqli_fetch_assoc($query3);
                $jumlah = $data2['jumlah']+1;
        $query4 = mysqli_query($con, "UPDATE buku SET jumlah='$jumlah' WHERE id=$buku_id") 
        or die(mysqli_error($con)); 
            echo 
            '<script> 
            alert("Pengembalian Success"); 
            window.location = "../page/listPeminjamanPage.php" 
            </script>'; 
        }else{ 
            echo 
            '<script> 
            alert("Pengembalian Failed"); 
            </script>'; 
        } 

    }else{ 
        echo 
        '<script> 
        window.location = "../page/listPeminjamanPage.php" 
        </script>'; 
    }
?>