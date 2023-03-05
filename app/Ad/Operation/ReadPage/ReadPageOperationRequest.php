<?php

declare(strict_types=1);

namespace App\Ad\Operation\ReadPage;

use App\AbstractBase\ReadPageRequest;

class ReadPageOperationRequest extends ReadPageRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return static::getRulezzForPage();
    }

    static function getRulezz()
    {
        return [

            'name' => [
                'required',
                'string',
                'max:111',
                'sometimes',
            ],


        ];
    }
}