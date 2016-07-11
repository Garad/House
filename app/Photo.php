<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{

    protected $table = 'flyer_photos';

    protected $fillable = ['path'];

    protected $baseDir = 'images/flyers';
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * A flyer has a photo or photo belong to Flyer
     */
    public function flyer()
    {
        return $this->belongsTo('App\Flyer');
    }

    public static function fromForm(UploadedFile $file)
    {
        $photo = new static;
        $name = time() . $file->getClientOriginalName();

        $photo->path =  $photo->baseDir . '/' . $name;
        $file->move($photo->baseDir, $name);

        return $photo;
    }
}
