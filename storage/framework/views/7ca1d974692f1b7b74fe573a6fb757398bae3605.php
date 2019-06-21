<!DOCTYPE html>
<html>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>동아리게시글작성</title>

    <style>
        html, body, h1, h2, h3, h4, h5 {
            font-family: "Open Sans", sans-serif
        }

        w3-top{
            position: fixed;

        }

        table{

        }


    </style>

    <!-- 동아리게시글 스타일지정 -->
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }


        /*뒷배경 색깔지정 등등 설정 설정을 꺼두면 화면 줄어들었을시
            깨짐현상이 없어짐
        */
        /*.container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }*/


        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }



        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media  screen and (max-width: 300px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>

</head>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);"></a>
        <a href="/" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>HOME</a>


    </div>
</div>


<!-- 왼쪽 게시글 작성란 -->
<div class="w3-row w3-padding-64">
    <div class="w3-half w3-container">
        <h1 class="w3-text-teal">게시글작성</h1>
    </div>
</div>

<div class="w3-row w3-padding-32">
    <div class="w3-half w3-container">

        <div class="container">
            <form action="/action_page.php">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">동아리이름</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="firstname" placeholder=" name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">동아리리더</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder=" Reader..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">리더 번호</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder=" Reader number..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">분류</label>
                    </div>
                    <div class="col-75">
                        <select id="country" name="country">
                            <option value="australia">놀부 동아리</option>
                            <option value="canada">흥부 동아리</option>
                            <option value="usa">취업 동아리</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="subject">소개</label>
                    </div>
                    <div class="col-75">
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <div class="w3-half w3-container">
        <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>

    </div>
</div>
<!-- 예시 사진 첨부 -->

</body>
</html>