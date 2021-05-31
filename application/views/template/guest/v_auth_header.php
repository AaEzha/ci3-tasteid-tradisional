<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="icon" type="image/png" href="<?= base_url(); ?>img/TasteID_Logo_1.png">


    <title>Account</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
    <link href="<?= base_url(); ?>assets/sbadmin2/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/sbadmin2/css/sb-admin-2.css" rel="stylesheet">
    
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="<?= base_url(); ?>assets/front_footer/style.css">

</head>
    
    <style>
        /*=========================
          Icons
         ================= */
        * {
          margin: 0;
          padding: 0;
        }

        /* footer social icons */
        .footer {
          background-color: #FAFCFF;
          padding: 20px 0;
          text-align: center;
        }

        ul.social-network {
          list-style: none;
          display: inline;
          margin: auto;
        }
        ul.social-network li {
          display: inline;
          margin: 0 10px;
        }

        /* footer social icons */
        .social-network a.icoFacebook:hover {
          background-color: #3B5998;
        }
        .social-network a.icoTwitter:hover {
          background-color: #33ccff;
        }
        .social-network a.icoMedium:hover {
          background-color: #00AB6C;
        }
        .social-network a.icoQuora:hover {
          background-color: #AA2200;
        }
        .social-network a.icoLinkedin:hover {
          background-color: #007bb7;
        }
        .social-network a.icoInstagram:hover {
          background: #f09433;
          background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
          background: -webkit-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
          background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#f09433", endColorstr="#bc1888", GradientType=1);
        }

        .social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i, .social-network a.icoMedium:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
          color: #fff;
        }

        .social-circle li a {
          display: inline-block;
          position: relative;
          margin: 0 auto 0 auto;
          -moz-border-radius: 50%;
          -webkit-border-radius: 50%;
          border-radius: 50%;
          text-align: center;
          width: 60px;
          height: 60px;
          font-size: 22px;
        }

        .social-circle li i {
          margin: 0;
          line-height: 60px;
          text-align: center;
        }

        .social-circle li a:hover i, .triggeredHover {
          -moz-transform: rotate(360deg);
          -webkit-transform: rotate(360deg);
          -ms--transform: rotate(360deg);
          transform: rotate(360deg);
          -webkit-transition: all 0.2s;
          -moz-transition: all 0.2s;
          -o-transition: all 0.2s;
          -ms-transition: all 0.2s;
          transition: all 0.2s;
        }

        .social-circle i {
          color: #fff;
          -webkit-transition: all 0.8s;
          -moz-transition: all 0.8s;
          -o-transition: all 0.8s;
          -ms-transition: all 0.8s;
          transition: all 0.8s;
        }

        .social-circle a {
          background-color: #CCD8EA;
        }

        @media screen and (max-width: 500px) {
          ul.social-network li {
            display: inline;
            margin: 0 5px;
          }
        }
        @media screen and (max-width: 450px) {
          ul.social-network li {
            display: inline;
            margin: 0 5px;
          }

          .social-circle li a {
            display: inline-block;
            position: relative;
            margin: 0 auto 0 auto;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            text-align: center;
            width: 40px;
            height: 40px;
            font-size: 16px;
          }

          .social-circle li i {
            margin: 0;
            line-height: 40px;
            text-align: center;
          }
        }
        @media screen and (max-width: 350px) {
          ul.social-network li {
            display: inline;
            margin: 0 2px;
          }

          .social-circle li a {
            display: inline-block;
            position: relative;
            margin: 0 auto 0 auto;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            text-align: center;
            width: 40px;
            height: 40px;
            font-size: 16px;
          }

          .social-circle li i {
            margin: 0;
            line-height: 40px;
            text-align: center;
          }
        }
    
    
    </style>

<body class="bg-gradient-primary">