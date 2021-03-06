<?php

namespace Rubricate\Sealion\Filter;

class EqualToFilterSealion extends AbstractEnableWhereFilterSealion
{
    private $filter;

    public function __construct($key, $value) 
    {
        $this->filter = new FilterSealion($key . ' = ', $value);
    }


    public function getFilter()
    {
        return $this->filter->getFilter();
    }


}

