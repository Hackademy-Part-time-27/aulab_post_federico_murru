<x-layout>      
      <div class="container-fluid p-5 bg-info text-center text-white">
    <div class="row justify-content-center"></div>
    <h1 class="display-1">The Aulab Post</h1>
</div>
    <section class="vh-100 mt-5">

        <div class="container py-3 ">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div style="border-radius: 1rem;">
                <div class="row g-0">


                  <div class="col-md-6 col-lg-7 d-flex align-items-center card-color bordii">
                    <div class="card-body p-4 p-lg-5 text-black ">
      
                      <form  method="POST" action="{{route('register')}}">
                        @csrf
      

      
                        <h5 class="form-outline mb-4" style="letter-spacing: 1px;">Register new user</h5>
      
                        <div class="form-outline mb-2">
                            <label for="name" class="form-label">Name</label>
                            <input placeholder="Digit your name.." name="name" type="text" class="form-control form-control-lg" id="name" value="{{old('name')}}" aria-describedby="emailHelp">
                           
                        </div>
    

                        <div data-mdb-input-init class="form-outline mb-2">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input placeholder="Email..." name="email" type="email" class="form-control form-control-lg" id="exampleInputEmail1" value="{{old('email')}}"  aria-describedby="emailHelp">
                     
                        </div>


      
                        <div data-mdb-input-init class="form-outline mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input placeholder="Password..." name="password" type="password" class="form-control form-control-lg" id="password">
                        
                        </div>

                        <div class="form-outline mb-2">
                            <label for="passwordConfirmation" class="form-label">Confirm Password</label>
                           <input placeholder="Confirm your password.." name="password_confirmation" type="password" class="form-control form-control-lg" id="passwordConfirmation">
                           {{-- <span class="password-toggle-icon"><i class="fas fa-eye"></i></span> --}}
                            
                        </div>
    



                        <div class="form-outline my-4">
                          <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                        </div>
      
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Already registered? <a href="{{route('login')}}"
                            style="color: #393f81;">Click here</a></p>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

       

    </div>
 
    <div class="pt-lg-2 pt-5">

    </div>
 
    <div class="pt-lg-2 pt-5">

    </div>
   <div class="col-md-12 pt-5">

   </div>
    
</x-layout>