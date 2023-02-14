<?php
namespace MyProject\Repositories;

use MyProject\Models\SOME;

class SOMERepository {
    public function getAll(): array{
        return [
            new SOME('SOME1', 'SOME1'),
            new SOME('SOME2', 'SOME2'),
            new SOME('SOME2', 'SOME2'),
        ];
    }
}