<?php
/* Copyright (c) 1998-2010 ILIAS open source, Extended GPL, see docs/LICENSE */

require_once 'Services/Table/classes/class.ilTable2GUI.php';

/**
 * Class ilXAVCTableGUI
 * @author  Nadia Matuschek <nmatuschek@databay.de>
 */
class ilXAVCTableGUI extends ilTable2GUI
{
	/**
	 * Constructor
	 *
	 * @access	public
	 *
	 */
	public function __construct($a_parent_obj, $a_parent_cmd = "")
	{
		global $DIC;

	 	$this->lng = $DIC->language();
	 	$this->ctrl = $DIC->ctrl();

	 	parent::__construct($a_parent_obj, $a_parent_cmd);


		$this->setFormAction($this->ctrl->getFormAction($a_parent_obj));
	}

	/**
	 * Fill row
	 *
	 * @access public
	 * @param array $a_set
	 */
	public function fillRow($a_set)
	{
		foreach ($a_set as $key => $value)
		{
			$this->tpl->setVariable("VAL_".strtoupper($key), $value);
		}
	}	
}