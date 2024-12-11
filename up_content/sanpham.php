<?php
$conn = new mysqli("localhost", "root", "", "test");
$sql = "SELECT * FROM ipad";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $decodedContent = htmlspecialchars_decode($row['noi_dung']); 
    echo "<h2>" . htmlspecialchars($row['ten_san_pham']) . "</h2>";
    echo "<div class='content'>" . $decodedContent . "</div>";
}
$conn->close();
?>