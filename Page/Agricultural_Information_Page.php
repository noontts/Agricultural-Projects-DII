<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="../css/Agricultural_Information_Page.css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
</head>

  <?php include(__DIR__. "/Header.php")?>

  <?php
    $uid = $_SESSION['uid'];

    $sql_auth = "SELECT * FROM authsystem_demo WHERE ID='$uid'";        
    $query1 = mysqli_query($connect, $sql_auth);

    $sql_fm = "SELECT * FROM fm_personal_info WHERE ID='$uid'";
    $query2 = mysqli_query($connect, $sql_fm);

    //if ($result = mysqli_store_result($connect)) {
    while($rows1 = mysqli_fetch_assoc($query1) 
      AND $rows2 = mysqli_fetch_assoc($query2)) {
  ?>

        <form action="../php_data/personal_editor.php?id=<?php echo $uid; ?>" method="POST" enctype="multipart/form-data">
        <div class="mainContent">
            <div class="section" id="sec1">
              <div class="box" id="Profile">
                <?php
                $imageURL = 'images/'.$rows2['fm_img'];
                ?>
                <img src="../php_data/images/<?php echo $rows2['fm_img']; ?>" alt="" width="100%">
                  <input type="file" name="file">
                  <p style="font-size: 12px; padding:0;"><b>NOTE : </b>Only JPG , JPEG & PNG File are allowed to upload</p>
              </div>
              <button class="Submit">ยืนยัน</button>
            </div>
          <div class="section" id="sec1">
            <div class="box" id="AccountInfo">
              <h2>ข้อมูลเกี่ยวกับบัญชี</h2>                
              <p>ชื่อบัญชี</p>
              <input type="text" name="uName" value="<?php echo $rows1['username']?>">
              <p>ชื่อ - นามสกุล</p>
              <input type="text" name="uRealname" value="<?php echo $rows2['fm_realname'] ?>">
              <p>อีเมล</p>
              <input type="text" name="uEmail" value="<?php echo $rows1['email']?>">
            </div>
          </div>

          <div class="section" id="sec1">
            <div class="box" id="AccountInfo2">
              <h2>รหัสผ่าน</h2>
              <p>รหัสผ่านเก่า</p>
              <input type="text">
              <p>รหัสผ่านใหม่</p>
              <input type="text">
              <p>ยืนยันรหัสผ่าน</p>
              <input type="text">
            </div>
          </div>

          <div class="section" id="sec1">
            <div class="box" id="Personalnfo">
              <div class="column" id="col1">
                <h2>ข้อมูลส่วนบุลคล</h2>
                <p>เลขบัตรประชาชนา</p>
                <input type="text" name="uNationID" value="<?php echo $rows2['fm_nation_id'] ?>">
                <p>ที่อยู่อาศัย</p>
                <textarea id="subject" name="uArea"><?php echo $rows2['fm_area'] ?></textarea>
                <p>วัน / เดือน / ปีเกิด</p>
                <input type="text" name="uBirth" value="<?php echo $rows2['fm_birth'] ?>">
              </div>
              <div class="column" id="col2">
                <h2>ข้อมูลส่วนบุลคล</h2>
                <p>เบอร์โทร</p>
                <input type="text" name="uTel" value="<?php echo $rows2['fm_tel'] ?>">
                <p>ไลน์ไอดี</p>
                <input type="text" name="uLine" value="<?php echo $rows2['fm_line'] ?>">
              </div>
            </div>
          </div>
        </div>
        </form> <?php } ?>

        <div class="footer">
            <div class="footer-1">
              <div class="footer-1-1">
                -LOGO-
              </div>
              <div class="footer-1-2">
                <span style="font-size:20px; font-weight: bold;">ภาพรวม<br></span>
                สถานที่ตั้ง : <br>
                ต.สมมติ ถนน.สมมติ อ.สมมติ<br>
                จ.สมมติ ประเทศไทย ไปรษณีย์ 00000<br><br>
              </div>
              <div class="footer-1-3">
               ช่องทางติดตามข่าวสาร
              </div>
              <div class="footer-1-4">
                <a href="#"><img src="../Picture/printer.png"></a>
                <a href="#"><img src="../Picture/gmail.png"></a>
                <a href="#"><img src="../Picture/facebook.png"></a>
                <a href="#"><img src="../Picture/line.png"></a>
              </div>
            </div>
            <div class="footer-2">
              เบอร์โทรติดต่อ : <br>
              ราชการตำบล 080 - XXX - XXXX<br>
              ผู้ใหญ่บ้าน 081 - XXX - XXXX<br>
              แอดมินดูแลระบบ 095 - XXX - XXXX<br>
            </div>
            <div class="footer-3">
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F%25E0%25B8%2595%25E0%25B8%25B3%25E0%25B8%259A%25E0%25B8%25A5%25E0%25B8%25A8%25E0%25B8%25A3%25E0%25B8%25B5%25E0%25B8%259A%25E0%25B8%25B1%25E0%25B8%25A7%25E0%25B8%259A%25E0%25B8%25B2%25E0%25B8%2599-807832799247034&tabs=timeline&width=340&height=205&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="205" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
              <div class="footer-3-2">
                <span style="font-size:20px; font-weight: bold;">เข้าร่วมสมาชิก<br></span>
                กลุ่มสำหรับติดต่อแลกเปลี่ยน<br>
                ความคิดเห็นสำหรับสมาชิกเกษตรกร
                <div class="footer-3-3">
                  <img src="../Picture/line2.png">
                  <img src="../Picture/line2.png">
                </div>
              </div>
            </div>
          </div>
          <div class="footer-bar">
          </div>
</html>