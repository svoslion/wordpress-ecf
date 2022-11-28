<?php 

add_filter( 'the_content', 'filter_the_content' );

/**
 * Filters the post content.
 *
 * @param string $content Content of the current post.
 * @return string Content of the current post.
 */
 function filter_the_content( string $content ) : string {

    if(is_page('about')){
        $text= strip_tags($content);
        $wordCountMin = str_word_count($text);
        $time_read = round($wordCountMin / 150, 2);
        echo '<strong>'.$time_read . 'min'.'</strong>';  
    }

	return $content;
}