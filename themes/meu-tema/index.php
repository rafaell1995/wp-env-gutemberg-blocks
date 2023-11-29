<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Meu tema WordPress</title>
</head>
<body>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  <h2>
    <a href="<?php the_permalink() ?>">
      <?php the_title() ?>
    </a>
  </h2>

  <div class="content">
    <?php the_content() ?>
  </div>
<?php endwhile; ?>

<?php else : ?>
  <p>Não existem posts.</p>
<?php endif ?>

</body>
</html>