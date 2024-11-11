<?php

use Kirby\Cms\App as Kirby;
use Kirby\Content\Field;
use Kirby\Filesystem\F;

/**
 * Returns a filler text.
 *
 * @param $name The name of the filler text.
 */
function blindtext(string $name = 'lorem')
{
    if ($name === '') {
        throw new Exception('No filler defined.');
    }

    // Get filler text
    $text = null;
    $paths = [kirby()->root('site'), __DIR__];
    foreach ($paths as $path) {
        $filename = $path . '/fillers/' . $name . '.md';

        if (F::exists($filename)) {
            $text = F::read($filename);

            break;
        }
    }

    // Text missing
    if (!$text) {
        throw new Exception(
            'A filler file named "' . $name . '" does not exist.'
        );
    }

    // Create field instance
    $field = new Field(site(), 'blindtext', $text);

    return $field->markdown();
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
