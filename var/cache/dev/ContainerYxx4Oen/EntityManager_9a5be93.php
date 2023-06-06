<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderad5c4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1835b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties778ce = [
        
    ];

    public function getConnection()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'getConnection', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'getMetadataFactory', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'getExpressionBuilder', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'beginTransaction', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'getCache', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'transactional', array('func' => $func), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'commit', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->commit();
    }

    public function rollback()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'rollback', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'getClassMetadata', array('className' => $className), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'createQuery', array('dql' => $dql), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'createNamedQuery', array('name' => $name), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'createQueryBuilder', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'flush', array('entity' => $entity), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'clear', array('entityName' => $entityName), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->clear($entityName);
    }

    public function close()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'close', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->close();
    }

    public function persist($entity)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'persist', array('entity' => $entity), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'remove', array('entity' => $entity), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'refresh', array('entity' => $entity), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'detach', array('entity' => $entity), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'merge', array('entity' => $entity), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'contains', array('entity' => $entity), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'getEventManager', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'getConfiguration', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'isOpen', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'getUnitOfWork', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'getProxyFactory', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'initializeObject', array('obj' => $obj), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'getFilters', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'isFiltersStateClean', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'hasFilters', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return $this->valueHolderad5c4->hasFilters();
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

        $instance->initializer1835b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderad5c4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderad5c4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderad5c4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, '__get', ['name' => $name], $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        if (isset(self::$publicProperties778ce[$name])) {
            return $this->valueHolderad5c4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad5c4;

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

        $targetObject = $this->valueHolderad5c4;
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
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad5c4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderad5c4;
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
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, '__isset', array('name' => $name), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad5c4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderad5c4;
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
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, '__unset', array('name' => $name), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad5c4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderad5c4;
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
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, '__clone', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        $this->valueHolderad5c4 = clone $this->valueHolderad5c4;
    }

    public function __sleep()
    {
        $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, '__sleep', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;

        return array('valueHolderad5c4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1835b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1835b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1835b && ($this->initializer1835b->__invoke($valueHolderad5c4, $this, 'initializeProxy', array(), $this->initializer1835b) || 1) && $this->valueHolderad5c4 = $valueHolderad5c4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderad5c4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderad5c4;
    }
}
