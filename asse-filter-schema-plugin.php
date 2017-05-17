<?php

/**
 * Filter gravatar and Schema
 */
function filter_gravatar_request($preempt, $r, $url) {
  if (preg_match('/^(http|https):\/\/www\.gravatar\.com\/avatar\//')) {
    return __return_true;
  }
  return $r;
}

add_filter( 'pre_http_request', 'filter_gravatar_request', 100, 3 );
