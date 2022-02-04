<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;

class BezoekerController extends AbstractController
{
    /**
     * @Route("/bezoeker", name="bezoeker")
     */
    public function index()
    {
        return $this->render('bezoeker/index.html.twig'
        );
    }

       /**
     * @Route("/category", name="category_index", methods={"GET"})
     */
    public function categoriesAction()
    {
        $categories=$this->getDoctrine()
        ->getRepository(Category::class)
        ->findAll();
        return $this->render('bezoeker/category.html.twig',['categories'=>$categories]);
    }
     /**
     * @Route("/category/{id}", name="category", methods={"GET"})
     */
    public function catergoryActions($id)
    {
       $category=$this->getDoctrine()
       ->getRepository(Category::class)
       ->find($id);
       return $this->render('bezoeker/product.html.twig',['category'=>$category]);
    }

}
