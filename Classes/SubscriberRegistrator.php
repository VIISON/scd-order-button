<?php
namespace Shopware\Plugins\ViisonSCDOrderButton\Classes;

use Shopware\Plugins\ViisonCommon\Classes\AbstractSubscriberRegistrator;
use Shopware\Plugins\ViisonSCDOrderButton\Subscribers;

/**
 * Use this registrator just before registering your subscribers in the plugin bootstrap:
 *
 *  $subscriberRegistrator = new Shopware\Plugins\ViisonSCDOrderButton\Classes\SubscriberRegistrator($this);
 *  $subscriberRegistrator->registerSubscribers();
 *
 * @copyright Copyright (c) 2017 VIISON GmbH
 */
class SubscriberRegistrator extends AbstractSubscriberRegistrator
{
    /**
     * @inheritdoc
     */
    protected function createSubscribers()
    {
        return [
            new Subscribers\SubApplicationRegistration($this->pluginBootstrap),
            new Subscribers\ViewLoading($this->pluginBootstrap, 'ViisonSCDOrderButton')
        ];
    }
}
