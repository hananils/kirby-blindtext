<?php

use Kirby\Cms\App as Kirby;
use Kirby\Filesystem\F;

/**
 * Blindtext
 */

function blindtext($name = 'lorem')
{
	// Get file
	$file = null;
	$paths = [kirby()->root('site'), __DIR__];
	foreach ($paths as $path) {
		$filename = $path . '/fillers/' . $name . '.md';
		if (F::exists($filename)) {
			$file = F::read($filename);
		}
	}

	// File missing
	if (!$file) {
		throw new Exception(
			'A dummy text file named "' . $name . '" does not exist.'
		);
	}

	// Typographer available
	if (function_exists('typographer')) {
		return typographer(markdown($file));
	}

	return markdown($file);
}

Kirby::plugin('hananils/blindtext', [
	'siteMethods' => [
		'blindtext' => function ($name = 'lorem') {
			return blindtext($name);
		}
	],
	'pageMethods' => [
		'blindtext' => function ($name = 'lorem') {
			return blindtext($name);
		}
	],
	'userMethods' => [
		'blindtext' => function ($name = 'lorem') {
			return blindtext($name);
		}
	],
	'collectionMethods' => [
		'blindtext' => function ($name = 'lorem') {
			return blindtext($name);
		}
	]
]);
