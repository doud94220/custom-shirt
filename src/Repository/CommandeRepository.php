<?php
namespace Repository;

use Silex\Provider\SessionServiceProvider;
use Service\UserManager;
use Entity\Commande;
use Entity\User;
use DateTime;

/**
 * Description of CommandeRepository
 *
 * @author Julien
 */
class CommandeRepository extends RepositoryAbstract
{
     public function getTable(){
        return 'commande';
    }
    
    /**
     * cette fonction sert à chercher en base l'ensemble des commandes réalisées par un utilisateur
     * @return Commande
     */
    public function findAllByUser(User $user){ 
        $query = <<<EOS
SELECT c.*
FROM commande c
JOIN user u ON c.user_id = u.id_user
WHERE c.user_id = :id_user
ORDER BY id_commande DESC
EOS;
        
        $dbCommandes = $this->db->fetchAll(
            $query,
            [':id_user' => $id_user]
        );
        $commandes = []; // le tableau dans lequel vont être stockées les entités Article
        
        foreach($dbCommandes as $dbCommande){
            $commande = $this->buildFromArray($dbCommande);
            
            $commandes[] = $commande;
        }
        
        return $commandes; 
    }
    
    public function findAll(){
        $query = <<<EOS
SELECT *
FROM commande
ORDER BY id_commande DESC
EOS;
        
        $dbCommandes = $this->db->fetchAll($query);
        $commandes = [];
        
        foreach($dbCommandes as $dbCommande){
            $commande = $this->buildFromArray($dbCommande);
            
            $sommandes[] = $commande;
        }
        
        return $commandes;
    }
    
    public function save(){
        
    }
    
    /**
     * 
     * @param array $dbArticle
     * @return Article
     */
    public function buildFromArray(array $dbCommande){
        $commande = new Commande();
        
        $user = new User();
        
        $user
            ->setId_user($dbCommande['user_id'])
        ;
        
        $commande
            ->setId_commande($dbCommande['id_commande'])
            ->setPrix_livraison($dbCommande['prix_livraison'])
            ->setTotal($dbCommande['total'])
            ->setDate_commande(new DateTime($dbCommande['date_commande']))
            ->setEtat($dbCommande['etat'])
        ;
        
        return $commande;
    }
}
