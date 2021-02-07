<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Portfolio</h1>
                <p>Here is my Portfolio this is all the work and classes I have done over my time at Tohomai plus a discord sever i have made</p>
        </div>
<?php
    foreach($data["classes"] as $ClassName) {
?>
        <div class="col-sm-3">
        <div class="panel panel-default">
                    <div class="box1">
                    <p><?php echo $ClassName['ClassName'] ?></p>
                </div>
            </div>
        </div>
<?php
    }
?>
        <div class="col-md-3">
            <div>
                <div class="panel panel-default">
                    <div class="box1">
                        <iframe src="https://discordapp.com/widget?id=487121211025784832&theme=dark" width="249" height="249" allowtransparency="true" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
    </div>
</div>
    
</body>
</html>