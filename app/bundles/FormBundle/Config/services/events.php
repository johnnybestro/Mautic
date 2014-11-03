<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;

//Mautic event listener
$container->setDefinition(
    'mautic.form.subscriber',
    new Definition(
        'Mautic\FormBundle\EventListener\FormSubscriber',
        array(new Reference('mautic.factory'))
    )
)
    ->addTag('kernel.event_subscriber');

$container->setDefinition(
    'mautic.form.pagebundle.subscriber',
    new Definition(
        'Mautic\FormBundle\EventListener\PageSubscriber',
        array(new Reference('mautic.factory'))
    )
)
    ->addTag('kernel.event_subscriber');

$container->setDefinition(
    'mautic.form.pointbundle.subscriber',
    new Definition(
        'Mautic\FormBundle\EventListener\PointSubscriber',
        array(new Reference('mautic.factory'))
    )
)
    ->addTag('kernel.event_subscriber');

$container->setDefinition(
    'mautic.form.reportbundle.subscriber',
    new Definition(
        'Mautic\FormBundle\EventListener\ReportSubscriber',
        array(new Reference('mautic.factory'))
    )
)
    ->addTag('kernel.event_subscriber');
