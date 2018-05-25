</div><!-- end content -->

<footer role="contentinfo">

    <div id="footer-content" class="center-div">
        <?php if($footerText = get_theme_option('Footer Text')): ?>
        <div id="custom-footer-text">
            <p><?php echo get_theme_option('Footer Text'); ?></p>
        </div>
        <?php endif; ?>
        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
        <p><?php echo $copyright; ?></p>
        <?php endif; ?>
        <nav><?php echo public_nav_main()->setMaxDepth(0); ?></nav>
             <?php
     $base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
     $theme_path = realpath(__DIR__ . '/..');
     $theme_subpath = strstr($theme_path, 'themes');
     $base_url = str_replace('items/show/','',$base_url);
     ?>

<p><a href="http://oralhistoryonline.org" target="_blank"><img id="ohms_logo_footer" src=" <?php echo $base_url; ?><?php echo $theme_subpath; ?>/images/ohms_logo.png"/></a></p>

    </div><!-- end footer-content -->
<div id="omeka_proud"><p><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p></div>

     <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>


</footer>


<script>
function openTab(tab, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontenttoggle");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" activetab", "");
    }
    document.getElementById(tabName).style.display = "block";
    tab.currentTarget.className += " activetab";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.showAdvancedForm();
        Omeka.skipNav();
        Omeka.megaMenu();
        Berlin.dropDown();
    });
</script>

<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
var $list = $('#splashset');


$('button').data('lastSort', 'desc').click(function() {
    var $items = $list.children(), lastSort=$(this).data('lastSort');
    var direction = lastSort=='asc' ? 'desc' :  'asc';
   $(this).data('lastSort',direction);
    $list.empty().append($items.sort(directionSort[direction]));
});


var directionSort = {
    asc: function (a, b) {
	return (a.id==="")-(b.id==="") || +(a.id>b.id)||-(a.id<b.id);
    },
    desc: function (a, b) {
	return (a.id==="")-(b.id==="") || -(a.id>b.id)||+(a.id<b.id);
    }
}

window.setTimeout(clickit, 100);
function clickit(){
   document.getElementById("splashsort").click();
}

});//]]> 

</script>

<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
var $listm = $('#splashset_mobile');


$('button').data('lastSortm', 'desc').click(function() {
    var $itemsm = $listm.children(), lastSortm=$(this).data('lastSortm');
    var directionm = lastSortm=='asc' ? 'desc' :  'asc';
   $(this).data('lastSortm',directionm);
    $listm.empty().append($itemsm.sort(directionSortm[directionm]));
});


var directionSortm = {
    asc: function (a, b) {
	return (a.id==="")-(b.id==="") || +(a.id>b.id)||-(a.id<b.id);
    },
    desc: function (a, b) {
	return (a.id==="")-(b.id==="") || -(a.id>b.id)||+(a.id<b.id);
    }
}

window.setTimeout(clickit, 100);
function clickit(){
   document.getElementById("splashsort_mobile").click();
}

});//]]> 

</script>

</body>

</html>
