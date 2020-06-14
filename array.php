<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Arrays</title>
  </head>
  <body>
 <?php
$Sample = array("Sahil","Lovekush","Raghavji");
echo "Printed using foreach loop: "."<br>";
foreach ($Sample as $value) {
  echo $value."<br>";
}
echo "Printed using their indexes: "."<br>";
echo $Sample[0]."<br>";
echo $Sample[1]."<br>";
echo $Sample[2]."<br>";
echo "Printed using for loop: <br>";
for ($i=0; $i < count($Sample) ; $i++) {
  echo $Sample[$i]."<br>";
}

  ?>

  </body>
</html>
