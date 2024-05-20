<x-layout>
    <div class="container-fluid p-5 text-center allArticle">
        <div class="row justify-content-center">
            <div class="h1 display-1">
                Welcome back Admin!
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
                <h2>request for admin role</h2>
                <x-request-table :roleRequest="$adminRequests" role="amministratore"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>application for auditor role</h2>
                <x-request-table :roleRequest="$revisorRequests" role="revisore"/>
            </div>
        </div>
    </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>application for editor role</h2>
                    <x-request-table :roleRequest="$writerRequests" role="redattore"/>
                </div>
            </div>
        </div>
   
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Platform tags</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags" />
            </div>
        </div>
    </div>
    <div class="container my-5">
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
    </div>
</x-layout>