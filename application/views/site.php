<html>
<head>
    <?=$css?>
</head>
<body class="align">
    <div class="grid">
        <form action="/" method="post" class="form login">
            <header class="login__header">
                <h3 class="login__title">Login</h3>
            </header>
            <div class="login__body">
                <div class="form__field">
                    <input type="email" name="email" placeholder="Email" required>
                </div>

                <div class="form__field">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
            </div>
            <footer class="login__footer">
                <input type="submit" value="Login">
                <a class="signUp" href="/site/signUp">SignUp</a>
                <p><span class="icon icon--info">?</span><a href="#">Forgot Password</a></p>
            </footer>
        </form>
    </div>
    <?=$js?>
</body>
</html>