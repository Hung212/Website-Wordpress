<?php 
  
    add_action( 'wp_enqueue_scripts', 'markito_x_enqueue_styles' );
    function markito_x_enqueue_styles() {
        $parenthandle = 'markito-parent-style'; 
        $theme = wp_get_theme();
        wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
            array()
        );
        wp_enqueue_style( 'markito-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css',
            array()  
        ); 
        wp_enqueue_style( 'child-style', get_stylesheet_uri(),
            array( $parenthandle )
        );
    } 
    

    function markito_x_add_sidebar_layout_box(){
        $post_id   = isset( $_GET['post'] ) ? $_GET['post'] : '';
        $template  = get_post_meta( $post_id, '_wp_page_template', true );
        $templates = array( '' ); 
        
        // For Post
        add_meta_box( 
            'markito_x_sidebar_layout',
            __( 'Sidebar Layout', 'markito-x' ),
            'markito_x_sidebar_layout_callback', 
            'post',
            'normal',
            'high'
        );

        if( ! in_array( $template, $templates ) ) {
            // For Pages
            add_meta_box( 
                'markito_x_sidebar_layout',
                __( 'Sidebar Layout', 'markito-x' ),
                'markito_x_sidebar_layout_callback', 
                'page',
                'normal',
                'high'
            );
        }
    }
    add_action( 'add_meta_boxes', 'markito_x_add_sidebar_layout_box' );

    $markito_x_sidebar_layout = array(    
        
        'no-sidebar'     => array(
            'value'     => 'no-sidebar',
            'label'     => __( 'Full Width', 'markito-x' ),
            'thumbnail' => esc_url( get_stylesheet_directory_uri() . '/images/full-width.png' )
        ),
        
        'left-sidebar' => array(
            'value'     => 'left-sidebar',
            'label'     => __( 'Left Sidebar', 'markito-x' ),
            'thumbnail' => esc_url( get_stylesheet_directory_uri() . '/images/left-sidebar.png' )         
        ),
        'right-sidebar' => array(
            'value'     => 'right-sidebar',
            'label'     => __( 'Right Sidebar', 'markito-x' ),
            'thumbnail' => esc_url( get_stylesheet_directory_uri() . '/images/right-sidebar.png' )         
        )    
    );

    function markito_x_sidebar_layout_callback(){
        global $post , $markito_x_sidebar_layout;
        wp_nonce_field( basename( __FILE__ ), 'markito_nonce' ); ?> 
        <table class="form-table">
            <tr>
                <td colspan="4"><em class="f13"><?php esc_html_e( 'Choose Sidebar Template', 'markito-x' ); ?></em></td>
            </tr>
            <tr>
                <td>
                    <?php  
                        foreach( $markito_x_sidebar_layout as $field ){  
                            $layout = get_post_meta( $post->ID, 'markito_x_sidebar_layout', true ); ?>
                            <div class="hide-radio radio-image-wrapper" style="float:left; margin-right:30px;">
                                <input id="<?php echo esc_attr( $field['value'] ); ?>" type="radio" name="markito_x_sidebar_layout" value="<?php echo esc_attr( $field['value'] ); ?>" <?php checked( $field['value'], $layout ); if( empty( $layout ) ){ checked( $field['value'], 'default-sidebar' ); }?>/>
                                <label class="description" for="<?php echo esc_attr( $field['value'] ); ?>">
                                    <img src="<?php echo esc_url( $field['thumbnail'] ); ?>" alt="<?php echo esc_attr( $field['label'] ); ?>" />
                                </label>
                            </div>
                            <?php 
                        } // end foreach 
                    ?>
                    <div class="clear"></div>
                </td>
            </tr>
        </table> 
    <?php 
    }

    function markito_x_save_sidebar_layout( $post_id ){
        global $markito_x_sidebar_layout;

        // Verify the nonce before proceeding.
        if( !isset( $_POST[ 'markito_nonce' ] ) || !wp_verify_nonce( $_POST[ 'markito_nonce' ], basename( __FILE__ ) ) )
            return;
        
        // Stop WP from clearing custom fields on autosave
        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )  
            return;

        if( 'page' == $_POST['post_type'] ){  
            if( ! current_user_can( 'edit_page', $post_id ) ) return $post_id;  
        }elseif( ! current_user_can( 'edit_post', $post_id ) ){  
            return $post_id;  
        }

        $layout = isset( $_POST['markito_x_sidebar_layout'] ) ? sanitize_key( $_POST['markito_x_sidebar_layout'] ) : 'default-sidebar';

        if( array_key_exists( $layout, $markito_x_sidebar_layout ) ){
            update_post_meta( $post_id, 'markito_x_sidebar_layout', $layout );
        }else{
            delete_post_meta( $post_id, 'markito_x_sidebar_layout' );
        }
    }
    add_action( 'save_post' , 'markito_x_save_sidebar_layout' );


    //Save meta box content.

    // @param int $post_id Post ID
    
    function markito_x_Wp_Blog_Post_Sidebar_Type_Save_Value_Function( $post_id ) {
        // Save logic goes here. Don't forget to include nonce checks!

    global $post;
    
        if(isset($_POST["project_font_icon"])):
            
            update_post_meta($post->ID, 'Project_Select_Option_Font_Icon_Meta_Key_Value', $_POST["project_font_icon"]);
        
        endif;
    } 
    add_action( 'save_post', 'markito_x_Wp_Blog_Post_Sidebar_Type_Save_Value_Function' );  

    function markito_x_sanitize_checkbox_function( $checked ) {
        // Boolean check.
        return ( ( isset( $checked ) && true == $checked ) ? true : false );
    }

    function markito_x_customize_register( $wp_customize ) {

        $font_choices = array(
            'Source Sans Pro' => 'Source Sans Pro',
            'Open Sans' => 'Open Sans',
            'Oswald' => 'Oswald',
            'Playfair Display' => 'Playfair Display',
            'Montserrat' => 'Montserrat',
            'Raleway' => 'Raleway',
            'Droid Sans' => 'Droid Sans',
            'Lato' => 'Lato',
            'Arvo' => 'Arvo',
            'Lora' => 'Lora',
            'Merriweather' => 'Merriweather',
            'Oxygen' => 'Oxygen',
            'PT Serif' => 'PT Serif',
            'PT Sans' => 'PT Sans',
            'PT Sans Narrow' => 'PT Sans Narrow',
            'Cabin' => 'Cabin',
            'Fjalla One',
            'Francois One',
            'Josefin Sans' => 'Josefin Sans',
            'Libre Baskerville' => 'Libre Baskerville',
            'Arimo' => 'Arimo',
            'Ubuntu' => 'Ubuntu',
            'Bitter' => 'Bitter',
            'Droid Serif' => 'Droid Serif',
            'Roboto' => 'Roboto',
            'Open Sans Condensed' => 'Open Sans Condensed',
            'Roboto Condensed' => 'Roboto Condensed',
            'Roboto Slab' => 'Roboto Slab',
            'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
            'Rokkitt' => 'Rokkitt',
                
        );
        
        $wp_customize->add_section(
            'font_section',
                array(
                    'title' => __( 'Font Section', 'markito-x' ),
                    'description' => __('Here you can add font family','markito-x'),
                    'capability'=>'edit_theme_options',
                    'priority' => 5,
            )
        );
            
        $wp_customize->add_setting('markito_x_show_Google_Fonts',
            array(
                'sanitize_callback' => 'markito_x_sanitize_checkbox_function',
                'default'           => 0,
            )
         );

        $wp_customize->add_control('markito_x_show_Google_Fonts',
            array(
                'type'        => 'checkbox',
                'label'       => esc_html__('Enable Fonts', 'markito-x'),
                'section'     => 'font_section',
                'description' => esc_html__('Check this box to Enable Custom Fonts', 'markito-x'),
            )
        );

        $wp_customize->add_setting( 'font_family', 
            array(
                'default' =>'',
                'sanitize_callback' => 'markito_x_Theme_Fonts_Sanitize_Text_Function',
            )
        );

        $wp_customize->add_control( 'font_family',
            array(
                'type' => 'select',
                'label' => __('Select your desired font family for heading','markito-x'),
                'section' => 'font_section',
                'choices' => $font_choices
            )
        );

        $wp_customize->add_setting( 'font_family2', 
           array(
                'default' =>'',
                'sanitize_callback' => 'markito_x_Theme_Fonts_Sanitize_Text_Function',
            )
        );

        $wp_customize->add_control( 'font_family2', 
            array(
                    'type' => 'select',
                    'label' => __('Select your desired font family for body','markito-x'),
                    'section' => 'font_section',
                    'choices' => $font_choices
            )
        );

        // markito x Theme Sanitize Function
        function markito_x_Theme_Fonts_Sanitize_Text_Function( $text ) {
            return sanitize_text_field( $text );
        }

    }
    add_action( 'customize_register', 'markito_x_customize_register' );

    function markito_x_scripts() {
        $headings_font = esc_html(get_theme_mod('font_family'));
        $body_font = esc_html(get_theme_mod('font_family2'));

        if( $headings_font ) {
            wp_enqueue_style( 'markito_lite-headings-fonts', '//fonts.googleapis.com/css?family='. $headings_font );
        } else {
            wp_enqueue_style( 'markito_lite-source-sans', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
        }
        if( $body_font ) {
            wp_enqueue_style( 'markito_lite-body-fonts', '//fonts.googleapis.com/css?family='. $body_font );
        } else {
            wp_enqueue_style( 'markito_lite-source-body', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,700,600');
        }
    }
    add_action( 'wp_enqueue_scripts', 'markito_x_scripts' );