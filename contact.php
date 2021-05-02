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
        ?>
        <div class="container">
          <div class="row">
            <div class="col-sm-10">
                <br>
                <h3>LIVE SUPPORT</h3>
                <h4>24 hours| 7 days a week| 365 days a year Live Technical Support</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when 
                looking at its layout. The point of using Lorem ipsum is that it has a more-or-less normal distrubution of letters.
                 There are many variations of passages of Lorem ipsum available, but the majority have suffered alteration in some form,by injected humour, or randomised words
                which don't look even slightly believable. If you are going to use a passage of Lorem ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
            </div>
            <div class="col-sm-2">
                <img src="image/contact.png" alt="">
            </div>
          </div><br>
          <div class="row">
            <div class="col-sm-8">
                <h3>CONTACT US</h3>
                <form>
                    <div class="form-group">
                        <label for="name"><b>Name</b></label>
                        <input type="text" name="name" class="form-control" required="true" >
                    </div>  
                    <div class="form-group">
                        <label for="email"><b>Email:</b></label>
                        <input type="email" name="email" class="form-control" required="true" >
                    </div>  
                    <div class="form-group">
                        <label for="message"><b>Message:</b></label>
                        <textarea type="text" name="message" class="form-control" required="true"></textarea>
                    </div>
                    <button type="button" value="submit" class="btn btn-primary" >Submit</button>
                </form>
            </div>
              <div class="col-sm-3 col-sm-offset-1"><br>
                  <h3>Company Information :</h3><br>
                  <ul type="none">
                      <li>500 Lorem Ipsum Dolor Sit,</li>
                      <li>Mumbai</li>
                <li>Phone: (00) 222 666 444</li>
                <li>Fax: (000) 000 00 00 0</li>
                <li>Email: info@myestore.com</li>
                <li>Follow on: Facebook, Twitter</li>
                  </ul>
            </div>
          </div><br>
        </div>
        <?php
        include('includes/footer.php');
        ?>
    </body>
</html>