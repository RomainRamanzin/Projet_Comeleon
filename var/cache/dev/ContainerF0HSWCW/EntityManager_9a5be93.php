<?php

namespace ContainerF0HSWCW;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder169aa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer49163 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties82616 = [
        
    ];

    public function getConnection()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'getConnection', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'getMetadataFactory', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'getExpressionBuilder', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'beginTransaction', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'getCache', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->getCache();
    }

    public function transactional($func)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'transactional', array('func' => $func), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->transactional($func);
    }

    public function commit()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'commit', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->commit();
    }

    public function rollback()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'rollback', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'getClassMetadata', array('className' => $className), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'createQuery', array('dql' => $dql), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'createNamedQuery', array('name' => $name), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'createQueryBuilder', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'flush', array('entity' => $entity), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'clear', array('entityName' => $entityName), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->clear($entityName);
    }

    public function close()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'close', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->close();
    }

    public function persist($entity)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'persist', array('entity' => $entity), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'remove', array('entity' => $entity), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'refresh', array('entity' => $entity), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'detach', array('entity' => $entity), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'merge', array('entity' => $entity), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'contains', array('entity' => $entity), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'getEventManager', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'getConfiguration', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'isOpen', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'getUnitOfWork', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'getProxyFactory', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'initializeObject', array('obj' => $obj), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'getFilters', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'isFiltersStateClean', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'hasFilters', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return $this->valueHolder169aa->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer49163 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder169aa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder169aa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder169aa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, '__get', ['name' => $name], $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        if (isset(self::$publicProperties82616[$name])) {
            return $this->valueHolder169aa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder169aa;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder169aa;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder169aa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder169aa;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, '__isset', array('name' => $name), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder169aa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder169aa;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, '__unset', array('name' => $name), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder169aa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder169aa;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, '__clone', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        $this->valueHolder169aa = clone $this->valueHolder169aa;
    }

    public function __sleep()
    {
        $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, '__sleep', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;

        return array('valueHolder169aa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer49163 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer49163;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer49163 && ($this->initializer49163->__invoke($valueHolder169aa, $this, 'initializeProxy', array(), $this->initializer49163) || 1) && $this->valueHolder169aa = $valueHolder169aa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder169aa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder169aa;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
