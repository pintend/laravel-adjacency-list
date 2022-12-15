<?php

namespace Staudenmeir\LaravelAdjacencyList\Query\Grammars;

class SingleStoreGrammar extends MySqlGrammar
{
    /**
     * Compile an initial path.
     *
     * @param string $column
     * @param string $alias
     * @return string
     */
    public function compileInitialPath($column, $alias)
    {
        return 'cast(' . $this->wrap($column) . ' as char(1892)) as ' . $this->wrap($alias);
    }
}