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
require_once('web_lib/simplepie/SimplePie.compiled.php');
require_once('web_lib/functions.php');
require_once('functions.php');

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
  <script src="jquery.js"></script>
  <script src="web_lib/functions.js"></script>

  <script>

  $(document).ready(function(){
    latest_twitter_status();
    twitter_feed();
    github_repos();
    blog_feed();
  });

  </script>
</head>
<body>

<!-- Header -->
<div id="header" class="container_12">

  <!-- My twitter feed - http://twitter.com/statuses/user_timeline/12420422.rss -->
  <div id="twitter_status" class="grid_12 ">
  </div>

</div>

<!-- Content -->
<div id="content" class="container_12">

  <div id="logo_image" class="grid_12 ">
  mahesha<span id="dot">&#8226;</span>com
  </div>

  <?php referer_action() ?>

  <div id="my_feeds" class="grid_12 alpha omega feed_collection">
    <div id="twitter_feed" class="grid_4 alpha feed">
    </div>
    <div id="github_repos" class="grid_4 feed">
    </div>
    <div id="blog_feed" class="grid_4 omega feed">
    </div>
  </div>

</div>

<!-- Footer -->
<div id="footer" class="container_12">
2011 &copy; Mahesh Asolkar
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

<!-- Google Analytics -->
<script src="http://www.google-analytics.com/urchin.js"
        type="text/javascript">
</script>
<script type="text/javascript">
//<![CDATA[
_uacct = "UA-70930-1";
urchinTracker();
//]]>
</script>

</body>
</html>
<?php
//
// End the page
//
?>
