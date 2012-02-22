<!DOCTYPE html>
<?php

require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
include "config.php";
include TEMPLATE_PATH."/header.php";

$stats = new statistics();
?>
<div id="myModal" class="reveal-modal">
     <h2>Premium</h2>
     <p class="lead">You are being a mooch, you should donate some money.</p>
     
     <p>Websites don't run off hopes and dreams, well dreams sort of... but money, yeah money.</p>
     <img src="images/funny/jackie-chan-whut.jpg" /><br />
     <a class="close-reveal-modal">&#215;</a>
</div>

                <div class="row">
			<div class="eight columns">
                            <div class="row">
                                    <center>
                                    <?php if(!$fgmembersite->CheckPremium()) { ?>
                                            <?php echo "<script type='text/javascript'> $(document).ready(function() { $('#myModal').reveal(); }); </script>"; ?>
                                            <br />               
                                            <p class="alert-box error">Your Account is Limited, Premium is Available...</p>
                                    <?php } ?>
                                    <br />
                                    <img src="http://i.imgur.com/ZxnvQ.jpg" />
                                    </center>
                            </div>
			
			</div>

			<div class="four columns">
                            <div class="row">
                                <div id="featured" style="width: 568px; text-align: right;"> 
                                    <?php 
                                    $show = new show(0);
                                    $show->getAllBanners("RAND()", "LIMIT 5"); 

                                    ?>
                                </div>
                            </div>
                            <br />

				<?php echo $stats->get_newsfeed_summary(24); ?>
			</div>
		</div>

	
	<?php 
	include TEMPLATE_PATH."/footer.php";
	?>
