@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; padding-bottom: 40px; min-height: 600px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data Barang Keluar</h5></div>
            <p class="card-text">
            <form action="{{ route('exit_goods') }}" method="POST">
                @csrf @method('POST')
                <div class="form-group mt-2 mt-2">
                    <label for="">goods</label>
                    <select name="goods_id" id="" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        @foreach ($goods as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-4">
                    <label for="">Tgl Keluar</label>
                    <input type="date" class="form-control" name="out_date">
                  </div>
                <div class="form-group mt-4">
                    <label for="">Jumlah</label>
                    <input type="number" class="form-control" name="quantity">
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