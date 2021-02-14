<html>
<head>
<title>Benutzer Login</title>
<link rel="stylesheet" type="text/css" href="styles/main-styles.css"/>
<link rel="stylesheet" type="text/css" href="styles/login-styles.css"/>
</head>
<body>
    <div>
        <form action="index.php?aktion=log" method="post" id="frmLogin" onSubmit="return validate();">
            <div class="demo-table">

                <div class="form-head">Login</div>
                <?php
                if(isset($_SESSION["errorMessage"])) {
                ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php
                unset($_SESSION["errorMessage"]);
                }
                ?>
                <div class="field-column">
                    <div>
                        <label for="username">Email:</label><span id="user_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="email" id="user_name" type="email"
                            class="demo-input-box">
                    </div>
                </div>
                <div class="field-column">
                    <div>
                        <label for="password">Passwort:</label><span id="password_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="passwort" id="password" type="password"
                            class="demo-input-box">
                    </div>
                </div>
                <div class=field-column>
                    <div>
                        <input type="submit" name="submit" value="Login"
                        class="btnLogin"></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="models/log.js"></script>
</body>
</html>
