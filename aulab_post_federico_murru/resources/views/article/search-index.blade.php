<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <div class="h1 display-1 mt-5">
                Search "{{$query}}""
            </div>
        </div>
    </div>

    <div class="container my-5" style="min-height: 500px;">
        
        <div class="row justify-content-center"  >
            @foreach ($articles as $article)
               
            <div class="col-12 col-md-3">
              
             
                    <x-article-card
                    :article='$article'
                />
                
            </div>
            @endforeach
        </div>
    </div>
</x-layout>