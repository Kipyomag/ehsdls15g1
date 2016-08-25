<?php

namespace EhsBundle\Entity;

/**
 * Articles
 */
class Articles
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $contenu;

    /**
     * @var string
     */
    private $chapeau;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Articles
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Articles
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set chapeau
     *
     * @param string $chapeau
     *
     * @return Articles
     */
    public function setChapeau($chapeau)
    {
        $this->chapeau = $chapeau;

        return $this;
    }

    /**
     * Get chapeau
     *
     * @return string
     */
    public function getChapeau()
    {
        return $this->chapeau;
    }
}

