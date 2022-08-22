<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Helloworld
 * @author     salah <salahwebmaster@gmail.com>
 * @copyright  2022 salah
 * @license    GNU General Public License version 2 ou version ultérieure ; Voir LICENSE.txt
 */

namespace Helloworld\Component\Helloworld\Site\Model;
// No direct access.
defined('_JEXEC') or die;

use \Joomla\CMS\Factory;
use \Joomla\Utilities\ArrayHelper;
use \Joomla\CMS\Language\Text;
use \Joomla\CMS\Table\Table;
use \Joomla\CMS\MVC\Model\ItemModel;
use \Joomla\CMS\Helper\TagsHelper;
use \Joomla\CMS\Object\CMSObject;
use \Helloworld\Component\Helloworld\Site\Helper\HelloworldHelper;

/**
 * Helloworld model.
 *
 * @since  1.0.0
 */
class HelloworldModel extends ItemModel
{
	protected function populateState()
	{
		$app  = Factory::getApplication('com_helloworld');
		$params       = $app->getParams();
		$params_array = $params->toArray();
		$this->setState('params', $params);
	}

	public function getItem ($id = null)
	{
	
	}
}
