<?php

$element = 256;

$current_page = 7;

if (!is_int($element)) {
	
}

if (!is_int($current_page)) {
	
}

if ($element < 1) {
	
}

if ($current_page < 1) {
	
}



$element_page = 10;

$page_block = 5;



$first_page = 1;

$last_page = ceil($element / $element_page);

if ($current_page > $last_page) {
	
}

$prev_page = $current_page - 1;
if ($prev_page < $first_page) {
	$prev_page = NULL;
}

$next_page = $current_page + 1;
if ($next_page > $last_page) {
	$next_page = NULL;
}

$prev_block = $current_page - $page_block;
if ($prev_block < $first_page) {
	$prev_block = NULL;
}

$next_block = $current_page + $page_block;
if ($next_block > $last_page) {
	$next_block = NULL;
}

$begin_page = $current_page - floor($page_block / 2);
if ($begin_page < $first_page) {
	$begin_page = $first_page;
}

$end_page = $begin_page + $page_block - 1;
if ($end_page > $last_page) {
	$end_page = $last_page;
}

$begin_element = ($current_page - 1) * $element_page + 1;

$end_element = $begin_element + $element_page - 1;

?>