<?php
// Keep this opening tag!
$indexed     = array( 1, 2, 3, 4, 5 );
$associative = array( 'one' => 'uno', 'two' => 'dos', 'three' => 'tres' );
echo '<pre>';

// Map
function map_it( $number ) {
    return ( $number * $number );
}
$new_array = array_map( 'map_it', $indexed );
var_dump( $new_array );

// Filter
function filter_it( $item ) {

    return 2 === $item; // A Yoda condition, this is.
}
var_dump( array_filter( $indexed, "filter_it" ) );

// Reduce
function reduce_it( $carry, $item ) {
    $carry *= intval( $item );
    return $carry;
}
var_dump( array_reduce( $indexed, "reduce_it", 2 ) );
