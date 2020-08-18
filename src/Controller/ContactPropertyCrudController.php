<?php

namespace App\Controller;

use App\Entity\ContactProperty;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ContactPropertyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ContactProperty::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
