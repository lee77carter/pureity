<div style='padding:50px; margin:0 auto; background:#6C7A89;color:#fff;font-family:sans-serif,arial;font-size:17px; width:50%;'>
	<?php

	$lpp_file = include 'lpp_subscribers_list.csv'; 


	if (!empty($lpp_file)) {
		echo $lpp_file;
	}
	else {
		echo "No data found";
	}


	 ?>
</div>