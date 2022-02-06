<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
	
	public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'user_id');
    }
	
	public function scopeNomeSemelhante($query, $value)
	{
		return $query->where("nome", 'like', '%'.$value.'%');
	}
	
	public function scopeWhereLike($query, $column, $value)
	{
		return $query->where($column, 'like', '%'.$value.'%');
	}

	public function scopeOrWhereLike($query, $column, $value)
	{
		return $query->orWhere($column, 'like', '%'.$value.'%');
	}
	
	 public function scopeWhereDateBetween($query,$fieldName,$fromDate,$todate)
    {
        return $query->whereDate($fieldName,'>=',$fromDate)->whereDate($fieldName,'<=',$todate);
    }
	
	public function scopeFiltroObjeto($query, $value)
	{
		
		if (isset($value["nome"])){
			$query->where("nome", 'like', '%'.$value["nome"].'%');
		}
		
		if (isset($value["email"])){
			$query->where("email", 'like', '%'.$value["email"].'%');
		}
		
		return $query;	
	}
}
