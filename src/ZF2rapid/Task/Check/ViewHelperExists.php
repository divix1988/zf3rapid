<?php
/**
 * ZF2rapid - Zend Framework 2 Rapid Development Tool
 *
 * @link      https://github.com/ZFrapid/zf2rapid
 * @copyright Copyright (c) 2014 - 2015 Ralf Eggert
 * @license   http://opensource.org/licenses/MIT The MIT License (MIT)
 */
namespace ZF2rapid\Task\Check;

/**
 * Class ViewHelperExists
 *
 * @package ZF2rapid\Task\Check
 */
class ViewHelperExists extends AbstractFileExists
{
    /**
     * Process the command
     *
     * @return integer
     */
    public function processCommandTask()
    {
        $result = $this->checkFileExists(
            $this->params->viewHelperDir,
            $this->params->paramViewHelper,
            'view helper'
        );

        return $result == true ? 0 : 1;
    }

}