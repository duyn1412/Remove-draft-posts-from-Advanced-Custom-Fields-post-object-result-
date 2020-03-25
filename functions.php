<?php
function my_post_object_query( $args, $field, $post_id ) {
	 
    $args['post_status'] = array('publish');
    return $args;
    
}
// filter for every field
add_filter('acf/fields/post_object/query', 'my_post_object_query', 10, 3);
