<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace Polynds\KNanoid;

final class NanoIdGenerator implements NanoIdGeneratorInterface
{
    public function generateId(?Mate $mate = null): string
    {
        $mate = $this->getMate($mate);

        $len = strlen($mate->getAlphabet());
        $mask = (2 << (int) (log($len - 1) / M_LN2)) - 1;
        $step = (int) ceil(1.6 * $mask * $mate->getSize() / $len);
        $id = '';
        while (true) {
            $bytes = $mate->getRandomGenerator()->random($step);
            foreach ($bytes as $byte) {
                $byte &= $mask;
                if (isset($mate->getAlphabet()[$byte])) {
                    $id .= $mate->getAlphabet()[$byte];
                    if (strlen($id) === $mate->getSize()) {
                        return $id;
                    }
                }
            }
        }
    }

    private function getMate(?Mate $mate): Mate
    {
        return $mate ?? new Mate();
    }
}
