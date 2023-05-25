<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> login </title>
    <style>
        body {
            width: 40%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        input {
            display: block;
        }

        input[type = "radio"] {
            display: inline;
        }


    </style>
</head>
<body>



<form action="{{route('user.update',$user->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <h1>Update page</h1>
    <label for="fullName">Full Name:</label>
    <input type="text" id="fullName" name="fullName" value = {{$user->fullName}} required>

    <label for="userName">Username:</label>
    <input type="text" id="userName" name="userName" value = {{$user->userName}} required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value = {{$user->email}} required>

    <label for="role">Role:</label> <br>
    <input type="radio" id="userRole" name="role" value="user"  checked>
    <label for="userRole">User</label>
    <input type="radio" id="authorRole" name="role" value="author">
    <label for="authorRole">Author</label> <br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" value = {{$user->password}} required> <br>


    <input type="submit" value="Register">
    <a href="{{route("user.profile",$user->id)}}">back to profile</a> <br>
    <a href="{{route("user.login")}}">back to login</a>
</form>


</body>
</html>

