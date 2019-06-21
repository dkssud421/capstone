
<!DOCTYPE html>
<html>
<head>


    <title>동아리부원모집</title>
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
        <h4><b>동아리부원모집</b></h4>
        <p class="w3-text-grey">동아리부원모집 페이지</p>
    </div>
    <div class="w3-bar-block">
        <a href="/home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-large"><i class="fa fa-home fa-fw w3-margin-right"></i>Home</a>
        <a href="/club/create" onclick="w3_close()" class="w3-bar-item w3-button w3-padding  w3-large"><i class="fa fa-th-large fa-fw w3-margin-right"></i>게시글작성</a>
        <div style= "position:absolute; left: 0px; bottom:40px;">
            <a class="w3-bar-item w3-button w3-padding w3-large" href="http://www.semyung.ac.kr/kor.do" target="_blank">세명대학교</a>
            <a class="w3-bar-item w3-button w3-padding w3-large" href= "http://setopia.semyung.ac.kr/main/index.jsp" target="_blank">포탈시스템</a>
            <a class="w3-bar-item w3-button w3-padding w3-large" href="http://lib.semyung.ac.kr/" target="_blank">민송도서관</a>
        </div>
        <!--<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>취업동아리</a>
<a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>봉사동아리</a>-->
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
            <h1><b>동아리부원모집</b></h1>
            <div class="w3-section w3-bottombar w3-padding-16">
            </div>
        </div>
    </header>

    <!-- First Photo Grid-->
    <div class="w3-row-padding">
        <div class="w3-row-padding w3-padding-16" style="margin:0 -16px">
            <div class="table">
                <table class="w3-table w3-striped w3-white">
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>소개</th>
                        <th>등록일</th>
                        <th>작성자</th>
                    </tr>
                    <tr> </tr>
                    <?php $__empty_1 = true; $__currentLoopData = $club; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clubs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <th><?php echo e($clubs->id); ?></th>
                            <th><?php echo $__env->make('club.partial.club', compact('club'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></th>
                            <th> <?php echo e($clubs-> content1); ?> </th>
                            <th><?php echo e($clubs->updated_at); ?></th>
                            <th><?php echo e($clubs->user->name); ?></th>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <th> </th>
                        <tr>글이 없습니다.</tr>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <?php if($club->count()): ?>
        <div class="w3-bar">
            <?php echo $club->appends(Request::except('page'))->render(); ?>

        </div>
    <?php endif; ?>
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

</body>
</html>
