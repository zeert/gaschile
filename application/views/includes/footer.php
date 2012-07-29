 <script src="//code.jquery.com/jquery-1.7.2.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?= base_url();?>js/vendor/jquery-1.7.2.min.js"><\/script>')</script>

    <!-- scripts concatenated and minified via build script -->
    <script src="<?= base_url();?>js/plugins.js"></script>
    <script src="<?= base_url();?>js/main.js"></script>
    <!-- end scripts -->

    <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
         mathiasbynens.be/notes/async-analytics-snippet -->
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
    </body>
</html>
