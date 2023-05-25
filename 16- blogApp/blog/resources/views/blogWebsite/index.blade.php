<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
       @import url("https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap");
       body{
           background-image: url("../images/heading-bg.jpg");
           font-family: "Josefin Sans", sans-serif;
           margin: 40px;
       }

       header{
           background-color: #fff;
           display: flex;
           justify-content: center;
           align-items: center;
           border-radius: 30px;
           /*margin: 40px;*/
           margin-bottom: 40px;
           padding: 20px;
       }
       .flexDiv {
           display: flex;
           justify-content: center;
           align-items: center;
       }
       header .flexDiv {
           width: 100%;
           justify-content: space-between;
       }

       header #logo {
           margin: 0;
       }

       header img {
           width: 150px;
       }

       header nav {
           display: flex;
           align-items: center;
       }

       header nav ul {
           display: flex;
           justify-content: space-between;
           width: 70%;
           padding: 0;
           list-style-type: none;
       }

       header ul li {
           text-decoration: none;
           width: 120px;
           text-align: center;
           margin: 0 10px;
           font-size: 15px;
       }

       header ul a {
           text-decoration: 0;
       }

       header ul li i {
           margin-left: 10px ;
       }
       header ul li #aicon {
           width: 17px;
       }

       header img#profilePic {
           width: 50px;
           border-radius: 50%;
           border : 1px solid #2a2a2a;
           cursor: pointer;
       }

       header .profile_logout {
           list-style-type: none;
           display: none;
           position: absolute;
           top: 130px;
           right: 48px;
           background-color:#fff;
           z-index : 10;
           padding : 10px;
           margin: 0;
           border-bottom-left-radius: 20px;
           border-bottom-right-radius: 20px;
       }

       header .profile_logout li {
           font-size: 17px;
           margin: 10px 0;
       }

       @keyframes opacityAnimation {
           0%   {opacity: 0;}
           25%  {opacity: 0.25;}
           50%  {opacity: 0.5;}
           75%  {opacity: 0.75;}
           100% {opacity: 1;}
       }

       header .profile_logout_none {
           display: inline;
           animation-name: opacityAnimation;
           animation-duration: 1s;

       }

       #blogBody {
           display: flex;
           /*justify-content: space-between;*/
           width: 100%;
       }

       aside {
           background-color: #fff;
           width: 35%;
           border-radius: 50px;
           display: flex;
           justify-content: center;
           text-align: center;
           flex-wrap: wrap;
       }

       aside #article {
           width: 90%;
           display: flex;
           justify-content: center;
       }

       aside h1, #allArticlePart h1 {
           background-color: #000;
           color: #fff;
           width: 100%;
           position: relative;
           margin: 0;
           top: 0;
           border-top-left-radius: 300px;
           border-top-right-radius: 300px;
           padding: 16px;
       }

       #allArticlePart h1 {
           width: 96.53%;
           text-align: center;
       }

       aside #article div {
           margin: 10px;
       }

       aside #article span {
           background-color: #7453fc;
           width: 20px !important;
           height: 20px !important;
           border-radius: 50%;
           font-size: 20px;
           padding: 10px;
           position: relative;
           top: 20px;
           left: 70px;
           text-align: center;
           color: #ffffff;
           border: 2px solid #fff;
       }

       aside .flexDiv img,section img {
           width: 150px;
           height: 100px;
           border-radius: 10px;
           border: 1px solid #4b5563;
           display: block;
           margin: 0 auto;
       }

       aside .flexDiv h2,section .flexDiv h2 {
           font-size: 20px;
       }

       section {
           width: 100%;
           /*height: 200px;*/
       }

       section #allArticlePart {
           background-color: #fff;
           margin-left: 45px;
           border-radius: 50px;
       }

       #allArticlePart #articles {
           display: flex;
           justify-content: space-between;
           padding : 28px;
           text-align : center
       }



   </style>
</head>
<body>

<header>
    <div class="flexDiv">
    <div id="logo">
        <img src="images/logo.png">
    </div>
    <nav>
        <ul>
            <a href="#"><li>Web Dev <i class="fa-solid fa-code"></i></li></a>
            <a href="#"><li>Mobile Dev <i class="fa-solid fa-mobile-screen-button"></i></li></a>
            <a href="#"><li>Database<i class="fa-solid fa-database"></i></li></a>
            <a href="#"><li>Data Sience <i class="fa-solid fa-chart-simple"></i></li></a>
            <a href="#"><li>Web Design <i class="fa-solid fa-pen-nib"></i></li></a>
            <a href="#"><li>Art inte <img id="aicon" src="images/aicon.jpg"></li></a>
        </ul>
    </nav>

    <div id="profilePicDiv">
        <img id="profilePic" src="images/Adil.jpg">
        <ul class="profile_logout">
            <li> <i class="fa-solid fa-user"></i> profile</li>
            <li> <i class="fa-solid fa-gear"></i>settings</li>
            <li> <i class="fa-solid fa-right-from-bracket"></i>logout</li>
        </ul>
    </div>
    </div>
</header>

<section id="blogBody">
    <aside>
        <h1>latest 5 articles</h1>
        <div class="flexDiv">
            {{--        <ul>--}}
            {{--            @foreach($sortedPosts as $post)--}}
            {{--                <li>{{$post->title}} {{$post->created_at}}</li>--}}
            {{--            @endforeach--}}
            {{--        </ul>--}}

            <div id="article">
                <div>
                <div>
                    <span>#1</span>
                    <img src="images/article/ai.jpg">
                    <h2>ai is the future !!</h2>
                </div>
                <div>
                    <span>#2</span>
                    <img src="images/article/javascript.png">
                    <h2>Javascript is the future !!</h2>
                </div>
                <div>
                    <span>#3</span>
                    <img src="images/article/php.png">
                    <h2>is php depracated language ?</h2>
                </div>
                <div>
                    <span>#4</span>
                    <img src="images/article/html.jpg">
                    <h2>is php depracated language ?</h2>
                </div>
                <div>
                    <span>#5</span>
                    <img src="images/article/webdev.jpg">
                    <h2>what's web developement ?</h2>
                </div>
                    </div>
            </div>
    </aside>

    <section id="allArticlePart">
        <h1>all articles</h1>
            <div id="articles">
                <div>
                    <div>

                        <img src="images/article/ai.jpg">
                        <h2>ai is the future !!</h2>
                    </div>
                    <div>

                        <img src="images/article/javascript.png">
                        <h2>Javascript is the future !!</h2>
                    </div>
                    <div>

                        <img src="images/article/php.png">
                        <h2>is php depracated language ?</h2>
                    </div>
                    <div>

                        <img src="images/article/html.jpg">
                        <h2>is php depracated language ?</h2>
                    </div>
                    <div>

                        <img src="images/article/webdev.jpg">
                        <h2>what's web developement ?</h2>
                    </div>
                </div>
                <div id="articleDetails">
                    <div>
                        <img src="images/article/webdev.jpg">
                        <h2>what's web developement ?</h2>
                    </div>
                </div>
        </div>
    </section>
</section>


<script>
    const profilePicDiv = document.querySelector('#profilePic');
    const profile_logout_dropdown = document.querySelector('.profile_logout');
    profilePicDiv.addEventListener('click',()=> {
        profile_logout_dropdown.classList.toggle('profile_logout_none');

    })
</script>
</body>
</html>
