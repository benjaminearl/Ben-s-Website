<?php snippet('header') ?>

  <section class="content home">

  <?php foreach($site->find('blog')->children()->listed()->flip()->paginate(10) as $post): ?>
      <div class="post">
    <a href="<?php echo $post->url() ?>">
      <h1><?php echo $post->title()->html() ?></h1>
      <p><?= $post->published()->toDate('d.m.Y') ?></p>
    </a>
    <p><?= $post->text()->toBlocks()->excerpt(300) ?></p>
    <div class="button"><a href="<?php echo $post->url() ?>">Read more</a></div>
    </div>
  <?php endforeach ?>

  </section>

<?php snippet('footer') ?>