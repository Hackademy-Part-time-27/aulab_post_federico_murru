<table class="table table-striped table-hover border">
<thead class="table-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Subtitle</th>
        <th scope="col">Revisor</th>
        <th scope="col">Actions</th>
    </tr>
</thead>
<tbody>
    @foreach ($articles as $article)
    <tr>
    <th scope="row">{{$article->id}}</th>
    <td>{{$article->title}}</td> 
    <td>{{$article->subtitle}}</td> 
    <td>{{$article->user->name}}</td> 
    <td> 
        @if (is_null($article->is_accepted))
          <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Read the article</a>
        @else
        <form action="{{route('revisor.undoArticle', compact('article'))}}" method="post">
            @csrf 
            <button class="btn btn-info text-white">Back to review</button>
        </form>
        @endif
    </td>
    </tr>
    @endforeach

</table>