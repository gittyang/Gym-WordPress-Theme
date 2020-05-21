<aside class="sidebar">
  <p>hello from sidebar.php</p>
  <?php  
  
  if(is_active_sidebar('sidebar') ) :
    dynamic_sidebar('sidebar');
  endif;
  
  ?>
</aside>