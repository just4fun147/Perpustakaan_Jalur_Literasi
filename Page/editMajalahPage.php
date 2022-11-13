<?php 
    include '../component/sidebar.php' 

    ?>

<head>
    <title>Edit Majalah</title>
</head>
<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4 style="flex: 1 1 50%">EDIT MAJALAH</h4>

    </div>
    <hr>
    <?php
        //buat objek baru
         if(isset($_GET['id'])){
            $id = $_GET['id']; 
         } 
                $query = mysqli_query($con, "SELECT * FROM majalah WHERE id='$id'") or 
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
                        <form action="../process/editMajalahProcess.php" method="post"> 
                        <input hidden type="text" id="id" name="id" value="'.$data['id'].'"/>
                        <tr>
                            <td>Nama Majalah</td>
                        </tr> 
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td>
                                <input class="form-control mt-2 mb-2" type="text" id="judul" name="judul" value="'.$data['judul'].'"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Topik</td>
                        </tr> 
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td>
                                <input class="form-control mt-2 mb-2" type="text" id="topik" name="topik" value="'.$data['topik'].'"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Halaman</td>
                        </tr> 
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td>
                                <input class="form-control mt-2 mb-2" type="text" id="jumlah" name="jumlah" value="'.$data['jumlah_halaman'].'"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                        </tr> 
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td>
                                <input class="form-control mt-2 mb-2" type="text" id="harga" name="harga" value="'.$data['harga'].'"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <button type="submit" class="btn btn-warning" name="confirm" style="background-color:#ff4e44;">Konfirmasi</button>
                            <a class="btn btn-warning" href="./listMajalahPage.php" role="button"
                        style="background-color:#ff4e44;">Batal</a> </td>
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