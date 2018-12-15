<?php

namespace CoreBundle\Entitites;

class Products
{
    /**
     * @var int $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var float $amount
     */
    private $amount;

    /**
     * @var string $code
     */
    private $code;

    /**
     * @var int $size
     */
    private $size;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param string $name
     *
     * @return Products
     */
    public function setName(string $name): Products
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param float $amount
     *
     * @return Products
     */
    public function setAmount(float $amount): Products
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param string $code
     *
     * @return Products
     */
    public function setCode(string $code): Products
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $size
     *
     * @return Products
     */
    public function setSize(string $size): Products
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }
}