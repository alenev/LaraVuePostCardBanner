<?php

namespace App\Repositories;

use App\Models\Status;

class StatusRepository
{
    public function getById($id)
    {
        return Status::find($id);
    }
}