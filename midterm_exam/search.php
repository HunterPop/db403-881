<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search product by category</title>
</head>
<body>
  <?php
    echo '<b>Sarawut Bangpa</b>';
    echo '<br>';
  ?>
  <header>
    <form action="product.php" method="get">
      <label for="category">
        <select name="category" id="category">
          <option value="Beverages">Beverages</option>
          <option value="Condiments">Condiments</option>
          <option value="Confections">Confections</option>
          <option value="Dairy Products">Dairy Products</option>
          <option value="Grains/Cereals">Grains/Cereals</option>
          <option value="Meat/Poultry">Meat/Poultry</option>
          <option value="Produce">Produce</option>
          <option value="Seafood">Seafood</option>
        </select>
      </label>
      <input type="submit" value="Search" name="submit">
    </form>
  </header>
</body>
</html>