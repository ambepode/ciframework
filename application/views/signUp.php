<html>
<head>
    <?=$css?>
</head>
<body class="align">
    <div class="grid">
        <form action="<?=str_replace('/index.php', '', $this->input->server('PHP_SELF'))?>" method="post" class="form login">
            <header class="login__header">
                <h3 class="login__title">Sign Up</h3>
            </header>
            <div class="login__body">
                <div class="form__field">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form__field">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="form__field">
                    <input type="password" name="password2" placeholder="Confirm Password" required>
                </div>
            </div>
            <footer class="login__footer">
                <input id="submitSignUpForm" type="submit" value="Sign Up">
            </footer>
        </form>
    </div>
    <?=$js?>
</body>
</html>