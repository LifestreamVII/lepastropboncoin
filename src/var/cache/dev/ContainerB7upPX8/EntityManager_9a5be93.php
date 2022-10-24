<?php

namespace ContainerB7upPX8;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder97d6f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer70818 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties392e1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'getConnection', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'getMetadataFactory', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'getExpressionBuilder', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'beginTransaction', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'getCache', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'transactional', array('func' => $func), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'commit', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->commit();
    }

    public function rollback()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'rollback', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'getClassMetadata', array('className' => $className), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'createQuery', array('dql' => $dql), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'createNamedQuery', array('name' => $name), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'createQueryBuilder', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'flush', array('entity' => $entity), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'clear', array('entityName' => $entityName), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->clear($entityName);
    }

    public function close()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'close', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->close();
    }

    public function persist($entity)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'persist', array('entity' => $entity), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'remove', array('entity' => $entity), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'refresh', array('entity' => $entity), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'detach', array('entity' => $entity), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'merge', array('entity' => $entity), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'contains', array('entity' => $entity), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'getEventManager', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'getConfiguration', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'isOpen', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'getUnitOfWork', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'getProxyFactory', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'initializeObject', array('obj' => $obj), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'getFilters', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'isFiltersStateClean', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'hasFilters', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return $this->valueHolder97d6f->hasFilters();
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

        $instance->initializer70818 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder97d6f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder97d6f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder97d6f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, '__get', ['name' => $name], $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        if (isset(self::$publicProperties392e1[$name])) {
            return $this->valueHolder97d6f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97d6f;

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

        $targetObject = $this->valueHolder97d6f;
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
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97d6f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder97d6f;
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
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, '__isset', array('name' => $name), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97d6f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder97d6f;
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
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, '__unset', array('name' => $name), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97d6f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder97d6f;
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
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, '__clone', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        $this->valueHolder97d6f = clone $this->valueHolder97d6f;
    }

    public function __sleep()
    {
        $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, '__sleep', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;

        return array('valueHolder97d6f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer70818 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer70818;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer70818 && ($this->initializer70818->__invoke($valueHolder97d6f, $this, 'initializeProxy', array(), $this->initializer70818) || 1) && $this->valueHolder97d6f = $valueHolder97d6f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder97d6f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder97d6f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
