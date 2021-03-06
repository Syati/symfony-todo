<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * TodoType
 *
 */
class TodoType extends AbstractType
{
    /**
     * Builds the Todo Form
     *
     * @param  FormBuilderInterface $builder
     * @param  array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', [
                'label' => 'Subject',
                'attr' => [
                    'class' => 'm-input'
                ]])
            ->add('description', 'text', [
                'attr' => [
                    'class' => 'm-input'
                ]])
            ->add('submit', 'submit');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Todo'
        ));
    }
}
