<!DOCTYPE html>
<html>
  <head>
  <meta charset - "utf-8">
  <title> Create MSQL DB on Azure</title>
  </head>
  <body>
    <?php
    $host = "127.0.0.1:33062";
    $user = "justinrollins";
    $password = "GMct1982";
    $db = "rollinsclouddb";
//CONNECT TO DATABASE
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $user, $password, $db, 33062);
$query = "CREATE TABLE visitor
(
visitorid INTEGER AUTO_INCREMENT,
visitorName VARCHAR(100) NOT NULL,
visitTime TIMESTAMP DEFAULT NOW(),
PRIMARY KEY (visitorid)
)";
if(mysqli_query($conn, $query))
  echo"<p>Table created.</p>"
//CLOSE CONNECTION
mysqli_close($conn);
    ?>
  </body>
</html>
