<?php

namespace App\Form\Extension;

use App\Entity\Supplier;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('supplier', EntityType::class, [
                'class' => Supplier::class,
                'choice_label' => 'name',
                'label' => 'app.ui.supplier',
            ])
            ;
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}

