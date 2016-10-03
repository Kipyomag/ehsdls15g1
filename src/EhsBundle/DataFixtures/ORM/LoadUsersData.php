<?php
namespace EhsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use EhsBundle\Entity\Users;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }


    public function load(ObjectManager $manager)
    {
    	$admin = new Users();
        $admin->setEmail('admin@yahoo.fr');
        $admin->setNom('admin');
        $admin->setPrenom('admin');

        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($admin, 'admin');
        $admin->setPassword($password);

        $admin->setGenre('Homme');
        $admin->setTelephone('0232323232');
        $admin->setAdresse('Admin');
        $admin->setVille('Admin');
        $admin->setRegion('Admin');
        $admin->setPays('Admin');
        $admin->setRole('ROLE_ADMIN');

        $manager->persist($admin);
        $manager->flush();
        $this->addReference('admin', $admin);



        $userAdmin = new Users();
        $userAdmin->setEmail('d.vador@yahoo.fr');
        $userAdmin->setNom('Darth');
        $userAdmin->setPrenom('Vador');

        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($userAdmin, 'vador');
        $userAdmin->setPassword($password);

        $userAdmin->setGenre('Homme');
        $userAdmin->setTelephone('0632323232');
        $userAdmin->setAdresse('21 Rue des Dunes');
        $userAdmin->setVille('Mos Espa');
        $userAdmin->setRegion('Secteur Sept');
        $userAdmin->setPays('Tatouine');
        $userAdmin->setRole('ROLE_ADMIN');

        $manager->persist($userAdmin);
        $manager->flush();
        $this->addReference('vador', $userAdmin);



    	$modo = new Users();
        $modo->setEmail('modo@yahoo.fr');
        $modo->setNom('modo');
        $modo->setPrenom('modo');

        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($modo, 'modo');
        $modo->setPassword($password);

        $modo->setGenre('Homme');
        $modo->setTelephone('0212121212');
        $modo->setAdresse('modo');
        $modo->setVille('modo');
        $modo->setRegion('modo');
        $modo->setPays('modo');
        $modo->setRole('ROLE_MODERATEUR');

        $manager->persist($modo);
        $manager->flush();
        $this->addReference('modo', $modo);



    	$user = new Users();
        $user->setEmail('user@yahoo.fr');
        $user->setNom('user');
        $user->setPrenom('user');

        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user, 'user');
        $user->setPassword($password);

        $user->setGenre('Homme');
        $user->setTelephone('0212121212');
        $user->setAdresse('User');
        $user->setVille('User');
        $user->setRegion('User');
        $user->setPays('User');
        $user->setRole('ROLE_USER');

        $manager->persist($user);
        $manager->flush();
        $this->addReference('user', $user);



    	$jarjar = new Users();
        $jarjar->setEmail('jarjar@yahoo.fr');
        $jarjar->setNom('Jarjar');
        $jarjar->setPrenom('Binx');

        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($jarjar, 'binx');
        $jarjar->setPassword($password);

        $jarjar->setGenre('Homme');
        $jarjar->setTelephone('0212121212');
        $jarjar->setAdresse('jarjar');
        $jarjar->setVille('jarjar');
        $jarjar->setRegion('jarjar');
        $jarjar->setPays('jarjar');
        $jarjar->setRole('ROLE_jarjar');

        $manager->persist($jarjar);
        $manager->flush();
        $this->addReference('jarjar', $jarjar);
    }

    public function getOrder()
    {
        return 1;
    }
}