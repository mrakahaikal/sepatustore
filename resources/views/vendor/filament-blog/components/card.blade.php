@props(['post'])
<a href="{{ route('filamentblog.post.show', ['post' => $post->slug]) }}" wire:navigate>
    <div class="group/blog-item flex flex-col gap-y-5">
        <div class="h-[250px] w-full rounded-xl bg-zinc-300 overflow-hidden">
            <img class="flex h-full w-full items-center justify-center object-cover object-top"
                src="{{ asset($post->featurePhoto) }}" alt="{{ $post->photo_alt_text }}">
        </div>
        <div class="flex flex-col justify-between space-y-3 px-2">
            <div>
                <h2 title="{{ $post->title }}"
                    class="group-hover/blog-item:text-primary-700 mb-3 line-clamp-2 text-xl font-semibold hover:text-blue-600">
                    {{ $post->title }}
                </h2>
                <p class="mb-3 line-clamp-3">
                    {{ Str::limit($post->sub_title, 100) }}
                </p>
            </div>
        </div>
    </div>
</a>
