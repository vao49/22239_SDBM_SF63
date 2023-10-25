<?php

namespace App\Form;

use App\Entity\Vendre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Translation\TranslatableMessage;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class VendreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('annee', IntegerType::class, [
                'label' => new TranslatableMessage('annee'),
            ])
            ->add('numeroTicket', IntegerType::class,[

                'label' => new TranslatableMessage('numeroTicket'),
            ])
            ->add('idArticle', null,[

                'label' => new TranslatableMessage('nomArticle'),
            ])
            ->add('prixVente',NumberType::class,[

                'label' => new TranslatableMessage('prixVente'),
            ])
            ->add('quantite',IntegerType::class,[

                'label' => new TranslatableMessage('quantite'),
            ])


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vendre::class,
        ]);
    }
}