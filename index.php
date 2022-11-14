<?php get_header(); ?>

<main class="content">
    <section class="partners">
        <h2><?php the_field('partners_title'); ?></h2>
        <div class="map"><?= do_shortcode('[Partnersmap]'); ?></div>
        <div class="partners__list">
            <aside class="btn">
                <a href="#" class="btn-link active" id="all">All</a>
                <a href="#" class="btn-link" id="france">France</a>
                <a href="#" class="btn-link" id="netherland">Netherland</a>
                <a href="#" class="btn-link" id="poland">Poland</a>
                <a href="#" class="btn-link" id="belgium">Belgium</a>
                <a href="#" class="btn-link" id="switzerland">Switzerland</a>
            </aside>
            <div class="partners__detail">
                <a href=""><img src="" alt=""></a>
                <a href=""><img src="" alt=""></a>
                <a href=""><img src="" alt=""></a>
                <a href=""><img src="" alt=""></a>
                <a href=""><img src="" alt=""></a>
                <a href=""><img src="" alt=""></a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
