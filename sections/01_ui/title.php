<div class="title__wrapper">
  <?php if (the_sub_field('title')): ?>
    <h2 class="h2"><?php echo the_sub_field('title'); ?></h2>
  <?php endif; ?>
  <?php if (the_sub_field('subtitle')): ?>
    <span class="subtitle"><?php echo the_sub_field('subtitle'); ?></span>
  <?php endif; ?>
</div>
