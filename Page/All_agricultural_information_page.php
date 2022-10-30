<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/All_agricultural_information_page.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
</head>

  <?php include(__DIR__. "/Header.php")?>

      
  <?php 
                $uid = $_SESSION['uid'];
                $tableList = array('authsystem_demo', 'fm_personal_info', 'garden_info');

                $sql_auth = "SELECT email FROM authsystem_demo WHERE ID = '$uid'";
                $rows1 = mysqli_fetch_assoc(mysqli_query($connect, $sql_auth));
                $sql_fm = "SELECT * FROM fm_personal_info WHERE ID = '$uid'";
                $rows2 = mysqli_fetch_assoc(mysqli_query($connect, $sql_fm));
                $sql_gd = "SELECT * FROM garden_info WHERE ID = '$uid'";
                $rows3 = mysqli_fetch_assoc(mysqli_query($connect, $sql_gd));
              ?>
      <div class="header-farmer">
        ข้อมูลเกษตรกร
      </div>
      <div class="farmer-content">
        <div class="col-1">
          <div class="section">
            <div class="farmer-profile">
            <img src="../php_data/images/<?php echo $rows2['fm_img']; ?>" alt="" width="100%">
          </div>
          <div class="detail-farmer">

              <p>ชื่อ</p>
              <?php echo $rows2['fm_realname']; ?>
              <p>เลขประจำตัวประชาชน</p>
              <?php echo $rows2['fm_nation_id']; ?>
              <p>ที่อยู่</p>
              <?php echo $rows2['fm_area']; ?>
              <p>วันเกิด</p>
              <?php echo $rows2['fm_birth']; ?>
              <p>อีเมล</p>
              <?php echo $rows1['email']; ?>
              <p>ไลน์ไอดี</p>
              <?php echo $rows2['fm_line']; ?>
              <p>เบอร์โทรศัพท์</p>
              <?php echo $rows2['fm_tel']; ?>
          </div>
          <div class="button-detail">
              <a href="../Page/Agricultural_Information_Page.php?id=<?php echo $_SESSION['uid']; ?>">
                <button class="update-detail">+  แก้ไขรายละเอียด</button>
              </a><br>
              <button class="delete">ลบรายชื่อนี้ทิ้ง</button>
          </div>

          </div>

        </div>
        <div class="col-2">
          <div class="section">
            <div class="slide-card">

              <!--slideshow start-->
              <div class="slider2">
                <div class="slides2">
                    <input type="radio" name="radio-btn2" id="radio1">
                    <input type="radio" name="radio-btn2" id="radio2">
                    <input type="radio" name="radio-btn2" id="radio3">
                    <input type="radio" name="radio-btn2" id="radio4">
                  <div class="slide first">
                    <img src="../Picture/pic5.png" alt="">
                  </div>
                  <div class="slide">
                    <img src="../Picture/pic1.jpg" alt="">
                  </div>
                  <div class="slide">
                  <img src="../Picture/pic2.jpg" alt="">
                  </div>
                  <div class="slide">
                  <img src="../Picture/pic3.jpg" alt="">
                  </div>
                  <!--Aumomatic navigation start-->
                  <div class="auto-navigation2">
                      <div class="auto-btn1"></div>
                      <div class="auto-btn2"></div>
                      <div class="auto-btn3"></div>
                      <div class="auto-btn4"></div>
                  </div>
                  <!--Aumomatic navigation end-->
                
                </div>
                <!--manual navigation start-->
                <div class="manual-navigation2">
                  <label for="radio1" class="manual-btn2"></label>
                  <label for="radio2" class="manual-btn2"></label>
                  <label for="radio3" class="manual-btn2"></label>
                  <label for="radio4" class="manual-btn2"></label>
                </div>
                <!--manual navigation end-->
            </div>
              <!--slideshow end-->
              รายละเอียดของสวน
          </div>
          <div class="table-detail">
              <table>
                  <tr>
                      <td class="table-head">ชื่อสวน</td>
                      <td><?php echo $rows3['gd_name']; ?></td>
                  </tr>
                  <tr>
                      <td class="table-head">ที่อยู่ </td>
                      <td><?php echo $rows3['gd_area']?></td>
                  </tr>
                  <tr>
                      <td class="table-head">ที่ดินแปลงนี้มีพื้นที่ประมาณ</td>
                      <td><?php echo $rows3['gd_area_square'];?> ไร่</td>
                  </tr>
                  <tr>
                      <td class="table-head">วิธีการปลูก</td>
                      <td><?php echo $rows3['gd_treat']?></td>
                  </tr>
                  <tr>
                      <td class="table-head">รายละเอียด</td>
                      <td><?php echo $rows3['gd_detail']?></td>
                  </tr>
                </table>
                <a href="../Page/Garden_information_Page.php?id=<?php echo $_SESSION['uid']; ?>">
                <button class="edit-detail">+  แก้ไขรายละเอียด</button></a><br>
          </div>

          </div>
          <div class="section">
            <div class="slide-card">

              <!--slideshow start-->
              <div class="slider2">
                <div class="slides2">
                    <input type="radio" name="radio-btn2" id="radio10">
                    <input type="radio" name="radio-btn2" id="radio11">
                    <input type="radio" name="radio-btn2" id="radio12">
                    <input type="radio" name="radio-btn2" id="radio13">
                  <div class="slide first">
                    <img src="../Picture/pic5.png" alt="">
                  </div>
                  <div class="slide">
                    <img src="../Picture/pic1.jpg" alt="">
                  </div>
                  <div class="slide">
                  <img src="../Picture/pic2.jpg" alt="">
                  </div>
                  <div class="slide">
                  <img src="../Picture/pic3.jpg" alt="">
                  </div>
                  <!--Aumomatic navigation start-->
                  <div class="auto-navigation3">
                      <div class="auto-btn1"></div>
                      <div class="auto-btn2"></div>
                      <div class="auto-btn3"></div>
                      <div class="auto-btn4"></div>
                  </div>
                  <!--Aumomatic navigation end-->
                
                </div>
                <!--manual navigation start-->
                <div class="manual-navigation3">
                  <label for="radio10" class="manual-btn3"></label>
                  <label for="radio11" class="manual-btn3"></label>
                  <label for="radio12" class="manual-btn3"></label>
                  <label for="radio13" class="manual-btn3"></label>
                </div>
                <!--manual navigation end-->
            </div>
              <!--slideshow end-->
              รายละเอียดของสวน
          </div>
          <div class="table-detail">
              <table>
                  <tr>
                      <td class="table-head">ชื่อสวน</td>
                      <td>สวนลำไยลุงสง่า</td>
                  </tr>
                  <tr>
                      <td class="table-head">ที่อยู่ </td>
                      <td>18 หมู่ 9 ศรีบัวบาน เมืองลำพูน ลำพูน 51000</td>
                  </tr>
                  <tr>
                      <td class="table-head">ที่ดินแปลงนี้มีพื้นที่ประมาณ</td>
                      <td>25 ไร่</td>
                  </tr>
                  <tr>
                      <td class="table-head">วิธีการปลูก</td>
                      <td>ผ่านมาตรฐานการผลิตทางการเกษตรที่ดีและเหมาะสม<br>(GAP)</td>
                  </tr>
                  <tr>
                      <td class="table-head">รายละเอียด</td>
                      <td>สมาชิกกลุ่มลำไยแปลงใหญ่ ต.ศรีบัวบาน</td>
                  </tr>
                </table>
                <button class="edit-detail">+  แก้ไขรายละเอียด</button>
          </div>
            
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