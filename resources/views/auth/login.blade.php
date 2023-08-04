@extends('auth.layouts')
@section('container')
<div class="row justify-content-center">

  <div class="col-lg-6">

      <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                  <div class="col-lg">
                      <div class="p-5">
                          <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Login</h1>
                          </div>
                          <form class="user">
                              <div class="form-group">
                                  <input type="email" class="form-control form-control-user"
                                      id="email" name="email"
                                      placeholder="Masukkan Alamat Email">
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control form-control-user"
                                      id="password" name="password" placeholder="Masukkan Password">
                              </div>
                              
                              <button type="submit" class="btn btn-primary btn-user btn-block">
                                  Login
                              </button>
                          </form>
                          <hr>
                          <div class="text-center">
                              <a class="small" href="/forgot-password">Lupa Password?</a>
                          </div>
                          <div class="text-center">
                              <a class="small" href="/register">Buat Akun!</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </div>

</div>
@endsection