<?php

namespace Annuaire\AnnuaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmployeeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civilite', 'choice', array('choices' => array('Mr' => "Monsieur", 'Mme' => 'Madame')),
                                                array('required' => false))
            ->add('nom', 'text')
            ->add('prenom', 'text')
            ->add('dateNaiss', 'date', array(
                'widget'        => 'single_text',
                'format'        => 'dd.MM.yyyy'
            ))
            ->add('adresse','text')
            ->add('complementAdr', 'text')
            ->add('ville', 'text')
            ->add('numTel')
            ->add('numPro')
            ->add('numBureau', 'text')
            ->add('email', 'email')
            ->add('numEmp','text')
            ->add('fonction', 'text')
            ->add('departement', 'text')
            ->add('localisation', 'choice', array('choices' => array('Akbou' => "Akbou", 'Alger' => 'Alger',
                                                                     'Constantine'=> 'Constantine', 'Biskra'=>'Biskra')),
                                                                     array('required' => false))
            ->add('nomService', 'text')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Annuaire\AnnuaireBundle\Entity\Employee'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'annuaire_annuairebundle_employee';
    }
}
