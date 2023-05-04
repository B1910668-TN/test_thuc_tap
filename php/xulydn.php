<?php
    session_start();

    require 'connect-select-db.php';

    $tenDN = $_POST['tenDN'];
    $matkhauTK = $_POST['matkhauTK'];

    $matkhauTK = md5($matkhauTK);

    $sql = "SELECT * FROM test where tenDN = '$tenDN'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if($matkhauTK == $row['matkhauTK']){
                if($row['capTK'] == "User"){
                    echo 1;
                    $_SESSION['tenDN'] = $tenDN;
                }else{
                    echo 2;
                    $_SESSION['tenDN'] = $tenDN;
                }
            }else{
                echo 0;
                die();
            }
        }
    }else{
        echo 0;
        die();
    }
?>