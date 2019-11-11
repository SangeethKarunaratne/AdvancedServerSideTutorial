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
                    <div class="col-md-3">
                        <input type="submit"  class="form-control" value="Generate ToDo's">                        
                    </div>
                </div>

                <div class="col-md-12" id="todoList">

                </div>

            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(document).ready(
                    function () {
                        $.ajax({
                            url: "/AdvancedServerSideTutorial/index.php/ToDoController/allToDoActionsJSON",
                            dataType: 'json',
                            method: 'GET'
                        }).done(
                                function (arraydata) {

                                    var elemList = "<ul>";
                                    for (x in arraydata) {
                                        var elem = "<li>" + arraydata[x].UserId + " - " + arraydata[x].ActionTitle + " - " + arraydata[x].Id
                                                + "<br/>"
                                                + "<a href=\"/AdvancedServerSideTutorial/index.php/ToDoController/updateView?id=" + arraydata[x].Id + "\"> Update Action</a>"
                                                + "<a style=\"color:red\" href=\"/AdvancedServerSideTutorial/index.php/ToDoController/deleteAction?id=" + arraydata[x].Id + "\"> Delete Action</a>"
                                                + "</li>";
                                        elemList += elem;
                                    }
                                    elemList += "</ul>";
                                    document.getElementById("todoList").innerHTML = elemList;
                                }
                        )
                    }
            )
        </script>
    </body>
</html>