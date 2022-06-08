<?php 
  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $dbname     = "webalumni";

  // create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  //membuat table pesanalumni
  $sql_kontak = "CREATE TABLE pesanalumni (
      Id INT (5) PRIMARY KEY NOT NULL  AUTO_INCREMENT,
      Posted DATE,
      Name VARCHAR(50),
      Email VARCHAR(75),
      Address VARCHAR(75),
      TahunLulus VARCHAR(75),
      Pekerjaan VARCHAR(50),
      Message LONGBLOB 
      )";
      
  if (mysqli_query($conn, $sql_kontak)) {
      echo "Tabel alumni Create Successfully";
  } else {
      echo "Tabel alumni Creating Failed: " . mysqli_error($conn);
  }
  mysqli_close($conn);
?>