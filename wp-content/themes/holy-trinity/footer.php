<?php
$catID = get_the_category()[0]->term_id;

if($catID == 23):
    include($_SERVER['DOCUMENT_ROOT'].'/inc/information_ft_btn.html'); 
?>
<?php elseif('teachers' == get_post_type()): 
    include($_SERVER['DOCUMENT_ROOT'].'/inc/nursery_ft_menu.html'); 
?>
<?php endif; ?>

<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/inc/footer.html'); 
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="/style/js/nav.js"></script>
<?php if ( is_page( 'qa' )): ?>
  <script type="text/javascript">
  $(document).ready(function(){
      $('.qa-list dt').on('click', function(){
          $(this).next().slideToggle();
          $(this).toggleClass('active');
      })
  });
  </script>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>