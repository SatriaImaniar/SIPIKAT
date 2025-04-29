@extends('layouts.app')

@section('content')
  <div class="modal fade" id="detailModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Detail User</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <dl class="row">
            <dt class="col-sm-4">Nama</dt>
            <dd class="col-sm-8">{{ $user->name }}</dd>

            <dt class="col-sm-4">NIP</dt>
            <dd class="col-sm-8">{{ $user->nip }}</dd>

            <dt class="col-sm-4">Tempat Lahir</dt>
            <dd class="col-sm-8">{{ $user->tempat_lahir }}</dd>

            <dt class="col-sm-4">Tanggal Lahir</dt>
            <dd class="col-sm-8">{{ $user->tanggal_lahir }}</dd>

            <!-- etc… -->
          </dl>
        </div>
      </div>
    </div>
  </div>
@endsection
