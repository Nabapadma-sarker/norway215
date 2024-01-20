<?php
//Template Name: Contact Us
/**
* @Theme Name	:	Wallstreet-Pro
* @file         :	contact-us.php
* @package      :	wallstreet-Pro
@author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/contact-us.php
*/
get_header(); ?>
<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
	  $mapsrc= $current_options['contact_google_map_url'];	
	  $mapsrc=$mapsrc.'&amp;output=embed';
?>
<!-- Page Title Section -->
<?php get_template_part('index', 'banner'); ?>
<!-- /Page Title Section -->
<!-- Location Map Section -->
<div class="qua_contact_area">	
	<?php if($current_options['contact_google_map_enabled'] == "on"){ ?>
		<?php if(!empty($current_options['contact_google_map_title'])) { ?>
			<div class="google-map-title">
				<h1><?php echo $current_options['contact_google_map_title']; ?></h1>
			</div>
		<?php } ?>	
	<div class="qua_google_map">			
		<iframe width="100%" scrolling="no" height="500" frameborder="0" src="<?php echo esc_url($mapsrc); ?>" marginwidth="0" marginheight="0"></iframe>	
	</div>
	<?php } ?>
	<!--contact detail-->
	<div class="container">
		<div class="row contact-detail-section <?php if($current_options['contact_google_map_enabled'] != "on") { ?>map-disabled <?php } ?>">
			<?php if($current_options['contact_address_settings'] == "on"){ ?>
			<div class="col-md-4">
				<div class="contact-detail-area">
					<?php if(!empty($current_options['contact_address_icon'])):?><span><i class="fa <?php if($current_options['contact_address_icon']) { echo $current_options['contact_address_icon']; } ?>"></i></span><?php endif;?>
					<?php if(!empty($current_options['contact_address_title'])) { ?>
					<h5><?php echo $current_options['contact_address_title']; ?></h5>
					<?php } ?>
					<?php if(!empty($current_options['contact_address_designation_one'])) { ?><address><?php echo $current_options['contact_address_designation_one']; ?> </address>
				<?php } if(!empty($current_options['contact_address_designation_two'])) { ?>
					<address><?php echo $current_options['contact_address_designation_two']; ?> </address><?php } ?>
				</div>
			</div>
			<?php } ?>
			<?php if($current_options['contact_phone_settings'] == "on"){ ?>
			<div class="col-md-4">
				<div class="contact-detail-area">
					<?php if(!empty($current_options['contact_phone_icon'])) {?><span><i class="fa <?php echo $current_options['contact_phone_icon']; ?>"></i></span><?php } ?>
					<?php if(!empty($current_options['contact_phone_title'])) { ?>
					<h5><?php echo $current_options['contact_phone_title']; ?></h5>
					<?php } 
					if(!empty($current_options['contact_phone_number_one'])) {
					?>
					<address><?php echo $current_options['contact_phone_number_one']; ?></address>
				<?php }
				if(!empty($current_options['contact_phone_number_two'])) {
				?>
					<address><?php echo $current_options['contact_phone_number_two']; ?></address>
				<?php } ?>
				</div>
			</div>
			<?php } ?>
			<?php if($current_options['contact_email_settings'] == "on"){ ?>
			<div class="col-md-4">
				<div class="contact-detail-area">
					<?php if(!empty($current_options['contact_email_icon'])) {?><span><i class="fa <?php echo $current_options['contact_email_icon']; ?>"></i></span><?php } ?>
					<?php if(!empty($current_options['contact_email_title'])) { ?>
					<h5><?php echo $current_options['contact_email_title']; ?></h5>
					<?php } if(!empty($current_options['contact_email_number_one'])) {?>
					<address><?php echo $current_options['contact_email_number_one']; ?></address><?php } 
					if(!empty($current_options['contact_email_number_two'])) {?>
					<address><?php echo $current_options['contact_email_number_two']; ?></address>
				<?php } ?>
				</div>
			</div>
			<?php } ?>
		</div>
		
		<div class="row contact-form-section" id="myformdata">
			<div class="col-md-12">
				<?php if(!empty($current_options['contact_form_title']) || !empty($current_options['contact_form_description'])):?>
				<div class="cont-heading-title">
					<?php if(!empty($current_options['contact_form_title'])) { ?>
					<h1><?php echo $current_options['contact_form_title']; ?></h1>
					<?php } ?>
					<?php if(!empty($current_options['contact_form_description'])) { ?>
					<p><?php echo $current_options['contact_form_description']; ?></p>
					<?php } ?>
				</div>
			<?php endif;?>
				<form role="form" class="form-inline" method="post"  action="#">
					<?php wp_nonce_field('wallstreet_name_nonce_check','wallstreet_name_nonce_field'); ?>
					<div class="cont-form-group">
					<input type="name" id="first_name" name="first_name" placeholder="<?php echo __( 'First name', 'wallstreet' ); ?>" class="blog-form-control">
					<span  style="display:none; color:red" id="contact_user_firstname_error"><?php _e('First name','wallstreet'); ?> </span>
					</div>
					<div class="cont-form-group">
					<input type="name" id="last_name" name="last_name" placeholder="<?php echo __( 'Last name', 'wallstreet' ); ?>" class="blog-form-control">
					<span  style="display:none; color:red" id="contact_user_lastname_error"><?php _e('Last name','wallstreet'); ?> </span>
					</div>
					<div class="cont-form-group">
					<input type="email" id="email" name="email" placeholder="<?php echo __( 'Email', 'wallstreet' ); ?>" class="blog-form-control">
					<span  style="display:none; color:red" id="contact_user_email_error"><?php _e('Email','wallstreet'); ?> </span>
					</div>
					<div class="cont-form-group">
					<input type="text" id="website" name="website" placeholder="<?php echo __( 'Website', 'wallstreet' ); ?>" class="blog-form-control">
					<span  style="display:none; color:red" id="contact_user_website_error"><?php _e('Website','wallstreet'); ?> </span>
					</div>
					<div class="cont-form-group-textarea">
					<textarea placeholder="<?php echo __( 'Message', 'wallstreet' ); ?>" class="cont-form-control-textarea" id="massage" name="massage" rows="5"></textarea>
					<span  style="display:none; color:red" id="contact_user_massage_error"><?php _e('Message','wallstreet'); ?> </span>
					</div>
					<button class="qua_contact_btn" name="contact_submit" id="contact_submit" type="submit"><?php _e('Send Message','wallstreet'); ?>
					<span  style="display:none; color:red" id="contact_nonce_error"><?php _e('Sorry, your nonce did not verify','wallstreet');?></span>
				</form>
			</div>
		</div>
		<div id="mailsentbox" style="display:none">
			<div class="alert alert-success" >
				<strong><?php _e('Thank you','wallstreet');?></strong> <?php _e('Your information has been sent.','wallstreet');?>
			</div>
		</div>
		
		<?php 
		if(isset($_POST['contact_submit']))
		{
		$flag=1;
			if(empty($_POST['first_name']))
			{	
				$flag=0;
				echo "<script>jQuery('#contact_user_firstname_error').show();</script>";
			} else
			if(empty($_POST['last_name']))
			{	
				$flag=0;
				echo "<script>jQuery('#contact_user_lastname_error').show();</script>";
			} else
			if($_POST['email']=='') 
			{	
				$flag=0;
				echo "<script>jQuery('#contact_user_email_error').show();</script>";
			} else
			if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$_POST['email'])) 
			{	
				$flag=0;
				echo "<script>jQuery('#contact_user_email_error').show();</script>";
			} else
			if($_POST['massage']=='')
			{
				$flag=0;
				echo "<script>jQuery('#contact_user_massage_error').show();</script>";
			}else
			if(empty($_POST) || !wp_verify_nonce($_POST['wallstreet_name_nonce_field'],'wallstreet_name_nonce_check') )
			{
				echo "<script>jQuery('#contact_nonce_error').show();</script>";
			   exit;
			}
			else
			{	if($flag==1)
				{	
					$to = get_option('admin_email');
					$subject = trim($_POST['first_name']) . trim($_POST['last_name']) . get_option("blogname");
					$massage = stripslashes(trim($_POST['massage']))."Message sent from:: ".trim($_POST['email']);
					$headers = "From: ".trim($_POST['first_name']).trim($_POST['last_name'])." <".trim($_POST['email']).">\r\nReply-To:".trim($_POST['email']);
					$website = stripslashes(trim($_POST['website']));
					$maildata =wp_mail($to, $subject, $massage, $headers, $website);
					if($maildata){						
					echo "<script>jQuery('#myformdata').hide();</script>";
					echo "<script>jQuery('#mailsentbox').show();</script>";
					}					
				}
			}
		}
		?>
	</div> <!--/contact detail-->
</div> <!-- /Location Map Section -->
<?php get_footer(); ?>