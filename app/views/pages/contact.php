<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="container">
    <div class="row">
    
    <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <h1>Contact me</h1>
                    <p>Hey if you wish to contact me more directly feel free to leave you name and email and a message and ill get around to looking at it.</p>
                </div>
            </div>
    </div>
  
<div class="col-md-6">

    <div class="well well-sm">
        <form class="form-horizontal" method="post">
            <fieldset>
                <legend class="text-center header"><?php echo $data['title']; ?></legend>
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <input id="fname" name="lname" type="text" placeholder="First Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for Me here."rows="7"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>    
    </div>
</div>
<!-- split -->
 
</body>
</html>