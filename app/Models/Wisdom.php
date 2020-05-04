<?php


namespace App\Models;

use App\I18n\LocalizableModel;

class Wisdom extends LocalizableModel
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Localized attributes.
     *
     * @var array
     */
    protected $localizable = [
        'content',
    ];
}
