<?php
/*
 * Copyright 2022 Cloud Creativity Limited
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DummyApp\JsonApi\Countries;

use CloudCreativity\LaravelJsonApi\Rules\HasMany;
use CloudCreativity\LaravelJsonApi\Validation\AbstractValidators;

class Validators extends AbstractValidators
{

    /**
     * @var array
     */
    protected $allowedSortParameters = [
        'createdAt',
        'updatedAt',
        'name',
        'code',
    ];

    /**
     * @var array
     */
    protected $allowedIncludePaths = [];

    /**
     * @inheritDoc
     */
    protected function rules($record, array $data): array
    {
        return [
            'name' => "required|string",
            'code' => "required|string",
            'users' => new HasMany(),
        ];
    }

    /**
     * @inheritDoc
     */
    protected function queryRules(): array
    {
        return [];
    }


}
