<?php

namespace App\Controller\Admin;

use App\Entity\Publication;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PublicationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Publication::class;
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
