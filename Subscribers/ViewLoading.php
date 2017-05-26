<?php
namespace Shopware\Plugins\ViisonSCDOrderButton\Subscribers;

use Shopware\Plugins\ViisonCommon\Classes\Subscribers\ViewLoading as ViewLoadingSubscriber;

class ViewLoading extends ViewLoadingSubscriber
{
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
