<?php

namespace App\DTO;

use App\Http\Requests\StartupRequest;
use Spatie\LaravelData\Data;

class StartupDTO extends Data
{

    public function __construct(
        public string $title,
        public string $description,
        public int $direction_id,
        public int $members,
        public int $model_id,
        public string $file,
        public string $sales,
        public string $link,
        public string $full_name,
        public string $role,
        public int $age,
        public string $duration,
        public string $phone,
        public string $telegram,
        public string $email,
        public string $resource_description,
        public array $resources,
        public int $social_id,
    ){}

    /**
     * @throws \Exception
     */
    public static function fromRequest(StartupRequest $request): self
    {
        return new self(
            title: $request->input('title'),
            description: $request->input('description'),
            direction_id: $request->input('direction_id'),
            members: $request->input('members'),
            model_id: $request->input('model_id'),
            file: $request->hasFile('file') ? $request->file('file')->store('public') : throw new \Exception('File error'),
            sales: $request->input('sales'),
            link: $request->input('link'),
            full_name: $request->input('full_name'),
            role: $request->input('role'),
            age: $request->input('age'),
            duration: $request->input('duration'),
            phone: $request->input('phone'),
            telegram: $request->input('telegram'),
            email: $request->input('email'),
            resource_description: $request->input('resource_description'),
            resources: $request->input('resources'),
            social_id: $request->input('social_id')
        );
    }
}
