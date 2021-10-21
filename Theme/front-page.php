<?php
/*    STARTSEITE

  *   TODO: Startseite nach Design umsetzen
  *   TODO: ACF einbinden
  *   TODO: AOS-Animationen erstellen
  *   TODO: Alle Inhalte für mobile Endgeräte optimieren
  *   TODO: Bereiche wie im Beispiel umsetzen
  *   TODO: Bei Bedarf ist die Bootstrap-Integration in der header.php und footer.php auskommentiert
  *   TODO: Die "screenshot.png" muss ausgetauscht werden
  *   TODO: Weitere Änderungen die Fallspezifisch sind Asana zu entnehmen

*/
get_header(); ?>

<main role="main">
  <?php include 'sections/03_parts/hero.php'; ?>
  <?php include 'sections/02_content/wp_content.php'; ?>
  <?php include 'sections/02_content/code.php'; ?>
  <?php include 'sections/01_ui/posts.php'; ?>
</main>

<?php get_footer(); ?>
