<?php
include 'connectdb.php';
 if(isset($_POST["Fname"])){
   // echo "My Name is ".$_POST["Fname"];
    $customer_name = "'".$_POST["Fname"]."'";
    $customer_lastname = "'".$_POST["Lname"]."'";
    $gender = "'".$_POST["gender"]."'";
    $age = 0;
    $birthdate = "'".$_POST["Birthday"]." ".$_POST["BirthMonth"]." ".$_POST["BirthYear"]."'";
    $address = "'".$_POST["address"]."'";
    $province = "'".$_POST["province"]."'";
    $zipcode = "'".$_POST["zipcode"]."'";
    $telephone = "'".$_POST["telephone"]."'";
    $customer_desciption = "'".$_POST["customer_desciption"]."'";
    $user = "'".$_POST["user"]."'";
    $pass = "'".$_POST["pass"]."'";

    // mysqli_query($con,"SELECT * FROM Persons");
    // $sql = "INSERT INTO customer (Customer_Name, Customer_Lastname, Gender, Age, Birthdate, Address, Province, Zipcode, Telephone, Customer_Desciption, username, password)  VALUES ($customer_name)";
    $sql = "INSERT INTO customer (Customer_Name, Customer_Lastname, Gender, Age, Birthdate, Address, Province, Zipcode, Telephone, Customer_Desciption, username, password)  VALUES ($customer_name, $customer_lastname,$gender,$age,$birthdate,$address,$province,$zipcode,$telephone,$customer_desciption,$user,$pass)";
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

mysqli_close($conn);

 } else {

 ?>

 <html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 	<title>Form</title>
  <script>
function validateForm() {
    var x = document.forms["resume"]["Fname"].value;
    if (x == "") {
        alert("กรุณากรอกข้อมูลให้ครบ!!");
        return false;
    }
    var x = document.forms["resume"]["Lname"].value;
    if (x == "") {
        alert("กรุณากรอกข้อมูลให้ครบ!!");
        return false;
    }
    var x = document.forms["resume"]["gender"].value;
    if (x == "") {
        alert("กรุณากรอกข้อมูลให้ครบ!!");
        return false;
    }
    var x = document.forms["resume"]["Birthday"].value;
    if (x == "") {
        alert("กรุณากรอกข้อมูลให้ครบ!!");
        return false;
    }
    var x = document.forms["resume"]["BirthMonth"].value;
    if (x == "") {
        alert("กรุณากรอกข้อมูลให้ครบ!!");
        return false;
    }
    var x = document.forms["resume"]["BirthYear"].value;
    if (x == "") {
        alert("กรุณากรอกข้อมูลให้ครบ!!");
        return false;
    }
    var x = document.forms["resume"]["province"].value;
    if (x == "") {
        alert("กรุณากรอกข้อมูลให้ครบ!!");
        return false;
    }
    var x = document.forms["resume"]["zipcode"].value;
    if (x == "") {
        alert("กรุณากรอกข้อมูลให้ครบ!!");
        return false;
    }
    var x = document.forms["resume"]["telephone"].value;
    if (x == "") {
        alert("กรุณากรอกข้อมูลให้ครบ!!");
        return false;
    }
    var x = document.forms["resume"]["customer_desciption"].value;
    if (x == "") {
        alert("กรุณากรอกข้อมูลให้ครบ!!");
        return false;
    }
    var x = document.forms["resume"]["user"].value;
    if (x == "") {
        alert("กรุณากรอกข้อมูลให้ครบ!!");
        return false;
    }
    var x = document.forms["resume"]["pass"].value;
    if (x == "") {
        alert("กรุณากรอกข้อมูลให้ครบ!!");
        return false;
    }
    var x = document.forms["resume"]["confirmpassword"].value;
    if (x == "") {
        alert("กรุณากรอกข้อมูลให้ครบ!!");
        return false;
    }

}
</script>
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

 <form method="post" name="resume" action="/add_customer.php" onsubmit="return validateForm()">

 <table width="80%" border="0" style="margin:auto;">
 <tr><td>
 <fieldset>
 <legend><p>ข้อมูลลูกค้า</p></legend>
 <div>
   <!-- <form action="/action_page.php"> -->
     <label for="fname">First Name :</label>
     <input type="text" id="fname" name="Fname" placeholder="ชื่อ"><br>
     <label for="lname">Last Name :</label>
     <input type="text" id="lname" name="Lname" placeholder="นามสกุล">
      <!-- </form> -->
 </div><br>
 Gender : <input type="radio" name="gender" value="ชาย"> ชาย
 <input type="radio" name="gender" value="หญิง"> หญิง<br><br>
 Birth : <select name="Birthday" type="list">
           <option> ------ วัน ------ </option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
           <option value="7">7</option>
           <option value="8">8</option>
           <option value="9">9</option>
           <option value="10">10</option>
           <option value="11">11</option>
           <option value="12">12</option>
           <option value="13">13</option>
           <option value="14">14</option>
           <option value="15">15</option>
           <option value="16">16</option>
           <option value="17">17</option>
           <option value="18">18</option>
           <option value="19">19</option>
           <option value="20">20</option>
           <option value="21">21</option>
           <option value="22">22</option>
           <option value="23">23</option>
           <option value="24">24</option>
           <option value="25">25</option>
           <option value="26">26</option>
           <option value="27">27</option>
           <option value="28">28</option>
           <option value="29">29</option>
           <option value="30">30</option>
           <option value="31">31</option>
         </select> :
 		<select name="BirthMonth">
           <option> --  เดือน -- </option>
           <option value="January">January</option>
           <option value="Febuary">Febuary</option>
           <option value="March">March</option>
           <option value="April">April</option>
           <option value="May">May</option>
           <option value="June">June</option>
           <option value="July">July</option>
           <option value="August">August</option>
           <option value="September">September</option>
           <option value="October">October</option>
           <option value="November">November</option>
           <option value="December">December</option>
         </select> :
 		<select name="BirthYear">
           <option>-- ปี -- </option>
           <option value="1993">1993</option>
           <option value="1994">1994</option>
           <option value="1995">1995</option>
           <option value="1996">1996</option>
           <option value="1997">1997</option>
           <option value="1998">1998</option>
           <option value="1999">1999</option>
           <option value="2000">2000</option>
           <option value="2001">2001</option>
           <option value="2002">2002</option>
           <option value="2003">2003</option>
           <option value="2004">2004</option>
           <option value="2005">2005</option>
           <option value="2006">2006</option>
           <option value="2007">2007</option>
           <option value="2008">2008</option>
           <option value="2009">2009</option>
           <option value="20010">2010</option>
         </select><br><br>
 <label>ที่อยู่ : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="selectpic" type="text" name="address" placeholder="ที่อยู่"><br><br>
   จังหวัด : <select name="province" type="list">
             <option> จังหวัด </option>
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
 <br><br><label>รหัสไปรษณีย์ : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="selectpic" type="text" name="zipcode" placeholder="รหัสไปรษณีย์">
 <br><label>โทรศัพท์ : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="selectpic" type="text" name="telephone" placeholder="โทรศัพท์"><br>
 <br><div style="width:150px;height: 500px;margin: 0px 10px 0px 0px;display:inline;">รายระเอียดอื่นๆ : </div><div style="width:200px;height: 100px;display:inline;"><textarea cols="60" rows="4" name="customer_desciption"></textarea></div><br>
 <br><fieldset>
 <legend><p>Account ของ ลูกค้า</p></legend>
 <label>Username : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="user"></label><br>
 <label>Password : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <input type="password" name="pass" id="password"></label><br>
 <label>Re-Password : &nbsp&nbsp&nbsp&nbsp<input type="password" name="confirmpassword" id="confirmpassword"></label><br>

 </label><br>


 <center><button class="button" name="form_submit" style="vertical-align:middle" ><span> Submit</span></button></center>
 </fieldset>

 </fieldset>

 </form></td></tr>
 </table>
 </form>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
 </body>
 </html>
<?php } ?>
