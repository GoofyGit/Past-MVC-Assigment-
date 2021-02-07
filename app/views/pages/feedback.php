<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="container">
    <div class="row">
    
    <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <h1>Feed back</h1>
                    <p>List of feedback below</p>
                </div>

            <hr>
                <table class="table">
                    <thead class="myheader">
                <tr>
                    <th>Name</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $output = "";
                    foreach($data['feedback'] as $fb_id) {

                        $output .= "<tr><td>";
                        $output .= $fb_id['fname'];
                        $output .= ", ";
                        $output .= $fb_id['message'];
                        $output .= "</td><td>";
                    }
                    echo $output;
                ?>
            </tbody>
        </table>

            </div>
    </div>
  
<div class="col-md-6">
    <div class="well well-sm">
        <form class="form-horizontal" method="post">
            <fieldset>
                    <div class="form-group">
                    <p>If you wish to add some feeback for me please leave it below</p>
                        <div class="col-md-10 col-md-offset-1">
                            <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <textarea class="form-control" id="message" name="message" placeholder="Enter your feedback."rows="7"></textarea>
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