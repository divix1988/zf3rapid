<?php
/**
 * ZF2rapid - Zend Framework 2 Rapid Development Tool
 *
 * @link      https://github.com/ZFrapid/zf2rapid
 * @copyright Copyright (c) 2014 - 2015 Ralf Eggert
 * @license   http://opensource.org/licenses/MIT The MIT License (MIT)
 */
namespace ZF2rapid\Command\Delete;

use Zend\Console\ColorInterface as Color;
use ZF2rapid\Command\AbstractCommand;

/**
 * Class DeleteValidatorFactory
 *
 * @package ZF2rapid\Command\Delete
 */
class DeleteValidatorFactory extends AbstractCommand
{
    /**
     * @var array
     */
    protected $tasks
        = array(
            'ZF2rapid\Task\Setup\ProjectPath',
            'ZF2rapid\Task\Setup\ConfigFile',
            'ZF2rapid\Task\Setup\Params',
            'ZF2rapid\Task\Check\ModulePathExists',
            'ZF2rapid\Task\Check\ValidatorExists',
            'ZF2rapid\Task\DeleteFactory\DeleteValidatorFactory',
            'ZF2rapid\Task\UpdateConfig\UpdateValidatorConfig',
        );

    /**
     * Start the command
     */
    public function startCommand()
    {
        // start output
        $this->console->writeGoLine('Deleting factory for validator...');
    }

    /**
     * Stop the command
     */
    public function stopCommand()
    {
        $this->console->writeOkLine(
            'Congratulations! The factory for ZF2 validator '
            . $this->console->colorize(
                $this->params->paramValidator, Color::GREEN
            ) . ' for module ' . $this->console->colorize(
                $this->params->paramModule, Color::GREEN
            ) . ' was successfully deleted.'
        );
    }
}