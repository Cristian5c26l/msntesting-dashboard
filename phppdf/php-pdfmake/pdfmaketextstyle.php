<?php
/**
 * The class to create pdf documents using pdfmake.js
 * @link http://pdfmake.org
 * @author Anthony G. Rivera Cosme
 * @copyright Anthony G. Rivera Cosme
 * @license MIT
 * @version 1.0
 */
class PDFMakeTextStyle
{
	public $alignment;
	public $bold;
	public $color;
	public $fontSize;
	public $italics;
	public $margin;
	public $width;
	
	/**
	 * The default constructor
	 */
	public function __construct()
	{
		$this->alignment = PDFMakeTextAlignment::Left;
		$this->bold = false;
		$this->color = "black";
		$this->fontSize = 12;
		$this->italics = false;
		$this->margin = array();
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
	 * content
	 * @return string
	 */
	public function getContent()
	{
		return $this->content;
	}
	
	/**
	 * content
	 * @param string $content
	 * @return o
	 */
	public function setContent($content)
	{
		$this->content = $content;
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
	 * @param boolean $italic
	 * @return o
	 */
	public function setItalics($italics)
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