@extends('layout.page')

<!-- ======= Breadcrumbs ======= -->
@section('breadcrumbs')
<section class="breadcrumbs"  data-aos="zoom-out" data-aos-duration="1000">
  <div class="container">
    <ol>
      <li><a href="/">Home</a></li>
      <li><a href="/cari">Cari Pegawai</a></li>
      <li><a href="#">Profile Pegawai</a></li>
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

      <div class="entries">
        
        <article class="entry entry-single">
          <div class="row">
              <div class="col-lg-4">
                  <div class="entry-image">
                    <img src="{{ asset('template/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                  </div>
              </div>
              <div class="col-lg-8">
                  <h1 class="entry-heading">{{ $pegawai->nama }}</h1>
                  <h5>NIP : {{ $pegawai->nip }}</h5>
                  @foreach ($pangkats as $pangkat)
                    <h5>Pangkat : {{ $pangkat->pangkat->nama }}</h5>
                  @endforeach
                  @foreach ($jabatans as $jabatan)
                    <h5>Jabatan : <strong>{{ $jabatan->jenis_jabatan->nama }}</strong> - {{ $jabatan->jabatan->nama }}</h5>
                  @endforeach
                  <h5>Email : {{ $pegawai->email }}</h5>
                  
              </div>
          </div>

          <h2 class="entry-title">
            <a href="blog-single.html">Daftar Kepangkatan</a>
          </h2>

          <div class="table-responsive">
            <table class="table table-hover table-borderless entry-table ">
              <thead>
                <tr>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Tahun</th>
                  <th scope="col">No. SK</th>
                  <th scope="col">Tanggal Ditambah</th>
                  <th scope="col">Tanggal Diubah</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
                <tbody>
                  <tr>
                    @foreach ($pangkats as $pangkat)
                      <th scope="row">{{ $pangkat->pangkat->nama }}</th>
                      <td>{{ $pangkat->tahun_masuk }}</td>
                      <td>{{ $pangkat->no_surat_keterangan }}</td>
                      <td>{{ $pangkat->created_at }}</td>
                      <td>{{ $pangkat->updated_at }}</td>
                      <td>
                        <a href="" class="btn btn-sm btn-outline-primary"><i class="bi bi-download"></i>Unduh</a>
                      </td>
                    @endforeach
                  </tr>
                </tbody>
            </table>
          </div>
          
          <h2 class="entry-title">
            <a href="blog-single.html">Daftar Jabatan</a>
          </h2>

          <div class="table-responsive">
            <table class="table table-hover table-borderless entry-table ">
              <thead>
                <tr>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Tahun</th>
                  <th scope="col">No. SK</th>
                  <th scope="col">Tanggal Ditambah</th>
                  <th scope="col">Tanggal Diubah</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
                <tbody>
                  <tr>
                    @foreach ($jabatans as $jabatan)
                      <th scope="row">{{ $jabatan->jabatan->nama }}</th>
                      <td>{{ $jabatan->tahun_masuk }}</td>
                      <td>{{ $jabatan->no_surat_keterangan }}</td>
                      <td>{{ $jabatan->created_at }}</td>
                      <td>{{ $jabatan->updated_at }}</td>
                      <td>
                        <a href="" class="btn btn-sm btn-outline-primary"><i class="bi bi-download"></i>Unduh</a>
                      </td>
                    @endforeach
                  </tr>
                </tbody>
            </table>
          </div>

        </article><!-- End blog entry -->

      </div><!-- End blog entries list -->

    </div>

  </div>
</section><!-- End Blog Single Section -->
@endsection


@section('footer')
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="container">
    <div class="copyright">
    Copyright &copy; <strong><span>Balai Pengembangan Multimedia Pendidikan dan Kebudayaan</span></strong>
    </div>
    <div class="credits">
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</div>
</footer><!-- End Footer -->
@endsection