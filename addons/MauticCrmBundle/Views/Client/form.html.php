<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

$view->extend('MauticCoreBundle:Default:content.html.php');
$view['slots']->set('mauticContent', 'client');

$objectId = $form->vars['data']->getId();
if (!empty($objectId)) {
    $name   = $form->vars['data']->getTitle();
    $header = $view['translator']->trans('mautic.crm.header.edit', array("%name%" => $name));
} else {
    $header = $view['translator']->trans('mautic.crm.header.new');
}
$view['slots']->set("headerTitle", $header);
?>

<div class="panel panel-default bdr-t-wdh-0">
    <div class="panel-body">
        <?php echo $view['form']->form($form); ?>
    </div>
</div>