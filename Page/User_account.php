<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/User_acount.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
</head>
<body>
    
    <?php include(__DIR__. "/Header.php")?>

      <div class="mainContent" id="sec1">
        <a href="../php_data/logout.php">
        <button class="logoutButton">ออกจากระบบ</button></a>
      </div>
      <div class="mainContent" id="sec2">
        <div class="box" id="profile">
          <button class="profileButton" data-hover="ปรับแต่ง"></button>
        </div>
      </div>
      <div class="mainContent" id="sec3">
        <div class="box" id="information">
          <div class="row" id="headerRow"><h2>ข้อมูลพื้นฐาน</h2></div>

              <!--
              <div class="row-col" id="row-col1"><p>ประเภทขององค์กร</p></div>
              <div class="row-col" id="row-col1"><p>ขนาดขององค์กร</p></div>
              <div class="row-col" id="row-col1"><p>อีเมล</p></div>
              -->

              <?php 
                $sql_auth = "SELECT * FROM authsystem_demo WHERE ID = '$uid'";
                $authQuery = mysqli_query($connect, $sql_auth);

                $rows = mysqli_fetch_assoc($authQuery);
                if ($rows['type'] == "farmer_role") 
                {
                  $sql = "SELECT fm_realname FROM fm_personal_info WHERE ID = '$uid'";
                  $subQuery = mysqli_query($connect, $sql);
                  $generate = mysqli_fetch_assoc($subQuery);
              ?>
                  <div class="column" id="col1">
                    <div class="row-col" id="row-col1"><p>ชื่อ</p></div>
                    <div class="row-col" id="row-col1"><p>อาชีพ</p></div>
                    <div class="row-col" id="row-col1"><p>อีเมล</p></div>
                  </div>
                  <div class="column" id="col2"> 
              <?php
                  echo "<div class=\"row-col\" id=\"row-col1\"><p>".$generate['fm_realname']."</p></div>";
                  echo "<div class=\"row-col\" id=\"row-col1\"><p>เกษตรกร</p></div>";
                  echo "<div class=\"row-col\" id=\"row-col1\"><p>".$rows['email']."</p></div></div>";
                } 
                else if ($rows['type'] == "organize_role") 
                {  
                  $sql = "SELECT or_size, or_type FROM or_personal_info WHERE ID = '$uid'";
                  $subQuery = mysqli_query($connect, $sql);
                  $generate = mysqli_fetch_assoc($subQuery);
              ?>    
                  <div class="column" id="col1">
                    <div class="row-col" id="row-col1"><p>ชื่อองค์กร</p></div>
                    <div class="row-col" id="row-col1"><p>ประเภทองค์กร</p></div>
                    <div class="row-col" id="row-col1"><p>ขนาดองค์กร</p></div>
                    <div class="row-col" id="row-col1"><p>อีเมล</p></div>
                  </div>
                  <div class="column" id="col2"> 
              <?php
                  echo "<div class=\"row-col\" id=\"row-col1\"><p>".$rows['username']."</p></div>";
                  foreach ($generate as $value) {
                    echo "<div class=\"row-col\" id=\"row-col1\"><p>".$value."</p></div>";
                  }
                  echo "<div class=\"row-col\" id=\"row-col1\"><p>".$rows['email']."</p></div></div>";
                }
              ?>
            </div>
        </div>
      </div>
      <div class="mainContent" id="sec3">
        <div class="box" id="UserInformation">
          <div class="row" id="headerRow"><h2>บัญชีผู้ใช้งาน</h2></div>
           <div class="column" id="col3">
             <div class="row-col" id="row-col2"><p>ชื่อผู้ใช้งาน</p></div>
             <div class="row-col" id="row-col2"><p>รหัสผ่าน</p></div>
           </div>
           <div class="column" id="col4">
            <div class="row-col" id="row-display2"><p><?php echo $rows['username']; ?></p></div>
            <div class="row-col" id="row-display2"><p>
              <?php
                $text = null;
                $seperate_pass = str_split($rows['password']);
                $index = floor(count($seperate_pass) / 3);

                for ($count = 0; $count < $index; $count++) {
                  echo $seperate_pass[$count];
                }

                for ($count = 0; $count< count($seperate_pass)-$index; $count++) {
                  $text .="x";
                } echo $text;
              ?>
            </p></div>
           </div>
        </div>
      </div>
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
</body>
</html>