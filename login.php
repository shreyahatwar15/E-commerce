<?php
require('includes/common.php');
if(isset($_SESSION['email'])){
    header('location:home.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
       <?php
       include('includes/link.php');
       ?>
    </head>
    <body>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
            <div class="modal-dialog" role="document">
                <div class="modal-content" method="POST" action="login_submit.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">LOGIN</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <p>Don't have an account? <a href="signup.php"> Register</a></p>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" required="true">
                                <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary"> Login</button><br><br>
                        <p><a href="settings.php">Forget Password?</a></p>
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>