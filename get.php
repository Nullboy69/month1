<?php
// Assuming the URL is something like: http://example.com/script.php?name=John&age=30

// Retrieve the input from the URL
$name = $_GET['name']; // Retrieves the value of 'name' parameter
$age = $_GET['age']; // Retrieves the value of 'age' parameter

// Output the retrieved values
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
?>
