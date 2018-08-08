<?php if (!defined("IN_WALLET")) { die("Auth Error"); } ?>
                <h1><?php echo $lang['PAGE_HEADER']; ?></h1>
                <?php
                if (!empty($error))
                {
                    echo "<p style='font-weight: bold; color: red;'>" . $error['message']; "</p>";
                }
                ?>
                <h3>CRYPTIC CASH - Peer-to-Peer Electronic Cash System</h3>
            	<p>Our technology is revolutionizing the financial services industry by empowering millions across the globe to authenticate and transact immediately and without costly intermediaries.</p>
            	
                <p><?php echo $lang['FORM_CREATE']; ?></p>
                <form action="index.php" method="POST" class="clearfix">
                    <input type="hidden" name="action" value="register" />
                    <div class="col-md-2"><input type="text" class="form-control" name="username" placeholder="<?php echo $lang['FORM_USER']; ?>"></div>
                    <div class="col-md-2"><input type="password" class="form-control" name="password" placeholder="<?php echo $lang['FORM_PASS']; ?>"></div>
                    <div class="col-md-2"><input type="password" class="form-control" name="confirmPassword" placeholder="<?php echo $lang['FORM_PASSCONF']; ?>"></div>
                    <div class="col-md-2"><button type="submit" class="btn btn-default"><?php echo $lang['FORM_SIGNUP']; ?></button></div>
                </form>
            </br>      
            
			 

			


