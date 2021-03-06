<?php
$servername = "localhost";
$username = "f32ee";
$password = "f32ee";
$dbname = "f32ee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE MyData (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
item VARCHAR(30) NOT NULL,
price DECIMAL(30,2) NOT NULL
)";

$sql1 = "CREATE TABLE MyOrders (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    item_1 INT(20) NOT NULL,
    item_2 INT(20) NOT NULL,
    item_3 INT(20) NOT NULL,
    item_4 INT(20) NOT NULL,
    item_5 INT(20) NOT NULL
)";

/* NOT NULL - Each row must contain a value for that column, null values are not allowed
DEFAULT value - Set a default value that is added when no other value is passed
UNSIGNED - Used for number types, limits the stored data to positive numbers and zero
AUTO INCREMENT - MySQL automatically increases the value of the field by 1 each time a new record is added
PRIMARY KEY - Used to uniquely identify the rows in a table. The column with PRIMARY KEY setting is often an ID number, and is often used with AUTO_INCREMENT
*/


if (mysqli_query($conn, $sql)) {
    echo "Table MyData created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
if (mysqli_query($conn, $sql1)) {
    echo "Table MyOrders created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
