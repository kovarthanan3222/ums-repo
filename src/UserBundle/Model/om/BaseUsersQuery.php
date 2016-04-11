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
use UserBundle\Model\Users;
use UserBundle\Model\UsersPeer;
use UserBundle\Model\UsersQuery;
use UserBundle\Model\userEmail;
use UserBundle\Model\userMobile;

/**
 * @method UsersQuery orderById($order = Criteria::ASC) Order by the id column
 * @method UsersQuery orderByFirstName($order = Criteria::ASC) Order by the first_name column
 * @method UsersQuery orderByLastName($order = Criteria::ASC) Order by the last_name column
 * @method UsersQuery orderBySchoolName($order = Criteria::ASC) Order by the school_name column
 * @method UsersQuery orderByCollegeName($order = Criteria::ASC) Order by the college_name column
 * @method UsersQuery orderByBloodGroup($order = Criteria::ASC) Order by the blood_group column
 * @method UsersQuery orderByGender($order = Criteria::ASC) Order by the gender column
 * @method UsersQuery orderByDateOfBirth($order = Criteria::ASC) Order by the date_of_birth column
 *
 * @method UsersQuery groupById() Group by the id column
 * @method UsersQuery groupByFirstName() Group by the first_name column
 * @method UsersQuery groupByLastName() Group by the last_name column
 * @method UsersQuery groupBySchoolName() Group by the school_name column
 * @method UsersQuery groupByCollegeName() Group by the college_name column
 * @method UsersQuery groupByBloodGroup() Group by the blood_group column
 * @method UsersQuery groupByGender() Group by the gender column
 * @method UsersQuery groupByDateOfBirth() Group by the date_of_birth column
 *
 * @method UsersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UsersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UsersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UsersQuery leftJoinuserEmail($relationAlias = null) Adds a LEFT JOIN clause to the query using the userEmail relation
 * @method UsersQuery rightJoinuserEmail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the userEmail relation
 * @method UsersQuery innerJoinuserEmail($relationAlias = null) Adds a INNER JOIN clause to the query using the userEmail relation
 *
 * @method UsersQuery leftJoinuserMobile($relationAlias = null) Adds a LEFT JOIN clause to the query using the userMobile relation
 * @method UsersQuery rightJoinuserMobile($relationAlias = null) Adds a RIGHT JOIN clause to the query using the userMobile relation
 * @method UsersQuery innerJoinuserMobile($relationAlias = null) Adds a INNER JOIN clause to the query using the userMobile relation
 *
 * @method Users findOne(PropelPDO $con = null) Return the first Users matching the query
 * @method Users findOneOrCreate(PropelPDO $con = null) Return the first Users matching the query, or a new Users object populated from the query conditions when no match is found
 *
 * @method Users findOneByFirstName(string $first_name) Return the first Users filtered by the first_name column
 * @method Users findOneByLastName(string $last_name) Return the first Users filtered by the last_name column
 * @method Users findOneBySchoolName(string $school_name) Return the first Users filtered by the school_name column
 * @method Users findOneByCollegeName(string $college_name) Return the first Users filtered by the college_name column
 * @method Users findOneByBloodGroup(string $blood_group) Return the first Users filtered by the blood_group column
 * @method Users findOneByGender(string $gender) Return the first Users filtered by the gender column
 * @method Users findOneByDateOfBirth(string $date_of_birth) Return the first Users filtered by the date_of_birth column
 *
 * @method array findById(int $id) Return Users objects filtered by the id column
 * @method array findByFirstName(string $first_name) Return Users objects filtered by the first_name column
 * @method array findByLastName(string $last_name) Return Users objects filtered by the last_name column
 * @method array findBySchoolName(string $school_name) Return Users objects filtered by the school_name column
 * @method array findByCollegeName(string $college_name) Return Users objects filtered by the college_name column
 * @method array findByBloodGroup(string $blood_group) Return Users objects filtered by the blood_group column
 * @method array findByGender(string $gender) Return Users objects filtered by the gender column
 * @method array findByDateOfBirth(string $date_of_birth) Return Users objects filtered by the date_of_birth column
 */
abstract class BaseUsersQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUsersQuery object.
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
            $modelName = 'UserBundle\\Model\\Users';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UsersQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UsersQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsersQuery) {
            return $criteria;
        }
        $query = new UsersQuery(null, null, $modelAlias);

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
     * @return   Users|Users[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UsersPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Users A model object, or null if the key is not found
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
     * @return                 Users A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `first_name`, `last_name`, `school_name`, `college_name`, `blood_group`, `gender`, `date_of_birth` FROM `users` WHERE `id` = :p0';
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
            $obj = new Users();
            $obj->hydrate($row);
            UsersPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Users|Users[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Users[]|mixed the list of results, formatted by the current formatter
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
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UsersPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UsersPeer::ID, $keys, Criteria::IN);
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
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(UsersPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(UsersPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsersPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the first_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstName('fooValue');   // WHERE first_name = 'fooValue'
     * $query->filterByFirstName('%fooValue%'); // WHERE first_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByFirstName($firstName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firstName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $firstName)) {
                $firstName = str_replace('*', '%', $firstName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPeer::FIRST_NAME, $firstName, $comparison);
    }

    /**
     * Filter the query on the last_name column
     *
     * Example usage:
     * <code>
     * $query->filterByLastName('fooValue');   // WHERE last_name = 'fooValue'
     * $query->filterByLastName('%fooValue%'); // WHERE last_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lastName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByLastName($lastName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lastName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lastName)) {
                $lastName = str_replace('*', '%', $lastName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPeer::LAST_NAME, $lastName, $comparison);
    }

    /**
     * Filter the query on the school_name column
     *
     * Example usage:
     * <code>
     * $query->filterBySchoolName('fooValue');   // WHERE school_name = 'fooValue'
     * $query->filterBySchoolName('%fooValue%'); // WHERE school_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $schoolName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterBySchoolName($schoolName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($schoolName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $schoolName)) {
                $schoolName = str_replace('*', '%', $schoolName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPeer::SCHOOL_NAME, $schoolName, $comparison);
    }

    /**
     * Filter the query on the college_name column
     *
     * Example usage:
     * <code>
     * $query->filterByCollegeName('fooValue');   // WHERE college_name = 'fooValue'
     * $query->filterByCollegeName('%fooValue%'); // WHERE college_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $collegeName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByCollegeName($collegeName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($collegeName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $collegeName)) {
                $collegeName = str_replace('*', '%', $collegeName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPeer::COLLEGE_NAME, $collegeName, $comparison);
    }

    /**
     * Filter the query on the blood_group column
     *
     * Example usage:
     * <code>
     * $query->filterByBloodGroup('fooValue');   // WHERE blood_group = 'fooValue'
     * $query->filterByBloodGroup('%fooValue%'); // WHERE blood_group LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bloodGroup The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByBloodGroup($bloodGroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bloodGroup)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bloodGroup)) {
                $bloodGroup = str_replace('*', '%', $bloodGroup);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPeer::BLOOD_GROUP, $bloodGroup, $comparison);
    }

    /**
     * Filter the query on the gender column
     *
     * Example usage:
     * <code>
     * $query->filterByGender('fooValue');   // WHERE gender = 'fooValue'
     * $query->filterByGender('%fooValue%'); // WHERE gender LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gender The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByGender($gender = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gender)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gender)) {
                $gender = str_replace('*', '%', $gender);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPeer::GENDER, $gender, $comparison);
    }

    /**
     * Filter the query on the date_of_birth column
     *
     * Example usage:
     * <code>
     * $query->filterByDateOfBirth('2011-03-14'); // WHERE date_of_birth = '2011-03-14'
     * $query->filterByDateOfBirth('now'); // WHERE date_of_birth = '2011-03-14'
     * $query->filterByDateOfBirth(array('max' => 'yesterday')); // WHERE date_of_birth < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateOfBirth The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByDateOfBirth($dateOfBirth = null, $comparison = null)
    {
        if (is_array($dateOfBirth)) {
            $useMinMax = false;
            if (isset($dateOfBirth['min'])) {
                $this->addUsingAlias(UsersPeer::DATE_OF_BIRTH, $dateOfBirth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateOfBirth['max'])) {
                $this->addUsingAlias(UsersPeer::DATE_OF_BIRTH, $dateOfBirth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsersPeer::DATE_OF_BIRTH, $dateOfBirth, $comparison);
    }

    /**
     * Filter the query by a related userEmail object
     *
     * @param   userEmail|PropelObjectCollection $userEmail  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByuserEmail($userEmail, $comparison = null)
    {
        if ($userEmail instanceof userEmail) {
            return $this
                ->addUsingAlias(UsersPeer::ID, $userEmail->getUserId(), $comparison);
        } elseif ($userEmail instanceof PropelObjectCollection) {
            return $this
                ->useuserEmailQuery()
                ->filterByPrimaryKeys($userEmail->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByuserEmail() only accepts arguments of type userEmail or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the userEmail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function joinuserEmail($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('userEmail');

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
            $this->addJoinObject($join, 'userEmail');
        }

        return $this;
    }

    /**
     * Use the userEmail relation userEmail object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \UserBundle\Model\userEmailQuery A secondary query class using the current class as primary query
     */
    public function useuserEmailQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinuserEmail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'userEmail', '\UserBundle\Model\userEmailQuery');
    }

    /**
     * Filter the query by a related userMobile object
     *
     * @param   userMobile|PropelObjectCollection $userMobile  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByuserMobile($userMobile, $comparison = null)
    {
        if ($userMobile instanceof userMobile) {
            return $this
                ->addUsingAlias(UsersPeer::ID, $userMobile->getUserId(), $comparison);
        } elseif ($userMobile instanceof PropelObjectCollection) {
            return $this
                ->useuserMobileQuery()
                ->filterByPrimaryKeys($userMobile->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByuserMobile() only accepts arguments of type userMobile or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the userMobile relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function joinuserMobile($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('userMobile');

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
            $this->addJoinObject($join, 'userMobile');
        }

        return $this;
    }

    /**
     * Use the userMobile relation userMobile object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \UserBundle\Model\userMobileQuery A secondary query class using the current class as primary query
     */
    public function useuserMobileQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinuserMobile($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'userMobile', '\UserBundle\Model\userMobileQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Users $users Object to remove from the list of results
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function prune($users = null)
    {
        if ($users) {
            $this->addUsingAlias(UsersPeer::ID, $users->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
