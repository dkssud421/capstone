<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>위세광명</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body, html {
            height: 100%;
            font-family: "Inconsolata", sans-serif;
        }

        .bgimg {
            background-position: center;
            background-size: cover;
            background-image: url("/w3images/coffeehouse.jpg");
            min-height: 75%;
        }

        .menu {
            display: none;
        }
    </style>


</head>
<body class="w3-white w3-content" style="max-width:1600px">

<!-- About Container -->
<div class="w3-container" id="about">
    <div class="w3-content">
        <h1 class="w3-center ">위세광명</h1>
        <div class="w3-section w3-bottombar">
        </div>

        <div class="w3-container">
            <p>

                <span style=" font-size:1.5em;"> 목 적</span>  도전 성장 자립하는 CHARM 인재양성

            </p>

            <p>
                <span style=" font-size:1.5em;"> 선발 방법</span><br />
                가. 선발대상 : 각 분야별 취득한 점수 합계가 기준 점수(25점) 이상인 학생<br />
                나. 신청방법 <br />
                1) 항목 신청방법: 포털 학사행정 -> ACE -> 비전설계 -> 학생활동신청 (시작일, 종료일은 해당 학기 기간 내 날짜 입력)<br />
                2) 장학금 신청 방법 : 위세광명 포인트 25점 이상을 취득 후 포털 학사행정 -> ACE -> 비전설계 -> 위세광명장학신청을 통해 신청함.<br />



            </p>

            <h3>역량 항목별 선발 기준 및 점수</h3>
            <div class="w3-padding-32">
            <div class="w3-bar w3-black ">
                <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,'Confidence')">Confidence</button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Humanity')">Humanity</button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Adaptability')">Adaptability</button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Relationship')">Relationship</button>
                <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Mastery')">Mastery</button>


            </div>

            <div id="Confidence" class="w3-container w3-border city ">
                <img src="Confidence.png"  style="padding:4px;width:100%">

            </div>

            <div id="Humanity" class="w3-container w3-border city" style="display:none">
                <img src="humanity.png"  style="padding:4px;width:100%">

            </div>

            <div id="Adaptability" class="w3-container w3-border city" style="display:none">
                <img src="adaptability.png"  style="padding:4px;width:100%">

            </div>

            <div id="Relationship" class="w3-container w3-border city" style="display:none">
                <img src="relationship.png"  style="padding:4px;width:100%">

            </div>

            <div id="Mastery" class="w3-container w3-border city" style="display:none">
                <img src="mastery.png"  style="padding:4px;width:100%">

            </div>
        </div>
        </div>



    </div>
</div>

<script>
    function openCity(evt, cityName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " w3-red";
    }
</script>

</body>
</html>

