<?php

//echo "Search.php started";
include('databaseconnect.php');
$searchterm = $_GET["searchtext"];
//echo $searchterm;
$sql = "SELECT * FROM X32199883.PRODUCT WHERE Description LIKE '%$searchterm%' OR Name LIKE '&$searchterm'";
$result = mysqli_query($conn, $sql);

echo "<h1>Items matching ". $searchterm . " </h1>";


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
    echo "0 results for " . $searchterm;
}

mysqli_close($conn);
?>