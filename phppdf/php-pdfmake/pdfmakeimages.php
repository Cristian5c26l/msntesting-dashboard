<?php
/**
 * The class to create pdf documents using pdfmake.js
 * @link http://pdfmake.org
 * @author Anthony G. Rivera Cosme
 * @copyright Anthony G. Rivera Cosme
 * @license MIT
 * @version 1.0
 */
class PDFMakeImages
{
	public $images;
	
	/**
	 * Default constructor
	 */
	public function __construct()
	{
		$images = new stdClass();
	}
	
    /**
     * images
     * @return stdClass
     */
    public function getImages()
    {
        return $this->images;
    }
	
    /**
     * images
     * @param string $imageName
     * @param string $imageDataURL Base64 Encoded Image
     * @return o
     */
    public function addImages($imageName, $imageDataURL)
    {
    	$this->images->$imageName = $imageDataURL;
    	return $this;
    }
    
    /**
     * images
     * @param stdClass $images
     * @return o
     */
    public function setImages($images)
    {
        $this->images->$images;
        return $this;
    }

}