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
            'prenom' => $user->getPrenom(),
            'nom' => $user->getNom(),
            'date_naissance'=> $user->getDate_naissance(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'adresse' => $user->getAdresse(),
            'complement_adresse' => $user->getComplement_adresse(),
            'code_postal' => $user->getCode_postal(),
            'ville' => $user->getVille(),
            'tel' => $user->getTel(),
            'sexe' => $user->getSexe(),
            'statut' => $user->getStatut()
        ];
        
        $where = !empty($user->getId_user())
            ? ['id' => $user->getId_user()]
            : null
        ;
        
        $this->persist($data, $where);
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
    
    public function buildFromArray($dbUser){
        $user = new User();
        
        $user
            ->setId_user($dbUser['id_user'])
            ->setNom($dbUser['nom'])
            ->setPrenom($dbUser['prenom'])
            ->setEmail($dbUser['email'])
            ->setPassword($dbUser['password'])
            ->setAdresse($dbUser['adresse'])
            ->setComplement_adresse($dbUser['complement_adresse'])
            ->setCode_postal($dbUser['code_postal'])
            ->setVille($dbUser['ville'])
            ->setTel($dbUser['tel'])
            ->setSexe($dbUser['sexe'])
            ->setStatut($dbUser['statut'])
        ;
        
        return $user;
    }
}
