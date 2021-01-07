<?php

namespace App\DataFixtures;

use App\Entity\BlogPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $blogPost = new BlogPost();
        $blogPost->setName("My first blog post");
        $blogPost->setAuthor("Johnny Doe");
        $blogPost->setPublishTime(new \DateTime());
        $blogPost->setSlug("my-first-post");
        $blogPost->setContent("Blahdie blah blah blah");

        $manager->persist($blogPost);

        $blogPost = new BlogPost();
        $blogPost->setName("My second blog post on Scooby");
        $blogPost->setAuthor("Johnny Doe");
        $blogPost->setPublishTime(new \DateTime());
        $blogPost->setSlug("scooby-snacks");
        $blogPost->setContent("Jinkies Velma!");

        $manager->persist($blogPost);

        $blogPost = new BlogPost();
        $blogPost->setName("My third blog post on anime!");
        $blogPost->setAuthor("Johnny Doe");
        $blogPost->setPublishTime(new \DateTime());
        $blogPost->setSlug("my-hero-academia");
        $blogPost->setContent("Solid Anime Fosho");

        $manager->persist($blogPost);

        $manager->flush();
    }
}
