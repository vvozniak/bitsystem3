<head>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=IBM+Plex+Sans:wght@400;500;600;700&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<?php
$pageTitle = "O nas";
?>
<?php get_header(); ?>

<body>
<section class="hero-section" style="position:relative; overflow:visible; color:white; margin-top:9.01vw;">
  <img 
    src="<?php echo get_template_directory_uri(); ?>/images/tlo.png" 
    alt="Tło wydarzenia" 
    style="position:fixed; top:0; left:0; width:100%; height:100%; object-fit:cover; z-index:-10;"
  >

  

  <div class="hero-content" style="position:relative; margin-left:16.66vw; max-width:55vw; z-index:2;">
    
  
    <p class="text-title" style="opacity:0.9; margin-bottom:1vw; line-height:1.2; font-size:3.2vw; font-family:'Manrope', sans-serif;">
      <span class="text-highlight" style="background-color:#0BA0D880; opacity:0.9; padding:0.3vw 1vw; border-top-right-radius:9999px; border-bottom-right-radius:9999px; color:white; font-weight:800;">
        Ludzie
      </span>, którzy łączą światy
    </p>

    <p class="text-desc" style="opacity:0.9; margin-bottom:5.156vw; max-width:48vw; font-family:'IBM Plex Sans', sans-serif; font-size:1.25vw; line-height:1.6;">
     Od idei po realizację – wspieramy wydarzenia, które łączą ludzi, inspirują do współpracy 
i otwierają nowe perspektywy rozwoju.
    </p>

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
      <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="LinkedIn" 
           style="width:100%; height:100%; object-fit:cover;">
    </a>
    <a href="#" aria-label="Facebook" style="display:block; width:2.5vw; height:2.5vw; border-radius:50%; overflow:hidden;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook" 
           style="width:100%; height:100%; object-fit:cover;">
    </a>
    <a href="#" aria-label="Instagram" style="display:block; width:2.5vw; height:2.5vw; border-radius:50%; overflow:hidden;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Instagram" 
           style="width:100%; height:100%; object-fit:cover;">
    </a>
    <a href="#" aria-label="YouTube" style="display:block; width:2.5vw; height:2.5vw; border-radius:50%; overflow:hidden;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="YouTube" 
           style="width:100%; height:100%; object-fit:cover;">
    </a>
  </div>
</section>



<section class="kim-jestesmy">
    <div class="kj-gora">
        <div class="kj-title">
            Kim jesteśmy 
        </div>
        <div class ="kj-subtitle">
            Poznaj naszą <span class="text-highlight" style="background-color:#0BA0D880; opacity:0.9; padding:0.3vw 1vw; border-top-left-radius:9999px; border-bottom-left-radius:9999px; color:white; font-weight:800;">misje</span>
        </div>
            <p class="kj-tresc">
                Bit System Sp. z o.o. to firma specjalizująca się w kompleksowej obsłudze wydarzeń na styku kultur, technologii i współpracy międzynarodowej. Wspieramy organizację konferencji, misji gospodarczych, projektów badawczych oraz działań międzykulturowych, tworząc przestrzeń do wymiany wiedzy, doświadczeń i innowacji.
            </p>


    </div>
    <div class="kj-dol">
        <div class="bg-stripes"></div>
        <div class="bg-stripes"></div>
        <div class="bg-globe"></div>

        <div class="person-row michal-row">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/images/Component 19.png"
                alt="Michał Cichoracki" 
                class="person-image"
                
            >
            <div class="person-content">
                <h2>Michał Cichoracki</h2>
                <p>
                    Współzałożyciel Bit System Sp. z o.o., ekspert w zakresie organizacji wydarzeń 
                    międzynarodowych, misji gospodarczych i projektów badawczych. Posiada bogate 
                    doświadczenie w pracy z instytucjami publicznymi, uczelniami oraz organizacjami 
                    międzynarodowymi. Zajmuje się strategicznym planowaniem, koordynacją projektów oraz 
                    budowaniem partnerstw międzysektorowych. Ceniony za profesjonalizm, umiejętność pracy 
                    w złożonym środowisku i skuteczne łączenie różnych perspektyw.
                </p>
            </div>
        </div>

        <div class="person-row dorota-row">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/images/Component 20.png"
                alt="Dorota Markiewicz" 
                class="person-image"
            >
            <div class="person-content">
                <h2>Dorota Markiewicz</h2>
                <p>
                    Współzałożycielka Bit System Sp. z o.o., specjalistka w obszarze współpracy międzykulturowej, 
                    komunikacji i edukacji międzynarodowej. Przez lata angażowała się w projekty społeczne, 
                    kulturalne i naukowe o zasięgu krajowym i europejskim. W Bit System odpowiadała za rozwój 
                    koncepcji programowych, współpracę z ośrodkami naukowymi oraz realizację projektów 
                    wspierających dialog i integrację. Znana z zaangażowania, kreatywności i podejścia opartego 
                    na empatii i partnerstwie.
                </p>
            </div>
        </div>
</section>

<section class="what-we-do" style="position:relative; overflow:hidden; color:white;"> 
    
    <video 
      autoplay 
      loop 
      muted 
      playsinline 
      poster="<?php echo get_template_directory_uri(); ?>/images/USŁUGI.png" 
      style="
        position:absolute;
        top:0; 
        left:0; 
        width:100%; 
        height:auto;
        object-fit:contain; 
        z-index:-10; 
      "
    >
        <source src="<?php echo get_template_directory_uri(); ?>/videos/tlov.mp4" type="video/mp4">
        <source src="<?php echo get_template_directory_uri(); ?>/videos/tlov.webm" type="video/webm">
    </video>
  
  <div class ="text-column">
    <p class="subtitle">Co robimy?</p>
    <h2>Kompleksowa obsługa <br>
        wydarzeń i projektów<br><span class="highlight">
        międzynarodowych</span>
    </h2>
    <p class="tresc">
        Wierzymy, że każde wydarzenie to szansa na tworzenie wartości, <br>
        dlatego dbamy o każdy detal – od koncepcji po realizację i komunikację.
    </p>

    <a href="#oferta" 
           class="cta-btn"
           style="display:inline-block; background:white; color:black; font-family:'Inter', sans-serif; font-size:1.25vw; font-weight:500; padding:1vw 2.5vw; border-radius:10px;">
        Poznaj nasze usługi    
    </a>
  </div>
</section>



<section class="realizations-section">
  <div class="realizations-header-container">
    <div class="realizations-text-col">
      <p class="realizations-subtitle">Z pasją do perfekcji</p>
      <h2 class="realizations-title">Nasze <span>Realizacje</span></h2>
    </div>
    <a href="/realizacje" class="btn-realizations-cta">Zobacz wszystkie</a>
  </div>

  <div class="realizations-grid">
    <?php
    $args = array(
      'post_type' => 'realizacje',
      'posts_per_page' => 3,
      'orderby' => 'date',
      'order' => 'DESC'
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();

        $tytul = get_field('realizacja_tytul');
        $obrazek = get_field('obrazek_tytulowy');
        $tlo = $obrazek ? esc_url($obrazek['url']) : get_template_directory_uri() . '/images/tlo3.png';

        // Rozdziel tytuł po myślniku, by zakreślić tylko pierwszy fragment
        $parts = explode('-', $tytul, 2);
        $tytul_html = '<span>' . trim($parts[0]) . '</span>';
        if (isset($parts[1])) {
          $tytul_html .= ' - ' . trim($parts[1]);
        }
    ?>
        <a href="<?php the_permalink(); ?>" class="realization-card">
          <img src="<?php echo $tlo; ?>" alt="<?php echo esc_attr($tytul); ?>" class="card-image">
          <div class="card-overlay">
            <h3 class="card-title"><?php echo $tytul_html; ?></h3>
          </div>
        </a>
    <?php
      endwhile;
      wp_reset_postdata();
    else :
      echo '<p>Brak realizacji do wyświetlenia.</p>';
    endif;
    ?>
  </div>
</section>


<?php
include 'contact.php';
include 'footer.php';
  ?>