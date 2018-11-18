<?php

/**
 * Plugin Name: GraphQL User Profile Pictures
 * Description: Exposes the WP User Avatar plugin to the GraphQL schema. 
 * Author: Jordan Lee
 * Author URI: https://github.com/jkhaui
 * Version: 1.0.0
 * Text Domain: gqlprofpic
 **/

use WPGraphQL\Types;

add_action( 'graphql_init', function() {
    add_filter( 'graphql_user_fields', function( $fields ) {


    	$fields['userAvatarURL'] = [
    		'type' => \WPGraphQL\Types::String(),
		    'description' => __( 'Displays the user\'s profile picture URL.', 'gqlprofpic' ),
		    'resolve' => function( \WP_User $user ) {

			  $wp_user_avatar = get_user_meta( $user->ID, 'wp_user_avatar', true );
        /* The WP_User_Avatar plugin returns an array of fields within its user_meta key, so use array_shift to return only the image URL
         * which is the first field of the array.
         */
				$wp_user_avatar = array_shift( $wp_user_avatar );

				return isset( $wp_user_avatar['avatar_url'] ) && ! empty( $wp_user_avatar['avatar_url'] ) ? $wp_user_avatar['avatar_url'] : null;

			    },
	    ];
      
       return $fields;
              
    } );
} );
