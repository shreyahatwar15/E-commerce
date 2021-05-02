<?php
require('includes/common.php');
if (isset($_SESSION['email'])) {
  header('location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include('includes/link.php');
        ?>
    </head>
    <body>
        <?php
         include('includes/header.php');
         ?><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 ">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h5>OPPO A9 2020</h5>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <img src="image/1.jfif" alt=""><br><br><br>
                                <li>8 GB RAM | 128 GB ROM | Expandable Upto 256 GB</li>
                                <li>48MP + 8MP + 2MP + 2MP Four Rear Camera | 16MP AI Front Camera</li>
                                <h4><b>Rs. 16,611/-</b></h4>
                            </ul> 
                        </div><br>
                        <div class="panel footer">
                            <a href="home.php#a" class="btn btn-primary btn-block"> Order Now !!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>REALME X2</h5>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <img src="image/2.jfif"><br><br><br>
                                <li>8 GB RAM | 128 GB ROM | Expandable Upto 256 GB</li>
                                <li>64 MP + 8 MP + 2 MP + 2 MP Quad Primary Cameras | 32 MP Front Camera</li>
                                <h4><b>Rs. 20,999/-</b></h4>
                            </ul>
                        </div><br>
                        <div class="panel footer">
                            <a href="home.php#b" class="btn btn-primary btn-block"> Order Now !!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>HONOR 9X</h5>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <img src="image/3.jfif" alt=""><br><br>
                                <li>6 GB RAM | 128 GB ROM | Expandable Upto 512 GB</li>
                                <li>48 MP + 8 MP + 2 MP Triple Primary Cameras | 16 MP Front Camera</li>
                                <h4><b>Rs. 16,999/-</b></h4>
                            </ul>
                        </div>
                        <div class="panel footer">
                            <a href="home.php#c" class="btn btn-primary btn-block"> Order Now !!</a>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h5>REDMI NOTE 10</h5>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <img src="image/4.jfif" alt=""><br><br><br>
                                <li>6 GB RAM | 128 GB ROM | Expandable Upto 512 GB</li>
                                <li>48 MP + 8 MP + 5 MP + 2 MP Quad Primary Cameras | 16 MP Front Camera</li>
                                <h4><b>Rs. 17,777/-</b></h4>
                            </ul>
                        </div>
                        <div class="panel footer">
                            <a href="home.php#d" class="btn btn-primary btn-block"> Order Now !!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h5>ONE PLUS 7 PRO</h5>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <img src="image/5.jfif" alt=""><br><br><br>
                                <li>8 GB RAM | 256 GB ROM</li>
                                <li>48MP + 8MP + 16MP Triple Rear Camera | 16MP Front Camera</li>
                                <h4><b>Rs. 51,110/-</b></h4>
                            </ul>
                        </div>
                        <div class="panel footer">
                            <a href="home.php#e" class="btn btn-primary btn-block"> Order Now !!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h5>VIVO Z1 PRO</h5>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <img src="image/6.jfif" alt=""><br><br><br>
                                <li>6 GB RAM | 128 GB ROM | Expandable Upto 256 GB</li>
                                <li>16MP + 8MP + 2MP | 32MP Front Camera</li>
                                <h4><b>Rs. 21,100/-</b></h4>
                            </ul>
                        </div><br>
                        <div class="panel footer">
                            <a href="home.php#f" class="btn btn-primary btn-block"> Order Now !!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>   
         
        <?php
        include('includes/footer.php');
        ?>
    </body>
</html>
