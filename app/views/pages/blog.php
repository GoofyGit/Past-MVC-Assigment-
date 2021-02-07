<?php include(APPROOT . "/views/includes/header.php"); ?>


<div class="container">
    <div class="row">
    
    <div class="col-md-7">
            <div>
                <div class="panel panel-default">
                    <h1>Blog</h1>
                    <p>Here is were i post about what im doing or other news that you lot might be intreasted in</p>
                </div>

            <hr>
                <table class="table">
                    <thead class="myheader">
                <tr>
                    <th>Feed</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                    $output = "";
                    foreach($data['blog'] as $blog_id) {

                        $output .= "<tr><td>";
                        $output .= $blog_id['news'];
                        $output .= "</td><td>";
                    }
                    echo $output;
                ?>
            </tbody>
        </table>

            </div>
    </div>

    <div class="col-md-5" style="margin:0px;">
            <div>
                    <div class="box">
                        <div class="row">
                            <div class="button col-sm-4 align-middle">
                                <a class="twitter-follow-button" href="https://twitter.com/GoofyFuture0" data-size="large"> Follow @Jared</a>
                            </div>
                            <div class="button col-sm-4">
                            
                            </div>
                            <div class="button col-sm-4">
                                <div class="media">
                                    <script src="https://apis.google.com/js/platform.js"></script>
                                <div class="g-ytsubscribe" data-channelid="UCguw-0H043imUdgh0FfuQPA" data-layout="default" data-count="default"></div>
                            </div>
                            </div>
                        </div>
                        
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                <a class="twitter-timeline" data-height="615px" data-theme="dark" href="https://twitter.com/GoofyFuture0"></a>

                    </div>  
                </div>
            </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h1>Sign up</h1>
                
        </div>

<div class="col-md-9">
    <div class="well well-sm">
        <form class="form-horizontal" method="post">
            <fieldset>
                
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <input id="username" name="name" type="text" placeholder="User name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                        <input id="password" name="name" type="text" placeholder="Password" class="form-control">
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





</body>
</html>