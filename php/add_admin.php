<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tài khoản admin</title>
</head>
<body>
    <form id ="myform" action="xulytam.php" method = "POST">
        <table border = '0'>
            <tr>
                <td>
                    Tên đăng nhập:
                </td>
                <td>
                    <input type="text" name="tendn" id = "tendn">
                </td>
            </tr>
            <tr>
                <td>
                    Tên hiển thị
                </td>
                <td>
                    <input type="text" name = "tenht" id = "tenht">
                </td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td>
                    <input type="password" name="matkhauTK" id="matkhauTK">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" id="email">
                </td>
            </tr>
            <tr>
                <td>Cấp tài khoản</td>
                <td>
                    <select name="capTK" id="capTK">
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="button" id = "update_ad" name="update_ad" value="Thêm tài khoản admin">
                </td>
            </tr>
            <tr>
                <td>
                    <div id = "ack"></div>
                </td>
            </tr>
        </table>
    </form>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="../script/my_script.js"></script>
</body>
</html>