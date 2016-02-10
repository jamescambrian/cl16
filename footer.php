</div>
<footer id="footer" class="foot" role="contentinfo">
    <div class="container fade-in-element">
    <!-- Footer column 1 begins -->
    <div class="one-third column">
        <h3>Stockists</h3>
        <?php wp_nav_menu( array( 'menu' => 'Stockists') ); ?>
    </div>
    <div class="one-third column">
        <h3>Pages</h3>
        <?php wp_nav_menu( array( 'menu' => 'Categories' , 'menu_class' => 'central'  ) ); ?>
    </div>
    <div class="one-third column">
        <h3>Follow Us</h3>
        <?php wp_nav_menu( array( 'menu' => 'Follows' ) ); ?>
    </div>
</div>
</footer>
</div>
<?php wp_footer(); ?>

<!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 <!-- Pushy JS -->
 <script src="<?php echo get_bloginfo('template_directory'); ?>/js/pushy.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/classie.js"></script>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 200,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
</script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.waypoints.min.js"></script>
<script>
  $(function () {
      $('.fade-in-element').each(function(){
        var _this = this;
        var inview = new Waypoint({
            element: _this,
            handler: function (direction) {
                $(this.element).animate({'opacity': 1},500)
            },
            offset: '80%'
        });
        });
    });
</script>
<!-- POPUP -->
<script>
  $('.popup').click(function(event) {
    var width  = 575,
        height = 400,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = this.href,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;
    
    window.open(url, 'popup', opts);
 
    return false;
  });
</script>
</body>
</html>