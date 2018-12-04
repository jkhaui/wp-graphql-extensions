<?php

/**
 * Plugin Name: GraphQL User Followers
 * Extension for the UserPro and WP GraphQL plugins to add 'followers' and 'following' fields to the GraphQL schema.
 * Author: Jordan Lee
 * Author URI: https://github.com/jkhaui
 * Version: 1.0.0
 * Text Domain: gqlfollow
 **/

use WPGraphQL\Types;

add_action( 'graphql_init', function() {
    add_filter( 'graphql_user_fields', function( $fields ) {

	    $fields['userFollowing'] = [
		    'type' => \WPGraphQL\Types::String(),
		    'description' => __( 'Returns the usernames of users following a given user.', 'gqlfollow' ),
		    'resolve' => function( \WP_User $user ) {

			    $_userpro_following_ids = get_user_meta( $user->ID, '_userpro_following_ids', true );
			    $_userpro_following_ids = empty( $_userpro_following_ids ) ? array() : $_userpro_following_ids;
			    $_userpro_following_ids = array_keys( $_userpro_following_ids );

                // Here we map the given array of user IDs to usernames, as it is more user-friendly.
			    $_userpro_followings = array_map( function($user_id) {

				    $this_user = get_user_by('ID', $user_id );
				    
				    return $this_user->user_login;
			    }, $_userpro_following_ids );

			    return empty( $_userpro_followings ) ? null : implode( ',', $_userpro_followings );
		    },
	    ];

	    $fields['userFollowers'] = [
		    'type' => \WPGraphQL\Types::String(),
		    'description' => __( 'Returns the IDs of all the users a given user is following.', 'gqlfollow' ),
		    'resolve' => function( \WP_User $user ) {

			    $_userpro_followers_ids = get_user_meta( $user->ID, '_userpro_followers_ids', true );
			    $_userpro_followers_ids = empty( $_userpro_followers_ids ) ? array() : $_userpro_followers_ids;
			    $_userpro_followers_ids = array_keys( $_userpro_followers_ids );

                // Here we map the given array of user IDs to usernames, as it is more user-friendly.
			    $_userpro_followers = array_map( function($user_id) {

			    	$this_user = get_user_by('ID', $user_id );

			    	return $this_user->user_login;
			    }, $_userpro_followers_ids );

			    return empty( $_userpro_followers ) ? null : implode( ',', $_userpro_followers );

		    },
	    ];

       return $fields;

    } );
} );

add_action( 'init', function(){

	if( ! isset( $_GET['d'] ) ) return;

	$_userpro_following_ids = get_user_meta( 5, '_userpro_following_ids', true );
	$_userpro_following_ids = empty( $_userpro_following_ids ) ? array() : $_userpro_following_ids;
	$_userpro_following_ids = array_keys( $_userpro_following_ids );

	wp_die();
});d
