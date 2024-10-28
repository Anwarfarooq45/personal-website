<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer-Details</title>
    <link rel="stylesheet" href="style_customer.css">
</head>
<body>
  <?php
    include("database.php");
    $id=$_GET['id'];
    $query="select * FROM stockregister WHERE id='".$id."'";
    $result=$conn->query($query);
    if($result->num_rows > 0){
      $fetchData = mysqli_fetch_row($result);
    ?>
    <div class="container">
        <img src="<?php echo $fetchData[2]; ?>" alt="Stock_Logo" class="upcycle-logo">
        <h2>Customer Details</h2>
        <!-- Personal Details Form -->
        <form id="personalDetailsForm" action="stock_edit.php" method="post" >
            <div class="form-group">
                <input type="hidden" id="Id" name="id" value="<?php echo $fetchData[0]; ?>"">
                <label for="machineName">Machine Name:</label>
                <input type="text" id="machineName" name="machineName" value="<?php echo $fetchData[1]; ?>" required>
            </div>
            <div class="form-group">
                <label for="image-link">Image link:</label>
                <input type="text" id="imageLink" name="imageLink" value="<?php echo $fetchData[2]; ?>" >
            </div>
            <div class="form-group">
              <label for="stock">Stock:</label>
              <input type="text" id="stock" name="stock" value="<?php echo $fetchData[3]; ?>" required>
          </div>
            <div class="form-group">
                <label for="LastModifiedDate">Last Checked date:</label>
                <input type="date" id="lastMoodifiedDate" name="lastModifiedDate" value="<?php echo $fetchData[5]; ?>" >
            </div>
          
            <div class="form-group">
              <input class="back-button" type="submit"  name="submit">
            </div>
            <!--<small>We will message you via What's App to coordinate item pick ups</small>-->
        </form>
        <a href="selectStockArea.php" class="back-button">Back</a>
    </div>
    <?php
    }
    ?>
</body>
</html>
