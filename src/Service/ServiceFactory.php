<?phpnamespace Atlantisgroupbv\Model\Service;use Atlantisgroupbv\Model\Exception\General;use Psr\Container\ContainerInterface;class ServiceFactory{    /**     * @var array     */    protected static array $services = [];    /**     * @var ContainerInterface     */    protected static ContainerInterface $diContainer;    public function __construct(ContainerInterface $diContainer)    {        self::$diContainer = $diContainer;    }    /**     * @param ContainerInterface $diContainer     */    public static function setDiContainer(ContainerInterface $diContainer): void    {        self::$diContainer = $diContainer;    }    /**     * @param $service     * @return mixed     * @throws General     */    public static function create($service): mixed    {        if (self::$diContainer == null) {            throw new General('ServiceFactory needs a dependency injection container to build te services');        }        if (!isset(self::$services[$service])) {            self::$services[$service] = self::$diContainer->get($service);        }        return self::$services[$service];    }}