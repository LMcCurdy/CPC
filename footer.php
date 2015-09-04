<?php wp_footer(); ?>

<footer>

	<div class="wrap group">
        <div class="foot-wrap">
        <div class="grid-2">
            <h5>Our Programs</h5>
            <div class="grid-half">
                <?php the_field('left_links', 'option'); ?>
            </div>
            <div class="grid-half">
                <?php the_field('right_links', 'option'); ?>  
            </div>
        </div>

        <div class="grid-2">
            <h5>Contact Us</h5>
            <div class="grid-half">
                <ul>
                    <li><?php the_field('address_line_one', 'option'); ?></li>
                    <li><?php the_field('address_line_two', 'option'); ?></li>
                </ul>            
            </div>
            <div class="grid-half">
                <ul>
                    <li>Phone: <?php the_field('phone', 'option'); ?></li>
                    <li>Fax: <?php the_field('fax', 'option'); ?></li>
                </ul>              
            </div>
            <a href="<?php the_field('facebook_link', 'option'); ?>" class="facebook-button"><i class="fa fa-facebook"></i> Follow us on Facebook</a>        
        </div>

        <div class="grid-2">
            <h5>About Us</h5>
            <div class="grid-half">
                 <?php the_field('resource_left_links', 'option'); ?>              
            </div>
            <div class="grid-half">
                <?php the_field('resource_right_links', 'option'); ?>              
            </div>        
        </div>
        </div>
    </div>
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> Community Progress Council, Inc. <span>All rights reserved.</span></p>
        </div>
</footer>




    <script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.stickyPanel.js"></script> 
    <script src="<?php bloginfo('template_url'); ?>/assets/js/pushy.min.js"></script> 
    <script type="text/javascript">
        $().ready(function () {
            var stickyPanelOptions = {
                afterDetachCSSClass: "stickyness",
                savePanelSpace: true,
                parentSelector: null
            };

            // multiple panel example (you could also use the class ".stickypanel" to select both)
            $("#headstick").stickyPanel(stickyPanelOptions);
        });
    </script>

</body>
</html>