<x-layout>

    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Category: {{$category->name}}
            </h1>
        </div>

    </div>


    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
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
                url="{{ route('article.show', ['article' => $article->id]) }}"
                urlCategory="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
            />
        </div>      
    @endforeach

    <div class="text-center">
        <a href="{{route('article.index')}}" class="btn btn-info text-white my-3">back</a>
    </div>
    </div>
</div>

</x-layout>