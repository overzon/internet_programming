<?php
include 'connectdb.php';
 if(isset($_POST["del_number"])){
   echo $_POST["del_number"];
   $num = $_POST["del_number"];
$sql = "DELETE FROM customer WHERE Customer_id=$num";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

mysqli_close($conn);

 } else {
   if (isset($_GET['del'])) {
     $number = $_GET['del'];
     // $sql = "SELECT $number as Customer_id, Customer_Name, Customer_Lastname, Gender, Age, Birthdate, Address, Province, Zipcode, Telephone, Customer_Desciption, username, password FROM customer";
     $sql = "SELECT * FROM customer WHERE Customer_id = '$number'";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_array($result);
      }else {

      }

 ?>

 <html>
 <head>
   <style>
   .colone{
     border-radius: 20px;
     border-color: #000;
     width: 300px;
     height: 500px;
     padding: 0% 2.5% 3% 2.5%;
     margin: auto;
     text-align: center;
     /* background-color: #E0EFE1; */
   }
   input[type=Submit] {
     width: 150px;
     height: 50px;
     border-radius: 20px;

     /* padding: 12px 20px; */
     /* margin: 8px 200px ; */
     color: BLACK;
     background-color: #4CAF50;
     border: 3px solid #ccc;
     -webkit-transition: 0.5s;
     transition: 0.5s;
     outline: none;
   }

   input[type=submit]:focus {
     border: 3px solid #655;

   }
   input[type=submit]:hover{
     cursor: pointer;
   }
   </style>
 </head>
 <body>
   <form method="post" action="del_customer.php">
     <div class="colone">
     <fieldset width="20%" border="0" style="margin:auto;">
     <legend><p>ข้อมูลลูกค้า</p></legend>
     ชื่อ : <?php echo $row["Customer_Name"]; ?><br><br>
     นามสกุล : <?php echo $row["Customer_Lastname"]; ?><br><br>
     เพศ : <?php echo $row["Gender"]; ?><br><br>
     วัน-เดือน-ปี เกิด : <?php echo $row["Birthdate"]; ?><br><br>
     ที่อยู่ : <?php echo $row["Address"]; ?><br><br>
     จังหวัด : <?php echo $row["Province"]; ?><br><br>
     รหัสไปรษณีย์ : <?php echo $row["Zipcode"]; ?><br><br>
     โทรศัพท์ : <?php echo $row["Telephone"]; ?><br><br>
     รายละเอียดอื่น : <?php echo $row["Customer_Desciption"]; ?><br><br>
     <input type="hidden" name="del_number" value="<?php echo $number?>">
     <input type="submit" name="del_form" value="OK">
   </div>
   </fieldset>
   </form>
 </body>
 </html>
 <?php } ?>
