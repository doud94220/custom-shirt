<?php
namespace Repository;

use Entity\Commande;
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
    
    public function findAllById($user_id){
        
    }
}
