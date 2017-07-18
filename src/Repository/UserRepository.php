<?php
/**
 * Created by Formateur
 * Date: 07/07/2017
 * Time: 12:25
 */

namespace Repository;

use Entity\User;


/**
 * Class UserRepository
 * @package Repository
 */
class UserRepository extends RepositoryAbstract
{
    public function getTable()
    {
        return 'user';
    }

    public function save(User $user)
    {
        $data = [
            'prenom' => $user->getPrenom(),
            'nom' => $user->getNom(),
            'date_naissance' => $user->getDateNaissance(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'adresse' => $user->getAdresse(),
            'complement_adresse' => $user->getComplementAdresse(),
            'code_postal' => $user->getCodePostal(),
            'ville' => $user->getVille(),
            'tel' => $user->getTel(),
            'sexe' => $user->getSexe()
        ];

        $where = !empty($user->getId())
            ? ['id' => $user->getId()]
            : null
        ;

        $this->persist($data, $where);
    }

    public function findByEmail($email)
    {
        $dbUser = $this->db->fetchAssoc(
            'SELECT * FROM user WHERE email = :email',
            [':email' => $email]
        );

        if (!empty($dbUser)) {
            return $this->buildFromArray($dbUser);
        }

        return null;
    }

    /**
     * @param array $dbUser
     * @return User
     */
    public function buildFromArray(array $dbUser)
    {
        $user = new User();

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
}
