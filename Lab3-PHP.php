<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
    
</head>
<body>

<h2>PHP Multiplication Table</h2>

<!-- Form to get user input -->
<div id="form-container">
    <form method="post">
        <label>Enter a number: 
            <input type="number" name="num" min="1" required>
        </label>
        <input type="submit" value="Generate Table">
    </form>
</div>

<!-- Output area -->
<div id="table-container">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = intval($_POST["num"]);

    echo "<h3>Multiplication Table up to $n</h3>";
    echo "<table>";

    // Header row
    echo "<tr><th>*</th>";
    for ($i = 1; $i <= $n; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";

    // Table rows
    for ($row = 1; $row <= $n; $row++) {
        echo "<tr><th>$row</th>";
        for ($col = 1; $col <= $n; $col++) {
            echo "<td>" . ($row * $col) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>
</div>

</body>
</html>
