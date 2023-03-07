<?php

namespace App\Form;

use App\Entity\Objectif;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;


class ObjectifFront extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $defaultCalCons = 20;






        $builder
            ->add('PoidsDes')
            ->add('TypeReg')
            ->add('CalCons',HiddenType::class, [

                    'data' => $defaultCalCons]
            )
            ->add('Age')
            ->add('Sexe')
            ->add('Poids')
            ->add('Taille')




        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Objectif::class,
        ]);
    }
}
