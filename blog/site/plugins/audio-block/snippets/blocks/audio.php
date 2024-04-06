<?php if ($file = $block->source()->toFile()): ?>
<div class="audio-wrapper">
  <div class="audio-info">
    <audio class="audio-element"
      <?= $block->controls()->isTrue() ? 'controls' : '' ?>
      <?= $block->autoplay()->isTrue() ? 'autoplay' : '' ?>
    >
      <source src="<?= $file->url()?>" type="<?= $file->mime() ?>">
      Your browser does not support the <code>audio</code> element.
    </audio>
    <p class="audio-subtitle"><?= $block->subtitle()->html() ?></p>
  </div>
</div>
<?php endif ?>