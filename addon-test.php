<?php 


/**
 * Plugin Name: Addons Plugin for test
 * Plugin URI: #
 * Description: A addons plugin for Woo Product Table, UltraTable, UltraAddons all addons/polugin. It's not a update able plugin. It's only for our Plugin Customization.
 * Author: Hannan
 * Author URI: #
 * Version: 1.0
 * 
 */

 
// display woocommerce cart items 

// if( !function_exists('ca_display_cart_item_data')){
//    function ca_display_cart_item_data( $cart_item_data, $cart_item, $cart_item_key ){

//       var_dump($cart_item);
//       //return $cart_item_data;
//    }
// }
// add_filter('woocommerce_cart_item_product','ca_display_cart_item_data',100,3);
// if( !function_exists('ca_display_mini_cart_text')){
//    function ca_display_mini_cart_text( ){

//       echo " this mini cart";
//       //return $cart_item_data;
//    }
// }
// add_filter('woocommerce_before_mini_cart','ca_display_mini_cart_text');




// function translate_reply($translated)
// {
//    $translated = str_ireplace('items', 'Artikel', $translated);


//    return $translated;
// }

// add_filter('gettext', 'translate_reply');
// add_filter('ngettext', 'translate_reply');



// change archive page title by filter 


/** Change column Inner item label by using filter  */

// if(!function_exists('codeastrology_change_column_inner_item_label')){
//     function codeastrology_change_column_inner_item_label ( $label, $keyword, $table_ID  ){
        
//         if($keyword == "total" ){
//             $label = "Gesamtsumme";
//         }

//         return $label;
//     }
// }
 
// add_filter('wpto_item_label_text','codeastrology_change_column_inner_item_label',10,3);


/* woocomerce shop page customize by fiter */

/* */


/* Display variation name in column*/

// if( !function_exists('Ha_variation_product_name')){
    
//     function Ha_variation_product_name( $product ){
        
//         var_dump($product);

//         // return $product;
//     }
// }

// add_action('wpt_action_variation','Ha_variation_product_name',10,1);

if( !function_exists('Ha_variation_product_name')){
    
    function Ha_change_add_to_cart_name( $text ){
        
        $text = "Add to Busket";

        return $text;
    }
}
add_action('wpto_add_to_cart_text','Ha_change_add_to_cart_name',10,1);


/** Hide checkbox button on produt table  */

// function Ha_hide_checkbox_on_product_table( $bool, $table_ID ){

//     return false;

// }
// add_filter('wpto_checkbox_validation','Ha_hide_checkbox_on_product_table',20,2);


/* add new column type bootom of colum section*/

// function ha_add_new_column_type( $add_new_col_type, $columns_array, $column_settings, $post ){
//     //$add_new_col_type[] = __( 'New Column', 'wpt_pro' );
//     $add_new_col_type = array(
//         ''
//     );

//     return $add_new_col_type;
// }

// add_filter('wpto_addnew_col_arr','ha_add_new_column_type',100,4);


/* Add someting befor row */
// function ha_add_someting_befor_row($column_settings, $table_ID, $product, $temp_number ){

//     if( "141" == $temp_number ){
//         echo "We are here";
//     }

//     return $column_settings;
// }
// add_filter('wpto_before_row','ha_add_someting_befor_row',101,4);


/* change product table default title*/
// function display_some_text_above_column( $keyword, $table_ID, $settings, $column_settings, $product ){
   
//     var_dump($keyword);

//     if( $keyword == "thumbnails"){
//          echo "Image";
//     }

//     return $keyword;
// }
// add_filter('wpto_column_top','display_some_text_above_column',155,5);

// function all_columns( $column_array, $table_ID, $atts, $column_settings, $enabled_column_array ){

//     var_dump( $column_array);

//     return $column_array;
// }
// add_filter('wpto_column_arr','all_columns',222,5);


// product table args 
// function dispaly_table_post($args, $table_ID, $atts, $column_settings, $enabled_column_array, $column_array){
    

//     $args["posts_per_page"] = 3;
//     return $args;
// }
// add_filter('wpto_table_query_args','dispaly_table_post',222,6);



