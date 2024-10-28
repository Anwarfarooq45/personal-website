<?php
  include("database.php");

  // Don't forget to properly escape your values before you send them to DB
  // to prevent SQL injection attacks.

  $field1 = $conn->real_escape_string($_POST['machineName']);
  $field2 = $conn->real_escape_string($_POST['imageLink']);
  $field3 = $conn->real_escape_string($_POST['stock']);
  $field4 = $conn->real_escape_string($_POST['area']);
  $field5 = $conn->real_escape_string($_POST['lastModifiedDate']);
  
  $duplicate = "SELECT * FROM stockregister WHERE machineName = '$field1' AND area = '$field4'";
  $result = $conn->query($duplicate);
  if($result->num_rows > 0){
    echo "<script>
  alert('Machine name already exist. Please enter new Machine Name..');
  window.location.href='addStockForm.php';
  </script>";
  }else{

  $query = "INSERT INTO stockregister (machineName,image,stock,area,lastModifiedDate) VALUES ('{$field1}','{$field2}','{$field3}','{$field4}','{$field5}')";

  $conn->query($query);
  $conn->close(); 
  echo "<script>
  alert('Machine stock details added successfully');
  window.location.href='addStockForm.php';
  </script>";
  }
  ?>
