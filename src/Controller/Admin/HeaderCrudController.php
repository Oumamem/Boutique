<?php

namespace App\Controller\Admin;

use App\Entity\Header;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class HeaderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Header::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre du header'),
            TextareaField::new('content', 'Contenu du header'),
            TextField::new('btnTitle', 'Titre du bouton'),
            TextField::new('btnUrl', 'Url de destination du bouton  '),
            ImageField::new('illustration')
                // Chemin pour les uploads d'images
                ->setUploadDir('public/uploads/images/products')
                // J'indique à EasyAdmin où chercher les images
                ->setBasePath('uploads/images/products')
                ->setUploadedFileNamePattern('[contenthash].[extension]')
                ->setFormTypeOptions(['required' => false]),
        ];
    }

}
