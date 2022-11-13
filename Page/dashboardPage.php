<?php
include '../component/sidebar.php';
$user_login = $_SESSION['user'];
$name = $user_login['name']
    ?>

<head>
    <title>Dashboard</title>
</head>
<div class="container p-3 m-4 h-100 shadow-lg"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>Selamat datang di perpustakaan Jalur Literasi</h4>
    <hr>
    <!-- Menu Utama Admin di Dashboard  -->
    <?php
if ($name == "admin") {

?>
    <div class="row d-flex justify-content-center">
        <div class="col">
            <div class="card shadow-lg">
                <div class="card-header text-center">
                    <h5 class="fw-bold">List Buku</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img src="../assets/images/books.png" alt="" srcset="" style="width: 20rem;">
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-auto">
                            <p>Total Jenis Buku Tersedia:
                                <?php
    $query = mysqli_query($con, "SELECT * FROM buku") or
        die(mysqli_error($con));
    $totalDataBuku = mysqli_num_rows($query);
    echo $totalDataBuku;
?>
                            </p>
                        </div>
                        <div class="col">
                            <div class="d-grid gap-2">
                                <a href="../Page/listBukuPage.php" class="btn btn-success">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-lg">
                <div class="card-header text-center">
                    <h5 class="fw-bold">List Peminjaman Buku</h5>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="../assets/images/peminjaman.png" alt="" srcset="" style="width: 13rem;">
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-auto">
                                <p>Total Buku Sedang Dipinjam:
                                    <?php
    $query1 = mysqli_query($con, "SELECT * FROM peminjaman WHERE status='Dipinjam'") or
        die(mysqli_error($con));
    $totalDataPeminjaman = mysqli_num_rows($query1);
    echo $totalDataPeminjaman;
?>
                                </p>
                            </div>
                            <div class="col">
                                <div class="d-grid gap-2">
                                    <a href="../Page/listPeminjamPage.php" class="btn btn-success">Lihat
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-5">
        <div class="col">
            <div class="card shadow-lg">
                <div class="card-header text-center">
                    <h5 class="fw-bold">List Majalah</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img src="../assets/images/magazine.png" alt="" srcset="" style="width: 20rem;">
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-auto">
                            <p>Total Majalah Tersedia:
                                <?php
    $query3 = mysqli_query($con, "SELECT * FROM majalah") or
        die(mysqli_error($con));
    $totalMajalah = mysqli_num_rows($query3);
    echo $totalMajalah;
?>
                            </p>
                        </div>
                        <div class="col">
                            <div class="d-grid gap-2">
                                <a href="../Page/listMajalahPage.php" class="btn btn-success">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-lg">
                <div class="card-header text-center">
                    <h5 class="fw-bold">List Pembelian Majalah</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img src="../assets/images/peminjaman.png" alt="" srcset="" style="width: 13rem;">
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-auto">
                            <p>Total Majalah Terbeli:
                                <?php
    $query2 = mysqli_query($con, "SELECT * FROM pembelian WHERE status='Sudah Dibayar'") or
        die(mysqli_error($con));
    $totalPembelian = mysqli_num_rows($query2);
    echo $totalPembelian;
?>
                            </p>
                        </div>
                        <div class="col">
                            <div class="d-grid gap-2">
                                <a href="../Page/listPembeliPage.php" class="btn btn-success">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Utama User di Dashboard -->
    <?php
}
else {
    $query = mysqli_query($con, "SELECT * FROM peminjaman") or
        die(mysqli_error($con));
    $totalPembelian = mysqli_num_rows($query);
    if($totalPembelian!=0){
        $array = array();
        while ($data = mysqli_fetch_assoc($query)) {
            array_push($array, $data['buku_id']);
        }
        $count = array_count_values($array);
        arsort($count);
        $keys = array_keys($count);
        $query2 = mysqli_query($con, "SELECT * FROM buku WHERE id=$keys[0]") or
            die(mysqli_error($con));
        if(mysqli_num_rows($query2)!=0){
            $buku = mysqli_fetch_assoc($query2);
            $image = base64_encode($buku['gambar']);
            echo '
                <div class="row d-flex justify-content-center">
                <div class="col">
                    <div class="card shadow-lg">
                        <div class="card-header text-center">
                            <h5 class="fw-bold">Buku Terlaris Bulan Ini</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="data:image/jpeg;base64,' . $image . '"/ class="img-thumbnail">
                            </div>
                            <hr>
                            <div class="row">
                                <div class="card-header text-center">
                                    <h5 class="fw-bold">'. $buku['judul']. '</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
        }else{
            echo'
            <p class="d-flex justify-content-center">Hello,'.$name.' :)</p>';
        }
    }else{
        echo'
        <p class="d-flex justify-content-center">Hello,'.$name.' :)</p>';
    }
    
?>

    <?php
}
?>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>