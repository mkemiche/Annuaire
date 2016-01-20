<?php
namespace Annuaire\AnnuaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RechercheType extends AbstractType
{
    public function buildForm(FormbuilderInterface $builder, array $option)
    {
        $builder
            ->add('recherche','text', array('label' => TRUE,
                                                'attr' => array('class' => 'input-medium search-query ')));
    }

    public function getName()
    {
        return 'annuaire_annuairebundle_recherche';
    }
}