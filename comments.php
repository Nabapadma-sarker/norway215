<?php
/**
* @Theme Name	:	Wallstreet-Pro
* @file         :	comments.php
* @package      :	wallstreet-Pro
@author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/comments.php
*/
?>
<?php if ( post_password_required() ) : ?>
	<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'wallstreet' ); ?></p>
<?php return; endif; ?>	
	
	<?php
		// code for comment
		if ( ! function_exists( 'wallstreet_comment' ) ) {
		function wallstreet_comment( $comment, $args, $depth ) 
		{
		$GLOBALS['comment'] = $comment;
		//get theme data
		global $comment_data;
		//translations
		$leave_reply = $comment_data['translation_reply_to_coment'] ? $comment_data['translation_reply_to_coment'] : __('Reply','wallstreet');
	?>	
	
		<div <?php comment_class('media comment_box'); ?> id="comment-<?php comment_ID(); ?>">
			<a class="pull-left-comment" href="<?php the_author_meta('user_url'); ?>">
			<?php echo get_avatar( $comment , 70); ?>		
			</a>
			<div class="media-body">
				<div class="comment-detail">
					<h4 class="comment-detail-title"><?php comment_author(); ?><span class="comment-date"><a href="<?php echo get_comment_link( $comment->comment_ID );?>"><?php _e('Posted on', 'wallstreet'); ?><?php echo comment_time('g:i a'); ?><?php echo " - "; echo comment_date('M j, Y');?></a></span></h4>
					<?php comment_text(); ?>
					<?php edit_comment_link( __( 'Edit', 'wallstreet' ), '<p class="edit-link">', '</p>' ); ?>
					<div class="reply">
						<?php comment_reply_link(array_merge( $args, array('reply_text' => $leave_reply,'depth' => $depth, 'max_depth' => $args['max_depth'], 'per_page' => $args['per_page']))) ?>
					</div>
					
					<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'wallstreet' ); ?></em>
					<br/>
					<?php endif; ?>
				
				</div>
			</div>
		</div>
	<?php } }// end of wallstreet_comment function ?>
	
<?php if ( have_comments() ) { ?>

<div class="comment-section">
	<div class="comment-title"><h3><i class="fa fa-comment-o"></i> <?php comments_number('No comments so far', '1 comment so far','% comments so far'); ?> </h3>
	</div>
	<?php wp_list_comments( array( 'callback' => 'wallstreet_comment' ) ); ?>
</div> <!---comment_section--->

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'wallstreet' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'wallstreet' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'wallstreet' ) ); ?></div>
		</nav>
		<?php } elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) 
		{
        //_e("Comments Are Closed!!!",'wallstreet');
		?>
	<?php } 
	} ?>
	<?php if ('open' == $post->comment_status) { ?>
	<?php if ( get_option('comment_registration') && !$user_ID ) { ?>
	<p><?php echo sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.','wallstreet' ), site_url( 'wp-login.php' ) . '?redirect_to=' .  urlencode(get_permalink())); ?></p>
<?php } else { 
?>
<div class="comment-form-section">
	<?php  
	 $fields=array(
		'author' => '<div class="blog-form-group"><input class="blog-form-control" name="author" id="author" value="" type="name" 
		placeholder="'.__('Name','wallstreet').'" /></div>',
		'email' => '<div class="blog-form-group"><input class="blog-form-control" name="email" id="email" value=""   type="email" placeholder="'.__('Email','wallstreet').'" /></div>',
		);
		function my_fields($fields) { 
			return $fields;
		}
		add_filter('comment_form_default_fields','my_fields');
			$defaults = array(
			'fields'=> apply_filters( 'comment_form_default_fields', $fields ),
			'comment_field'=> '<div class="blog-form-group-textarea" >
			<textarea id="comments" rows="5" class="blog-form-control-textarea" name="comment" type="text" placeholder="'.__('Leave your message','wallstreet').'"></textarea></div>',		
			'logged_in_as' => '<p class="logged-in-as">' . __( "Logged in as","wallstreet" ).' '.'<a href="'. admin_url( 'profile.php' ).'">'.$user_identity.'</a>'. '<a href="'. wp_logout_url( get_permalink() ).'" title="'.__('Log out from this Account','wallstreet').'">'.' '.__("Log out",'wallstreet').'</a>' . '</p>',
			'id_submit'=> 'blogdetail_btn',
			'label_submit'=>__( 'Send Message','wallstreet'),
			'comment_notes_after'=> '',
			'comment_notes_before' => '',
			'title_reply'=> '<div class="comment-title"><h3><i class="fa fa-comment-o"></i>'.__('Leave a Reply', 'wallstreet').'</h3></div>',
			'id_form'=> 'commentform'
			);
		comment_form($defaults);
	?>
</div>	
<?php } } ?>		