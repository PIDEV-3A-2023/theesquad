<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotNull;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('type' , ChoiceType::class,[
                'choices' => [
                    'Musculation' => 'Musculation',
                    'Tennis' => 'Tennis',
                    'Yoga'=> 'Yoga',
                    'Gymnastic'=> 'Gymnastic'
                ],
                #'placeholder' => 'Type'

            ])
            ->add('date' , DateType::class, [
                //'required' => true,
                'widget' => 'single_text',
                'constraints' => [
                    //  new DateTime(), // Vérifie que la valeur est une date valide
                    new NotNull(message: "vous devez mettre la date de l'événement!!!"),
                    new GreaterThan('today'), // Vérifie que la date est supérieure à la date actuelle
                ],
            ])
            ->add('adresse')
            ->add('description')
            ->add('image',FileType::class, [
                'label' => 'image',
                'mapped' => false,
                'required' => false,
                // 'constraints' => [
                //     new NotNull(),
                //  /*   new Image([
                //         'maxSize' => '5M',
                //         'mimeTypes' => ['image/jpeg', 'image/png', 'image/jpg'],
                //     ]),*/
                // ],
                'constraints' => [
                    new File([
                        'maxSize' => '2048k',
                        'mimeTypes' => [
                            'image/*',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image',
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
