<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    /**
     * @var array
     * Fillable for flyer
     */
    protected $fillable = [
        'street',
        'city',
        'state',
        'country',
        'zip',
        'price',
        'description'
        ];

    /**
     * @param $zip
     * @param $street
     * @return mixed
     */

    public static function locatedAt($zip, $street)
    {
        $street = str_replace('-', ' ', $street);
        return static::where(compact('zip', 'street'))->first();
    }

    public function addPhoto(Photo $photo)
    {
        return $this->photos()->save($photo);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * A flyer has many photos
     */
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
