<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;

    //Can also add Model::unguard() to the Appservice Provider.php file under boot.
    protected $fillable = ['title', 'user_id' , 'logo' , 'description'];

    public function scopeFilter($query, array $filters)
    {
        //to do wtfix : chnage the api search - not needed and fix the search bar here.
        if($filters['tag'] ?? false){
            $query->where('tags','like','%' . request('tag') . '%');
        }

        if($filters['search'] ?? false){
            $query->where('title','like','%' . request('search') . '%')
                ->orWhere('description','like','%' . request('search') . '%')
                ->orWhere('tags','like','%' . request('search') . '%');
        }
    }

    //relationship to user
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    //relationship with sites
    public function sites(){
        return $this->hasMany(Sites::class, 'site_id');
    }


}
