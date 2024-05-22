<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">The Aulab Post</h1>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="container my-5" style="min-height: 500px;">
        
        <div class="row justify-content-center"  >
            @foreach ($articles as $article)
               
            <div class="col-sm-6 my-3">
              
             
                    <x-article-card
                    :article='$article'
                />
                
            </div>
            @endforeach
        </div>
    </div>
    <div class="text-center">
        <a href="{{route('article.index')}}" class="btn btn-info text-white my-3">back</a>
    </div>
    <br>
    <br>
    <br>
</x-layout>
