<?php 
    include '../component/sidebar.php' 

    ?>

<head>
    <title>Tambah Majalah</title>
</head>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4 style="flex: 1 1 50%">TAMBAH MAJALAH</h4>

    </div>
    <hr>
    <table>
        <form action="../process/addMajalahProcess.php" method="post">
            <tr>
                <td>Judul Majalah</td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>
                    <input class="form-control mt-2 mb-2" type="text" id="judul" name="judul"
                        placeholder="Judul Majalah" />
                </td>
            </tr>
            <tr>
                <td>Topik</td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>
                    <input class="form-control mt-2 mb-2" type="text" id="judul" name="topik"
                        placeholder="Topik Majalah">
                </td>
            </tr>
            <tr>
                <td>Jumlah Halaman</td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>
                    <input class="form-control mt-2 mb-2" type="number" id="jumlah" name="jumlah"
                        placeholder="Jumlah Halaman" />
                </td>
            </tr>
            <tr>
                <td>Harga</td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>
                    <input class="form-control mt-2 mb-2" type="float" id="jumlah" name="harga" placeholder="Harga" />
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-warning" name="confirm"
                        style="background-color:#ff4e44;">Konfirmasi</button>
                    <button type="submit" class="btn btn-warning" name="cancel"
                        style="background-color:#ff4e44;">Batal</button>
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