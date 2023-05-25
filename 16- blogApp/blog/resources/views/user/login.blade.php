<html>
<head>
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}
    <title> login </title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap");
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url("../images/heading-bg.jpg");
            font-family: "Josefin Sans", sans-serif;
        }

        form {
            background-color: #fff;
            padding : 50px;
            border-radius: 20px;
            text-align: center;
        }

        form input {
            border : 1px solid #7453fc;
            border-radius: 20px;
            padding : 10px;
            width : 270px;
            height: 45px;
        }

        form input:hover{
            background-color: #7453fc;
            color: #fff;
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
<form action="{{route('user.loginAuth')}}" method="post">

    @csrf
    <!-- Email input -->

        <label class="form-label" for="email">Email address</label> <br> <br>
        <input type="text" id="emailOrUserName" name="email" class="form-control" onchange="test()" /> <br> <br>

    <!-- Password input -->

        <label class="form-label" for="form2Example2">Password</label> <br> <br>
        <input type="password" id="form2Example2" name="password" class="form-control" /> <br> <br>



    <!-- Submit button -->
    <div>
    <button type="submit">Sign in</button>
    </div>

    <!-- Register buttons -->

        <p>Not a member? <a href="{{Route('user.register')}}">Register</a></p>

</form>

<script>
    function test() {
        const input = document.getElementById('emailOrUserName');
        const test = emailOrUserName.value;
        if(test.includes('@')) {
            input.setAttribute('name','email')
            console.log(input)
        } else {
            input.setAttribute('name','userName')
            console.log(input)
        }

    }


</script>
</body>
</html>
