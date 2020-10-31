<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div id="navbar">
      <ul>
        <li><a href="dashboard.php">Home</a></li>
        <li><a  href="logout.php" style="margin-left: 900px;">Log out</a></li>
      </ul>
    </div>
  </body>
</html>
<?php
  require 'config.php';
  $category = $_POST['category'];
  $correct = 0;
  $wrong = 0;
  $sql = "SELECT * FROM question WHERE category = '$category' ";
  $res = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_assoc($res)) {
    if ($data['rightanswer'] == $_POST[$data['id']]) {
        $correct++;
    } else {
        $wrong++;
    }
}
  echo "Total Question ". ($correct + $wrong);
  echo "<br>";
  echo "Correct ".$correct;
  echo "<br>";
  echo "Wrong ".$wrong;
  echo "<br>";
  $per = $correct*100/($correct+$wrong);
  echo "Total Percentage " . $per . "%";
?>