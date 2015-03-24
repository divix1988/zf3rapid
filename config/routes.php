<?php
/**
 * ZF2rapid - Zend Framework 2 Rapid Development Tool
 *
 * @link        https://github.com/ZFrapid/zf2rapid
 * @copyright   Copyright (c) 2014 - 2015 Ralf Eggert
 * @license     http://opensource.org/licenses/MIT The MIT License (MIT)
 */
use ZF\Console\Filter\Explode as ExplodeFilter;
use ZF2rapid\Filter\NormalizeList as NormalizeListFilter;
use ZF2rapid\Filter\NormalizeParam as NormalizeParamFilter;

return array(
    array(
        'name'                 => 'activate-module',
        'route'                => 'activate-module <module> [<path>]',
        'description'          => 'Activate an existing module within the specified path',
        'short_description'    => 'Activate existing module',
        'options_descriptions' => array(
            '<module>' => 'The name of the module to activate; mandatory',
            '<path>'   => 'The directory of the ZF2 project to activate an existing module in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path' => '.',
        ),
        'filters'              => array(
            'module' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Activate\ActivateModule',
    ),
    array(
        'name'                 => 'create-action',
        'route'                => 'create-action <module> <controller> <action> [<path>]',
        'description'          => 'Create a new controller action for module within the specified path',
        'short_description'    => 'Create new controller action',
        'options_descriptions' => array(
            '<module>'     => 'The name of the module to create the controller action in; mandatory',
            '<controller>' => 'The name of the controller to create an action for; mandatory',
            '<action>'     => 'The name of the new action to create; mandatory',
            '<path>'       => 'The directory of the ZF2 project to create a new controller action in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'    => '.',
            'factory' => false,
        ),
        'filters'              => array(
            'module'     => new NormalizeParamFilter(),
            'controller' => new NormalizeParamFilter(),
            'action'     => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateAction',
    ),
    array(
        'name'                 => 'create-controller',
        'route'                => 'create-controller <module> <controller> [<path>] [--factory|-f]:factory',
        'description'          => 'Create a new controller for module within the specified path',
        'short_description'    => 'Create new controller',
        'options_descriptions' => array(
            '<module>'     => 'The name of the module to create the controller in; mandatory',
            '<controller>' => 'The name of the controller to create; mandatory',
            '<path>'       => 'The directory of the ZF2 project to create a new controller in; defaults to current working directory',
            '--factory|-f' => 'Whether or not to create a factory for the new controller (disabled by default)',
        ),
        'defaults'             => array(
            'path'    => '.',
            'factory' => false,
        ),
        'filters'              => array(
            'module'     => new NormalizeParamFilter(),
            'controller' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateController',
    ),
    array(
        'name'                 => 'create-controller-factory',
        'route'                => 'create-controller-factory <module> <controller> [<path>]',
        'description'          => 'Create a factory for an existing controller for module within the specified path',
        'short_description'    => 'Create factory for controller',
        'options_descriptions' => array(
            '<module>'     => 'The name of the module to create the controller factory in; mandatory',
            '<controller>' => 'The name of the controller to create the factory for; mandatory',
            '<path>'       => 'The directory of the ZF2 project to create the controller factory in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'    => '.',
            'factory' => true,
        ),
        'filters'              => array(
            'module'     => new NormalizeParamFilter(),
            'controller' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateControllerFactory',
    ),
    array(
        'name'                 => 'create-controller-plugin',
        'route'                => 'create-controller-plugin <module> <controllerPlugin> [<path>] [--factory|-f]:factory',
        'description'          => 'Create a new controller plugin for module within the specified path',
        'short_description'    => 'Create new controller plugin',
        'options_descriptions' => array(
            '<module>'           => 'The name of the module to create the controller plugin in; mandatory',
            '<controllerPlugin>' => 'The name of the controller plugin to create; mandatory',
            '<path>'             => 'The directory of the ZF2 project to create a new controller plugin in; defaults to current working directory',
            '--factory|-f'       => 'Whether or not to create a factory for the new controller plugin (disabled by default)',
        ),
        'defaults'             => array(
            'path'    => '.',
            'factory' => false,
        ),
        'filters'              => array(
            'module'           => new NormalizeParamFilter(),
            'controllerPlugin' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateControllerPlugin',
    ),
    array(
        'name'                 => 'create-controller-plugin-factory',
        'route'                => 'create-controller-plugin-factory <module> <controllerPlugin> [<path>]',
        'description'          => 'Create a factory for an existing controller plugin for module within the specified path',
        'short_description'    => 'Create factory for controller plugin',
        'options_descriptions' => array(
            '<module>'           => 'The name of the module to create the controller plugin factory in; mandatory',
            '<controllerPlugin>' => 'The name of the controller plugin to create the factory for; mandatory',
            '<path>'             => 'The directory of the ZF2 project to create the controller plugin factory in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'    => '.',
            'factory' => true,
        ),
        'filters'              => array(
            'module'           => new NormalizeParamFilter(),
            'controllerPlugin' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateControllerPluginFactory',
    ),
    array(
        'name'                 => 'create-filter',
        'route'                => 'create-filter <module> <filter> [<path>] [--factory|-f]:factory',
        'description'          => 'Create a new filter for module within the specified path',
        'short_description'    => 'Create new filter',
        'options_descriptions' => array(
            '<module>'     => 'The name of the module to create the filter in; mandatory',
            '<filter>'     => 'The name of the filter to create; mandatory',
            '<path>'       => 'The directory of the ZF2 project to create a new filter in; defaults to current working directory',
            '--factory|-f' => 'Whether or not to create a factory for the new filter (disabled by default)',
        ),
        'defaults'             => array(
            'path'    => '.',
            'factory' => false,
        ),
        'filters'              => array(
            'module' => new NormalizeParamFilter(),
            'filter' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateFilter',
    ),
    array(
        'name'                 => 'create-filter-factory',
        'route'                => 'create-filter-factory <module> <filter> [<path>]',
        'description'          => 'Create a factory for an existing filter for module within the specified path',
        'short_description'    => 'Create factory for filter',
        'options_descriptions' => array(
            '<module>' => 'The name of the module to create the filter factory in; mandatory',
            '<filter>' => 'The name of the filter to create the factory for; mandatory',
            '<path>'   => 'The directory of the ZF2 project to create the filter factory in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'    => '.',
            'factory' => true,
        ),
        'filters'              => array(
            'module' => new NormalizeParamFilter(),
            'filter' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateFilterFactory',
    ),
    array(
        'name'                 => 'create-form',
        'route'                => 'create-form <module> <form> [<path>] [--factory|-f]:factory',
        'description'          => 'Create a new form for module within the specified path',
        'short_description'    => 'Create new form',
        'options_descriptions' => array(
            '<module>'     => 'The name of the module to create the form in; mandatory',
            '<form>'       => 'The name of the form to create; mandatory',
            '<path>'       => 'The directory of the ZF2 project to create a new form in; defaults to current working directory',
            '--factory|-f' => 'Whether or not to create a factory for the new form (disabled by default)',
        ),
        'defaults'             => array(
            'path'    => '.',
            'factory' => false,
        ),
        'filters'              => array(
            'module' => new NormalizeParamFilter(),
            'form'   => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateForm',
    ),
    array(
        'name'                 => 'create-form-factory',
        'route'                => 'create-form-factory <module> <form> [<path>]',
        'description'          => 'Create a factory for an existing form for module within the specified path',
        'short_description'    => 'Create factory for form',
        'options_descriptions' => array(
            '<module>' => 'The name of the module to create the form factory in; mandatory',
            '<form>'   => 'The name of the form to create the factory for; mandatory',
            '<path>'   => 'The directory of the ZF2 project to create the form factory in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'    => '.',
            'factory' => true,
        ),
        'filters'              => array(
            'module' => new NormalizeParamFilter(),
            'form'   => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateFormFactory',
    ),
    array(
        'name'                 => 'create-hydrator',
        'route'                => 'create-hydrator <module> <hydrator> [<path>]  [--baseHydrator=] [--factory|-f]:factory',
        'description'          => 'Create a new hydrator for module within the specified path',
        'short_description'    => 'Create new hydrator',
        'options_descriptions' => array(
            '<module>'       => 'The name of the module to create the hydrator in; mandatory',
            '<hydrator>'     => 'The name of the hydrator to create; mandatory',
            '<path>'         => 'The directory of the ZF2 project to create a new hydrator in; defaults to current working directory',
            '--baseHydrator' => 'Name of Base Hydrator to extend; defaults to ClassMethods hydrator',
            '--factory|-f'   => 'Whether or not to create a factory for the new hydrator (disabled by default)',
        ),
        'defaults'             => array(
            'path'         => '.',
            'factory'      => false,
            'baseHydrator' => 'ClassMethods',
        ),
        'filters'              => array(
            'module'       => new NormalizeParamFilter(),
            'hydrator'     => new NormalizeParamFilter(),
            'baseHydrator' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateHydrator',
    ),
    array(
        'name'                 => 'create-hydrator-factory',
        'route'                => 'create-hydrator-factory <module> <hydrator> [<path>]',
        'description'          => 'Create a factory for an existing hydrator for module within the specified path',
        'short_description'    => 'Create factory for hydrator',
        'options_descriptions' => array(
            '<module>'   => 'The name of the module to create the hydrator factory in; mandatory',
            '<hydrator>' => 'The name of the hydrator to create the factory for; mandatory',
            '<path>'     => 'The directory of the ZF2 project to create the hydrator factory in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'    => '.',
            'factory' => true,
        ),
        'filters'              => array(
            'module'   => new NormalizeParamFilter(),
            'hydrator' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateHydratorFactory',
    ),
    array(
        'name'                 => 'create-input-filter',
        'route'                => 'create-input-filter <module> <inputFilter> [<path>] [--factory|-f]:factory',
        'description'          => 'Create a new input filter for module within the specified path',
        'short_description'    => 'Create new input filter',
        'options_descriptions' => array(
            '<module>'      => 'The name of the module to create the input filter in; mandatory',
            '<inputFilter>' => 'The name of the input filter to create; mandatory',
            '<path>'        => 'The directory of the ZF2 project to create a new input filter in; defaults to current working directory',
            '--factory|-f'  => 'Whether or not to create a factory for the new input filter (disabled by default)',
        ),
        'defaults'             => array(
            'path'    => '.',
            'factory' => false,
        ),
        'filters'              => array(
            'module'      => new NormalizeParamFilter(),
            'inputFilter' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateInputFilter',
    ),
    array(
        'name'                 => 'create-input-filter-factory',
        'route'                => 'create-input-filter-factory <module> <inputFilter> [<path>]',
        'description'          => 'Create a factory for an existing input filter for module within the specified path',
        'short_description'    => 'Create factory for input filter',
        'options_descriptions' => array(
            '<module>'      => 'The name of the module to create the input filter factory in; mandatory',
            '<inputFilter>' => 'The name of the input filter to create the factory for; mandatory',
            '<path>'        => 'The directory of the ZF2 project to create the input filter factory in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'    => '.',
            'factory' => true,
        ),
        'filters'              => array(
            'module'      => new NormalizeParamFilter(),
            'inputFilter' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateInputFilterFactory',
    ),
    array(
        'name'                 => 'create-module',
        'route'                => 'create-module <module> [<path>]',
        'description'          => 'Create a new module within the specified path',
        'short_description'    => 'Create new module',
        'options_descriptions' => array(
            '<module>' => 'The name of the module to create; mandatory',
            '<path>'   => 'The directory of the ZF2 project to create a new module in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path' => '.',
        ),
        'filters'              => array(
            'module' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateModule',
    ),
    array(
        'name'                 => 'create-project',
        'route'                => 'create-project <path>',
        'description'          => 'Create a new ZF2 project within the specified path',
        'short_description'    => 'Create new ZF2 project',
        'options_descriptions' => array(
            '<path>' => 'The directory to install the new ZF2 project in; mandatory',
        ),
        'defaults'             => array(
            'path' => false,
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateProject',
    ),
    array(
        'name'                 => 'create-routing',
        'route'                => 'create-routing <module> [<path>] [--strict|-s]:strict',
        'description'          => 'Create the routing for an existing module within the specified path',
        'short_description'    => 'Create routing for module',
        'options_descriptions' => array(
            '<module>'    => 'The name of the module to create the routing for; mandatory',
            '<path>'      => 'The directory of the ZF2 project to create the module routing in; defaults to current working directory',
            '--strict|-s' => 'In strict mode routing only allows existing controllers and actions for the routing (disabled by default)',
        ),
        'defaults'             => array(
            'path'   => '.',
            'strict' => false,
        ),
        'filters'              => array(
            'module' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateRouting',
    ),
    array(
        'name'                 => 'create-validator',
        'route'                => 'create-validator <module> <validator> [<path>] [--factory|-f]:factory',
        'description'          => 'Create a new validator for module within the specified path',
        'short_description'    => 'Create new validator',
        'options_descriptions' => array(
            '<module>'     => 'The name of the module to create the validator in; mandatory',
            '<validator>'  => 'The name of the validator to create; mandatory',
            '<path>'       => 'The directory of the ZF2 project to create a new validator in; defaults to current working directory',
            '--factory|-f' => 'Whether or not to create a factory for the new validator (disabled by default)',
        ),
        'defaults'             => array(
            'path'    => '.',
            'factory' => false,
        ),
        'filters'              => array(
            'module'    => new NormalizeParamFilter(),
            'validator' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateValidator',
    ),
    array(
        'name'                 => 'create-validator-factory',
        'route'                => 'create-validator-factory <module> <validator> [<path>]',
        'description'          => 'Create a factory for an existing validator for module within the specified path',
        'short_description'    => 'Create factory for validator',
        'options_descriptions' => array(
            '<module>'    => 'The name of the module to create the validator factory in; mandatory',
            '<validator>' => 'The name of the validator to create the factory for; mandatory',
            '<path>'      => 'The directory of the ZF2 project to create the validator factory in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'    => '.',
            'factory' => true,
        ),
        'filters'              => array(
            'module'    => new NormalizeParamFilter(),
            'validator' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateValidatorFactory',
    ),
    array(
        'name'                 => 'create-view-helper',
        'route'                => 'create-view-helper <module> <viewHelper> [<path>] [--factory|-f]:factory',
        'description'          => 'Create a new view helper for module within the specified path',
        'short_description'    => 'Create new view helper',
        'options_descriptions' => array(
            '<module>'     => 'The name of the module to create the view helper in; mandatory',
            '<viewHelper>' => 'The name of the view helper to create; mandatory',
            '<path>'       => 'The directory of the ZF2 project to create a new view helper in; defaults to current working directory',
            '--factory|-f' => 'Whether or not to create a factory for the new view helper (disabled by default)',
        ),
        'defaults'             => array(
            'path'    => '.',
            'factory' => false,
        ),
        'filters'              => array(
            'module'     => new NormalizeParamFilter(),
            'viewHelper' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateViewHelper',
    ),
    array(
        'name'                 => 'create-view-helper-factory',
        'route'                => 'create-view-helper-factory <module> <viewHelper> [<path>]',
        'description'          => 'Create a factory for an existing view helper for module within the specified path',
        'short_description'    => 'Create factory for view helper',
        'options_descriptions' => array(
            '<module>'     => 'The name of the module to create the view helper factory in; mandatory',
            '<viewHelper>' => 'The name of the view helper to create the factory for; mandatory',
            '<path>'       => 'The directory of the ZF2 project to create the view helper factory in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'    => '.',
            'factory' => true,
        ),
        'filters'              => array(
            'module'     => new NormalizeParamFilter(),
            'viewHelper' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Create\CreateViewHelperFactory',
    ),
    array(
        'name'                 => 'deactivate-module',
        'route'                => 'deactivate-module <module> [<path>]',
        'description'          => 'Deactivate an existing module within the specified path',
        'short_description'    => 'Deactivate existing module',
        'options_descriptions' => array(
            '<module>' => 'The name of the module to deactivate; mandatory',
            '<path>'   => 'The directory of the ZF2 project to deactivate an existing module in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path' => '.',
        ),
        'filters'              => array(
            'module' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Deactivate\DeactivateModule',
    ),
    array(
        'name'                 => 'delete-action',
        'route'                => 'delete-action <module> <controller> <action> [<path>]',
        'description'          => 'Delete an existing controller action for module within the specified path',
        'short_description'    => 'Delete controller action',
        'options_descriptions' => array(
            '<module>'     => 'The name of the module to delete the action in; mandatory',
            '<controller>' => 'The name of the controller to delete the action in; mandatory',
            '<action>'     => 'The name of the new action to delete; mandatory',
            '<path>'       => 'The directory of the ZF2 project to delete the controller action in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module'     => new NormalizeParamFilter(),
            'controller' => new NormalizeParamFilter(),
            'action'     => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteAction',
    ),
    array(
        'name'                 => 'delete-controller',
        'route'                => 'delete-controller <module> <controller> [<path>]',
        'description'          => 'Delete an existing controller for module within the specified path',
        'short_description'    => 'Delete controller',
        'options_descriptions' => array(
            '<module>'     => 'The name of the module to delete the controller in; mandatory',
            '<controller>' => 'The name of the controller to delete; mandatory',
            '<path>'       => 'The directory of the ZF2 project to delete the controller in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module'     => new NormalizeParamFilter(),
            'controller' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteController',
    ),
    array(
        'name'                 => 'delete-controller-factory',
        'route'                => 'delete-controller-factory <module> <controller> [<path>]',
        'description'          => 'Delete the factory for an existing controller for module within the specified path',
        'short_description'    => 'Delete factory for controller',
        'options_descriptions' => array(
            '<module>'     => 'The name of the module to delete the controller factory in; mandatory',
            '<controller>' => 'The name of the controller to delete the factory for; mandatory',
            '<path>'       => 'The directory of the ZF2 project to delete the controller factory in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module'     => new NormalizeParamFilter(),
            'controller' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteControllerFactory',
    ),
    array(
        'name'                 => 'delete-controller-plugin',
        'route'                => 'delete-controller-plugin <module> <controllerPlugin> [<path>]',
        'description'          => 'Delete an existing controller plugin for module within the specified path',
        'short_description'    => 'Delete controller plugin',
        'options_descriptions' => array(
            '<module>'           => 'The name of the module to delete the controller plugin in; mandatory',
            '<controllerPlugin>' => 'The name of the controller plugin to delete; mandatory',
            '<path>'             => 'The directory of the ZF2 project to delete the controller plugin in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module'           => new NormalizeParamFilter(),
            'controllerPlugin' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteControllerPlugin',
    ),
    array(
        'name'                 => 'delete-controller-plugin-factory',
        'route'                => 'delete-controller-plugin-factory <module> <controllerPlugin> [<path>]',
        'description'          => 'Delete the factory for an existing controller plugin for module within the specified path',
        'short_description'    => 'Delete factory for controller plugin',
        'options_descriptions' => array(
            '<module>'           => 'The name of the module to delete the controller plugin factory in; mandatory',
            '<controllerPlugin>' => 'The name of the controller plugin to delete the factory for; mandatory',
            '<path>'             => 'The directory of the ZF2 project to delete the controller plugin factory in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module'           => new NormalizeParamFilter(),
            'controllerPlugin' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteControllerPluginFactory',
    ),
    array(
        'name'                 => 'delete-filter',
        'route'                => 'delete-filter <module> <filter> [<path>]',
        'description'          => 'Delete an existing filter for module within the specified path',
        'short_description'    => 'Delete filter',
        'options_descriptions' => array(
            '<module>' => 'The name of the module to delete the filter in; mandatory',
            '<filter>' => 'The name of the filter to delete; mandatory',
            '<path>'   => 'The directory of the ZF2 project to delete the filter in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module' => new NormalizeParamFilter(),
            'filter' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteFilter',
    ),
    array(
        'name'                 => 'delete-filter-factory',
        'route'                => 'delete-filter-factory <module> <filter> [<path>]',
        'description'          => 'Delete the factory for an existing filter for module within the specified path',
        'short_description'    => 'Delete factory for filter',
        'options_descriptions' => array(
            '<module>' => 'The name of the module to delete the filter factory in; mandatory',
            '<filter>' => 'The name of the filter to delete the factory for; mandatory',
            '<path>'   => 'The directory of the ZF2 project to delete the filter factory in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module' => new NormalizeParamFilter(),
            'filter' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteFilterFactory',
    ),
    array(
        'name'                 => 'delete-form',
        'route'                => 'delete-form <module> <form> [<path>]',
        'description'          => 'Delete an existing form for module within the specified path',
        'short_description'    => 'Delete form',
        'options_descriptions' => array(
            '<module>' => 'The name of the module to delete the form in; mandatory',
            '<form>'   => 'The name of the form to delete; mandatory',
            '<path>'   => 'The directory of the ZF2 project to delete the form in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module' => new NormalizeParamFilter(),
            'form'   => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteForm',
    ),
    array(
        'name'                 => 'delete-form-factory',
        'route'                => 'delete-form-factory <module> <form> [<path>]',
        'description'          => 'Delete the factory for an existing form for module within the specified path',
        'short_description'    => 'Delete factory for form',
        'options_descriptions' => array(
            '<module>' => 'The name of the module to delete the form factory in; mandatory',
            '<form>'   => 'The name of the form to delete the factory for; mandatory',
            '<path>'   => 'The directory of the ZF2 project to delete the form factory in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module' => new NormalizeParamFilter(),
            'form'   => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteFormFactory',
    ),
    array(
        'name'                 => 'delete-hydrator',
        'route'                => 'delete-hydrator <module> <hydrator> [<path>]',
        'description'          => 'Delete an existing hydrator for module within the specified path',
        'short_description'    => 'Delete hydrator',
        'options_descriptions' => array(
            '<module>'   => 'The name of the module to delete the hydrator in; mandatory',
            '<hydrator>' => 'The name of the hydrator to delete; mandatory',
            '<path>'     => 'The directory of the ZF2 project to delete the hydrator in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module'   => new NormalizeParamFilter(),
            'hydrator' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteHydrator',
    ),
    array(
        'name'                 => 'delete-hydrator-factory',
        'route'                => 'delete-hydrator-factory <module> <hydrator> [<path>]',
        'description'          => 'Delete the factory for an existing hydrator for module within the specified path',
        'short_description'    => 'Delete factory for hydrator',
        'options_descriptions' => array(
            '<module>'   => 'The name of the module to delete the hydrator factory in; mandatory',
            '<hydrator>' => 'The name of the hydrator to delete the factory for; mandatory',
            '<path>'     => 'The directory of the ZF2 project to delete the hydrator factory in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module'   => new NormalizeParamFilter(),
            'hydrator' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteHydratorFactory',
    ),
    array(
        'name'                 => 'delete-input-filter',
        'route'                => 'delete-input-filter <module> <inputFilter> [<path>]',
        'description'          => 'Delete an existing input filter for module within the specified path',
        'short_description'    => 'Delete input filter',
        'options_descriptions' => array(
            '<module>'      => 'The name of the module to delete the input filter in; mandatory',
            '<inputFilter>' => 'The name of the input filter to delete; mandatory',
            '<path>'        => 'The directory of the ZF2 project to delete the input filter in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module'      => new NormalizeParamFilter(),
            'inputFilter' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteInputFilter',
    ),
    array(
        'name'                 => 'delete-input-filter-factory',
        'route'                => 'delete-input-filter-factory <module> <inputFilter> [<path>]',
        'description'          => 'Delete the factory for an existing input filter for module within the specified path',
        'short_description'    => 'Delete factory for input filter',
        'options_descriptions' => array(
            '<module>'      => 'The name of the module to delete the input filter factory in; mandatory',
            '<inputFilter>' => 'The name of the input filter to delete the factory for; mandatory',
            '<path>'        => 'The directory of the ZF2 project to delete the input filter factory in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module'      => new NormalizeParamFilter(),
            'inputFilter' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteInputFilterFactory',
    ),
    array(
        'name'                 => 'delete-module',
        'route'                => 'delete-module <module> [<path>]',
        'description'          => 'Delete an existing module within the specified path',
        'short_description'    => 'Delete existing module',
        'options_descriptions' => array(
            '<module>' => 'The name of the module to delete; mandatory',
            '<path>'   => 'The directory of the ZF2 project to delete an existing module in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path' => '.',
        ),
        'filters'              => array(
            'module' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteModule',
    ),
    array(
        'name'                 => 'delete-validator',
        'route'                => 'delete-validator <module> <validator> [<path>]',
        'description'          => 'Delete an existing validator for module within the specified path',
        'short_description'    => 'Delete validator',
        'options_descriptions' => array(
            '<module>'    => 'The name of the module to delete the validator in; mandatory',
            '<validator>' => 'The name of the validator to delete; mandatory',
            '<path>'      => 'The directory of the ZF2 project to delete the validator in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module'    => new NormalizeParamFilter(),
            'validator' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteValidator',
    ),
    array(
        'name'                 => 'delete-validator-factory',
        'route'                => 'delete-validator-factory <module> <validator> [<path>]',
        'description'          => 'Delete the factory for an existing validator for module within the specified path',
        'short_description'    => 'Delete factory for validator',
        'options_descriptions' => array(
            '<module>'    => 'The name of the module to delete the validator factory in; mandatory',
            '<validator>' => 'The name of the validator to delete the factory for; mandatory',
            '<path>'      => 'The directory of the ZF2 project to delete the validator factory in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module'    => new NormalizeParamFilter(),
            'validator' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteValidatorFactory',
    ),
    array(
        'name'                 => 'delete-view-helper',
        'route'                => 'delete-view-helper <module> <viewHelper> [<path>]',
        'description'          => 'Delete an existing view helper for module within the specified path',
        'short_description'    => 'Delete view helper',
        'options_descriptions' => array(
            '<module>'     => 'The name of the module to delete the view helper in; mandatory',
            '<viewHelper>' => 'The name of the view helper to delete; mandatory',
            '<path>'       => 'The directory of the ZF2 project to delete the view helper in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module'     => new NormalizeParamFilter(),
            'viewHelper' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteViewHelper',
    ),
    array(
        'name'                 => 'delete-view-helper-factory',
        'route'                => 'delete-view-helper-factory <module> <viewHelper> [<path>]',
        'description'          => 'Delete the factory for an existing view helper for module within the specified path',
        'short_description'    => 'Delete factory for view helper',
        'options_descriptions' => array(
            '<module>'     => 'The name of the module to delete the view helper factory in; mandatory',
            '<viewHelper>' => 'The name of the view helper to delete the factory for; mandatory',
            '<path>'       => 'The directory of the ZF2 project to delete the view helper factory in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path'          => '.',
            'removeFactory' => true,
        ),
        'filters'              => array(
            'module'     => new NormalizeParamFilter(),
            'viewHelper' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Delete\DeleteViewHelperFactory',
    ),
    array(
        'name'                 => 'generate-classmap',
        'route'                => 'generate-classmap <module> [<path>]',
        'description'          => 'Create the classmap for an existing module within the specified path',
        'short_description'    => 'Create classmap for module',
        'options_descriptions' => array(
            '<module>' => 'The name of the module to create the classmap for; mandatory',
            '<path>'   => 'The directory of the ZF2 project to create the module classmap in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path' => '.',
        ),
        'filters'              => array(
            'module' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Generate\GenerateClassMap',
    ),
    array(
        'name'                 => 'generate-templatemap',
        'route'                => 'generate-templatemap <module> [<path>]',
        'description'          => 'Create the templatemap for an existing module within the specified path',
        'short_description'    => 'Create templatemap for module',
        'options_descriptions' => array(
            '<module>' => 'The name of the module to create the templatemap for; mandatory',
            '<path>'   => 'The directory of the ZF2 project to create the module templatemap in; defaults to current working directory',
        ),
        'defaults'             => array(
            'path' => '.',
        ),
        'filters'              => array(
            'module' => new NormalizeParamFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Generate\GenerateTemplateMap',
    ),
    array(
        'name'                 => 'show-actions',
        'route'                => 'show-actions [<path>] [--modules=] [--controllers=]',
        'description'          => 'Show all controllers for the controllers of the current ZF2 project specified within the path',
        'short_description'    => 'Show all actions for the ZF2 project',
        'options_descriptions' => array(
            '<path>'        => 'The directory of the ZF2 project to fetch controller-actions for; defaults to current working directory',
            '--modules'     => 'Comma-separated list of modules to show controllers for; optional',
            '--controllers' => 'Comma-separated list of controllers to show controller-actions for; optional',
        ),
        'defaults'             => array(
            'path'        => '.',
            'modules'     => array(),
            'controllers' => array(),
        ),
        'filters'              => array(
            'modules'     => new NormalizeListFilter(),
            'controllers' => new ExplodeFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Show\ShowActions',
    ),
    array(
        'name'                 => 'show-controllers',
        'route'                => 'show-controllers [<path>] [--modules=]',
        'description'          => 'Show all controllers for the modules of the current ZF2 project specified within the path',
        'short_description'    => 'Show all controllers for the modules',
        'options_descriptions' => array(
            '<path>'    => 'The directory of the ZF2 project to fetch controllers for; defaults to current working directory',
            '--modules' => 'Comma-separated list of modules to show controllers for; optional',
        ),
        'defaults'             => array(
            'path'    => '.',
            'modules' => array(),
        ),
        'filters'              => array(
            'modules' => new NormalizeListFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Show\ShowControllers',
    ),
    array(
        'name'                 => 'show-controller-plugins',
        'route'                => 'show-controller-plugins [<path>] [--modules=]',
        'description'          => 'Show all controller plugins for the modules of the current ZF2 project specified within the path',
        'short_description'    => 'Show all controller plugins for the modules',
        'options_descriptions' => array(
            '<path>'    => 'The directory of the ZF2 project to fetch controller plugins for; defaults to current working directory',
            '--modules' => 'Comma-separated list of modules to show controller plugins for; optional',
        ),
        'defaults'             => array(
            'path'    => '.',
            'modules' => array(),
        ),
        'filters'              => array(
            'modules' => new NormalizeListFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Show\ShowControllerPlugins',
    ),
    array(
        'name'                 => 'show-filters',
        'route'                => 'show-filters [<path>] [--modules=]',
        'description'          => 'Show all filters for the modules of the current ZF2 project specified within the path',
        'short_description'    => 'Show all filters for the modules',
        'options_descriptions' => array(
            '<path>'    => 'The directory of the ZF2 project to fetch filters for; defaults to current working directory',
            '--modules' => 'Comma-separated list of modules to show filters for; optional',
        ),
        'defaults'             => array(
            'path'    => '.',
            'modules' => array(),
        ),
        'filters'              => array(
            'modules' => new NormalizeListFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Show\ShowFilters',
    ),
    array(
        'name'                 => 'show-forms',
        'route'                => 'show-forms [<path>] [--modules=]',
        'description'          => 'Show all forms for the modules of the current ZF2 project specified within the path',
        'short_description'    => 'Show all forms for the modules',
        'options_descriptions' => array(
            '<path>'    => 'The directory of the ZF2 project to fetch forms for; defaults to current working directory',
            '--modules' => 'Comma-separated list of modules to show forms for; optional',
        ),
        'defaults'             => array(
            'path'    => '.',
            'modules' => array(),
        ),
        'filters'              => array(
            'modules' => new NormalizeListFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Show\ShowForms',
    ),
    array(
        'name'                 => 'show-hydrators',
        'route'                => 'show-hydrators [<path>] [--modules=]',
        'description'          => 'Show all hydrators for the modules of the current ZF2 project specified within the path',
        'short_description'    => 'Show all hydrators for the modules',
        'options_descriptions' => array(
            '<path>'    => 'The directory of the ZF2 project to fetch hydrators for; defaults to current working directory',
            '--modules' => 'Comma-separated list of modules to show hydrators for; optional',
        ),
        'defaults'             => array(
            'path'    => '.',
            'modules' => array(),
        ),
        'filters'              => array(
            'modules' => new NormalizeListFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Show\ShowHydrators',
    ),
    array(
        'name'                 => 'show-input-filters',
        'route'                => 'show-input-filters [<path>] [--modules=]',
        'description'          => 'Show all input filters for the modules of the current ZF2 project specified within the path',
        'short_description'    => 'Show all input filters for the modules',
        'options_descriptions' => array(
            '<path>'    => 'The directory of the ZF2 project to fetch input filters for; defaults to current working directory',
            '--modules' => 'Comma-separated list of modules to show input filters for; optional',
        ),
        'defaults'             => array(
            'path'    => '.',
            'modules' => array(),
        ),
        'filters'              => array(
            'modules' => new NormalizeListFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Show\ShowInputFilters',
    ),
    array(
        'name'                 => 'show-modules',
        'route'                => 'show-modules [<path>]',
        'description'          => 'Show all modules of the current ZF2 project specified within the path',
        'short_description'    => 'Show all modules for the ZF2 project',
        'options_descriptions' => array(
            '<path>' => 'The directory of the ZF2 project to fetch modules for; defaults to current working directory',
        ),
        'defaults'             => array(
            'path' => '.',
        ),
        'handler'              => 'ZF2rapid\Command\Show\ShowModules',
    ),
    array(
        'name'                 => 'show-validators',
        'route'                => 'show-validators [<path>] [--modules=]',
        'description'          => 'Show all validators for the modules of the current ZF2 project specified within the path',
        'short_description'    => 'Show all validators for the modules',
        'options_descriptions' => array(
            '<path>'    => 'The directory of the ZF2 project to fetch validators for; defaults to current working directory',
            '--modules' => 'Comma-separated list of modules to show validators for; optional',
        ),
        'defaults'             => array(
            'path'    => '.',
            'modules' => array(),
        ),
        'filters'              => array(
            'modules' => new NormalizeListFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Show\ShowValidators',
    ),
    array(
        'name'                 => 'show-version',
        'route'                => 'show-version [<path>]',
        'description'          => 'Show the ZF2 version of the current ZF2 project specified within the path',
        'short_description'    => 'Show ZF2 version of the ZF2 project',
        'options_descriptions' => array(
            '<path>' => 'The directory of the ZF2 project to identify the version for; defaults to current working directory',
        ),
        'defaults'             => array(
            'path' => '.',
        ),
        'handler'              => 'ZF2rapid\Command\Show\ShowVersion',
    ),
    array(
        'name'                 => 'show-view-helpers',
        'route'                => 'show-view-helpers [<path>] [--modules=]',
        'description'          => 'Show all view helpers for the modules of the current ZF2 project specified within the path',
        'short_description'    => 'Show all view helpers for the modules',
        'options_descriptions' => array(
            '<path>'    => 'The directory of the ZF2 project to fetch view helpers for; defaults to current working directory',
            '--modules' => 'Comma-separated list of modules to show view helpers for; optional',
        ),
        'defaults'             => array(
            'path'    => '.',
            'modules' => array(),
        ),
        'filters'              => array(
            'modules' => new NormalizeListFilter(),
        ),
        'handler'              => 'ZF2rapid\Command\Show\ShowViewHelpers',
    ),
    array(
        'name'                 => 'tool-config',
        'route'                => 'tool-config [<path>] [--configKey=] [--configValue=]',
        'description'          => 'Display and change the ZF2rapid configuration of the current ZF2 project specified within the path.',
        'short_description'    => 'Display and change ZF2rapid configuration',
        'options_descriptions' => array(
            '<path>'           => 'The directory of the ZF2 project to display the ZF2rapid configuration for; defaults to current working directory',
            '[--configKey=]'   => 'Configuration key to display if no configuration value is specified',
            '[--configValue=]' => 'Configuration value to change for the specified configuration key; use double-quotes when adding texts with spaces',
        ),
        'defaults'             => array(
            'path'        => '.',
            'configKey'   => false,
            'configValue' => false,
        ),
        'handler'              => 'ZF2rapid\Command\Tool\ToolConfiguration',
    ),
    array(
        'name'              => 'tool-version',
        'route'             => 'tool-version',
        'description'       => 'Display the version of the ZF2rapid tool.',
        'short_description' => 'Display ZF2rapid version',
        'handler'           => 'ZF2rapid\Command\Tool\ToolVersion',
    ),
);
