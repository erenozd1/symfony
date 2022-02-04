<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category")
     */
    public function index(CategoryRepository $data): Response
    {

        $result = $data->getCategory();
        dump($result);
        exit();
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    /**
     * @Route ("/new_category",name="new_category")
     * @param CategoryRepository $categoryRepository
     * @return void
     */
    public function createCategory(CategoryRepository $categoryRepository){
        $categoryRepository->newCategory();
        dump($categoryRepository);
        exit();
    }

    /**
     * @Route ("/set_category",name="set_category")
     * @param CategoryRepository $categoryRepository
     * @return void
     */
    public function setCategory(CategoryRepository $categoryRepository){
        $categoryRepository->setCategory();
        dump($categoryRepository);
        exit;
    }

    /**
     * @Route ("/delete_category/{id}")
     * @param CategoryRepository $categoryRepository
     * @return void
     */
    public function deleteCategory(CategoryRepository $categoryRepository, $id){
        $categoryRepository->deleteCategory($id);
        dump($categoryRepository);
        exit;
    }

    /**
     * @Route ("/rawsql",name="raw_sql")
     * @param CategoryRepository $categoryRepository
     * @return void
     */
    public function rawSql(CategoryRepository $categoryRepository){
        $em = $this->getDoctrine()->getManager();
        $sql = "SELECT * FROM category";
        $statement = $em->getConnection()->executeQuery($sql)->fetchAllAssociative();
        dump($statement);
        exit;
    }
}
