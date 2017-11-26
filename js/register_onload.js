function register_onload() {
    var js_array = JSON.parse( '<?php echo json_encode($php_array) ?>');
    /*HOW to access array in JS
    * console.log( js_array['vegetables']['leafy'][0] ); // collard greens
    */
}