<?php


    namespace App\Models;

    use Illuminate\Auth\Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Laravel\Lumen\Auth\Authorizable;
    use App\Traits\Uuids;

    class Articles extends Model
    {

        use Authenticatable, Authorizable, HasFactory, Uuids;

        protected $table = 'articles';
        protected $fillable = ['title','sub_title','description','slug'];

        /**
         * The attributes excluded from the model's JSON form.
         *
         * @var array
         */
        protected $hidden = [];
    }
