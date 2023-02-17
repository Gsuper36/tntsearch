<?php

namespace TeamTNT\TNTSearch\Connectors\Factory;

use TeamTNT\TNTSearch\Connectors\ConnectorInterface;

interface ConnectorFactoryInterface
{
    /**
     * @param string $driver
     * @return ConnectorInterface
     * @throws Exception
     */
    public function connector($driver);
}
