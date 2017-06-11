<?php 
		/**
		Template Name: Home Page
		*/
		$wallstreet_pro_options=theme_data_setup();
		$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
		get_header();
		get_template_part('index','slider');
		$data =is_array($current_options['front_page_data']) ? $current_options['front_page_data'] : explode(",",$current_options['front_page_data']);
		if($data) 
		{
			foreach($data as $key=>$value)
			{			
				switch($value) 
				{
					case 'service': 
					//****** get index service  ********
					get_template_part('index', 'service');
					break;
					
					case 'portfolio':
					//****** get index project  ********
					get_template_part('index', 'portfolio');				
					break;
					
					case 'testimonials':
					//****** get index testimonials  ********
					get_template_part('index', 'testimonials');				
					break; 	
					
					case 'blog':
					//****** get index recent blog  ********
					get_template_part('index', 'blog');
					break;
					
					case 'features':
					//****** get index Features Section  ********
					get_template_part('index', 'features');
					break;
					
					case 'client':
					//****** get index  client  ********
					get_template_part('index', 'client');
					break;
				}
			}
		 	
	get_footer(); 
	}
?>