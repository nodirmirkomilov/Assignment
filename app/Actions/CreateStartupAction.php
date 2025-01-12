<?php

namespace App\Actions;

use App\DTO\StartupDTO;
use App\Models\Startup;

class CreateStartupAction
{
    public function execute(StartupDTO $data): Startup
    {
        $startup = Startup::create($data->toArray());

        $startup->resources()->sync($data->resources);

        return $startup;
    }

}
