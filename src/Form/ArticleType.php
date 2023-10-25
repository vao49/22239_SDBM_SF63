<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Translation\TranslatableMessage;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomArticle', TextType::class,  [
                'label' => new TranslatableMessage('nomArticle'),
                'label_attr' => ['class' => 'fw-bold'],
                'attr' => ['class' => 'form-control']
            ])
            ->add('prixAchat',NumberType::class,[

                'label' => new TranslatableMessage('prixAchat'),
                'label_attr' => ['class' => 'fw-bold'],
                'attr' => ['class' => 'form-control']
            ])
            ->add('volume',IntegerType::class,[

                'label' => new TranslatableMessage('volume'),
                'label_attr' => ['class' => 'fw-bold'],
                'attr' => ['class' => 'form-control']
            ])
            ->add('titrage',NumberType::class,[

                'label' => new TranslatableMessage('titrage'),
                'label_attr' => ['class' => 'fw-bold'],
                'attr' => ['class' => 'form-control']
            ])
            ->add('idType',null,[

                'label' => new TranslatableMessage('nomType'),
                'label_attr' => ['class' => 'fw-bold'],
                'attr' => ['class' => 'form-select']
            ])
            ->add('idCouleur',null,[

                'label' => new TranslatableMessage('nomCouleur'),
                'label_attr' => ['class' => 'fw-bold'],
                'attr' => ['class' => 'form-select']
            ])
            ->add('idMarque',null,[

                'label' => new TranslatableMessage('nomMarque'),
                'label_attr' => ['class' => 'fw-bold'],
                'attr' => ['class' => 'form-select']
            ])
            // ->add('annee')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}