<?php 
    if(isset($_POST['create'])){

    include('../db.php');

    $name = $_POST['name'];
    $genre = implode (", ", $_POST["genre"]);
    $realease = $_POST['realease'];
    $episode = $_POST['episode'];
    $season = $_POST['season'];
    $synopsis = $_POST['synopsis'];

    $query = "INSERT INTO series VALUES('', '$name', '$genre', '$realease', '$episode', '$season', '$synopsis')";
    $result = mysqli_query($con, $query);
    return mysqli_affected_rows($con);
}
?>