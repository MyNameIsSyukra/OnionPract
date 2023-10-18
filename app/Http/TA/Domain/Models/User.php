<?php

namespace App\Http\TA\Domain\Models;
use App\Http\TA\Domain\Enum\StatusUser;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User
{
    public function __construct(
    private int $Id,
    private string $nama,
    private string $pass 
    )
    {
    }
    public function getName() : string {
        return $this->nama;
    }
    public function getId() : int {
        return $this->Id;
    }

    public function getPass() : string {
        return $this->pass;
    }

}
