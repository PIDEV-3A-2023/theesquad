<?php

namespace App\Form;

use App\Entity\Aliment;
use App\Entity\Objectif;
use App\Entity\Routine;
use App\Repository\AlimentRepository;





use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Config\Doctrine\Orm\EntityManagerConfig;
use Doctrine\ORM\EntityManagerInterface;



class Routine1Type extends AbstractType
{





    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('Dejeuner',EntityType::class,['class'=>Aliment::class,'choice_label'=>'Nom'])
            ->add('Midi',EntityType::class,['class'=>Aliment::class,'choice_label'=>'Nom'])
            ->add('Dinner',EntityType::class,['class'=>Aliment::class,'choice_label'=>'Nom'])
            ->add('CalCons')
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
