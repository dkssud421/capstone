<!DOCTYPE html>
<html>
<head>
    <title>공지사항 게시글</title>
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





<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:100px; margin-right:100px">

    <!-- Header -->
    <header id="portfolio">
        <div class="w3-container w3-bottombar w3-section">
            <h1><b>공지사항</b></h1>

        </div>
    </header>

    <div class="w3-section ">
        <h3>  <span class="w3-margin-right">제목: {{$notices->title}}</span></h3>


    </div>

    <div class="w3-container w3-padding-large w3-white" style="margin-bottom:32px">
        <h4><b><p>{{$notices->content}}</p></b></h4>
        <hr>
    </div>







    <!-- End page content -->
</div>


</body>
</html>



