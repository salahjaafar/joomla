<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Helloworld
 * @author     salah <salahwebmaster@gmail.com>
 * @copyright  2022 salah
 * @license    GNU General Public License version 2 ou version ultérieure ; Voir LICENSE.txt
 */

namespace Helloworld\Component\Helloworld\Site\Controller;

\defined('_JEXEC') or die;

use Joomla\CMS\Application\SiteApplication;
use Joomla\CMS\Factory;
use Joomla\CMS\Language\Multilanguage;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\Controller\FormController;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Uri\Uri;
use Joomla\Utilities\ArrayHelper;

/**
 * Helloworlds class.
 *
 * @since  1.0.0
 */
class HelloworldsController extends FormController
{
	/**
	 * Proxy for getModel.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional
	 * @param   array   $config  Configuration array for model. Optional
	 *
	 * @return  object	The model
	 *
	 * @since   1.0.0
	 */
	public function getModel($name = 'Helloworlds', $prefix = 'Site', $config = array())
	{
		return parent::getModel($name, $prefix, array('ignore_request' => true));
	}
}
