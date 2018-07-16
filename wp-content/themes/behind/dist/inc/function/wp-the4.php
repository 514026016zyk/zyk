<?php

function the4_if_empty($var_name,$before='',$after=''){

	if(!empty($var_name)){
		echo $before.$var_name.$after;
	}

}


?>
