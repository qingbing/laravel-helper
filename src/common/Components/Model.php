<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace Common\Components;

use DateTimeInterface;

/**
 * Create and return an un-saved model instance.
 * @param array $attributes
 * @method static \Illuminate\Database\Eloquent\Model|static make($attributes = [])
 *
 * Register a new global scope.
 * @param string $identifier
 * @param \Illuminate\Database\Eloquent\Scope|\Closure $scope
 * @method static \Illuminate\Database\Eloquent\Builder withGlobalScope($identifier, $scope)
 *
 * Remove a registered global scope.
 * @param \Illuminate\Database\Eloquent\Scope|string $scope
 * @method static \Illuminate\Database\Eloquent\Builder withoutGlobalScope($scope)
 *
 * Remove all or passed registered global scopes.
 * @param array|null $scopes
 * @method static \Illuminate\Database\Eloquent\Builder withoutGlobalScopes($scopes = null)
 *
 * Get an array of global scopes that were removed from the query.
 * @method static array removedScopes()
 *
 * Add a where clause on the primary key to the query.
 * @param mixed $id
 * @method static \Illuminate\Database\Eloquent\Builder whereKey($id)
 *
 * Add a where clause on the primary key to the query.
 * @param mixed $id
 * @method static \Illuminate\Database\Eloquent\Builder whereKeyNot($id)
 *
 * Add a basic where clause to the query.
 * @param \Closure|string|array $column
 * @param mixed $operator
 * @param mixed $value
 * @param string $boolean
 * @method static \Illuminate\Database\Eloquent\Builder where($column, $operator = null, $value = null, $boolean = 'and')
 *
 * Add a basic where clause to the query, and return the first result.
 * @param \Closure|string|array $column
 * @param mixed $operator
 * @param mixed $value
 * @param string $boolean
 * @method static \Illuminate\Database\Eloquent\Model|static firstWhere($column, $operator = null, $value = null, $boolean = 'and')
 *
 * Add an "or where" clause to the query.
 * @param \Closure|array|string $column
 * @param mixed $operator
 * @param mixed $value
 * @method static \Illuminate\Database\Eloquent\Builder orWhere($column, $operator = null, $value = null)
 *
 * Add an "order by" clause for a timestamp to the query.
 * @param string $column
 * @method static \Illuminate\Database\Eloquent\Builder latest($column = null)
 *
 * Add an "order by" clause for a timestamp to the query.
 * @param string $column
 * @method static \Illuminate\Database\Eloquent\Builder oldest($column = null)
 *
 * Create a collection of models from plain arrays.
 * @param array $items
 * @method static \Illuminate\Database\Eloquent\Collection hydrate($items)
 *
 * Create a collection of models from a raw query.
 * @param string $query
 * @param array $bindings
 * @method static \Illuminate\Database\Eloquent\Collection fromQuery($query, $bindings = [])
 *
 * Find a model by its primary key.
 * @param mixed $id
 * @param array $columns
 * @method static \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null find($id, $columns = [])
 *
 * Find multiple models by their primary keys.
 * @param \Illuminate\Contracts\Support\Arrayable|array $ids
 * @param array $columns
 * @method static \Illuminate\Database\Eloquent\Collection findMany($ids, $columns = [])
 *
 * Find a model by its primary key or throw an exception.
 * @param mixed $id
 * @param array $columns
 * @param mixed $id
 * @param array $columns
 * @method static \Illuminate\Database\Eloquent\Model|static findOrNew($id, $columns = [])
 *
 * Get the first record matching the attributes or instantiate it.
 * @param array $attributes
 * @param array $values
 * @method static \Illuminate\Database\Eloquent\Model|static firstOrNew($attributes = [], $values = [])
 *
 * Get the first record matching the attributes or create it.
 * @param array $attributes
 * @param array $values
 * @method static \Illuminate\Database\Eloquent\Model|static firstOrCreate($attributes, $values = [])
 *
 * Create or update a record matching the attributes, and fill it with values.
 * @param array $attributes
 * @param array $values
 * @method static \Illuminate\Database\Eloquent\Model|static updateOrCreate($attributes, $values = [])
 *
 * Execute the query and get the first result or throw an exception.
 * @param array $columns
 * @param \Closure|array $columns
 * @param \Closure|null $callback
 * @method static \Illuminate\Database\Eloquent\Model|static|mixed firstOr($columns = [], $callback = null)
 *
 * Get a single column's value from the first result of a query.
 * @param string $column
 * @method static mixed value($column)
 *
 * Execute the query as a "select" statement.
 * @param array|string $columns
 * @method static \Illuminate\Database\Eloquent\Collection|static[] get($columns = [])
 *
 * Get the hydrated models without eager loading.
 * @param array|string $columns
 * @method static \Illuminate\Database\Eloquent\Model[]|static[] getModels($columns = [])
 *
 * Eager load the relationships for the models.
 * @param array $models
 * @method static array eagerLoadRelations($models)
 *
 * Get a lazy collection for the given query.
 * @method static \Illuminate\Support\LazyCollection cursor()
 *
 * Get an array with the values of a given column.
 * @param string $column
 * @param string|null $key
 * @method static \Illuminate\Support\Collection pluck($column, $key = null)
 *
 * Paginate the given query.
 * @param int|null $perPage
 * @param array $columns
 * @param string $pageName
 * @param int|null $page
 * @param int|null $perPage
 * @param array $columns
 * @param string $pageName
 * @param int|null $page
 * @method static \Illuminate\Contracts\Pagination\Paginator simplePaginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
 *
 * Save a new model and return the instance.
 * @param array $attributes
 * @method static \Illuminate\Database\Eloquent\Model|$this create($attributes = [])
 *
 * Save a new model and return the instance. Allow mass-assignment.
 * @param array $attributes
 * @method static \Illuminate\Database\Eloquent\Model|$this forceCreate($attributes)
 *
 * Register a replacement for the default delete function.
 * @param \Closure $callback
 * @method static void onDelete($callback)
 *
 * Call the given local model scopes.
 * @param array|string $scopes
 * @method static static|mixed scopes($scopes)
 *
 * Apply the scopes to the Eloquent builder instance and return it.
 * @method static static applyScopes()
 *
 * Prevent the specified relations from being eager loaded.
 * @param mixed $relations
 * @method static \Illuminate\Database\Eloquent\Builder without($relations)
 *
 * Create a new instance of the model being queried.
 * @param array $attributes
 * @method static \Illuminate\Database\Eloquent\Model|static newModelInstance($attributes = [])
 *
 * Apply query-time casts to the model instance.
 * @param array $casts
 * @method static \Illuminate\Database\Eloquent\Builder withCasts($casts)
 *
 * Get the underlying query builder instance.
 * @method static \Illuminate\Database\Query\Builder getQuery()
 *
 * Set the underlying query builder instance.
 * @param \Illuminate\Database\Query\Builder $query
 * @method static \Illuminate\Database\Eloquent\Builder setQuery($query)
 *
 * Get a base query builder instance.
 * @method static \Illuminate\Database\Query\Builder toBase()
 *
 * Get the relationships being eagerly loaded.
 * @method static array getEagerLoads()
 *
 * Set the relationships being eagerly loaded.
 * @param array $eagerLoad
 * @method static \Illuminate\Database\Eloquent\Builder setEagerLoads($eagerLoad)
 *
 * Get the model instance being queried.
 * @method static \Illuminate\Database\Eloquent\Model|static getModel()
 *
 * Set a model instance for the model being queried.
 * @param \Illuminate\Database\Eloquent\Model $model
 * @method static \Illuminate\Database\Eloquent\Builder setModel($model)
 *
 * Get the given macro by name.
 * @param string $name
 * @method static \Closure getMacro($name)
 *
 * Checks if a macro is registered.
 * @param string $name
 * @method static bool hasMacro($name)
 *
 * Get the given global macro by name.
 * @param string $name
 * @method static \Closure getGlobalMacro($name)
 *
 * Checks if a global macro is registered.
 * @param string $name
 * @method static bool hasGlobalMacro($name)
 *
 * Chunk the results of the query.
 * @param int $count
 * @param callable $callback
 * @method static bool chunk($count, $callback)
 *
 * Execute a callback over each item while chunking.
 * @param callable $callback
 * @param int $count
 * @method static bool each($callback, $count = 1000)
 *
 * Chunk the results of a query by comparing IDs.
 * @param int $count
 * @param callable $callback
 * @param string|null $column
 * @param string|null $alias
 * @method static bool chunkById($count, $callback, $column = null, $alias = null)
 *
 * Execute a callback over each item while chunking by ID.
 * @param callable $callback
 * @param int $count
 * @param string|null $column
 * @param string|null $alias
 * @method static bool eachById($callback, $count = 1000, $column = null, $alias = null)
 *
 * Execute the query and get the first result.
 * @param array|string $columns
 * @method static \Illuminate\Database\Eloquent\Model|object|static|null first($columns = [])
 *
 * Apply the callback's query changes if the given "value" is true.
 * @param mixed $value
 * @param callable $callback
 * @param callable|null $default
 * @method static mixed|$this when($value, $callback, $default = null)
 *
 * Pass the query to a given callback.
 * @param callable $callback
 * @method static \Illuminate\Database\Eloquent\Builder tap($callback)
 *
 * Apply the callback's query changes if the given "value" is false.
 * @param mixed $value
 * @param callable $callback
 * @param callable|null $default
 * @method static mixed|$this unless($value, $callback, $default = null)
 *
 * Add a relationship count / exists condition to the query.
 * @param \Illuminate\Database\Eloquent\Relations\Relation|string $relation
 * @param string $operator
 * @param int $count
 * @param string $boolean
 * @param \Closure|null $callback
 * @param string $relation
 * @param string $operator
 * @param int $count
 * @method static \Illuminate\Database\Eloquent\Builder|static orHas($relation, $operator = '>=', $count = 1)
 *
 * Add a relationship count / exists condition to the query.
 * @param string $relation
 * @param string $boolean
 * @param \Closure|null $callback
 * @method static \Illuminate\Database\Eloquent\Builder|static doesntHave($relation, $boolean = 'and', $callback = null)
 *
 * Add a relationship count / exists condition to the query with an "or".
 * @param string $relation
 * @method static \Illuminate\Database\Eloquent\Builder|static orDoesntHave($relation)
 *
 * Add a relationship count / exists condition to the query with where clauses.
 * @param string $relation
 * @param \Closure|null $callback
 * @param string $operator
 * @param int $count
 * @method static \Illuminate\Database\Eloquent\Builder|static whereHas($relation, $callback = null, $operator = '>=', $count = 1)
 *
 * Add a relationship count / exists condition to the query with where clauses and an "or".
 * @param string $relation
 * @param \Closure|null $callback
 * @param string $operator
 * @param int $count
 * @method static \Illuminate\Database\Eloquent\Builder|static orWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
 *
 * Add a relationship count / exists condition to the query with where clauses.
 * @param string $relation
 * @param \Closure|null $callback
 * @method static \Illuminate\Database\Eloquent\Builder|static whereDoesntHave($relation, $callback = null)
 *
 * Add a relationship count / exists condition to the query with where clauses and an "or".
 * @param string $relation
 * @param \Closure|null $callback
 * @method static \Illuminate\Database\Eloquent\Builder|static orWhereDoesntHave($relation, $callback = null)
 *
 * Add a polymorphic relationship count / exists condition to the query.
 * @param string $relation
 * @param string|array $types
 * @param string $operator
 * @param int $count
 * @param string $boolean
 * @param \Closure|null $callback
 * @method static \Illuminate\Database\Eloquent\Builder|static hasMorph($relation, $types, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
 *
 * Add a polymorphic relationship count / exists condition to the query with an "or".
 * @param string $relation
 * @param string|array $types
 * @param string $operator
 * @param int $count
 * @method static \Illuminate\Database\Eloquent\Builder|static orHasMorph($relation, $types, $operator = '>=', $count = 1)
 *
 * Add a polymorphic relationship count / exists condition to the query.
 * @param string $relation
 * @param string|array $types
 * @param string $boolean
 * @param \Closure|null $callback
 * @method static \Illuminate\Database\Eloquent\Builder|static doesntHaveMorph($relation, $types, $boolean = 'and', $callback = null)
 *
 * Add a polymorphic relationship count / exists condition to the query with an "or".
 * @param string $relation
 * @param string|array $types
 * @method static \Illuminate\Database\Eloquent\Builder|static orDoesntHaveMorph($relation, $types)
 *
 * Add a polymorphic relationship count / exists condition to the query with where clauses.
 * @param string $relation
 * @param string|array $types
 * @param \Closure|null $callback
 * @param string $operator
 * @param int $count
 * @method static \Illuminate\Database\Eloquent\Builder|static whereHasMorph($relation, $types, $callback = null, $operator = '>=', $count = 1)
 *
 * Add a polymorphic relationship count / exists condition to the query with where clauses and an "or".
 * @param string $relation
 * @param string|array $types
 * @param \Closure|null $callback
 * @param string $operator
 * @param int $count
 * @method static \Illuminate\Database\Eloquent\Builder|static orWhereHasMorph($relation, $types, $callback = null, $operator = '>=', $count = 1)
 *
 * Add a polymorphic relationship count / exists condition to the query with where clauses.
 * @param string $relation
 * @param string|array $types
 * @param \Closure|null $callback
 * @method static \Illuminate\Database\Eloquent\Builder|static whereDoesntHaveMorph($relation, $types, $callback = null)
 *
 * Add a polymorphic relationship count / exists condition to the query with where clauses and an "or".
 * @param string $relation
 * @param string|array $types
 * @param \Closure|null $callback
 * @method static \Illuminate\Database\Eloquent\Builder|static orWhereDoesntHaveMorph($relation, $types, $callback = null)
 *
 * Add subselect queries to count the relations.
 * @param mixed $relations
 * @method static \Illuminate\Database\Eloquent\Builder withCount($relations)
 *
 * Merge the where constraints from another query to the current query.
 * @param \Illuminate\Database\Eloquent\Builder $from
 * @method static \Illuminate\Database\Eloquent\Builder|static mergeConstraintsFrom($from)
 *
 * Set the columns to be selected.
 * @param array|mixed $columns
 * @method static \Illuminate\Database\Query\Builder select($columns = [])
 *
 * Add a subselect expression to the query.
 * @param \Closure|$this|string $query
 * @param string $as
 * @param string $expression
 * @param array $bindings
 * @method static \Illuminate\Database\Query\Builder selectRaw($expression, $bindings = [])
 *
 * Makes "from" fetch from a subquery.
 * @param \Closure|\Illuminate\Database\Query\Builder|string $query
 * @param string $as
 * @param string $expression
 * @param mixed $bindings
 * @method static \Illuminate\Database\Query\Builder fromRaw($expression, $bindings = [])
 *
 * Add a new select column to the query.
 * @param array|mixed $column
 * @method static \Illuminate\Database\Query\Builder addSelect($column)
 *
 * Force the query to only return distinct results.
 * @method static \Illuminate\Database\Query\Builder distinct()
 *
 * Set the table which the query is targeting.
 * @param \Closure|\Illuminate\Database\Query\Builder|string $table
 * @param string|null $as
 * @method static \Illuminate\Database\Query\Builder from($table, $as = null)
 *
 * Add a join clause to the query.
 * @param string $table
 * @param \Closure|string $first
 * @param string|null $operator
 * @param string|null $second
 * @param string $type
 * @param bool $where
 * @method static \Illuminate\Database\Query\Builder join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
 *
 * Add a "join where" clause to the query.
 * @param string $table
 * @param \Closure|string $first
 * @param string $operator
 * @param string $second
 * @param string $type
 * @method static \Illuminate\Database\Query\Builder joinWhere($table, $first, $operator, $second, $type = 'inner')
 *
 * Add a subquery join clause to the query.
 * @param \Closure|\Illuminate\Database\Query\Builder|string $query
 * @param string $as
 * @param \Closure|string $first
 * @param string|null $operator
 * @param string|null $second
 * @param string $type
 * @param bool $where
 * @param string $table
 * @param \Closure|string $first
 * @param string|null $operator
 * @param string|null $second
 * @method static \Illuminate\Database\Query\Builder leftJoin($table, $first, $operator = null, $second = null)
 *
 * Add a "join where" clause to the query.
 * @param string $table
 * @param \Closure|string $first
 * @param string $operator
 * @param string $second
 * @method static \Illuminate\Database\Query\Builder leftJoinWhere($table, $first, $operator, $second)
 *
 * Add a subquery left join to the query.
 * @param \Closure|\Illuminate\Database\Query\Builder|string $query
 * @param string $as
 * @param \Closure|string $first
 * @param string|null $operator
 * @param string|null $second
 * @method static \Illuminate\Database\Query\Builder leftJoinSub($query, $as, $first, $operator = null, $second = null)
 *
 * Add a right join to the query.
 * @param string $table
 * @param \Closure|string $first
 * @param string|null $operator
 * @param string|null $second
 * @method static \Illuminate\Database\Query\Builder rightJoin($table, $first, $operator = null, $second = null)
 *
 * Add a "right join where" clause to the query.
 * @param string $table
 * @param \Closure|string $first
 * @param string $operator
 * @param string $second
 * @method static \Illuminate\Database\Query\Builder rightJoinWhere($table, $first, $operator, $second)
 *
 * Add a subquery right join to the query.
 * @param \Closure|\Illuminate\Database\Query\Builder|string $query
 * @param string $as
 * @param \Closure|string $first
 * @param string|null $operator
 * @param string|null $second
 * @method static \Illuminate\Database\Query\Builder rightJoinSub($query, $as, $first, $operator = null, $second = null)
 *
 * Add a "cross join" clause to the query.
 * @param string $table
 * @param \Closure|string|null $first
 * @param string|null $operator
 * @param string|null $second
 * @method static \Illuminate\Database\Query\Builder crossJoin($table, $first = null, $operator = null, $second = null)
 *
 * Merge an array of where clauses and bindings.
 * @param array $wheres
 * @param array $bindings
 * @method static void mergeWheres($wheres, $bindings)
 *
 * Prepare the value and operator for a where clause.
 * @param string $value
 * @param string $operator
 * @param bool $useDefault
 * @param string|array $first
 * @param string|null $operator
 * @param string|null $second
 * @param string|null $boolean
 * @method static \Illuminate\Database\Query\Builder whereColumn($first, $operator = null, $second = null, $boolean = 'and')
 *
 * Add an "or where" clause comparing two columns to the query.
 * @param string|array $first
 * @param string|null $operator
 * @param string|null $second
 * @method static \Illuminate\Database\Query\Builder orWhereColumn($first, $operator = null, $second = null)
 *
 * Add a raw where clause to the query.
 * @param string $sql
 * @param mixed $bindings
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder whereRaw($sql, $bindings = [], $boolean = 'and')
 *
 * Add a raw or where clause to the query.
 * @param string $sql
 * @param mixed $bindings
 * @method static \Illuminate\Database\Query\Builder orWhereRaw($sql, $bindings = [])
 *
 * Add a "where in" clause to the query.
 * @param string $column
 * @param mixed $values
 * @param string $boolean
 * @param bool $not
 * @method static \Illuminate\Database\Query\Builder whereIn($column, $values, $boolean = 'and', $not = false)
 *
 * Add an "or where in" clause to the query.
 * @param string $column
 * @param mixed $values
 * @method static \Illuminate\Database\Query\Builder orWhereIn($column, $values)
 *
 * Add a "where not in" clause to the query.
 * @param string $column
 * @param mixed $values
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder whereNotIn($column, $values, $boolean = 'and')
 *
 * Add an "or where not in" clause to the query.
 * @param string $column
 * @param mixed $values
 * @method static \Illuminate\Database\Query\Builder orWhereNotIn($column, $values)
 *
 * Add a "where in raw" clause for integer values to the query.
 * @param string $column
 * @param \Illuminate\Contracts\Support\Arrayable|array $values
 * @param string $boolean
 * @param bool $not
 * @method static \Illuminate\Database\Query\Builder whereIntegerInRaw($column, $values, $boolean = 'and', $not = false)
 *
 * Add an "or where in raw" clause for integer values to the query.
 * @param string $column
 * @param \Illuminate\Contracts\Support\Arrayable|array $values
 * @method static \Illuminate\Database\Query\Builder orWhereIntegerInRaw($column, $values)
 *
 * Add a "where not in raw" clause for integer values to the query.
 * @param string $column
 * @param \Illuminate\Contracts\Support\Arrayable|array $values
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder whereIntegerNotInRaw($column, $values, $boolean = 'and')
 *
 * Add an "or where not in raw" clause for integer values to the query.
 * @param string $column
 * @param \Illuminate\Contracts\Support\Arrayable|array $values
 * @method static \Illuminate\Database\Query\Builder orWhereIntegerNotInRaw($column, $values)
 *
 * Add a "where null" clause to the query.
 * @param string|array $columns
 * @param string $boolean
 * @param bool $not
 * @method static \Illuminate\Database\Query\Builder whereNull($columns, $boolean = 'and', $not = false)
 *
 * Add an "or where null" clause to the query.
 * @param string $column
 * @method static \Illuminate\Database\Query\Builder orWhereNull($column)
 *
 * Add a "where not null" clause to the query.
 * @param string|array $columns
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder whereNotNull($columns, $boolean = 'and')
 *
 * Add a where between statement to the query.
 * @param string $column
 * @param array $values
 * @param string $boolean
 * @param bool $not
 * @method static \Illuminate\Database\Query\Builder whereBetween($column, $values, $boolean = 'and', $not = false)
 *
 * Add an or where between statement to the query.
 * @param string $column
 * @param array $values
 * @method static \Illuminate\Database\Query\Builder orWhereBetween($column, $values)
 *
 * Add a where not between statement to the query.
 * @param string $column
 * @param array $values
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder whereNotBetween($column, $values, $boolean = 'and')
 *
 * Add an or where not between statement to the query.
 * @param string $column
 * @param array $values
 * @method static \Illuminate\Database\Query\Builder orWhereNotBetween($column, $values)
 *
 * Add an "or where not null" clause to the query.
 * @param string $column
 * @method static \Illuminate\Database\Query\Builder orWhereNotNull($column)
 *
 * Add a "where date" statement to the query.
 * @param string $column
 * @param string $operator
 * @param \DateTimeInterface|string|null $value
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder whereDate($column, $operator, $value = null, $boolean = 'and')
 *
 * Add an "or where date" statement to the query.
 * @param string $column
 * @param string $operator
 * @param \DateTimeInterface|string|null $value
 * @method static \Illuminate\Database\Query\Builder orWhereDate($column, $operator, $value = null)
 *
 * Add a "where time" statement to the query.
 * @param string $column
 * @param string $operator
 * @param \DateTimeInterface|string|null $value
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder whereTime($column, $operator, $value = null, $boolean = 'and')
 *
 * Add an "or where time" statement to the query.
 * @param string $column
 * @param string $operator
 * @param \DateTimeInterface|string|null $value
 * @method static \Illuminate\Database\Query\Builder orWhereTime($column, $operator, $value = null)
 *
 * Add a "where day" statement to the query.
 * @param string $column
 * @param string $operator
 * @param \DateTimeInterface|string|null $value
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder whereDay($column, $operator, $value = null, $boolean = 'and')
 *
 * Add an "or where day" statement to the query.
 * @param string $column
 * @param string $operator
 * @param \DateTimeInterface|string|null $value
 * @method static \Illuminate\Database\Query\Builder orWhereDay($column, $operator, $value = null)
 *
 * Add a "where month" statement to the query.
 * @param string $column
 * @param string $operator
 * @param \DateTimeInterface|string|null $value
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder whereMonth($column, $operator, $value = null, $boolean = 'and')
 *
 * Add an "or where month" statement to the query.
 * @param string $column
 * @param string $operator
 * @param \DateTimeInterface|string|null $value
 * @method static \Illuminate\Database\Query\Builder orWhereMonth($column, $operator, $value = null)
 *
 * Add a "where year" statement to the query.
 * @param string $column
 * @param string $operator
 * @param \DateTimeInterface|string|int|null $value
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder whereYear($column, $operator, $value = null, $boolean = 'and')
 *
 * Add an "or where year" statement to the query.
 * @param string $column
 * @param string $operator
 * @param \DateTimeInterface|string|int|null $value
 * @method static \Illuminate\Database\Query\Builder orWhereYear($column, $operator, $value = null)
 *
 * Add a nested where statement to the query.
 * @param \Closure $callback
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder whereNested($callback, $boolean = 'and')
 *
 * Create a new query instance for nested where condition.
 * @method static \Illuminate\Database\Query\Builder forNestedWhere()
 *
 * Add another query builder as a nested where to the query builder.
 * @param $this $query
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder addNestedWhereQuery($query, $boolean = 'and')
 *
 * Add an exists clause to the query.
 * @param \Closure $callback
 * @param string $boolean
 * @param bool $not
 * @method static \Illuminate\Database\Query\Builder whereExists($callback, $boolean = 'and', $not = false)
 *
 * Add an or exists clause to the query.
 * @param \Closure $callback
 * @param bool $not
 * @method static \Illuminate\Database\Query\Builder orWhereExists($callback, $not = false)
 *
 * Add a where not exists clause to the query.
 * @param \Closure $callback
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder whereNotExists($callback, $boolean = 'and')
 *
 * Add a where not exists clause to the query.
 * @param \Closure $callback
 * @method static \Illuminate\Database\Query\Builder orWhereNotExists($callback)
 *
 * Add an exists clause to the query.
 * @param \Illuminate\Database\Query\Builder $query
 * @param string $boolean
 * @param bool $not
 * @method static \Illuminate\Database\Query\Builder addWhereExistsQuery($query, $boolean = 'and', $not = false)
 *
 * Adds a where condition using row values.
 * @param array $columns
 * @param string $operator
 * @param array $values
 * @param string $boolean
 * @param array $columns
 * @param string $operator
 * @param array $values
 * @method static \Illuminate\Database\Query\Builder orWhereRowValues($columns, $operator, $values)
 *
 * Add a "where JSON contains" clause to the query.
 * @param string $column
 * @param mixed $value
 * @param string $boolean
 * @param bool $not
 * @method static \Illuminate\Database\Query\Builder whereJsonContains($column, $value, $boolean = 'and', $not = false)
 *
 * Add a "or where JSON contains" clause to the query.
 * @param string $column
 * @param mixed $value
 * @method static \Illuminate\Database\Query\Builder orWhereJsonContains($column, $value)
 *
 * Add a "where JSON not contains" clause to the query.
 * @param string $column
 * @param mixed $value
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder whereJsonDoesntContain($column, $value, $boolean = 'and')
 *
 * Add a "or where JSON not contains" clause to the query.
 * @param string $column
 * @param mixed $value
 * @method static \Illuminate\Database\Query\Builder orWhereJsonDoesntContain($column, $value)
 *
 * Add a "where JSON length" clause to the query.
 * @param string $column
 * @param mixed $operator
 * @param mixed $value
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder whereJsonLength($column, $operator, $value = null, $boolean = 'and')
 *
 * Add a "or where JSON length" clause to the query.
 * @param string $column
 * @param mixed $operator
 * @param mixed $value
 * @method static \Illuminate\Database\Query\Builder orWhereJsonLength($column, $operator, $value = null)
 *
 * Handles dynamic "where" clauses to the query.
 * @param string $method
 * @param array $parameters
 * @method static \Illuminate\Database\Query\Builder dynamicWhere($method, $parameters)
 *
 * Add a "group by" clause to the query.
 * @param array|string $groups
 * @method static \Illuminate\Database\Query\Builder groupBy(...$groups)
 *
 * Add a raw groupBy clause to the query.
 * @param string $sql
 * @param array $bindings
 * @method static \Illuminate\Database\Query\Builder groupByRaw($sql, $bindings = [])
 *
 * Add a "having" clause to the query.
 * @param string $column
 * @param string|null $operator
 * @param string|null $value
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder having($column, $operator = null, $value = null, $boolean = 'and')
 *
 * Add a "or having" clause to the query.
 * @param string $column
 * @param string|null $operator
 * @param string|null $value
 * @method static \Illuminate\Database\Query\Builder orHaving($column, $operator = null, $value = null)
 *
 * Add a "having between " clause to the query.
 * @param string $column
 * @param array $values
 * @param string $boolean
 * @param bool $not
 * @method static \Illuminate\Database\Query\Builder havingBetween($column, $values, $boolean = 'and', $not = false)
 *
 * Add a raw having clause to the query.
 * @param string $sql
 * @param array $bindings
 * @param string $boolean
 * @method static \Illuminate\Database\Query\Builder havingRaw($sql, $bindings = [], $boolean = 'and')
 *
 * Add a raw or having clause to the query.
 * @param string $sql
 * @param array $bindings
 * @method static \Illuminate\Database\Query\Builder orHavingRaw($sql, $bindings = [])
 *
 * Add an "order by" clause to the query.
 * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Query\Expression|string $column
 * @param string $direction
 * @param string $column
 * @method static \Illuminate\Database\Query\Builder orderByDesc($column)
 *
 * Put the query's results in random order.
 * @param string $seed
 * @method static \Illuminate\Database\Query\Builder inRandomOrder($seed = '')
 *
 * Add a raw "order by" clause to the query.
 * @param string $sql
 * @param array $bindings
 * @method static \Illuminate\Database\Query\Builder orderByRaw($sql, $bindings = [])
 *
 * Alias to set the "offset" value of the query.
 * @param int $value
 * @method static \Illuminate\Database\Query\Builder skip($value)
 *
 * Set the "offset" value of the query.
 * @param int $value
 * @method static \Illuminate\Database\Query\Builder offset($value)
 *
 * Alias to set the "limit" value of the query.
 * @param int $value
 * @method static \Illuminate\Database\Query\Builder take($value)
 *
 * Set the "limit" value of the query.
 * @param int $value
 * @method static \Illuminate\Database\Query\Builder limit($value)
 *
 * Set the limit and offset for a given page.
 * @param int $page
 * @param int $perPage
 * @method static \Illuminate\Database\Query\Builder forPage($page, $perPage = 15)
 *
 * Constrain the query to the previous "page" of results before a given ID.
 * @param int $perPage
 * @param int|null $lastId
 * @param string $column
 * @method static \Illuminate\Database\Query\Builder forPageBeforeId($perPage = 15, $lastId = 0, $column = 'id')
 *
 * Constrain the query to the next "page" of results after a given ID.
 * @param int $perPage
 * @param int|null $lastId
 * @param string $column
 * @method static \Illuminate\Database\Query\Builder forPageAfterId($perPage = 15, $lastId = 0, $column = 'id')
 *
 * Remove all existing orders and optionally add a new order.
 * @param string|null $column
 * @param string $direction
 * @method static \Illuminate\Database\Query\Builder reorder($column = null, $direction = 'asc')
 *
 * Add a union statement to the query.
 * @param \Illuminate\Database\Query\Builder|\Closure $query
 * @param bool $all
 * @method static \Illuminate\Database\Query\Builder union($query, $all = false)
 *
 * Add a union all statement to the query.
 * @param \Illuminate\Database\Query\Builder|\Closure $query
 * @method static \Illuminate\Database\Query\Builder unionAll($query)
 *
 * Lock the selected rows in the table.
 * @param string|bool $value
 * @method static \Illuminate\Database\Query\Builder lock($value = true)
 *
 * Lock the selected rows in the table for updating.
 * @method static \Illuminate\Database\Query\Builder lockForUpdate()
 *
 * Share lock the selected rows in the table.
 * @method static \Illuminate\Database\Query\Builder sharedLock()
 *
 * Get the SQL representation of the query.
 * @method static string toSql()
 *
 * Get the count of the total records for the paginator.
 * @param array $columns
 * @method static int getCountForPagination($columns = [])
 *
 * Concatenate values of a given column as a string.
 * @param string $column
 * @param string $glue
 * @method static string implode($column, $glue = '')
 *
 * Determine if any rows exist for the current query.
 * @method static bool exists()
 *
 * Determine if no rows exist for the current query.
 * @method static bool doesntExist()
 *
 * Execute the given callback if no rows exist for the current query.
 * @param \Closure $callback
 * @method static mixed existsOr($callback)
 *
 * Execute the given callback if rows exist for the current query.
 * @param \Closure $callback
 * @method static mixed doesntExistOr($callback)
 *
 * Retrieve the "count" result of the query.
 * @param string $columns
 * @method static int count($columns = '*')
 *
 * Retrieve the minimum value of a given column.
 * @param string $column
 * @method static mixed min($column)
 *
 * Retrieve the maximum value of a given column.
 * @param string $column
 * @method static mixed max($column)
 *
 * Retrieve the sum of the values of a given column.
 * @param string $column
 * @method static mixed sum($column)
 *
 * Retrieve the average of the values of a given column.
 * @param string $column
 * @method static mixed avg($column)
 *
 * Alias for the "avg" method.
 * @param string $column
 * @method static mixed average($column)
 *
 * Execute an aggregate function on the database.
 * @param string $function
 * @param array $columns
 * @method static mixed aggregate($function, $columns = [])
 *
 * Execute a numeric aggregate function on the database.
 * @param string $function
 * @param array $columns
 * @method static float|int numericAggregate($function, $columns = [])
 *
 * Insert a new record into the database.
 * @param array $values
 * @method static bool insert($values)
 *
 * Insert a new record into the database while ignoring errors.
 * @param array $values
 * @method static int insertOrIgnore($values)
 *
 * Insert a new record and get the value of the primary key.
 * @param array $values
 * @param string|null $sequence
 * @method static int insertGetId($values, $sequence = null)
 *
 * Insert new records into the table using a subquery.
 * @param array $columns
 * @param \Closure|\Illuminate\Database\Query\Builder|string $query
 * @method static int insertUsing($columns, $query)
 *
 * Insert or update a record matching the attributes, and fill it with values.
 * @param array $attributes
 * @param array $values
 * @method static bool updateOrInsert($attributes, $values = [])
 *
 * Run a truncate statement on the table.
 * @method static void truncate()
 *
 * Create a raw database expression.
 * @param mixed $value
 * @method static \Illuminate\Database\Query\Expression raw($value)
 *
 * Get the current query value bindings in a flattened array.
 * @method static array getBindings()
 *
 * Get the raw array of bindings.
 * @method static array getRawBindings()
 *
 * Set the bindings on the query builder.
 * @param array $bindings
 * @param string $type
 * @param mixed $value
 * @param string $type
 * @param \Illuminate\Database\Query\Builder $query
 * @method static \Illuminate\Database\Query\Builder mergeBindings($query)
 *
 * Get the database query processor instance.
 * @method static \Illuminate\Database\Query\Processors\Processor getProcessor()
 *
 * Get the query grammar instance.
 * @method static \Illuminate\Database\Query\Grammars\Grammar getGrammar()
 *
 * Use the write pdo for query.
 * @method static \Illuminate\Database\Query\Builder useWritePdo()
 *
 * Clone the query without the given properties.
 * @param array $properties
 * @method static static cloneWithout($properties)
 *
 * Clone the query without the given bindings.
 * @param array $except
 * @method static static cloneWithoutBindings($except)
 *
 * Dump the current SQL and bindings.
 * @method static \Illuminate\Database\Query\Builder dump()
 *
 * Die and dump the current SQL and bindings.
 * @method static void dd()
 *
 * Register a custom macro.
 * @param string $name
 * @param object|callable $macro
 * @method static void macro($name, $macro)
 *
 * Mix another object into the class.
 * @param object $mixin
 * @param bool $replace
 * @param string $method
 * @param array $parameters
 * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
 * @method static \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static|static[] findOrFail($id, $columns = [])
 *
 * Find a model by its primary key or return fresh model instance.
 * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
 * @method static \Illuminate\Database\Eloquent\Model|static firstOrFail($columns = [])
 *
 * Execute the query and get the first result or call a callback.
 * @throws \InvalidArgumentException
 * @method static \Illuminate\Contracts\Pagination\LengthAwarePaginator paginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
 *
 * Paginate the given query into a simple paginator.
 * @throws \RuntimeException
 * @method static \Illuminate\Database\Eloquent\Builder|static has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
 *
 * Add a relationship count / exists condition to the query with an "or".
 * @throws \InvalidArgumentException
 * @method static \Illuminate\Database\Query\Builder selectSub($query, $as)
 *
 * Add a new "raw" select expression to the query.
 * @throws \InvalidArgumentException
 * @method static \Illuminate\Database\Query\Builder fromSub($query, $as)
 *
 * Add a raw from clause to the query.
 * @throws \InvalidArgumentException
 * @method static \Illuminate\Database\Query\Builder joinSub($query, $as, $first, $operator = null, $second = null, $type = 'inner', $where = false)
 *
 * Add a left join to the query.
 * @throws \InvalidArgumentException
 * @method static array prepareValueAndOperator($value, $operator, $useDefault = false)
 *
 * Add a "where" clause comparing two columns to the query.
 * @throws \InvalidArgumentException
 * @method static \Illuminate\Database\Query\Builder whereRowValues($columns, $operator, $values, $boolean = 'and')
 *
 * Adds a or where condition using row values.
 * @throws \InvalidArgumentException
 * @method static \Illuminate\Database\Query\Builder orderBy($column, $direction = 'asc')
 *
 * Add a descending "order by" clause to the query.
 * @throws \InvalidArgumentException
 * @method static \Illuminate\Database\Query\Builder setBindings($bindings, $type = 'where')
 *
 * Add a binding to the query.
 * @throws \InvalidArgumentException
 * @method static \Illuminate\Database\Query\Builder addBinding($value, $type = 'where')
 *
 * Merge an array of bindings into our bindings.
 * @throws \ReflectionException
 * @method static void mixin($mixin, $replace = true)
 *
 * Dynamically handle calls to the class.
 * @throws \BadMethodCallException
 * @method static mixed macroCall($method, $parameters)
 *
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 *
 * 模型基类
 *
 * Class Model
 * @package Program\Models
 */
class Model extends \Illuminate\Database\Eloquent\Model
{
    // const CREATED_AT = 'created_at'; // 数据创建的时间戳字段名
    // const UPDATED_AT = 'updated_at'; // 数据更新的时间戳字段名
    // protected $table; // 表名，默认为类名的"_"表示方式
    // protected $primaryKey   = 'id'; // 表主键，默认为 id
    // public    $incrementing = true; // 主键是否自增，默认为 true
    // protected $keyType      = 'int'; // 自动递增ID的“类型”，默认 int，如果你的主键不是整数，需要将模型上受保护的 $keyType 属性设置为 string
    // public    $timestamps   = true; // 是否自动维护时间戳，默认为 true
    protected $dateFormat = 'Y-m-d H:i:s'; // 模型中时间戳格式自定义
    // protected $connection; // model 的数据库连接名称
    // protected $attributes   = []; // 模型的默认属性值

    /**
     * Prepare a date for array / JSON serialization.
     */
    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format($this->dateFormat);
    }

    /**
     * 获取调用模型的数据表名
     *
     * @return string
     */
    public static function tableName()
    {
        return (new static())->table;
    }

    /**
     * 批量设置模型属性
     *
     * @param array $attributes
     * @return $this
     */
    public function setAttributes(array $attributes = [])
    {
        foreach ($attributes as $property => $attribute) {
            $this->setAttribute($property, $attribute);
        }
        return $this;
    }
}