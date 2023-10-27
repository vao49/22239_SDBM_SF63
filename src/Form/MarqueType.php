<?php

namespace App\Form;

use App\Entity\Marque;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Translation\TranslatableMessage;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MarqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomMarque', TextType::class,  [
                'label' => new TranslatableMessage('nomMarque'),
                'label_attr' => ['class' => 'fw-bold'],
                'attr' => ['class' => 'form-control']
            ])
            ->add('idFabricant', null,  [
                'label' => new TranslatableMessage('idFabricant'),
                'label_attr' => ['class' => 'fw-bold'],
                'attr' => ['class' => 'form-select']
            ])
            ->add('idPays', null,  [
                'label' => new TranslatableMessage('idPays'),
                'label_attr' => ['class' => 'fw-bold'],
                'attr' => ['class' => 'form-select']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Marque::class,
        ]);
    }
}