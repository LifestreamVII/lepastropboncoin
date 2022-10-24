<?php

namespace ContainerH0qsMLb;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder31d38 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc431c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties71522 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'getConnection', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'getMetadataFactory', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'getExpressionBuilder', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'beginTransaction', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'getCache', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'transactional', array('func' => $func), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'commit', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->commit();
    }

    public function rollback()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'rollback', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'getClassMetadata', array('className' => $className), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'createQuery', array('dql' => $dql), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'createNamedQuery', array('name' => $name), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'createQueryBuilder', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'flush', array('entity' => $entity), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'clear', array('entityName' => $entityName), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->clear($entityName);
    }

    public function close()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'close', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->close();
    }

    public function persist($entity)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'persist', array('entity' => $entity), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'remove', array('entity' => $entity), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'refresh', array('entity' => $entity), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'detach', array('entity' => $entity), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'merge', array('entity' => $entity), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'contains', array('entity' => $entity), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'getEventManager', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'getConfiguration', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'isOpen', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'getUnitOfWork', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'getProxyFactory', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'initializeObject', array('obj' => $obj), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'getFilters', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'isFiltersStateClean', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'hasFilters', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return $this->valueHolder31d38->hasFilters();
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

        $instance->initializerc431c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder31d38) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder31d38 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder31d38->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, '__get', ['name' => $name], $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        if (isset(self::$publicProperties71522[$name])) {
            return $this->valueHolder31d38->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31d38;

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

        $targetObject = $this->valueHolder31d38;
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
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31d38;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder31d38;
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
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, '__isset', array('name' => $name), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31d38;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder31d38;
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
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, '__unset', array('name' => $name), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder31d38;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder31d38;
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
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, '__clone', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        $this->valueHolder31d38 = clone $this->valueHolder31d38;
    }

    public function __sleep()
    {
        $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, '__sleep', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;

        return array('valueHolder31d38');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc431c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc431c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc431c && ($this->initializerc431c->__invoke($valueHolder31d38, $this, 'initializeProxy', array(), $this->initializerc431c) || 1) && $this->valueHolder31d38 = $valueHolder31d38;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder31d38;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder31d38;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
