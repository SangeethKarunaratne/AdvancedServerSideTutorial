<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>        
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>TODO's</h3>
                    <br>
                    <h4>Update ToDo Action <?php echo $id ?></h4>
                    <form action="/AdvancedServerSideTutorial/index.php/ToDoController/updateAction?id= <?php echo $id ?>" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="action" id ="action" placeholder="action">
                            <br>
                            <input type="submit" class="form-control" value="Update Action">
                        </div>
                    </form>
                    <?php echo '<a href="/AdvancedServerSideTutorial/index.php/ToDoController/allToDoActions">View All ToDo Actions</a>' ?>
                </div>
            </div>
        </div>

    </body>
</html>