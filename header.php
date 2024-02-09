    <!-- Header -->
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero">
                        <img src="img/ppass.png" alt="">
                    </a>
                </div>
                <div class="login">
                    <a href="login.php"><i class="fa-regular fa-user"></i></a>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li><a href="login.php" data-after="Login">Login <i class="fa-regular fa-user"></a></i></li>
                        <li><a href="#hero" data-after="Home">Home</a></li>
                        <li><a href="#services" data-after="Service">Services</a></li>
                        <li><a href="#projects" data-after="Projects">Projects</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->

    <style>
        @import 'https://fonts.googleapis.com/css?family=Montserrat:300, 400, 700&display=swap';

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 10px;
            font-family: 'Montserrat', sans-serif;
            scroll-behavior: smooth;
        }

        a {
            text-decoration: none;
        }

        .container {
            min-height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        p {
            color: black;
            font-size: 1.4rem;
            margin-top: 5px;
            line-height: 2.5rem;
            font-weight: 300;
            letter-spacing: 0.05rem;
        }

        .section-title {
            font-size: 4rem;
            font-weight: 300;
            color: black;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 0.2rem;
            text-align: center;
        }

        .section-title span {
            color: rgb(220, 110, 20);
        }

        .cta {
            display: inline-block;
            padding: 10px 30px;
            color: white;
            background-color: transparent;
            border: 2px solid crimson;
            font-size: 2rem;
            text-transform: uppercase;
            letter-spacing: 0.1rem;
            margin-top: 30px;
            transition: 0.3s ease;
            transition-property: background-color, color;
        }

        .cta:hover {
            color: white;
            background-color: crimson;
        }

        .d h1 {
            font-size: 1.5rem;
            text-transform: uppercase;
            color: white;
        }

        .brand h1 span {
            color: yellow;
        }

        /* Header section */
        #header {
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100vw;
            height: auto;
        }

        #header .header {
            min-height: 8vh;
            background-color: transparent;
            transition: 0.10s ease background-color;
        }

        #header .nav-bar .brand img {
            width: 100px;
            padding-top: 10px;
        }

        #header .nav-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            height: 100%;
            max-width: 1300px;
            padding: 0 10px;
        }

        #header .nav-list ul {
            list-style: none;
            position: absolute;
            background-color: rgb(31, 30, 30);
            width: 100vw;
            height: 100vh;
            left: 100%;
            top: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 1;
            overflow-x: hidden;
            transition: 0.5s ease left;
        }

        #header .nav-list ul.active {
            left: 0%;
        }

        #header .nav-list ul a {
            font-size: 2.5rem;
            font-weight: 500;
            letter-spacing: 0.2rem;
            text-decoration: none;
            color: white;
            text-transform: uppercase;
            padding: 20px;
            display: block;
        }

        #header .nav-list ul a::after {
            content: attr(data-after);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            color: rgba(240, 248, 255, 0.021);
            font-size: 13rem;
            letter-spacing: 50px;
            z-index: -1;
            transition: 0.3s ease letter-spacing;
        }

        #header .nav-list ul li:hover a::after {
            transform: translate(-50%, -50%) scale(1);
            letter-spacing: initial;
        }

        #header .nav-list ul li:hover a {
            color: rgb(220, 207, 20);
        }

        #header .hamburger {
            height: 60px;
            width: 60px;
            display: inline-block;
            border: 3px solid white;
            border-radius: 50%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 100;
            cursor: pointer;
            transform: scale(0.8);
            margin-right: 20px;
        }

        #header .hamburger .bar {
            height: 2px;
            width: 30px;
            position: relative;
            background-color: white;
            z-index: -1;
        }

        #header .hamburger .bar::after,
        #header .hamburger .bar::before {
            content: '';
            position: absolute;
            height: 100%;
            width: 100%;
            left: 0;
            background-color: white;
            transition: 0.3s ease;
            transition-property: top, bottom;
        }

        #header .hamburger .bar::after {
            top: 8px;
        }

        #header .hamburger .bar::before {
            bottom: 8px;
        }

        #header .hamburger.active .bar::before {
            bottom: 0;
        }

        #header .hamburger.active .bar::after {
            top: 0;
        }

        #header .login {
            font-size: 25px;
            height: 60px;
            width: 60px;
            display: inline-block;
            display: flex;
            border: 3px solid #fff;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transform: scale(0.8);
            top: 0px;
            left: 0px;
        }

        #header .login i {
            color: white;
        }

        #header .login:hover {
            cursor: pointer;
            color: #FFBD59;
        }

        /* End Header section */

        /* Hero Section */

        .slider-container {
            position: absolute;
            overflow: hidden;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            object-fit: cover;
            /* Set the desired width */
        }

        #hero .slider-container::after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            opacity: 0.2;
        }

        .slider {
            display: flex;
            transition: transform 1s ease;
        }

        .slide {
            flex: 0 0 100%;
        }

        .slide img {
            width: 100%;
            height: auto;
            display: block;
            /* Removes any extra space under images */
        }

        button i {
            display: flex;
            font-size: 30px;
        }

        button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: transparent;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            z-index: 1;
        }

        .prev {
            left: 0;
        }

        .next {
            right: 0;
        }

        /* End Hero Section */

        /* Services Section */
        #services .services {
            flex-direction: column;
            text-align: center;
            max-width: 1500px;
            margin: 0 auto;
            padding: 100px 0;
        }

        #services .service-top {
            max-width: 1000px;
            margin: 0 auto;
        }

        #services .service-bottom {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 50px;
        }

        #services .service-item {
            flex-basis: 80%;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            flex-direction: column;
            padding: 30px;
            border-radius: 10px;
            background-size: cover;
            margin: 10px 5%;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        #services .service-item::after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-image: linear-gradient(60deg, #000 0%, #000000 20%);
            opacity: 0.9;
            z-index: -1;
        }

        #services .service-bottom .icon {
            height: 80px;
            width: 80px;
            margin-bottom: 20px;
        }

        #services .service-item h2 {
            font-size: 2rem;
            color: white;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        #services .service-item p {
            color: white;
            text-align: left;
        }

        /* End Services Section */

        /* Projects section */
        #projects .projects {
            flex-direction: column;
            max-width: 1200px;
            margin: 0 auto;
            padding: 100px 0;
        }

        #projects .projects-header h1 {
            margin-bottom: 50px;
        }

        #projects .all-projects {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        #projects .project-item {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 80%;
            margin: 20px auto;
            overflow: hidden;
            border-radius: 10px;
        }

        #projects .project-info {
            padding: 30px;
            flex-basis: 50%;
            height: 100%;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            flex-direction: column;
            background-color: #000000;
            color: white;
        }

        #projects .project-info h1 {
            font-size: 4rem;
            font-weight: 500;
        }

        #projects .project-info h2 {
            font-size: 1.8rem;
            font-weight: 500;
            margin-top: 10px;
        }

        #projects .project-info p {
            color: white;
        }

        #projects .project-info a{
            color: white;
            padding-top: 30px;
            font-size: 2rem;
            text-transform: uppercase;
            font-weight: 700;
            transition: 0.1s;
        }
        

        #projects .project-info a:hover{
            color: #485563;
        }

        #projects .project-img {
            flex-basis: 50%;
            height: 300px;
            overflow: hidden;
            position: relative;
        }

        #projects .project-img:after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
            opacity: 0.7;
        }

        #projects .project-img img {
            transition: 0.3s ease transform;
        }

        #projects .project-item:hover .project-img img {
            transform: scale(1.1);
        }

        /* End Projects section */

        /* About Section */
        #about .about {
            flex-direction: column-reverse;
            text-align: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 100px 20px;
        }

        #about .col-left {
            width: 250px;
            height: 360px;
        }

        #about .col-right {
            width: 100%;
        }

        #about .col-right h2 {
            font-size: 1.8rem;
            font-weight: 500;
            letter-spacing: 0.2rem;
            margin-bottom: 10px;
        }

        #about .col-right p {
            margin-bottom: 20px;
        }

        #about .col-right .cta {
            color: black;
            margin-bottom: 50px;
            padding: 10px 20px;
            font-size: 2rem;
        }

        #about .col-left .about-img {
            height: 100%;
            width: 100%;
            position: relative;
            border: 10px solid white;
        }

        #about .col-left .about-img::after {
            content: '';
            position: absolute;
            left: -33px;
            top: 19px;
            height: 98%;
            width: 98%;
            border: 7px solid crimson;
            z-index: -1;
        }

        /* End About Section */

        /* contact Section */
        #contact .contact {
            flex-direction: column;
            max-width: 1200px;
            margin: 0 auto;
            width: 90%;
        }

        #contact .contact-items {
            /* max-width: 400px; */
            width: 100%;
        }

        #contact .contact-item {
            width: 80%;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            padding: 30px;
            margin: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            box-shadow: 0px 0px 18px 0 #0000002c;
            transition: 0.3s ease box-shadow;
        }

        #contact .contact-item:hover {
            box-shadow: 0px 0px 5px 0 #0000002c;
        }

        #contact .icon {
            width: 70px;
            margin: 0 auto;
            margin-bottom: 10px;
        }

        #contact .contact-info h1 {
            font-size: 2.5rem;
            font-weight: 500;
            margin-bottom: 5px;
        }

        #contact .contact-info h2 {
            font-size: 1.3rem;
            line-height: 2rem;
            font-weight: 500;
        }

        /*End contact Section */

        /* Footer */
        #footer {
            background-color: #000000;
        }

        #footer .footer {
            min-height: 200px;
            flex-direction: column;
            padding-top: 50px;
            padding-bottom: 10px;
        }

        #footer h2 {
            color: white;
            font-weight: 500;
            font-size: 1.8rem;
            letter-spacing: 0.1rem;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        #footer .social-icon {
            display: flex;
            margin-bottom: 30px;
        }

        #footer .social-item {
            height: 50px;
            width: 50px;
            margin: 0 5px;
        }

        #footer .social-item img {
            filter: grayscale(1);
            transition: 0.3s ease filter;
        }

        #footer .social-item:hover img {
            filter: grayscale(0);
        }

        #footer p {
            color: white;
            font-size: 1.3rem;
        }

        /* End Footer */

        /* Keyframes */
        @keyframes hamburger_puls {
            0% {
                opacity: 1;
                transform: scale(1);
            }

            100% {
                opacity: 0;
                transform: scale(1.4);
            }
        }

        @keyframes text_reveal_box {
            50% {
                width: 100%;
                left: 0;
            }

            100% {
                width: 0;
                left: 100%;
            }
        }

        @keyframes text_reveal {
            100% {
                color: white;
            }
        }

        @keyframes text_reveal_name {
            100% {
                color: crimson;
                font-weight: 500;
            }
        }

        

        /* End Keyframes */

        @media (max-width: 768px) {
            #hero .slider #image-1 {
                content: url(img/portrait-bg1.png);
            }
            #hero .slider #image-2 {
                content: url(img/bg4.jpg);
            }
            #hero .slider #image-3 {
                content: url(img/bg6.jpg);
            }
        }

        @media (min-width: 1612px){
            #hero .slider #image-1 {
                content: url(img/portrait-bg1.png);
            }
        }
        


        /* Media Query For Tablet */
        @media only screen and (min-width: 768px) {
            .cta {
                font-size: 2.5rem;
                padding: 20px 60px;
            }

            h1.section-title {
                font-size: 6rem;
            }

            /* Hero */
            #hero h1 {
                font-size: 7rem;
            }

        

            /* End Hero */

            /* Services Section */
            #services .service-bottom .service-item {
                flex-basis: 45%;
                margin: 2.5%;
            }

            /* End Services Section */

            /* Project */
            #projects .project-item {
                flex-direction: row;
            }

            #projects .project-item:nth-child(even) {
                flex-direction: row-reverse;
            }

            #projects .project-item {
                height: 400px;
                margin: 0;
                width: 100%;
                border-radius: 0;
            }

            #projects .all-projects .project-info {
                height: 100%;
            }

            #projects .all-projects .project-img {
                height: 100%;
            }

            /* End Project */

            /* About */
            #about .about {
                flex-direction: row;
            }

            #about .col-left {
                width: 600px;
                height: 400px;
                padding-left: 60px;
            }

            #about .about .col-left .about-img::after {
                left: -45px;
                top: 34px;
                height: 98%;
                width: 98%;
                border: 10px solid crimson;
            }

            #about .col-right {
                text-align: left;
                padding: 30px;
            }

            #about .col-right h1 {
                text-align: left;
            }

            /* End About */

            /* contact  */
            #contact .contact {
                flex-direction: column;
                padding: 100px 0;
                align-items: center;
                justify-content: center;
                min-width: 20vh;
            }

            #contact .contact-items {
                width: 100%;
                display: flex;
                flex-direction: row;
                justify-content: space-evenly;
                margin: 0;
            }

            #contact .contact-item {
                width: 30%;
                margin: 0;
                flex-direction: row;
            }

            #contact .contact-item .icon {
                height: 100px;
                width: 100px;
            }

            #contact .contact-item .icon img {
                object-fit: contain;
            }

            #contact .contact-item .contact-info {
                width: 100%;
                text-align: left;
                padding-left: 20px;
            }

            /* End contact  */
        }

        /* End Media Query For Tablet */


        /* Media Query For Desktop */
        @media only screen and (min-width: 1200px) {

            /* header */

            /* End header */

            #services .service-bottom .service-item {
                flex-basis: 22%;
                margin: 1.5%;
            }
        }

        /* End  Media Query For Desktop */
    </style>