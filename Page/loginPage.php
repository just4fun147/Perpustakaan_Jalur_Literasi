<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrit
        y="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../style.css" rel="stylesheet">
    <title>Login Page</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/uts_paw"><img src="../assets/images/logo.png"
                    alt="Logo Jalur Literasi" width="180px" height="50px"></a>
        </div>
    </nav>
    <div class="bg bg-dark text-dark">
        <div class="container min-vh-100 mt-5 d-flex align-items-center justifycontent-center">
            <div class="card text-white p-3 mb-2 bg-dark ma-5 shadow " style="min-width: 25rem;">
                <!--Form inputan, name masing-masing label jangan diganti  -->

                <form action="../process/loginProcess.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" name="login"
                            style="background-color:#ff4e44;">Login</button>
                    </div>
                </form>
                <p class="mt-2 mb-0">Don’t have an account yet?
                    <a href="./registerPage.php" class="textprimary">Click here!</a>
                </p>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-center text-white">
        <div class="container p-4 pb-0">
            <p>Kelompok E</p>
            <p>Paulus Pandu Winoto | Satyo Gusti Anugrah | Novita Sari | Alfito Girsang | I Gusti Ngurah A Pradnya
                Kuswara</p>

            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>

            </section>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright: Tugas Besar UTS Pemograman Web
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>