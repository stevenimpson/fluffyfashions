<?php
include('databaseconnect.php');
$sql = "SELECT ProductID, Name, Price FROM X32199883.PRODUCT WHERE Featured = 1";
$result = mysqli_query($conn, $sql);


echo "<h1>Featured items </h1>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["Name"];
        echo '<div class="righttv">'; 
        echo "Price: " . $row["Price"];
        echo '</div>';
        echo "<hr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>