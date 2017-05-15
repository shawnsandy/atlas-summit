<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    //
    protected $fillable = [
        "contact_name",
        "contact_email",
        "contact_phone",
        "company_name",
        "company_address",
        "company_phone",
        "company_email",
        "banner_image",
        "logo",
        "sponsor_description",
        "sponsor_slug",
        "sponsor_url",
        "sponsor_level",
        ];
}
