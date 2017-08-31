<?php
/**
 * Blackbird Agency
 *
 * NOTICE OF LICENSE
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@bird.eu so we can send you a copy immediately.
 *
 * @category        Blackbird
 * @package         Blackbird_Logger
 * @copyright       Copyright (c) 2017 Blackbird (https://black.bird.eu)
 * @author          Blackbird Team
 * @license         https://www.store.bird.eu/license/
 */
namespace Blackbird\Logger\Logger\Handler;

use Monolog\Logger;

class System extends \Magento\Framework\Logger\Handler\System
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/blackbird_system.log';

    /**
     * @var int
     */
    protected $loggerType = Logger::INFO;
}
