<?php

namespace ProjectBundle\Repository;

/**
 * InvestissementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class InvestissementRepository extends \Doctrine\ORM\EntityRepository
{
    public function afficherMesProjetInvesstment($id)
    {
        $em= $query=$this->getEntityManager();
        $RAW_QUERY = "SELECT i.id_investissement, i.montant, i.numcarteBancaire, i.id_projet, i.id_invesstisseur, i.date_invesstissement FROM investissement i JOIN projet p ON i.id_projet=p.id_projet JOIN users u ON i.id_invesstisseur=u.id  WHERE  p.id_entreprise=:id";

        $statement=$em->getConnection()->prepare($RAW_QUERY);
        $statement->bindValue('id',$id);
        $statement->execute();
        $result=$statement->fetchAll();

        return $result;

    }
}
