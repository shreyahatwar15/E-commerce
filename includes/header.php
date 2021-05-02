
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <a href="header.php"></a>
            </button>
            <a class="navbar-brand" href="index.php"><h4><b>E-Store</b></h4></a> 
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(!isset($_SESSION['email'])){ ?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About us</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span> Contact us</a></li>
                
                 <?php        
                }else{ ?>
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                <li><a href="settings.php"><span class="glyphicon glyphicon-cog"> </span> Settings</a></li>
                <li><a href="logout_script.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    
                 <?php  }
                 ?>
            </ul>
        </div>
    </div>
</div><br><br><br>
