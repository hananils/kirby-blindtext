<?php

use Kirby\Cms\App as Kirby;
use Kirby\Filesystem\F;

/**
 * Blindtext
 */

function blindtext($name = 'lorem')
{
	$file = __DIR__ . '/texts/' . $name . '.php';

	if (!$name || !F::exists($file)) {
		throw new Exception(
			'A dummy text file named "' . $name . '" does not exist.'
		);
	}

	return F::read($file);
}

Kirby::plugin('hananils/blindtext', [
	'pageMethods' => [
		'blindtext' => function ($name = 'lorem') {
			return blindtext($name);
		}
	]
]);
