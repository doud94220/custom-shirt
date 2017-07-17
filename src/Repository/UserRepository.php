<?php
namespace Repository;

use Entity\User;

class UserRepository extends RepositoryAbstract
{
    public function getTable() {
        return 'user';
    }
    
    public function save(User $user){
        $data = [
            'firstname' => $user->getFirstname(),
            'lastname' => $user->getLastname(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'role' => $user->getRole()
        ];
        
        $where = !empty($user->getId())
            ? ['id' => $user->getId()]
            : null
        ;
        
        $this->persist($data, $where);
    }
 
    public function saveMeasures(User $user)
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

    
    public function findByEmail($email){
        $dbUser = $this->db->fetchAssoc(
            'SELECT * FROM user WHERE email = :email',
            [':email' => $email]
        );
        
        if(!empty($dbUser)){
            return $this->buildFromArray($dbUser);
        }
        
        return null;
    }
    
    
    
    
    
    // Hydratation de l'objet User
    public function buildFromArray($dbUser){
        $user = new User();
        
        $user
            ->setId($dbUser['id'])
            ->setLastname($dbUser['lastname'])
            ->setFirstname($dbUser['firstname'])
            ->setEmail($dbUser['email'])
            ->setPassword($dbUser['password'])
            ->setRole($dbUser['role'])
        ;
        
        return $user;
    }
}
