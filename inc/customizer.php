<?php
/**
 * wedge Theme Customizer
 *
 * @package Wedge
 */

add_action( 'customize_register', 'wedge_customizer_register' );

if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;

/**
 * Category dropdown class
 */
class WP_Customize_Category_Control extends WP_Customize_Control {
    private $cats = false;

    public function __construct( $manager, $id, $args = array(), $options = array() ) {
        $this->cats = get_categories( $options );

        parent::__construct( $manager, $id, $args );
    }

    /**
     * Render the content of the category dropdown
     *
     * @return HTML
     */
    public function render_content() {

        if( !empty( $this->cats ) ) {
        ?>

            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <select <?php $this->link(); ?>>
                    <?php
                        // Add an empty default option
                        printf( '<option value="0">' . esc_html( 'Disable Featured Posts', 'wedge' ) . '</option>' );
                        printf( '<option value="0">--</option>' );

                        foreach ( $this->cats as $cat ) {
                            printf( '<option value="%s" %s>%s</option>', $cat->term_id, selected( $this->value(), $cat->term_id, false ), $cat->name );
                        }
                    ?>
            </select>
            </label>

        <?php }
    }
}


/**
 * Sanitize category option
 */
function wedge_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

/**
 * Sanitize select option
 */
function wedge_sanitize_scheme_select( $input ) {
    $valid = array(
        'dark'  => __( 'Dark', 'wedge' ),
        'light' => __( 'Light', 'wedge' ),
    );

    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/**
 * @param WP_Customize_Manager $wp_customize
 */
function wedge_customizer_register( $wp_customize ) {

	$wp_customize->add_section( 'wedge_customizer_aside', array(
		'title'    => __( 'Aside', 'wedge' ),
		'priority' => 90
	) );

    $wp_customize->add_section( 'wedge_customizer_basic', array(
        'title'    => __( 'Theme Options', 'wedge' ),
        'priority' => 150
    ) );

    // ### TITLE TAGLINE ###

	// Logo Image Upload
	$wp_customize->add_setting( 'wedge_customizer_logo', array(
        'sanitize_callback' => 'esc_url_raw'
    ) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wedge_customizer_logo', array(
		'label'    => __( 'Logo Upload', 'wedge' ),
		'section'  => 'title_tagline',
		'settings' => 'wedge_customizer_logo'
	) ) );

    // Logo Image Background Upload
    $wp_customize->add_setting( 'wedge_customizer_logo_bg', array(
        'sanitize_callback' => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wedge_customizer_logo_bg', array(
        'label'    => __( 'Logo-Background Upload', 'wedge' ),
        'section'  => 'title_tagline',
        'settings' => 'wedge_customizer_logo_bg'
    ) ) );

    // Hide Title?
    $wp_customize->add_setting( 'wedge_customizer_hide_title', array(
        'default'           => false
    ) );
    $wp_customize->add_control( 'wedge_customizer_hide_title', array(
        'label'     => __( 'Hide the Title', 'wedge' ),
        'section'   => 'title_tagline',
        'type'      => 'checkbox'
    ) );

    // Hide Description?
    $wp_customize->add_setting( 'wedge_customizer_hide_desc', array(
        'default'           => false
    ) );
    $wp_customize->add_control( 'wedge_customizer_hide_desc', array(
        'label'     => __( 'Hide the Description', 'wedge' ),
        'section'   => 'title_tagline',
        'type'      => 'checkbox'
    ) );

    // ### COLORS ###

    // Color Scheme
    $wp_customize->add_setting( 'wedge_customizer_sidebar_color', array(
        'default'           => 'light',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'wedge_sanitize_scheme_select'
    ));

    $wp_customize->add_control( 'wedge_customizer_sidebar_color_select', array(
        'settings' => 'wedge_customizer_sidebar_color',
        'label'    => __( 'Sidebar Color', 'wedge' ),
        'section'  => 'colors',
        'type'     => 'select',
        'choices'  => array(
            'dark'     => __( 'Dark', 'wedge' ),
            'light'    => __( 'Light', 'wedge' ),
        ),
    ) );

    // ### ASIDE ###

    // Show Search-Bar
    $wp_customize->add_setting( 'wedge_customizer_sidebar_search', array(
        'default'           => false
    ) );
    $wp_customize->add_control( 'wedge_customizer_sidebar_search', array(

        'label'     => __( 'Show searchform in sidebar', 'wedge' ),
        'section'   => 'wedge_customizer_aside',
        'type'      => 'checkbox'
    ) );

    // Featured Category Dropdown
    $wp_customize->add_setting( 'wedge_featured_cat', array(
        'default'           => '0',
        'sanitize_callback' => 'wedge_sanitize_integer'
    ) );

    $wp_customize->add_control( new WP_Customize_Category_Control( $wp_customize, 'wedge_featured_cat', array(
        'label'    => __( 'Featured Post Category', 'wedge' ),
        'section'  => 'wedge_customizer_aside',
        'settings' => 'wedge_featured_cat'
    ) ) );
}

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wedge_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'wedge_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wedge_customize_preview_js() {
	wp_enqueue_script( 'wedge_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'wedge_customize_preview_js' );
