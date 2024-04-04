<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Multiplication Table</title>
<style>
    table {
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
        padding: 5px;
    }
</style>
</head>
<body>

<form method="post">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number" min="1" required>
    <button type="submit">Generate Table</button>
</form>

<?php
echo "<h2>Multiplication Table up to $number</h2>";
echo "<table>";
echo "<tr><th>&times;</th>";
for ($i = 1; $i <= $number; $i++) {
  echo "<th>$i</th>";
}
echo "</tr>";
for ($i = 1; $i <= $number; $i++) {
echo "<tr><th>$i</th>";
  for ($j = 1; $j <= $number; $j++) {
    echo "<td>" . ($i * $j) . "</td>";
    }
  echo "</tr>";
  }
echo "</table>";
}
?>

</body>
</html>
