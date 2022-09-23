<?php

namespace App\Models;

use App\Models\Farmer;
use App\Models\Inventory;
use Laravel\Scout\Searchable;
use Spatie\MediaLibrary\HasMedia;
use App\Observers\ProductObserver;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use Searchable;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'sku',
        'barcode',
        'description',
        'qty',
        'featured',
        'is_visible',
        'old_price',
        'price',
        'cost',
        'period',
        'yield'

    ];



    /**
     * @var array<string, string>
     */
    protected $casts = [
        'featured' => 'boolean',
        'is_visible' => 'boolean',
    ];

    public function toSearchableArray()
    {
        return $this->only(
            'name',
            'description',
        );
    }


    protected static function boot()
    {
        parent::boot();
        Product::observe(ProductObserver::class);
    }

    public function featuredImage(): MorphOne
    {
        return $this->morphOne(Media::class, 'model')
            ->where('model_type', Product::class)
            ->where('collection_name', 'product-images');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_product', 'category_id', 'product_id');
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    public function farmers()
    {
        return $this->hasMany(Farmer::class);
    }
}
