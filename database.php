<html>
    <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "mysql";

    $conn = mysqli_connect($servername, $username, $password);
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $sqlq = "CREATE DATABASE fast_tour_db";
    if (mysqli_query($conn, $sqlq)) {
    echo "Database created successfully";
    } else {
    echo "Error creating database: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    

    $dbname = "fast_tour_db";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }


    $sql1 = "CREATE TABLE tours (
        tour_id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        tour_name VARCHAR(255) NOT NULL,
        tour_price FLOAT NOT NULL,
        tour_capacity INT NOT NULL,
        tour_images VARCHAR(255),
        tour_days INT,
        tour_nights INT,
        tour_type EMUN('Heritage sites','International','Vacation','Pilgrimage','Popular','Highly rated'),
        tour_startdate date,
        tour_enddate date)";

    if (mysqli_query($conn, $sql1)) {
    echo "Table 1 created successfully";
    } else {
    echo "Error creating table: " . mysqli_error($conn);
    }

    $sql = "CREATE TABLE users (
        user_id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        user_firstname VARCHAR(255) NOT NULL,
        user_lastname VARCHAR(255) NOT NULL,
        user_email VARCHAR(255) NOT NULL UNIQUE KEY,
        user_pwd VARCHAR(255) NOT NULL UNIQUE KEY,
        user_phno VARCHAR(12),
        user_dob date)";

    if (mysqli_query($conn, $sql1)) {
    echo "Table 2 created successfully";
    } else {
    echo "Error creating table: " . mysqli_error($conn);
    }

    $sql2 = "CREATE TABLE user_tours (
       
        )";
    if (mysqli_query($conn, $sql2)) {
    echo "Table 3 created successfully";
    } else {
    echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);

    ?>
    </body>
</html>