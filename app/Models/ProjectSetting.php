<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectSetting extends Model
{
    protected $fillable = [
        'project_name', 'logo', 'favicon',
        'meta_title', 'meta_keywords', 'meta_description', 'meta_image',
        'google_analytics_id', 'google_ads_conversion_id', 'google_ads_remarketing_tag', 'facebook_pixel_id',
        'contact_email', 'contact_phone', 'contact_address',
        'facebook', 'twitter', 'instagram', 'linkedin', 'youtube','google_map_frame'
    ];
}


