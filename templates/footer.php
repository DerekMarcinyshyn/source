<footer id="content-info" role="contentinfo">
    <div class="container">
        <?php dynamic_sidebar('sidebar-footer'); ?>
        <p class="copyright">&copy; <?php echo date('Y'); ?> The Source Skate and Snowboard Shop</p>
        <p class="design">Site::<a href="http://monasheemountainmultimedia.com">MMM</a></p>
    </div>
</footer>

<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

<?php wp_footer(); ?>
