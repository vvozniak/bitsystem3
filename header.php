<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="background: transparent; color: black; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;">

<?php do_action('tailpress_site_before'); ?>

<<header class="site-header">
  <div class="container-header">
    <nav class="nav-main">
      <div class="nav-inner">
        <!-- Logo -->
        <a href="<?php echo home_url(); ?>" class="logo-link">
          <img src="<?php echo get_template_directory_uri(); ?>/images/Property 1=Default.png" alt="Logo" class="logo-img">
        </a>

        <!-- 🔹 Przycisk hamburger -->
        <button class="menu-toggle" aria-label="Otwórz menu">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <!-- 🔹 Menu WordPress -->
        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'menu-list',
          'walker' => new class extends Walker_Nav_Menu {
            function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
              $output .= '<li><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
            }
          },
          'fallback_cb' => false,
          'depth' => 1,
        ));
        ?>
      </div>
    </nav>
  </div>
</header>
1:10
<script>
document.addEventListener('DOMContentLoaded', function() {
  const toggle = document.querySelector('.menu-toggle');
  const menu = document.querySelector('.menu-list');
  const links = document.querySelectorAll('.menu-list a');

  if (toggle && menu) {
    toggle.addEventListener('click', function() {
      menu.classList.toggle('active');
      toggle.classList.toggle('active');
    });

    // Zamykanie po kliknięciu w link
    links.forEach(link => {
      link.addEventListener('click', () => {
        menu.classList.remove('active');
        toggle.classList.remove('active');
      });
    });
  }
});
</script>