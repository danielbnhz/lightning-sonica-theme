<?php get_header(); ?>

<main class="blog-archive container">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <article class="blog-card">
        <h2>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
        <?php the_excerpt(); ?>
      </article>

    <?php endwhile; ?>

  <?php else: ?>
    <p>No posts found.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
