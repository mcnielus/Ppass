<?php

require "functions.php";
check_login();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Acoount Verification - Ppass</title>
    <link href="user/css/try.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../img/icon4.png" type="image/x-icon">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-dark">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="text-center mt-4">
                            <a href="index.php" class="text-center"><img src="img/ppass.png" alt="" style="width: 200px;"></a>
                        </div>
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Account Verification</h3>
                                </div>
                                <div class="card-body ">
                                    <div class="small mb-3 text-muted">Hi, <a class="text-black fst-italic"><?= $_SESSION['USER']->username ?></a> We've sent a verification code in this account, Kindly click the button</div>
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" disabled />
                                            <label for="inputEmail"><a href="#" class="text-black"><?= $_SESSION['USER']->email ?></a></label>
                                        </div>

                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <a class="small"></a>
                                        <a class="btn btn-primary" href="verify.php">GET CODE </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; <span class="fw-bold">Ppass </span>2023</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>