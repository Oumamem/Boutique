<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            // propertyName = champs de notre Entity
            TextField::new('name'),
            // setTargetFieldName -> permet au slug de se baser sur le nom du produit pour générer un slug
            SlugField::new('slug')->setTargetFieldName('name'),
            ImageField::new('illustration')
                // Chemin pour les uploads d'images (obligation d'indiquer le chemin complet)
                ->setUploadDir('public\uploads\images\products')
                // J'indique à EasyAdmin où chercher les images
                ->setBasePath('public\uploads\images\products')
                // Méthode qui permet d'encoder le nom de nos fichiers images
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            TextField::new('subtitle'),
            TextareaField::new('description'),
            BooleanField::new('isBest'),
            // Type pour les prix
            // Indiquer le type de monnaie pour utiliser le Money Type avec méthode setCurrency
            MoneyField::new('price')->setCurrency('EUR'),
            // Type pour les catégories
            AssociationField::new('category'),
        ];

    }

}
