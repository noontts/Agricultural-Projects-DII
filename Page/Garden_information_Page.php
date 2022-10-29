<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="../css/Garden_information_Page.css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
</head>

    <?php include(__DIR__. "/Header.php")?>

    <?php
        $uid = $_SESSION['uid']; 
        $sql = "SELECT * FROM garden_info WHERE ID ='$uid'";        
        $query = mysqli_query($connect, $sql);

        while($rows = mysqli_fetch_assoc($query)) {
    ?>

      <form method="post" action="../php_data/garden_editor.php?id=<?php echo $uid; ?>">
        <div class="mainContent">
          <div class="section" id="sec1">
            <div class="box1" id="Profile">
              <button class="profilePic" ></button>
            </div>
            <div class="box1" id="SubProfile">
              <button class="profilePic2" ></button>
              <button class="profilePic2" ></button>
              <button class="Submit">ยืนยัน</button>
            </div>
            <div class="box1" id="SubProfile">
              <button class="profilePic2" ></button>
              <button class="profilePic2" ></button>
            </div> 
          </div>
      
          <div class="section" id="sec1">
            <div class="box" id="Personalnfo">
              <div class="column" id="col1">
                <h2>ข้อมูลสวน</h2>
                <p>ชื่อสวน</p>
                <input type="text" name="gName" value="<?php echo $rows['gd_name'];?>">
                <p>ที่อยู่</p>
                <textarea id="subject" name="gArea" placeholder="เขียนบางอย่าง..."><?php echo $rows['gd_area'];?></textarea>
                <p>ที่ดินแปลงนี้มีพื้นที่ประมาณ</p>
                <input type="text" name="gAreaSquare" value="<?php echo $rows['gd_area_square'];?>">
              </div>
              <div class="column" id="col2">
                <h2>ข้อมูลส่วนบุลคล</h2>
                <p>รายละเอียด</p>
                <textarea id="subject" name="gDetail" placeholder="เขียนบางอย่าง..."><?php echo $rows['gd_detail']?></textarea>
                <p>วิธีที่ใช้ปลูก</p>
                <textarea id="subject" name="gTreat" placeholder="เขียนบางอย่าง..."><?php echo $rows['gd_treat'];?></textarea>
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