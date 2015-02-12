<?php

namespace Dzb\RentacarBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route ("/reservation")
 */
class ReservationController extends AppController
{
    /**
     * @Route("/", name="reservation")
     * @Template
     */
    public function indexAction(Request $request)
    {
        return [];
    }

    /**
     * @Route("/new", name="reservation_new")
     * @Template
     */
    public function newAction(Request $request)
    {
        if ('POST' === $request->getMethod()) {
            return $this->redirect($this->generateUrl('reservation_car'));
        }
        return [];
    }

    /**
     * @Route("/car", name="reservation_car")
     * @Template
     */
    public function carAction(Request $request)
    {
        if ('POST' === $request->getMethod()) {
            return $this->redirect($this->generateUrl('reservation_option'));
        }
        return [];
    }

    /**
     * @Route("/option", name="reservation_option")
     * @Template
     */
    public function optionAction(Request $request)
    {
        if ('POST' === $request->getMethod()) {
            return $this->redirect($this->generateUrl('reservation_confirm'));
        }
        return [];
    }

    /**
     * @Route("/confirm", name="reservation_confirm")
     * @Template
     */
    public function confirmAction(Request $request)
    {
        return [];
    }

    /**
     * @Route("/finish", name="reservation_finish")
     * @Template
     */
    public function finishAction(Request $request)
    {
        return [];
    }


}