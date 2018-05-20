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
        <p><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>

    </div><!-- end footer-content -->

     <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>

</footer>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontenttoggle");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" activetab", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " activetab";
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
        return a.id < b.id ? -1 : 1;
    },
    desc: function (a, b) {
        return a.id > b.id ? -1 : 1;
    }
}

window.setTimeout(clickit, 100);
function clickit(){
   document.getElementById("splashsort").click();
}

});//]]> 

</script>

</body>

</html>
