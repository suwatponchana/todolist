<?php

namespace AppBundle\Controller;

<<<<<<< HEAD
=======
use AppBundle\Entity\Todo;
>>>>>>> game
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TodoController extends Controller
{
    /**
     * @Route("/todos", name="todo_list")
     */
    public function indexAction(Request $request)
    {
<<<<<<< HEAD
        return $this->render('todo/index.html.twig');
=======
        $todos = $this->getDoctrine()
                      ->getRepository('AppBundle:Todo')
                      ->findAll();

        return $this->render('todo/index.html.twig', array(
            'todos' => $todos
        ));
>>>>>>> game
    }
//******************************************************************************************
    /**
     * @Route("/todo/create", name="todo_create")
     */
    public function createAction(Request $request)
    {
        return $this->render('todo/create.html.twig');
    }
//******************************************************************************************
    /**
     * @Route("/todo/edit/{id}", name="todo_edit")
     */
    public function editAction($id,Request $request)
    {
        return $this->render('todo/edit.html.twig');
    }
//******************************************************************************************
    /**
     * @Route("/todo/details/{id}", name="todo_details")
     */
    public function detailsAction($id)
    {
        return $this->render('todo/details.html.twig');
    }



}