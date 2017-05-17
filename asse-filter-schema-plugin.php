<?php

/**
 * Filter gravatar and Schema
 */
function filter_gravatar_request($preempt, $r, $url) {
  if ( 'www.gravatar.com' == parse_url( $url, PHP_URL_HOST ) ) {
      // mangle $r here to add extra headers, etc.
      // override the current request with the new one:
      return __return_true();
  }
  return $preempt;
}

add_filter( 'pre_http_request', 'filter_gravatar_request', 100, 3 );
