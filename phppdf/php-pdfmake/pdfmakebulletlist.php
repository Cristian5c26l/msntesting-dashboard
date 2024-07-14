<?php
/**
 * The class to create pdf documents using pdfmake.js
 * @link http://pdfmake.org
 * @author Anthony G. Rivera Cosme
 * @copyright Anthony G. Rivera Cosme
 * @license MIT
 * @version 1.0
 */
class PDFMakeBulletlist
{
	public $ul;
	
	public function __construct()
	{
		$this->ul = array();
	}
	
	/**
	 * Adds text to the document header.
	 * @param array of string or DocumentPDFText|mixed $DocumentPDFTextArray
	 */
	public function setBulletList($array)
	{
		$this->ul = $array;
	}
	
	/**
	 * Adds text to the document header.
	 * @param string|array of DocumentPDFText|mixed $DocumentPDFText
	 */
	public function addBulletList($DocumentPDFText)
	{
		$this->ul[] = $DocumentPDFText;
	}
}