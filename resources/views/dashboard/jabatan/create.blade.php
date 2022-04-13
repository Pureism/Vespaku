@extends('layout.form')

<!-- ======= Breadcrumbs ======= -->
@section('breadcrumbs')
<section class="breadcrumbs"  data-aos="zoom-out" data-aos-duration="1000">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li><a href="/dashboard">Dashboard</a></li>
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
            <form action="/dashboard/jabatan" method="post">
              @csrf
              <div class="form-floating rounded-top"> 
                <select class="custom-select form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" placeholder="jabatan" required value="{{ old('jabatan') }}">
                    <option selected>Nama Jabatan</option>
                    @foreach ($jabatans as $jabatan)
                        <option value="{{ $jabatan->id }}">{{ $jabatan->nama }}</option>
                    @endforeach
                  </select>
                @error('jabatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating rounded-top"> 
                <select class="custom-select form-control @error('jenis_jabatan') is-invalid @enderror" id="jenis_jabatan" name="jenis_jabatan" placeholder="jenis_jabatan" required value="{{ old('jenis_jabatan') }}">
                    <option selected>Jenis Jabatan</option>
                    @foreach ($jenis_jabatans as $jenis_jabatan)
                        <option value="{{ $jenis_jabatan->id }}">{{ $jenis_jabatan->nama }}</option>
                    @endforeach
                  </select>
                @error('jenis_jabatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="no_sk" class="form-control @error('no_sk') is-invalid @enderror" id="no_sk" name="no_sk" placeholder="no_sk" required value="{{ old('no_sk') }}">
                <label for="no_sk">No Surat Keterangan</label>
                @error('no_sk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
                <div class="form-floating">
                  <input type="date" class="form-control @error('tmt_tanggal') is-invalid @enderror" id="tmt_tanggal" name="tmt_tanggal" placeholder="tmt_tanggal" required value="{{ old('tmt_tanggal') }}">
                  <label for="tmt_tanggal">Terhitung Mulai Tanggal</label>
                  @error('tmt_tanggal')
                  <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mt-4">
                  <input type="text" class="form-control @error('file') is-invalid @enderror" id="file" name="file" placeholder="file" required value="{{ old('file') }}">
                  <label for="file">Upload File</label>
                  @error('file')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                
                <button class="w-100 btn btn-lg btn-success" style="margin: 20px 0" type="Submit">Tambah Jabatan</button>
            </form>

          </main>

        </article><!-- End blog entry -->

      </div><!-- End blog entries list -->

    </div>

  </div>
</section><!-- End Blog Single Section -->
@endsection