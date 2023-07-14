@extends('layouts.admin')

@section('konten')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include('layouts.header')
    @include('layouts.sidebar')
    @include('sweetalert::alert')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
        </div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body wizard-content">
                    <div class="row">
                        <h4 class="page-title text-center">{{$title}}</h4>
                        <div class="col-12 d-flex no-block align-items-center">
                            <div class="ms-auto text-end">
                                <nav aria-label="breadcrumb">
                                    <a href="{{ route('artikel.create')}}" class="btn btn-info">Tambah Artikel</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Judul</th>
                                <th class="image-center">Gambar</th>
                                <th>Isi</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artikels as $artikel)
                            <tr>

                                <td>{{ $artikel->id_artikel }}</td>
                                <td>{{ $artikel->judul }}</td>
                                <td>
                                    <img src="{{ asset('images/artikel/'.$artikel->gambar) }}" width="50">
                                </td>
                                <td>
                                    {{ \Illuminate\Support\Str::limit(($artikel->isi)),'50'}}
                                </td>
                                <td class="text-center" width="12%">
                                    <form method="post" action="{{route('artikel.destroy',$artikel->id_artikel)}}" id="DeleteForm">
                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('artikel.edit',$artikel->id_artikel) }}">Ubah</a>
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="fireSweetAlert()" id="delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger btn-sm show_confirm" data-toggle="tooltip">Delete</button>
                </div>
            </div>
        </div>

    </div>
</div>
@include('layouts.footer')
</div>
</div>
@endsection
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script> -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
function fireSweetAlert() {
    Swal.fire({
        title: 'Yakin data akan dihapus?',
        icon: 'warning',
        showCloseButton: true,
        confirmButtonColor: '#3085d6',
        closeButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Hapus!',
                'Data berhasil dihapus.',
                'success'
            )
            document.getElementById("DeleteForm").submit();
        }
    })
}

// $('.show_confirm').click(function(event) {
//     var form = $(this).closest("form");
//     var name = $(this).data("name");
//     event.preventDefault();
//     swal({
//             title: `Are you sure you want to delete this record?`,
//             text: "If you delete this, it will be gone forever.",
//             icon: "warning",
//             buttons: true,
//             dangerMode: true,
//         })
//         .then((willDelete) => {
//             if (willDelete) {
//                 form.submit();
//             }
//         });
// });
</script>