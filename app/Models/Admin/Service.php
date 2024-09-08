<?php

namespace App\Models\Admin;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    private static $service, $image, $imagePath;

    public static function storeService($request)
    {
        if($request->file('image'))
        {
            self::$image        = $request->file('image');
            self::$imagePath    = self::$image->store('images', 'public');
        }

        self::$service                      = new Service();
        self::$service->title               = $request->title;
        self::$service->slug                = Str::slug(self::$service->title);
        self::$service->image               = self::$imagePath;
        self::$service->short_description   = $request->short_description;
        self::$service->long_description    = $request->long_description;
        self::$service->status              = $request->status;;
        self::$service->save();

    }

    public static function updateService($request, $slug)
    {
        self::$service = Service::where('slug',$slug)->first(); 

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public');
        } else {
            $imagePath = self::$service->image; 
        }
    
        self::$service->title = $request->title;
        self::$service->slug = Str::slug(self::$service->title);
        self::$service->image = $imagePath;
        self::$service->short_description = $request->short_description;
        self::$service->long_description = $request->long_description;
        self::$service->status = $request->status;
    
        self::$service->save();

    }

    public static function destroyService($slug)
    {
        self::$service = Service::where('slug',$slug)->first();
        if(file_exists(self::$service->image))
        {
            unlink(self::$service->image);
        }
        self::$service->delete();
    }
}
