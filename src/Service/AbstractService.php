<?phpnamespace Atlantisgroupbv\Model\Service;abstract class AbstractService{    /**     * @var array     */    protected static array $instances = [];    public static function getInstance()    {        $name = get_called_class();        if (!isset(self::$instances[$name])) {        }        return self::$instances[$name];    }}