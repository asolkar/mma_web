<?php
function referer_action () {
  $referer = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);

  //
  // Handle known referers:
  //  - HootSuite Tumblr App: tumblr.hootsuite.com
  //  - HootSuite identi.ca App: identica.heshapps.com
  //
  $actions = array(
    'tumblr.hootsuite.com' => array (
      'dest' => 'https://plus.google.com/u/0/105520984116791438743/posts',
      'dest_desc' => 'Tumblr App for HootSuite Google+ page',
      'nick' => 'Tumblr App for HootSuite'
    ),
    'identica.heshapps.com' => array (
      'dest' => 'https://plus.google.com/u/0/114762000736274390276/posts',
      'dest_desc' => 'identi.ca App for HootSuite Google+ page',
      'nick' => 'identi.ca App for HootSuite'
    ),
  );

  if (array_key_exists($referer, $actions)) {
?>
  <div id="refer_action" class="grid_12  alpha omega ">
    Here from <b><?php echo $actions[$referer]['nick'] ?></b>? Check out <a href="<?php echo $actions[$referer]['dest'] ?>"><?php echo $actions[$referer]['dest_desc'] ?></a> and engage!
  </div>
<?php
  }
}
?>
