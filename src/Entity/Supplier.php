<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="app_supplier")
 */
class Supplier implements SupplierInterface
{
    public const STATE_NEW = 'new';
    public const STATE_TRUSTED = 'pending';
    /**
     * @var int|null
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private ?int $id;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string")
     */
    private ?string $name;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string"))
     */
    private ?string $email;

    /**
     * @var string
     *
     * @ORM\Column(type="string"))
     */
    private string $state = self::STATE_NEW;

    /**
     * @var Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Product\Product", mappedBy="supplier")
     */
    private Collection $products;

    /**
     * @return mixed
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->state = $state;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function setProducts(Collection $products): void
    {
        $this->products = $products;
    }

    public function countProducts(): int
    {
        return $this->products->count();
    }
}
