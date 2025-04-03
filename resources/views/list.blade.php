<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách user</title>
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
        }
        .nav-bar a {
            margin: 0 15px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }
        .nav-bar a:hover {
            text-decoration: underline;
        }
        h2 {
            color: white;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px 0;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #2f80ed;
            color: white;
        }
        td a {
            text-decoration: none;
            color: blue;
            font-weight: bold;
            transition: 0.3s;
        }
        td a:hover {
            text-decoration: underline;
        }
        .pagination {
            margin: 10px 0;
        }
        .pagination a {
            margin: 0 5px;
            text-decoration: none;
            color: white;
            background: #2f80ed;
            padding: 5px 10px;
            border-radius: 5px;
            transition: 0.3s;
        }
        .pagination a:hover {
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

    <h2>Danh sách user</h2>
    <table>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Email</th>
            <th>Thao tác</th>
        </tr>
        @foreach($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                <th>
                                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                                </th>
                            </tr>
                        @endforeach

    <div class="pagination">
        <a href="#">Previous</a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">Next</a>
    </div>

    <div class="footer">
        Lập trình web @2024
    </div>
</body>
</html>