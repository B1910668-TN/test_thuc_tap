<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
    <table border="1">
        <tr>
            <td>Tên đăng nhập:</td>
            <td>
                <input type="text" id="tenDN" name = "tenDN">
            </td>
        </tr>
        <tr>
            <td>Mật khẩu:</td>
            <td>
                <input type="password" id = "matkhauTK" name = "matkhauTK">
            </td>
        </tr>
        <tr>
            <td>
                <div id = "fg"></div>
                <div id = "fc"></div>
            </td>
        </tr>
        <tr>
            <td>
                <input type="button" id = "xacnhan" name="xacnhan" value="Xác nhận">
            </td>
        </tr>
    </table>
</body>
<script>
    $("#xacnhan").on("click", function(){
        var tenDN = $("#tenDN").val();
        var matkhauTK = $("#matkhauTK").val();
        var fg = $("#fg");
        var fc = $("#fc");

        fc.html("");
        fg.html("");

        if(tenDN == "" || matkhauTK == ""){
            fc.html("Vui lòng điền đủ thông tin!");
            return false;
        }

        $.ajax({
            url: "xulydn.php",
            method: "POST",
            data: {tenDN : tenDN, matkhauTK : matkhauTK},
            success: function(response){
                if(response == 0){
                    fc.html("Tên đăng nhập hoặc mật khẩu không đúng!");
                }else if(response == 1){
                    window.location = "homepage_user.php";
                }else{
                    window.location = "homepage_admin.php";
                }
            }
        });
    });
</script>
</html>