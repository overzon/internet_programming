<html>
<head>

</head>
<body>
  <form name="myForm" action="" onsubmit="return checkInp()" method="post">
    First name: <input type="text"name="txtNumber" value="" onblur="checkPrice(this);" OnKeyPress="return chkNumber(this)" >
<input type="submit" value="Submit">



    <script type="text/javascript">
var chackblock = 0;
  function chkNumber(ele)
  {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar<'0' || vchar>'9') && (vchar != '.')){chackblock = 1;alert("กรุณใส่ตัวเลข"); return false;}
    ele.onKeyPress=vchar;
  }
  function checkPrice(form) {
   var input=0;
   input=form.value.length;
   if(chackblock==0){
     if (input<3) {
         alert("กรุณาใส่ข้อมูลให้ครบ");
       }
   }
   chackblock = 0;
      }
    </script>
</body>
</html>
