<?php


namespace Repository;

use Entity\Tissu;

class TissuRepository extends RepositoryAbstract
{
      public function getTable()
   {
       return 'tissu';
   }    
    
    public function findAllTissu()
   {
              $query = <<<EOS
SELECT *
FROM tissu
ORDER BY id_tissu DESC
EOS;

//EOS = END of String
// Syntaxe Heredoc
       $dbTissus = $this->db->fetchAll($query);
       $fabrics = [];
       
       foreach($dbTissus as $dbTissu)
       {
           $fabric = $this->buildFromArray($dbTissu);
           $fabrics[] = $fabric;
       } 
       return $fabrics;
   }
   
    public function buildFromArray(array $dbTissu)
    {
        $tissus = new Tissu();
//        var_dump($dbTissu);
        $tissus
            ->setId_tissu($dbTissu['id_tissu'])
            ->setTitre($dbTissu['titre'])
            ->setStock($dbTissu['stock'])
            ->setDescription($dbTissu['description'])
            ->setPhoto($dbTissu['photo'])
            ->setPrix($dbTissu['prix'])
        ;
        return $tissus;
    }
}
