<div class="sidebar">
  <div class="pages">
    <h2>Pages</h2>
    
    <ul>
      <?php $pages = get_pages(); ?>

      <?php foreach($pages as $page): ?>
        <li><a href="<?php echo get_page_link($page->ID); ?>"><?php echo $page->post_title; ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="archives">
    <h2>Archive</h2>

    <ul>
      <?php wp_get_archives('type=yearly'); ?>
    </ul>
  </div>
</div>