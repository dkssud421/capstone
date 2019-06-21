<!doctype html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <title>세명인 닷컴 회원가입</title>

    <style rel="stylesheet">
        html {
            width: 100%;
            height: 100%;
        }

        body {
            background: -webkit-linear-gradient(45deg, rgba(66, 183, 245, 0.8) 0%, rgba(66, 245, 189, 0.4) 100%);
            background: linear-gradient(45deg, rgba(66, 183, 245, 0.8) 0%, rgba(66, 245, 189, 0.4) 100%);
            color: rgba(0, 0, 0, 0.6);
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            line-height: 1.6em;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .overlay, .form-panel.one:before {
            position: absolute;
            top: 0;
            left: 0;
            display: none;
            background: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
        }

        .form {
            z-index: 15;
            position: relative;
            background: #FFFFFF;
            width: 600px;
            border-radius: 4px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            margin: 100px auto 10px;
            overflow: hidden;
        }

        .form-toggle {
            z-index: 10;
            position: absolute;
            top: 60px;
            right: 60px;
            background: #FFFFFF;
            width: 60px;
            height: 60px;
            border-radius: 100%;
            -webkit-transform-origin: center;
            -ms-transform-origin: center;
            transform-origin: center;
            -webkit-transform: translate(0, -25%) scale(0);
            -ms-transform: translate(0, -25%) scale(0);
            transform: translate(0, -25%) scale(0);
            opacity: 0;
            cursor: pointer;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        .form-toggle:before, .form-toggle:after {
            content: '';
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 30px;
            height: 4px;
            background: #4285F4;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .form-toggle:before {
            -webkit-transform: translate(-50%, -50%) rotate(45deg);
            -ms-transform: translate(-50%, -50%) rotate(45deg);
            transform: translate(-50%, -50%) rotate(45deg);
        }

        .form-toggle:after {
            -webkit-transform: translate(-50%, -50%) rotate(-45deg);
            -ms-transform: translate(-50%, -50%) rotate(-45deg);
            transform: translate(-50%, -50%) rotate(-45deg);
        }

        .form-toggle.visible {
            -webkit-transform: translate(0, -25%) scale(1);
            -ms-transform: translate(0, -25%) scale(1);
            transform: translate(0, -25%) scale(1);
            opacity: 1;
        }

        .form-group {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            margin: 0 0 20px;
        }

        .form-group:last-child {
            margin: 0;
        }

        .form-group label {
            display: block;
            margin: 0 0 10px;
            color: rgba(0, 0, 0, 0.6);
            font-size: 17px;
            font-weight: 500;
            line-height: 1;
            text-transform: uppercase;
            letter-spacing: .2em;
        }

        .two .form-group label {
            color: #FFFFFF;
        }

        .form-group input {
            outline: none;
            display: block;
            background: rgba(0, 0, 0, 0.1);
            width: 100%;
            border: 0;
            border-radius: 4px;
            box-sizing: border-box;
            padding: 12px 20px;
            color: rgba(0, 0, 0, 0.6);
            font-family: inherit;
            font-size: inherit;
            font-weight: 500;
            line-height: inherit;
            -webkit-transition: 0.3s ease;
            transition: 0.3s ease;
        }

        .form-group input:focus {
            color: rgba(0, 0, 0, 0.8);
        }

        .two .form-group input {
            color: #FFFFFF;
        }

        .two .form-group input:focus {
            color: #FFFFFF;
        }

        .form-group button {
            outline: none;
            background: #4285F4;
            width: 100%;
            border: 0;
            border-radius: 4px;
            padding: 12px 20px;
            color: #FFFFFF;
            font-family: inherit;
            font-size: inherit;
            font-weight: 500;
            line-height: inherit;
            text-transform: uppercase;
            cursor: pointer;
        }

        .two .form-group button {
            background: #FFFFFF;
            color: #4285F4;
        }

        .form-group .form-remember {
            font-size: 12px;
            font-weight: 400;
            letter-spacing: 0;
            text-transform: none;
        }

        .form-group .form-remember input[type='checkbox'] {
            display: inline-block;
            width: auto;
            margin: 0 10px 0 0;
        }

        .form-group .form-recovery {
            color: #4285F4;
            font-size: 12px;
            text-decoration: none;
        }

        .form-panel {
            padding: 60px calc(5% + 60px) 60px 60px;
            box-sizing: border-box;
        }

        .form-panel.one:before {
            content: '';
            display: block;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: 0.3s ease;
            transition: 0.3s ease;
        }

        .form-panel.one.hidden:before {
            display: block;
            opacity: 1;
            visibility: visible;
        }

        .form-panel.two {
            z-index: 5;
            position: absolute;
            top: 0;
            left: 95%;
            background: #4285F4;
            width: 100%;
            min-height: 100%;
            padding: 60px calc(10% + 60px) 60px 60px;
            -webkit-transition: 0.3s ease;
            transition: 0.3s ease;
            cursor: pointer;
        }

        .form-panel.two:before, .form-panel.two:after {
            content: '';
            display: block;
            position: absolute;
            top: 60px;
            left: 1.5%;
            background: rgba(255, 255, 255, 0.2);
            height: 30px;
            width: 2px;
            -webkit-transition: 0.3s ease;
            transition: 0.3s ease;
        }

        .form-panel.two:after {
            left: 3%;
        }

        .form-panel.two:hover {
            left: 93%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form-panel.two:hover:before, .form-panel.two:hover:after {
            opacity: 0;
        }

        .form-panel.two.active {
            left: 10%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            cursor: default;
        }

        .form-panel.two.active:before, .form-panel.two.active:after {
            opacity: 0;
        }

        .form-header {
            margin: 0 0 40px;
        }

        .form-header h1 {
            padding: 4px 0;
            color: #4285F4;
            font-size: 24px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .two .form-header h1 {
            position: relative;
            z-index: 40;
            color: #FFFFFF;
        }

        .pen-footer {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 600px;
            margin: 20px auto 100px;
        }

        .pen-footer a {
            color: #FFFFFF;
            font-size: 12px;
            text-decoration: none;
            text-shadow: 1px 2px 0 rgba(0, 0, 0, 0.1);
        }

        .pen-footer a .material-icons {
            width: 12px;
            margin: 0 5px;
            vertical-align: middle;
            font-size: 12px;
        }

        .cp-fab {
            background: #FFFFFF !important;
            color: #4285F4 !important;
        }
    </style>
</head>
<body>

<div class="form">
    <div class="form-toggle"></div>
    <div class="form-panel one">
        <div class="form-header">
            <h1>세명인닷컴 회원가입</h1>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('NAME') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('EMAIL ADDRESS') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('PASSWORD') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('PASSWORD CONFIRM') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('STUDENT NUMBER') }}</label>
                            <div class="col-md-6">
                                <input id="studentnum" type="text" class="form-control" name="studentnum" value="{{ old('studentnum') }}" required>

                                @if ($errors->has('studentnum'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('studentnum') }}</strong>
                                     </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var panelOne = $('.form-panel.two').height(),
                    panelTwo = $('.form-panel.two')[0].scrollHeight;

                $('.form-panel.two').not('.form-panel.two.active').on('click', function(e) {
                    e.preventDefault();

                    $('.form-toggle').addClass('visible');
                    $('.form-panel.one').addClass('hidden');
                    $('.form-panel.two').addClass('active');
                    $('.form').animate({
                        'height': panelTwo
                    }, 200);
                });

                $('.form-toggle').on('click', function(e) {
                    e.preventDefault();
                    $(this).removeClass('visible');
                    $('.form-panel.one').removeClass('hidden');
                    $('.form-panel.two').removeClass('active');
                    $('.form').animate({
                        'height': panelOne
                    }, 200);
                });
            });

        </script>
</body>
</html>