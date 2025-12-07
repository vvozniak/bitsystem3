<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-black text-white antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	
    <header class="bg-black text-white py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
        <!-- Logo -->
        <a href="<?php echo home_url(); ?>" class="text-xl font-bold">Firma</a>

        <!-- Menu dla dużych ekranów -->
        <nav class="hidden lg:flex space-x-6">
            <a href="<?php echo home_url('/oferta'); ?>" class="hover:text-gray-400">Oferta</a>
            <a href="<?php echo home_url('/o-nas'); ?>" class="hover:text-gray-400">O nas</a>
            <a href="<?php echo home_url('/realizacje'); ?>" class="hover:text-gray-400">Realizacje</a>
            <a href="<?php echo home_url('/współpraca'); ?>" class="hover:text-gray-400">Współpraca</a>
        </nav>

        <!-- Przycisk Kontakt -->
        <a href="<?php echo home_url('/kontakt'); ?>" class="hidden lg:block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
            Kontakt
        </a>

        <!-- Przycisk mobilny -->
        <button id="menu-toggle" class="lg:hidden text-white text-3xl">
            ☰
        </button>
    </div>

    <!-- Menu mobilne -->
    <nav id="mobile-menu" class="hidden absolute top-16 left-0 w-full bg-black flex flex-col items-center space-y-4 py-4">
        <a href="<?php echo home_url('/oferta'); ?>" class="hover:text-gray-400">Oferta</a>
        <a href="<?php echo home_url('/o-nas'); ?>" class="hover:text-gray-400">O nas</a>
        <a href="<?php echo home_url('/realizacje'); ?>" class="hover:text-gray-400">Realizacje</a>
        <a href="<?php echo home_url('/współpraca'); ?>" class="hover:text-gray-400">Współpraca</a>
        <a href="<?php echo home_url('/kontakt'); ?>" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">Kontakt</a>
    </nav>
</header>

<!-- JavaScript do rozwijania menu -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("menu-toggle").addEventListener("click", function() {
        var menu = document.getElementById("mobile-menu");
        menu.classList.toggle("hidden");
    });
});
</script>




	<div id="content" class="site-content grow">

		<?php if ( is_front_page() ) { ?>
			<!-- Start introduction -->
<div class="container mx-auto px-4 flex flex-col lg:flex-row items-center justify-between">
    
    <!-- Sekcja tekstowa -->
    <div class="hero max-w-lg text-center lg:text-left">
        <h1 class="text-5xl md:text-6xl font-bold leading-tight">
            Strony <br>internetowe<br> z szablonów
        </h1>
        <p class="text-gray-300 text-lg my-4">
            Niesamowite strony internetowe z szablonów,<br> sprawdź je teraz, ceny od 10 do 1000zł za <br>realizację!
        </p>
        <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-lg text-lg transition">
            Oferta
        </a>
    </div>

    <!-- Sekcja telefonu -->
    <div class="relative w-full max-w-xs sm:max-w-md lg:max-w-lg mt-12 lg:mt-0">
        <!-- Obraz telefonu -->
        <img src="http://praktyki1.local/wp-content/uploads/2025/03/phone-1.png" alt="Telefon" class="w-full">
    </div>

</div>

<section class="pricing-section">
        <h2 class="section-title">Wybierz jeden z naszych pakietów</h2>
        <div class="pricing-container">
            <div class="pricing-card">
                <h3>Standard</h3>
                <p class="subtitle">Podstawowa strona</p>
                <p class="price">199zł <span>miesięcznie</span></p>
                <button class="choose-btn">Wybierz</button>
                <ul class="features">
                    <li>✔ Wsparcie firmowe</li>
                    <li>✔ Poprawki 3x w miesiącu</li>
                    <li>✔ Natychmiastowa pomoc</li>
                    <li>✔ Szybka realizacja projektu</li>
                </ul>
                <hr>
                <ul class="package-details">
                    <li>✅ Landing page</li>
                    <li>✅ 4 podstrony</li>
                    <li>✅ Responsywność</li>
                    <li>✅ Formularz kontaktowy</li>
                    <li>✅ Płatności na stronie</li>
                </ul>
            </div>
            <div class="pricing-card">
                <h3>Pro</h3>
                <p class="subtitle">Pro strona</p>
                <p class="price">399zł <span>miesięcznie</span></p>
                <button class="choose-btn">Wybierz</button>
                <ul class="features">
                    <li>✔ Wsparcie firmowe</li>
                    <li>✔ Poprawki 3x w miesiącu</li>
                    <li>✔ Natychmiastowa pomoc</li>
                    <li>✔ Szybka realizacja projektu</li>
                </ul>
                <hr>
                <ul class="package-details">
                    <li>✅ Landing page</li>
                    <li>✅ 4 podstrony</li>
                    <li>✅ Responsywność</li>
                    <li>✅ Formularz kontaktowy</li>
                    <li>✅ Płatności na stronie</li>
                </ul>
            </div>
        </div>
    </section>





<br>



<section class="about-section">
    <div class="about-container">
        <div class="about-image">
            <img src="http://praktyki1.local/wp-content/uploads/2025/03/smiling-creative-business-team-discussing-over-lap-566JQTQ-1.png" alt="Zespół przy pracy" style="max-width: 100%; height: auto; border-radius: 10px;">
        </div>
        <div class="about-text">
            <h2>Prężnie rozwijająca się firma</h2>
            <p>Jesteśmy prężnie rozwijającą się firmą z młodym zespołem. Nasza firma liczy ponad 100 pracowników na całym świecie.</p>
            <p>Nie przestajemy się rozwijać i pracujemy to w coraz nowocześniejszych technologiach, jesteśmy top 1 na rynku w Polsce.</p>
        </div>
    </div>
</section>

<section class="bg-black text-white py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center">
            Specjalizujemy się w <br>
            <span class="text-gray-300">następujących kategoriach</span>
        </h2>
        <p class="text-center text-gray-400 mt-4 max-w-lg mx-auto">
            Lorem ipsum dolor sit amet, consectetur adipis cing elit. Elementum nisi aliquet volutpat.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-12">
            <?php 
            $categories = array("Rebranding", "Rebranding", "Rebranding", "Rebranding", "Rebranding", "Rebranding");
            foreach ($categories as $category) : ?>
                <div class="bg-black p-6 rounded-lg text-center transition hover:bg-gray-700">
                    <img src="http://praktyki1.local/wp-content/uploads/2025/03/Frame.png" alt="Ikona"
                        class="w-12 mx-auto mb-4">
                    <h3 class="text-lg font-semibold"><?php echo $category; ?></h3>
                    <p class="text-gray-400 text-sm mt-2">
                        Lorem ipsum dolor sit amet, consectetur adipis cing elit. Elementum nisi aliquet volutpat.
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="flex justify-center py-12">
    <div class="bg-blue-600 text-white text-center p-10 rounded-3xl max-w-4xl shadow-lg">
        <h2 class="text-3xl font-bold">Nasza oferta jest limitowana!</h2>
        <p class="text-gray-200 mt-4">
            Nasza oferta jest ograniczona czasowo, skorzystaj z aktualnych promocji i 
            miej własną stronę w ciągu kilku dni!
        </p>
        <a href="/oferta" class="mt-6 inline-block bg-white text-black font-semibold px-6 py-3 rounded-xl shadow-md hover:shadow-lg transition">
            Oferta
        </a>
    </div>
</section>




<?php get_footer(); ?>
			<!-- End introduction -->
		<?php } ?>

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
