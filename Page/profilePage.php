<?php 
    include '../component/sidebar.php';
    $user_login = $_SESSION['user'];
    $image = base64_encode($user_login['photo']);
    $name = $user_login['name'];
    $email = $user_login['email'];
    $user_admin = "admin";
    
 //   echo'<img src="data:image/jpeg;base64,'.$image.'" width="100" height="100"/>';
?>

<head>
    <title>Profile</title>
</head>
<div class="container p-3 m-4 h-100 d-flex justify-content-center"
    style="background-color: #FFFFFF; border-top: 5px solid #Ff4e44; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="mt-5" style="clip-path:circle()" width="300px"
                    src="data:image/jpeg;base64,<?php echo ''.$image.''?>">
                <span class="font-weight-bold mt-2"><?php echo ''.$name.''?></span>
                <span class="text-black-50"><?php echo ''.$email.''?></span><span>
                </span>
            </div>
        </div>

        <div class="col-md-9 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-center align-items-center mb-2">
                    <h4 class="text-center"><b>CHANGE PROFILE</b></h4>
                </div>

                <form action="../process/editProfilProcess.php" method="post" enctype="multipart/form-data"
                    class="was-validated">
                    <?php if($name != "admin") {
                        echo'
                        <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Name User</label>
                            <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name"
                                value="'.$name.'" required>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Email ID</label>
                            <input type="text" class="form-control" placeholder="Enter email" id="email" name="email"
                                value="'.$email.'" required>
                        </div>';
                    }else{
                        echo'
                        <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Name User</label>
                            <input type="text" class="form-control" placeholder="name" id="name" name="name"
                                value="'.$name.'" disabled>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Email ID</label>
                            <input type="text" class="form-control" placeholder="name" id="email" name="email"
                                value="'.$email.'" disabled>
                        </div>';
                    }
                    ?>
                    <div class="col-md-12 mt-3">
                        <label class="labels">Profil Picture</label>
                        <input type="file" accept="image/jpeg" class="form-control" name="gambar" required>
                    </div>
                    <div class="col-md-12 mt-3">
                        <label class="labels">Change Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="password"
                            name="password" required>
                    </div>
            </div>

            <div class="row">
                <div class="d-grid gap-2 col-md-3 mt-3">
                    <button type="submit" class="btn btn-warning" name="saveBtn" style="background-color:#ff4e44;">Save
                        Update</button>
                </div>

                <div class="d-grid gap-2 col-md-3 mt-3">
                    <a class="btn btn-warning" href="./dashboardPage.php" role="button"
                        style="background-color:#ff4e44;">Cancel
                        Update</a>
                </div>
            </div>
            <form>
        </div>
    </div>
</div>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>