<!DOCTYPE html>
<html>
<body>
<center>
    <br>
      <h1><b><font size=60 color=blue>ไพ่ที่ได้</font><b></h1>
      <h2>----------------------</h2>
<?php

echo "<center><b><font size=60 <b></center>" ;

$a=array("A&spades;"/*โพดำ*/, "A&clubs;"/*ดอกจิก */, "<font color = 'red'>A&hearts;</font>"/*โพแดง*/, "<font color = 'red'>A&diams;</font>"/*ข้าวหลาม*/,
        "2&spades;"/*โพดำ*/, "2&clubs;"/*ดอกจิก */, "<font color = 'red'>2&hearts;</font>"/*โพแดง*/, "<font color = 'red'>2&diams;</font>"/*ข้าวหลาม*/,
        "3&spades;"/*โพดำ*/, "3&clubs;"/*ดอกจิก */, "<font color = 'red'>3&hearts;</font>"/*โพแดง*/, "<font color = 'red'>3&diams;</font>"/*ข้าวหลาม*/,
        "4&spades;"/*โพดำ*/, "4&clubs;"/*ดอกจิก */, "<font color = 'red'>4&hearts;</font>"/*โพแดง*/, "<font color = 'red'>4&diams;</font>"/*ข้าวหลาม*/,
        "5&spades;"/*โพดำ*/, "5&clubs;"/*ดอกจิก */, "<font color = 'red'>5&hearts;</font>"/*โพแดง*/, "<font color = 'red'>5&diams;</font>"/*ข้าวหลาม*/,
        "6&spades;"/*โพดำ*/, "6&clubs;"/*ดอกจิก */, "<font color = 'red'>6&hearts;</font>"/*โพแดง*/, "<font color = 'red'>6&diams;</font>"/*ข้าวหลาม*/,
        "7&spades;"/*โพดำ*/, "7&clubs;"/*ดอกจิก */, "<font color = 'red'>7&hearts;</font>"/*โพแดง*/, "<font color = 'red'>7&diams;</font>"/*ข้าวหลาม*/,
        "8&spades;"/*โพดำ*/, "8&clubs;"/*ดอกจิก */, "<font color = 'red'>8&hearts;</font>"/*โพแดง*/, "<font color = 'red'>8&diams;</font>"/*ข้าวหลาม*/,
        "9&spades;"/*โพดำ*/, "9&clubs;"/*ดอกจิก */, "<font color = 'red'>9&hearts;</font>"/*โพแดง*/, "<font color = 'red'>9&diams;</font>"/*ข้าวหลาม*/,
        "10&spades;"/*โพดำ*/, "10&clubs;"/*ดอกจิก */, "<font color = 'red'>10&hearts;</font>"/*โพแดง*/, "<font color = 'red'>10&diams;</font>"/*ข้าวหลาม*/,
        "J&spades;"/*โพดำ*/, "J&clubs;"/*ดอกจิก */, "<font color = 'red'>J&hearts;</font>"/*โพแดง*/, "<font color = 'red'>J&diams;</font>"/*ข้าวหลาม*/,
        "Q&spades;"/*โพดำ*/, "Q&clubs;"/*ดอกจิก */, "<font color = 'red'>Q&hearts;</font>"/*โพแดง*/, "<font color = 'red'>Q&diams;</font>"/*ข้าวหลาม*/,
        "K&spades;"/*โพดำ*/, "K&clubs;"/*ดอกจิก */, "<font color = 'red'>K&hearts;</font>"/*โพแดง*/, "<font color = 'red'>K&diams;</font>"/*ข้าวหลาม*/,);
        
$random_keys=array_rand($a,2);
    echo $a[$random_keys[0]]." + ";
    echo $a[$random_keys[1]] ;
    

    
    
?>
    <h4><font size=60 color=green>Sarawut Bangpa</font></h4>
 
</center>
</body>
</html>