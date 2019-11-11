<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Sessions</h1>
                    <h4>Session ID : <br><br><b><?php echo $session_id; ?></b></h4>
                </div>

                <div class="col-md-4" style="margin-top: 5%">
                    <h3>Add Data To Session</h3>
                    <form action="/AdvancedServerSideTutorial/index.php/SessionController/setSessionData" method="POST">
                        <div class="form-group">

                            <input type="text" class="form-control" name="userName" id ="action" placeholder="User name">
                            <br>
                            <input type="submit" class="form-control" value="Save To Session">
                        </div>
                    </form>
                </div>
            </div>
             <?php echo '<a href="/AdvancedServerSideTutorial/index.php/SessionController/viewSessionData">View Session Data</a>' ?>
        </div>
    </body>
</html>