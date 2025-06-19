<?php

namespace App\Traits;

trait HasGlobalSearch
{
    public static function search(string $term, int $limit = 5)
    {
        return static::query()
            ->searchScope($term)
            ->limit($limit)
            ->get();
    }

    public function getGlobalSearchTitle(): string
    {
        return $this->name ?? $this->title ?? (string) $this->id;
    }

    public function getGlobalSearchRoute(): ?string
    {
        return method_exists($this, 'getRoute') ? $this->getRoute() : null;
    }

    // Override this in each model
    public function scopeSearchScope($query, $term)
    {
        return $query->where('id', $term); // fallback sederhana
    }

    public function getGlobalSearchThumbnail(): ?string
    {
        return property_exists($this, 'thumbnail') ? $this->thumbnail : null;
    }

    public function getGlobalSearchIcon(): string
    {
        return 'heroicon-o-question-mark-circle'; // ikon default universal
    }
}
