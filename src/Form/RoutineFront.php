<?php

namespace App\Form;

use App\Entity\Aliment;
use App\Entity\Objectif;
use App\Entity\Routine;
use App\Repository\AlimentRepository;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;






use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Config\Doctrine\Orm\EntityManagerConfig;
use Doctrine\ORM\EntityManagerInterface;



class RoutineFront extends AbstractType
{





    public function buildForm(FormBuilderInterface $builder, array $options): void
    {



        $defaultCalCons = 0;


        $builder



         ->add('Dejeuner',EntityType::class,['class'=>Aliment::class,'choice_label'=>'Nom'])
        ->add('Midi',EntityType::class,['class'=>Aliment::class,'choice_label'=>'Nom'])
        ->add('Dinner',EntityType::class,['class'=>Aliment::class,'choice_label'=>'Nom'])
            ->add('CalCons',HiddenType::class, [

                    'data' => $defaultCalCons]
                )

        ->add('Date')
        ->add('objectif', EntityType::class,['class' => Objectif::class, 'choice_label' => 'id' ])


        ;
    }



    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Routine::class,
        ]);
    }
}
