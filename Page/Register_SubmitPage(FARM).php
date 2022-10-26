<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Farmer</title>
    <link type="text/css" rel="stylesheet" href="../css/register_SubmitPage.css">
</head>
<body>
    <div class="mainContent">
        <div class="navbar">
            <button class="lanSelect" id="TH">TH</button>
            <button class="lanSelect" id="EN">EN</button>
            <button class="lanSelect" id="CN">CN</button>
        </div>
        <div class="box">
            <div class="title">
                <h1>สมัครสมาชิก</h1>
                <p>กรุณากรอกข้อมูลของคุณในช่องว่างต่างๆเพื่อบันทึกเข้าสู่ระบบ</p>
            </div>
            <div class="body">
                <form action="../php_data/register.php" method="POST">
                    <div class="container" id="Text">
                        <label>ชื่อผู้ใช้งาน</label><br>
                        <input type="text" name="user"><br>
                    </div>
                    <div class="container" id="Text">
                        <label>ชื่อ-นามสกุล</label><br>
                        <input type="text" name="real_name"><br>
                    </div>
                    <div class="container" id="Mail">
                        <label>อีเมลล์</label><br>
                        <input type="text" name="email"><br>
                    </div>
                    <div class="container" id="Text">
                        <label>รหัสผ่าน</label><br>
                        <input type="text" name="pass"><br>
                    </div>
                    <div class="container" id="Text">
                        <label>ยืนยันรหัสผ่าน</label><br>
                        <input type="text" name="confirm_pass"><br>
                    </div>
                    <div class="container" id="Submit">
                        <label>
                            <?php
                                session_start();
                                if (isset($_SESSION['alert'])) {
                                    echo $_SESSION['alert'];
                                    unset($_SESSION['alert']);
                                }
                            ?>
                        </label><br>
                        <input type="submit" class="Submit" value="ยืนยัน">
                    </div>
                </form> 
            </div>
        </div>

    </div>

    
</body>
</html>