<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock-Details</title>
    <link rel="stylesheet" href="style_customer.css">
</head>
<body>
    <div class="container">
        <img src="bg_c.png" alt="customer_Logo" class="upcycle-logo">
        <h2>Stock Details</h2>
        <!-- Personal Details Form -->
        <form id="addStockForm" action="addStock.php" method="post" >
            <div class="form-group">
                <label for="machineName">Machine Name:</label>
                <input type="text" id="machineName" name="machineName" required>
            </div>
            <div class="form-group">
                <label for="image-link">Image link:</label>
                <input type="text" id="imageLink" name="imageLink"  >
            </div>
            <div class="form-group">
              <label for="stock">Stock:</label>
              <input type="text" id="stock" name="stock"  required>
          </div>
          <div class="form-group">
              <label for="area">Area:</label>
              <!--<input type="text" name="taluk">-->
              <select name="area" required>
                  <option value="#">Please select Area</option>
                  <option value="Murickassery">Murickassery</option>
                  <option value="Adimali">Adimali</option>
                  <option value="Perumbavoor">Perumbavoor</option>
                  <option value="Perumbavoor">Cheruthoni</option>
              </select>
          </div>
            <div class="form-group">
                <label for="LastModifiedDate">Last Checked date:</label>
                <input type="date" id="lastMoodifiedDate" name="lastModifiedDate" >
            </div>
            
            <div class="form-group">
              <input class="back-button" type="submit"  name="submit">
            </div>
            <!--<small>We will message you via What's App to coordinate item pick ups</small>-->
        </form>
        <a href="selectStockArea.php" class="back-button">Back</a>
    </div>
</body>
</html>
