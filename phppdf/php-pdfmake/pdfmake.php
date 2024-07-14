<?php
require "php-pdfmake/pdfmaketextalignment.php";
require "php-pdfmake/pdfmaketext.php";
require "php-pdfmake/pdfmaketextstyle.php";
require "php-pdfmake/pdfmakecolumns.php";
require "php-pdfmake/pdfmakebulletlist.php";
require "php-pdfmake/pdfmakenumberlist.php";
require "php-pdfmake/pdfmakeimage.php";
require "php-pdfmake/pdfmakepagebreak.php";
require "php-pdfmake/pdfmaketable.php";
require "php-pdfmake/pdfmaketablelayout.php";
require "php-pdfmake/pdfmakepageorientation.php";
require "php-pdfmake/pdfmakepagesize.php";
require "php-pdfmake/pdfmakeinfo.php";
/**
 * The class to create pdf documents using pdfmake.js on server side code using php
 * @link http://pdfmake.org
 * @author Anthony G. Rivera Cosme
 * @copyright Anthony G. Rivera Cosme
 * @license MIT
 * @version 1.0
 * @todo Implement Stack option
 */
class PDFMake
{
	/**
	 * The PDF header
	 * @var array
	 */
	public $header;

	/**
	 * The PDF footer
	 * @var array
	 */
	public $footer;

	/**
	 * The PDF content
	 * @var array
	 */
	public $content;

	/**
	 * The PDF images
	 * @var object
	 */
	public $images;

	/**
	 * The PDF info
	 * @var stdClass
	 */
	public $info;

	/**
	 * The PDF pageSize
	 * @var string|array
	 */
	public $pageSize;

	/**
	 * The PDF pageOrientation
	 * @var string
	 */
	public $pageOrientation;

	/**
	 * The PDF background
	 * @var string
	 */
	public $background;

    /**
     * Set PDF Style
     * @var object
     */
    public $styles;
	
    /**
	 * Default Constructor
	 */
	public function __construct()
	{
		$this->background = null;
		$this->content = array();
		$this->footer = null;
		$this->header = null;
		$this->images = new stdClass();
		$this->info = new stdClass();
        $this->styles = new stdClass();
		$this->pageOrientation = PDFMakePageOrientation::Portrait;
		$this->pageSize = PDFMakePageSize::LETTER;
	}

	/**
	 * Adds text to the document header.
	 * @param string|pdfmaketext $DocumentPDFTextArray
	 */
	public function setHeaderText($DocumentPDFText)
	{
		$this->header = $DocumentPDFText;
	}

	/**
	 * Adds text to the document footer.
	 * @param array of DocumentPDFColumns $Columns
	 */
	public function setHeaderTextColumns($Columns)
	{
		$obj = new stdClass();
		$obj->colums = $Columns;
		$this->header = $obj;
	}

	/**
	 * Adds text to the document footer.
	 * @param string|pdfmaketext $DocumentPDFTextArray
	 */
	public function setFooterText($DocumentPDFText)
	{
		$this->footer = $DocumentPDFText;
	}

	/**
	 * Adds text to the document header.
	 * @param array of DocumentPDFColumns $Columns
	 */
	public function setFooterTextColumns($Columns)
	{
		$obj = new stdClass();
		$obj->colums = $Columns;
		$this->header = $obj;
	}

    /**
     * Adds Text in a newline to the document.
     * @param string|pdfmaketext $DocumentPDFText
     */
    public function addContentText($DocumentPDFText)
    {
    	$this->content[] = $DocumentPDFText;
    }

    /**
     * Adds array of text in a newline to the document.
     * @param array of string|DocumentPDFText $DocumentPDFTextArray
     */
    public function addContentTextLineWithFormat($DocumentPDFText)
    {
    	$obj = new stdClass();
    	$obj->text = $DocumentPDFText;
    	$content[] = $obj;
    }

    /**
     * Adds a columns list
     * @param pdfmakecolumns $DocumentPDFColumns
     * @return array of DocumentPDFColumns
     */
    public function addContentColums($DocumentPDFColumns)
    {
    	$obj = new stdClass();
    	$obj->colums = $DocumentPDFColumns;
    	$this->content[] = $obj;
    }

    /**
     * Adds a unorder list
     * @param pdfmakebulletlist $DocumentPDFBulletList
     * @return void
     */
    public function addContentBulletList($DocumentPDFBulletList)
    {
    	$obj = new stdClass();
    	$obj->ul = $DocumentPDFBulletList;
    	$this->content[] = $obj;
    }

    /**
     * Adds a unorder list
     * @param pdfmakenumberlist $DocumentPDFNumberList
     * @return void
     */
    public function addContentNumberList($DocumentPDFNumberList)
    {
    	$obj = new stdClass();
    	$obj->ol = $DocumentPDFNumberList;
    	$this->content[] = $obj;
    }

    /**
     * Adds table in a newline to the document.
     * @param pdfmakeftable $DocumentPDFTable
     */
    public function addContentTable($DocumentPDFTable)
    {
    	$this->content[] = $DocumentPDFTable;
    }

    /**
     * Renders the pdf to clients web browser in a new window
     */
    public function RenderNewWindow($include_script_tags = false)
    {
    	if(!$include_script_tags)
    	{
	    	header('Content-Type: application/javascript');
?>
	    	pdfMake.createPdf(<?=json_encode($this, JSON_PRETTY_PRINT)?>).open();
	    	<?php
    	}
    	else 
    	{
    		?>
    		<script>
    			pdfMake.createPdf(<?=json_encode($this, JSON_PRETTY_PRINT)?>).open();
    		</script>
    		<?php
    	}
    }

    /**
     * Renders the pdf to clients web browser and sends it directly to printer
     * @note Works only on chrome browser at the moment
     */
    public function RenderPrint($include_script_tags = false)
    {
    	if(!$include_script_tags)
    	{
	    	header('Content-Type: application/javascript');
            ?>
	    	pdfMake.createPdf(<?=json_encode($this, JSON_PRETTY_PRINT)?>).print();
	    	<?php
    	}
    	else 
    	{
    		?>
    		<script>
    			pdfMake.createPdf(<?=json_encode($this, JSON_PRETTY_PRINT)?>).print();
    		</script>
    		<?php
    	}
    }

    /**
     * Renders the pdf to clients web browser and download it to the device
     */
    public function RenderDownload($include_script_tags = false)
    {
    	if(!$include_script_tags)
    	{
	    	header('Content-Type: application/javascript');
            ?>
	    	pdfMake.createPdf(<?=json_encode($this, JSON_PRETTY_PRINT)?>).download();
	    	<?php
    	}
    	else 
    	{
    		?>
    		<script>
    		pdfMake.createPdf(<?=json_encode($this, JSON_PRETTY_PRINT)?>).download();
    		</script>
    		<?php
    	}
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
     * @param pdfmakeimages $images
     * @return object
     */
    public function setImages($images)
    {
        $this->images = $images;
        return $this;
    }

    /**
     * info
     * @return pdfmakeinfo
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * info
     * @param pdfmakeinfo $info
     * @return o
     */
    public function setInfo($info)
    {
        $this->info = $info;
        return $this;
    }

    /**
     * pageSize
     * @return pdfmakepagesize
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * pageSize
     * @param pdfmakepagesize $pageSize
     * @return o
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
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
     * @return object
     */
    public function setPageOrientation($pageOrientation)
    {
        $this->pageOrientation = $pageOrientation;
        return $this;
    }

    /**
     * background
     * @return string
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * background
     * @param string $background
     * @return o
     */
    public function setBackground($background)
    {
        $this->background = $background;
        return $this;
    }

     /**
     * background
     * @return string
     */
    public function getStyles()
    {
        return $this->styles;
    }

    /**
     * background
     * @param array $PDFMakeTextStyle
     * @return object
     */
    public function setStyles($PDFMakeTextStyle)
    {
        $this->styles = $PDFMakeTextStyle;
        return $this;
    }

    /**
     * background
     * @param string $stylename
     * @param object PDFMakeTextStyle
     * @return object
     */
    public function addStyle($stylename, $styles)
    {
        $this->styles->$stylename = $styles;
        return $this;
    }

}