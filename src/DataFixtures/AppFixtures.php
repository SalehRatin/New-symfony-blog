<?php

namespace App\DataFixtures;

use App\Entity\Article;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $this->loadArticles($manager);
    }

    public function loadArticles(ObjectManager $manager)
    {
        for ($i = 1; $i <= 25; $i++) {
            $article = new Article();
            $article->setTitle('Article ' . $i);
            $article->setSummary('lorem ipsum dolor sit amet, consectetur adip' . $i);
            $article->setContent('lorem ipsum dolor sit amet, consectetur adip' . $i);
            $article->setAuthorName('SalehAuthor' . $i);

            $manager->persist($article);
        }

        $manager->flush();
    }
}
