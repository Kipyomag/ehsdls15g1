<?php

namespace EhsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EhsBundle\Entity\Articles;
use EhsBundle\Form\ArticlesType;
use EhsBundle\Entity\Comment;

/**
 * Articles controller.
 *
 */
class ArticlesController extends Controller
{
    /**
     * Lists all Articles entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('EhsBundle:Articles')->findByStatus('published');

        return $this->render('articles/index.html.twig', array(
            'articles' => $articles,
        ));
    }

    /**
     * Creates a new Articles entity.
     *
     */
    public function newAction(Request $request)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $em = $this->getDoctrine()->getManager();
        $myArticles =  $em->getRepository('EhsBundle:Articles')->findArticlesFromUser($this->getUser()->getId());
        

        $article = new Articles();
        $form = $this->createForm('EhsBundle\Form\ArticlesType', $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            

            $user = $this->getUser();
            $article->setAuthor($user);

            // save this article to edit it later
            if ($form->get('save')->isClicked()) {
                $article->setStatus("progress"); //go to entity to see available values 
            }
            //send this article to admins (can't edit it now)
            else if ($form->get('send')->isClicked()) {
                $article->setStatus("submit");
            }

    
            
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('articles_show', array('id' => $article->getId()));
        }

        return $this->render('articles/new.html.twig', array(
            'article' => $article,
            'form' => $form->createView(),
            'myArticles' => $myArticles
        ));
    }

    /**
     * Finds and displays a Articles entity.
     *
     */
    public function showAction(Request $request, Articles $article)
    {
        $deleteForm = $this->createDeleteForm($article);
        
        $comment = new Comment();
        $commentForm = $this->createForm('EhsBundle\Form\CommentType', $comment);
        $commentForm->handleRequest($request);
        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
                throw $this->createAccessDeniedException();
            }
            $user = $this->getUser();
            
            $comment->setAuthor($user);
            
            
            $comment->setArticle($article);
            $comment->setCreationDate(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirectToRoute('articles_show', array('id' => $article->getId()));
        }

        return $this->render('articles/show.html.twig', array(
            'article' => $article,
            'comment_form' => $commentForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Articles entity.
     *
     */
    public function editAction(Request $request, Articles $article)
    {
        $deleteForm = $this->createDeleteForm($article);
        $editForm = $this->createForm('EhsBundle\Form\ArticlesType', $article);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            // save this article to edit it later
            if ($editForm->get('save')->isClicked()) {
                $article->setStatus("progress"); //go to entity to see available values 
            }
            //send this article to admins (can't edit it now)
            else if ($editForm->get('send')->isClicked()) {
                $article->setStatus("submit");
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('articles_show', array('id' => $article->getId()));
        }

        return $this->render('articles/edit.html.twig', array(
            'article' => $article,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Articles entity.
     *
     */
    public function deleteAction(Request $request, Articles $article)
    {
        $form = $this->createDeleteForm($article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();
        }

        return $this->redirectToRoute('articles_index');
    }

    /**
     * Creates a form to delete a Articles entity.
     *
     * @param Articles $article The Articles entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Articles $article)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('articles_delete', array('id' => $article->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
