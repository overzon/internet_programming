<?php
include 'connectdb.php';
session_start();
 ?>
<html>
<head>
  <style media="screen">
    H2{
      text-align: center;
      color: blue;
    }
    a{
      color: red;
    }
    a:hover{
      color:gray;
    }
    table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
    margin: auto;
    text-align: center;
    }
    .colr{
      margin: 0 65%;
      width: 250px;
      padding: 0 0 10px 0;
    }
    .col:hover{
      color:gray;
    }
    img{

    }
    img:hover{
      cursor: pointer;
    }
  </style>
</head>
<bodY>
  <H2>ข้อมูลของลูกค้า</H2>

  <div><div class="colr"><a href="add_customer.php"><img src='edit.png' alt='edit_icon'  style='width:30px;height:30px;' href='edit_customer.php'>เพิ่มข้อมูลของลูกค้า</a></div>
    <?php
    $sql = "SELECT Customer_id, Customer_Name, Customer_Lastname, Gender, Age, Birthdate, Address, Province, Zipcode, Telephone, Customer_Desciption, username, password FROM customer";
    $result = $conn->query($sql);
    $counter = 1;
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>ชื่อ-นามสกุล</th><th>จังหวัด</th><th>เบอร์โทร</th><th>แก้ไข</th><th>ลบ</th></tr>";

        // output data of each row
        while($row = $result->fetch_assoc()) {
            // $counter = echo $row["Customer_id"];
            echo "<tr><td style='width: 50px;'>".$row["Customer_id"]."</td><td style='width: 250px;'>".$row["Customer_Name"]." ".$row["Customer_Lastname"]."</td><td style='width: 100px;'>".$row["Province"]."</td><td style='width: 100px;'>"
            .$row["Telephone"]."</td><td style='width: 100px;'><a href='edit_customer.php?edit=".$row["Customer_id"]."'><img src='edit.png' alt='edit_icon'  style='width:30px;height:30px;'></a></td><td style='width: 100px;'><a href='del_customer.php?del=".$row["Customer_id"]."'><img src='bin.jpg' alt='edit_icon' style='width:30px;height:30px;'></a></td></tr>";

        }
        echo "</table>";
    } else {
        echo "<table><tr><th>ID</th><th>ชื่อ-นามสกุล</th><th>จังหวัด</th><th>เบอร์โทร</th><th>แก้ไข</th><th>ลบ</th></tr></table>";
    }
    $conn->close();
    ?>
  </div>
</body>
</html>
