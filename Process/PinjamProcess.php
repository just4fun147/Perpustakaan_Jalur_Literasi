<?php 
include '../component/sidebar.php';
if(isset($_POST['confirm'])){ 
    include('../db.php'); 
    //tampung data dari peminjamanPage pakai POST
     $bukuId = $_POST['id']; 
     $date = date('Y-m-d',strtotime("+7 days"));
     
     $query = mysqli_query($con,
     "INSERT INTO peminjaman(buku_id, status, pengembalian, peminjam_id)
     VALUES
     ($bukuId, 'Dipinjam', '$date', $user_id)") or die(mysqli_error($con));

     if($query){ 
        $query2 = mysqli_query($con, "SELECT * FROM buku WHERE id=$bukuId") or
                die(mysqli_error($con));
                $data = mysqli_fetch_assoc($query2);
                $jumlah = $data['jumlah']-1;
        $query3 = mysqli_query($con, "UPDATE buku SET jumlah='$jumlah' WHERE id=$bukuId") 
        or die(mysqli_error($con)); 
            echo 
            '<script> 
            alert("Add Peminjaman Success"); 
            window.location = "../page/listBukuPage.php" 
            </script>'; 
        }else{ 
            echo 
            '<script> 
            alert("Add Peminjaman Failed"); 
            </script>'; 
        } 

    }else{ 
        echo 
        '<script> 
        window.location = "../page/listBukuPage.php" 
        </script>'; 
    }
?>