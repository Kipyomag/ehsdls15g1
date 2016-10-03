<?php
namespace EhsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EhsBundle\Entity\Articles;

class LoadArticlesData extends AbstractFixture implements OrderedFixtureInterface
{


    public function load(ObjectManager $manager)
    {

        /* classic little article published now */
    	$article1 = new Articles();
        $article1->setTitre('May the force be with you');
        $article1->setChapeau('Haha fallait pas me dire ça maintenant je détruit des planètes');
        $article1->setContenu("Bon j'ai rien de plus à dire malheureusement donc blablabla balblablabl ablalblablalbb ablalblabl");
        $article1->setDate(new \DateTime()); //now
        $article1->setStatus('published');
        $article1->setAuthor($this->getReference('vador'));

        $manager->persist($article1);
        $manager->flush();
        $this->addReference('article1', $article1);




        /* big content */
        $article2 = new Articles();
        $article2->setTitre('Salut salut');
        $article2->setChapeau("J'aime les fleurs bleues");
        $article2->setContenu("Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs! Des fleurs!");
        $article2->setDate(new \DateTime('2016-10-01 21:55:59'));
        $article2->setStatus('published');

        $manager->persist($article2);
        $manager->flush();
        $article2->setAuthor($this->getReference('jarjar'));
        $this->addReference('article2', $article2);




        /* very long word */
        $article3 = new Articles();
        $article3->setTitre('Salut salut');
        $article3->setChapeau("Haaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa haha..");
        $article3->setContenu("Haaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa haha... T'as pu caser ça dans la case Yoyo?");
        $article3->setDate(new \DateTime('2016-10-01 21:55:59'));
        $article3->setStatus('published');

        $manager->persist($article3);
        $manager->flush();
        $article3->setAuthor($this->getReference('user'));
        $this->addReference('article3', $article3);

        

        $dates = [
            new \DateTime('2011-01-01 01:01:01'),
            new \DateTime('2011-12-31 23:59:59'),

            new \DateTime('2013-01-01 01:01:01'),
            new \DateTime('2013-01-22 02:44:14'),
            new \DateTime('2013-01-01 15:03:22'),
            new \DateTime('2013-01-01 15:03:44'),
            new \DateTime('2013-12-31 23:59:59'),

            new \DateTime('2014-01-01 01:01:01'),
            new \DateTime('2014-01-01 15:03:55'),
            new \DateTime('2014-01-01 15:03:22'),
            new \DateTime('2014-12-31 23:59:59'),

            new \DateTime('2015-04-21 20:53:55'),
            new \DateTime('2015-04-22 02:01:12'),

            new \DateTime('2016-01-01 01:01:01'),
            new \DateTime('2016-02-01 15:03:01'),
            new \DateTime('2016-02-01 22:08:01'),
            new \DateTime('2016-03-01 15:03:01'),
            new \DateTime('2016-03-01 16:05:01'),
            new \DateTime('2016-03-01 15:44:01'),
            new \DateTime('2016-04-01 01:03:01'),
            new \DateTime('2016-05-01 14:03:01'),
            new \DateTime('2016-06-01 07:03:01'),
            new \DateTime('2016-10-02 09:03:01'),
            new \DateTime('2016-10-03 02:12:03'),
            new \DateTime('2016-10-03 10:44:12')
        ];

        $status = [
            'published',
            'published',

            'published',
            'progress',
            'published',
            'published',
            'published',

            'published',
            'progress',
            'progress',
            'published',

            'published',
            'published',

            'published',
            'published',
            'refused',
            'published',
            'refused',
            'refused',
            'published',
            'progress',
            'published',
            'progress',
            'submit',
            'submit'
        ];

        $authors = [
            $this->getReference('vador'),
            $this->getReference('admin'),
            $this->getReference('modo'),
            $this->getReference('user'),
            $this->getReference('jarjar')
        ];

        for ($i = 0; $i < 25; $i++) {
            $articleNulle = new Articles();
            $articleNulle->setTitre('Super titre');
            $articleNulle->setChapeau('Mon super chapeau très interressant');
            $articleNulle->setContenu("Du contenu blablabla balblablabl ablalblablalbb ablalblabl blablabla balblablabl ablalblablalbb ablalblabl blablabla balblablabl ablalblablalbb ablalblabl blablabla balblablabl ablalblablalbb ablalblabl blablabla balblablabl ablalblablalbb ablalblabl blablabla balblablabl ablalblablalbb ablalblabl blablabla balblablabl ablalblablalbb ablalblabl blablabla balblablabl ablalblablalbb ablalblabl blablabla balblablabl ablalblablalbb ablalblabl blablabla balblablabl ablalblablalbb ablalblabl blablabla balblablabl ablalblablalbb ablalblabl blablabla balblablabl ablalblablalbb ablalblabl blablabla balblablabl ablalblablalbb ablalblabl");
            $articleNulle->setDate($dates[$i]);
            $articleNulle->setStatus($status[$i]);
            $articleNulle->setAuthor($authors[($i%4)]);

            $manager->persist($articleNulle);
            $manager->flush();
            $this->addReference('article'.($i+4), $articleNulle);
        }
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }
}