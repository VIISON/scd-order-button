<?php
namespace Shopware\Plugins\ViisonSCDOrderButton\Subscribers;

use Shopware\Plugins\ViisonCommon\Classes\Subscribers\SubApplicationRegistration as SubApplicationRegistrationSubscriber;

class SubApplicationRegistration extends SubApplicationRegistrationSubscriber
{
    /**
     * @inheritdoc
     */
    public function getSubApplications()
    {
        return [
            'ViisonSCDOrderButtonUnicornButton' => null
        ];
    }

    /**
     * Overrides the default implementation to return the path to this library's root path.
     *
     * @inheritdoc
     */
    public function getPluginPath()
    {
        return __DIR__ . '/../';
    }
}
