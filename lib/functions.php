<?php
//  Copyright 2011 Mahesh Asolkar
//
//  Licensed under the Apache License, Version 2.0 (the "License");
//  you may not use this file except in compliance with the License.
//  You may obtain a copy of the License at
//
//      http://www.apache.org/licenses/LICENSE-2.0
//
//  Unless required by applicable law or agreed to in writing, software
//  distributed under the License is distributed on an "AS IS" BASIS,
//  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
//  See the License for the specific language governing permissions and
//  limitations under the License.

//
// Library of functions
//

function http_doc_type() {
  echo '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
}

function show_feed($feed_url) {
  $feed = new SimplePie($feed_url);
  $feed->handle_content_type();

  $feed_out = '';

  $feed_out .= '<a href="' . $feed->get_link() . '"'
            . ' title="' . $feed->get_description()
            . '"><h3><img src="' . $feed->get_favicon() . '"> '
            . $feed->get_title() . '</h3></a>' . "\n" . '<ul>' . "\n";
  foreach ($feed->get_items(0, 10) as $item) {
    $feed_out .= '  <li><a href="' . $item->get_permalink() . '">'
              . $item->get_title() . '</a> <span style="font-size:x-small;color: #aaa">'
              . $item->get_date() . '</span></li>' . "\n";
  }
  $feed_out .= '</ul>' . "\n";

  return $feed_out;
}
?>
