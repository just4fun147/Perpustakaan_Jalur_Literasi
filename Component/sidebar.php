<?php 
    session_start(); 
    if (!$_SESSION['isLogin']) { 
        header("location: ../page/loginPage.php"); 
    }else { 
        include('../db.php'); 
        $user_login = $_SESSION['user'];
        $user_id = $user_login['id'];
        $name = $user_login['name'];
        $admin = $user_login['email'];
        $user_admin = "admin";
        $image = base64_encode($user_login['photo']);
    } 
?>
<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <style>
    * {
        font-family: "Poppins";
    }

    .side-bar {
        width: 260px;
        background-color: #1A374D;
        min-height: 100vh;
    }

    a {
        padding-left: 10px;
        font-size: 13px;
        text-decoration: none;
        color: #B1D0E0;
    }

    .menu i {
        padding-left: 10px;
    }

    .menu .content-menu {
        padding: 9px 8px;
    }

    .isActive {
        background-color: #B1D0E0 !important;
        border-right: 8px solid #B1D0E0;
    }

    i {
        color: white;
    }

    div.profile {
        box-shadow: inset 0 0 0 0 #406882;
        color: #406882;
        transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
        margin-top: 10px;
    }

    div.profile:hover {
        box-shadow: inset 260px 0 0 0 #Ff4e44;
        color: white;
    }
    </style>
</head>

<body>
    <aside>
        <div class="d-flex">
            <div class="side-bar">
                <div class="profile">
                    <a href="./profilePage.php" class="">
                        <!-- <i class="fa fa-user-circle fa-2x" style="padding:15px 8px 0px 15px;"></i> -->
                        <img class="float-left" style="clip-path:circle()" width="35px"
                            src="data:image/jpeg;base64,<?php echo ''.$image.''?>">
                        <span class="" style="font-size: 15px;color: #FFFFFF;"> <?php echo ''.$name.''?></span>
                    </a>
                </div>
                <hr style="color:#FFFFFF; height:5px;">
                <div class="menu">
                    <div class="content-menu">
                        <i class="bi bi-house"></i>
                        <a href="./dashboardPage.php" style="font-weight:600">Dashboard</a>
                    </div>
                    <div class="content-menu ">
                        <i class="bi bi-book"></i>
                        <a href="./listBukuPage.php" style="font-weight:600">List Buku</a>
                    </div>
                    <?php 
                        if($name=="admin"){
                            echo'
                            <div class="content-menu ">
                                <i class="bi bi-view-list"></i>
                                <a href="./listPeminjamPage.php" style="font-weight:600">List Peminjam</a>
                            </div>
                            <div class="content-menu ">
                                <i class="fa fa-list-alt"></i>
                                <a href="./listPembeliPage.php" style="font-weight:600">List Pembeli</a>
                            </div>';
                        }else{
                            echo'
                            <div class="content-menu ">
                                <i class="bi bi-view-list"></i>
                                <a href="./listPeminjamanPage.php" style="font-weight:600">List Peminjaman</a>
                            </div>
                                <div class="content-menu ">
                                    <i class="bi bi-bag"></i>
                                    <a href="./listPembelianMajalahPage.php" style="font-weight:600">List Pembelian Majalah</a>
                                </div>';
                        }
                    ?>
                    <div class="content-menu ">
                        <i class="bi bi-book-half"></i>
                        <a href="./listMajalahPage.php" style="font-weight:600">List Majalah</a>
                    </div>

                    <div class="content-menu ">
                        <i class="fa fa-sign-out"></i>
                        <a href="../process/logoutProcess.php" style="font-weight:600">&nbspLogout</a>
                    </div>
                </div>
                <hr style="color: #FFFFFF; height: 5px;">
            </div>