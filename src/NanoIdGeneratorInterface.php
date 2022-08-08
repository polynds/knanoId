<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace Polynds\KNanoid;

interface NanoIdGeneratorInterface
{
    public function generateId(?Mate $mate): string;
}
