<?php if( have_rows('accordeon') ): ?>

  <section id="accordeon">

    <?php while ( have_rows('accordeon') ) : the_row();
      $acc_title = get_sub_field('title');
      $acc_content = get_sub_field('content'); ?>

      <div class="accordion">
        <h3><?php echo $acc_title; ?></h3>
      </div>
      <div class="panel">
        <?php echo $acc_content; ?>
      </div>

    <?php endwhile; ?>

  </section>
<?php endif; ?>

<script type="text/javascript">
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
</script>
