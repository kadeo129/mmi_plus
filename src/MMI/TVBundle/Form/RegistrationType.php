<?php
// src/AppBundle/Form/RegistrationType.php

namespace MMI\TVBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('studentNumber');
        $builder->add('lastName');
        $builder->add('firstName');
        $builder->add('photo');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

//    // For Symfony 2.x
//    public function getName()
//    {
//        return $this->getBlockPrefix();
//    }
}