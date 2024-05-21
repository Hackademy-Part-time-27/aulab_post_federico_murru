<x-layout>
    <div class="container-fluid p-5 allArticle text-center">
        <div class="row justify-content-center">
            <div class="h1 display-1">
                Title: {{ $article->title }}
            </div>
        </div>
    </div>

    <div class="container my-2">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 m-1">
                  <div class="d-flex justify-content-center">
                    <img src="{{ Storage::url($article->image) }}" alt="Image: {{ $article->title }}" class="img-fluid my-1" style="border-radius: 1rem; max-height: 400px; min-width: 700px; object-fit:fill;">
                </div>
            </div>
        </div>
        <div class="text-center my-2">
            <h2>{{ $article->subtitle }}</h2>
            @if ($tags)
           
            <p class="small fst-italic text-capitalize">
                @foreach ($tags as $tag)
                #{{$tag->name}}            
                @endforeach
            </p>
            @endif
            <div class="my-3 text-muted fst-italic">
                <p>Created by {{ $article->user->name }} on {{ $article->created_at->format('d/m/Y') }}</p>
            </div>
            
        </div>
    </div>
    <hr>
    <p class="text-break p-4">{{$article->body}}</p>
    <div class="text-center">
        <a href="{{route('article.index')}}" class="btn btn-info text-white my-5">back</a>
    </div>
    <div class="d-flex justify-content-evenly">
      @if (Auth::user() && Auth::user()->is_revisor)
      <form action="{{route('revisor.acceptArticle',compact('article'))}}" method="POST">
            @csrf 
        <button class="btn btn-success text-white">Accept article</button>
      </form>
      <form action="{{route('revisor.rejectArticle',compact('article'))}}" method="POST">
        @csrf 
            <button class="btn btn-danger text-white">Reject article</button>
        </form>
      @endif  

    </div>
    <br>
    <br>
    <br>
</x-layout>
