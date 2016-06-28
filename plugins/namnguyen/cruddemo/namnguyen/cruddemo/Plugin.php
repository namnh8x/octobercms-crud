<?php namespace Namnguyen\CrudDemo;

use Backend;
use System\Classes\PluginBase;

/**
 * crudDemo Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Project Managment',
            'description' => 'Manage your teams and projects.',
            'author'      => 'namnguyen',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Namnguyen\CrudDemo\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'namnguyen.cruddemo.some_permission' => [
                'tab' => 'crudDemo',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'cruddemo' => [
                'label'       => 'crudDemo',
                'url'         => Backend::url('namnguyen/cruddemo/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['namnguyen.cruddemo.*'],
                'order'       => 500,
            ],
        ];
    }

}
