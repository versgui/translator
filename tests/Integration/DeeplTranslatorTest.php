<?php

/*
 * This file is part of the PHP Translation package.
 *
 * (c) PHP Translation team <tobias.nyholm@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Translation\translator\tests\Integration;

use PHPUnit\Framework\TestCase;
use Translation\Translator\Service\DeeplTranslator;

/**
 * @author Guillaume Verstraete <versgui@gmail.com>
 */
class DeeplTranslatorTest extends TestCase
{
    public function testTranslate()
    {
        $key = getenv('DEEPL_KEY');
        if (empty($key)) {
            $this->markTestSkipped('No Deepl key in environment');
        }

        $translator = new DeeplTranslator($key);
        $result = $translator->translate('an apple', 'en', 'ru');
        $this->assertEquals('яблоко', $result);
    }
}
