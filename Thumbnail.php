<?php
/**
 * Created by PhpStorm.
 * User: Srf
 * Date: 05-08-2018
 * Time: 23:00
 */

namespace Common;

require_once 'Image.php';

class Thumbnail extends Image
{
    function __construct($image, $width, $height)
    {
        // call the super-class contructor
        parent::__construct($image);

        // modify the image to create a thumbnail
        $thumb = imagecreatetruecolor($width, $height);
        imagecopyresampled($thumb, $this->image, 0, 0, 0, 0, $width, $height, $this->width, $this->height);
        $this->image = $thumb;
    }
}