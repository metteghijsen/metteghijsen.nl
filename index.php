<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Mette Ghijsen</title>
</head>
<body>

<!--<ul class="topnav">-->
<!--    <li><a href="#nicetomeetyou">About</a></li>-->
<!--    <li><a href="">Cases</a></li>-->
<!--    <li><a href="#contact">Contact</a></li>-->
<!--</ul>-->

<!--Navigation bar-->
<header class="header">
    <nav class="navbar">
        <a href="#" class="nav-logo">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 0 194.13 164.74">
                <defs>
                    <style>.g {
                            isolation: isolate;
                        }

                        .h {
                            fill: #fff;
                            font-family: Nano, Nano;
                            font-size: 146.43px;
                        }</style>
                </defs>
                <g id="a" class="g">
                    <g id="b">
                        <text class="h" transform="translate(110.69 128.13)">
                            <tspan x="0" y="0">g</tspan>
                        </text>
                    </g>
                    <g id="c">
                        <image id="d" transform="translate(42.24 55.27) scale(.24)"
                               xlink:href="data:image/png;base64,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"/>
                    </g>
                    <g id="e">
                        <image id="f" transform="translate(0 55.27) scale(.24)"
                               xlink:href="data:image/png;base64,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"/>
                    </g>
                </g>
            </svg>
        </a>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="#nicetomeetyou" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="#cases" class="nav-link">Cases</a>
            </li>
            <li class="nav-item">
                <a href="#contact" class="nav-link">Contact</a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>

<div class="content">
    <!--    Home header-->
    <div class="home-header" id="home-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 name" data-aos="zoom-in" data-aos-duration="1000">
                    <p>Mette Ghijsen</p>
                </div>
                <div class="col-sm-12">
                    <div class="name-description" data-aos="zoom-in" data-aos-duration="1000">
                        <p>An 18 year old junior web developer.<br>
                            Want to learn more about me? </p>
                    </div>
                </div>
                <div class="col-sm-12 shapes">
                    <div class="circle"></div>
                    <div class="triangle"></div>
                    <div class="square"></div>
                    <div class="diamond"></div>
                </div>
                <div class="col-sm-12">
                    <a class="scrolldown" href="#nicetomeetyou"><i class="bi bi-arrow-down-short"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!--    Nice to meet you-->
    <div class="nicetomeetyou" id="nicetomeetyou">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="story-title-outline radial">
                        <h2>nice to meet you!</h2>
                    </div>
                    <div class="story-title-filled">
                        <h2>nice to meet you! </h2>
                    </div>
                    <div class="story-title-outline radial">
                        <h2>nice to meet you!</h2>
                    </div>
                </div>

                <div class="story-description">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
                            <p>
                                My name is Mette. I am 18 years old and I am a junior web developer.
                                <br>
                                Welcome to my portfolio website!
                                <br><br>
                                I am currently studying IT & Media Design at
                                Fontys University of Applied Sciences in Eindhoven 🇳🇱.
                                I am learning new things every day, so I am constantly improving my skills.
                                Feel free to have a look around.
                            </p>
                        </div>
<!--                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">-->
<!--                            <div class="skills-logos">-->
<!--                                <div class="row">-->
<!--                                    <img src="img/html.svg" alt="Skilled in HTML5" class="col-md-6">-->
<!--                                    <img src="img/css.svg" alt="Skilled in CSS3" class="col-md-6">-->
<!--                                </div>-->
<!--                                <div class="row">-->
<!--                                    <img src="img/javascript.svg" alt="Skilled in Javascript" class="col-md-6">-->
<!--                                    <img src="img/vue.svg" alt="Skilled in Vue" class="col-md-6">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    Cases-->
    <div class="cases" id="cases">
        <div class="img-wrapper" data-aos="zoom-in" data-aos-duration="500">
            <img src="img/cases3.svg" alt="Cases" class="cases-header">
        </div>
        <section>
            <div>
                <h2>Printpal</h2>
                <a href="">Open case →</a>
            </div>
        </section>
        <section>
            <div>
                <h2>NORE</h2>
                <a href="">Open case →</a>
            </div>
        </section>
        <section>
            <div>
                <h2>YourWorld</h2>
                <a href="">Open case →</a>
            </div>
        </section>
    </div>

    <!--    Partners-->
    <div class="partners">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="partners-title" data-aos="fade-up" data-aos-duration="1000">
                        <h2>some amazing partners</h2>
                    </div>
                    <div class="partner-logos" data-aos="fade-up" data-aos-duration="1000">
                        <a href="https://fontys.nl/Studeren/Vind-een-passende-opleiding/HBO-ICT.htm"
                           target="_blank"><img src="img/fontys.svg" alt="Fontys"></a>
                        <a href="https://www.sogeti.nl/" target="_blank"><img src="img/sogeti.svg" alt="Sogeti"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    Contact-->
    <div class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="contact-title">
                        <h2>let's talk!</h2>
                    </div>
                </div>
                <div class="col-sm-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="contact-description">
                        <div class="contact-description-heading">
                            <p>
                                Do you have a new challenge for me or just want to say hello? <br>
                                Then contact me via email or social media. Talk to you there!
                            </p>
                        </div>

                        <h3>Say hello</h3>
                        <p><a href="mailto: mette.ghijsen@student.fontys.nl"> → mette.ghijsen@student.fontys.nl</a></p>

                        <h3>Social Media</h3>
                        <p><a href="https://github.com/metteghijsen" target="_blank">→ Github </a><br>
                            <a href="https://www.linkedin.com/in/mette-ghijsen-857594203/" target="_blank"> →
                                LinkedIn</a>
                        </p>
                    </div>
                    <div class="copyright">
                        <p>Mette Ghijsen © 2022 - Update 1.0</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a class="gotopbutton" id="gotopbutton" href="#"><i class="bi bi-arrow-up-short"></i></a>
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="script/script.js"></script>
</body>
</html>

