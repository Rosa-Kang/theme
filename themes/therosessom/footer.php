<?php
/**
 * The template for displaying the footer.
 *
 * @package Therosessom
 */

 $post_id = get_field('business_info_id', 'option');
 $footer_copyright_textarea = get_field('footer_copyright_textarea', $post_id);
 ?>

</div><!-- #content -->

<footer id="colophon" class="site-footer bg-primary text-white py-12" role="contentinfo">
  <div class="footer-wrapper container mx-auto px-4">


    <!-- Mobile Logo -->
    <div class="lg:hidden mb-8 text-center">
      <?php get_template_part('template-parts/logo/logo-alt'); ?>
    </div>

    <!-- Footer Top: Menus & Socials -->
    <div class="flex flex-col lg:flex-row justify-between items-start gap-8 mb-10">
      <div class="space-y-4">
        <?php wp_nav_menu([
          'menu'       => 'Footer Menu',
          'menu_id'    => 'footer-left-menu',
          'menu_class' => 'space-y-2',
          'container'  => false,
        ]); ?>
        <?php get_template_part('template-parts/contact/contact-email'); ?>
      </div>

      <!-- Desktop Logo -->
      <div class="hidden lg:block">
        <?php get_template_part('template-parts/logo/logo-alt'); ?>
      </div>

      <div class="space-y-4">
        <?php get_template_part('template-parts/icon/icons-social'); ?>
      </div>
    </div>

    <!-- Footer Bottom: Copyright & Privacy -->
    <div class="text-sm text-center space-y-4">
      <div><?= $footer_copyright_textarea; ?></div>

      <div class="flex flex-col lg:flex-row items-center justify-center gap-2">
        <?php wp_nav_menu([
          'menu'       => 'Privacy Policy',
          'menu_class' => 'flex gap-4 text-sm',
          'container'  => false,
        ]); ?>

        <div class="text-xs text-gray-200">
          Website design by&nbsp;
          <a href="https://whitecanvasdesign.ca" class="underline hover:text-white" target="_blank" rel="noopener noreferrer">
            @Therosessom
          </a>
        </div>
      </div>
    </div>

  </div><!-- .footer-wrapper -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<?php get_template_part('template-parts/footer/footer-scripts'); ?>
</body>

</html>
