<?php

namespace App\Controller\Admin;

use App\Entity\Place;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PlaceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Place::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('project'),
            ChoiceField::new('type')->setChoices([
                Place::TYPE_RECEPTION => Place::TYPE_RECEPTION,
                Place::TYPE_WAREHOUSE => Place::TYPE_WAREHOUSE
            ]),
            TextField::new('name'),
            TextEditorField::new('description'),
            TextField::new('address'),
            NumberField::new('longitude'),
            NumberField::new('latitude'),
            TextField::new('contactName'),
            TextField::new('contactPhone'),
            TextField::new('contactEmail')
        ];
    }

}
