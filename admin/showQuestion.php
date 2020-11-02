<?php
  require '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <div id="navbar">
        <ul>
           <li><a href="index.php">Home</a></li>
           <li><a href="addquestion.php">Add Question</a></li>
           <li><a href="showQuestion.php">View Question</a></li>
           <li><a href="#">User Result</a></li>
           <li><a  href="login.php" style="margin-left: 700px;">Log out</a></li>
        </ul>
    </div>
    <table>
      <tr>
        <th>Question</th>
        <th>Option1</th>
        <th>Option2</th>
        <th>Option3</th>
        <th>Option4</th>
        <th>Right Answer Index</th>
        <th>Category</th>
      </tr>
      <?php
        $sql = "SELECT * FROM question";
        $res = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($res)) {
            ?>
      <tr>
        <td><?php echo $row['question'] ?></td>
        <td><?php echo $row['option1'] ?></td>
        <td><?php echo $row['option2'] ?></td>
        <td><?php echo $row['option3'] ?></td>
        <td><?php echo $row['option4'] ?></td>
        <td><?php echo $row['rightanswer'] ?></td>
        <td><?php echo $row['category'] ?></td>
      </tr>
             <?php
        }

        ?>
  </table>
</body>
</html>
