<?php

/**
 * Created by PhpStorm.
 * User: Srf
 * Date: 05-08-2018
 * Time: 22:40
 */

//use Common\Image;
use Common\Thumbnail;

require_once 'Thumbnail.php';
//require_once 'Image.php';

// If everything went well we have now read the image
//$image = new Image("image.png");
//$image->display();

$thumbnail = new Thumbnail("image.png", 250, 250);
$thumbnail->display();