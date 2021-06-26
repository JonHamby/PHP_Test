<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "php_dbtest";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
<h1>Task #1:</h1></br>

<p><b>Comments about candy:</b></p>
    <?php
        $sql = "SELECT * FROM sweetwater_test WHERE comments LIKE '%candy%' OR '%sweets%';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>" . $row['orderid'] . ": " . $row['comments'] . "</p>";
            }
        }
    ?>
    </br>
    <hr>

    <p><b>Comments about call me / don't call me:</b></p>
    <?php
        $sql = "SELECT * FROM sweetwater_test WHERE comments LIKE '%call %';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>" . $row['orderid'] . ": " . $row['comments'] . "</p>";
            }
        }
    ?>
    </br>
    <hr>

    <p><b>Comments about who referred me:</b></p>
    <?php
        $sql = "SELECT * FROM sweetwater_test WHERE comments LIKE '%referred %';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>" . $row['orderid'] . ": " . $row['comments'] . "</p>";
            }
        }
    ?>
    </br>
    <hr>

    <p><b>Comments about signature requirements upon delivery:</b></p>
    <?php
        $sql = "SELECT * FROM sweetwater_test WHERE comments LIKE '%signature %';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>" . $row['orderid'] . ": " . $row['comments'] . "</p>";
            }
        }
    ?>
    </br>
    <hr>

    <p><b>Miscellaneous comments (everything else):</b></p>
    <?php
        $sql = "SELECT * FROM sweetwater_test WHERE comments NOT LIKE '%signature %'
        OR '%referred %' OR '%call %' OR '%candy%' OR '%sweets%';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>" . $row['orderid'] . ": " . $row['comments'] . "</p>";
            }
        }
    ?>
    </br>
    <hr>

    <p><b>Expected Ship Date:</b></p>
    <?php
        $sql = "SELECT * FROM sweetwater_test WHERE comments LIKE '%Y/%m/%d%';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>" . $row['orderid'] . ": " . $row['comments'] . "</p>";
            }
        }
    ?>
    </br>
    <hr>

    </body>
</html>


