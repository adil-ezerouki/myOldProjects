<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/icon.png">
    <title>AtlantaSanad Assurance laaouni </title>
</head>

<body>

    <header id="home">
        <div class="upper-part">
            <div class="container-fluid">
                <div class="row" id="row1">
                    <div class="col-lg-3">
                        <div class="logo">
                            <img src="images/assuranceLogo.png" alt="logo">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <nav id="navbar">
                            <ul>
                                <a href="#home">
                                    <li>HOME</li>
                                </a>
                                <a href="#About-me">
                                    <li>ABOUT US</li>
                                </a>
                                <a href="#niches">
                                    <li>SERVICES</li>
                                </a>
                                <a href="#comments">
                                    <li>BLOG</li>
                                </a>
                                <a href="#">
                                    <li>LOCATION</li>
                                </a>
                                <a href="#" style="background-color: #7453fc; border-radius: 20px; color: #fff">
                                    <li>CONTACT US</li>
                                </a>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="lower-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <img src="images/headerImage.png" id="img2">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <h3>open,read, get access to unlimited knowledge</h3>
                            <h4>We're here to enlighten your way with knowledge, here you can find what you're looking
                                for,
                            </h4>
                            <div class="btn">
                                <div>
                                    <a href={{route('user.login')}}><button type="button">Login</button></a>
                                </div>
                                <div>
                                    <a href={{route('user.register')}}><button type="button">Sign up</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <section id="About-me">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <div></div>
                        <br>
                        <p>ABOUT <span style="color:#7453fc ;">US</span></p>
                    </div>
                </div>
            </div>
            <div class="row" id="row2">
                <div class="col-md-6">
                    <div id="divBtnImg">
                        <button id="spanLt" onclick="plusSlides(-1)"> &lt; </button>
                        <img id="individulTeamImg" src="images/Adil.jpg">
                        <button id="spanGt" onclick="plusSlides(1)"> &gt; </button>
                    </div>
                    <div style="text-align:center">
                        <span class="dot active" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="infoDiv">
                        <h1> <span id="teamIndividualName">ADIL </span> <span id="teamIndividualLastName"
                                style="color:#7453fc;">EZEROUKI</span></h1>
                        <h4 id="teamIndividualProfession"> Imgage Editor</h4>
                        <p id="teamIndividualDescription">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Minus, iure maiores ducimus corrupti
                            commodi fugit deleniti impedit error molestiae quidem perferendis deserunt, voluptate quae
                            iste eaque, ipsa amet? Consequuntur, cupiditate.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="niches">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <div id="hrDiv"></div>
                        <h1 id="upperH1"> OUR <span style="color: #1e1e1e; font-weight: bold;"> SERVICES </span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h1 id="NichesH1">We care all about technology, an open and unlimited knowledge concerning
                            technology fields.
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="niches">
                        <div class="Niche">
                            <img src="images/automobile.png">
                            <h1>Web Development</h1>
                            <button type="button">acess in blog</button>
                        </div>
                        <div class="Niche">
                            <img src="images/Housing.png">
                            <h1>App Development</h1>
                            <button type="button">acess in blog</button>
                        </div>
                        <div class="Niche">
                            <img src="images/hunting.png">
                            <h1>artificial intelligence</h1>
                            <button type="button">acess in blog</button>
                        </div>
                        <div class="Niche">
                            <img src="images/health.png">
                            <h1> Data Science</h1>
                            <button type="button">acess in blog</button>
                        </div>
                        <div class="Niche">
                            <img src="images/WD.png">
                            <h1> Web Design</h1>
                            <button type="button">acess in blog</button>
                        </div>
                        <div class="Niche">
                            <img src="images/DM.png">
                            <h1> Databases Managment</h1>
                            <button type="button">acess to blog</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="comments">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>
    <!-- preloader start -->

    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>

        <!-- preloader end -->

        <script src="js/index.js"></script>
</body>

</html>
