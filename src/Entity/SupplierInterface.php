<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Sylius\Component\Resource\Model\ResourceInterface;

interface SupplierInterface extends ResourceInterface
{
    public function getName(): ?string;
    public function setName(?string $name): void;
    public function getEmail(): ?string;
    public function setEmail(?string $email): void;
    public function getState(): string;
    public function setState($state): void;
    public function getProducts(): Collection;
    public function countProducts(): int;
}
