<nav class="main-menu u-bold-cn">
  <ul>
<?php
$shop_url = IGV_get_option('_igv_shop_url');
if (! empty($shop_url)) {
?>
    <li class="menu-item js-svg-container">
      <a href="<?php echo $shop_url; ?>">Shop</a>
      <?php echo url_get_contents( get_bloginfo('stylesheet_directory') . '/img/smile.svg' ); ?>
    </li>
<?php 
}
?>
    <li class="menu-item js-svg-container">
      <a href="<?php echo get_bloginfo('url') . '/archive/'; ?>">Archive</a>
      <?php echo url_get_contents( get_bloginfo('stylesheet_directory') . '/img/squiggle.svg' ); ?>
    </li>
    <li class="menu-item">
      <form action="/" method="get" class="u-bold-cn">
        <input type="text" name="s" class="u-bold-cn expand" id="search" placeholder="SEARCH" svalue="<?php the_search_query(); ?>" />
      </form>
    </li>
  </ul>
</nav>