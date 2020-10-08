<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Post extends Model
{
    use ElasticquentTrait;

    protected $fillable = [
        'title',
        'body',
        'tags'
    ];

    protected $mappingProperties = array(
        'title' => [
            'type' => 'text',
            'analyzer' => 'standard',
        ],
        'body' => [
            'type' => 'text',
            'analyzer' => 'standard',
        ],
    );
}
