<?php
require_once('../vendor/simplepie/autoloader.php');
$feed = new SimplePie();
$feed->set_feed_url('http://feeds.feedburner.com/simplepie');
$feed->set_cache_location('./cache');
$feed->init();

$result = '';
foreach ($feed->get_items() as $item) {
  $result .= <<< EOF
    <li>
      <h4>
        <a href="{$item->get_permalink()} target="_blank">
          <small>{$item->get_date('Y-m-d H:i')}</small>
          {$item->get_title()}
        </a>
      </h4>
      <p>{$item->get_description()}</p>
    </li>
EOF;
}

echo $result;
