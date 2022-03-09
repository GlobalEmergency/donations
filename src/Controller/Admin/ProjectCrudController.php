<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Project::class;
    }

//    public function configureFields(string $pageName): iterable
//    {
//        return [
////            IdField::new('id'),
//            CollectionField::new('project'),
//            TextField::new('name'),
//            TextEditorField::new('description'),
//            TextField::new('address'),
//            NumberField::new('longitude'),
//            NumberField::new('latitude')
//        ];
//    }
}
