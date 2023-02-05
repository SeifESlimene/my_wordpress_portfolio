<?php get_header();?>

<div class="container-404">
  <h2 class="page-heading">
    Oh! What? 404
  </h2>
  <img src="http://source.unsplash.com/640x480/?cats" alt="">
  <h3>
    Sorry Friend, I Think You're Lost. Please Try Following These Links.
  </h3>
<ul>
  <li><a href="<?php echo site_url( '/blog' ); ?>">Blog List</a></li>
  <li><a href="<?php echo site_url( '/projects' ); ?>">Projects List</a></li>
  <li><a href="<?php echo site_url( '/about' ); ?>">About Me</a></li>
  <li><a href="<?php echo site_url( '' ); ?>">Home Page</a></li>
</ul>
</div>

<?php get_footer();?>