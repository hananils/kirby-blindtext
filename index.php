<?php

use Kirby\Cms\App as Kirby;
use Kirby\Filesystem\F;

/**
 * Returns a filler text.
 *
 * @param $name The name of the filler text.
 */
function blindtext(string $name = 'lorem')
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
            'A filler file named "' . $name . '" does not exist.'
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
        /**
         * Returns a filler text.
         *
         * @param $name The name of the filler text.
         */
        'blindtext' => function (string $name = 'lorem') {
            return blindtext($name);
        }
    ],
    'pageMethods' => [
        /**
         * Returns a filler text.
         *
         * @param $name The name of the filler text.
         */
        'blindtext' => function (string $name = 'lorem') {
            return blindtext($name);
        }
    ],
    'userMethods' => [
        /**
         * Returns a filler text.
         *
         * @param $name The name of the filler text.
         */
        'blindtext' => function (string $name = 'lorem') {
            return blindtext($name);
        }
    ],
    'collectionMethods' => [
        /**
         * Returns a filler text.
         *
         * @param $name The name of the filler text.
         */
        'blindtext' => function (string $name = 'lorem') {
            return blindtext($name);
        }
    ]
]);
