<?php 
  declare(strict_types = 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
  function details(string $name, int $age) {
      echo "Name: $name, Age: $age";
  }
  details("Alvin", 21);  // Pass 21 as an integer, not a string
?> 
</body>
</html>
