@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; padding-bottom: 40px; min-height: 600px">
    <div class="card" style="width: 600px">
        <div class="card-body">
        <div class="card-title"><h5>Data Barang</h5></div>
        <p class="card-text">
            <form action="{{ route('goods') }}" method="POST">
                @csrf @method('PUT')
                <input type="hidden" name="id" value="{{ $goods->id }}">
                <div class="form-group mt-2 mt-2">
                    <label for="">Kategori</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}"
                                @if ($item->id == $goods->category_id)
                                    selected
                                @endif>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-2 mt-2">
                  <label for="">Nama</label>
                  <input type="text" name="name" class="form-control" value="{{ $goods->name }}">
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-sm btn-success" name="simpan">Simpan</button>
                </div>
            </form>
        </p>
        </div>
    </div>
</div>
@endsection