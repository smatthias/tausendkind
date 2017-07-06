<?php
namespace AppBundle;

use Sonata\AdminBundle\Event\ConfigureMenuEvent;

class MenuBuilderListener
{
    public function addMenuItems(ConfigureMenuEvent $event)
    {
        $menu = $event->getMenu();

        $child = $menu->addChild('reports', [
            'label' => 'User Admin',
            //'route' => 'app_reports_index',
        ])->setExtras([
            'icon' => '<i class="fa fa-user-circle"></i>',
        ]);
    }
}