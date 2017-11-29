<?php
/**
 * Created by PhpStorm.
 * User: jeremyclerot
 * Date: 29/11/2017
 * Time: 11:31
 */

namespace App\DataFixtures\ORM;

use App\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadTag extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $tag = new Tag("test1","test1");

        $manager->persist($tag);

        $tag2 = new Tag("test2", "test2");

        $manager->persist($tag2);
        $manager->flush();
    }
}