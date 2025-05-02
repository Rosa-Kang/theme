<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

class Therosessom_Post_Types {

   /**
    * Add actions and filters
    *
    * @since 1.0.0
    */
   public function __construct() {
      // Register custom post types
      add_action('init', array($this, 'register_jobs_post_type'), 0);
      add_action('init', array($this, 'register_brands_post_type'), 0);
      add_action('init', array($this, 'register_team_post_type'), 0);
      add_action('init', array($this, 'register_testimonials_post_type'), 0);
      add_action('init', array($this, 'register_business_info_post_type'), 0);
   }

   /**
    * Register Jobs Post Type
    *
    * @since 1.0.0
    */
   public function register_jobs_post_type() {
      $labels = array(
          'name'                  => 'Jobs',
          'singular_name'         => 'Job',
          'menu_name'             => 'Jobs',
          'name_admin_bar'        => 'Job',
          'archives'              => 'Job Archives',
          'attributes'            => 'Job Attributes',
          'parent_item_colon'     => 'Parent Job:',
          'all_items'             => 'All Jobs',
          'add_new_item'          => 'Add New Job',
          'add_new'               => 'Add New',
          'new_item'              => 'New Job',
          'edit_item'             => 'Edit Job',
          'update_item'           => 'Update Job',
          'view_item'             => 'View Job',
          'view_items'            => 'View Jobs',
          'search_items'          => 'Search Job',
          'not_found'             => 'Not found',
          'not_found_in_trash'    => 'Not found in Trash',
          'featured_image'        => 'Featured Image',
          'set_featured_image'    => 'Set featured image',
          'remove_featured_image' => 'Remove featured image',
          'use_featured_image'    => 'Use as featured image',
          'insert_into_item'      => 'Insert into Job',
          'uploaded_to_this_item' => 'Uploaded to this Job',
          'items_list'            => 'Jobs list',
          'items_list_navigation' => 'Jobs list navigation',
          'filter_items_list'     => 'Filter Jobs List',
      );
      $args = array(
          'label'                 => 'Job',
          'description'           => 'Jobs',
          'labels'                => $labels,
          'show_in_rest'          => true,
          'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
          'hierarchical'          => false,
          'public'                => true,
          'show_ui'               => true,
          'show_in_menu'          => true,
          'menu_position'         => 25,
          'menu_icon'             => 'dashicons-id-alt',
          'show_in_admin_bar'     => true,
          'show_in_nav_menus'     => true,
          'can_export'            => true,
          'has_archive'           => true,
          'exclude_from_search'   => false,
          'publicly_queryable'    => true,
          'capability_type'       => 'page',
      );
      register_post_type('jobs', $args);
   }

   /**
    * Register Brands Post Type
    *
    * @since 1.0.0
    */
   public function register_brands_post_type() {
      $labels = array(
        'name'                  => 'Brands',
        'singular_name'         => 'Brand',
        'menu_name'             => 'Brands',
        'name_admin_bar'        => 'Brand',
        'archives'              => 'Brand Archives',
        'attributes'            => 'Brand Attributes',
        'parent_item_colon'     => 'Parent Brand:',
        'all_items'             => 'All Brands',
        'add_new_item'          => 'Add New Brand',
        'add_new'               => 'Add New',
        'new_item'              => 'New Brand',
        'edit_item'             => 'Edit Brand',
        'update_item'           => 'Update Brand',
        'view_item'             => 'View Brand',
        'view_items'            => 'View Brands',
        'search_items'          => 'Search Brands',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into Brand',
        'uploaded_to_this_item' => 'Uploaded to this Brand',
        'items_list'            => 'Brands list',
        'items_list_navigation' => 'Brands list navigation',
        'filter_items_list'     => 'Filter Brands List',
      );
      $args = array(
        'label'                 => 'Brand',
        'description'           => 'Brands',
        'labels'                => $labels,
        'show_in_rest'          => true,
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25,
        'menu_icon'             => 'dashicons-images-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'rewrite'               => array('slug' => 'brands'),
      );
      register_post_type('brands', $args);
   }

   /**
    * Register Team Post Type
    *
    * @since 1.0.0
    */
   public function register_team_post_type() {
      $labels = array(
        'name'                  => 'Team Members',
        'singular_name'         => 'Team Member',
        'menu_name'             => 'Team Members',
        'name_admin_bar'        => 'Team Member',
        'archives'              => 'Team Member Archives',
        'attributes'            => 'Team Member Attributes',
        'parent_item_colon'     => 'Parent Team Member:',
        'all_items'             => 'All Team Members',
        'add_new_item'          => 'Add New Team Member',
        'add_new'               => 'Add New',
        'new_item'              => 'New Team Member',
        'edit_item'             => 'Edit Team Member',
        'update_item'           => 'Update Team Member',
        'view_item'             => 'View Team Member',
        'view_items'            => 'View Team Members',
        'search_items'          => 'Search Team Members',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into Team Member',
        'uploaded_to_this_item' => 'Uploaded to this Team Member',
        'items_list'            => 'Team Members list',
        'items_list_navigation' => 'Team Members list navigation',
        'filter_items_list'     => 'Filter Team Members List',
      );
      $args = array(
        'label'                 => 'Team Member',
        'description'           => 'Team Members',
        'labels'                => $labels,
        'show_in_rest'          => true,
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25,
        'menu_icon'             => 'dashicons-groups',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
      );
      register_post_type('team_members', $args);
   }

   /**
    * Register Testimonials Post Type
    *
    * @since 1.0.0
    */
   public function register_testimonials_post_type() {
      $labels = array(
        'name'                  => 'Testimonials',
        'singular_name'         => 'Testimonial',
        'menu_name'             => 'Testimonials',
        'name_admin_bar'        => 'Testimonial',
        'archives'              => 'Testimonial Archives',
        'attributes'            => 'Testimonial Attributes',
        'parent_item_colon'     => 'Parent Testimonial:',
        'all_items'             => 'All Testimonials',
        'add_new_item'          => 'Add New Testimonial',
        'add_new'               => 'Add New',
        'new_item'              => 'New Testimonial',
        'edit_item'             => 'Edit Testimonial',
        'update_item'           => 'Update Testimonial',
        'view_item'             => 'View Testimonial',
        'view_items'            => 'View Testimonials',
        'search_items'          => 'Search Testimonial',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into Testimonial',
        'uploaded_to_this_item' => 'Uploaded to this Testimonial',
        'items_list'            => 'Testimonials list',
        'items_list_navigation' => 'Testimonials list navigation',
        'filter_items_list'     => 'Filter Testimonials List',
      );
      $args = array(
        'label'                 => 'Testimonial',
        'description'           => 'Testimonial',
        'labels'                => $labels,
        'show_in_rest'          => true,
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25,
        'menu_icon'             => 'dashicons-star-empty',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
      );
      register_post_type('testimonials', $args);
   }

   /**
    * Register Business Info Post Type
    *
    * @since 1.0.0
    */
   public function register_business_info_post_type() {
      $labels = array(
        'name'                  => 'Business Info',
        'singular_name'         => 'Business Info',
        'menu_name'             => 'Business Info',
        'name_admin_bar'        => 'Business Info',
        'archives'              => 'Business Info Archives',
        'attributes'            => 'Business Info Attributes',
        'parent_item_colon'     => 'Parent Business Info:',
        'all_items'             => 'All Business Info',
        'add_new_item'          => 'Add New Business Info',
        'add_new'               => 'Add New',
        'new_item'              => 'New Business Info',
        'edit_item'             => 'Edit Business Info',
        'update_item'           => 'Update Business Info',
        'view_item'             => 'View Business Info',
        'view_items'            => 'View Business Info',
        'search_items'          => 'Search Business Info',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into business info',
        'uploaded_to_this_item' => 'Uploaded to this business info',
        'items_list'            => 'Business Info list',
        'items_list_navigation' => 'Business Info list navigation',
        'filter_items_list'     => 'Filter business info list',
      );
      $args = array(
        'label'                 => 'Business Info',
        'description'           => 'Business Info (Logo, Social Profiles, Address, Email, etc.)',
        'labels'                => $labels,
        'show_in_rest'          => true,
        'supports'              => array('title', 'editor', 'custom-fields', 'page-attributes'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25,
        'menu_icon'             => 'dashicons-nametag',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
      );
      register_post_type('business_info', $args);
   }
}

// Initialize the Post Types class
new Therosessom_Post_Types();