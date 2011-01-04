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
require_once('lib/simplepie.inc');
require_once('lib/functions.php');

//
// Start the page
//
http_doc_type();

?>
<html>
<head>
  <title>Welcome to mahesha.com</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="description" content="Mahesh Asolkar's Home page. This links to his blog and other stuff on the website" />
  <meta name="keywords" content="Mahesh Asolkar, technology, art, linux, open source, mozilla, apple, music, photography" />
</head>
<body>
  <h1>Welcome to mahesha.com</h1>

<?php
  echo show_feed('http://api.flickr.com/services/feeds/photos_public.gne?id=61292480@N00');
  echo show_feed("http://feeds2.feedburner.com/mahesha/tech");
  echo show_feed("http://twitter.com/statuses/user_timeline/12420422.rss");
  echo show_feed("https://github.com/asolkar.atom");
?>
</body>
</html>
<?php
//
// End the page
//
?>
