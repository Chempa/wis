<?php
$tergrad = "https://chat.whatsapp.com/GJ6yeSC8smI5rfXE1B34gM";
$terunder = "https://chat.whatsapp.com/IvYeXR7du2T48OaTVPtONj";
$shs = "https://chat.whatsapp.com/GeqBLPA46oACCnuP9DuiNj";
$link = "";
if(isset($_GET["verify"])){
  if($_GET['code'] == "0"){
    $link = $tergrad;;
  }else if($_GET['code']=="1"){
    $link = $terunder;
  }else if($_GET['code']=="2"){
    $link = $shs;
  }else{

  }
}
?>
  

<!DOCTYPE html>
<html>
<head>
    <title>WIStats - social</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway+Dots" rel="stylesheet" type="text/css"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        li div {
            display: flex;
            justify-content: center;
            align-items: center
        }

        html,
        body {
            margin: 0;
            background-color: #D492E8;
            font-family: 'Raleway Dots', sans-serif;
        }

        #services {
            padding: 0;
            list-style-type: none;
        }

        section #services h2 {
            margin: 80px 0px 40px;
            color: #fff;
            font-size: 2.4em;
            text-transform: uppercase;
            text-align: center;
        }

        section #services li {
            width: 120px;
            height: 140px;
            display: inline-block;
            margin: 20px;
            list-style: none;
        }

        section #services li div {
            width: 120px;
            height: 120px;
            color: #74d4b3;
            font-size: 3.4em;
            text-align: center;
            line-height: 120px;
            background-color: #fff;
            transition: all 0.5s ease;
        }

        section #services li a {
            color: #D492E8;
        }

        section #services li div:hover {
            transform: rotate(360deg);
            border-radius: 100px;
        }

        section #services li span {
            width: 120px;
            height: 20px;
            display: block;
            padding: 15px 0px;
            color: #000000;
            text-align: center;
            font-family: Poppins-Regular;
            src: url('../fonts/poppins/Poppins-Regular.ttf');
        }
    </style>
</head>

<body>
    <div class="mb-3 mt-2" style=" text-align: center;">
        <img class="align-content" src="./logo.png" style="width: 250px;height: auto; border-radius: 400px;" alt="">
    </div>
    <div class="container ">
        <div class="jumbotron bg-white">
            <div class="row" style="justify-content: center; align-items: center;s">
                <p class="" style="display: flex; justify-content: center; align-items: center;"><img src="./txt wis.png" class="centered" style=""></p>
            </div>
            <p class="text-center">You are welcome to Women in Statistics - Ghana Club ( WIStats-GH )<br>
                This link is strictly for females in Statistics and Affiliates.<br>
                Please do not share link.</p>
                <div class="col-12 text-center"><a class="btn text-white" href="<?php echo $link; ?>" style="background-color: #D492E8;"> <i class="fa fa-plus" style=""></i> Click to join a WIStats Club<br> on Whatsapp</a></div>
                <div class="col-12 text-center mt-3"><a class="btn text-white" href="tel:+233503432856" style="background-color: #D492E8;"> <i class="fa fa-dollar"></i> Donate via MOMO<br>+233503432856</a></div>
        </div>
    </div>
    <section>

        <ul id="services" style="text-align: center;">
            <!-- <h2>Fancy Colorlib Social</h2> -->

            <li>
                <div class="facebook bg-gradient-white">
                    <a href="https://web.facebook.com/wisstatisticsGhana/">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </div>
                <span>Facebook</span>
            </li>
            <li>
                <div class="twitter">
                    <a href="https://twitter.com/wis_Ghana?s=08">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </div>
                <span>Twitter</span>
            </li> 
            <li>
                <div class="instagram">
                    <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwi4v9eTrZLnAhX3WRUIHcCPBYgQFjAAegQIAhAB&url=https%3A%2F%2Fgh.linkedin.com%2Fin%2Fwomen-in-statistics-ghana-276a66197&usg=AOvVaw0wCCqvC7J01T_gmQLKP10C">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </div>
                <span>Linkedin</span>
            </li>
            <li>
                <div class="github">
                    <a href="<?php echo $link; ?>">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    </a>
                </div>
                <span>Whatsapp</span>
            </li>
            <li>
                <div class="github">
                    <a href="#">
                        <i class="fa fa-dollar" aria-hidden="true"></i>
                    </a>
                </div>
                <span>MTN MOMO +233559629317</span>
            </li>
            <li>
                <div class="github">
                    <a href="tel:+233503432856">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </a>
                </div>
                <span>Contact us</span>
            </li>
            <li>
                <div class="github">
                    <a href="mailto:women.statistics.ghana@gmail.com">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </a>
                </div>
                <span>Email</span>
            </li>
        </ul>
    </section>
    <script src="public/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="public/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="public/bootstrap/js/popper.js"></script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
