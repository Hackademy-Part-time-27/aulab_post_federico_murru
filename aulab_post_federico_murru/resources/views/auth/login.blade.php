<x-layout>
    <section>
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="mt-5" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="/image/loginimage6.jpg"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center card-color bordii">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form method="POST" action="{{route('login')}}">
                        @csrf
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <i class="fa-solid fa-newspaper fa-2x">
                                <span class="m-lg-5" >
                                  The Aulab Post
                                </span>
                              </i>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Enter you account</h5>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input placeholder="Email..." name="email" type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                        </div>


      
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input placeholder="Password..." name="password" type="password" class="form-control form-control-lg" id="password">
                        <label for="password" class="form-label">Password</label>
                        
                        </div>



                        <div class="pt-1 mb-4">
                          <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                        </div>
      
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Not registered? <a href="{{route('register')}}"
                            style="color: #393f81;">Register here</a></p>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</x-layout>