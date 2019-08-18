<?php
/**
 * Created by PhpStorm.
 * User: Srf
 * Date: 05-08-2018
 * Time: 22:55
 */

namespace Common;

class Image
{
    // class atributes (variables)
    public $image;
    public $width;
    public $height;
    private $mimetype;

    function __construct($filename)
    {
        // read the image file to a binary buffer
        $fp = fopen($filename, 'rb') or die("Image '$filename' not found!");
        $buf = '';
        while (!feof($fp))
            $buf .= fgets($fp, 4096);

        // create image and assign it to our variable
        $this->image = imagecreatefromstring($buf);

        // extract image information
        $info = getimagesize($filename);
        $this->width = $info[0];
        $this->height = $info[1];
        $this->mimetype = $info['mime'];
    }

    public function display()
    {
        header("Content-type: {$this->mimetype}");
        switch ($this->mimetype) {
            case 'image/jpeg':
                imagejpeg($this->image);
                break;
            case 'image/png':
                imagepng($this->image);
                break;
            case 'image/gif':
                imagegif($this->image);
                break;
        }
        //exit;
    }
}