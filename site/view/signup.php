<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/signup.css">
</head>

<body>


    <div class="modal">
        <form class="modal-content" action="../index.php?ctrl=signup&action=register" method="post" onsubmit="return validateSDT()">
            <div class="imgcontainer">
                <img src="../Images/logo-shop.png">
            </div>
            <h3 style="margin-bottom:3vw;margin-left: 10vw;"> WELCOME A O DAY CO BAN GIAY MEMBER</h3>
            <div class="container">
                <input type="email" placeholder="Nhập email của bạn. Ví dụ: abc@xyz.com" name="email">
                <input type="text" placeholder="Tên đăng nhập" name="userName">
                <input type="password" placeholder="Mật khẩu" name="passWord">
                <input type="text" placeholder="Họ và tên" name="Name">
                <input type="text" placeholder="Địa chỉ" name="address">
                <input type="text" name="sdt" placeholder="Số điện thoại" id="sdt"/>
                <div id="loi" style="color:red"></div>
                
               

                <p class="term">
                    Get a O DAY CO BAN GIAY Member Reward every year on your Birthday
                </p>
            </div>
            <!--label>
                <select name="Sex">
                    <optgroup label="Sex">

                        <option value="Ma" class="">Male</option>

                        <option value="Fe" class="">Female</option>

                        <option value="Be" class="">Others</option>

                    </optgroup>
                </select>
            </!--label-->
            <input type="checkbox"><span class="keep">Sign up for emails to get updates from O DAY CO BAN GIAY on
                products, offers and your Member benefits</span>
            <p class="term">
                By creating an account , you agree to O DAY CO BAN GIAY <a href=#>Privacy Policy</a> and <a href=#>Terms
                    of Use</a>
            </p>
            <button type="submit" onclick="validateSDT()">JOIN US</button>
            <span class="jus">Already a Member ? <a href="#">Sign In</a></span>
    </div>
    <div class="container" style="background-color:#f1f1f1">
        </form>
    </div>

</body>
<script>
    function validateSDT(){
        sdt=parseInt(document.getElementById('sdt').value);
        if(isNaN(sdt)==true){
            document.getElementById('loi').innerHTML="Vui lòng nhập số";
            return false;
        }
        else return true;
        
    }

</script>

</html>