<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta charset="UTF-8">
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
    <div class="w3-content" style="max-width:700px">
        <h1 class="w3-center w3-padding-32 w3-xlarge">{{$clubs->title}}</h1>
         <div class="w3-section w3-bottombar">
        </div>

        <div class="w3-panel  w3-light-grey w3-padding-32">
            <p> 설명: {{$clubs->content2}} </p>

        </div>

        <p><strong>작성자:</strong> {{$clubs->user->name}}</p>
        <p><strong>신청서 보낼 곳:</strong> {{$clubs->user->email}}</p>

    </div>
</div>



</body>
</html>