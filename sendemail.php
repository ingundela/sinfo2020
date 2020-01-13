<?php
    $msg = "";
  use PHPMailer\PHPMailer\PHPMailer;
  include_once "PHPMailer/PHPMailer.php";
  include_once "PHPMailer/Exception.php";
  include_once "PHPMailer/SMTP.php";

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (isset($_FILES['attachment']['name']) && $_FILES['attachment']['name'] != "") {
      $file = "attachment/" . basename($_FILES['attachment']['name']);
      move_uploaded_file($_FILES['attachment']['tmp_name'], $file);
    } else
      $file = "";

    $mail = new PHPMailer();

//if we want to send via SMTP
    $mail->Host = "smtp.gmail.com";
    //$mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "senaidbacinovic@gmail.com";
    $mail->Password = "5C1bcnPkDI4Wd%#";
    $mail->SMTPSecure = "ssl"; //TLS
    $mail->Port = 465; //587
    $mail->addAddress('info@sinfomoz.com');
    $mail->name = $name;
    $mail->setFrom($email, $name);
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = $message;
    $mail->addAttachment($file);

    if ($mail->send())
        $msg = "Your email was sent. Thank you!";
    else
        $msg = "Please try again!";

    unlink($file);
  }
?>
<!DOCTYPE html>
<html lang="pt-pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Google verification - Indixing website-->
    <title>Contact us | Sinfo Lda.</title>
    <meta name="description" content="Discover the range of simple, dependable and secure custom IT networking and support solutions Unified provides for small to medium sized businesses.">
  <link rel="canonical" href="https://www.sinfomoz.com/">
  <meta name="keywords" content="Discover the range of simple, dependable and secure custom IT networking and support solutions Sinfo provides for small to medium sized businesses. IT Solutions, Technical support, Security Systems, Equipment Rental, Networking Systems, Printing services">
  <link rel="canonical" href="https://www.sinfomoz.com/">
  <link rel="alternate" href="https://www.sinfomoz.com/">
  <meta property="og:title" content="Sinfo Lda. - Making IT Easy">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.sinfomoz.com/">
  <meta property="og:site_name" content="Sinfo Lda.">
    <link href="css/fa-light.min.css" rel="stylesheet" />
    <link href="css/fontawesome-all.min.css" rel="stylesheet" />
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body id="home">
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light">
            <div class="container-fluid wild">
                <a class="navbar-brand" href="index.html"><img src="img/sinfo-logo.jpg" alt=""></a>
                <button class="navbar-toggler compressed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="about.html">who we are</a>
                        </li>
                        <li class=" nav-item dropdown"><a class="nav-link" href="#" title="services">what we do
                                <span class="footer_arrow_down"><i class="far fa-chevron-down"></i></span></a>
                            <div class="dropdown-content">
                                <a href="network.html"><span class="arrow-right"><i class="fal fa-angle-right"></i></span>network systems</a>
                                <a href="security.html"><span class="arrow-right"><i class="fal fa-angle-right"></i></span>security systems</a>
                                <a href="equipment.html"><span class="arrow-right"><i class="fal fa-angle-right"></i></span>IT equipment sales &amp;
                                    rental</a>
                                <a href="technical.html"><span class="arrow-right"><i class="fal fa-angle-right"></i></span>technical assistance</a>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link get_touch" href="sendemail.php">contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="about-section">
            <div class="container-fluid wild">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about_content p-0">
                            <h6><i class="fas fa-home"></i> / Pages / What we do</h6>
                            <h1 class="all_other_h1">contact us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="contact_content_top justify-content-centerj text-center">
        <div class="container-fluid wild">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h3 class="contact_content_top_h2">We'd Love To Hear From You</h3>
                    <p>If you have any questions or comments, please fill out the brief form below and one of our friendly representatives will be in touch.</p>
                </div>
            </div>
        </div>
    </div>
      
      <!--contact form-->
      <section class="contactForm section_space justify-content-center">
        <div class="container ">
          <div class="row alighn align-items-center">
            <div class="col-lg-4 col-md-12">
              <h4 class="contact_content_top_h2">Contact Information</h4>
              <p>Bairro da Malhangalene "B", Rua Reinata Sadimba, número 96, 2o Andar, Quarteirão 42</p><br>
              <p class="email_style">info@sinfomoz.com</p><br>
              <p><span class="call_today">call us today: </span>+258 84xx xxxx</call>
              
            </div>
            <div class="col-lg-8 col-md-12">

                      <?php if ($msg != "") echo "$msg<br><br>"; ?>

              <div class="contact_form">
                <form method="post" action="sendemail.php" enctype="multipart/form-data">
                <input class="form-control" name="name" placeholder="Full Name..."><br>
                <input class="form-control" name="subject" placeholder="Subject..."><br>
                <input class="form-control" name="email" type="email" placeholder="Email..."><br>
                <textarea placeholder="Message..." class="form-control" name="message"></textarea><br>
                <input id="sendBtn" class="btn btn_services" name="submit" type="submit" value="Enviar Email">
              </form>
              </div>
            </div>
          </div>
            </div>
        </div>
      </section>
      <!--FOOTER LAST-->
   <section class="footer_content section_space">
        <div class="container-fluid wild">
          <div class="row">
            <div class="col-lg-4">
              <div class="footer_col">
                <h4>where to find us</h4>
                <ul class="list-unstyled">
                  <li>Rua Reinata Sadimba N° 96, 2° andar, quarteirão 42<br> Bairro da Malhangalene "B" | Maputo - Moçambique</li><br>
                  <li>Mobile: +258 86 019 5434</li>
                  <li>Email: info@sinfomoz.com</li>
                </ul>
              </div>
            </div>
    
            <div class="col-lg-4">
              <div class="footer_col">
                <h4>services</h4>
                <ul class="list-unstyled">
                  <li><a href="#">Network Systems</a></li>
                  <li><a href="#">Security Systems</a></li>
                  <li><a href="#">IT Equipment Sales & Rental</a></li>
                  <li><a href="#">Technical Support</a></li>

                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="footer_col">
                <h4>follow us:</h4>
              <ul class="list-unstyled social">
              <li><a href="#" target="_blank"> <i class="fab fa-linkedin-in"></i></a></li>
              <li><a href="#"  target="_blank"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"  target="_blank"><i
                    class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"  target="_blank"><i class="fab fa-twitter"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <div class="copyright">
        Copyright &copy; 2019 <span class="copyright-name">SINFO, Lda.</span> All rights Reserved.
        Designed &amp; Developed by <a href="https://www.sbmozmedia.com/" target="_blank" class="sb">SB-MOZMEDIA</a>
      </div>
       






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/main.js"></script> 
    
    
    
  </body>
</html>
