<?php snippet('header') ?>

<?php
        $filterBy = get('filter');


        $items = $site
          ->index()
          ->filterBy('template', 'blog')
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
  <?php if($selectedItems->isNotEmpty()): ?>
    <?php foreach($selectedItems as $selectedItem): ?>
      <div class="post">
        <a href="<?php echo $selectedItem->url() ?>">
          <h1><?php echo $selectedItem->title()->html() ?></h1>
          <p><?= $selectedItem->published()->toDate('d.m.Y') ?></p>
        </a>
        </div>
      </div>
    <?php endforeach ?>
  <?php else: ?>
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

<?php snippet('footer') ?>