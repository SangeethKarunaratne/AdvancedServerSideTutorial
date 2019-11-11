<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Session Data</h1>
                    <h4>User Name : <?php echo $sessionData['user_name']; ?></b></h4>
                    <h4>Logged IN : <?php echo $sessionData['logged_in']; ?></b></h4>
                    <h4>Session ID : <?php echo $sessionData['session_id']; ?></b></h4>
                </div>
                
                 <?php echo '<a href="/AdvancedServerSideTutorial/index.php/SessionController/removeSessionData">Remove Session Data</a>' ?>
            </div>
        </div>
    </body>
</html>