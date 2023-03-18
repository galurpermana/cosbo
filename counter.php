<?php
$countFile = "admin/visitor-count.txt";

// Read the visitor count from the file
$count = intval(file_get_contents($countFile));

// Increment the visitor count
$count++;

// Write the updated count to the file
file_put_contents($countFile, $count);

// Return the visitor count as JSON
echo json_encode(["count" => $count]);
?>
