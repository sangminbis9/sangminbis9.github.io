<?php
//데이터 베이스 연결
$server = "localhost:3306";
$user = "root";
$password = "bis9sangmin";
$dbname = "productdb";

$conn = new mysqli($server, $user, $password, $dbname);

//form 데이터 읽어오기
$name = $_POST["name"];
$image = $_POST["image"];
$category = $_POST["category"]
$color = $_POST["color"];
$gender = $_POST["gender"];

echo "<h3>추가할 상품은 {$name}, {$category}, {$color}, {$gender}</h3>";

//insert sql 작성
$sql = "INSERT INTO producttable (name, image, category, color, gender) VALUES('$name','$image','$category','$color','$gender')";

if ($conn->query($sql)) echo "<h3>상품 등록 성공</h3>";
else echo "<h3>상품 등록 실패</h3>";

?>