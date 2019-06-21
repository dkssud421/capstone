<!DOCTYPE html>
<html>
<head>
    <title>동아리게시글</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
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
    <style >
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

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

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

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>

    <style>
        .star_rating {
            font-size: 0;
            letter-spacing: -4px;
        }

        .star_rating a {
            font-size: 22px;
            letter-spacing: 0;
            display: inline-block;
            margin-left: 5px;
            color: #ccc;
            text-decoration: none;
        }

        .star_rating a:first-child {
            margin-left: 0;
        }

        .star_rating a.on {
            color: #777;
        }
    </style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:100px; margin-right:100px">

    <!-- Header -->
    <header id="portfolio">


        <div class="w3-container w3-padding-16">
            <h1><b>게시글작성</b></h1></a>
            <div class="w3-section w3-bottombar "></div>
        </div>
    </header>

    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1400px;">

        <div class="container">
            <form method="POST" action="{{route('club.store')}}" >
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-25">
                        <label for="title">동아리이름</label>
                    </div>
                    <input type="text" name="title" id="title" value="{{old('title') }}" class="form-control"/>
                    {!!  $errors->first('title', '<span class="from-error">:message</span>') !!}
                </div>

                <div class="from-group {{$errors->has('content1') ? 'has-error' : ''}}">
                    <label for="content1">간략한 홍보</label>
                    <textarea name="content1" id="content1" rows="10" class="from-control">{{ old('content1') }}</textarea>
                    {!!  $errors->first('content1', '<span class="from-error">:message</span>') !!}
                </div>

                <div class="from-group {{$errors->has('content2') ? 'has-error' : ''}}">
                    <label for="content2">구체적인 동아리 소개</label>
                    <textarea name="content2" id="content2" rows="20" class="from-control">{{ old('content2') }}</textarea>
                    {!!  $errors->first('content2', '<span class="from-error">:message</span>') !!}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        게시하기
                    </button>
                </div>
            </form>

        </div>
    </div>
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
    $( ".star_rating a" ).click(function() {
        $(this).parent().children("a").removeClass("on");
        $(this).addClass("on").prevAll("a").addClass("on");
        return false;
    });
</script>

</body>
</html>
