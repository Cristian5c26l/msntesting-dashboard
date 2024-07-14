<?php
/**
 * The class to create pdf documents using pdfmake.js
 * @link http://pdfmake.org
 * @author Anthony G. Rivera Cosme
 * @copyright Anthony G. Rivera Cosme
 * @license MIT
 * @version 1.0
 */
class PDFMakeTable
{
	public $table;
	public $layout;
	
	/**
	 * Default constructor
	 */
	public function __construct()
	{
		$this->table = new stdClass();
		$this->layout = null;
		$this->table->headerRows = 1;
		$this->table->widths = null;
		$this->table->body = array();
	}
	
	/**
	 * header
	 * @param string|array|pdfmaketext|pdfmakecolumns|mixed $header
	 * @return o
	 */
	public function setHeader($header)
	{
		$this->table->body[] = $header;
		return $this;
	}
	
    /**
     * headerRows
     * @return int
     */
    public function getHeaderRows()
    {
        return $this->table->headerRows;
    }

    /**
     * headerRows
     * @param int $headerRows The header rows to be displayed on next page is pdf goes over another page
     * @return o
     */
    public function setHeaderRows($headerRows)
    {
        $this->table->headerRows = $headerRows;
        return $this;
    }

    /**
     * widths
     * @return string|int|array|mixed
     */
    public function getWidths()
    {
        return $this->table->widths;
    }

    /**
     * widths
     * @param string|int|array|mixed $widths
     * @return o
     */
    public function setWidths($widths)
    {
        $this->table->widths = $widths;
        return $this;
    }

    /**
     * body
     * @return array
     */
    public function getTable()
    {
        return $this->table->body;
    }

    /**
     * body
     * @param string|array|pdfmaketext|mixed $body
     * @return o
     */
    public function addRow($row)
    {
    	$this->table->body[] = $row;
    	return $this;
    }

    /**
     * layout
     * @return pdfmaketablelayout
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * layout
     * @param pdfmaketablelayout $layout
     * @return o
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
        return $this;
    }

}