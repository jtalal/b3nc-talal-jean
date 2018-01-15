<?php

function getTitle(){
	return '12 Days of Christmas';
}

function getLyrics($day){
	$days = array('first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 'tenth', 'eleventh', 'twelfth');

	$gifts = array(
		'a partridge in a pear tree',
		'two turtle doves',
		'three french hens',
		'four calling birds',
		'five golden rings',
		'six geese a laying',
		'sevens swans a swimming',
		'eight maids a milking',
		'nine ladies dancing',
		'ten lords a leaping',
		'eleven pipers piping',
		'twelve drummers drumming'
	);

	return "On the ". $days[$day] . " day of Christmas my true love sent to me, <br> " . $gifts[$day] . "<br>";
}



