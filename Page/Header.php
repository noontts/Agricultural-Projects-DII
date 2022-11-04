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
                <?php
                  session_start();
                  require_once "../php_data/config.php";
                  $uid = $_GET['id'];
                  $_SESSION['uid'] = $uid;

                  function checkreal_user ($index) {
                    if (isset($_SESSION['save_uid'])) {
                      if ($index != $_SESSION['save_uid']) {
                        $index = $_SESSION['save_uid'];
                        $_SESSION['save_uid'] == NULL;
                      }
                    }
                    echo $index;
                  }
                ?>
                <li><a href="../Page/Home_page.php?id=<?php checkreal_user($uid);?>">หน้าแรก</a></li>
                <?php
                  if (isset($_SESSION['userStatus'])) 
                  {
                    $sql = "SELECT * FROM authsystem_demo WHERE ID = '$uid'";
                    $Query = mysqli_query($connect,$sql);
                  
                    $rows = mysqli_fetch_assoc($Query);
                    $user_type = $rows['type'];

                    if ($user_type == "farmer_role") 
                    { 
                      echo "<li><a href=\"../Page/All_agricultural_information_page.php?id=$uid\">เกี่ยวกับ</a></li>"; }
                    else if ($user_type == "organize_role")
                    {  }
                  } 
                ?>
                
                <li><a href="../Page/Agricultural_page.php?id=<?php echo $_SESSION['uid'];?>">ผลผลิต</a></li>
                <li><a href="">รายจ่าย</a></li>
                <li><a href="">กิจกรรม</a></li>
                <li>
                  <?php
                    if (isset($_SESSION['userStatus'])) {
                      echo $_SESSION['userStatus'];
                    } else {
                      echo "<a href=\"../Page/LoginPage.php\"><button class=\"miniLogInProfile\">Login</button></a>";
                    }
                  ?>
                  <!--<a href="./Page/LoginPage.php"><button class="miniProfile">Login</button></a>-->
                </li>
            </ul>
          </div>
    </div>
