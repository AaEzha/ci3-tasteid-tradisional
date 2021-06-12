<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="img/TasteID_Logo_1.png">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>resep.css">

    <title><?= $title ?> | TasteID</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link href="css/templatemo-style.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="./style.css">

    <style>
        .container-main {
            width: 680px;
        }

        .bs-example {

            margin: 20px;
        }

        .carousel-item {
            height: 65vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            opacity: 0.80;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            background-color: #ecf9ff;
        }

        .main {
            max-width: 1200px;
            margin: 0 auto;
        }

        img {
            height: auto;
            max-width: 100%;
            vertical-align: middle;
        }

        .btn2 {
            color: red;
            padding: 10px 24px;
            font-size: 14px;
            text-transform: uppercase;
            border-radius: 4px;
            font-weight: 400;
            display: block;
            width: 100%;
            cursor: pointer;
            border: 1px solid red;
            background: transparent;
        }

        .btn2:hover {
            background-color: #f44336;
            color: white;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .cards_item {
            display: flex;
            padding: 1rem;
        }

        @media (min-width: 40rem) {
            .cards_item {
                width: 50%;
            }
        }

        @media (min-width: 56rem) {
            .cards_item {
                width: 33.3333%;
            }
        }

        .card {
            background-color: white;
            border-radius: 0.25rem;
            box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .card_content {
            padding: 1rem;
            background: white;
        }

        .card_title {
            color: black;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0px;
        }

        .card_text {
            color: black;
            font-size: 0.875rem;
            line-height: 1.5;
            margin-bottom: 1.25rem;
            font-weight: 400;
        }

        .made_by {
            font-weight: 400;
            font-size: 13px;
            margin-top: 35px;
            text-align: center;
        }

        a:link {
            color: red;
            background-color: transparent;
            text-decoration: none;
        }


        /*-------------------------------------*/

        .cf:before,
        .cf:after {
            content: "";
            display: table;
        }

        .cf:after {
            clear: both;
        }

        .cf {
            zoom: 1;
        }

        /*-------------------------------------*/

        .form-wrapper {
            width: 450px;
            padding: 5px;
            margin: 10px auto 5px auto;
            background: #444;
            background: rgba(0, 0, 0, .2);
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            border-radius: 10px;
            -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .4) inset, 0 1px 0 rgba(255, 255, 255, .2);
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .4) inset, 0 1px 0 rgba(255, 255, 255, .2);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .4) inset, 0 1px 0 rgba(255, 255, 255, .2);
        }

        .form-wrapper input {
            width: 330px;
            height: 40px;
            padding: 10px 5px;
            float: left;
            font: bold 15px 'lucida sans', 'trebuchet MS', 'Tahoma';
            border: 0;
            background: #eee;
            -moz-border-radius: 3px 0 0 3px;
            -webkit-border-radius: 3px 0 0 3px;
            border-radius: 3px 0 0 3px;
        }

        .form-wrapper input:focus {
            outline: 0;
            background: #fff;
            -moz-box-shadow: 0 0 2px rgba(0, 0, 0, .8) inset;
            -webkit-box-shadow: 0 0 2px rgba(0, 0, 0, .8) inset;
            box-shadow: 0 0 2px rgba(0, 0, 0, .8) inset;
        }

        .form-wrapper input::-webkit-input-placeholder {
            color: #999;
            font-weight: normal;
            font-style: italic;
        }

        .form-wrapper input:-moz-placeholder {
            color: #999;
            font-weight: normal;
            font-style: italic;
        }

        .form-wrapper input:-ms-input-placeholder {
            color: #999;
            font-weight: normal;
            font-style: italic;
        }

        .form-wrapper button {
            overflow: visible;
            position: relative;
            float: right;
            border: 0;
            padding: 0;
            cursor: pointer;
            height: 40px;
            width: 110px;
            font: bold 15px/40px 'lucida sans', 'trebuchet MS', 'Tahoma';
            color: #fff;
            text-transform: uppercase;
            background: #d83c3c;
            -moz-border-radius: 0 3px 3px 0;
            -webkit-border-radius: 0 3px 3px 0;
            border-radius: 0 3px 3px 0;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, .3);
        }

        .form-wrapper button:hover {
            background: #e54040;
        }

        .form-wrapper button:active,
        .form-wrapper button:focus {
            background: #c42f2f;
        }

        .form-wrapper button:before {
            content: '';
            position: absolute;
            border-width: 8px 8px 8px 0;
            border-style: solid solid solid none;
            border-color: transparent #d83c3c transparent;
            top: 12px;
            left: -6px;
        }

        .form-wrapper button:hover:before {
            border-right-color: #e54040;
        }

        .form-wrapper button:focus:before {
            border-right-color: #c42f2f;
        }

        .form-wrapper button::-moz-focus-inner {
            border: 0;
            padding: 0;
        }

        kanan {
            text-align: right;
        }



        .footer-distributed {
            background-color: #e02d1b;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: normal 16px sans-serif;
            padding: 20px;
        }

        .footer-distributed .footer-left p {
            color: white;
            font-size: 14px;
            margin: 0;
        }

        /* Footer links */

        .footer-distributed p.footer-links {
            font-size: 18px;
            font-weight: bold;
            color: #ffffff;
            margin: 0 0 10px;
            padding: 0;
            transition: ease .25s;
        }

        .footer-distributed p.footer-links a {
            display: inline-block;
            line-height: 1.8;
            text-decoration: none;
            color: inherit;
            transition: ease .25s;
        }

        .footer-distributed .footer-links a:before {
            content: "·";
            font-size: 20px;
            left: 0;
            color: #fff;
            display: inline-block;
            padding-right: 5px;
        }

        .footer-distributed .footer-links .link-1:before {
            content: none;
        }

        .footer-distributed .footer-right {
            float: right;
            margin-top: 6px;
            max-width: 180px;
        }

        .footer-distributed .footer-right a {
            display: inline-block;
            width: 35px;
            height: 35px;
            background-color: #e02d1b;
            border-radius: 2px;
            font-size: 28px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;
            margin-left: 3px;
            transition: all .25s;
        }

        .footer-distributed .footer-right a:hover {
            transform: scale(1.1);
            -webkit-transform: scale(1.1);
        }

        .footer-distributed p.footer-links a:hover {
            text-decoration: underline;
        }

        /* Media Queries */

        @media (max-width: 600px) {

            .footer-distributed .footer-left,
            .footer-distributed .footer-right {
                text-align: center;
            }

            .footer-distributed .footer-right {
                float: none;
                margin: 0 auto 20px;
            }

            .footer-distributed .footer-left p.footer-links {
                line-height: 1.8;
            }
        }


        .blog-card {
            display: flex;
            flex-direction: column;
            margin: 1rem auto;
            box-shadow: 0 3px 7px -1px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.6%;
            background: #fff;
            line-height: 1.4;
            font-family: sans-serif;
            border-radius: 5px;
            overflow: hidden;
            z-index: 0;
        }

        .blog-card a {
            color: inherit;
        }

        .blog-card a:hover {
            color: #e54040;
        }

        .blog-card:hover .photo {
            transform: scale(1.3) rotate(3deg);
        }

        .blog-card .meta {
            position: relative;
            z-index: 0;
            height: 200px;
        }

        .blog-card .photo {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-size: cover;
            background-position: center;
            transition: transform 0.2s;
        }

        .blog-card .details,
        .blog-card .details ul {
            margin: auto;
            padding: 0;
            list-style: none;
        }

        .blog-card .details {
            position: absolute;
            top: 0;
            bottom: 0;
            left: -100%;
            margin: auto;
            transition: left 0.2s;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 10px;
            width: 100%;
            font-size: 0.9rem;
        }

        .blog-card .details a {
            -webkit-text-decoration: dotted underline;
            text-decoration: dotted underline;
        }

        .blog-card .details ul li {
            display: inline-block;
        }

        .blog-card .details .author:before {
            font-family: FontAwesome;
            margin-right: 10px;
            content: "";
        }

        .blog-card .details .date:before {
            font-family: FontAwesome;
            margin-right: 10px;
            content: "";
        }

        .blog-card .details .tags ul:before {
            font-family: FontAwesome;
            content: "";
            margin-right: 10px;
        }

        .blog-card .details .tags li {
            margin-right: 2px;
        }

        .blog-card .details .tags li:first-child {
            margin-left: -4px;
        }

        .blog-card .description {
            padding: 1rem;
            background: #fff;
            position: relative;
            z-index: 1;
        }

        .blog-card .description h1,
        .blog-card .description h2 {
            font-family: Poppins, sans-serif;
        }

        .blog-card .description h1 {
            line-height: 1;
            margin: 0;
            font-size: 1.7rem;
        }

        .blog-card .description h2 {
            font-size: 1rem;
            font-weight: 300;
            text-transform: uppercase;
            color: #a2a2a2;
            margin-top: 5px;
        }

        .blog-card .description .read-more {
            text-align: right;
        }

        .blog-card .description .read-more a {
            color: #e54040;
            display: inline-block;
            position: relative;
        }

        .blog-card .description .read-more a:after {
            content: "";
            font-family: FontAwesome;
            margin-left: -10px;
            opacity: 0;
            vertical-align: middle;
            transition: margin 0.3s, opacity 0.3s;
        }

        .blog-card .description .read-more a:hover:after {
            margin-left: 5px;
            opacity: 1;
        }

        .blog-card p {
            position: relative;
            margin: 1rem 0 0;
        }

        .blog-card p:first-of-type {
            margin-top: 1.25rem;
        }

        .blog-card p:first-of-type:before {
            content: "";
            position: absolute;
            height: 5px;
            background: #e54040;
            width: 35px;
            top: -0.75rem;
            border-radius: 3px;
        }

        .blog-card:hover .details {
            left: 0%;
        }

        @media (min-width: 640px) {
            .blog-card {
                flex-direction: row;
                max-width: 700px;
            }

            .blog-card .meta {
                flex-basis: 40%;
                height: auto;
            }

            .blog-card .description {
                flex-basis: 60%;
            }

            .blog-card .description:before {
                transform: skewX(-3deg);
                content: "";
                background: #fff;
                width: 30px;
                position: absolute;
                left: -10px;
                top: 0;
                bottom: 0;
                z-index: -1;
            }

            .blog-card.alt {
                flex-direction: row-reverse;
            }

            .blog-card.alt .description:before {
                left: inherit;
                right: -10px;
                transform: skew(3deg);
            }

            .blog-card.alt .details {
                padding-left: 25px;
            }
        }
    </style>

</head>

<body>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div>
	<?php $this->load->view('template/front/menu'); ?>
    </div>

    <main class="main-1">
        <div class="container-main">
            <div class="navbar-conten">
                <a href=""><i class="large material-icons">bookmark_border</i></a>
                <a href=""><i class="large material-icons">share</i></a>
                <a href=""><i class="large material-icons">print</i></a>
            </div>
            <div class="resep-tagline">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.-hXBSCkbP4knvcXN7XqZHwHaEK%26pid%3DApi&f=1"
                    alt="">
                <div class="akun">
                    <h1>Walnut Pancakes</h1>
                    <div class="bio">
                        <div class="frame">
                            <img src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2019/04/attachment_85538842-700x700.jpeg?auto=format&q=60&fit=max&w=930"
                                alt="">
                        </div>
                        <div class="username">
                            <span>Delicious Homecooking</span>
                            <div class="location">
                                <i class="large material-icons">location_on</i>
                                <span>Surabaya</span>
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Accusantium, eveniet alias explicabo saepe rem recusandae veritatis sunt ipsa cupiditate
                            sint facere,
                            neque<span id="dots">...</span><span id="more" class="display">et iste vero animi quas a,
                                sed perspiciatis? Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Modi ut nisi quos nam similique quisquam esse quam nostrum odit veritatis,
                                porro, libero assumenda. Suscipit optio ad inventore nihil adipisci delectus!</span></p>
                        <div class="more"><a href="" class="morebtn">lihat selengkapnya</a></div>
                        <div class="hastag display">
                            <a href="">#pancakesenak</a>
                            <a href="">#pancakesmurah</a>
                            <a href="">#pancakeshits</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="resep-item">
                <h2>Bahan :</h2>
                <ul>
                    <li><strong>250 g </strong>tepung terigu bogasari</li>
                    <li><strong>1/2 sdt </strong>garam</li>
                    <li><strong>1 buah </strong>telur ayam</li>
                    <li><strong>350 ml </strong>susu cair</li>
                </ul>
            </div>
            <div class="step">
                <h2>Langkah</h2>
                <!-- langkah ke 1 -->
                <div class="step-list">
                    <div class="step-title">
                        <span class="number">
                            <span>1</span>
                        </span>
                        <div class="tit">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati totam, ea alias
                                accusantium explicabo autem minima accusamus consequatur repellendus cupiditate ab.
                                Officia nihil tempore quo. Nihil consequuntur quod accusantium quas.</p>
                        </div>
                    </div>
                    <div class="step-img">
                        <img src="https://images.news18.com/ibnlive/uploads/2020/03/ramsay.jpg?impolicy=website&width=534&height=356"
                            alt="">
                        <img src="https://images.news18.com/ibnlive/uploads/2020/03/ramsay.jpg?impolicy=website&width=534&height=356"
                            alt="">
                        <img src="https://images.news18.com/ibnlive/uploads/2020/03/ramsay.jpg?impolicy=website&width=534&height=356"
                            alt="">
                    </div>
                </div>
                <!-- langkah ke 2 -->
                <div class="step-list">
                    <div class="step-title">
                        <span class="number">
                            <span>2</span>
                        </span>
                        <div class="tit">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati totam, ea alias
                                accusantium explicabo autem minima accusamus consequatur repellendus cupiditate ab.
                                Officia nihil tempore quo. Nihil consequuntur quod accusantium quas.</p>
                        </div>
                    </div>
                </div>
                <!-- langkah ke 3 -->
                <div class="step-list">
                    <div class="step-title">
                        <span class="number">
                            <span>3</span>
                        </span>
                        <div class="tit">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati totam, ea alias
                                accusantium explicabo autem minima accusamus consequatur repellendus cupiditate ab.
                                Officia nihil tempore quo. Nihil consequuntur quod accusantium quas.</p>
                        </div>

                    </div>
                    <div class="step-img">
                        <img src="https://images.news18.com/ibnlive/uploads/2020/03/ramsay.jpg?impolicy=website&width=534&height=356"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer-distributed">
        <div class="footer-right">
            <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
        </div>

        <div class="footer-left">

            <p class="footer-links">
                <a class="link-1" href="#">Tentang TasteID</a>
                <a href="#">Hubungi Kami</a>
            </p>

            <p>TasteID &copy; 2021</p>
        </div>

    </footer>
    <script>
        const hastag = document.querySelector('.hastag');
        const more = document.querySelector('#more');
        const dots = document.querySelector('#dots');
        const btn = document.querySelector('.morebtn');

        btn.addEventListener('click', e => {
            e.preventDefault();
            dots.classList.toggle('display');
            more.classList.toggle('display');
            hastag.classList.toggle('display1');
            btn.classList.toggle('display');
        })
    </script>
   
</body>

</html>
