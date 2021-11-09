    <footer class="p-footer l-grid--footer">
        <?php
            $args = array (
                'theme_location' => 'footer-menu' ,
                'menu' => 'footer-nav',
                'menu_class' => 'p-footer__nav'
            ) ;
            wp_nav_menu ($args);
        ?>
        <small class="c-copyright">Copyright: RaiseTech</small>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
