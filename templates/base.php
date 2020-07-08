<section data-post-type="<?= $attributes['post_type']; ?>" data-quantity="<?= $attributes['posts_per_page']; ?>" class="js-container-async ajax-posts">
  <div class="ajax-posts__status" style="display:none;"></div>
  <?php if ( $query->have_posts() && $query->post_count > 1) : ?>
    <button class="js-toggle-filters ajax-posts__toggle-filter">
      <span class="ajax-posts__filter-recipes-text">+ <?php  printf( __('Mostra filtri %s', 'ajax-filter-posts'), $plural_post_name); ?></span>
      <span class="ajax-posts__show-recipes-text">+ <?php  printf( __('Mostra %s', 'ajax-filter-posts'), $plural_post_name); ?></span>   
      <span class="ajax-posts__hide-filters-text">- <?= __('Nascondi filtri', 'ajax-filter-posts'); ?></span>   
    </button>
  <?php endif; ?>
  <div class="ajax-posts__view">  
    <aside class="ajax-posts__filters">
    <?php if ( $query->have_posts() && $query->post_count > 1) : ?>
        <?php include( $this->get_local_template('partials/filters.php') ); ?>
    <?php endif; ?>
    </aside>
    <div class="ajax-posts__posts">
        <?php include( $this->get_local_template('partials/loop.php') ); ?>
    </div>
  </div>
  <div class="ajax-posts__spinner">
    <span class="ajax-posts__screen-reader-only"><?php _e('Loading', 'ajax-filter-posts'); ?></span>
  </div>
</section>