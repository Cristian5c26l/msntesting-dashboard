<?php
/**
 * The class to create pdf documents using pdfmake.js
 * @link http://pdfmake.org
 * @author Anthony G. Rivera Cosme
 * @copyright Anthony G. Rivera Cosme
 * @license MIT
 * @version 1.0
 */
class PDFMakeInfo
{
	public $author;
	public $keywords;
	public $subject;
	public $title;
	
	public function __construct()
	{
		$this->author = null;
		$this->keywords = null;
		$this->subject = null;
		$this->title = null;
	}

    /**
     * author
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * author
     * @param string $author
     * @return o
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * keywords
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * keywords
     * @param string $keywords
     * @return o
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * subject
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * subject
     * @param string $subject
     * @return o
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * title
     * @param string $title
     * @return o
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

}