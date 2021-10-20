<?php
// DIESER BEREICH IST FÜR DICH UNINTERESSANT

  // Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
  function Spectrewp_pagination()
  {
      global $wp_query;
      $big = 999999999;
      echo paginate_links(array(
          'base' => str_replace($big, '%#%', get_pagenum_link($big)),
          'format' => '?paged=%#%',
          'current' => max(1, get_query_var('paged')),
          'total' => $wp_query->max_num_pages
      ));
  }
  add_action('init', 'Spectrewp_pagination');

  // Custom Excerpts
  function Spectrewp_index($length) // Create 20 Word Callback for Index page Excerpts, call using Spectrewp_excerpt('Spectrewp_index');
  {
      return 20;
  }

  // Create 40 Word Callback for Custom Post Excerpts, call using Spectrewp_excerpt('Spectrewp_custom_post');
  function Spectrewp_custom_post($length)
  {
      return 40;
  }

  // Create the Custom Excerpts callback
  function Spectrewp_excerpt($length_callback = '', $more_callback = '')
  {
      global $post;
      if (function_exists($length_callback)) {
          add_filter('excerpt_length', $length_callback);
      }
      if (function_exists($more_callback)) {
          add_filter('excerpt_more', $more_callback);
      }
      $output = get_the_excerpt();
      $output = apply_filters('wptexturize', $output);
      $output = apply_filters('convert_chars', $output);
      $output = '<p>' . $output . '</p>';
      echo $output;
  }

  // Custom View Article link to Post
  function Spectre_blank_view_article($more)
  {
      global $post;
      return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'Spectreblank') . '</a>';
  }

  // Threaded Comments
  function enable_threaded_comments()
  {
      if (!is_admin()) {
          if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
              wp_enqueue_script('comment-reply');
          }
      }
  }
  add_action('get_header', 'enable_threaded_comments');

  // Custom Comments Callback
  function Spectreblankcomments($comment, $args, $depth)
  {
  	$GLOBALS['comment'] = $comment;
  	extract($args, EXTR_SKIP);

  	if ( 'div' == $args['style'] ) {
  		$tag = 'div';
  		$add_below = 'comment';
  	} else {
  		$tag = 'li';
  		$add_below = 'div-comment';
  	}
  ?>
      <!-- heads up: starting < for the html tag (li or div) in the next line: -->
      <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
  	<?php if ( 'div' != $args['style'] ) : ?>
  	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
  	<?php endif; ?>
  	<div class="comment-author vcard">
  	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
  	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
  	</div>
  <?php if ($comment->comment_approved == '0') : ?>
  	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
  	<br />
  <?php endif; ?>

  	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
  		<?php
  			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
  		?>
  	</div>

  	<?php comment_text() ?>

  	<div class="reply">
  	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
  	</div>
  	<?php if ( 'div' != $args['style'] ) : ?>
  	</div>
  	<?php endif; ?>
  <?php }

?>
