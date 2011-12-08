<?php

require_once("HtmlObjectFramework.php");

class ContainerFramework extends HtmlObjectFramework{
	
	private $tag;
	private $content;
	private $attributes;

	public function __construct($tag){
		$this->tag = $tag;
		$this->content = array();
	}
	
	public function getCurrentHtml(){
		$html = "<". $this->getTag();
		if($this->attributes){
			foreach($this->attributes as $title => $value){
				// TODO: Escape attributes' title and value
				$html .= ' '.$title.'="'.$value.'"';				
			}	
		}			
		$html .= ">";
		if($this->content){
			foreach($this->content as $content){
				$html .= $content->getCurrentHtml();
			}				
		}
		$html .= "</". $this->getTag() .">";
		return $html;
	}
	
	public function getTag(){
		return $this->tag;			
	}
	
	public function addAttribute($title, $value){
		$this->attributes[$title] = $value;
		
		return $this;
	}
	
	public function addContentTag($tag, $innerHtmlOrArray = null){
		$this->addRetrieveContentTag($tag, $innerHtmlOrArray);
		
		return $this;
	}
	
	public function addLoneTag($tag){
		$obj = new LoneTag($tag);
		$this->addHtmlObject($obj);
		return $this;
	}
	
	public function addRetrieveContentTag($tag, $innerHtmlOrArray = null){
		$obj = new ContainerFramework($tag);
		if($innerHtmlOrArray){
			if(is_array($innerHtmlOrArray)){
				foreach($innerHtmlOrArray as $inner){
					$obj->addHtmlObject($inner);
				}
			}else{
				$obj->addHtmlObject($innerHtmlOrArray);
			}				
		}			
		$this->addHtmlObject($obj);
		
		return $obj;
	}
			
	public function addBruteText($text){
		$obj = new BruteText($text);
		$this->addHtmlObject($obj);
		return $this;
	}
	
	public function addHtmlObject($obj){
		
		array_push($this->content, $obj);			
		//print_r ($this->content);
		return $this;
	}
}
	
?>