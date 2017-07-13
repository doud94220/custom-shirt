<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 13/07/2017
 * Time: 11:11
 */

namespace Controller;


class ProduitController extends ControllerAbstract
{

    public function listAction()
    {
        $produit = $this->app['produit.repository']->findAll();

        return $this->render(
            'admin/article/list.html.twig',
            ['articles' => $articles]
        );
    }
}