<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <div class="h1 display-1">
                Welcome back revisor!
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articles to review</h2>
                <x-articles-table :articles="$unrevisionedArticles"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articles pubblished</h2>
                <x-articles-table :articles="$acceptedArticles"/>
            </div>
        </div>
    </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Articles rejected</h2>
                    <x-articles-table :articles="$rejectedArticles"/>
                </div>
            </div>
        </div>
   
    {{-- <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Platform tags</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags" />
            </div>
        </div>
    </div> --}}
    {{-- <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Platform Categories</h2>
                <x-metainfo-table :metaInfos="$categories" metaType="categories" />
                <form class="d-flex" action="" method="POST">
                    @csrf
                    <input type="text" name="name" class=" bordoorang form-control me-2" placeholder="inserisci una nuova categoria">
                    <button type="submit" class="btn btn-orange ">Add</button>
                </form>
            </div>
        </div>
    </div> --}}
</x-layout>