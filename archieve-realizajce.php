<?php get_header(); ?>

<section class="realizacje-archive" style="padding:5vw 0; background:#f8f9fb; font-family:'Manrope',sans-serif;">
    <div style="max-width:1100px; margin:0 auto;">
        <h1 style="text-align:center; font-size:2.2vw; font-weight:700; color:#000C32; margin-bottom:3vw;">
            Nasze realizacje
        </h1>

        <div class="realizacje-grid" style="display:flex; flex-wrap:wrap; gap:2vw; justify-content:center;">
            <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" style="width:calc(33% - 2vw); background:white; border-radius:10px; box-shadow:0 2px 6px rgba(0,0,0,0.1); text-decoration:none; color:#1a1a1a; overflow:hidden;">
                    <?php if ($img = get_field('obrazek_tytulowy')) : ?>
                        <img src="<?php echo esc_url($img['url']); ?>" alt="<?php the_title(); ?>" style="width:100%; height:15vw; object-fit:cover;">
                    <?php endif; ?>

                    <div style="padding:1.5vw;">
                        <h2 style="font-size:1.25vw; font-weight:600; margin-bottom:0.8vw;"><?php the_title(); ?></h2>
                        <?php if ($lead = get_field('lead')) : ?>
                            <p style="font-size:1vw; color:#555;"><?php echo esc_html($lead); ?></p>
                        <?php endif; ?>
                    </div>
                </a>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
