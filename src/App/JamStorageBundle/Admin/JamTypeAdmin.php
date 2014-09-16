<?php
namespace App\JamStorageBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

class JamTypeAdmin extends Admin
{
  // Fields to be shown on create/edit forms
  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper
      ->add('id', null, array('label' => 'ID'))
      ->add('name', 'text', array('label' => 'Type Name'))
    ;
  }

  // Fields to be shown on filter forms
  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
      ->add('name', 'text', array('label' => 'Type Name'))
    ;
  }



  // Fields to be shown on lists
  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->addIdentifier('id')
      ->addIdentifier('text', null, array('label' => 'Текст'))
    ;
  }
}