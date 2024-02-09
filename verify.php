<?php

require "mail.php";
require "functions.php";
require "database/dbcon.php";
check_login();

$errors = array();

if ($_SERVER['REQUEST_METHOD'] == "GET" && !check_verified()) {

    //send email
    $vars['code'] =  rand(100000, 999999);
    //save to database
    $vars['expires'] = (time() + (60 * 10));
    $vars['email'] = $_SESSION['USER']->email;

    $query = "insert into verify (code,expires,email) values (:code,:expires,:email)";
    database_run($query, $vars);

    $message = "<html>
    <section style='background-color: #FAF9F6'>
    <body style='margin: auto; background-color: #1C2120; max-width: 500px; border-radius: 15px'>
        <div class='container' style='padding: 10px 10px'>
            <div class'hero'>
                <img src='https://cdn.fbsbx.com/v/t59.2708-21/407249382_714157913682028_1393069414030809998_n.gif?_nc_cat=109&ccb=1-7&_nc_sid=cf94fc&_nc_eui2=AeHrFZGk5oBMWkZV85E6IOb20aJzjqZEu9LRonOOpkS70ubjBIvT7Ql9hcwOtE_mDQW9grSRuFVuc1rKXjMK0-0y&_nc_ohc=3zmDk4nLwMsAX_h-6BD&_nc_ht=cdn.fbsbx.com&oh=03_AdTLujTE4PXC_Y1uk3OHvswpkdv1Jnx7cRZbyE24w2vDfQ&oe=656D5DB1' style='width: 200px; margin-top: 30px'>
            </div>
        </div>
        <div class='wrapper' style='margin: 10px auto; background-color: #fff; max-width: 500px; height: 450px;'>

            <h1 style='font-style: italic; text-align: center; padding-top: 40px; font-size: 30px; '>OTP Verification</h1>
            <br>
            <h1 style='letter-spacing: 5px; text-align: center; font-size: 40px;'>" . $vars['code'] . "</h1>
            <br><br><br>
            <h1>Hi, </h1><p style='text-align: center;'> ". $vars['email'] ."</p>
        </div>
    </body>
    </section>
    </html>
    ";

    $subject = "You Received OTP Verification!";
    $recipient = $vars['email'];
    send_mail($recipient, $subject, $message);
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (!check_verified()) {

        $query = "select * from verify where code = :code && email = :email";
        $vars = array();
        $vars['email'] = $_SESSION['USER']->email;
        $vars['code'] = $_POST['code'];
        $row = database_run($query, $vars);

        if (is_array($row)) {
            $row = $row[0];
            $time = time();

            if ($row->expires > $time) {

                $id = $_SESSION['USER']->id;
                $query = "update users set email_verified = email where id = '$id' limit 1";

                database_run($query);

                header("Location: user/index.php");
                die;
            } else {
                echo "Code expired";
            }
        } else {
            echo "wrong code";
        }
    } else {
        echo "You're already verified";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="img/icon4.png" type="image/x-icon">
    <title>Code Verification - Ppass</title>
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
                                    <h3 class="text-center font-weight-light my-4">Code Verification</h3>
                                </div>
                                <div class="card-body ">
                                    <div class="small mb-3 text-muted">Hi, <a class="text-black fst-italic"><?= $_SESSION['USER']->email ?></a> We've sent a verification code in this account. <span class="fw-bold">Kindly check you Gmail Accoun and enter the code</span></div>
                                    <form method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control fw-bold" id="inputEmail" type="text" name="code" placeholder="name@example.com" />
                                            <label for="inputOtp">Code Verification</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between ">
                                            <a href="verify.php" class="small">Click to resend code</a>
                                            <button class="btn btn-primary" type="submit">SUBMIT</button>
                                        </div>
                                    </form>
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
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>