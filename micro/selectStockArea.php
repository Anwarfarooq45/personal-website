<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select taluk</title>
  <link rel="stylesheet" href="style_selectTaluk.css">
  <link rel="stylesheet" href="style_displayCustomer.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="navbar">
            <a href="#"><img class="logo" src="logo.jpg" loading="lazy"  width="60px" height="60px"></a>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="displayCustomer.php">Customer</a></li>
                <li><a href="stampList.php">Stamp list</a></li>
                <li><a href="customer.php">Add customer</a></li>
                <li><a href="select-taluk.php">Area Wise</a></li>
            </ul>
</div>
  <div class="container">
    <a href="stockDisplay.php?area=adimali"><button class="btn btn-primary btn-lg">Adimali</button></a>
    <a href="stockDisplay.php?area=murickassery"><button class="btn btn-primary btn-lg">Murickassery</button></a>
    <a href="stockDisplay.php?area=perumbavoor"><button class="btn btn-primary btn-lg">Perumbavoor</button></a>
    <a href="stockDisplay.php?area=cheruthoni"><button class="btn btn-primary btn-lg">Cheruthoni</button></a>
  </div>
</body>
</html>