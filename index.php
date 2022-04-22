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

<header class="header">
    <nav class="navbar">
        <a href="#" class="nav-logo"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 194.13 164.74"><defs><style>.g{isolation:isolate;}.h{fill:#fff;font-family:Nano, Nano;font-size:146.43px;}</style></defs><g id="a" class="g"><g id="b"><text class="h" transform="translate(110.69 128.13)"><tspan x="0" y="0">g</tspan></text></g><g id="c"><image id="d" transform="translate(42.24 55.27) scale(.24)" xlink:href="data:image/png;base64,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"/></g><g id="e"><image id="f" transform="translate(0 55.27) scale(.24)" xlink:href="data:image/png;base64,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"/></g></g></svg></a>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="#nicetomeetyou" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Cases</a>
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
    <div class="home-header" id="home-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 name" data-aos="fade-up" data-aos-duration="1000">
                    <p>Mette Ghijsen</p>
                </div>
                <div class="col-sm-12">
                    <div class="name-description" data-aos="fade-right" data-aos-duration="1000">
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

    <div class="nicetomeetyou" id="nicetomeetyou">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="story-title-outline">
                        <h2>nice to meet you!</h2>
                    </div>
                    <div class="story-title-filled">
                        <h2>nice to meet you! </h2>
                    </div>
                    <div class="story-title-outline">
                        <h2>nice to meet you!</h2>
                    </div>
                </div>

                <div class="story-description">
                    <div class="col-sm-6" data-aos="fade-up" data-aos-duration="1000">
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
                </div>
            </div>
        </div>
    </div>

    <div class="cases">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!--                <div class="cases-row-1">-->
                    <!--                    <img src="" alt="cases">-->
                    <!--                </div>-->
                    <!--                <div class="cases-row-2">-->
                    <!--                    <img src="" alt="cases">-->
                    <!--                </div>-->
                    <!--                <div class="cases-row-3">-->
                    <!--                    <img src="" alt="cases">-->
                    <!--                </div>-->
                </div>
            </div>

        </div>
    </div>

    <div class="skills">
        <div class="container">
            <div class="row">

            </div>

        </div>
    </div>

    <div class="partners">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="partners-title" data-aos="fade-up" data-aos-duration="1000">
                        <h2>some amazing partners</h2>
                    </div>
                    <div class="partner-logos" data-aos="fade-up" data-aos-duration="1000">
                        <svg xmlns="http://www.w3.org/2000/svg" width="278" height="143.81" viewBox="0 0 278 143.81">
                            <g id="Page-1" transform="translate(-0.062 -0.062)">
                                <g id="Sogeti-global_UI-Components" transform="translate(0.062 0.062)">
                                    <g id="Sogeti_Logo_Primary_3COL_RGB" transform="translate(0 0)">
                                        <path id="Shape"
                                              d="M73.716,3.782l7.83-1.292V20.441h21.175v5.372a6.1,6.1,0,0,1-6.128,6.12H81.546V56.139c0,4.76.749,8.228,2.247,10.267s4.085,3.06,7.762,3.06a24.9,24.9,0,0,0,6.673-.816,47.037,47.037,0,0,0,4.63-1.5l1.43,6.8c.545,2.516-.545,4.692-3.677,5.78A35.076,35.076,0,0,1,89.784,81.3a28.256,28.256,0,0,1-10.622-1.7,15.984,15.984,0,0,1-6.809-4.963,19.072,19.072,0,0,1-3.541-7.887,48.974,48.974,0,0,1-1.021-10.539V10.718A7.074,7.074,0,0,1,73.716,3.782Z"
                                              transform="translate(154.104 5.465)" fill="#fff"/>
                                        <path id="Shape-2" data-name="Shape"
                                              d="M96.743,8.562a7.7,7.7,0,0,1-2.519,6.12A8.7,8.7,0,0,1,88.3,16.925a8.8,8.8,0,0,1-6.06-2.244,7.705,7.705,0,0,1-2.519-6.12A7.9,7.9,0,0,1,82.24,2.306,8.8,8.8,0,0,1,88.3.062a8.453,8.453,0,0,1,5.923,2.312A7.849,7.849,0,0,1,96.743,8.562Z"
                                              transform="translate(181.257 -0.062)" fill="#fff"/>
                                        <path id="Shape-3" data-name="Shape"
                                              d="M94.042,67.465H90.161a9.9,9.9,0,0,1-9.941-9.927V7.97h4.7a9.118,9.118,0,0,1,9.124,9.111Z"
                                              transform="translate(182.392 17.936)" fill="#fff"/>
                                        <path id="Shape-4" data-name="Shape"
                                              d="M49.67,38.989a36.989,36.989,0,0,1,2.315-13.735,28.4,28.4,0,0,1,6.2-9.791,26.622,26.622,0,0,1,8.851-5.916A28.107,28.107,0,0,1,77.245,7.575c8.171,0,14.571,2.516,19.133,7.615s6.877,12.647,6.877,22.71c0,.748,0,1.632-.068,2.584s-.068,1.768-.136,2.584H63.9c.409,4.76,2.043,8.432,5.038,11.083,3,2.584,7.353,3.944,13,3.944a41.953,41.953,0,0,0,9.124-.884,16.735,16.735,0,0,0,1.975-.476,4.411,4.411,0,0,1,5.379,3.6l1.022,6.187a17.262,17.262,0,0,1-3.132,1.156,44.325,44.325,0,0,1-4.562,1.156q-2.553.51-5.515.816a57.854,57.854,0,0,1-5.992.34,36.148,36.148,0,0,1-13.618-2.312,25.187,25.187,0,0,1-9.532-6.46A26.553,26.553,0,0,1,51.508,51.5,41.49,41.49,0,0,1,49.67,38.989Zm39.9-6.12a17.388,17.388,0,0,0-.817-5.372,13,13,0,0,0-2.315-4.42,10.556,10.556,0,0,0-3.745-2.924,11.76,11.76,0,0,0-5.311-1.088A12.262,12.262,0,0,0,71.8,20.291a13.053,13.053,0,0,0-4.017,3.127,15.113,15.113,0,0,0-2.587,4.42,21.468,21.468,0,0,0-1.226,5.1Z"
                                              transform="translate(112.854 17.039)" fill="#fff"/>
                                        <path id="Shape-5" data-name="Shape"
                                              d="M70.131,38.7a40.394,40.394,0,0,1-1.975,12.851,28.445,28.445,0,0,1-5.651,9.928,25.9,25.9,0,0,1-8.783,6.392,27.717,27.717,0,0,1-11.3,2.244,27.394,27.394,0,0,1-11.234-2.244A25.4,25.4,0,0,1,22.47,61.48a28.9,28.9,0,0,1-5.651-9.928A38.544,38.544,0,0,1,14.776,38.7a37.856,37.856,0,0,1,2.043-12.783,29.357,29.357,0,0,1,5.719-9.859,25.475,25.475,0,0,1,8.783-6.323,27.2,27.2,0,0,1,11.1-2.244A27.527,27.527,0,0,1,53.586,9.736a25.476,25.476,0,0,1,8.783,6.323,28.582,28.582,0,0,1,5.651,9.859A36.233,36.233,0,0,1,70.131,38.7Zm-13.618,0q0-8.873-3.677-14.075a11.9,11.9,0,0,0-10.281-5.168,11.82,11.82,0,0,0-10.281,5.168Q28.6,29.828,28.6,38.7c0,5.984,1.226,10.743,3.677,14.211a11.958,11.958,0,0,0,10.281,5.236,11.876,11.876,0,0,0,10.281-5.236C55.288,49.445,56.514,44.686,56.514,38.7Z"
                                              transform="translate(33.429 16.85)" fill="#fff"/>
                                        <path id="Shape-6" data-name="Shape"
                                              d="M44.319,45.7a12.877,12.877,0,0,0-3.268-5.032A23.1,23.1,0,0,0,35.4,36.657a79.006,79.006,0,0,0-8.307-3.6c-1.975-.68-3.677-1.36-5.038-1.972a20.731,20.731,0,0,1-3.336-1.9,5.651,5.651,0,0,1-1.77-2.108,6.257,6.257,0,0,1-.545-2.584,4.624,4.624,0,0,1,2.655-4.352,14.245,14.245,0,0,1,6.809-1.428,34.781,34.781,0,0,1,6.2.476l1.158.2A7.7,7.7,0,0,0,41.8,13.334l.613-2.992a50.521,50.521,0,0,0-7.149-1.836,52.977,52.977,0,0,0-10.009-.952c-6.945,0-12.392,1.564-16.409,4.692a15.556,15.556,0,0,0-6.06,12.919A17.381,17.381,0,0,0,4.079,32.3a14.584,14.584,0,0,0,3.609,4.964,23.955,23.955,0,0,0,5.379,3.6c2.111,1.02,4.358,1.972,6.877,2.924A40.06,40.06,0,0,1,28.8,48.011a5.847,5.847,0,0,1,2.655,4.9,4.624,4.624,0,0,1-2.519,4.488c-1.7.884-4.358,1.292-7.966,1.292a35.8,35.8,0,0,1-8.579-.884,16.228,16.228,0,0,0-3.745-.68A8.087,8.087,0,0,0,.811,62.9L.062,65.758a63.522,63.522,0,0,0,8.17,2.72,47.434,47.434,0,0,0,12.732,1.36c7.83,0,13.822-1.428,18.043-4.352s6.332-7.208,6.332-12.919A20.562,20.562,0,0,0,44.319,45.7Z"
                                              transform="translate(-0.062 16.992)" fill="#fff"/>
                                        <g id="Group" transform="translate(86.811 101.109)">
                                            <path id="Shape-7" data-name="Shape"
                                                  d="M66.277,16.475A7.551,7.551,0,0,0,73.767,9c-.272-1.768-.885-5.032-5.515-5.032-5.038,0-6.673,7-10.758,11.491-.34,2.584-2.792,4.828-5.787,5.236a6.532,6.532,0,0,0,4.358,1.224c3.608,0,7.966-1.088,10.281-3.332A4.834,4.834,0,0,1,61.1,13.959,6.357,6.357,0,0,0,66.277,16.475Z"
                                                  transform="translate(117.15 9.023)" fill="#fff"/>
                                            <g id="Shape-8" data-name="Shape" transform="translate(0)">
                                                <path id="Path_10" data-name="Path 10"
                                                      d="M151.456,13.875c0-2.244-.136-3.74-1.566-3.74a4.041,4.041,0,0,0-1.566.34c.544,7.479-1.157,14.143-3.268,14.143-2.724,0-1.362-16.115-7.149-16.115-5.311,0-6.06,12.851-6.672,12.851-.409,0-.477-3.4-.477-5.916a20.51,20.51,0,0,0,.34-3.2c0-1.224-.477-3.264-3.2-2.244.068,9.179-1.77,14.755-3.813,14.755-3.064,0-3.064-8.363-3.064-10.607s.136-5.236-3.2-4.148c-.476,8.023-2.587,14.075-3.949,14.075-1.975,0-1.566-13.871-5.856-13.871-3.813,0-5.038,13.123-5.856,13.123-1.43,0,.477-14.755-5.107-14.755-2.928,0-4.085,4.964-5.243,10.471-.2,1.088-.477,1.088-.477-.136,0-1.02-.068-2.108,0-3.06,1.43-5.576-.34-7.615-2.86-6.12.817,10.267-3.881,15.231-7.489,15.231a3.884,3.884,0,0,1-3.064-1.428c4.357-2.652,6.264-5.712,6.264-8.635,0-3.2-1.838-5.1-4.9-5.1-4.29,0-6.673,4.42-6.673,8.159a12.922,12.922,0,0,0,1.022,5.168c-1.5.68-2.86,1.292-4.154,1.9-.136-3.876-.545-7.887-.885-11.627-2.315-.612-2.928.476-3.132,2.516-.409,4.624-2.111,7.547-3.677,7.547-1.157,0-1.838-1.36-1.906-2.856-.409-7.411,5.583-9.519,8.783-8.431.681-1.632-.068-2.788-2.928-2.788-3.472,0-6.06,2.108-7.966,4.76a23.333,23.333,0,0,1-4.7,4.624,8.652,8.652,0,0,0,.068-1.292c0-5.236-2.86-7.547-5.583-7.547-2.247,0-3.677,1.36-4.494,3.4-.2-2.04-.613-2.992-1.839-2.992a4.137,4.137,0,0,0-1.974.544,25.411,25.411,0,0,1,.476,5.372c0,6.324-1.838,9.111-3.541,9.111-1.974,0-2.315-7.479-2.451-10.4a3.324,3.324,0,0,0-.953-.2c-1.77,0-2.043,2.38-2.451,4.624-.477,2.448-1.906,5.576-4.017,5.576-1.294,0-2.043-1.224-2.179-3.4-.2-4.488,3.472-9.723,9.328-8.091.749-1.768-.409-3.128-2.86-3.128-4.221,0-7.762,3.2-9.26,6.935-1.566,3.468-4.289,8.5-9.8,8.5-3.881,0-6.877-3.4-6.877-10.539C4.66,9.047,8.541,3.2,12.694,3.2c2.928,0,3.541,2.856,3.336,5.508,1.5,1.224,3.949.068,3.949-2.924,0-2.108-1.7-5.576-7.149-5.576C6.09.208.166,6.939.166,15.71c0,8.567,4.358,13.6,10.485,13.6,3.881,0,7.558-2.176,10.077-6.256.613,3.536,3.064,5.1,4.9,5.1,2.928,0,4.9-1.9,5.924-4.488.681,2.584,2.043,4.488,4.358,4.488a4.607,4.607,0,0,0,3.813-2.108c-.409,8.975-.885,14.755,4.494,13.6-.817-2.584-1.089-7.207-1.089-11.423,0-11.423,1.906-15.231,4.289-15.231,1.7,0,2.247,2.176,2.247,4.488a21.114,21.114,0,0,1-.409,4.012c-2.928,1.836-5.243,3.264-5.243,5.1,0,1.428,1.089,1.564,2.043,1.564,2.247,0,4.9-2.176,6.4-6.324a24.165,24.165,0,0,0,3.881-2.924A7.828,7.828,0,0,0,56.27,20.2c0,4.08,1.77,6.6,4.7,6.6,2.247,0,3.949-1.564,5.107-3.944.068,1.36.136,2.652.136,3.808-4.562,2.108-9.6,4.216-9.6,10.2a5.162,5.162,0,0,0,5.106,5.372c6.332,0,7.83-6.732,7.83-14.483,2.043-.884,3.609-1.564,5.379-2.448a7.173,7.173,0,0,0,5.515,2.856c3.609,0,6.264-1.9,8.443-5.78.409,2.924,1.157,5.78,2.724,5.78,2.86,0,3.4-14.823,5.515-14.823,1.634,0,.272,16.047,4.562,16.047,3.677,0,4.358-14.143,6.128-14.143,1.294,0,1.362,12.919,5.379,12.919,1.975,0,4.085-2.38,5.175-7.275.477,3.264,2.179,7.275,5.379,7.275,1.906,0,3.541-1.9,4.766-4.42.34,2.584,1.089,4.42,2.519,4.42,3.745,0,3.609-14.823,6.536-14.823,2.315,0,1.566,14.823,7.081,14.823,2.587,0,3.813-2.244,4.562-5.032,1.022,4.08,2.655,5.032,3.949,5.032a2.752,2.752,0,0,0,2.315-1.292C151.116,24.89,151.456,18.226,151.456,13.875ZM61.853,39.3c-1.294,0-2.043-1.224-2.043-2.652,0-3.808,2.792-5.847,6.264-7.547C65.871,37.469,63.964,39.3,61.853,39.3Zm17.09-26.926c1.294,0,2.043,1.156,1.906,2.856-.136,1.972-1.566,4.284-4.085,6.052C75.4,17.614,76.356,12.379,78.943,12.379Z"
                                                      transform="translate(-0.166 0.472)" fill="#fff"/>
                                                <path id="Path_11" data-name="Path 11"
                                                      d="M38.091,5.341A2.3,2.3,0,0,0,40.2,3.029,2,2,0,0,0,38.159.853a2.372,2.372,0,0,0-2.247,2.312A2.149,2.149,0,0,0,38.091,5.341Z"
                                                      transform="translate(81.198 1.935)" fill="#fff"/>
                                                <path id="Path_12" data-name="Path 12"
                                                      d="M47.218,5.431A2.233,2.233,0,0,0,49.26,3.187a2.05,2.05,0,0,0-1.975-2.108,2.233,2.233,0,0,0-2.042,2.244A1.968,1.968,0,0,0,47.218,5.431Z"
                                                      transform="translate(102.438 2.457)" fill="#fff"/>
                                                <path id="Path_13" data-name="Path 13"
                                                      d="M81.714,17.747c-.068-4.692-2.315-8.635-5.787-11.831A30.65,30.65,0,0,0,66.939.34c-.272-.136-.545-.2-.817-.34h0C62.1,4.828,48.215,8.363,48.215,18.495a10.034,10.034,0,0,0,6.128,9.111,9.221,9.221,0,0,0,6.332.136,10.747,10.747,0,0,0,4.7-3.2c4.085-4.488,5.719-11.491,10.758-11.491,4.562,0,5.175,3.264,5.515,5.032C81.714,18.019,81.714,17.951,81.714,17.747Z"
                                                      transform="translate(109.203)" fill="#fff"/>
                                            </g>
                                        </g>
                                        <path id="Shape-9" data-name="Shape"
                                              d="M12.486,35.033a7.142,7.142,0,0,1,4.017.952,3.312,3.312,0,0,1,1.43,2.992,5.181,5.181,0,0,1-.34,1.836A3.157,3.157,0,0,1,16.5,42.037a4.584,4.584,0,0,1-1.77.68,12.453,12.453,0,0,1-2.383.2h-1.09V47.2H9.082v-11.9a6.49,6.49,0,0,1,1.7-.2C11.4,35.1,11.942,35.033,12.486,35.033Zm.136,1.9a7.835,7.835,0,0,0-1.362.068v4.08h1.09a4.9,4.9,0,0,0,2.451-.476,1.793,1.793,0,0,0,.885-1.7,2.271,2.271,0,0,0-.2-1.02,1.337,1.337,0,0,0-.613-.612,3.946,3.946,0,0,0-.953-.34A8.2,8.2,0,0,1,12.622,36.937Z"
                                              transform="translate(20.468 79.538)" fill="#fff"/>
                                        <path id="Shape-10" data-name="Shape"
                                              d="M15.564,35.9a4.614,4.614,0,0,1,1.77.272,2.843,2.843,0,0,1,1.157.748,3.13,3.13,0,0,1,.613,1.156,5.3,5.3,0,0,1,.2,1.5v5.508c-.34.068-.817.136-1.5.272a22.12,22.12,0,0,1-2.247.136,10.186,10.186,0,0,1-1.5-.136,4.551,4.551,0,0,1-1.157-.476A2.365,2.365,0,0,1,12.16,44a2.691,2.691,0,0,1-.273-1.36,2.427,2.427,0,0,1,.273-1.292,2.546,2.546,0,0,1,.817-.884,3.3,3.3,0,0,1,1.226-.476,10.2,10.2,0,0,1,1.43-.136,3.053,3.053,0,0,1,.749.068,3.418,3.418,0,0,1,.817.136v-.34a2.09,2.09,0,0,0-.068-.68,1.39,1.39,0,0,0-.34-.612,2.835,2.835,0,0,0-.545-.408,3.447,3.447,0,0,0-.885-.136A8.375,8.375,0,0,0,14,38.013a3.689,3.689,0,0,0-1.022.272l-.272-1.7a9.93,9.93,0,0,1,1.157-.272A3.012,3.012,0,0,1,15.564,35.9Zm.2,7.887a7.475,7.475,0,0,0,1.5-.136V41.344a4.4,4.4,0,0,0-.476-.136,2.552,2.552,0,0,0-.749-.068,2.316,2.316,0,0,0-.681.068,2.005,2.005,0,0,0-.681.2.915.915,0,0,0-.477.408.949.949,0,0,0-.2.612,1.072,1.072,0,0,0,.477,1.02A1.837,1.837,0,0,0,15.768,43.792Z"
                                              transform="translate(26.854 81.523)" fill="#fff"/>
                                        <path id="Shape-11" data-name="Shape"
                                              d="M19.722,38.034a5.571,5.571,0,0,0-.749-.2,5.524,5.524,0,0,0-1.089-.068,3.065,3.065,0,0,0-.749.068c-.272.068-.477.068-.545.136v7.275H14.548v-8.7a14.83,14.83,0,0,1,1.5-.408,9.448,9.448,0,0,1,2.043-.2h.476c.2,0,.341.068.545.068a1.6,1.6,0,0,1,.545.136c.2.068.34.068.409.136Z"
                                              transform="translate(32.909 81.57)" fill="#fff"/>
                                        <path id="Shape-12" data-name="Shape"
                                              d="M16.522,35.477l2.111-.34v2.72H21.9v1.768H18.633v3.74a2.955,2.955,0,0,0,.34,1.564,1.247,1.247,0,0,0,1.157.476,4.116,4.116,0,0,0,1.021-.136,4.233,4.233,0,0,0,.681-.2l.34,1.7a7.393,7.393,0,0,1-.953.34,4.418,4.418,0,0,1-1.362.136,3.722,3.722,0,0,1-1.634-.272A2.358,2.358,0,0,1,17.2,46.22,3.356,3.356,0,0,1,16.658,45a6.083,6.083,0,0,1-.136-1.632Z"
                                              transform="translate(37.403 79.775)" fill="#fff"/>
                                        <path id="Shape-13" data-name="Shape"
                                              d="M28.375,40.685a5.986,5.986,0,0,1-.34,1.972,3.651,3.651,0,0,1-.885,1.5,3.8,3.8,0,0,1-1.362.952,4.778,4.778,0,0,1-3.541,0,3.287,3.287,0,0,1-1.362-.952,4.153,4.153,0,0,1-.885-1.5,5.877,5.877,0,0,1,0-3.944,4.586,4.586,0,0,1,.885-1.5,4.5,4.5,0,0,1,1.362-.952,4.824,4.824,0,0,1,1.77-.34,5.118,5.118,0,0,1,1.77.34,3.289,3.289,0,0,1,1.362.952,4.157,4.157,0,0,1,.885,1.5A4.449,4.449,0,0,1,28.375,40.685Zm-2.179,0a3.582,3.582,0,0,0-.613-2.176,2.044,2.044,0,0,0-3.268,0,3.447,3.447,0,0,0-.613,2.176,3.448,3.448,0,0,0,.613,2.176,2.044,2.044,0,0,0,3.268,0A3.584,3.584,0,0,0,26.2,40.685Z"
                                              transform="translate(44.546 81.57)" fill="#fff"/>
                                        <path id="Shape-14" data-name="Shape"
                                              d="M26.4,34.639a7.537,7.537,0,0,1,1.294.136,4.647,4.647,0,0,1,.817.2L28.1,36.746c-.2-.068-.409-.136-.681-.2a3.312,3.312,0,0,0-.817-.068,3.462,3.462,0,0,0-.885.136.845.845,0,0,0-.545.408,2.411,2.411,0,0,0-.273.612,3.306,3.306,0,0,0-.068.816v.612h3.336v1.768H24.831V48.17H22.653V38.378a4.065,4.065,0,0,1,.953-2.788A3.844,3.844,0,0,1,26.4,34.639Z"
                                              transform="translate(51.358 78.641)" fill="#fff"/>
                                        <path id="Shape-15" data-name="Shape"
                                              d="M73.478,8.6a70.958,70.958,0,0,0-12.256-1.02A31.273,31.273,0,0,0,49.308,9.751,25.594,25.594,0,0,0,40.388,15.8,26.187,26.187,0,0,0,34.8,25.118,35.591,35.591,0,0,0,32.9,37.085a37.32,37.32,0,0,0,1.839,12.239,24.857,24.857,0,0,0,5.038,8.84,21.248,21.248,0,0,0,7.762,5.372,26.244,26.244,0,0,0,10.009,1.836,24.009,24.009,0,0,0,7.353-1.02,37.225,37.225,0,0,0,4.63-1.768c0,5.78-2.451,10.4-10.145,12.307-3.132.748-7.353.544-13-1.02-1.566,2.856-2.451,7.819-.068,10.743,2.111,2.516,7.285,2.992,10.553,2.992,7.353,0,15.32-3.128,19.065-6.6,4.9-4.488,7.353-11.491,7.353-21.078V10.839A85.773,85.773,0,0,0,73.478,8.6ZM69.53,50.82A16.744,16.744,0,0,1,65.1,53a18.212,18.212,0,0,1-5.856.884,11.968,11.968,0,0,1-9.26-4.012c-2.383-2.72-3.609-6.936-3.609-12.783,0-5.372,1.226-9.723,3.745-13.055s6.06-4.963,10.758-4.963a36.015,36.015,0,0,1,5.107.272c1.362.2,2.519.408,3.4.612V50.82Z"
                                              transform="translate(74.679 17.039)" fill="#fff"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="300"
                             height="180" viewBox="0 0 300 180">
                            <defs>
                                <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%"
                                         viewBox="0 0 216 130">
                                    <image width="216" height="130"
                                           xlink:href="data:image/png;base64,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"/>
                                </pattern>
                            </defs>
                            <rect id="logo-inverted_2x" data-name="logo-inverted@2x" width="300" height="180"
                                  fill="url(#pattern)"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                            <a href="https://www.linkedin.com/in/mette-ghijsen-857594203/" target="_blank"> → LinkedIn</a>
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
<script src="script/scrolltotop.js"></script>
<script src="script/hamburger.js"></script>
</body>
</html>

