<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0 auto;
            padding: 50px
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-top: 15px;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        a {
            text-decoration: none;
            background-color: aqua;
            color: black;
            padding: 10px 25px;
            margin: 10px;
        }

        a:hover {
            color: azure;
            background-color: rgba(175, 73, 73, 0.76)
        }

    </style>
</head>

<body>

    <h2>{{$title}}</h2> <a href="form.blade.php">Create New User</a>

    <table>
        <tr>
            <th>Serial NUm</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>password</th>
            <th>social_login_token</th>
            <th>role</th>
        </tr>
        <?php $Serial=1; ?>
        @foreach ($users as $user)


        <tr>
            <td>{{ $Serial++ }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email  }}</td>
            <td>{{ $user->phone  }}</td>
            <td>{{ $user->password  }}</td>
            <td>{{ $user->social_login_token  }}</td>
            <td>{{ $user->role  }}</td>

        </tr>
        @endforeach
    </table>
</body>

</html>