<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin</title>
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
        .nav-bar, .footer {
            width: 100%;
            text-align: center;
            padding: 10px 0;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            border-radius: 10px;
            margin: 10px 0;
            font-weight: bold;
            color: white;
        }
        .nav-bar a {
            margin: 0 15px;
            text-decoration: none;
            color: white;
            transition: 0.3s;
        }
        .nav-bar a:hover {
            text-decoration: underline;
        }
        .form-container {
            background: white;
            padding: 20px;
            width: 350px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .form-container h2 {
            margin-bottom: 15px;
            color: #333;
        }
        .form-container input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container a {
            display: block;
            margin: 10px 0;
            color: #2f80ed;
            text-decoration: none;
            font-weight: bold;
        }
        .form-container a:hover {
            text-decoration: underline;
        }
        .form-container button {
            background: #2f80ed;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        .form-container button:hover {
            background: #56ccf2;
        }
        .footer {
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="nav-bar">
        <a href="#">Home</a> | <a href="#">Đăng nhập</a> | <a href="#">Đăng ký</a>
    </div>

    <div class="form-container">
        <h2>Màn hình cập nhật</h2>
        <form action="{{ route('user.postUpdateUser') }}" method="POST">
                                @csrf
                                <input name="id" type="hidden" value="{{$user->id}}">
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                           value="{{ $user->name }}"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           value="{{ $user->email }}"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Update</button>
                                </div>
                            </form>
    </div>

    <div class="footer">
        Lập trình web @2024
    </div>
</body>
</html>
