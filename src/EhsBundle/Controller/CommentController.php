<?php

namespace EhsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EhsBundle\Entity\Comment;
use EhsBundle\Form\CommentType;

/**
 * Comment controller.
 *
 */
class CommentController extends Controller
{

    /**
     * Deletes a Comment entity.
     *
     */
    public function deleteAction(Request $request, Comment $comment)
    {
        
        /*$form = $this->createDeleteForm($comment);
        $form->handleRequest($request);*/

        //if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($comment);
            $em->flush();
        //}

        $referer = $this->getRequest()->headers->get('referer');
        if ($referer != null) {
            return $this->redirect($referer);
        } else {
            return $this->redirectToRoute('articles_index');
        }
    }
}
