<?php
if (! function_exists('meta')) {
    function meta($key, array $select = []): object
    {
        return new class ($key, $select) {

            protected $page;
            protected $key;

            public function __construct($key, array $select = [])
            {
                $this->key  = $key;
                $this->page = Cache::remember("page_$key", config('cache.timeout'), function () use ($select){
                    return \App\Models\Page::select(array_merge(['title', 'meta_description', 'meta_keywords', 'image'], $select))->key($this->key)->firstOrFail();
                });
            }

            public function get($column)
            {
                return $this->page->getTranslatedAttribute($column) ?? "$this->key $column";
            }

            public function image()
            {
                return optional($this->page)->image;
            }
        };
    }
}
