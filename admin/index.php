<?php
    include '../db.php';
    include 'admin.php';
    include 'sess.php';
    if(isset($_SESSION['LGI'])){
        if($_SESSION['LGI'] == 1){
            header( "Location: page.php?q=0" );
        }
    }
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $_SESSION['pid'] = $id;
        $pass = $_POST['pass'];
        $a = new Admin();
        $ret = $a->auth($con, $id, $pass);
        if($ret == 1){
            if(strtolower($id) == "admin"){
                header( "Location: changecredential.php" );

            }else{
                $_SESSION['LGI'] = 1;
                header( "Location: page.php?q=0" );
            }
        }else{

        }
    }else{

    }

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta property="og:image" content="share.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../images/icons/favicon.png"/>
    <title>Wis Admin - Women In Statistics Login</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="" style="background-color: #D492E8;">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#" style="border-radius: 500px; overflow: hidden; width: 200px; height: 200px;">
                        <img class="align-content" src="./../logo.png" style="width: 250px;height: auto; border-radius: 400px;"   alt="">
                    </a>
                </div>
                <div class="login-form">
                    <div class="row" style="justify-content: center; align-items: center;s">
                        <p class="" style="display: flex; justify-content: center; align-items: center;"><img src="../txt wis.png" class="centered" style=""></p>
                    </div>
                    <form action="index.php" method="post">
                        
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name='id' placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" style="background-color: #D492E8;" class="btn btn-flat m-b-30 m-t-30"><span style="color: white">Sign in</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
