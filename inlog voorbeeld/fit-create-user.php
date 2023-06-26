
<?php
require 'db_conn.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $query = $conn->prepare("SELECT * FROM users WHERE id = $id");
    //uitgevoerd
    $query->execute();
    //opgehaald
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

}
else{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Index</title>
</head>
<body>
<h1>Welcome <?php echo $results["name"]; ?></h1>
<a href="logout.php">Logout</a>
</body>
</html>
