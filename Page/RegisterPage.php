<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link type="text/css" rel="stylesheet" href="../css/registerPage.css">
</head>
<body>
    <div class="mainContent">
        <div class="navbar">
            <button class="lanSelect" id="TH">TH</button>
            <button class="lanSelect" id="EN">EN</button>
            <button class="lanSelect" id="CN">CN</button>
        </div>

        <form action="../php_data/type_select.php" method="post">
        <div class="box">
            <div class="row">
                <div class="select">
                    <input type="hidden" id="sType" name="system_type" value="">
                    <input type="button" id="Farmer" data-hover1="เกษตรกร" onclick="displayUserSelectFunction1()"></button>
                    <input type="button" id="Organize" data-hover2="องค์กร" onclick="displayUserSelectFunction2()"></button>
                </div>   
            </div>
            <div class="row" id="TEXTBOX">
                <h1>เพิ่งเริ่มต้นใช้งานใช่ไหม ?</h1>
                <div class="part1">
                    <p>เริ่มต้นด้วยการเลือกประเภทบัญชีที่เหมาะสมสำหรับคุณ</p>
                    <p>เรามีทั้ง<p1 id="TextBold">บัญชีสำหรับเกษตรกร</p1> และ <p1 id="TextBold">บัญชีสำหรับองค์กร</p1> </p>
                </div>
                <div class="part2" >
                    <p><p1 id="TextBold">คลิ๊กที่รูปภาพ</p1>  เพื่อทำการเลือกรูปแบบบัญชี </p>
                    <div class="display" ><label id="demo"></label></div>
                </div>
                <div class="part3">
                    <input type="Submit" class="Submit"><a id="RegSubmit" href="">ต่อไป</a></button>
                    <input type="button" class="Submit" ><a href="/Page/LoginPage.html">กลับ</a></button>
                </div>
           </div>
        </div>
        </form>

       <script>
        function displayUserSelectFunction1() {
            var x = document.getElementById("Organize").value;
            document.getElementById("sType").value = "farmer_role";
            document.getElementById("demo").innerHTML = "คุณได้เลือกบัญชีเกษตรกร " + x;
            document.getElementById("RegSubmit").href = "../Page/Register_SubmitPage(FARM).php";
        }
        function displayUserSelectFunction2() {
           var x = document.getElementById("Farmer").value;
           document.getElementById("sType").value = "organize_role";
           document.getElementById("demo").innerHTML = "คุณได้เลือกบัญชีองค์กร " + x;
           document.getElementById("RegSubmit").href = "/Page/Register_SubmitPage(OGANIZE).html";
        }

        </script>
    </div>
</body>
</html>