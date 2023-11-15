<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Cairo' , sans-serif;
}

body{
    overflow: hidden;
    
}
.logo{
    display: flex;
    position: relative;
    width: 210px;
    height: 150px;
    justify-content: center;
}

@media only screen and (min-width: 320px){
    .logo{
        right: -80px;
    }
    .title {
        text-align: center;
        max-width: 360px;
        margin: 0 auto;
    }
    .container{
        width: 330px;
    }
}
@media only screen and (min-width: 480px){
    .logo{
        right: -80px;
    }
    .container{
        width: 330px;
    }
}
@media only screen and (min-width: 1200px){
    .logo{
        right: -210px;
    }
    .container{
        width: 430px;
    }
}
@media only screen and (min-width: 1280px){
    .logo{
        right: -100px;
    }
    .container{
        width: 400px;
    }
}
section{
    display: flex;
    justify-content: center;
    align-items:center;
    min-height: 100vh;
}
.title{
    text-align: center;
}

.box{
    position: relative;
}



.container{
    position: relative;
    min-height: 400px;
    background: rgba(32, 20, 20, 0.1);
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-left: 1px solid rgba(255, 255, 255, 0.2);
}

.form h2,h4{
    text-align: center;
    font-family: 'cairo',sans-serif;
    font-weight: 500;
}

.form .inputBox{
    padding: 0px 0px;
    background-color: #cbc3c3b8;
    color: #1abc9c;
    line-height: 1;
    border-radius: 15px;
    margin: 7px;
}
a{
    text-align: center;
    display: inline-block;
    width: 100%;
    border-radius: 25px;
    font-size: 16px;
    letter-spacing: 1px;
    color: #000;
    box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.05);
}
.form .inputBox input::placeholder{
    color: rgb(245, 150, 150);
    text-align: center;
}

.form .inputBox input[type="submit"]
{
    background: #cbc3c3b8;
    color: #000;
    max-width: 325px;
    height: 20px;
    cursor: pointer;
    margin-top: 20px;
    margin-bottom: 20px;
    font-weight: 600;
    font-size: 14px;
    outline: none;
    border: none;
}

.form .inputBox input[type="submit"]:hover{
    background-color: transparent;
    color: #fff;
}
.forget{
    margin-top: 5px;
    color: #000;
    text-align: center;
}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    
    <body>
        <section>
            <div class="box">
                <div class="container">
                    <div class="form">
                        <h4>تسجيل الدخول</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="inputBox">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="inputBox">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            <br>
                            <h6 class="forget">في حال لا يوجد إشتراك ؟</h6>
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">التسجيل في النظام؟</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
