<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/Activity_page.css">
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
              ?>
<body>
    <div class="navbar">
        <div class="lang">
          <ul class="lang">
            <li><a href="">TH</a></li>
            <li><a href="">EN</a></li>
            <li><a href="">CN</a></li>
          </ul>
        </div>
        <div class="menu">
              <ul>
                  <li><a href="/Home_page.html">หน้าแรก</a></li>
                  <li><a href="">เกี่ยวกับ</a></li>
                  <li><a href="">ผลผลิต</a></li>
                  <li><a href="">รายจ่าย</a></li>
                  <li><a href="">กิจกรรม</a></li>
                  <li><a href="/Page/LoginPage.html"><button class="miniProfile">Login</button></a></li>
              </ul>
          </div>
    </div>
      <div class="mainContent">
        <div class="headerbox" id="Sub-navbar">
            <div class="column" id="col-subnavR">
                <input type="text" name="" placeholder="ค้นหากิจกรรม">
            </div>
            <div class="column" id="col-subnavL">
                <a href="/Page/Activity_information_page.html"><button class="logoutButton">เพิ่ม +</button></a>
            </div>
        </div>
      </div>
      <div class="mainContent">

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
       <label for="radio10" class="manual-btn2"></label>
       <label for="radio11" class="manual-btn2"></label>
       <label for="radio12" class="manual-btn2"></label>
       <label for="radio13" class="manual-btn2"></label>
     </div>
     <!--manual navigation end-->
 </div>
  <!--slideshow end-->
        
     </div>
     <div class="mainContent">
        <div class="middleBox" id="Sub-navbar">
            <div class="middleBox" id="Activity-Name">
                <p>Display Activity Name</p>
            </div>
        </div>
    </div>
    <div class="mainContent">
        <div class="column">
            <div class="contentBox" id="Profile">
                <button class="profilePic"></button>
            </div>
            <div class="contentBox" id="Activity-creator">
                <div class="Activity-creator-box">
                    <div class="row" id="headerRow"><h2>ข้อมูลพื้นฐาน</h2></div>
                    <div class="section">
                    <h4>ชื่อ</h4>
                    <p><?php echo $rows2['fm_realname'];?></p>
                    <h4>เลขประจำตัวประชาชน</h4>
                    <p><?php echo $rows2['fm_nation_id'];?></p>
                    <h4>ที่อยู่</h4>
                    <p><?php echo $rows2['fm_realname'];?></p>
                    <h4>วันเกิด</h4>
                    <p><?php echo $rows2['fm_realname'];?></p>
                    <h4>อีเมล</h4>
                    <p>Display email</p>
                    <h4>ไลน์ไอดี</h4>
                    <p>Display LineID</p>
                    <h4>เบอร์โทรศัพท์</h4>
                    <p>Display Telephone number</p>
                    <button class="EditButton1">+ แก้ไขรายละเอียด</button>
                    <button class="DeleteButton">ลบรายชื่อนี้ทิ้ง</button> 
                    </div>
                </div>
                
            </div>
        </div>
        <div class="column">
            <div class="contentBox" id="Activity-info">
                <div class="Activity-info-box">
                    <div class="row" id="headerRow"><h2>ข้อมูลพื้นฐาน</h2></div>

                    <!--slideshow start-->
                    <div class="slider">
                       <div class="slides">
                         <input type="radio" name="radio-btn" id="radio1">
                         <input type="radio" name="radio-btn" id="radio2">
                         <input type="radio" name="radio-btn" id="radio3">
                         <input type="radio" name="radio-btn" id="radio4">
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
                         <div class="auto-navigation">
                           <div class="auto-btn1"></div>
                           <div class="auto-btn2"></div>
                           <div class="auto-btn3"></div>
                           <div class="auto-btn4"></div>
                         </div>
                         <!--Aumomatic navigation end-->
                        
                       </div>
                        <!--manual navigation start-->
                        <div class="manual-navigation">
                          <label for="radio1" class="manual-btn"></label>
                          <label for="radio2" class="manual-btn"></label>
                          <label for="radio3" class="manual-btn"></label>
                          <label for="radio4" class="manual-btn"></label>
                        </div>
                        <!--manual navigation end-->
                    </div>
                     <!--slideshow end-->

                    <div class="column" id="col1">
                        <div class="row-col" id="row-col1"><p>ชื่อกิจกรรม</p></div>
                        <div class="row-col" id="row-col1"><p>รูปแบบของกิจกรรม </p></div>
                        <div class="row-col" id="row-col1"><p>วันที่จัดกิจกรรม</p></div>
                        <div class="row-col" id="row-col1"><p>วันที่รับสมัครวันสุดท้าย</p></div>
                        <div class="row-col" id="row-col1"><p>จำนวนที่รับ</p></div>
                        <div class="row-col" id="row-col1"><p>ค่าใช้จ่าย</p></div>
                        <div class="row-col" id="row-col1"><p>คุณสมบัติ</p></div>
                        <div class="row-col" id="row-col1"><p>กิจกรรมจัดโดย</p></div>
                        <div class="row-col" id="row-col1"><p>รายละเอียด</p></div>
                      </div>
                      <div class="column" id="col2">
                        <div class="row-col" id="row-display1"><p>Name Display...............</p></div>
                        <div class="row-col" id="row-display1"><p>Email Display...............</p></div>
                        <div class="row-col" id="row-display1"><p>Career Display...............</p></div>
                        <div class="row-col" id="row-display1"><p>Cooperate type Display.................</p></div>
                        <div class="row-col" id="row-display1"><p>Organization scope Display.................</p></div>
                        <div class="row-col" id="row-display1"><p>Cost Display...............</p></div>
                        <div class="row-col" id="row-display1"><p>Property Display...............</p></div>
                        <div class="row-col" id="row-display1"><p>Created By Display.................</p></div>
                        <div class="row-col" id="row-display1"><p>More information Display.................</p></div>
                        <div class="row" ><button class="EditButton2">+ แก้ไขรายละเอียด</button></div>
                      </div>
                      
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

      <script type="text/javascript">
        var counter =1;
        setInterval(function(){
          document.getElementById('radio' + counter).checked = true;
          counter++;
          if(counter > 4){
            counter =1;
          }
        }, 5000);
  
        var counter2 =10;
        setInterval(function(){
          document.getElementById('radio' + counter2).checked = true;
          counter2++;
          if(counter2 > 13){
            counter2 =10;
          }
        }, 5000)
  
       </script>
</body>
</html>