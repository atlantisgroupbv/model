<?php

namespace Atlantisgroupbv\Model\Connection;

class MySql
{
    /**
     * @var string
     */
    private string $host;

    /**
     * @var string
     */
    private string $user;

    /**
     * @var string
     */
    private string $pass;

    /**
     * @var array
     */
    private array $dbname;

    /**
     * @var string
     */
    private string $port;

    /**
     * @var string
     */
    private string $charset;

    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * @param string $host
     * @param string $user
     * @param string $pass
     * @param array $dbname
     * @param string $port
     * @param string $charset
     * @param LoggerInterface $logger
     */
    public function __construct(string $host, string $user, string $pass, array $dbname, string $port, string $charset, LoggerInterface $logger)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
        $this->port = $port;
        $this->charset = $charset;
        $this->logger = $logger;

        dump($dbname);
    }
}