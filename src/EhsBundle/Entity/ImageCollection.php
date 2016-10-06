<?php

namespace EhsBundle\Entity;


use EhsBundle\Entity\Image;

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
            $image = new Image();
            $image->setImageFile($imgFile);

            $this->images[] = $image;
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
}

