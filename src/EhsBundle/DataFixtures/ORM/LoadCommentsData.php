<?php
namespace EhsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EhsBundle\Entity\Comment;

class LoadCommentsData extends AbstractFixture implements OrderedFixtureInterface
{


    public function load(ObjectManager $manager)
    {

        /* classic little comment published now */
    	$comment1 = new Comment();
        $comment1->setContent('... :/');
        $comment1->setCreationDate(new \DateTime()); //now
        $comment1->setArticle($this->getReference('article1'));
        $comment1->setAuthor($this->getReference('jarjar'));

        $manager->persist($comment1);
        $manager->flush();




        /* big content */
        $comment2 = new Comment();
        $comment2->setContent('Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs!');
        $comment2->setCreationDate(new \DateTime('2016-10-02 10:55:59'));
        $comment2->setArticle($this->getReference('article2'));
        $comment2->setAuthor($this->getReference('user'));

        $manager->persist($comment2);
        $manager->flush();




        /* very long word */
        $comment3 = new Comment();
        $comment3->setContent("Haaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa haha... T'as pu caser ça dans la case Yoyo?");
        $comment3->setCreationDate(new \DateTime('2016-10-02 10:55:59'));
        $comment3->setArticle($this->getReference('article3'));
        $comment3->setAuthor($this->getReference('vador'));

        $manager->persist($comment3);
        $manager->flush();


        $authors = [
            $this->getReference('vador'),
            $this->getReference('admin'),
            $this->getReference('modo'),
            $this->getReference('user'),
            $this->getReference('user'),
            $this->getReference('jarjar')
        ];

        for ($i = 0; $i < 50; $i++) {
            $commentNulle = new Comment();
            $commentNulle->setContent('Haha génial! :D');
            $commentNulle->setCreationDate(new \DateTime()); //now
            $commentNulle->setArticle($this->getReference('article'.(($i%28)+1)));
            $commentNulle->setAuthor($authors[($i%5)]);

            $manager->persist($commentNulle);
            $manager->flush();
        }
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 3;
    }
}