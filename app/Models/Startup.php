<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Startup
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Startup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Startup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Startup query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $direction_id
 * @property int $members
 * @property int $model_id
 * @property string $file
 * @property string $link
 * @property string $full_name
 * @property string $role
 * @property int $age
 * @property string $duration
 * @property string $phone
 * @property string $telegram
 * @property string $email
 * @property string $resource_description
 * @property int $social_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereDirectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereMembers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereResourceDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereSocialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereTelegram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereUpdatedAt($value)
 * @property string $sales
 * @property-read \App\Models\Direction $direction
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Resource[] $resources
 * @property-read int|null $resources_count
 * @property-read \App\Models\Social $social
 * @method static \Illuminate\Database\Eloquent\Builder|Startup whereSales($value)
 * @property-read \App\Models\Model $model
 * @method static Builder|Startup directionFilter(int $value)
 * @method static Builder|Startup modelFilter(int $value)
 * @method static Builder|Startup search(string $value)
 */
class Startup extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','description','sales','direction_id','members','model_id','file','link','full_name','role','age','duration','phone','telegram','email','resource_description','social_id'];

    public function direction(): BelongsTo
    {
        return $this->belongsTo(Direction::class,'direction_id');
    }

    public function model(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Model::class,'direction_id');
    }

    public function social(): BelongsTo
    {
        return $this->belongsTo(Social::class,'social_id');
    }

    public function resources(): BelongsToMany
    {
        return $this->belongsToMany(Resource::class,'startup_resources');
    }

    public function scopeSearch(Builder $query, string $value): Builder
    {
        return $query
            ->where('title','ILIKE','%'.$value.'%')
            ->orWhere('description','ILIKE','%'.$value.'%');
    }

    public function scopeDirectionFilter(Builder $query, int $value): Builder
    {
        if ($value == 0){
            return $query;
        }
        return $query->where('direction_id',$value);

    }

    public function scopeModelFilter(Builder $query, int $value): Builder
    {
        if ($value == 0){
            return $query;
        }
        return $query->where('model_id',$value);

    }







}
