<?php
namespace App\Controller;

use Symfony\Component\Form\AbstractType;
// use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class FormCustomCode extends AbstractType
{

	public function configureOptions(OptionsResolver $resolver)
  {
      $resolver->setDefaults(array(
				// 'label' => '<!-- custom HTML field type -->',
        // 'html' => '<!-- custom HTML field type -->',
      ));
			// $resolver->setRequired(array('html'));
  }

  // public function getParent()
  // {
  //     return HiddenType::class;
  // }

	// public function getName()
  // {
  //     return 'formcustomcode';
  // }
	public function getBlockPrefix()
 {
		 return 'formcustomcode';
 }
}
