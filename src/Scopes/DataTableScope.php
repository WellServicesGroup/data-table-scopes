<?php

namespace WellServicesGroup\DataTableScopes\Scopes;

class DataTableScope implements DataTableScopeContract
{
    protected $functionName;
    protected $arguments;

    public function __construct(string $functionName, array $arguments)
    {
        $this->functionName = $functionName;
        $this->arguments = $arguments;
    }

    /**
     * Apply a query scope.
     *
     * @param $query
     * @return mixed
     */
    public function apply($query)
    {
        $functionName = $this->functionName;

        return $query->$functionName(...$this->arguments);
    }
}
