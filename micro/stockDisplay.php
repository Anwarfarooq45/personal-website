<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stock Register</title>
  <link rel="stylesheet" href="stock.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
</head>

<body>

<div class="navbar1">
            <a href="#"><img class="logo" src="logo.jpg" loading="lazy"  width="60px" height="60px"></a>
            <ul style="padding-left:35%">
                <li><a href="home.php">Home</a></li>
                <li><a href="displayCustomer.php">Customer</a></li>
                <li><a href="stampList.php">Stamp list</a></li>
                <li><a href="addStockForm.php">Add Stock</a></li>
                <li><a href="select-taluk.php">Area Wise</a></li>
            </ul>
        </div>
</div>
  


<div class="banner">
  <?php
      //include("fetchDataMunnar.php");
    include("database.php");
    $db= $conn;
    //$quarter=$conn->real_escape_string($_GET['quarter']);
    $area=$conn->real_escape_string($_GET['area']);
    //$area='perumbavoor';
    $tableName="stockregister";
    $columns= ['id','machineName','image','stock','area','lastModifiedDate'];
    $fetchData = fetch_data($db, $tableName, $columns,$area);
    function fetch_data($db, $tableName, $columns,$area){
    if(empty($db)){
      $msg= "Database connection error";
    }elseif (empty($columns) || !is_array($columns)) {
      $msg="columns Name must be defined in an indexed array";
    }elseif(empty($tableName)){
      $msg= "Table Name is empty";
    }else{
    $columnName = implode(", ", $columns);
      $query = "SELECT ".$columnName." FROM ".$tableName." WHERE area='".$area."' ORDER BY machineName";

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

  <div class='container'>
    <h2><u><?php echo $area; ?> Stock</u></h2>


    <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>

    <div class='product-card'>
      <div class='row'>
        <div class='col m2 s7'>
          <img class='machine-img' src='<?php echo $data['image']??''; ?>' style="height:150px;width:150px;mix-blend-mode:multiply">
        </div>
        <div class='col m2 s7'>
          <div class='product-name'>
            <?php echo $data['machineName']??''; ?>
          </div>
          <div class='version'>
            Last modified date : <?php echo $data['lastModifiedDate']??''; ?>

          </div>
        </div>
        <div class='col m2 s7'>
          <div class='product-price'><?php echo $data['machinePrice']??''; ?></div>
          <div class='product-stock'><h5>Available Stock: <?php echo $data['stock']??''; ?></h5></div>
          <div class='product-options'>
            <div class='bt edit'><a style="color:black" href="editStockRegister.php?id=<?php echo $data['id']??''; ?>">click to edit</a></div>
            <!--<div class='material-icons'>delete</div>-->
          </div>
        </div>
      </div>
      <?php $sn++;}} ?>
      </div>
  </div>

</div>
</body>
</html>