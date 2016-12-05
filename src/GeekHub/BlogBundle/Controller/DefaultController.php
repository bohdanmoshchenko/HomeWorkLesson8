<?php

namespace GeekHub\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('GeekHubBlogBundle:Default:index.html.twig');
    }

    /**
     * @return Response
     */
    public function controlStructuresAction()
    {
        $mass = [
            1 => 'one',
            2 => 'two' ,
            3 => 'three',
            4 => 'four',
            5 => 'five',
        ];

        return $this->render('@GeekHubBlog/Default/controlStructures.html.twig', [
            'mass' => $mass,
        ]);
    }

    /**
     * @return Response
     */
    public function inheritanceAction()
    {
        return $this->render('@GeekHubBlog/Default/inheritance.html.twig');
    }

    /**
     * @return Response
     */
    public function secondInheritanceAction()
    {
        return $this->render('@GeekHubBlog/Default/secondInheritance.html.twig', [
            'text' => 'some footer',
        ]);
    }

    /**
     * @return Response
     */
    public function twigFiltersAction()
    {
        return $this->render('@GeekHubBlog/Default/twigFilters.html.twig', [
            'name' => 'some string',
        ]);
    }
}
