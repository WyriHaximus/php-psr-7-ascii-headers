<?php declare(strict_types=1);

namespace WyriHaximus\Psr7;

use Psr\Http\Message\MessageInterface;

function asciiArtHeaders(MessageInterface $message, string $header, string ...$lines): MessageInterface
{
    foreach ($lines as $line) {
        $message = $message->withAddedHeader($header, $line);
    }

    return $message;
}
