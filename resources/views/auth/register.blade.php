@extends('auth.layouts')
@section('container')
<div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
  <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
          <div class="col-lg">
              <div class="p-5">
                  <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                  </div>
                  <form class="user">
                      
                      <div class="form-group">
                          <input type="email" class="form-control form-control-user" id="email" name="email"
                              placeholder="Alamat Email">
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="password" class="form-control form-control-user"
                                  id="password" name="password" placeholder="Password">
                          </div>
                          <div class="col-sm-6">
                              <input type="password" class="form-control form-control-user"
                                  id="passwordReapeat" placeholder="Ulangi Password">
                          </div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-user btn-block">
                          Register Account
                      </button>
                    
                  </form>
                  <hr>
                  <div class="text-center">
                      <a class="small" href="/forgot-password">Lupa Password?</a>
                  </div>
                  <div class="text-center">
                      <a class="small" href="/login">Sudah punya akun? Login!</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection