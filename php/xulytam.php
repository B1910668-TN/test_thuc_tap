<?php
    require "connect-select-db.php";

    $tendn = $_POST["tendn"];
    $tenht = $_POST["tenht"];
    $matkhauTK = $_POST["matkhauTK"];
    $email = $_POST["email"];
    $capTK = $_POST["capTK"];

    if($tendn == '' || $tenht == '' || $matkhauTK == '' ||
        $email == '' || $capTK == ''){
            echo "Vui lòng điền đủ thông tin!";
            die();
        }
    
    // Kiem tra ten dang nhap da ton tai hay chua
    $sql1 = "SELECT tenDN from test where tenDN = '$tendn'";
    $result1 = $conn->query($sql1)
        or die("Querry failed: " . $conn->error);
    if($result1->num_rows > 0){
        echo "Tên đăng nhập đã tồn tại!";
        die();
    }

    //Ma hoa mat khau
    $matkhauTK = md5($matkhauTK);

    //Kiem tra email da ton tai hay chua
    $sql2 = "SELECT email from test where email = '$email'";
    $result2 = $conn->query($sql2)
        or die("Query failed: " . $conn->error);
    if($result2->num_rows > 0){
        echo "Email đã được sử dụng!";
        die();
    }

    //Luu thong tin admin moi
    $sql3 = "INSERT INTO test(tenDN, tenHienThi, matkhauTK, email, capTK) values ('$tendn','$tenht','$matkhauTK','$email','$capTK')";
    $result3 = $conn->query($sql3);

    if($result3 === TRUE){
        echo "Thêm thành công!";
    }else{
        echo "Thêm thất bại!";
    }
?>