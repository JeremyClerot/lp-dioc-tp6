<?php

namespace App\Article;

use App\Entity\Article;
use App\Entity\ArticleStat;
use App\Slug\SlugGenerator;
use Doctrine\DBAL\Exception\DatabaseObjectExistsException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class NewArticleHandler
{
    public function handle(Article $article): void
    {
        $slugGene = new SlugGenerator();
        $slug = $slugGene->generate($article->getTitle());
        $article->setSlug($slug);
    }
}
