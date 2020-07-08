<?php foreach ($filterlists as $filterlist) : ?>
  <div class="ajax-posts__filterlist">
    <h2><?= $filterlist['name'] ?></h2>
    <ul>
      <?php foreach ($filterlist['filters'] as $filter) : ?>
        <li>
          <a href="<?= get_term_link( $filter, $filter->taxonomy ); ?>" class="ajax-posts__filter" data-filter="<?= $filter->taxonomy; ?>" data-term="<?= $filter->slug; ?>">
              <?= $filter->name; ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
    <?php if (count($filterlist['filters']) >= 1): ?>
      <div class="ajax-posts__filter-toggle">
        <a href="#" class="js-collapse-filterlist ajax-posts__filter-toggle-show">Mostra</a>
        <a href="#" class="js-collapse-filterlist ajax-posts__filter-toggle-hide">Nascondi</a>
      </div>
  <?php endif; ?>
  </div>
<?php endforeach; ?>