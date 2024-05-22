<table class=" table table-striped table-hover border">
    <thead class=" table-dark">
    <tr class="bordoorang">
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Subtitle</th>
        <th scope="col">Category</th>
        <th scope="col">Tags</th>
        <th scope="col">Created on</th>
        <th scope="col">Actions </th>
      
    </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr class="bordoorang">
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->subtitle}}</td>
                <td>{{$article->category->name ?? 'Uncategorized'}}</td>
                <td>
                    @foreach ($article->tags as $tag)
                        {{$tag->name}}
                    @endforeach
                </td>
                <td>{{$article->created_at->format('d/m/Y')}}</td>
                <td>
                    <a href="{{route('article.show',compact('article'))}}" class="btn btn-info text-white my-1 ">Read Article</a>
                    <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning text-white my-1 ">Edit Article</a>
                    <form action="{{route('article.destroy', compact('article'))}}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="my-1 btn btn-danger">Delete Article</button>
                    </form>
                </td>
              
            </tr>
    
        @endforeach
    </tbody>
    </table>