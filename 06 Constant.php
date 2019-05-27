<html>
 <body>
 <?php
/* Here constant name is ‘Hai’ and ‘Hello
Friend’ is its constant value and true
indicates the constant value is caseinsensitive */
 define("Hai","Hello Friend",true);
 echo hai;

 // defining constant value PI = 3.14
 define("PI","3.14");
 $radius=15;
 $area=PI*$radius*$radius;
 echo "Area=".$area;
 
 ?>
 </body>
</html>