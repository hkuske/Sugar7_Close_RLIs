<?php 
foreach($viewdefs['Opportunities']['base']['view']['record']['buttons'] as &$set){ 
    if( $set['type'] == 'actiondropdown' && $set['name'] == 'main_dropdown'){ 
        $set['buttons'][] = array( 
            'type' => 'divider',
            );
        $set['buttons'][] = array( 
            'type' => 'rowaction',
            'event' => 'button:allwon:click',
            'name' => 'allwon',
            'label' => 'LBL_RLI_WON',
            'acl_action' => 'edit',
            );
        $set['buttons'][] = array( 
            'type' => 'rowaction',
            'event' => 'button:alllost:click',
            'name' => 'alllost',
            'label' => 'LBL_RLI_LOST',
            'acl_action' => 'edit',
            );
    }
}
?>
