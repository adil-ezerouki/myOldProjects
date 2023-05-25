<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> login </title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap");
        body {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background-image: url("../images/heading-bg.jpg");
            font-family: "Josefin Sans", sans-serif;
        }

        form {
            background-color: #fff;
            padding : 20px 50px;
            border-radius: 20px;
            text-align: center;
        }

        form input {
            border : 1px solid #7453fc;
            border-radius: 20px;
            padding : 10px;
            width : 270px;
            margin-bottom: 0 !important;
            text-align: center;
        }

        form input:hover{
            background-color: #7453fc;
            color: #fff;
        }

        form input[type='radio'] {
            width: 20px;
        }


        form button {
            background-color: #7453fc;
            color: #1e1e1e;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 40px;
            text-align: center;
            margin: 0 20px;
            border-radius: 10px;
            border-bottom: 7px solid #000000;
            border-bottom-left-radius: 13px;
            border-bottom-right-radius: 13px;
            color: #fff;
        }
        form button:active {
            border-bottom: none;
            margin-top: 6px;
        }

        form div {
            height: 50px;
        }
    </style>
</head>
<body>

    <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="text" id="fullName" name="fullName" required placeholder="type your fullName"> <br><br>


        <input type="text" id="userName" name="userName" required placeholder="type your Username"> <br><br>

        <input type="email" id="email" name="email" required placeholder="type your email"> <br><br>

        <label for="role">Role:</label> <br>
        <input type="radio" id="userRole" name="role" value="user" checked>
        <label for="userRole">User</label>
        <input type="radio" id="authorRole" name="role" value="author">
        <label for="authorRole">Author</label> <br> <br>

        <input type="password" id="password" name="password" required placeholder="type your password"> <br><br>

        <label for="profilePic">Profile Picture:</label> <br>
        <input type="file" id="profilePic" name="profilePic" accept="image/*"> <br> <br>

       <p> Already Registered ? <a href="{{route("user.login")}}">back to login</a></p>

        <div>
            <button type="submit" >Register</button>
        </div>
    </form>

</form>
</body>
</html>

