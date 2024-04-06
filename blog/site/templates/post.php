<?php snippet('header') ?>

<section class="content article">
  <article>
    <h1><?= $page->title()->html() ?></h1>
    <p><?= $page->published()->toDate('d.m.Y') ?></p>
    <p class="tags"><?= $page->tags() ?></p> 

    <?= $page->text()->toBlocks() ?>

    <a href="<?= url('home') ?>">Back…</a>

  </article>
</section>

<?php snippet('footer') ?>