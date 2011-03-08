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
// Include library of functions
//
require_once('lib/simplepie/SimplePie.compiled.php');
require_once('lib/functions.php');

//
// Start the page
//
http_doc_type();

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Welcome to mahesha.com</title>
  <link rel="stylesheet" type="text/css" href="reset.css">
  <link rel="stylesheet" type="text/css" href="grid.css">
  <link rel="stylesheet" type="text/css" href="screen.css">
</head>
<body>

<!-- Header -->
<div id="header" class="container_12">

  <div id="twitter_status" class="grid_12 ">
<?php
  echo first_from_feed("http://twitter.com/statuses/user_timeline/12420422.rss");
?>
  </div>

</div>

<!-- Content -->
<div id="content" class="container_12">

  <!-- div id="logo_image" class="grid_12 ">
  </div -->


  <div id="my_feeds" class="grid_12 alpha omega">
    <div class="grid_4 alpha">
<?php echo show_feed("http://feeds2.feedburner.com/mahesha/tech", 'My <span class="flair">Blog</span>'); ?>
    </div>
    <div class="grid_4">
<?php echo show_feed("https://github.com/asolkar.atom"); ?>
    </div>
    <div class="grid_4 omega">
<?php echo show_feed('http://api.flickr.com/services/feeds/photos_public.gne?id=61292480@N00'); ?>
    </div>
    <div class="grid_12 alpha omega">
<?php echo show_feed("http://twitter.com/statuses/user_timeline/12420422.rss"); ?>
    </div>
  </div>

</div>

<!-- Footer -->
<div id="footer" class="container_12">

  <div id="site_meta" class="grid_12 ">
<?php
if ($_SERVER['HTTP_DNT'] == 1) {
?>
<span id="will_not_track" title="DNT=1!">OK! I won't track you... ever!</span>
<?php
}
?>
  </div>

</div>

</body>
</html>
<?php
//
// End the page
//
?>
