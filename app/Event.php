<?php

namespace App;

use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\HtmlString;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Event extends Model
{
    public function getTitleAttribute()
    {
        $title = $this->{'title_'.LaravelLocalization::getCurrentLocale()};

        return $title;
    }

    public function getDescriptionAttribute()
    {
        $description = $this->{'description_'.LaravelLocalization::getCurrentLocale()};

        return Markdown::convertToHtml($description);
    }
}
