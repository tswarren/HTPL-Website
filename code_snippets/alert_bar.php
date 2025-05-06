/**
 * Plugin Name: HTPL Alert Bar (Enhanced)
 * Description: Displays the most recent active alert with start/end dates, priority color, link-style dismiss, and truncated excerpt.
 * Version: 1.3
 * Author: HTPL Web Team
 */

add_action('wp_body_open', 'htpl_display_alert_bar');

function htpl_display_alert_bar() {
  if (!function_exists('get_field')) return;

  $today = date('Y-m-d');
  $args = array(
    'post_type' => 'announcement',
    'posts_per_page' => 1,
    'meta_query' => array(
      'relation' => 'AND',
      array('key' => 'is_alert', 'value' => '1'),
      array(
        'relation' => 'OR',
        array('key' => 'active_date', 'value' => $today, 'compare' => '<=', 'type' => 'DATE'),
        array('key' => 'active_date', 'compare' => 'NOT EXISTS'),
      ),
      array(
        'relation' => 'OR',
        array('key' => 'expiration_date', 'value' => $today, 'compare' => '>=', 'type' => 'DATE'),
        array('key' => 'expiration_date', 'compare' => 'NOT EXISTS'),
      )
    ),
    'orderby' => 'date',
    'order' => 'DESC'
  );

  $alert_query = new WP_Query($args);

  if ($alert_query->have_posts()) {
    while ($alert_query->have_posts()) {
      $alert_query->the_post();
      $title = esc_html(get_the_title());
      $excerpt = esc_html(get_the_excerpt());
      $importance = get_field('alert_level'); // expected: info, warning, danger

      // Truncate excerpt to 200 characters
      if (strlen($excerpt) > 200) {
        $excerpt = mb_substr($excerpt, 0, 200) . '…';
      }

      $color_class = 'info';
      if ($importance === 'warning') $color_class = 'warning';
      if ($importance === 'danger') $color_class = 'danger';

      echo '<div class="htpl-alert-bar ' . $color_class . '" id="htpl-alert-bar">';
      echo '<strong>' . $title . '</strong>: ' . $excerpt;
      echo ' <a href="javascript:void(0);" class="htpl-dismiss-link" onclick="document.getElementById(\'htpl-alert-bar\').style.display = \'none\';">[Dismiss]</a>';
      echo '</div>';
    }
    wp_reset_postdata();
  }
}

add_action('wp_head', function () {
  echo '<style>
    .htpl-alert-bar {
      padding: 0.75em 1em;
      text-align: center;
      font-weight: 500;
      position: relative;
      z-index: 9999;
    }
    .htpl-alert-bar.info {
      background-color: #d1ecf1;
      color: #0c5460;
      border-bottom: 2px solid #bee5eb;
    }
    .htpl-alert-bar.warning {
      background-color: #fff3cd;
      color: #856404;
      border-bottom: 2px solid #ffeeba;
    }
    .htpl-alert-bar.danger {
      background-color: #f8d7da;
      color: #721c24;
      border-bottom: 2px solid #f5c6cb;
    }
    .htpl-dismiss-link {
      margin-left: 1em;
      font-weight: normal;
      font-size: 0.9em;
      color: inherit;
      text-decoration: underline;
      cursor: pointer;
    }
  </style>';
});
