<?php

/**
 * Plugin Name: GraphQL Extension - Comment Sentiment Analysis
 * Description: Add-on for Quantum Cloud's comment tools pro plugin. Exposes sentiment categorisation for individual comments to the GraphQL schema.
 * Author: Jordan Lee
 * Author URI: https://github.com/jkhaui
 * Version: 1.0.0
 * Text Domain: gqlcomsentiment
 **/

use WPGraphQL\Types;

add_action( 'graphql_init', function() {
    add_filter( 'graphql_comment_fields', function( $fields ) {       

                $fields['sentimentScore'] = [
                    'type' => \WPGraphQL\Types::Float(),
                    'description' => __( 'The 0 - 1 sentiment score for the comment.', 'gqlcomsentiment' ),
                    'resolve' => function( \WP_Comment $comment ) {
                        $score = get_comment_meta( $comment->comment_ID, 'comment_sentiment_score', true );

                        return ! empty( $score ) ? $score : null;      
                    },
            ];
            
            	$fields['sentimentCategory'] = [
                    'type' => \WPGraphQL\Types::String(),
                    'description' => __( 'Classifies the comment sentiment as positive, neutral or negative.', 'gqlcomsentiment' ),
                    'resolve' => function( \WP_Comment $comment ) {
                        $category = get_comment_meta( $comment->comment_ID, 'comment_sentiment_category', true );

                        return ! empty( $category ) ? $category : null;      
                    },
            ];

       return $fields;

    } );
} );
