<?php

require_once DOL_DOCUMENT_ROOT.'/core/class/extrafields.class.php';
require_once DOL_DOCUMENT_ROOT.'/projet/class/project.class.php';
require_once DOL_DOCUMENT_ROOT.'/core/class/html.formprojet.class.php';

/**
 * Class Actionsnomailbydefault
 */
class Actionsnomailbydefault
{
	/**
	 * @var array Hook results. Propagated to $hookmanager->resArray for later reuse
	 */
	public $results = array();

	/**
	 * @var string String displayed by executeHook() immediately after return
	 */
	public $resprints;

	/**
	 * @var array Errors
	 */
	public $errors = array();


	/**
	 * Constructor
	 */
	public function __construct()
	{
	}

	public function getFormMail($parameters=false, &$object, &$action='', $hookmanager)
	{
		$withtoselected = GETPOST("receiver", 'array');

		if(empty($withtoselected)) {
			$_POST['receiver'] = [-1];
		}
	}

}
