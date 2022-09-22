<?php 
    include '../component/sidebar.php';

    $id = $_GET['id'];  

    $qry = mysqli_query($con,"select * from series where id='$id'");

    $data = mysqli_fetch_assoc($qry); 
    $nameSeries = $data["name"];
    $_SESSION['genreSeries'] =$data["genre"];
    $realeaseSeries = $data["realease"];
    $episodeSeries = $data["episode"];
    $seasonSeries = $data["season"];
    $synopsisSeries = $data["synopsis"];
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF;  border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4>Update Series</h4>
        <hr>
        <form action="../process/editSeriesProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input class ="form-control" id="name" name = "name" aria-describedby="emailHelp"
                value="<?php echo (isset($nameSeries)) ? $nameSeries: ''?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Genre</label>
                <select class ="form-select" id="genre" name = "genre" aria-describedby="Default select example" multiple>
                    <option value="Horror">Horror</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Thriller">Thriller</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Release</label>
                <input class ="form-control" id="release" name = "release" aria-describedby="emailHelp"
                value="<?php echo (isset($realeaseSeries)) ? $realeaseSeries: ''?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Episode</label>
                <input class ="form-control" id="episode" name = "episode" aria-describedby="emailHelp"
                value="<?php echo (isset($episodeSeries)) ? $episodeSeries: ''?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Season</label>
                <input class ="form-control" id="season" name = "season" aria-describedby="emailHelp"
                value="<?php echo (isset($seasonSeries)) ? $seasonSeries: ''?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Synopsis</label>
                <input class ="form-control" id="synopsis" name = "synopsis" aria-describedby="emailHelp"
                value="<?php echo (isset($synopsisSeries)) ? $synopsisSeries: ''?>" aria-describedby="emailHelp">           
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="edit">Save</button>
            </div>
        </form>
    </div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>
</html>