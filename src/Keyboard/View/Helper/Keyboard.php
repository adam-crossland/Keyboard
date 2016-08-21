<?php
namespace Keyboard\View\Helper;

use Zend\Form\View\Helper\AbstractHelper;

class Keyboard extends AbstractHelper
{
	public function __invoke()
	{
		/** jQuery (required) & jQuery UI + theme (optional) --> **/
		$this->getView()->headLink()->prependStylesheet($this->getView()->basePath('/css/jquery-ui.min.css'));

		/** still using jQuery v2.2.4 because Bootstrap doesn't support v3+ */
		// TODO come back to this to get it ordered correctly
		//$this->getView()->headScript()->prependFile($this->getView()->basePath('/js/jquery.min.js'));
		$this->getView()->headScript()->appendFile($this->getView()->basePath('/js/jquery-ui.min.js'));

		/** keyboard widget css & script (required) */
		$this->getView()->headLink()->prependStylesheet($this->getView()->basePath('/css/keyboard.min.css'));
		$this->getView()->headScript()->appendFile($this->getView()->basePath('/js/jquery.keyboard.min.js'));

		return '';
	}
}