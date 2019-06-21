<!DOCTYPE html>
<html>
<head>
    <title>강의추천</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body, h1, h2, h3, h4, h5, h6 {
            font-family: "Raleway", sans-serif
        }
    </style>
    <style>
        #column {
            margin: 0 auto;
        }
    </style>
    <style>
        .starR {
            background: url('http://miuu227.godohosting.com/images/icon/ico_review.png') no-repeat right 0;
            background-size: auto 100%;
            width: 30px;
            height: 30px;
            display: inline-block;
            text-indent: -9999px;
            cursor: pointer;
        }

        .starR.on {
            background-position: 0 0;
        }
    </style>
    <style>
        input[type=text] {
            width: 100%;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-image: url('searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
        }
    </style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar">
    <br>
    <div class="w3-container">
        <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
            <i class="fa fa-remove"></i>
        </a>
        <br>
        <h4><b>강의추천</b></h4>
        <p class="w3-text-grey">효율적인 수강신청을 위한 페이지</p>
    </div>
    <div class="w3-bar-block">
        <a href="/" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home fa-fw w3-margin-right"></i>Home</a>
        <div style="position:absolute; left: 0px; bottom:40px;">
        <a class="w3-bar-item w3-button w3-padding w3-large" href="http://www.semyung.ac.kr/kor.do" target="_blank">세명대학교</a>
        <a class="w3-bar-item w3-button w3-padding w3-large" href="http://setopia.semyung.ac.kr/main/index.jsp" target="_blank">포탈시스템</a>
        <a class="w3-bar-item w3-button w3-padding w3-large" href="http://lib.semyung.ac.kr/" target="_blank">민송도서관</a>
        </div>
    </div>

</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

    <!-- Header -->
    <header id="portfolio">

        <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
        <div class="w3-container">
            <h1><b>강의추천</b></h1>
            <div class="w3-section w3-bottombar w3-padding-16">
                <!--<span class="w3-margin-right">Filter:</span>
                <button class="w3-button w3-black">ALL</button>
                <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Design</button>
                <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos</button>
                <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art</button>-->
            </div>
        </div>
    </header>

    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
        <!-- The Grid -->
        <div class="w3-row">


            <!-- Middle Column -->



            <div class="w3-container w3-card w3-white w3-round w3-margin">
                <br>
                <!--<img src="/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">-->
                <div class="starRev w3-right w3-opacity">
                    <span class="starR on">별1</span>
                    <span class="starR ">별2</span>
                    <span class="starR ">별3</span>
                    <span class="starR ">별4</span>
                    <span class="starR ">별5</span>

                </div>
                <h4>디지털 상상력과 글쓰기 <span style="font-size:0.8em; color:grey;"> 강영기</span></h4><br>
                <hr class="w3-clear">
                <p>
                    디지털 환경 매체에 익숙한 학생에게 창의적이고 논리적인 사고를 표현 할 수 있는 글쓰기 능력을 키우는데 목적이 있다.
                    글쓰기가 경쟁력인 시대,글쓰기 기본과 글을 잘 쓰는 방법을 익히게 해 사회 경쟁력을 갖추게 한다.
                </p>
                <div class="w3-row-padding" style="margin:0 -16px">
                    <div class="w3-half">
                        <!--<img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">-->
                    </div>
                    <div class="w3-half">
                        <!--<img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">-->
                    </div>
                </div>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> &nbsp;Comment</button>
            </div>

            <div class="w3-container w3-card w3-white w3-round w3-margin">
                <br>
                <!--<img src="/w3images/avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">-->
                <div class="starRev w3-right w3-opacity">
                    <span class="starR on">별1</span>
                    <span class="starR ">별2</span>
                    <span class="starR ">별3</span>
                    <span class="starR ">별4</span>
                    <span class="starR ">별5</span>

                </div>
                <h4>실전토익<span style="font-size:0.8em; color:grey;"> 강영기</span></h4><br>
                <hr class="w3-clear">
                <p>
                    400점 이상의 토익성적을 획득한 학생들에게 신토익 유형의RC(읽기시험)의
                    실전문제풀이를 통하여 정기토익에서 650점이상을 얻는 것을 목표로 합니다.
                    이를 위해 효율적인 읽기훈련이 제공됩니다.
                </p>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> &nbsp;Comment</button>
            </div>

            <div class="w3-container w3-card w3-white w3-round w3-margin">
                <br>
                <!--<img src="/w3images/avatar6.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">-->
                <div class="starRev w3-right w3-opacity">
                    <span class="starR on">별1</span>
                    <span class="starR ">별2</span>
                    <span class="starR ">별3</span>
                    <span class="starR ">별4</span>
                    <span class="starR ">별5</span>

                </div>
                <h4>오피스고급활용(MOS)<span style="font-size:0.8em; color:grey;"> 이재영</span></h4><br>
                <hr class="w3-clear">

                <!--<img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">-->
                <p>본 교과목은 엑셀2010의 필수 기능을 습득하고 다양한 예제를 실습한다.</p>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i> &nbsp;Like</button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i> &nbsp;Comment</button>
            </div>

            <!-- End Middle Column -->
        </div>


        <br>


        <!-- End Page Container -->
    </div>
    <br>

</div>

<script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
</script>


<script>
    // Accordion
    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-theme-d1";
        } else {
            x.className = x.className.replace("w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace(" w3-theme-d1", "");
        }
    }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>
<script>
    $('.starRev span').click(function () {
        $(this).parent().children('span').removeClass('on');
        $(this).addClass('on').prevAll('span').addClass('on');
        return false;
    });
</script>


</body>
</html>