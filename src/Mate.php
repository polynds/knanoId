<?php

declare(strict_types=1);
/**
 * happy coding.
 */
namespace Polynds\KNanoid;

class Mate
{
    /**
     * 安全的符号.
     */
    public const SAFE_SYMBOLS = '_+-0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    /**
     * 生成id位数.
     */
    protected const SIZE = 21;

    /**
     * 随机值生成器.
     */
    protected RandomGeneratorInterface $randomGenerator;

    protected int $size;

    protected string $alphabet;

    public function __construct()
    {
        $this->randomGenerator = new RandomGenerator();
        $this->size = self::SIZE;
        $this->alphabet = self::SAFE_SYMBOLS;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size > 0 ? $size : self::SIZE;
        return $this;
    }

    public function getAlphabet(): string
    {
        return $this->alphabet;
    }

    public function setAlphabet(string $alphabet): self
    {
        $this->alphabet = $alphabet;
        return $this;
    }

    public function getRandomGenerator(): RandomGeneratorInterface
    {
        return $this->randomGenerator;
    }

    public function setRandomGenerator(RandomGeneratorInterface $randomGenerator): self
    {
        $this->randomGenerator = $randomGenerator;
        return $this;
    }
}
