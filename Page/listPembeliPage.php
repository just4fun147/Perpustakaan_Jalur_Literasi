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
        <h4 style="flex: 1 1 50%">LIST PEMBELI PERNAH MEMBELI MAJALAH</h4>
    </div>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pembeli</th>
                <th scope="col">Judul Majalah</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($con, "SELECT * FROM pembelian WHERE status='Sudah Dibayar'") or
                die(mysqli_error($con));
            if (mysqli_num_rows($query) == 0) {
                echo
                '<tr> 
                    <td colspan="7"> Tidak ada data </td> 
                    </tr>';
            } else {
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
                    $userId= $data['pembeli_id'];
                    $query2 = mysqli_query($con, "SELECT * FROM users WHERE id=$userId") or
                    die(mysqli_error($con));
                    $user=mysqli_fetch_assoc($query2);
                    $majalahId= $data['majalah_id'];
                    $query3 = mysqli_query($con, "SELECT * FROM majalah WHERE id=$majalahId") or
                    die(mysqli_error($con));
                    if(mysqli_num_rows($query3)!=0){
                        $majalah=mysqli_fetch_assoc($query3);
                        $judul = $majalah['judul'];
                    }else{
                        $judul = "Majalah Sudah Dihapus";
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