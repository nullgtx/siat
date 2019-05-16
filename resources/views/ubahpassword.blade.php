@extends('layouts.navkepala')
@section('content')
<div class="container">
    <h4>Ubah Password</h4>
    <div class="row">
      <div class="col-8">
        <form>

          <div class="form-group row">
            <label for="example-text-input" class="col-3 col-form-label">Password Lama</label>
            <div class="col-9">
            <input id="passwordlama" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="passwordlama" placeholder="Masukkan password lama" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="passwordbaru" class="col-3 col-form-label">Password Baru</label>
            <div class="col-9">
                <input id="passwordbaru" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="passwordbaru" placeholder="Masukkan password baru" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="password-confirm" class="col-3 col-form-label">Konfirmasi Password</label>
            <div class="col-9">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Masukkan ulang password baru"required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-auto">
              <button type="submit" class="btn btn-success">Ubah</button>
            </div>
            <div class="col-auto">
              <a class="btn btn-primary" href="{{ route('pengaturanakun') }}" role="button">Kembali</a>
            </div>
          </div>

        </form>
      </div>
      <div class="col-4">
        <!-- 2 of 2 -->
      </div>
    </div>
</div>
@endsection