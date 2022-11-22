<?php get_header(); ?>

<main class="content">
    <section class="in__numbers">
        <div class="container">
            <h2>In numbers</h2>
			<?php if ( have_rows( 'numbers' ) ) : ?>
                <ul class="numbers">
					<?php while ( have_rows( 'numbers' ) ) : the_row(); ?>
                        <li class="number">
                            <div class="number__container">
                                <h3 class="number__title"><?= get_sub_field( 'number' ); ?></h3>
                                <p class="number__description"><?= get_sub_field( 'title' ); ?></p>
                            </div>
                        </li>
					<?php endwhile; ?>
                </ul>
			<?php endif; ?>
        </div>
    </section>
    <section class="introduction">
        <div class="container">
            <h2>Introduction</h2>
            <div class="introduction__content">
				<?php $heart_image = get_field( 'introduction_image' ); ?>
                <img src="<?= $heart_image ? esc_url( $heart_image['url'] ) : get_template_directory_uri() . '/public/heart.png' ?>"
                     alt="<?= $heart_image ? esc_attr( $heart_image['alt'] ) : 'Image of an heart' ?>">
                <div class="introduction__text">
                    <p><?= get_field( 'introduction' ); ?></p>
                </div>
            </div>
    </section>
    <article>
        <div class="container">
            <h2>Objectives</h2>
			<?php if ( have_rows( 'objectives' ) ) :
				$objectives_count = 0 ?>
                <ul class="objectives">
					<?php while ( have_rows( 'objectives' ) ) : the_row();
						$objectives_count += 1 ?>
                        <li>
                            <h3><?= $objectives_count ?>.</h3>
                            <div class="objective__container">
                                <p><?php the_sub_field('text'); ?></p>
                            </div>
                        </li>
					<?php endwhile; ?>
                </ul>
			<?php endif; ?>
        </div>
    </article>
    <section class="partners">
        <h2><?php the_field( 'partners_title' ); ?></h2>
        <div class="map"><?= do_shortcode( '[imageset]' ); ?></div>
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
