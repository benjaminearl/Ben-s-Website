<?php snippet('header') ?>

  <section class="content home">

  <?php foreach($site->find('blog')->children()->listed()->flip()->paginate(10) as $post): ?>
      <div class="post">
    <a href="<?php echo $post->url() ?>">
      <h1><?php echo $post->title()->html() ?></h1>
      <p class="date-published"><?= $post->published()->toDate('d.m.Y') ?></p>
    </a>


    </div>
  <?php endforeach ?>

  </section>

<?php snippet('footer') ?>