<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        /* @media only screen and (min-width: 240px) and (max-width: 800px) {
            form {
                min-width: 40% !important;
                max-width: 40% !important;
            }
        } */

        body::before {
            content: "";
            height: 100vh;
            width: 100vw;
            position: absolute;
            background: url("nature.jpg") no-repeat center center/cover;
            background-repeat: no-repeat;
            background-size: cover;
            z-index: -1;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            overflow: hidden;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            display: flex;
            position: relative;
            padding: 30px;
            border-radius: 12px;
            font-family: 'Times New Roman', Times, serif;
            align-items: center;
            justify-content: center;
            border: 2px solid white;
            color: white;
            box-shadow: 0px 0px 20px 7px black;
            flex-direction: column;
            height: 50%;
        }

        form input {
            outline: none;
            padding: 9px;
            width: 212px;
            border-radius: 12px;
            font-family: 'Times New Roman', Times, serif;
            position: relative;
            margin: 3px;
            border: 2px solid rgb(184, 180, 180);
        }

        input[type]:focus {
            box-shadow: 0px 0px 5px 3px blue;
        }

        input[type="submit"] {
            box-shadow: none;
            width: 236px;
        }

        input[type="submit"]:focus {
            box-shadow: none;
        }

        input[type="submit"]:hover {
            cursor: pointer;
            background-color: rgb(226, 223, 223);
        }
        span{
            color: red;
            font-weight: bold;
        }
        h2 {
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="check_password.php" class="fill-up" method="post">
            <h2>Login</h2>
            <div>
                <input type=" text" name="username" id="username" placeholder="Username" autofocus required>
            </div>
            <span id="username_span">Invalid Username</span>
            <div>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <span id="password_span">Invalid Password</span>
            <div class="g-recaptcha" data-sitekey="6Lftf4EpAAAAAEL5pgoqcQY13KmAfNw01StKmtUp"></div>
            <div>
                <input type="submit" value="Login" name="login">
            </div>
        </form>
    </div>
</body>

<!-- <script>
    let span1 = document.getElementById("username_span");
    let span2 = document.getElementById("password_span");
    let username = document.getElementById("username");
    let password = document.getElementById("username");

    if (username.value == "namangupta78200@gmail.com") {
        if (password.value == "naman78200") {
            location.href = "admin_page.php";
        }
        else {
            span2.style.display = "inline";
        }
        location.href = "admin_page.php";
    }
    else {
        span1.style.display = "inline";
    }

</script> -->

</html>