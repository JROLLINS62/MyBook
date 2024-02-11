<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <title>My PHP Website</title>
  </head>
  <body>
    <h1> Welcome to the Cloud!</h1>
    <form action = "" method = "post">
      Your Name:
      <br>
      <input type = "text" name = "name", size = "30", maxlength = "30">
      <br>
      <input type = "submit" name = "submit" value = "Submit">
      <input type = "submit" name = "view" value = "View All">
    </form>
    <?php
    $host = "127.0.0.1:33062";
    $user = "justinrollins";
    $password = "GMct1982";
    $db = "rollinsclouddb";
    //CONNECT TO DATABASE
    $conn = mysqli_init();
    mysqli_real_connect($conn, $host, $user, $password, $db, 33062);
    if (isset($_POST['submit']))
    {
    $yourName = $_POST['name'];
    //SQL STATEMENT
    $query = "INSERT INTO visitor (visitorName)
    VALUES('$yourName')";
    if(mysqli_query($conn, $query))
    echo "<p>Hi, $yourName, welcome to my cloud.</p>";
    else
    echo "<p>Hi, $yourName, please try again.</p>";
    }
    //IF VIEW ALL BUTTON IS CLICKED
    if(isset($POST['view'}))
    {
    $query = "SELECT * FROM visitor";
    $result = mysqli_query($conn, $query);
      if(mysqli_num_rows($result) > 0)
      {
        $display = "<h2> All Visitors </h2>";
          while($row = mysqli_fetch_assoc($result))
            {
              $display .="Name: ".$row["visitorName"]."<br>";
              $display .="Date Time: ".$row["visitTime"]."<br>";
            }
      }
    echo $display;
    }
    //CLOSE CONNECTION
    mysqli_close($conn);
  </body>
</html>
