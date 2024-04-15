<?php

namespace App\Models;

use App\Traits\HasAuthor;
use App\Traits\HasReplies;
use App\Traits\HasTags;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use App\Models\ReplyAble;

class Thread extends Model implements ReplyAble
{
    use HasFactory;
    use HasTags;
    use HasAuthor;
    use HasReplies;

    const TABLE = 'threads';

    protected $table = self::TABLE;

    protected $fillable = [
        'title',
        'body',
        'slug',
        'category_id',
        'author_id',
    ];

    protected $with = [
        'authorRelation',
        'category',
        'tagsRelation',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function excerpt(int $limit = 250): string
    {
        return Str::limit(strip_tags($this->body), $limit);
    }

    public function replyAbleSubject(): string
    {
        return $this->title();
    }

    public function latestReplies(int $amount = 5)
    {
        return $this->repliesRelation()->latest()->take($amount)->get();
    }

    public function isConversationOld(): bool
    {
        return $this->replies()->isEmpty() || $this->replies()->latest('created_at')->first()->created_at->lte(now()->subDays(7));
    }

    public function title(): string
    {
        return $this->title;
    }
    public function id():string
    {
        return $this->id;
    }
    public function body(): string
    {
        return $this->body;
    }
    public function delete()
    {
        $this->removeTags();
        parent::delete();
    }

    public function scopeForTag(Builder $query, string $tag): Builder
    {
        return $query->whereHas('tagsRelation', function ($query) use ($tag) {
           $query->where('tags.slug', $tag);
        });
    }
}
