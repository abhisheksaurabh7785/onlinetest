<?php
  session_start();
  require 'config.php';
?>

<html>
  <head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div id="navbar">
      <ul>
        <li><a href="#" >Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Menu</a></li>
        <li><a  href="logout.php" style="margin-left: 900px;">Log out</a></li>
      </ul>
    </div>
    <div>
      <h1>Online Exam</h1>
    </div>
    <div>
      <center><p style="font-size: 30px;">Welcome <?php echo $_SESSION['name']; ?></p></center>
    </div>
    <div>
      <center><p style="font-size:30px;">Start your quiz by clicking on
       start quiz button.</p><center>
     
      <form action="question.php" method="post">
 
          <p class="select">
            <label >Select Your Test</label>
            <select name="category" class="opt" required>
              <option value="">Select Quiz</option>
              <?php
                $sql = "SELECT * FROM category";
                $res = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?>
                    </option>
                    <?php
                }
                ?>
            </select>
          </p>
          <p class="select">
            <input type="submit" value="Start quiz" class="submit" name="submit">
          </p>
      </form>
    </div>
</body>
</html>