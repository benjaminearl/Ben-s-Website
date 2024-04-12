<?php snippet('header') ?>

<section class="article">
  <article>
    <h1><?= $page->title()->html() ?></h1>
    <p><?= $page->published()->toDate('d.m.Y') ?></p>
    <?php foreach ($page->tags()->split() as $tag): ?>
          <a href="<?= url('blog')?>?filter=<?= $tag ?>">#<?=$tag?></a><br>
        <?php endforeach ?>

    <?= $page->text()->toBlocks() ?>

    <a href="<?= url('home') ?>">Back…</a>

  </article>
</section>

<?php snippet('footer') ?>