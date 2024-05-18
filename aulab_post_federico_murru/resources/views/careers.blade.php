<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">Work with us</h1>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center align-items-center border rounded p-2 shadow">
            {{-- <div class="col-12 col-md-6">
                <h2 class="workAdminTitle">LAVORA COME AMMINISTRATORE</h2>
                <p class="mb-5">Sei interessato a diventare un amministratore? Contattaci!</p>
                <h2>LAVORA COME REVISORE</h2>
                <p class="mb-5">Sei interessato nel controllo ed accettazione degli articoli? <br> Questo è il ruolo che fa per te!</p>
                <h2>LAVORA COME REDATTORE</h2>
                <p class="mb-5">Sei interessato nel controllare e modificare gli articoli che <br> presentano errori o incongruenze? Diventa un REDATTORE!</p>
            </div> --}}
            <div class="col-12 col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ( $errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="" method="POST" class="p-5">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Which role are you applying for?</label>
                        <select name="role" id="role" class="form-control">
                          
                            <option value="admin">Admin</option>
                            <option value="revisor">Revisor</option>
                            <option value="writer">Writer</option>
                        </select>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{old('email')?? Auth::user()->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Tell us about yourself</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="7">
                                {{old('message')}}
                            </textarea>
                        </div>
                        <button class="btn btn-info text-white my-3">Apply</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</x-layout>