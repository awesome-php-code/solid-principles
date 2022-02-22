<?php

namespace AwesomePhpCode\SolidPrinciples\LSP;

class CSVParser extends Parser
{
    public function line(array $row)
    {
        return implode(';', $row) . PHP_EOL;
    }
}
