<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace Polynds\KNanoid;

interface RandomGeneratorInterface
{
    /**
     * @return string[]
     */
    public function random(int $size): array;
}
