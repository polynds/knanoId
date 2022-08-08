<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace Polynds\KNanoid;

class RandomGenerator implements RandomGeneratorInterface
{
    public function random(int $size): array
    {
        try {
            $string = \random_bytes($size);
        } catch (\Exception $e) {
            $string = '';
        }

        return unpack('C*', $string);
    }
}
