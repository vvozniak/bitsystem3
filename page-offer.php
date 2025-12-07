<head>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=IBM+Plex+Sans:wght@400;500;600;700&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<?php
$pageTitle = "Oferta";
?>
<?php get_header(); ?>
<section class="hero-section" style="position:relative; overflow:visible; color:white; margin-top:9.01vw;">
  <img 
    src="<?php echo get_template_directory_uri(); ?>/images/tlo.png" 
    alt="Tło wydarzenia" 
    style="position:fixed; top:0; left:0; width:100%; height:100%; object-fit:cover; z-index:-10;"
  >

  

  <div class="hero-content" style="position:relative; margin-left:16.66vw; max-width:55vw; z-index:2;">
    
  
    <p class="text-title" style="opacity:0.9; margin-bottom:1vw; line-height:1.2; font-size:3.2vw; font-family:'Manrope', sans-serif;">
      <span class="text-highlight" style="background-color:#0BA0D880; opacity:0.9; padding:0.3vw 1vw; border-top-right-radius:9999px; border-bottom-right-radius:9999px; color:white; font-weight:800;">
        Doświadczenia
      </span>, które łączą świat
    </p>

    <p class="text-desc" style="opacity:0.9; margin-bottom:5.156vw; max-width:48vw; font-family:'IBM Plex Sans', sans-serif; font-size:1.25vw; line-height:1.6;">
     Łączymy doświadczenie organizacyjne z pasją do współpracy międzykulturowej, oferując kompleksową obsługę projektów o zasięgu globalnym.
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






<section class="offer-section" style="
    font-family: 'Manrope', sans-serif; 
    padding: 5vw 0; 
    background-color: white;
">
    
    <div class="header-content" style="
        margin: 0 auto 3vw;
        padding: 0 3vw; /* Przykładowy margines boczny dla nagłówka */
    ">
        <p class="section-subtitle1" style="
            font-size: 1.67vw; 
            font-weight: 300; 
            color: #1a1a1a; 
            margin-bottom: 0.5vw;
        ">
            Nasza oferta
        </p>
        <h1 class="section-title" style="
            font-size: 1.88vw; 
            font-weight: 600; 
            line-height: 1.2; 
            color: #1a1a1a; 
            margin-bottom: 1vw;
        ">
            Wydarzenia bez granic – 
            <span style="
                background-color: #0BA0D882;
                color: white;
                padding: 0.2vw 0.8vw;
                display: inline-block;
                white-space: nowrap;
            ">
                łączymy ludzi, idee i kultury
            </span>
        </h1>
        <p class="section-description" style="
          font-family: 'IBM Plax Sans', sans-serif:
            font-weight: 400;
            font-size: 1.04vw; 
            line-height: 1.5; 
            color: #4a4a4a;
        ">
            Działamy na styku biznesu, nauki i kultury. Organizujemy wydarzenia, które łączą ludzi, wiedzę i technologie, wspierając rozwój współpracy ponad granicami. Sprawdź, czym się zajmujemy:
        </p>
    </div>
    <!-- 🔹 KAFELKI (Z ACF POZOSTAJĄCE, UKŁAD LEWO-PRAWO) -->
    <div class="offer-grid" style="width:100vw;position:relative;left:50%;transform:translateX(-50%);padding:0 1.04vw;overflow:hidden;">
        <?php
        // Domyślne kafle
        $defaults = [
            ['tytul'=>'Konferencje i wydarzenia','opis'=>'Od planowania po realizację – zapewniamy pełną obsługę konferencji, spotkań i eventów.','ikona'=>'conference (1) 1.png','kolor'=>'#000C32','szerokosc'=>'35%'],
            ['tytul'=>'Misje gospodarcze i naukowe','opis'=>'Organizujemy i koordynujemy wyjazdy biznesowe, kulturalne i akademickie w kraju i za granicą.','ikona'=>'economic 1.png','kolor'=>'#0BA0D8','szerokosc'=>'65%'],
            ['tytul'=>'Wsparcie projektów badawczych','opis'=>'Pomagamy w organizacji projektów naukowych i eksperckich.','ikona'=>'scientist 1.png','kolor'=>'#000C32','szerokosc'=>'50%'],
            ['tytul'=>'Inicjatywy międzykulturowe','opis'=>'Budujemy mosty między różnymi środowiskami poprzez projekty edukacyjne, szkoleniowe i integracyjne.','ikona'=>'culture 1.png','kolor'=>'#0BA0D8','szerokosc'=>'50%'],
            ['tytul'=>'Rozwiązania technologiczne dla eventów','opis'=>'Zapewniamy nowoczesne rozwiązania technologiczne dla eventów, obejmujące obsługę techniczną.','ikona'=>'economic 1 (1).png','kolor'=>'#000C32','szerokosc'=>'40%'],
            ['tytul'=>'Eventy specjalne','opis'=>'Organizujemy spotkania integracyjne dla firm, uroczystości tematyczne oraz bale dla dzieci i dorosłych.','ikona'=>'economic 1 (2).png','kolor'=>'#0BA0D8','szerokosc'=>'60%'],
        ];

        $height = '13.48vw';
        $margin = '1.04vw';

        echo '<div style="overflow:hidden;">';
        for ($i = 0; $i < count($defaults); $i++) {
            $b = $defaults[$i];
            echo '<div class="kafelek" style="
                float:left;
                width:calc('.$b['szerokosc'].' - '.$margin.');
                height:'.$height.';
                background-color:'.$b['kolor'].';
                color:white;
                padding:2vw;
                border-radius:10px;
                box-sizing:border-box;
                margin:0 '.$margin.' '.$margin.' 0;
                display:flex;
                flex-direction:column;
                justify-content:space-between;
            ">';

            echo '<div style="display:flex;align-items:flex-start;margin-bottom:1vw;">';
            echo '<img src="'.get_template_directory_uri().'/images/'.$b['ikona'].'" alt="'.esc_attr($b['tytul']).'" style="width:3.5vw;height:3.5vw;object-fit:contain;margin-right:1.5vw;">';
            echo '<h3 style="font-size:1.25vw;font-weight:600;line-height:1.3;">'.$b['tytul'].'</h3>';
            echo '</div>';

            echo '<p style="font-size:1.04vw;font-weight:400;line-height:1.5;opacity:0.9;">'.$b['opis'].'</p>';
            echo '</div>';

            // Naprzemienne ustawienie lewej/prawej
            if ($i % 2 == 1) echo '<div style="clear:both;"></div>';
        }
        echo '</div>';
        ?>
    </div>

    <div style="text-align:center;margin-top:4vw;">
        <a href="#realizacje" style="display:inline-block;background:#0BA0D8;color:white;font-family:'Inter',sans-serif;font-size:1.25vw;font-weight:500;padding:1vw 2.5vw;border-radius:10px;text-decoration:none;">Zobacz nasze realizacje</a>
    </div>
</section>









<section class="logos-section">
  <div class="logos-strip-container">
    <div class="logos-strip">
      <img src='<?php echo get_template_directory_uri(); ?>/images/logo1.png' 
           alt="Logo Partnera 1" 
           class="logo-item" 
           style="height: 1.7188vw;">
      
      <img src='<?php echo get_template_directory_uri(); ?>/images/logo2.png' 
           alt="Logo Partnera 2" 
           class="logo-item" 
           style="height: 4.3229vw;">
      
      <img src='<?php echo get_template_directory_uri(); ?>/images/logo3.png' 
           alt="Logo Partnera 3" 
           class="logo-item" 
           style="height: 5.7292vw;">
      
      <img src='<?php echo get_template_directory_uri(); ?>/images/logo1.png' 
           alt="Logo Partnera 1" 
           class="logo-item" 
           style="height: 1.7188vw;">
      
      <img src='<?php echo get_template_directory_uri(); ?>/images/logo2.png' 
           alt="Logo Partnera 2" 
           class="logo-item" 
           style="height: 4.3229vw;">
      
      <img src='<?php echo get_template_directory_uri(); ?>/images/logo3.png' 
           alt="Logo Partnera 3" 
           class="logo-item" 
           style="height: 5.7292vw;">
      
    </div>
  </div>
</section>





<section class="approach-section">
  <div class="approach-container">

    <!-- LEWA KOLUMNA -->
     <div class= "approach-tlo">

          
            <img src="<?php echo get_template_directory_uri(); ?>/images/Group 1.png" 
               alt="12" 
               class="img-figura"
              style="height= 34.23vw">

    
      </div>


    <div class="approach-left">
      <div class="text-block">
        <h3 class="approach-subtitle">Nasze podejście</h3>
        <h2 class="approach-title">Dlaczego warto nam zaufać</h2>

        <p class="approach-description">
          Każde wydarzenie traktujemy jako wyjątkową okazję do tworzenia przestrzeni dla dialogu,
          wymiany wiedzy i budowania relacji. Naszą siłą jest połączenie dbałości o detale,
          nowoczesnych technologii i otwartości na różnorodność kulturową. Dzięki temu realizujemy
          projekty, które inspirują i zostawiają trwały ślad.
        </p>

        <div class="highlight-row">
          <p class="approach-highlight-text">
            <span class="highlighted-word1">Międzynarodowa perspektywa</span><br>
            Współpracujemy z partnerami na całym świecie, łącząc różne środowiska – od biznesu i nauki,
            po kulturę i sektor społeczny.
          </p>
        
          <img src="<?php echo get_template_directory_uri(); ?>/images/Component 22.png" 
               alt="Uczestnicy konferencji" 
               class="img-small">
        </div>
      </div>
    </div>

    <!-- PRAWA KOLUMNA -->
    <div class="approach-right">
      <img src="<?php echo get_template_directory_uri(); ?>/images/Component 23.png" 
           alt="Prelegent na scenie" 
           class="img-large">
    </div>

  </div>
</section>





<?php
include 'contact.php';
include 'footer.php';
  ?>