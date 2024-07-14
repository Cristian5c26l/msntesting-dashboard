<?php
/**
 * The class to create pdf documents using pdfmake.js
 * @link http://pdfmake.org
 * @author Anthony G. Rivera Cosme
 * @copyright Anthony G. Rivera Cosme
 * @license MIT
 * @version 1.0
 */
class PDFMakeText
{
	public $alignment;
	public $bold;
	public $color;
	public $fontSize;
	public $italics;
	public $margin;
	public $styles;
	public $pageBreak;
	public $pageOrientation;
	public $text;
	public $width;

	/**
	 * The default constructor
	 */
	public function __construct($text = null, $DocumentPDFPageOrientation = PDFMakePageOrientation::Portrait)
    {
		$this->alignment = PDFMakeTextAlignment::Left;
		$this->bold = false;
		$this->color = "black";
		$this->fontSize = 12;
		$this->italics = false;
		$this->margin = array();
		$this->style = array();
		$this->pageBreak = null;
		$this->pageOrientation = $DocumentPDFPageOrientation;
		$this->text = $text;
		$this->width = 'auto';
    }

    /**
     * alignment
     * @return string
     */
    public function getAlignment()
    {
    	return $this->alignment;
    }

    /**
     * alignment
     * @param string $alignment
     * @return o
     */
    public function setAlignment($alignment)
    {
    	$this->alignment = $alignment;
    	return $this;
    }

    /**
     * bold
     * @return string
     */
    public function getBold()
    {
    	return $this->bold;
    }

    /**
     * bold
     * @param string $bold
     * @return o
     */
    public function setBold($bold)
    {
    	$this->bold = $bold;
    	return $this;
    }

    /**
     * fontSize
     * @return string
     */
    public function getFontSize()
    {
    	return $this->fontSize;
    }

    /**
     * fontSize
     * @param string $fontSize
     * @return o
     */
    public function setFontSize($fontSize)
    {
    	$this->fontSize = $fontSize;
    	return $this;
    }

    /**
     * italic
     * @return boolean
     */
    public function getItalics()
    {
    	return $this->italics;
    }

    /**
     * italic
     * @param boolean $italics
     * @return o
     */
    public function setItalic($italics)
    {
    	$this->italics = $italics;
    	return $this;
    }

    /**
     * margin
     * @return string
     */
    public function getMargin()
    {
    	return $this->margin;
    }

    /**
     * margin
     * @param string $margin
     * @return o
     */
    public function setMargin($margin)
    {
    	$this->margin = $margin;
    	return $this;
    }

    /**
     * @param string $stylename
     */
    public function addStyle($stylename)
    {
    	$this->style[] = $DocumentPDFTextStyles;
    }

    /**
     * @param array $styles
     */
    public function setStyle($styles)
    {
    	$this->style = $styles;
    }

    /**
     * Gets the styles defined for this instance
     * @return DocumentPDFTextStyles
     */
    public function getStyles()
    {
    	return $this->style;
    }


    /**
     * styles
     * @param string $styles
     * @return o
     */
    public function setStyles($styles)
    {
        $this->styles = $styles;
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
     * text
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * text
     * @param string $text
     * @return o
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * width
     * @return string|int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * width
     * @param string|int $width
     * @return o
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }


    /**
     * pageOrientation
     * @return pdfmakepageorientation
     */
    public function getPageOrientation()
    {
        return $this->pageOrientation;
    }

    /**
     * pageOrientation
     * @param pdfmakepageorientation $pageOrientation
     * @return o
     */
    public function setPageOrientation($pageOrientation)
    {
        $this->pageOrientation = $pageOrientation;
        return $this;
    }


    /**
     * color
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * color
     * @param string $color
     * @return o
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

}