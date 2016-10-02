<?php

// Template class, created by kevin@oastem.org, modified by brandon@oastem.org and peter@oastem.org, licensed under GPL

class Template {
	private $path = '';
	private static $instance;
	private $vars = array();
	
	private function __construct($path = '') {
		$this->path = (!empty($path) ? $path : $_SERVER['DOCUMENT_ROOT'] . '/include/template/');
	}
	
	public static function getInstance($path = '') {
		if (!isset(self::$instance)) {
			self::$instance = new Template($path);
		}
		return self::$instance;
	}
	
	public function setVar($section, $key, $value) {
		if (!isset($this->vars[$section])) $this->vars[$section] = array();
		$this->vars[$section][$key] = $value;
	}
	
	public function appendVar($section, $key, $value) {
		if (!isset($this->vars[$section])) $this->vars[$section] = array();
		if (is_array($vars[$section][$key])) {
			$this->vars[$section][$key][] = $value;
		} else {
			$this->vars[$section][$key] .= $value;
		}
	}
	
	public function setTitle($title) {
		$this->setVar('header', 'title', htmlspecialchars($title));
	}
    
	public function setOpenGraph($title, $url, $description){
		$this->setVar('open-graph', 'title', htmlspecialchars($title));
		$this->setVar('open-graph', 'url', htmlspecialchars($url));
		$this->setVar('open-graph', 'description', htmlspecialchars($description));
	}
    
	public function render($templ) {
		global $user, $db; 
		require($this->path . $templ . '.php');
	}
	
	public function header() {
		global $user, $db;
		require($this->path . 'header.php');
	}
	
	public function getVar($section, $key) {
		return (!isset($this->vars[$section][$key])) ? false : $this->vars[$section][$key];
	}
}
