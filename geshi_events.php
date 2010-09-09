<?php
	/* 
	 * Short Description / title.
	 * 
	 * Overview of what the file does. About a paragraph or two
	 * 
	 * Copyright (c) 2010 Carl Sutton ( dogmatic69 )
	 * 
	 * @filesource
	 * @copyright Copyright (c) 2010 Carl Sutton ( dogmatic69 )
	 * @link http://www.infinitas-cms.org
	 * @package {see_below}
	 * @subpackage {see_below}
	 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
	 * @since {check_current_milestone_in_lighthouse}
	 * 
	 * @author {your_name}
	 * 
	 * Licensed under The MIT License
	 * Redistributions of files must retain the above copyright notice.
	 */

	final class GeshiEvents extends AppEvents{
		public function onRequireCssToLoad(&$event){
			$admin = isset($event->Handler->params['admin']) ? $event->Handler->params['admin'] : 0;
			if(!$admin){
				return array(
					'/geshi/css/geshi'
				);
			}
		}

		public function onSetupConfig(){
			//return Configure::load('geshi.geshi');
		}
	}