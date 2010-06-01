<?php
/**
 * File containing rest router
 *
 * @copyright Copyright (C) 1999-2010 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU GPLv2
 *
 */
class ezpRestRouter extends ezcMvcRouter
{
    public function createRoutes()
    {
        return array(
            new ezcMvcRailsRoute( '/api/content', 'ezpRestContentController', 'list' ),
            new ezcMvcRailsRoute( '/api/content/node/:nodeId', 'ezpRestContentController', 'viewNode' ),
            new ezcMvcRailsRoute( '/api/content/object/:objectId', 'ezpRestContentController', 'viewObject' ),
            new ezcMvcRailsRoute( '/api/content/object/:contentId/fields', 'ezpRestContentController', 'viewFields' ),
            new ezcMvcRailsRoute( '/api/fatal', 'ezpRestContentController', 'show' ),
        );
    }
}
?>