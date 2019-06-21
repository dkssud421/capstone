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
        input[type=text] {
            width: 100%;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
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

            </div>
        </div>
    </header>

    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1400px;">
        <!-- The Grid -->
        <div class="w3-row">

            <!-- Middle Column -->

            <div class="w3-container w3-card w3-white w3-round w3-margin w3-border-bottom">
                <br>

                @forelse($lecture as $lectures)
                    <div class="title">
                        <h4> {{$lectures->title}}<span style=" font-size:0.8em; color:grey;"> {{$lectures->professor}}교수님</span></h4>
                    </div>
                    <hr class="w3-clear">
                    <p> {{$lectures->content}} </p><br>
                    <a class="w3-button w3-teal w3-right w3-margin-bottom " href="/lecture/{{$lectures->id}}">&nbsp;Comment</a><br><br><br>
                <div class="w3-border-bottom "></div>
                @empty
                    <p>글이 없습니다.</p>
                @endforelse


            </div>



        </div>
    </div>
    <br>
</div>
<br>
        @if($lecture ->count())
             <div class="text-center">
             {{$lecture->render()}}
            </div>
        @endif
</div>

</body>
</html>

