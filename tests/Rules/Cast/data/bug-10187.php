<?php

namespace Bug10187;

function inc(string $n): string
{
	$before = $n;
	$after = ++$n;

	return (string)$after; // No warnings expected here
}
