<?php declare(strict_types=1);

namespace WyriHaximus\Tests\Psr7;

use ApiClients\Tools\TestUtilities\TestCase;
use RingCentral\Psr7\Response;
use function WyriHaximus\Psr7\asciiArtHeaders;

final class AsciiArtHeadersTest extends TestCase
{
    public function testAsciiArtHeader()
    {
        $header = 'X-Alpha';
        $lines = ['a', 'b', 'c'];
        $message = new Response();
        $message = asciiArtHeaders($message, $header, ...$lines);

        self::assertSame([
            $header => $lines,
        ], $message->getHeaders());
    }
}
