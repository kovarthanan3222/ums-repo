<?php

namespace UserBundle\Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \ModelJoin;
use \PDO;
use \Propel;
use \PropelCollection;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use UserBundle\Model\Userdetails;
use UserBundle\Model\UserdetailsPeer;
use UserBundle\Model\UserdetailsQuery;
use UserBundle\Model\Users;

/**
 * @method UserdetailsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method UserdetailsQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method UserdetailsQuery orderByEmailId($order = Criteria::ASC) Order by the email_id column
 * @method UserdetailsQuery orderByMobileNo($order = Criteria::ASC) Order by the mobile_no column
 *
 * @method UserdetailsQuery groupById() Group by the id column
 * @method UserdetailsQuery groupByUserId() Group by the user_id column
 * @method UserdetailsQuery groupByEmailId() Group by the email_id column
 * @method UserdetailsQuery groupByMobileNo() Group by the mobile_no column
 *
 * @method UserdetailsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UserdetailsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UserdetailsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UserdetailsQuery leftJoinUsers($relationAlias = null) Adds a LEFT JOIN clause to the query using the Users relation
 * @method UserdetailsQuery rightJoinUsers($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Users relation
 * @method UserdetailsQuery innerJoinUsers($relationAlias = null) Adds a INNER JOIN clause to the query using the Users relation
 *
 * @method Userdetails findOne(PropelPDO $con = null) Return the first Userdetails matching the query
 * @method Userdetails findOneOrCreate(PropelPDO $con = null) Return the first Userdetails matching the query, or a new Userdetails object populated from the query conditions when no match is found
 *
 * @method Userdetails findOneByUserId(int $user_id) Return the first Userdetails filtered by the user_id column
 * @method Userdetails findOneByEmailId(string $email_id) Return the first Userdetails filtered by the email_id column
 * @method Userdetails findOneByMobileNo(string $mobile_no) Return the first Userdetails filtered by the mobile_no column
 *
 * @method array findById(int $id) Return Userdetails objects filtered by the id column
 * @method array findByUserId(int $user_id) Return Userdetails objects filtered by the user_id column
 * @method array findByEmailId(string $email_id) Return Userdetails objects filtered by the email_id column
 * @method array findByMobileNo(string $mobile_no) Return Userdetails objects filtered by the mobile_no column
 */
abstract class BaseUserdetailsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUserdetailsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'default';
        }
        if (null === $modelName) {
            $modelName = 'UserBundle\\Model\\Userdetails';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UserdetailsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UserdetailsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UserdetailsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UserdetailsQuery) {
            return $criteria;
        }
        $query = new UserdetailsQuery(null, null, $modelAlias);

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
     * @return   Userdetails|Userdetails[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UserdetailsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UserdetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Userdetails A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Userdetails A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `user_id`, `email_id`, `mobile_no` FROM `userDetails` WHERE `id` = :p0';
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
            $obj = new Userdetails();
            $obj->hydrate($row);
            UserdetailsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Userdetails|Userdetails[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Userdetails[]|mixed the list of results, formatted by the current formatter
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
     * @return UserdetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UserdetailsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UserdetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UserdetailsPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserdetailsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(UserdetailsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(UserdetailsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserdetailsPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id >= 12
     * $query->filterByUserId(array('max' => 12)); // WHERE user_id <= 12
     * </code>
     *
     * @see       filterByUsers()
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserdetailsQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(UserdetailsPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(UserdetailsPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserdetailsPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the email_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailId('fooValue');   // WHERE email_id = 'fooValue'
     * $query->filterByEmailId('%fooValue%'); // WHERE email_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emailId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserdetailsQuery The current query, for fluid interface
     */
    public function filterByEmailId($emailId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emailId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emailId)) {
                $emailId = str_replace('*', '%', $emailId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserdetailsPeer::EMAIL_ID, $emailId, $comparison);
    }

    /**
     * Filter the query on the mobile_no column
     *
     * Example usage:
     * <code>
     * $query->filterByMobileNo('fooValue');   // WHERE mobile_no = 'fooValue'
     * $query->filterByMobileNo('%fooValue%'); // WHERE mobile_no LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mobileNo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserdetailsQuery The current query, for fluid interface
     */
    public function filterByMobileNo($mobileNo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mobileNo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mobileNo)) {
                $mobileNo = str_replace('*', '%', $mobileNo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserdetailsPeer::MOBILE_NO, $mobileNo, $comparison);
    }

    /**
     * Filter the query by a related Users object
     *
     * @param   Users|PropelObjectCollection $users The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UserdetailsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsers($users, $comparison = null)
    {
        if ($users instanceof Users) {
            return $this
                ->addUsingAlias(UserdetailsPeer::USER_ID, $users->getId(), $comparison);
        } elseif ($users instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UserdetailsPeer::USER_ID, $users->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUsers() only accepts arguments of type Users or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Users relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UserdetailsQuery The current query, for fluid interface
     */
    public function joinUsers($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Users');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Users');
        }

        return $this;
    }

    /**
     * Use the Users relation Users object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \UserBundle\Model\UsersQuery A secondary query class using the current class as primary query
     */
    public function useUsersQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUsers($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Users', '\UserBundle\Model\UsersQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Userdetails $userdetails Object to remove from the list of results
     *
     * @return UserdetailsQuery The current query, for fluid interface
     */
    public function prune($userdetails = null)
    {
        if ($userdetails) {
            $this->addUsingAlias(UserdetailsPeer::ID, $userdetails->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
