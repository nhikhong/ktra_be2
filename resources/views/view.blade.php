<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết user</title>
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
        .detail-container {
            background: white;
            padding: 20px;
            width: 350px;
            text-align: left;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .detail-container h2 {
            text-align: center;
            color: #333;
        }
        .detail-container p {
            margin: 10px 0;
            font-size: 16px;
            color: #555;
        }
        .detail-container button {
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
        .detail-container button:hover {
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
        <a href="#">Home</a> | <a href="#">Đăng xuất</a>
    </div>

    <div class="detail-container">
        <h2>Màn hình chi tiết</h2>
        <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$messi->id}}</td>
                            <td>{{$messi->name}}</td>
                            <td>{{$messi->email}}</td>
                        </tr>
                    </tbody>
                </table>
    </div>

    <div class="footer">
        Lập trình web @2024
    </div>
</body>
</html>