<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Data</title>
  <!--<link rel="stylesheet" href="style_displayCustomer.css">-->
  <link rel="stylesheet" href="style_navbar.css">
  <link rel="stylesheet" href="style_table.css">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
  <style>
    table{
      overflow-x:auto;
    }
  </style>
</head>
<body>
<div class="banner">
<div class="navbar1">
            <a href="#"><img class="logo" src="logo.jpg" loading="lazy"  width="60px" height="60px"></a>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="displayCustomer.php">Customer</a></li>
                <li><a href="stampList.php">Stamp list</a></li>
                <li><a href="customer.php">Add customer</a></li>
                <li><a href="select-taluk.php">Area Wise</a></li>
            </ul>
  </div>

  <div class="tb">
  <?php
  //include("fetchDataMunnar.php");
    include("database.php");
    $db= $conn;
    $tableName="customer";
    $columns= ['id','c_name','shop_name','c_address','c_phone','c_taluk','c_date','machine_model','sl_no','nextStampQuarter'];
    $fetchData = fetch_data($db, $tableName, $columns);
    function fetch_data($db, $tableName, $columns){
    if(empty($db)){
      $msg= "Database connection error";
    }elseif (empty($columns) || !is_array($columns)) {
      $msg="columns Name must be defined in an indexed array";
    }elseif(empty($tableName)){
      $msg= "Table Name is empty";
    }else{
    $columnName = implode(", ", $columns);
    $query = "SELECT ".$columnName." FROM ".$tableName." ORDER BY c_date ";

    $result = $db->query($query);
    if($result== true){ 
    if ($result->num_rows > 0) {
        $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
        $msg= $row;
    } else {
        $msg= "No Data Found"; 
    }
    }else{
      $msg= mysqli_error($db);
    }
    }
    return $msg;
    }
  ?>
  <div class="container">
 <div class="row">
   <div class="">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table style="overflow-x:auto">
       <thead class="thead-dark">
        <tr>
         <th scope="col">S.N</th>
         <th scope="col">Full Name</th>
         <th scope="col">Shop name</th>
         <th scope="col">Address</th>
         <th scope="col">Mobile Number</th>
         <th scope="col">Taluk</th>
         <th scope="col">Purchase Date</th>
         <th scope="col">Machine model</th>
         <th scope="col">Serial Number</th>
         <th scope="col">Stamping Quarter</th>
         <!--<th scope="col">Call</th>-->
         <th scope="col">delete</th>
         <th scope="col">Edit</th>
        </tr>

    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td data-label="Id"><?php echo $sn; ?></td>
      <td data-label="Name"><?php echo $data['c_name']??''; ?></td>
      <td data-label="Shop name"><?php echo $data['shop_name']??''; ?></td>
      <td data-label="Address"><?php echo $data['c_address']??''; ?></td>
      <td data-label="Phone"><?php echo $data['c_phone']??''; ?></td>
      <td data-label="Section"><?php echo $data['c_taluk']??''; ?></td>
      <td data-label="Purchace date"><?php echo $data['c_date']??''; ?></td>
      <td data-label="Machine model"><?php echo $data['machine_model']??''; ?></td>  
      <td data-label="Sl no"><?php echo $data['sl_no']??''; ?></td>  
      <td data-label="Next stamp quarter"><?php echo $data['nextStampQuarter']??''; ?></td> 
      <!--<td data-label="Call"><a href="tel:<?php $phone=$data['c_phone']; echo $phone; ?>"><button>Call</button></a></td>  -->
      <td data-label="Delete"><a href="deleteCustomer.php?ID=<?php echo $data['sl_no'] ?>"><i class="glyphicon glyphicon-trash">delete</i></a></td>
      <td data-label="Edit"><a href="customer_editForm.php?ID=<?php echo $data['sl_no'] ?>"><i class="glyphicon glyphicon-edit">Edit</i></a></td>


     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
  </div>
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->
</body>
</html>