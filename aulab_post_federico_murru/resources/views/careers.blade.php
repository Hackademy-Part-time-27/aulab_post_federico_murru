<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">Work with us</h1>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center align-items-center border rounded p-2 shadow">
            <div class="col-12 col-md-6">
                <h2 class="workAdminTitle">WORK AS AN ADMIN</h2>
                <p class="mb-5">Are you interested in becoming an admin? Contact us!</p>
                <h2>WORK AS AN AUDITOR</h2>
                <p class="mb-5">Are you interested in checking and accepting articles? <br>This is the role for you!</p>
                <h2>WORK AS AN EDITOR</h2>
                <p class="mb-5">You are interested in checking and editing articles that<br>have errors or inconsistencies? Become an EDITOR!</p>
            </div>
            <div class="col-12 col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('career.submit') }}" method="POST" class="p-5">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Which role are you applying for?</label>
                        <select name="role" id="role" class="form-control">
                            @if(!Auth::user()->is_admin)
                                <option value="admin">Admin</option>
                            @endif
                            @if(!Auth::user()->is_revisor)
                                <option value="revisor">Editor</option>
                            @endif
                            @if(!Auth::user()->is_writer)
                                <option value="writer">Writer</option>
                            @endif
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') ?? Auth::user()->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Tell us about yourself</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="7">{{ old('message') }}</textarea>
                    </div>
                    <button class="btn btn-info text-white my-3">Apply</button>
                </form>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('article.index') }}" class="btn btn-info text-white my-3">Back</a>
        </div>
    </div>
</x-layout>
