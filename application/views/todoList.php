<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>ToDo List</h3>
                    <?php
                    if (count($toDoActions) > 0) {
                        echo "<ul>";
                        foreach ($toDoActions as $x) {
                            echo "<li>" . $x->getUserId() . " - " . $x->getActionTitle() . " - " . $x->getId();
                            echo "<br>";
                            echo '<a href="/AdvancedServerSideTutorial/index.php/ToDoController/updateView?id=' . $x->getId() . '"> Update Action</a>';
                            echo '<a style="color:red" href="/AdvancedServerSideTutorial/index.php/ToDoController/deleteAction?id=' . $x->getId() . '"> Delete Action</a></li>';
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