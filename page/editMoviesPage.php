<?php
include '../component/sidebar.php';
$id = $_GET['id'];  

$qry = mysqli_query($con,"select * from movies where id='$id'"); 

$data = mysqli_fetch_assoc($qry); 
$nameMovies = $data["name"];
$_SESSION['genreMovies'] =$data["genre"];
$realeseMovies = $data["realese"];
$seasonMovies = $data["season"];
$synopsisMovies = $data["synopsis"];
?>

<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF;  border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>Edit Movie</h4>
    <hr>

    <form action="../process/editMoviesProcess.php?id=<?php echo $id; ?>" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input class="form-control" id="name" name="name"
            value="<?php echo (isset($nameMovies)) ? $nameMovies: ''?>" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Genre</label>
            <select class="form-select" aria-label="Default select example" name="genre" id="genre">
                <?php
                    $array = array("Action","Comedy","Rommance");
                    session_start();
                    $genreSelect = $_SESSION['genreMovies'];
                    foreach($array as $value=>$name)
                    {
                        if($name == $genreSelect)
                        {
                             echo "<option selected value='".$name."'>".$name."</option>";
                        }
                        else
                        {
                             echo "<option value='".$name."'>".$name."</option>";
                        }
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Release</label>
            <input class="form-control" id="realese" name="realese"
            value="<?php echo (isset($realeseMovies)) ? $realeseMovies: ''?>" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Season</label>
            <input class="form-control" id="season" name="season"
            value="<?php echo (isset($seasonMovies)) ? $seasonMovies: ''?>" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Synopsis</label>
            <input class="form-control" id="synopsis" name="synopsis"
            value="<?php echo (isset($synopsisMovies)) ? $synopsisMovies: ''?>" aria-describedby="emailHelp">

        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="edit">Edit Movies</button>
        </div>
    </form>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>