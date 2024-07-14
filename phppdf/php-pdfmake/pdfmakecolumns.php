<?php
/**
 * The class to create pdf documents using pdfmake.js
 * @link http://pdfmake.org
 * @author Anthony G. Rivera Cosme
 * @copyright Anthony G. Rivera Cosme
 * @license MIT
 * @version 1.0
 */
class PDFMakeColumns
{
	public $columns;
	public $columnGap;
	
	/**
	 * Default constructor
	 */
	public function __construct()
	{
		$this->columns = array();
		$this->columnGap = 10;
	}
	
	/**
     * Adds column text.
     * @param pdfmaketext $DocumentPDFText
     */
    public function addColumnText($DocumentPDFText)
    {
    	$this->columns[] = $DocumentPDFText;
    }
	
    /**
     * Sets column text array.
     * @param pdfmaketext $DocumentPDFTextArray
     */
    public function setColumnTextArray($DocumentPDFTextArray)
    {
    	$this->columns = $DocumentPDFTextArray;
    }
    
    /**
     * Gets column text array.
     * @return array
     */
    public function getColumnTextArray()
    {
    	return $this->columns;
    }
    
    /**
     * columnGap
     * @return int
     */
    public function getColumnGap()
    {
        return $this->columnGap;
    }

    /**
     * columnGap
     * @param int $columnGap
     * @return o
     */
    public function setColumnGap($columnGap)
    {
        $this->columnGap = $columnGap;
        return $this;
    }

}