<?php 
    include '../component/sidebar.php' 

    ?>

<head>
    <title>Tambah Buku</title>
</head>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4 style="flex: 1 1 50%">TAMBAH BUKU</h4>

    </div>
    <hr>
    <table>
        <form action="../process/AddBukuProcess.php" method="post" enctype="multipart/form-data">
            <tr>
                <td>Nama Buku</td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>
                    <input class="form-control mt-2 mb-2" type="text" id="judul" name="judul"
                        placeholder="Judul Buku" />
                </td>
            </tr>
            <tr>
                <td>Gambar</td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>
                    <input type="file" accept="image/jpeg" class="form-control mt-2 mb-2" name="gambar" required>
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>
                    <input class="form-control mt-2 mb-2" type="number" id="jumlah" name="jumlah"
                        placeholder="Jumlah Buku" />
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-warning" name="confirm"
                        style="background-color:#ff4e44;">Konfirmasi</button>
                    <a class="btn btn-warning" href="./listBukuPage.php" role="button"
                        style="background-color:#ff4e44;">Batal</a>
                </td>
            </tr>
        </form>
    </table>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>