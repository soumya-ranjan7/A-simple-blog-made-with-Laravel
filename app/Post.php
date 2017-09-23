<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = ['title','body'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function addComment($body)
    {
        //Comment::create([

            //'body' => $body,
          //  'post_id' => $this->id



        //]);

        $this->comments()->create(compact('body'));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query,$filters)
    {

        $posts = new Post;

        if ($month = $filters['month']){

            $posts->whereMonth('created_at',Carbon::parse($month)->month);

        }

        if ($year = $filters['year']){

            $posts->whereYear('created_at',$year);

        }
    }

    public static function archives()
    {
        return static::selectRaw("strftime('%Y',created_at) as year, case
            strftime('%m',created_at)  when '01' then 'January' when '02' then 'Febuary' when '03' then 'March' when '04' then 'April' when '05' then 'May' when '06' then 'June' when '07' then 'July' when '08' then 'August' when '09' then 'September' when '10' then 'October' when '11' then 'November' when '12' then 'December' else '' end as month, count(*) published")
            ->groupBy('year','month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }


    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
