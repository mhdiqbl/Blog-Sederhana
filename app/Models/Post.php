<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'excerpt', 'body']; //fillable hanya yang ditulis yang boleh diisi
    protected $guarded = ['id']; //guarded yg diisi adalah selain yang ditulis
    protected $with = ['category','author']; //n+1 problem

    public function scopeFilter($query, array $filters)
    {
        //cara 1
        // if(isset($filters['search']) ? $filters['search'] : false ){
        //     return $query->where('title','like', '%'. $filters['search']. '%')
        //         ->orWhere('body', 'like', '%' . $filters['search'].'%');
        // }

        //cara 2
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title','like', '%'. $search. '%')
                ->orWhere('body', 'like', '%' . $search.'%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query)=>
                $query->where('username', $author)
    ));
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}