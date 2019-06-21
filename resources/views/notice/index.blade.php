<!DOCTYPE html>
<html>
<head>
    <title>공지사항</title>
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

<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar">
    <br>
    <div class="w3-container">
        <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
            <i class="fa fa-remove"></i>
        </a>
        <h4><b>공지사항</b></h4>
        <p class="w3-text-grey">세명인닷컴 공지사항</p>
    </div>
    <div class="w3-bar-block">
        <a href="/home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home fa-fw w3-margin-right"></i>Home</a>
        <div style= "position:absolute; left: 0px; bottom:40px;">
            <a class="w3-bar-item w3-button w3-padding w3-large" href="http://www.semyung.ac.kr/kor.do" target="_blank">세명대학교</a>
            <a class="w3-bar-item w3-button w3-padding w3-large" href= "http://setopia.semyung.ac.kr/main/index.jsp" target="_blank">포탈시스템</a>
            <a class="w3-bar-item w3-button w3-padding w3-large" href="http://lib.semyung.ac.kr/" target="_blank">민송도서관</a>
        </div>
    </div>
</nav>
<div class="w3-main" style="margin-left:300px">
    <header id="portfolio">
        <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
        <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
        <div class="w3-container">
            <h1><b>공지사항</b></h1>
            <div class="w3-section w3-bottombar w3-padding-16"></div>
        </div>
    </header>

    <div class="w3-panel">
        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="table">
                <table class="w3-table w3-striped w3-white">
                    <tr>
                        <th> </th>
                        <th>등록번호</th>
                        <th>제목</th>
                        <th>등록일</th>
                        <th>작성자</th>
                    </tr>
                    @forelse($notice as $notices)
                        <tr>
                            <th>  </th>
                            <th>{{$notices->id}}</th>
                            <th>@include('notice.partial.notice', compact('notice'))</th>
                            <th>{{$notices->updated_at}}</th>
                            <th>{{$notices->user->name}}</th>
                        </tr>
                    @empty
                        <th> </th>
                        <tr>글이 없습니다.</tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>

@if($notice->count())
    <div class="text-center">
        {!! $notice->appends(Request::except('page'))->render() !!}
    </div>
@endif

@if($notice->count())
    <div class="w3-center w3-padding-32">
        <div class="w3-bar">
            {!! $notice->render() !!}
        </div>
    </div>
@endif
</body>
</html>

