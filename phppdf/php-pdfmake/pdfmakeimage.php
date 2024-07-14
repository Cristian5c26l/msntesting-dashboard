<?php
/**
 * The class to create pdf documents using pdfmake.js
 * @link http://pdfmake.org
 * @author Anthony G. Rivera Cosme
 * @copyright Anthony G. Rivera Cosme
 * @license MIT
 * @version 1.0
 */
class PDFMakeImage
{

	public $fit;
	public $image;
	public $height;
	public $pageBreak;
	public $width;
	
	/**
	 * Default contructor
	 */
	public function __construct()
	{
		$this->fit = null;
		$this->image = null;
		$this->height = null;
		$this->pageBreak = null;
		$this->width = null;
	}

    /**
     * fit
     * @return array|int
     */
    public function getFit()
    {
        return $this->fit;
    }

    /**
     * fit
     * @param array of int $fit
     * @return o
     */
    public function setFit($fit)
    {
        $this->fit = $fit;
        return $this;
    }

    /**
     * image
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * image
     * @param string $image
     * @return o
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * height
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * height
     * @param int $height
     * @return o
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * pageBreak
     * @return pdfmakepagebreak
     */
    public function getPageBreak()
    {
        return $this->pageBreak;
    }

    /**
     * pageBreak
     * @param pdfmakepagebreak $pageBreak
     * @return o
     */
    public function setPageBreak($pageBreak)
    {
        $this->pageBreak = $pageBreak;
        return $this;
    }

    /**
     * width
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * width
     * @param int $width
     * @return o
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

}