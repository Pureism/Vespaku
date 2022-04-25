@extends('layout.form')

<!-- ======= Breadcrumbs ======= -->
@section('breadcrumbs')
<section class="breadcrumbs"  data-aos="zoom-out" data-aos-duration="1000">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li><a href="#">Tambah Jabatan</a></li>
    </ol>
    <h2>{{ $title }}</h2>
  </div>
</section><!-- End Breadcrumbs -->
@endsection

<!-- ======= Blog Single Section ======= -->
@section('content')
<section id="blog" class="blog">
  

  <div class="container" data-aos="fade-up">

    <div class="row">

      <div class="entries ">
        
        <article class="entry entry-single daftar-entry">
          <main class="form-daftar">
            <h1 class="h3 mb-3 fw-normal">Tambah Jabatan</h1>

            @if (session()->has('jabatan_sudah_ada'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('jabatan_sudah_ada') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <form action="/jabatan" method="post">
              @csrf
              <div class="form-floating">
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="nama" required value="{{ old('nama') }}">
                <label for="nama">Nama Jabatan</label>
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="slug" required value="{{ old('slug') }}">
                <label for="slug">Slug / Singkatan</label>
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
                
              <button class="w-100 btn btn-lg btn-success" style="margin: 20px 0" type="Submit"><i class="bi bi-plus"></i>&nbsp; Tambah Jabatan</button>
            </form>

          </main>

        </article><!-- End blog entry -->

      </div><!-- End blog entries list -->

    </div>

  </div>
</section><!-- End Blog Single Section -->
@endsection