<?php

namespace TeamTNT\TNTSearch\Connectors\Factory;

use Exception;
use TeamTNT\TNTSearch\Connectors\FileSystemConnector;
use TeamTNT\TNTSearch\Connectors\MySqlConnector;
use TeamTNT\TNTSearch\Connectors\PostgresConnector;
use TeamTNT\TNTSearch\Connectors\SQLiteConnector;
use TeamTNT\TNTSearch\Connectors\SqlServerConnector;

class BaseConnectorFactory implements ConnectorFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function connector($driver)
    {
        if (empty($driver)) {
            throw new Exception('A driver must be specified.');
        }

        switch ($driver) {
            case 'mysql':
                return new MySqlConnector;
            case 'pgsql':
                return new PostgresConnector;
            case 'sqlite':
                return new SQLiteConnector;
            case 'sqlsrv':
                return new SqlServerConnector;
            case 'filesystem':
                return new FileSystemConnector;
        }
        throw new Exception("Unsupported driver [{$driver}]");
    }
}
