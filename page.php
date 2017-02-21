<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php require '_aside.php'; ?>

<div class="triforce">

  <div class="slogan">
    <h2>GRABADO LÁSER</h2>

    <p>Publicidad, Personalización y Marcaje identificativo</p>
  </div>

  <div class="content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
        <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
        <section>
          <div class="iscroll">
            <div class="iscroller">
              <?php the_content(); ?>
            </div>
          </div>
        </section>

      </article>

    <?php endwhile; else : ?>

      <article id="post-not-found">
          <h1>404. No encontrado</h1>
      </article>

    <?php endif; ?>

  </div>

</div>

<?php get_footer(); ?>
