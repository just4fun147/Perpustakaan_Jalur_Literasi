<?php 
    include '../component/sidebar.php' 

    ?>

<head>
    <title>Peminjaman Buku</title>
</head>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4 style="flex: 1 1 50%">Peminjaman Buku</h4>

    </div>
    <hr>
    <?php
        //buat objek baru
         if(isset($_GET['id'])){
            $id = $_GET['id']; 
            $date = date('d-m-Y',strtotime("+7 days"));
         } 
                $query = mysqli_query($con, "SELECT * FROM buku WHERE id='$id'") or 
                die(mysqli_error($con)); 
                if (mysqli_num_rows($query) == 0) { 
                    echo 
                    '<tr> 
                    <td colspan="7"> Tidak ada data </td> 
                    </tr>'; 
                }else{ 
                    $no = 1; 
                    while($data = mysqli_fetch_assoc($query)){ 
                        echo' 
                        <table>
                        <form action="../process/pinjamProcess.php" method="post"> 
                        <input hidden type="text" id="id" name="id" value="'.$data['id'].'"/>
                        <tr>
                            <td >Nama Buku</td>
                        </tr> 
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td>
                                <input class="form-control mt-2 mb-2" type="text" id="judul" name="judul" value="'.$data['judul'].'"disabled/>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Kembali</td>
                        </tr> 
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td>
                                <input class="form-control mt-2 mb-2" type="text" id="tanggalKembali" name="tanggalKembali" value="'.$date.'"disabled/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <button type="submit" class="btn btn-warning" name="confirm" style="background-color:#ff4e44;">Konfirmasi</button>
                            <button type="submit" class="btn btn-warning" name="cancel" style="background-color:#ff4e44;">Batal</button> </td>
                        </tr>
                    </form>
                    </table>'; 
                    $no++; 
                } 
            } 
        ?>

</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>