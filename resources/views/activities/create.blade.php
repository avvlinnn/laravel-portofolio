@extends('layouts.app')

@section('content')
<section class="activity-form-section">
  <h2>✨ Tambah Aktivitas</h2>
  
  <div class="form-container">
    <form action="{{ route('activities.store') }}" method="POST">
      @csrf
      <label>Nama Aktivitas</label>
      <input type="text" name="nama" required>

      <label>Deskripsi</label>
      <textarea name="deskripsi" rows="3"></textarea>

      <label>Tanggal</label>
      <input type="date" name="tanggal" required>

      <div class="form-buttons">
        <button type="submit" class="btn-save">Simpan</button>
        <a href="{{ route('activities.index') }}" class="btn-cancel">Batal</a>
      </div>
    </form>
  </div>
</section>
@endsection
