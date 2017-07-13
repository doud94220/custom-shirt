<?php
namespace Repository;

/**
 * Description of DetailCommandeRepository
 *
 * @author Julien
 */
class DetailCommandeRepository extends RepositoryAbstract
{
     public function getTable(){
        return 'detail_commande';
    }
}
