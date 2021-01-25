<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompositeLaPeugeot extends Composite
{
    protected $prix;
    
    public function __construct(int $lePrix)
    {
        $this->prix = $lePrix;
    }

    public function getPrixTotal(){
        return $this->prix;
    }

}
