<?php namespace CMW\Accordion;
use Backend;
use Controller;
use System\Classes\PluginBase;

/**
 * Accordion Plugin Information File
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
            'name'        => 'Accordion',
            'description' => 'No description provided yet...',
            'author'      => 'CMW',
            'icon'        => 'icon-leaf'
        ];
    }



    public function registerNavigation()
    {
        return [
            'accordion' => [
                'label'       => 'Accordion',
                'url'         => Backend::url('cmw/accordion/accordion'),
                'icon'        => 'icon-file',
                'permissions' => ['cmw.accordion.*'],
                'order'       => 500
            ],
        ];
    }

    public function registerComponents()
	{
	    return [
	        'CMW\Accordion\Components\Accordion' => 'accordion'
	    ];
	}


}
