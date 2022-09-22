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
    if($query){
        echo
        '<script>
        alert("Add Series Success!");
        window.location = "../page/listSeriesPage.php"
        </script>';
    }else{
        echo
        '<script>
        alert("Add Series Failed!");
        </script>';
    }
}else{
    echo
    '<script>
    window.history.back()
    </script>';
}

?> 