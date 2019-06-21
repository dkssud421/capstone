<!DOCTYPE html>
<html>
<head>
    <title>세명인닷컴</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        body, h1, h4 {
            font-family: "Raleway", Arial, sans-serif
        }

        h3 {
            color: grey;
        }

        h3:hover {
            color: #4285F4;
        }

    </style>
</head>
<body>


<!-- Header -->
<header class="w3-container w3-theme w3-padding w3-panel w3-opacity" id="myHeader">

    <div class="w3-center">
        <h4>세명대학생들을 위한 종합정보 홈페이지</h4>
        <h1 class="w3-xxxlarge w3-animate-bottom">세명인닷컴</h1>

    </div>

    <div class="w3-display-topright w3-container w3-large">
        <p>
            <a><?php echo e(Auth::user()->name); ?>  </a>
            <a class="w3-button" href="<?php echo e(route('logout')); ?>"
               onclick="event.preventDefault();
                  document.getElementById('logout-form').submit(); " target="_blank">
                <?php echo e('로그아웃'); ?></a>
        </p>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo e(csrf_field()); ?>

        </form>
    </div>

</header>

<header class="w3-panel w3-center w3-opacity" style="padding:10px 16px;">

    <div class="w3-padding-50">
        <div class="w3-bar w3-border">
            <a class="w3-bar-item w3-button w3-light-grey" href="lecture">강의추천</a>
            <a class="w3-bar-item w3-button" href="club">동아리모집</a>
            <a class="w3-bar-item w3-button" href="scholarship3">위세광명정보</a>
            <a class="w3-bar-item w3-button w3-hide-small" href="notice">공지사항</a>
        </div>
    </div>
</header>

<!-- Modal -->
<div class="menu" style="margin-left:100px; margin-right:100px">
    <div class="w3-row-padding w3-center w3-margin-top">

        <div class="w3-third">
            <div class="w3-card w3-container" style="min-height:300px">
                <a class="w3-button"   href="http://www.semyung.ac.kr/prog/vwBoard/bbs06/kor/sub08_02_03/list.do"  target="_blank" > <h3>장학정보</h3></a><br>


                <i class="fa fa-desktop w3-margin-bottom w3-text-theme" style="font-size:120px"></i>

            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card w3-container" style="min-height:300px">
                <a class="w3-button" href="http://www.semyung.ac.kr/prog/schedule/kor/sub04_02/123/haksa.do" target="_blank"> <h3>학사일정</h3></a><br>
                <i class="fa fa-male w3-margin-bottom w3-text-theme" style="font-size:120px"></i>

            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card w3-container" style="min-height:300px">
                <a class="w3-button" href="http://www.semyung.ac.kr/kor/sub05_04_01.do" target="_blank"> <h3>셔틀버스</h3></a><br>
                <i class="fa fa-bus w3-margin-bottom w3-text-theme" style="font-size:120px"></i>

            </div>
        </div>
    </div>
</div>

<div class="w3-container"  style="margin-left:100px; margin-right:100px">
    <hr>
    <div class="w3-center">
        <h2>동아리모집 현황</h2>

    </div>
</div>

<div class="w3-row-padding"  style="margin-left:100px; margin-right:100px">


    <div class="w3-container">
        <div class="w3-card white">
            <table class="w3-table w3-striped w3-white">
                <tr>
                    <th>제목</th>
                    <th>소개</th>
                    <th>등록일</th>
                </tr>
                <tr> </tr>
                <?php $__empty_1 = true; $__currentLoopData = $club; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clubs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <th><?php echo $__env->make('club.partial.club', compact('club'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></th>
                        <th> <?php echo e($clubs-> content1); ?> </th>
                        <th><?php echo e($clubs->updated_at); ?></th>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <th> </th>
                    <tr>글이 없습니다.</tr>
                <?php endif; ?>
            </table>
            <div class="w3-container w3-light-grey w3-large w3-border-top"><span class="w3-right"><a href="club" target="_blank">More </a></span></div>
        </div>
    </div>
</div>



<div class="w3-container"  style="margin-left:100px; margin-right:100px">
    <hr>
    <div class="w3-center">
        <a class="w3-bar-item w3-button" href="notice"><h2>공지사항</h2></a>

    </div>
    <div class="w3-responsive w3-card-4">
        <div class="table">
            <table class="w3-table w3-striped w3-white">
                <tr>
                    <th> </th>
                    <th>등록번호</th>
                    <th>제목</th>
                    <th>등록일</th>
                    <th>작성자</th>
                </tr>
                <?php $__empty_1 = true; $__currentLoopData = $notice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notices): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <th>  </th>
                        <th><?php echo e($notices->id); ?></th>
                        <th><?php echo $__env->make('notice.partial.notice', compact('notice'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></th>
                        <th><?php echo e($notices->updated_at); ?></th>
                        <th><?php echo e($notices->user->name); ?></th>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <th> </th>
                    <tr>글이 없습니다.</tr>
                <?php endif; ?>
            </table>

        </div>


    </div>


    <br>

    <!-- Footer -->
    <footer class="w3-container w3-theme-dark w3-padding-16">
    </footer>
    <script>
        // Side navigation
        function w3_open() {
            var x = document.getElementById("mySidebar");
            x.style.width = "100%";
            x.style.fontSize = "40px";
            x.style.paddingTop = "10%";
            x.style.display = "block";
        }
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }

        // Tabs
        function openCity(evt, cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            var activebtn = document.getElementsByClassName("testbtn");
            for (i = 0; i < x.length; i++) {
                activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " w3-dark-grey";
        }

        var mybtn = document.getElementsByClassName("testbtn")[0];
        //mybtn.click(); 여기부분

        // Accordions
        function myAccFunc(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

        // Slideshows
        var slideIndex = 1;

        function plusDivs(n) {
            slideIndex = slideIndex + n;
            showDivs(slideIndex);
        }

        function showDivs(n) {
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length} ;
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            //x[slideIndex-1].style.display = "block"; 여기부분
        }

        showDivs(1);

        // Progress Bars
        function move() {
            var elem = document.getElementById("myBar");
            var width = 5;
            var id = setInterval(frame, 10);
            function frame() {
                if (width == 100) {
                    clearInterval(id);
                } else {
                    width++;
                    elem.style.width = width + '%';
                    elem.innerHTML = width * 1  + '%';
                }
            }
        }
    </script>

</body>
</html>