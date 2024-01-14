<?php

$query = "SELECT * FROM as_Category
                   ORDER BY catName";
$categories = mysqli_query($db, $query);
$numRecords = mysqli_num_rows($categories);
$categoryCount = 0;
echo "<table><tr><td><ul>";

for ($i=1; $i<=$numRecords; $i++){
    $row = mysqli_fetch_array($categories, MYSQLI_ASSOC);
    $currentCatName = $row['catName'];
    $prodCatCode = urlencode($row['catCode']);
    $categoryURL = "pages/category.php?categoryCode=$prodCatCode";
    echo "<li><a href='$categoryURL'>$currentCatName</a></li>\r\n"; 
    $categoryCount++;
    if($categoryCount >= $numRecords/2){
        echo "</ul></td>\r\n<td><ul>";
        $categoryCount = 0;
    }
}

echo "</ul></td></tr></table>";
mysqli_close($db);
?>

