<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link type="text/css" rel="stylesheet" href="../css/loginPage.css">
</head>
<body>
    <div class="mainContent">
        <div class="navbar">
            <button class="lanSelect" id="TH">TH</button>
            <button class="lanSelect" id="EN">EN</button>
            <button class="lanSelect" id="CN">CN</button>
        </div>
        <div class="box">
            <div class="row">
                <div class="carousel-five-images center-block text-center">
                  <img src="../Picture/exaple2.jpg" class="one img-responsive" />
                  
                  <img src="../Picture/exaple2.jpg" class="two changing img-responsive"  />
                  
                  <img src="../Picture/exaple3.jpg" class="three changing img-responsive" />
                  
                  <img src="../Picture/exaple5.jpg" class="four changing img-responsive"  />
                  
                  <img src="../Picture/exaple4.jpg" class="five changing img-responsive"  />
                </div>
            </div>
            <div class="row" id="TEXTBOX">
                <h1>เข้าสู่ระบบ</h1>
                <div class="part1">
                    <p>เราดีใจที่คุณกลับมาอีกครั้ง, กรุณากรอกรายละเอียด</p>
                    <p>และข้อมูลของคุณเพื่อทำการเข้าสู่ระบบ.</p>
                </div>
                <form class="Login" action="../php_data/check_login.php" method="POST">
                    <div class="part2">
                        <label>ชื่อผู้ใช้งาน / องค์กรของคุณ</label><br>
                        <input type="text" name="user" id="loginInput"><br>
                    </div>
                    <div class="part2">
                        <label>รหัสผ่านของคุณ</label><br>
                        <input type="text" name="pass" id="loginInput">
                    </div>
                    <?php
                        session_start();
                        if (isset($_SESSION['alert'])) {
                            echo $_SESSION['alert'];
                            unset($_SESSION['alert']);
                        }
                    ?>
                    <input type="submit" class="Submit" value="ยืนยัน">
                    <p>คุณมีบัญชีสมาชิกแล้วหรือไม่? <a href="/Page/RegisterPage.html">สมัครสมาชิกเดี๋ยวนี้</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>