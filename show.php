<?php

$name = $_POST['name'];
$id = $_POST['id'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$age = $_POST['age'];
settype($age,int);
$address = $_POST['address'];
$like1 = $_POST['like1'];
$like2 = $_POST['like2'];
$like3 = $_POST['like3'];
$like4 = $_POST['like4'];

    echo "ชื่อ-นามสกุล : ".$name."</br>";
    echo "ID : ".$id."</br>";
    echo "Password : ".$password."</br>";
    echo "ที่อยู่ : ".$address."</br>";
    echo "เพศ :".$gender."</br>";
    age();
    echo "อายุ :".$age."</br>";
    echo "ความสนใจ : ".$like1.$like2.$like3.$like4."</br>";

    function age()
    {
      global $age;
      if($age>=50){ echo "วัย : แก่</br>"; }
      else if($age>=25) { echo " วัย : วัยรุ่นตอนปลาย</br>"; }
      else if($age>=15) { echo "วัย : วัยรุ่น</br>"; }
      else if($age>=0) { echo " วัย : เด็ก</br>" ; }
    }
?>
