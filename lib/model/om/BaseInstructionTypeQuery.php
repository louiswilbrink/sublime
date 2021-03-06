<?php


/**
 * Base class that represents a query for the 'instruction_type' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Mon Jan  7 23:45:26 2013
 *
 * @method InstructionTypeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method InstructionTypeQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method InstructionTypeQuery orderByStyleClass($order = Criteria::ASC) Order by the style_class column
 *
 * @method InstructionTypeQuery groupById() Group by the id column
 * @method InstructionTypeQuery groupByName() Group by the name column
 * @method InstructionTypeQuery groupByStyleClass() Group by the style_class column
 *
 * @method InstructionTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method InstructionTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method InstructionTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method InstructionType findOne(PropelPDO $con = null) Return the first InstructionType matching the query
 * @method InstructionType findOneOrCreate(PropelPDO $con = null) Return the first InstructionType matching the query, or a new InstructionType object populated from the query conditions when no match is found
 *
 * @method InstructionType findOneById(int $id) Return the first InstructionType filtered by the id column
 * @method InstructionType findOneByName(string $name) Return the first InstructionType filtered by the name column
 * @method InstructionType findOneByStyleClass(string $style_class) Return the first InstructionType filtered by the style_class column
 *
 * @method array findById(int $id) Return InstructionType objects filtered by the id column
 * @method array findByName(string $name) Return InstructionType objects filtered by the name column
 * @method array findByStyleClass(string $style_class) Return InstructionType objects filtered by the style_class column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseInstructionTypeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseInstructionTypeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'InstructionType', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new InstructionTypeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     InstructionTypeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return InstructionTypeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof InstructionTypeQuery) {
            return $criteria;
        }
        $query = new InstructionTypeQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   InstructionType|InstructionType[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = InstructionTypePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(InstructionTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   InstructionType A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NAME`, `STYLE_CLASS` FROM `instruction_type` WHERE `ID` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new InstructionType();
            $obj->hydrate($row);
            InstructionTypePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return InstructionType|InstructionType[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|InstructionType[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return InstructionTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(InstructionTypePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return InstructionTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(InstructionTypePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstructionTypeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(InstructionTypePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstructionTypeQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstructionTypePeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the style_class column
     *
     * Example usage:
     * <code>
     * $query->filterByStyleClass('fooValue');   // WHERE style_class = 'fooValue'
     * $query->filterByStyleClass('%fooValue%'); // WHERE style_class LIKE '%fooValue%'
     * </code>
     *
     * @param     string $styleClass The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstructionTypeQuery The current query, for fluid interface
     */
    public function filterByStyleClass($styleClass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($styleClass)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $styleClass)) {
                $styleClass = str_replace('*', '%', $styleClass);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstructionTypePeer::STYLE_CLASS, $styleClass, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   InstructionType $instructionType Object to remove from the list of results
     *
     * @return InstructionTypeQuery The current query, for fluid interface
     */
    public function prune($instructionType = null)
    {
        if ($instructionType) {
            $this->addUsingAlias(InstructionTypePeer::ID, $instructionType->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
