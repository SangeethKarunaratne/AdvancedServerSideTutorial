<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Search Movies</h3>
                    <br>
                    <h4>Search Moives By Title</h4>
                    <form action="/AdvancedServerSideTutorial/index.php/MovieController/search" method="POST">
                        <div class="form-group">

                            <input type="text" class="form-control" name="movieTitle" id ="movieTitle" placeholder="movie title">
                            <br>
                            <input type="submit" class="form-control" value="Search">
                        </div>
                    </form>
                    <?php echo '<a href="/AdvancedServerSideTutorial/index.php/MovieController/allMovies">View All Movies</a>' ?>
                </div>
            </div>
        </div>
    </body>
</html>