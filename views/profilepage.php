<!DOCTYPE html>
<html>
    <head>
        <title>Profile page</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <style>
        .login_block
            {
                margin: 130px 10px 0px 0px;
            }
    </style>
    <body>
        <div class="container">
            <!-- Login block -->
            <div class="row login_block form-group">
                <div class="col-md-5 col-md-offset-3">
                    <form method="POST" action="<?php echo base_url(); ?>profilepagecontroller/updateValues">
                        <!-- Username input box -->
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" 
                            placeholder="Username" size="28">
                        <br>
                        <!-- Email input box -->
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" 
                            placeholder="Enter email" size="28">
                        <br>
                        <!-- Phone number input box -->
                        <label>Phone number: </label>
                        <input type="text" class="form-control" name="phone_number" 
                            placeholder="Phone number" size="28">
                        <br>
                        <!-- Button -->
                        <input class="btn btn-success btn-block" type="submit" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>