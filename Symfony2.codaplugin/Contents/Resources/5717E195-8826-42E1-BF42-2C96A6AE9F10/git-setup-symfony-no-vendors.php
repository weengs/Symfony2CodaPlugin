#!/usr/bin/php
<?php

$sitepath = getenv('CODA_SITE_LOCAL_PATH');

if ($sitepath) {
  chdir($sitepath);
  
  $commands = array(
  	'git clone http://github.com/symfony/symfony-standard.git',
  	'cd symfony-standard',
  	'git checkout tags/v2.0.10',
  	'cd ..',
  	'mv symfony-standard/* . ',
  	'rm -rf .git',
  	'rm -rf symfony-standard'
    );
    
  echo "<pre>";  
  foreach ($commands as $k => $v) {
  	exec($v, $out);
  	
  	foreach ($out as $key => $value) {
  	  	 echo $value . "\n";
  	  }
  }
  echo "</pre>";

}
?>