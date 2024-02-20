<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>

<?php
echo "<pre>";
var_dump( $attributes );
echo "</pre>";
$current_year = date("Y");

if ( !  empty( $attributes['showStartingYear'] ) && ! empty( $attributes['startingYear'] ) ) {
	$display_date = $attributes['startingYear'] . '-' . $current_year;
} else {
	$display_date = $current_year;
}
?>
<p <?php echo get_block_wrapper_attributes(); ?>>
	&copy; <?php echo esc_html( $display_date ); ?>
</p>
