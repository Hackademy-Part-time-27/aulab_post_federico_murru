<x-layout>

    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">Article list</h1>
        </div>

    </div>
<div class="container my-5">
    <div class="row justify-content-center">
     @foreach($articles as $article)
        <div class="col-12 col-md-5 m-3">
            <x-card
            title="{{ $article->title }}"
            subtitle="{{ $article->subtitle }}"
            image="{{ $article->image }}"
            category="{{ $article->category->name }}"
            date="{{ $article->created_at->format('d/m/y') }}"
            user="{{ $article->user->name }}"
            url="{{route('article.show', compact('article'))}}"
            />
        </div>      
        @endforeach
    </div>
</div>
</x-layout>