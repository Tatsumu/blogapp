<footer>
     <div class="footer_nav">
         <ul class="footer_nav-main">
             <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
             <li><a href="search.html">SEARCH</a></li>
             <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact">CONTACT</a></li>
             <li><a href="about.html">このサイトについて</a></li>
         </ul>
         <ul class="footer_nav-policy">
             <li><a href="sitepolicy.html">サイトポリシー</a></li>
             <li><a href="privacypolicy.html">プライバシーポリシー</a></li>
         </ul>
     </div>
     <div class="clear"></div>
     <p>Copyright © NEXT INNOVATION inc.</p>
 </footer>
 <!--footer_END-->
 <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jQuery.js"></script>
  <?php wp_footer(); ?>
