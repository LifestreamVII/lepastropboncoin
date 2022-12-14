<?php

namespace App\Form;

use App\Entity\Annonce;
use App\Entity\Tag;
use App\Repository\TagRepository;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Count;
use Symfony\Component\Validator\Constraints\All;

class AnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('prix')
            ->add('description')
            ->add('file',FileType::class, array(
                'multiple'    => true,
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new All([
                        new Image([
                            'maxSize' => '2M',
                            'maxSizeMessage' => 'Filesize too large.'
                        ])
                    ])
                    ],
                'attr' => array(
                    'accept' => 'image/*',
                )
            )
            )
            ->add('tags', EntityType::class, [
                'class' => Tag::class,
                'query_builder' => function (TagRepository $tagRepository) {
                    return $tagRepository->createQueryBuilder('t')
                        ->orderBy('t.libelle', 'ASC')
                        ->setMaxResults(10);
                },
                'choice_label' => 'libelle',
                'multiple' => true,
                'mapped' => false,
                'constraints' => new Count(null, 1, 3),
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
        ]);
    }
}
