<?php $allowed_blocks_inner = ['acf/inner-intro', 'acf/inner-tekst','acf/inner-button', 'acf/inner-titel','acf/inner-subtitel','acf/inner-quote','acf/inner-lijn','acf/inner-quote','acf/inner-counter', ];?>
<InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks_inner ) ); ?>"/>