<?php
include('connection.php');
?>
<html>
<form action="php" method="POST">


    <span>ID</span>
    <input type="text" name="id" class="id">


    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                            aria-expanded="false">Select <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Materia</a></li>
                        <li><a href="#">Causa</a></li>
                        <li><a href="#">Settore</a></li>
                    </ul>
                </div>
                <input type="text" class="form-control" aria-label="...">
            </div>
        </div>
    </div>

    <div>
        <button id="update" type="submit">Update</button>
    </div>
</form>

</html>