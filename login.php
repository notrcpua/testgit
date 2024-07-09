<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ข้อมูลศิษย์เก่าหลักสูตรวิทยาการคอมพิวเตอร์</title>

	
    <!-- Bootstrap and Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Custom styles -->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="container">
    <!-- เข้าสู่ระบบเจ้าหน้าที่ -->
    <div class="container__form container--signup">
        <form action="login_a.php" method="POST" class="form" id="form1">
            <h2 class="form__title">สำหรับเจ้าหน้าที่</h2>
            <input type="text" name="admin_user" placeholder="Username" class="input" required />
            
            <input type="password" name="admin_pass" placeholder="Password" class="input" required />
            <button type="submit" name="signup-submit" class="btn">เข้าสู่ระบบ</button>
        </form>
    </div>

    <!-- เข้าสู่ระบบศิษย์เก่า -->
    <div class="container__form container--signin">
        <form action="login_db.php" method="POST" class="form" id="form2">
            <h2 class="form__title">สำหรับศิษย์เก่า</h2>
            <input type="email" name="alumni_mail" id="alumni_mail" placeholder="Email" class="input" required />
            <input type="password" name="alumni_pass" id="alumni_pass" placeholder="Password" class="input" required />
            <!-- <a href="#" class="link">Forgot your password?</a> -->
            <button type="submit" name="signin-submit" class="btn">เข้าสู่ระบบ</button>
        </form>
    </div>

    <!-- Overlay -->
    <div class="container__overlay">
        <div class="overlay">
            <div class="overlay__panel overlay--left">
                <button class="btn" id="signIn">ศิษย์เก่า</button>
            </div>
            <div class="overlay__panel overlay--right">
                <button class="btn" id="signUp">เจ้าหน้าที่</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script src="plugins/jquery/jquery.min.js"></script>
<script>
    const signInBtn = document.getElementById("signIn");
    const signUpBtn = document.getElementById("signUp");
    const container = document.querySelector(".container");

    if (signInBtn && signUpBtn && container) {
        signInBtn.addEventListener("click", () => {
            container.classList.remove("right-panel-active");
        });

        signUpBtn.addEventListener("click", () => {
            container.classList.add("right-panel-active");
        });
    }
</script>
</body>
</html>
