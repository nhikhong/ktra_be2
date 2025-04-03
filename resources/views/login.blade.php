<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #74ebd5, #acb6e5);
        }
        nav, footer {
            width: 100%;
            text-align: center;
            padding: 10px 0;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            border-radius: 10px;
            margin: 10px 0;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }
        nav a:hover {
            text-decoration: underline;
        }
        nav a.active {
            color: yellow;
        }
        .login-container {
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 320px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .login-container h3 {
            margin-bottom: 20px;
            color: #333;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .remember {
            display: flex;
            align-items: center;
            justify-content: start;
        }
        .remember input {
            margin-right: 5px;
        }
        .forgot-password {
            display: block;
            margin: 10px 0;
            color: blue;
            text-decoration: none;
            transition: 0.3s;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
        .login-btn {
            background: linear-gradient(to right, #56ccf2, #2f80ed);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .login-btn:hover {
            background: linear-gradient(to right, #2f80ed, #56ccf2);
        }
        footer {
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav>
        <a href="#">Home</a> | <a href="#" class="active">Đăng nhập</a> | <a href="{{ route('user.createUser') }}">Đăng ký</a>
    </nav>

    <div class="login-container">
        <h3>Màn hình đăng nhập</h3>
        <form method="POST" action="{{ route('user.authUser') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                           autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Signin</button>
                                </div>
                            </form>
    </div>

    <footer>
        Lập trình web ©2024
    </footer>
</body>
</html>
