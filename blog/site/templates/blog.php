<?php snippet('header') ?>

<?php
        $filterBy = get('filter');

        $items = $page
          ->children()
          ->listed()
          ->sortBy('published', 'desc');

        $selectedItems = $items
          ->when($filterBy, function($filterBy) {
            return $this->filterBy('tags', $filterBy, ',');
          })
          ;
          
        $selectedTag  = param('tag');

        $tags = $page
        ->index()
        ->pluck('tags', ',' , true);
        sort($tags);
      ?>

  <section class="content home">   

  <?php foreach($selectedItems as $selectedItem): ?>
    <div class="post">
      <a href="<?php echo $selectedItem->url() ?>">
        <h1><?php echo $selectedItem->title()->html() ?></h1>
        <p><?= $selectedItem->published()->toDate('d.m.Y') ?></p>
      </a>
      </div>
    </div>
  <?php endforeach ?>

  <?php if($selectedItems->isEmpty()): ?>
    <?php foreach($items as $item): ?>
      <div class="post">
      <a href="<?php echo $item->url() ?>">
        <h1><?php echo $item->title()->html() ?></h1>
        <p><?= $item->published()->toDate('d.m.Y') ?></p>
      </a>
      </div>
    <?php endforeach ?>
  <?php endif ?>
  
  </section>
  <div class="return">
    <a href="<?= url('home') ?>">All posts</a>
  </div>

<?php snippet('footer') ?>



