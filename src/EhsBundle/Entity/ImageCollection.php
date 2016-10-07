<?php

namespace EhsBundle\Entity;


use EhsBundle\Entity\Image;
use Symfony\Component\Security\Acl\Exception\Exception;

/**
 * ImageCollection
 *
 */
class ImageCollection
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var array
     */
    private $images;


    /**
     * @var boolean
     */
    private $error = false;


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
     * Set images
     *
     * @param array $images
     *
     * @return ImageCollection
     */
    public function setImages($images)
    {
        foreach ($images as $imgFile) {
            if (preg_match("/^image\//", $imgFile->getMimeType())) {
                $image = new Image();
                $image->setImageFile($imgFile);

                $this->images[] = $image;
            } else {
                $this->setError(true);
            }
        }

        return $this;
    }

    /**
     * Get images
     *
     * @return array
     */
    public function getImages()
    {
        return $this->images;
    }

    public function getError() {
        return $this->error;
    }

    public function setError($error) {
        $this->error = $error;
    }
        
    }

