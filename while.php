<?php

while (1) 

  {
	$mrr->put("/rental",$parms);
	echo date('h:i:s') . "\n";
  sleep(30);
  }

?>