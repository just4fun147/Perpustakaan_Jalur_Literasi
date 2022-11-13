<?php 
session_start(); 
if(isset($_GET['id'])){
    include('../db.php'); 
    $id = $_GET['id']; 

    $query_select = mysqli_query($con, "SELECT * FROM peminjaman WHERE buku_id = '$id' AND status='Dipinjam'") or 
    die(mysqli_error($con)); 

    //$buku = mysqli_fetch_assoc($query_select);
   // $count = mysqli_num_rows($query_select);
    $temp = 0;

    while ($buku = mysqli_fetch_assoc($query_select)) {
        $temp++;
    }

    if($temp == 0) {
        $query = mysqli_query($con, "DELETE FROM buku WHERE id='$id'") 
        or die(mysqli_error($con)); 
        
        if($query){ 
            echo 
            '<script> 
            alert("Delete Buku Success"); 
            window.location = "../page/listBukuPage.php" 
            </script>';
        }else{ 
            echo 
            '<script> 
            alert("Delete Buku Failed"); 
            </script>'; 
        } 
    }else {
        echo 
            '<script> 
            alert("Buku sedang dipinjam, tidak bisa dihapus"); 
            window.location = "../page/listBukuPage.php" 
            </script>';
    }
    }else{ 
    echo 
    '<script> 
    window.location = "../page/listBukuPage.php" 
    </script>'; 
}
?>