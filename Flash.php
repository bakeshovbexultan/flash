<?php

session_start();

class Flash {
	private $cssClasses = [];
	private $message = [];


	public function __contruct ($nameOfMessage) {
		$_SESSION[$nameOfMessage] = [];
	}

	public function setMessage ($nameOfMessage, $message) {
		$_SESSION[$nameOfMessage] = $message;
	}

	public function displayMessage ($nameOfMessage) {
		if (empty($this->cssClasses[$nameOfMessage])) {
			echo "<div>$_SESSION[$nameOfMessage]</div>";
		} else {
			echo $this->process($nameOfMessage);
		}
	}

	public function process ($nameOfMessage) {
		if (empty($_SESSION[$nameOfMessage])) {
			return null;
		}
		$str = '';
		$arr = (array) $this->cssClasses[$nameOfMessage];
		foreach ($arr as $elem) {
			$str .= $elem;
		}
		$_SESSION[$nameOfMessage] = "<div class=\"$str\">$_SESSION[$nameOfMessage]</div>";
		return $_SESSION[$nameOfMessage];
	}

	public function setCssClass ($nameOfMessage, $cssClasses) {
		if (!empty($this->cssClasses)) {
			$this->cssClasses[$nameOfMessage] .= ' ';
			$this->cssClasses[$nameOfMessage] .= $cssClasses;
		} else {
			$this->cssClasses[$nameOfMessage] .= $cssClasses;
		}
	}

	public function addMessage ($nameOfMessage, $message) {
		$_SESSION[$nameOfMessage] = $_SESSION[$nameOfMessage] . $message;
	}

	public function destroyMessage ($nameOfMessage) {
		unset($_SESSION[$nameOfMessage]);
	}

	public function exists ($nameOfMessage) {
		if (!empty($_SESSION[$nameOfMessage])) {
			return true;
		} else {
			return false;
		}
	}
}