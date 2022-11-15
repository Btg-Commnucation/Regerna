<?php get_header(); ?>

<main class="content">
    <section class="partners">
        <h2><?php the_field( 'partners_title' ); ?></h2>
        <div class="map"><?= do_shortcode( '[Partnersmap]' ); ?></div>
        <div class="partners__list">
            <aside class="btn">
                <a href="#" class="btn-link active" id="all">All</a>
                <a href="#" class="btn-link" id="france">France</a>
                <a href="#" class="btn-link" id="netherland">Netherland</a>
                <a href="#" class="btn-link" id="poland">Poland</a>
                <a href="#" class="btn-link" id="belgium">Belgium</a>
                <a href="#" class="btn-link" id="switzerland">Switzerland</a>
            </aside>
			<?php if ( have_rows( 'partners' ) ) : ?>
                <div class="partners__loop">
					<?php while ( have_rows( 'partners' ) ) : the_row();
						$link        = get_sub_field( 'link' );
						$link_target = $link['target'] ? $link['target'] : '_self';
						$image       = get_sub_field( 'image' );
						?>
                        <a href="<?= esc_url( $link['url'] ) ?>" data-country="<?php the_sub_field( 'country' ); ?>"
                           target="<?= esc_attr( $link_target ); ?>" class="active">
                            <span class="screen-reader-text"><?= esc_html( $link['title'] ); ?></span>
                            <img src="<?= esc_url( $image['url'] ); ?>" alt="<?= esc_attr( $image['alt'] ); ?>">
                        </a>

					<?php endwhile; ?>
                </div>
			<?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
