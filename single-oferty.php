<?php
/**
 * Szablon pojedynczej oferty
 */
get_header();
?>

<!-- HERO SECTION -->
<section class="hero-section" style="position:relative; overflow:visible; color:white; margin-top:9.01vw;">
  
  <?php 
  // ACF: Tło hero z fallbackiem na domyślne
  $hero_bg = get_field('oferta_tlo_hero');
  $bg_url = $hero_bg ? esc_url($hero_bg['url']) : get_template_directory_uri() . '/images/webp/tlo.webp';
  ?>
  
  <img 
    src="<?php echo $bg_url; ?>" 
    alt="Tło oferty" 
    style="position:fixed; top:0; left:0; width:100%; height:100%; object-fit:cover; z-index:-10;"
  >

  <div class="hero-content" style="position:relative; margin-left:16.66vw; max-width:55vw; z-index:2;">
    <h1 class="text-title" style="opacity:0.9; margin-bottom:5.156vw; line-height:1.2; font-size:3.2vw; font-family:'Manrope', sans-serif;">
      <span class="text-highlight" style="background-color:#0BA0D880; opacity:0.9; padding:0.3vw 1vw; border-top-right-radius:9999px; border-bottom-right-radius:9999px; color:white; font-weight:800;">
        <?php the_title(); ?>
      </span>
    </h1>
  </div>
  
  <div 
    class="social-icons" 
    style="
      position:absolute; 
      top: 70%; 
      right:3vw; 
      transform:translateY(-50%); 
      z-index:100; 
      display:flex; 
      flex-direction:column; 
      gap:1.2vw;
    "
  >
    <a href="#" aria-label="LinkedIn" style="display:block; width:2.5vw; height:2.5vw; border-radius:50%; overflow:hidden;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/webp/linkedin.webp" alt="LinkedIn" 
           style="width:100%; height:100%; object-fit:cover;">
    </a>
    <a href="#" aria-label="Facebook" style="display:block; width:2.5vw; height:2.5vw; border-radius:50%; overflow:hidden;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/webp/facebook.webp" alt="Facebook" 
           style="width:100%; height:100%; object-fit:cover;">
    </a>
    <a href="#" aria-label="Instagram" style="display:block; width:2.5vw; height:2.5vw; border-radius:50%; overflow:hidden;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/webp/instagram.webp" alt="Instagram" 
           style="width:100%; height:100%; object-fit:cover;">
    </a>
    <a href="#" aria-label="YouTube" style="display:block; width:2.5vw; height:2.5vw; border-radius:50%; overflow:hidden;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/webp/youtube.webp" alt="YouTube" 
           style="width:100%; height:100%; object-fit:cover;">
    </a>
  </div>
</section>

<!-- TREŚĆ OFERTY -->
<section style="background-color:white; padding:5vw 0;">
  <div style="max-width:1200px; margin:0 auto; padding:0 5vw;">
    
    <?php 
    if (have_posts()) : 
      while (have_posts()) : the_post();
    ?>
    
    <!-- GŁÓWNA TREŚĆ -->
    <div class="entry-content" style="font-family:'IBM Plex Sans', sans-serif; font-size:1.15vw; line-height:1.7; color:#1a1a1a; margin-bottom:4vw;">
      <?php the_content(); ?>
    </div>

    <?php 
    // ACF: Obrazki ilustrujące usługę
    $obrazek_1 = get_field('oferta_obrazek_1');
    $obrazek_2 = get_field('oferta_obrazek_2');
    $obrazek_3 = get_field('oferta_obrazek_3');
    
    $obrazki = array_filter([$obrazek_1, $obrazek_2, $obrazek_3]);
    
    if (!empty($obrazki)) :
    ?>
    <div style="display:grid; grid-template-columns:repeat(<?php echo count($obrazki); ?>, 1fr); gap:2vw; margin-bottom:4vw;">
      <?php foreach ($obrazki as $obrazek) : ?>
        <div style="border-radius:10px; overflow:hidden;">
          <img src="<?php echo esc_url($obrazek['url']); ?>" 
               alt="<?php echo esc_attr($obrazek['alt']); ?>" 
               style="width:100%; height:auto; object-fit:cover;">
        </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <?php 
    // ACF: Lista punktów (co obejmuje usługa)
    $lista_punktow = get_field('oferta_lista_punktow');
    if ($lista_punktow) :
    ?>
    <div style="background-color:#f9fafb; padding:3vw; border-radius:10px; margin-bottom:4vw;">
      <h3 style="font-family:'Manrope', sans-serif; font-size:1.88vw; font-weight:600; margin-bottom:2vw; color:#1a1a1a;">
        Co obejmuje usługa?
      </h3>
      <ul style="font-family:'IBM Plex Sans', sans-serif; font-size:1.15vw; line-height:1.8; color:#4a4a4a; list-style-position:inside;">
        <?php
        $punkty = explode("\n", $lista_punktow);
        foreach ($punkty as $punkt) :
          $punkt = trim($punkt);
          if (!empty($punkt)) :
        ?>
          <li style="margin-bottom:1vw;"><?php echo esc_html($punkt); ?></li>
        <?php 
          endif;
        endforeach; 
        ?>
      </ul>
    </div>
    <?php endif; ?>

    <!-- PRZYCISK CTA -->
    <div style="text-align:center; margin-top:5vw;">
      <a href="/kontakt" 
         class="cta-btn"
         style="display:inline-block; background:#0BA0D8; color:white; font-family:'Inter', sans-serif; font-size:1.25vw; font-weight:500; padding:1vw 2.5vw; border-radius:10px; text-decoration:none; transition:background 0.3s;">
        Skontaktuj się
      </a>
    </div>

    <?php 
      endwhile;
    endif;
    ?>
    
  </div>
</section>

<?php get_footer(); ?>
