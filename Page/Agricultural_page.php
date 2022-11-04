<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="../css/Agricultural_page.css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
</head>

        <?php include(__DIR__. "/Header.php")?>

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
    
      <div class="information-section">
        <div class="information-content">
            <div class="government">
                <div class="header-gov">
                    คณะผู้บริหารเทศบาล<br>เมืองลำพูน
                </div>
                <div class="profile-gov" style="margin-top: 38px;">
                    <img src="../Picture/profile.png"><br>
                    <div class="name-gov">
                        <span style="font-weight: bold;">นายประภัสร์  ภู่เจริญ<br></span>
                        นายกเทศมนตรีเมืองลำพูน
                    </div>
                </div>
                <div class="profile-gov" style="margin-top: 38px;">
                    <img src="../Picture/profile.png"><br>
                    <div class="name-gov">
                        <span style="font-weight: bold;">นายประภัสร์  ภู่เจริญ<br></span>
                        นายกเทศมนตรีเมืองลำพูน
                    </div>
                </div>
                <div class="profile-gov" style="margin-top: 38px;">
                    <img src="../Picture/profile.png"><br>
                    <div class="name-gov">
                        <span style="font-weight: bold;">นายประภัสร์  ภู่เจริญ<br></span>
                        นายกเทศมนตรีเมืองลำพูน
                    </div>
                </div>
            </div>
            <div class="gardener">
                <div class="search-bar">
                    <div class="search">
                        <input type="text" name="" placeholder="ค้นหาสวนที่คุณต้องการได้ที่นี่ ....">
                        <form action="../php_data/new_garden.php?=<?php echo $uid ?>" method="post">
                          <input type="Submit" class="button" value="เพิ่มสวน +">
                        </form>
                    </div>
                </div>
                <div class="gardener-content">
                    <div class="gardener-profile">

                            <?php
                                $sql_gd = "SELECT * FROM garden_info";
                                $query1 = mysqli_query($connect, $sql_gd);
                                $hCount = 1; $rCount = 1;

                                while ($rows = mysqli_fetch_assoc($query1)) {
                                    $gdName = $rows['gd_name'];
                                    $save_uid = $_GET['id'];
                                    $rows_id = $rows['ID'];
                                    $sql_auth = "SELECT * FROM authsystem_demo WHERE ID = '$rows_id'";
                                    $query2 = mysqli_query($connect, $sql_auth);
                                    $rows2 = mysqli_fetch_assoc($query2);

                                        echo "<div class=\"garden-".$hCount."\">";
                                        echo "
                                                <div class=\"gardener-".$hCount."-".$rCount."\">
                                                    <div class=\"gardener-card\">
                                                    <img src=\"../Picture/profile-card.png\">
                                                        <div class=\"gardener-container\">
                                                            <span>".$gdName."<br></span>"
                            ?>                                  
                                                            <form action="../Page/All_agricultural_information_page.php?id=<?php echo $rows['ID']; ?>" method="post">
                                                            <input type="Submit" value="<?php echo $rows2['username']; ?>"></form><br>
                                                            <a href=""><div class="gardener-button">สำรวจ</div></a>
                                                        </div>
                                                    </div>
                                                </div>
                            <?php                    
                                        echo "</div>";
                                        $_SESSION['save_uid'] = $save_uid;
                                }
                            ?>

                        <div class="nav-num">
                            <a href="#"><div class="num-1">1</div></a>
                            <a href="#"><div class="num-1">2</div></a>
                            <a href="#"><div class="num-1">3</div></a>
                            <a href="#"><div class="num-1">...</div></a>
                        </div>
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
            <a href="#"><img src="/Picture/printer.png"></a>
            <a href="#"><img src="/Picture/gmail.png"></a>
            <a href="#"><img src="/Picture/facebook.png"></a>
            <a href="#"><img src="/Picture/line.png"></a>
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
                <img src="/Picture/line2.png">
                <img src="/Picture/line2.png">
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
    
           </script>
</body>
</html>