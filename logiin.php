<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SiGaBer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap');

        html,
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100%;
            font-family: 'Teko', sans-serif;
        }

        .login-form {
            position: reltive;
            min-height: 100vh;
            z-index: 0;
            background: #AFDA90;
            padding: 40px;
            justify-content: center;
            display: grid;
            grid-template-rows: 1fr auto 1fr;
            align-items: center;
        }

        .container {
            max-width: 890px;
            margin: 0 auto;
        }

        .login-form h2 {
            font-size: 30px;
            line-height: 40px;
            margin-bottom: 5px;
            font-weight: 500;
            color: black;
            text-align: center;
        }

        .login-form .main {
            position: relative;
            display: flex;
            margin: 30px 0;
        }

        .content {
            flex-basis: 50%;
            padding: 3em 3em;
            /*background: #AFDA90;*/
            background: white;
            box-shadow: 2px 9px 49px -17px rgba(0, 0, 0, 0.1);
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }

        .form-img {
            flex-basis: 50%;
            background: white;
            background-size: cover;
            padding: 40px;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
            align-items: center;
            display: grid;
        }

        .form-img img {
            max-width: 100%;
        }

        .btn,
        button,
        input {
            border-radius: 35px;
        }

        .btn:hover,
        button:hover {
            transition: 0.5s ease;
        }

        a {
            text-decoration: none;
        }

        .login-form form {
            margin: 30px 0;
        }

        .login-form input {
            outline: none;
            margin-bottom: 15px;
            font-stretch: 16px;
            color: #999;
            text-align: left;
            padding: 14px 20px;
            width: 100%;
            display: inline-block;
            box-sizing: border-box;

            border: 1px solid black;
            background: white;
            transition: 0.3s ease;
        }

        .login-form input:focus {
            background: transparant;
            border: 1px solid black;
        }

        .login-form button {
            font-size: 18px;
            color: white;
            width: 100%;
            background: #68b92e;
            border: none;
            padding: 14px 15px;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .login-form button:hover {
            background: #5FA92A;
        }

        @media(max-width: 735px) {
            .login-form .main {
                flex-direction: column;
            }

            .login-form form {
                margin-top: 30px;
                margin-bottom: 10px;
            }

            .form-img {
                border-radius: 0;
                border-bottom-left-radius: 8px;
                border-bottom-right-radius: 8px;
                order: 2;
            }

            .content {
                order: 1;
                border-radius: 0;
                border-top-left-radius: 8px;
                border-top-right-radius: 8px;
            }
        }
    </style>


</head>

<body>
    <div class="login-form">
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>Silahkan Login</h2>
                    <form novalidate action="proses/proses_login.php" method="POST">
                        <input name="name" type="email" placeholder="User Email" required autofocus="">
                        <input name="password" type="password" placeholder="User Password" required autofocus="">

                        <button class="btn" type="submit" name="submit_validate" value="abc">Login</button>
                    </form>
                </div>
                <div class="form-img">
                    <img src="img/bg09.png">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>