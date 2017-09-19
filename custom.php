<?php
function link_to_related_exhibits($item) {

    $db = get_db();

    $select = "
    SELECT e.* FROM {$db->prefix}exhibits AS e
    INNER JOIN {$db->prefix}exhibit_pages AS ep on ep.exhibit_id = e.id
    INNER JOIN {$db->prefix}exhibit_page_blocks AS epb ON epb.page_id = ep.id
    INNER JOIN {$db->prefix}exhibit_block_attachments AS epba ON epba.block_id = epb.id
    WHERE epba.item_id = ?";

$exhibits = $db->getTable("Exhibit")->fetchObjects($select,array($item->id));

if(!empty($exhibits)) {
    foreach($exhibits as $exhibit) {
echo '<a href="'.exhibit_builder_exhibit_uri($exhibit).'">Biography</a>';
    }
}
}
