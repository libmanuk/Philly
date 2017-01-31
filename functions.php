<?php
function link_to_related_exhibits($item) {

    $db = get_db();

    $select = "
    SELECT e.* FROM {$db->prefix}exhibits e
    INNER JOIN {$db->prefix}sections s ON s.exhibit_id = e.id
    INNER JOIN {$db->prefix}section_pages sp on sp.section_id = s.id
    INNER JOIN {$db->prefix}items_section_pages isp ON isp.page_id = sp.id
    WHERE isp.item_id = ?";

    $exhibits = $db->getTable("Exhibit")->fetchObjects($select,array($item->id));

    if(!empty($exhibits)) {
        echo '<h3>Related Exhibits</h3>';
        echo '<ul>';
        foreach($exhibits as $exhibit) {
            echo '<li>'.link_to_exhibit(null, array(), null, null, $exhibit).'</li>';
        }
        echo '</ul>';
    }
}