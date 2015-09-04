<?php
/*
Plugin Name: PyroSteveJr - Events Manager Payment Gateway Placeholder
Version: 1.0
Plugin URI: http://pyrostevejr.com/
Description: Adds #_PAYMENTGATEWAY placeholder for Events Manager to display which Payment Gateway was used.
Author: Stephen Phillips (PyroSteveJr)
Author URI: http://pyrostevejr.com/
*/

add_filter('em_booking_output_placeholder','pyrostevejr_em_paymentgateway',1,3);
function pyrostevejr_em_paymentgateway($replacement, $EM_Booking, $result){
    if (is_object($EM_Booking)) {
        if ($result == '#_PAYMENTGATEWAY') {
            $replacement = $EM_Booking->booking_meta['gateway'];
        }
    }
    return $replacement;
}
?>
