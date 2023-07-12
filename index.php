<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php

/* 
---Hello World, Setup & Writing HTML
echo"<h1>My site</h1>";
echo"Hello World";
echo "<hr>";
echo "<br>"

---Variables
$HisName="Chef";
$HisAge=18;
echo"<h1>My site</h1>";
echo "<hr>";
echo"This is $HisName site";
echo"<br>";
echo"He is $HisAge old";

---Data Types
$sentence ="Actually I'm";
$age =18;
$gpa =5.0;
$ismale = true;
echo $sentence;



---Working with strings
$phrase = "F'academy";
echo $phrase;
echo strtolower($phrase);
echo "<br>";
echo strtoupper($phrase);
echo "<br>";
echo strlen($phrase);
echo "<br>";
echo strtolower($phrase[0]); 
echo $phrase[5];
echo str_replace("F'", "Flutura'", $phrase);
echo "<br>";
echo substr($phrase, 7);
echo "<br>";
echo substr($phrase,2,9);



//---Working with numbers
echo -40 ."<br>";
echo 5 + 5 ."<br>";
echo 10 / 10 ."<br>";
echo 5 % 3 ."<br>";
echo (5 + 3) * 4 ."<br>"; // 32
echo 5 + 3 * 4 ."<br>"; // 17

$num = 10;
$num++;
echo $num ."<br>";

$num2 = 10;
$num2+=5;
echo $num2 ."<br>";

$num = 10;
$num--;
echo $num ."<br>";

$num2 = 10;
$num2 -=5;
echo $num2 ."<br>";

echo abs(-100)."<br>";
echo pow(2,4) ."<br>";
echo sqrt(40)."<br>";
echo max(4,65)."<br>";
echo min(4,65)."<br>";
echo round(9.99)."<br>";
echo ceil(9.99)."<br>";
echo floor(4.7)."<br>";
echo tan(60)."<br>";
 */

 
?>

 <?php 

 //---Getting User Input

//echo ("Emri juaj eshte: \t\t") .$_GET["emri"] ."<br>"; 
//echo ("Mbiemri juaj eshte: \t\t") .$_GET["mbiemri"] ."<br>";
//echo ("Mosha juaj eshte: \t\t") .$_GET["mosha"] ."<br>";
//echo ("Email-a juaj eshte: \t\t") .$_GET["email"]; 

      //Ose menyra tjeter:
      
?>
     <!-- Emri juaj eshte: <?php //echo $_GET["emri"]; ?> <br>
     Mbiemri juaj eshte:<?php //echo $_GET["mbiemri"]; ?> <br>
     Mosha juaj eshte:<?php //echo $_GET["mosha"]; ?> <br>
     Email juaj eshte:<?php //echo $_GET["email"]; ?> <br> -->

<!-- <form action="index.php" method="get">
      <label>Emri:</label>
      <input type="text" name="emri" />
      <br/>
      <br/>
      <label>Mbiemri:</label>
      <input type="text" name="mbiemri" />
      <br/>
      <br/>
      <label>Mosha:</label>
      <input type="number" name="mosha" />
      <br/>
      <br/>
      <label>E-Mail adresa:</label>
      <input type="email" name="email" />
      <br>
      <br>
      <input type="submit" value="Submit" />
    </form> -->


    <!-- Very basic calculator -->
    <!-- <form action="index.php" method="post">
        <input type="number" name="num1"> <br><br>
        <input type="number" name="num2"> 
        <input type="submit">
    </form> -->

    <!-- Answer:--><?php 
   //echo $_GET["num1"] + $_GET["num2"];
     ?>


     <!-- Building a Mad Libs Game  -->

     <!-- <form action="index.php" method="get">
        Color: <input type="text" name="color"><br>
        Plural Noun: <input type="text" name="pnoun"><br>
        Celebrity: <input type="text" name="cbity"><br>
        <input type="submit">
     </form> -->

     <?php 
    // $color = $_GET["color"];
     //$pnoun = $_GET["pnoun"];
     //$cbity = $_GET["cbity"];
     //echo "Roses are $color <br>";
     //echo "$pnoun are blue <br>";
     //echo "I don't like $cbity <br>";
     ?>

     <!-- URL Parameters -->
     <?php 
    // echo $_GET ["name"]
     ?>

    <!-- POST vs GET -->
     <!-- <form action="index.php" method="post">
      Pass: <input type="password" id="w" name="w">
      <input type="submit">
     </form>

     <?php
     // echo $_POST["w"];
     ?> -->

     <!-- Arrays -->
     <?php
    // $friends = array("Me","Myself","I");
    // $friends[2]="You";
    // echo $friends[2];
    // $friends[3]="ng";
    // echo $friends[3];
    // echo "<br>";
    // echo count($friends);
      ?>

      <!-- Using Checkboxes -->
      <!-- <form action="index.php" method="post">
      Apples:  <input type="checkbox" name="fruits[]" value="apples"><br>
      Oranges:  <input type="checkbox" name="fruits[]" value="oranges"><br>
      Pears:  <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit">
      </form> -->

      <?php
    // $fruits = $_POST["fruits"];
    // echo $fruits[1];
      ?>

      <!-- Associative Arrays -->
      <form action="index.php" method="post">
        <input type="text" name="student">
        <input type="submit">
      </form>
      <?php
      $grades = array("Jim"=>"5","Dion"=>"4","Diana"=>"3");
       $grades["Jim"]="F";
      echo $grades["Jim"];
      echo count($grades);
      ?>



































































































































































































































































































































































































</body>
</html>