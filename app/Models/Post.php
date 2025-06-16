<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'image'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Get the excerpt of the post content.
     */
    public function getExcerptAttribute(): string
    {
        return Str::limit(strip_tags($this->content), 150);
    }

    /**
     * Get the formatted date for display.
     */
    public function getFormattedDateAttribute(): string
    {
        return $this->created_at->format('d M, Y');
    }

    /**
     * Get the reading time estimate.
     */
    public function getReadingTimeAttribute(): int
    {
        $wordCount = str_word_count(strip_tags($this->content));
        return max(1, ceil($wordCount / 200)); // Assuming 200 words per minute
    }

    /**
     * Get the full image URL.
     */
    public function getImageUrlAttribute(): string
    {
        return asset('storage/' . $this->image);
    }

    /**
     * Scope to search posts by title and content.
     */
    public function scopeSearch(Builder $query, ?string $search): Builder
    {
        if (empty($search)) {
            return $query;
        }

        return $query->where(function ($q) use ($search) {
            $q->where('title', 'like', "%{$search}%")
                ->orWhere('content', 'like', "%{$search}%");
        });
    }

    /**
     * Scope to filter posts by year.
     */
    public function scopeByYear(Builder $query, ?int $year): Builder
    {
        if (empty($year)) {
            return $query;
        }

        return $query->whereYear('created_at', $year);
    }

    /**
     * Scope to get published posts (for future use if you add a status field).
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->orderBy('created_at', 'desc');
    }

    /**
     * Get related posts based on similar content (simple implementation).
     */
    public function getRelatedPosts(int $limit = 3)
    {
        // Simple related posts based on similar titles or recent posts
        $titleWords = explode(' ', $this->title);
        $query = static::where('id', '!=', $this->id);

        // Try to find posts with similar title words
        foreach ($titleWords as $word) {
            if (strlen($word) > 3) { // Only use words longer than 3 characters
                $query->orWhere('title', 'like', "%{$word}%");
            }
        }

        $relatedPosts = $query->latest()->limit($limit)->get();

        // If we don't have enough related posts, fill with recent posts
        if ($relatedPosts->count() < $limit) {
            $additionalPosts = static::where('id', '!=', $this->id)
                ->whereNotIn('id', $relatedPosts->pluck('id'))
                ->latest()
                ->limit($limit - $relatedPosts->count())
                ->get();

            $relatedPosts = $relatedPosts->merge($additionalPosts);
        }

        return $relatedPosts;
    }

    /**
     * Get available years for filtering.
     */
    public static function getAvailableYears(): array
    {
        // Use SQLite-compatible date extraction
        return static::selectRaw("strftime('%Y', created_at) as year")
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year')
            ->filter() // Remove null values
            ->map(fn($year) => (int) $year) // Convert to integers
            ->toArray();
    }
}
