<?php

namespace Repository;

class CustomRepository extends RepositoryAbstract
{
   public function getTable()
   {
       return 'custom';
   }

   public function save(Config $custom)
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

class UserRepository extends \Repository\RepositoryAbstract
{
    public function getTable()
    {
        return 'user';
    }
    
    public function save(User $user)
    {
        $data=[
                'id_user' => $user->getUser(),
                'tour_cou' => $user->getTour_cou(),
                'taille' => $user->getTaille(),
                'poids' => $user->getPoids(),
                'tour_poitrine' => $user->getTour_poitrine(),
                'tour_taille' => $user->getTour_taille(),
                'tour_bassin' => $user->getTour_bassin(),
                'manche_droite' => $user->getManche_droite(),
                'manche_gauche' => $user->getManche_gauche(),
                'poignet_droit' => $user->getPoignet_droit(),
                'poignet_gauche' => $user->getPoignet_gauche(),
                'carrure' => $user->getCarrure(),
                'dos' => $user->getDos()            
            ];
        $this->persist($data);
    }
}