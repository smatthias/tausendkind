<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class UserAdminController extends Controller
{
    public function ListAction() {
        $object = $this->admin->getSubject();

        return $this->render('SonataAdminBundle:CRUD:list.html.twig');
    }
}
