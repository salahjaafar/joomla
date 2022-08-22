<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Helloworld
 * @author     salah <salahwebmaster@gmail.com>
 * @copyright  2022 salah
 * @license    GNU General Public License version 2 ou version ultérieure ; Voir LICENSE.txt
 */

namespace Helloworld\Component\Helloworld\Administrator\Controller;

\defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\FormController;

/**
 * Helloworld controller class.
 *
 * @since  1.0.0
 */
class HelloworldController extends FormController
{
	protected $view_list = 'helloworlds';
}
