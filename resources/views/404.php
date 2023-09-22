<!DOCTYPE html>
<?php include_once "page-layout.php";?>
<html>
<head>
    <title>QuickLink</title>
    <?php headSection()?>
    </head>
<body>
<?php navSection()?>
    <div class="container-fluid bg-info" style="height:250px; background-color: darkcyan ;">
        <div class="row text-center">
            <div class="col-sm-12">
                <h2>404 Not Found</h2>
                <h3>Looks Like this link is not created yet or expired</h3>
                <a role="button" href="/" class="btn btn-default">Short an URL now</a>
            </div>
        </div>
    </div>
    <?php footerSection();?>
</body>
</html>