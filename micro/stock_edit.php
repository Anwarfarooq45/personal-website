<?php
  include("database.php");

  // Don't forget to properly escape your values before you send them to DB
  // to prevent SQL injection attacks.
  $field0 = $conn->real_escape_string($_POST['id']);
  $field1 = $conn->real_escape_string($_POST['machineName']);
  $field2 = $conn->real_escape_string($_POST['imageLink']);
  $field3 = $conn->real_escape_string($_POST['stock']);
  $field4 = $conn->real_escape_string($_POST['lastModifiedDate']);
  
  //$query = "UPDATE  stockregister (c_name,shop_name,c_address,c_phone,c_taluk,c_date,machine_model,sl_no,nextStampQuarter) VALUES ('{$field1}','{$field2}','{$field3}','{$field4}','{$field5}','{$field6}','{$field7}','{$field8}','{$field9}')";
  $query = "UPDATE stockregister SET machineName='".$field1."',image='".$field2."',stock='".$field3."',lastModifiedDate='".$field4."' WHERE id=".$field0;

  $conn->query($query);
  $conn->close(); 
  echo "<script>
  alert('Stock details edited successfully');
  window.location.href='selectStockArea.php';
  </script>";
  ?>
