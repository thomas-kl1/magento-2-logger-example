<?php
/**
 * Blackbird LoggerSample Module
 *
 *  NOTICE OF LICENSE
 *  If you did not receive a copy of the license and are unable to
 *  obtain it through the world-wide-web, please send an email
 *  to contact@bird.eu so we can send you a copy immediately.
 *
 *  @category        Blackbird
 *  @package         Blackbird_LoggerSample
 *  @copyright       Copyright (c) 2017 Blackbird (https://black.bird.eu)
 *  @author          Blackbird Team
 *  @license         MIT
 */
namespace Blackbird\LoggerSample\Logger\Handler;

use Monolog\Logger;

class Base extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/blackbird_default.log';

    /**
     * @var int
     */
    protected $loggerType = Logger::NOTICE;
}
