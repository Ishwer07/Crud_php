<?php
	$a=array("a"=>"5","b"=>5,"c"=>"5");
	echo array_search(5,$a,true);

	$people = array("Peter", "Joe", "Glenn", "Cleveland");

	if (in_array("Glenn", $people))
	{
		echo "Match found";
	}
	else
	{
		echo "Match not found";
	}
?>