<?php


$servername = "localhost";
$username = "root";
$password = "Password123";
$dbname = "myearthmyhomedb";

//create connection
//$conn = mysqli_connect("localhost", "root", "Password123", "myEarthmyHomeDB", "pages");
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed: 0 . $conn->connect_error");
}


//$conn->close();
//create table user
//$sql = "CREATE TABLE user (
//id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//firstname VARCHAR(50) NOT NULL,
//lastname VARCHAR(50) NOT NULL,
//email VARCHAR(50),
//phone BIGINT(20) NULL,
//address VARCHAR(50) NOT NULL,
//address_2 VARCHAR(50) NOT NULL,
//city VARCHAR(50) NOT NULL,
//zip ENUM('NSW', 'QLD', 'SA', 'Tas', 'Vic', 'WA'),	
//age VARCHAR(30),
//sex ENUM('male', 'female', 'other'),
//password VARCHAR(50) NOT NULL,
//username VARCHAR(30) NOT NULL,
//reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//)";
//
//if ($conn->query($sql) === TRUE) {
//    echo "Table user created successfully";
//} else {
//    echo "Error creating table: " . $conn->error;
//}
//$sql = "CREATE TABLE product ("
//        . " id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
//        . " name VARCHAR(50) NOT NULL,"
//        . "image VARCHAR(50) NOT NULL,"
//        . "price DOUBLE(10,2) NOT NULL ) CHARSET=ascii";
//
//if ($conn->query($sql) === TRUE) {
//    echo "Table product created successfully";
//} else {
//    echo "Error creating table: " . $conn->error;
//}
//$sql = "INSERT INTO product (name, image, price)
//VALUES ('gift1', 'gift.jpg', 20.00);";
//$sql .= "INSERT INTO product (name, image, price)
//VALUES ('gift2', 'gift2.jpg', 15.00 );";
//$sql .= "INSERT INTO product (name, image, price)
//VALUES ('gift3', 'gift3.jpg', 25.00)";
//
//
//if ($conn->multi_query($sql) === TRUE) {
//    echo "New records created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//create table event
//$sql = "CREATE TABLE event ("
//        . " id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
//        . " date DATE NOT NULL,"
//        . " details VARCHAR(255) NOT NULL) CHARSET=ascii";
//
//if ($conn->query($sql) === TRUE) {
//    echo "Table event created successfully";
//} else {
//    echo "Error creating table: " . $conn->error;
//}

//create table donate
//$sql = "CREATE TABLE donate ("
//        . " donate_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
//        . " donation DECIMAL NOT NULL,"
//        . " id INT NOT NULL
//        . "INDEX user_id (id),
//        . "FOREIGN KEY (id) REFERENCES user(donate_id) ON DELETE CASCADE) CHARSET=ascii";
//
//if ($conn->query($sql) === TRUE) {
//    echo "Table donate created successfully";
//} else {
//    echo "Error creating table: " . $conn->error;
//}
?>