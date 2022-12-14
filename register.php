<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Education.id - Register</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">Education.id</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="login.php">Masuk</a></li>
                            <li class="nav-item"><a class="nav-link" href="register.php">Daftar</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-pen"></i></div>
                            <h1 class="fw-bolder">Daftar</h1>
                            <p class="lead fw-normal text-muted mb-0">Selamat Datang, Isi formulir di bawah ini untuk menyelesaikan pendaftaran</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="proses_register.php" method="post">
                                    <!-- Fullname input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nama_lengkap" name="nama_lengkap" type="text" placeholder="Masukkan Nama Lengkap..." data-sb-validations="required" />
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <div class="invalid-feedback" data-sb-feedback="nama_lengkap:required">Nama Lengkap diperlukan.</div>
                                    </div>
                                    <!-- NIK input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nisn" type="text" name="nisn" placeholder="Masukkan nisn..." data-sb-validations="required" />
                                        <label for="nisn">Nomor Induk Siswa Nasional</label>
                                        <div class="invalid-feedback" data-sb-feedback="nisn:required">NISN diperlukan.</div>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" type="email" name="email" placeholder="nama@contoh.com" data-sb-validations="required,email" />
                                        <label for="email">Alamat Email</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">Email diperlukan.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email tidak valid.</div>
                                    </div>
                                    <!-- Password input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="password" name="password" type="password" placeholder="name@example.com" data-sb-validations="required,password" />
                                        <label for="password">Kata Sandi</label>
                                        <div class="invalid-feedback" data-sb-feedback="password:required">Kata Sandi diperlukan.</div>
                                        <div class="invalid-feedback" data-sb-feedback="password:password">Kata Sandi tidak valid.</div>
                                    </div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg " id="submitButton" type="submit">Daftar</button></div>
                                    <div class="d-grid text-center mt-3 mb-3"><p class="lead fw-normal text-muted mb-0">Sudah punya akun?</p></div>
                                </form>
                                <a href="login.php" style="text-decoration: none">
                                    <div class="d-grid"><button class="btn btn-outline-primary btn-lg" id="loginButtonfromRegister">Masuk</button></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2022</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
