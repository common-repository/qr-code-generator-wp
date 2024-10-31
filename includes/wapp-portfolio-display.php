<?php

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class WQRGP_QR_Display {

    const VERSION = '1.0.0';

    public function __construct() {
        // Add the shortcode to generate the QR code
        add_shortcode( 'wqrgp_display_qr', array( $this, 'wqrgp_display_qr_shortcode' ) );
    }

    public function wqrgp_display_qr_shortcode( $atts ) {
        // Set default values for the shortcode attributes
        $atts = shortcode_atts(
            array(
                'data'     => 'https://google.com',  // The URL or data to encode
                'color'    => '000000',              // QR code color
                'bgcolor'  => 'FFFFFF',              // Background color of the QR code
                'size'     => '400x400',             // Size of the QR code (width x height)
                'qzone'    => 1,                     // Quiet zone around the QR code
                'margin'   => 0,                     // Margin around the QR code
                'ecc'      => 'L',                   // Error correction level (L, M, Q, H)
            ), 
            $atts, 
            'wqrgp_display_qr'
        );

        // Generate the QR code URL
        $qr_url = sprintf(
            'https://api.qrserver.com/v1/create-qr-code/?color=%s&bgcolor=%s&data=%s&qzone=%d&margin=%d&size=%s&ecc=%s',
            esc_attr( $atts['color'] ),
            esc_attr( $atts['bgcolor'] ),
            urlencode( $atts['data'] ),
            intval( $atts['qzone'] ),
            intval( $atts['margin'] ),
            esc_attr( $atts['size'] ),
            esc_attr( $atts['ecc'] )
        );

        // Output the QR code image
        ob_start();
        echo '<div class="wqrgp-qr-code">';
        echo '<img src="' . esc_url( $qr_url ) . '" alt="QR Code" />';
        echo '</div>';
        
        return ob_get_clean();
    }
}

// Initialize the QR code generator class
if ( class_exists( 'WQRGP_QR_Display' ) ) {
    new WQRGP_QR_Display();
}
