<?php

/**
 * @author  Precious Opusunju (masterpreshy)
 * @website   www.masterpreshy.me
 */

namespace PPV {

	class Views {

		public $dir;
		public $header;
		public $footer;

		public function __construct($root, $header, $footer)
		{
			$this->dir = $root . '/views/'; //define path here where your templates are
			$this->header = $header;
			$this->footer = $footer;
		}

		public function load($view) {

			try {
				require_once $this->dir.$this->header;
				require_once $this->dir.$view;
				require_once $this->dir.$this->footer;

			} catch ( Exception $e ) {

				throw new Exception("Failed to load partials.");

			}
		}
	}
}

?>