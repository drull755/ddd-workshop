<?php

declare(strict_types=1);

namespace Billing\Domain\Aggregate;

use Money\Money;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 * Class Item
 *
 * @author Dmytro Naumenko <d.naumenko.a@gmail.com>
 */
final class Item
{
    /**
     * @var UuidInterface
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var Money
     */
    private $price;

    private function __construct()
    {
    }

    public static function new(string $name, Money $price): Item
    {
        $item = new self();
        $item->id = Uuid::uuid4();
        $item->name = $name;
        $item->price = $price;

        return $item;
    }

    /**
     * @return UuidInterface
     */
    public function id(): UuidInterface
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return Money
     */
    public function price(): Money
    {
        return $this->price;
    }
}
