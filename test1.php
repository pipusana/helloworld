<!DOCTYPE html>
<html>
<body>

<?php
   $name = "pipusana";
   helloworld();
   function helloworld()
   {
       global $name; //ประกาศเพราะต้องการใช้ตัวแปรเดียวกับ ตัวแปร global
       echo "สวัสดีสำหรับการทำโปรแกรมครั้งแรกของคุณ : $name";
   }
  // $cars = array("Volvo","BMW","Toyota");
  // var_dump($cars); เช็คค่าในตัวแปร อเรย์
  //echo strlen($name);   การตรวจสอบความยาวของตัวอักษร
  //echo strpos("PHP Training Center", "Training");
  //การค้นหาตัวอักษร ค่าทีได้ออกมา เริ่ม จาก 0 ข้อนี้คือ 4 ไม่ใช่ 5
  //define("PI", 3.14159, true);   echo pi; // เราสามารถใช้ pi หรือ PI ก็ได้
  ?>

</body>
</html>
