<?php
// This file handles the admin area and functions - You can use this file to make changes to the dashboard.

add_action( 'customize_register', 'leaguewp_customizer_extensions' );

function leaguewp_customizer_extensions( $wp_customize ) {
	$wp_customize->add_section( 'leaguewp_homepage' , array(
		'title'      => __( 'Home Page Settings', 'leaguewp' ),
		'priority'   => 30,
	) );	

	$wp_customize->add_setting( 'header_textcolor' , array(
		'default'     => '#000000',
		'transport'   => 'refresh',
	) );
}

class LeagueWPSettingsPage
{
	/**
	 * Holds the values to be used in the fields callbacks
	 */
	private $options;

	/**
	 * Start up
	 */
	public function __construct()
	{
		add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'page_init' ) );
	}

	/**
	 * Add options page
	 */
	public function add_plugin_page()
	{
		// This page will be under "Settings"
		add_options_page(
			'Settings Admin', 
			'League WP Options', 
			'manage_options', 
			'leaguewp-setting-admin', 
			array( $this, 'create_admin_page' )
		);
	}

	/**
	 * Options page callback
	 */
	public function create_admin_page()
	{
		// Set class property
		$this->options = get_option( 'leaguewp_option' );
		?>
		<div class="wrap">
			<h2>My Settings</h2>           
			<form method="post" action="options.php">
			<?php
				// This prints out all hidden setting fields
				settings_fields( 'leaguewp_options' );   
				do_settings_sections( 'leaguewp-setting-admin' );
				submit_button(); 
			?>
			</form>
		</div>
		<?php
	}

	/**
	 * Register and add settings
	 */
	public function page_init()
	{        
		register_setting(
			'leaguewp_options', // Option group
			'leaguewp_option', // Option name
			array( $this, 'sanitize' ) // Sanitize
		);

		add_settings_section(
			'homepage_section', // ID
			'Homepage', // Title
			null, // Callback array( $this, 'print_section_info' )
			'leaguewp-setting-admin' // Page
		);  

		add_settings_field(
			'homepage_callout_text', // ID
			'Homepage Callout Text', // Title 
			array( $this, 'homepage_callout_text_callback' ), // Callback
			'leaguewp-setting-admin', // Page
			'homepage_section' // Section           
		);      

		// add_settings_field(
		//     'title', 
		//     'Title', 
		//     array( $this, 'title_callback' ), 
		//     'leaguewp-setting-admin', 
		//     'homepage_section'
		// );  
	}

	/**
	 * Sanitize each setting field as needed
	 *
	 * @param array $input Contains all settings fields as array keys
	 */
	public function sanitize( $input )
	{
		$new_input = array();
		if( isset( $input['homepage_callout_text'] ) )
			$new_input['homepage_callout_text'] = sanitize_text_field( $input['homepage_callout_text'] );

		if( isset( $input['title'] ) )
			$new_input['title'] = sanitize_text_field( $input['title'] );

		return $new_input;
	}

	/** 
	 * Print the Section text
	 */
	public function print_section_info()
	{
		print 'Enter your settings below:';
	}

	/** 
	 * Get the settings option array and print one of its values
	 */
	public function homepage_callout_text_callback()
	{
		printf(
			'<input type="text" id="homepage_callout_text" name="leaguewp_option[homepage_callout_text]" value="%s" />',
			isset( $this->options['homepage_callout_text'] ) ? esc_attr( $this->options['homepage_callout_text']) : ''
		);
	}

	/** 
	 * Get the settings option array and print one of its values
	 */
	public function title_callback()
	{
		printf(
			'<input type="text" id="title" name="leaguewp_option[title]" value="%s" />',
			isset( $this->options['title'] ) ? esc_attr( $this->options['title']) : ''
		);
	}
}

if( is_admin() )
	$my_settings_page = new LeagueWPSettingsPage();