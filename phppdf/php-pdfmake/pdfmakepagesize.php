<?php
/**
 * The class to create pdf documents using pdfmake.js
 * @link http://pdfmake.org
 * @author Anthony G. Rivera Cosme
 * @copyright Anthony G. Rivera Cosme
 * @license MIT
 * @version 1.0
 */
class PDFMakePageSize
{
	const FourA0 = "4A0";
	const TwoA0 = "2A0";
	const A0 = "A0";
	const A1 = "A1";
	const A2 = "A2";
	const A3 = "A3";
	const A4 = "A4";
	const A5 = "A5";
	const A6 = "A6";
	const A7 = "A7";
	const A8 = "A8";
	const A9 = "A9";
	const A10 = "A10";
	const B0 = "B0";
	const B1 = "B1";
	const B2 = "B2";
	const B3 = "B3";
	const B4 = "B4";
	const B5 = "B5";
	const B6 = "B6";
	const B7 = "B7";
	const B8 = "B8";
	const B9 = "B9";
	const B10 = "B10";
	const C0 = "C0";
	const C1 = "C1";
	const C2 = "C2";
	const C3 = "C3";
	const C4 = "C4";
	const C5 = "C5";
	const C6 = "C6";
	const C7 = "C7";
	const C8 = "C8";
	const C9 = "C9";
	const C10 = "C10";
	const RA0 = "RA0";
	const RA1 = "RA1";
	const RA2 = "RA2";
	const RA3 = "RA3";
	const RA4 = "RA4";
	const SRA0 = "SRA0";
	const SRA1 = "SRA1";
	const SRA2 = "SRA2";
	const SRA3 = "SRA3";
	const SRA4 = "SRA4";
	const EXECUTIVE = "EXECUTIVE";
	const FOLIO = "FOLIO";
	const LEGAL = "LEGAL";
	const LETTER = "LETTER";
	const TABLOID = "TABLOID";
	
	public $height;
	public $width;
	
	public function __construct($height = 600, $width = 800)
	{
		$this->height = $height;
		$this->width = $width;
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