<?php

namespace App\Controller\Admin;

use App\Entity\Apropos;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AProposCrudContoller extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Apropos::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre '),
            TextField::new('subtitle', 'Sous titre'),
            TextareaField::new('description', 'Description'),

        ];
    }

}
