<?php
include 'connectdb.php';
 if(isset($_POST["numedit"])){
   $num = $_POST["numedit"];
   $customer_fname = $_POST["Fname"];
   $customer_lname = $_POST["Lname"];
   $customer_gender = $_POST["gender"];
   // $customer_name = 0;
   $customer_Birthdate = $_POST["birthdate"];
   $customer_address = $_POST["address"];
   $customer_province = $_POST["province"];
   $customer_zipcode = $_POST["zipcode"];
   $customer_telephone = $_POST["telephone"];
   $customer_customer_desciption = $_POST["customer_desciption"];
$sql = "UPDATE customer SET Customer_Name='$customer_fname', Customer_Lastname = '$customer_lname', Gender = '$customer_gender', Birthdate = '$customer_Birthdate', Address = '$customer_address', Province = '$customer_province', Zipcode = '$customer_zipcode', Telephone = '$customer_telephone', Customer_Desciption = '$customer_customer_desciption' WHERE Customer_id='$num'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
mysqli_close($conn);
} else {

   if (isset($_GET['edit'])) {
     $number = $_GET['edit'];
     // $sql = "SELECT $number as Customer_id, Customer_Name, Customer_Lastname, Gender, Age, Birthdate, Address, Province, Zipcode, Telephone, Customer_Desciption, username, password FROM customer";
     $sql = "SELECT * FROM customer WHERE Customer_id = '$number'";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_array($result);
      }else {
      }
   ?>
   <html>
   <head>
   	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   	<title>Form</title>
   	<style>
   	p:first-letter {
   		color:#FF9900;
   		font-size:30px;}
   input[type=text] {
      width: 300px;
       padding: 12px 20px;
       margin: 8px 0;
       box-sizing: border-box;
       border: none;
       border-bottom: 2px solid red;
   }
   input[type=text]:focus {
       background-color: lightblue;
   }

   input[type=password] {
       padding: 12px 20px;
       width: 300px;
       margin: 8px 0;
       box-sizing: border-box;
       border: none;
       border-bottom: 2px solid red;
   }
   input[type=password]:focus {
       background-color: lightblue;
   }
   input[type=checkbox] {
       margin-top: 16px;
   }
   textarea {
       padding: 12px 20px;
       box-sizing: border-box;
       border: 2px solid #ccc;
       border-radius: 4px;
       background-color: #f8f8f8;
       font-size: 16px;
       resize: none;
   }
   select {
       width: 25%;
       padding: 16px 20px;
       border: none;
       border-radius: 4px;
       background-color: #f1f1f1;
   }
  select:hover{
    cursor: pointer;
  }
   .button {
     display: inline-block;
     border-radius: 4px;
     background-color: #33CCFF;
     border: none;
     color: #FFFFFF;
     text-align: center;
     font-size: 28px;
     padding: 20px;
     width: 150px;
     transition: all 0.5s;
     cursor: pointer;
     margin: 5px;
   }
   .button span {
     cursor: pointer;
     display: inline-block;
     position: relative;
     transition: 0.5s;
   }
   .button span:after {
     content: '\00bb';
     position: absolute;
     opacity: 0;
     top: 0;
     right: -20px;
     transition: 0.5s;
   }
   .button:hover span {
     padding-right: 25px;
   }
   .button:hover span:after {
     opacity: 1;
     right: 0;
   }
   n1{&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp}
   </style>
   </head>
   <body>
   <form method="post" name="form_edit" action="/edit_customer.php">

   <table width="80%" border="0" style="margin:auto;">
   <tr><td>
   <fieldset>
   <legend><p>ข้อมูลลูกค้า</p></legend>
   <div>
     <!-- <form action="/action_page.php"> -->
       <label for="fname">First Name :</label>
       <input type="text" id="fname" name="Fname" placeholder="<?php echo $row["Customer_Name"]; ?>" value="<?php echo $row["Customer_Name"]; ?>"><br>
       <label for="lname">Last Name :</label>
       <input type="text" id="lname" name="Lname" placeholder="<?php echo $row["Customer_Lastname"]; ?>" value="<?php echo $row["Customer_Lastname"]; ?>">
        <!-- </form> -->
   </div><br>
   Gender : <input type="radio" name="gender" value="หญิง"> ชาย
   <input type="radio" name="gender" value="ชาย"> หญิง<br><br>
   Birth :
   		<input type="text" value="<?php echo $row["Birthdate"] ?>" name="birthdate" placeholder="<?php echo $row["Birthdate"] ?>">
      <br><br>
   <label>ที่อยู่ : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="selectpic" type="text" name="address" placeholder="<?php echo $row["Address"]; ?>" value="<?php echo $row["Address"]; ?>"><br><br>
     จังหวัด : <select name="province" type="list">
             <option value="<?php echo $row["Province"]; ?>"> <?php echo $row["Province"]; ?> </option>
             <option value="จังหวัดเชียงราย">จังหวัดเชียงราย</option>
             <option value="จังหวัดเชียงใหม่">จังหวัดเชียงใหม่</option>
             <option value="จังหวัดน่าน">จังหวัดน่าน</option>
             <option value="จังหวัดพะเยา">จังหวัดพะเยา</option>
             <option value="จังหวัดแพร่">จังหวัดแพร่</option>
             <option value="จังหวัดแม่ฮ่องสอน">จังหวัดแม่ฮ่องสอน</option>
             <option value="จังหวัดลำปาง">จังหวัดลำปาง</option>
             <option value="จังหวัดลำพูน">จังหวัดลำพูน</option>
             <option value="จังหวัดอุตรดิตถ์">จังหวัดอุตรดิตถ์</option>

             </select>
   <br><br><label>รหัสไปรษณีย์ : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="selectpic" type="text" name="zipcode" placeholder="<?php echo $row["Zipcode"]; ?>" value="<?php echo $row["Zipcode"]; ?>">
   <br><label>โทรศัพท์ : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="selectpic" type="text" name="telephone" placeholder="<?php echo $row["Telephone"]; ?>" value="<?php echo $row["Telephone"]; ?>"><br>
   <br><div style="width:150px;height: 500px;margin: 0px 10px 0px 0px;display:inline;">รายระเอียดอื่นๆ : </div><div style="width:200px;height: 100px;display:inline;"><textarea cols="60" rows="4" name="customer_desciption"
     placeholder="<?php echo $row["Customer_Desciption"]; ?>" value="<?php echo $row["Customer_Desciption"]; ?>"></textarea></div><br>
   <br>

   <input type="hidden" value="<?php echo $number ?>" name="numedit" placeholder="<?php echo $number ?>">
   <center><button class="button" name="form_submit" style="vertical-align:middle" ><span> Submit</span></button></center>


   </fieldset>

   </form></td></tr>
   </table>
   </form>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
     <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
   </body>
   </html>
 <?php } ?>
