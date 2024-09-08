<?php

namespace App\Models\Admin;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FrontMenu extends Model
{
    use HasFactory;

    public static $frontMenu,$image, $imageUrl, $imagePath, $logo, $logoPath, $logoUrl;

    public static function addFrontMenu($request)
    {
        if ($request->hasFile('image') && $request->hasFile('logo')) {
           
            self::$image        = $request->file('image');
            self::$imagePath    = self::$image->store('images', 'public');
            self::$imageUrl     = self::$imagePath;

            self::$logo        = $request->file('logo');
            self::$logoPath    = self::$logo->store('logos', 'public'); 
            self::$logoUrl     = self::$logoPath;
        }

        self::$frontMenu                = new FrontMenu();
        self::$frontMenu->location      = $request->location;
        self::$frontMenu->number        = $request->number;
        self::$frontMenu->gmail         = $request->gmail;
        self::$frontMenu->logo          = self::$logoUrl;
        self::$frontMenu->image         = self::$imageUrl;
        self::$frontMenu->description   = $request->description;;
        self::$frontMenu->save();

        
    }

    public static function updateFrontMenu($request, $id)
    {
        self::$frontMenu              = FrontMenu::find($id);
        
        if($request->hasFile('image') && $request->hasFile('logo'))
        {
            if(file_exists(self::$frontMenu->image))
            {
                unlink(self::$frontMenu->image);
            }
            if(file_exists(self::$frontMenu->logo))
            {
                unlink(self::$frontMenu->logo);
            }
            self::$image        = $request->file('logo');
            self::$imagePath    = self::$image->store('logos', 'public');
            self::$imageUrl     = self::$imagePath;

            self::$logo        = $request->file('image');
            self::$logoPath    = self::$logo->store('images', 'public'); 
            self::$logoUrl     = self::$logoPath;
        }
        else
        {
            self::$imageUrl = self::$frontMenu->logo;
            self::$imageUrl = self::$frontMenu->image;
        }
        
        self::$frontMenu->location      = $request->location;
        self::$frontMenu->number        = $request->number;
        self::$frontMenu->gmail         = $request->gmail;
        self::$frontMenu->logo          = self::$logoUrl;
        self::$frontMenu->image         = self::$imageUrl;
        self::$frontMenu->description   = $request->description;;
        self::$frontMenu->save();
    }

    public static function deleteFrontMenu($id)
    {
        self::$frontMenu    = FrontMenu::find($id);
        if(file_exists(self::$frontMenu->logo))
        {
            unlink(self::$frontMenu->logo);
        }
        if(file_exists(self::$frontMenu->image))
        {
            unlink(self::$frontMenu->image);
        }
        self::$frontMenu->delete();
    }
}
