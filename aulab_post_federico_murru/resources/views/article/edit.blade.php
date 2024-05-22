<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white mb-4">
        <div class="row justify-content-center">
            <div class="h1 display-1">
                Edit Article
            </div>
        </div>
    </div>
    <div class="mx-5 row justify-content-center mb-4">
        <div class="col-12 col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('article.update', $article->id) }}" method="post" class="p-3 shadow" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $article->title }}">
                </div>
                <div class="mb-3">
                    <label for="subtitle" class="form-label">Subtitle:</label>
                    <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ $article->subtitle }}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <div class="mb-3">
                    <label for="tags" class="form-label">Tags:</label>
                    <input name="tags" class="form-control" id="tags" value="{{ $article->tags->implode('name', ',') }}">
                    <span class="small fst-italic">Divide tags with ","</span>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category:</label>
                    <select name="category" id="category" class="form-control text-capitalize">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if($article->category && $category->id == $article->category->id) selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body:</label>
                    <textarea name="body" id="body" cols="30" rows="7" class="form-control">{{ $article->body }}</textarea>
                </div>
                <div class="mt-2 d-flex justify-content-center">
                    <button class="btn btn-info text-white">Edit Article</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
