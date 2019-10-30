<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Search Results</h3>
                    <?php
                    if (count($movies) > 0) {
                        echo "<ul>";
                        foreach ($movies as $x) {

                            echo "<li>" . $x->getTitle() . " - " . $x->getReleaseYear() . "</li>";
                            echo "<br>";
                        }
                        echo "</ul>";
                    } else {
                        echo "No movies found :(";
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>