<x-layout>

    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center"></div>
        <h1 class="display-1">The Aulab Post</h1>
    </div>


@if (session('message'))
                            <div class="alert alert-success text-center">
                                {{ session('message') }}
                            </div>
                        @endif
 

</x-layout>