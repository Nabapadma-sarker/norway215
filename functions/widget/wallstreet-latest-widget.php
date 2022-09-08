<?php
add_action( 'widgets_init','wallstreet_latest_widget'); 
   function wallstreet_latest_widget() { return   register_widget( 'wallstreet_latest_widget' ); }

/**
 * Adds wallstreet_latest_widget widget.
 */
class wallstreet_latest_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'wallstreet_latest_widget', // Base ID
			__('WBR : Latest Posts', 'wallstreet'), // Name
			array( 'description' => __( 'This widget allows you to display latest, popular and commented posts.', 'wallstreet' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance) {
		$title = apply_filters( 'widget_title', $instance['title'] );
			echo $args['before_widget'];
			if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title']; ?>
				<ul class="sidebar-tab sidebar-widget-tab">
					<li class="active"><a data-toggle="tab" href="#popular"><?php _e('Popular','wallstreet'); ?></a></li>
					<li><a data-toggle="tab" href="#recent"><?php _e('Recent','wallstreet'); ?></a></li>
					<li><a data-toggle="tab" href="#comment"><?php _e('Comment','wallstreet'); ?></a></li>
				</ul>				
				<div class="tab-content" id="myTabContent">					
					<div id="popular" class="tab-pane fade active in">
						<div class="row">	
						<?php global $wpdb;
							$pop = $wpdb->get_results("SELECT id,guid,post_date,post_title, comment_count FROM {$wpdb->prefix}posts WHERE post_type='post' AND post_status='publish' ORDER BY comment_count DESC LIMIT 5");
							foreach($pop as $post): ?>
								<div class="media post-media-sidebar">
									<a class="pull-left sidebar-pull-img" href="#">
										<?php $atts=array('class' => 'img-responsive post_sidebar_img sidebar_thumb'); ?>
										<?php echo get_the_post_thumbnail( $post->id,'wall_sidebar_img', $atts); ?>								 
									</a>
									<div class="media-body">
										<h3 style="padding-bottom:0px;"><a href="<?php echo $post->guid; ?>"><?php echo $post->post_title; ?></a></h3>
										<p><?php //echo get_sidebar_excerpt(); ?></p>
									</div>
									<div class="sidebar-comment-box">
										<span><?php echo get_the_date('M j, Y', $post->id); ?><small>|</small><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php _e('By','wallstreet'); the_author(); ?> </a></span>
									</div>									
								</div>							
							<?php endforeach; ?>
						</div>
					</div>
					<div id="recent" class="tab-pane fade">
						<div class="row">
						<?php 	
							$args = array( 'post_type' => 'post','posts_per_page' =>5, 'post__not_in'=>get_option("sticky_posts")); 	
								query_posts( $args );
								if(query_posts( $args ))
								{	while(have_posts()):the_post();
										{ ?>
									<div class="media post-media-sidebar">
										<a href="#" class="pull-left sidebar-pull-img">
											<?php
												$defalt_arg =array('class' => "img-responsive post_sidebar_img sidebar_thumb");
												if(has_post_thumbnail()): 
												the_post_thumbnail('wall_sidebar_img',$defalt_arg); 
												endif; 
												?>
										</a>
										<div class="media-body">
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										</div>										
										<div class="sidebar-comment-box">
											<span><?php echo get_the_date('M j, Y'); ?><small>|</small><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php _e('By','wallstreet'); the_author(); ?> </a></span>
										</div>
									</div>									
									<?php
									} endwhile; 
								} ?>						
						</div>	
					</div>
					<div id="comment" class="tab-pane fade">
						<div class="row"><?php	
							$args = array('number' => '5');
							$comments = get_comments($args);
							foreach($comments as $comment) 
							{	$pop1 = $wpdb->get_results("SELECT id,guid  FROM {$wpdb->prefix}posts WHERE id='$comment->comment_post_ID' ORDER BY comment_count DESC LIMIT 5");
								foreach($pop1 as $post1) { ?>
									<div class="media post-media-sidebar">
										<a class="pull-left sidebar-pull-img" href="<?php echo $post1->guid; ?>">
											<?php echo get_avatar($comment, 70 ); ?>
										</a>
										<div class="media-body">
											<h3><a href="<?php echo get_permalink($comment->comment_post_ID); ?>#comment-<?php echo $comment->comment_ID; ?>"><?php echo get_comment_sidebr($comment->comment_content); ?></a></h3>
										</div>
										<div class="sidebar-comment-box">
											<span><?php echo get_the_date('M j, Y', $post1->id); ?><small>|</small><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php _e('By','wallstreet'); the_author(); ?> </a></span>
										</div>
									</div>
								<?php 
								}  
							}  ?>									
						</div>
					</div>
					
				</div>
				</div>
				
	<?php	
	wp_reset_query();	
	//echo $args['after_widget']; // end of contact widget
	}
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}else {	$title ='Tabs Content'; } ?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title','wallstreet' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
} // class Foo_Widget
?>