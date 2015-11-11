<?php 
	$s1	= '{"a":"1"}';
#	print "$s1";
	$j1	= json_decode( $s1 );
	
	$j1->{"b"}	= 2;

	$s_out_1	= json_encode( $j1 );
	print $s_out_1;
 ?> 
