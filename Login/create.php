<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "huzaifa";/* put your database name here */

/* Create connection */
$conn = mysqli_connect($servername, $username, $password, $dbname);
/* Check connection */
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* sql query to create table */
$sql = "CREATE TABLE user
(
user_id int NOT NULL AUTO_INCREMENT,
login varchar(50),
pass varchar(50),
name varchar(50),
email varchar(50),
PRIMARY KEY (user_id)
);

if (mysqli_query($conn, $sql)){
    echo "Table test created successfully";
}else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>