<?php
/**
 * The class to create pdf documents using pdfmake.js
 * @link http://pdfmake.org
 * @author Anthony G. Rivera Cosme
 * @copyright Anthony G. Rivera Cosme
 * @license MIT
 * @version 1.0
 */
class PDFMakeNumberList
{
	public $ol;
	
	public function __construct()
	{
		$this->ol = array();
	}
	
	/**
	 * Sets text to the number list.
	 * @param array of string or DocumentPDFText|mixed $DocumentPDFTextArray
	 */
	public function setNumberList($array)
	{
		$this->ol = $array;
	}
	
	/**
	 * Adds text to the number list.
	 * @param string|array of DocumentPDFText|mixed $DocumentPDFText
	 */
	public function addNumberList($DocumentPDFText)
	{
		$this->ol[] = $DocumentPDFText;
	}
}