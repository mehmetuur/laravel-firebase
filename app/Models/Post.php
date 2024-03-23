<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //we have post and belonsTo a user

    public function user()
    {
        return $this->belongsTo(user::class); //burada şunu yaptık user ile post arasında birilişki var dedik mesela her post farklı bir kişiye ait olabilri aynısınıda user için yapıp onada her post için bir user ilişkisi yapacağım
    }
}
