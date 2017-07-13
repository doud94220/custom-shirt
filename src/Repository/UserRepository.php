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
