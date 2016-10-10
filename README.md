#Install du projet symfony

1. `git clone https://github.com/Kipyomag/ehsdls15g1.git`
2. `composer update`
3. créer la base de donée `ehs` dans phpmyadmin
4. `php app/console doctrine:schema:update --force`
5. `php app/console doctrine:fixtures:load`
 
## A modifier
#Quand le nom de domaine sera mis en place, il faudra modifier quelques petites choses

1. Le code mailchimp dans `newsletter\index.html.twig`.
2. L'adresse e-mail dans `Controller\ContactController.php` de `newAction`.
3. Enlever "{{ app.request.basePath }}" dans les fichiers twigs: image/show, image/index, image/page, archive/show
