<?php
/**
 * Crude bin test script
 * Simulates GET /api/content/node/2 and outputs the ezcMvcResult
 */
$controller = new ezpRestContentController( 'viewNode', new ezcMvcRequest );
$result = $controller->doViewNode( 2 );
print_r( $result );
?>