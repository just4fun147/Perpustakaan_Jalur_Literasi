<?php
include '../component/sidebar.php'
?>

<head>
    <title>List Peminjam</title>
</head>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="body d-flex justify-content-between">
        <h4 style="flex: 1 1 50%">LIST PEMINJAM</h4>

    </div>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Judul Buku</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($con, "SELECT * FROM peminjaman WHERE status='Dipinjam'") or
                die(mysqli_error($con));
            if (mysqli_num_rows($query) == 0) {
                echo
                '<tr> 
                    <td colspan="7"> Tidak ada data </td> 
                    </tr>';
            } else {
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
                    $userId= $data['peminjam_id'];
                    $query2 = mysqli_query($con, "SELECT * FROM users WHERE id=$userId") or
                    die(mysqli_error($con));
                    $user=mysqli_fetch_assoc($query2);
                    $book= $data['buku_id'];
                    $query3 = mysqli_query($con, "SELECT * FROM buku WHERE id=$book") or
                    die(mysqli_error($con));
                    if(mysqli_num_rows($query3)!=0){
                        $buku=mysqli_fetch_assoc($query3);
                        $judul = $buku['judul'];
                    }else{
                        $judul = "Buku Sudah Dihapus";
                    }
                    
                    echo ' 
                        <tr> 
                        <th scope="row">' . $no . '</th> 
                        <td>' . $user['name'] . '</td>
                        <td>' . $judul . '</td> 
                    </tr>';
                    $no++;
                    
                }
            }
            ?>
        </tbody>
    </table>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>