<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylelogin.css">
    <title>Name</title>
</head>
<body>
    <section>
        <div class="form-box">
            <form action="">
                <h2>Login</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" required>
                    <label for="">Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" required>
                    <label for="">Password</label>
                </div>
                <div class="forget">
                    <lable for=""><input type="checkbox">Remember Me</lable>
                    <a href="#">Forget Password</a>
                </div>
                <button>Log in </button>
                <div class="register">
                    <p>Don't have a account <a href="#">Register</a></p>
                </div>
            </form>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>