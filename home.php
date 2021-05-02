<?php
require('includes/common.php');
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
         include ('includes/check-if-added.php');
         ?><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4" id="a">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>OPPO A9 2020</h5>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <br><img src="image/1.jfif" alt=""><br><br>
                                <h4><b>Features :</b></h4>
                                <li>16.5 cm (6.5 inch) Display | Fingerprint Sensor</li>
                                <li>8 GB RAM | 128 GB ROM | Expandable Upto 256 GB</li>
                                <li>48MP + 8MP + 2MP + 2MP Four Rear Camera | 16MP AI Front Camera</li>
                                <li>2.0 GHz Octa Core Processor</li>
                                <li>5000 mAh Lithium-PolymerBattery</li>
                                <li>Android v9.0 (Pie) OS</li><br>
                                <h4><b>Rs. 16,611/-</b></h4>
                            </ul> 
                        </div><br><br><br>
                        <div class="panel footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="signup.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                
                                if (check_if_added_to_cart(1)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4 " id="b">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>REALME X2</h5>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <br><img src="image/2.jfif"><br><br>
                                <h4><b>Features :</b></h4>
                                <li>6.4 inches (16.26 cm) 1080x2340 px, 403 PPI Super AMOLED Display | Fingerprint Sensor</li>
                                <li>8 GB RAM | 128 GB ROM | Expandable Upto 256 GB</li>
                                <li>64 MP + 8 MP + 2 MP + 2 MP Quad Primary Cameras | 32 MP Front Camera</li>
                                <li>Octa core (2.2 GHz, Dual Core + 1.8 GHz, Hexa Core) Snapdragon 730G Processor</li>
                                <li>4000 mAh Battery | VOOC Charging 4.0</li>
                                <li>Android v9.0 (Pie) OS</li><br> 
                                <h4><b>Rs. 20,999/-</b></h4>
                            </ul>
                        </div><br>
                        <div class="panel footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="signup.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                
                                if (check_if_added_to_cart(2)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 " id="c">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>HONOR 9X</h5>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <img src="image/3.jfif" alt=""><br><br>
                                <h4><b>Features :</b></h4>
                                <li>6.59 inches (16.74 cm) 2340x1080 px, 270 PPI FHD+ Display | Fingerprint Sensor</li>
                                <li>6 GB RAM | 128 GB ROM | Expandable Upto 512 GB</li>
                                <li>48 MP + 8 MP + 2 MP Triple Primary Cameras | 16 MP Front Camera</li>
                                <li>Octa core (2.2 GHz, Quad Core + 1.7 GHz, Quad core) HiSilicon Kirin Processor</li>
                                <li>4000 mAh Battery</li>
                                <li>Android v9.0 (Pie) OS</li><br>
                                <h4><b>Rs. 16,999/-</b></h4>
                            </ul>
                        </div>
                        <div class="panel footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="signup.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                
                                if (check_if_added_to_cart(3)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-4" id="d">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5> REDMI NOTE 10</h5>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <img src="image/4.jfif" alt=""><br><br>
                                <h4><b>Features :</b></h4>
                                <li>6.67 inches (16.9 cm) 2400x1080 px, 395 PPI FHD+ Display | Fingerprint Sensor</li>
                                <li>6 GB RAM | 128 GB ROM | Expandable Upto 512 GB</li>
                                <li>48 MP + 8 MP + 5 MP + 2 MP Quad Primary Cameras | 16 MP Front Camera</li>
                                <li>Octa core (2.3 GHz, Dual Core + 1.8 GHz, Hexa Core) Snapdragon 720G Processor</li>
                                <li>5020 mAh Battery</li>
                                <li>Android v10 (Q) OS</li><br>
                                <h4><b>Rs. 17,777/-</b></h4>
                            </ul>
                        </div>
                        <div class="panel footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="signup.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                
                                if (check_if_added_to_cart(4)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" id="e">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>ONE PLUS 7 PRO</h5>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <img src="image/5.jfif" alt=""><br><br>
                                <h4><b>Features :</b></h4>
                                <li>16.9 cm (6.67 inch) Super AMOLED Display | Fingerprint Sensor</li>
                                <li>8 GB RAM | 256 GB ROM</li>
                                <li>48MP + 8MP + 16MP Triple Rear Camera | 16MP Front Camera</li>
                                <li>2.84 GHz Octa Core Processor</li>
                                <li>4000 mAh Battery</li>
                                <li>Android v9.0 (Pie) OS</li><br>
                                <h4><b>Rs. 51,110/-</b></h4>
                            </ul>
                        </div><br>
                        <div class="panel footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="signup.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                
                                if (check_if_added_to_cart(5)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" id="f">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>VIVO Z1 PRO</h5>
                        </div>
                        <div class="panel-body">
                            <img src="image/6.jfif" alt=""><br><br>
                            <h4><b>Features :</b></h4>
                            <ul>
                                <li>16.59 cm (6.53 inch) FHD+ Display | Fingerprint Sensor</li>
                                <li>Triple Card Slot | Fast Charging</li>
                                <li>6 GB RAM | 128 GB ROM | Expandable Upto 256 GB</li>
                                <li>16MP + 8MP + 2MP | 32MP Front Camera</li>
                                <li>Qualcomm Snapdragon 712 AIE Octa Core 2.3GHz Processor</li>
                                <li>5000 mAh Battery</li>
                                <li>Android v9.0 (Pie) OS</li><br>
                                <h4><b>Rs. 21,100/-</b></h4>
                            </ul>
                        </div><br>
                        <div class="panel footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="signup.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                
                                if (check_if_added_to_cart(6)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>  
         
       
    </body>
</html>
