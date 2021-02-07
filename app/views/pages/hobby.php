<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>hobbies</h1>
                <p>Here is a list of my hobbies</p>
        </div>
    </div>
</div>
    
<div class="container">
    <div class="row">
        <?php
            foreach($data["hobbys"] as $hobby) {
        ?>
            <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="box1">
                        <p><?php echo $hobby['hobby'] ?></p>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
</div>

</body>
</html>