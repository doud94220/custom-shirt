<?php

namespace Repository;

use Entity\Custom;


class CustomRepository extends RepositoryAbstract
{
   public function getTable()
   {
       return 'custom';
   }

   // Enregistrement des informations principales de configuration en base de donnée
   public function save(Custom $custom)
   {
       $data=[
              'id_config' => $custom->getId_config(),
              'tissu_id' => $custom->getTissu_id(),
              'bouton_id' => $custom->getButton_id(),
              'col' => $custom->getCol(),
              'coupe' => $custom->getCoupe(),
              'prix' => $custom->getPrix()
            ];
       $this->persist($data);
   }     
}
