<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/blog")
 */
class BlogController extends AbstractController
{

    private const POSTS = [
        [
            'id' => 1,
            'slug' => 'the-end',
            'title' => 'The End of All Things'
        ],

        [
            'id' => 2,
            'slug' => 'the-darkness',
            'title' => 'Darkness Will Consume all'
        ],

        [
            'id' => 3,
            'slug' => 'php',
            'title' => 'The PHP Storm Will Rain Down on You'
        ],
    ];

    /**
     * @Route("/", name="blog_list")
     */
    public function list()
    {
        return new JsonResponse(self::POSTS);
    }

    /**
     * @Route("/{id}", name="blog_by_id")
     */
    public function post($id)
    {
        return new JsonResponse(
            self::POSTS[array_search($id, array_column(self::POSTS, 'id'))]
        );
    }

    /**
     * @Route("/{slug}", name="blog_by_slug")
     */
    public function postBySlug($slug)
    {
        return new JsonResponse(
            self::POSTS[array_search($slug, array_column(self::POSTS, 'slug'))]
        );
    }
}