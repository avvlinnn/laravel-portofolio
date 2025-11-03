@extends('layouts.app')

@section('content')
<section class="activity-form-section">
  <h2>🖋️ Edit Aktivitas</h2>
  
  <div class="form-container">
    <form action="{{ route('activities.update', $activity->id) }}" method="POST">
      @csrf
      @method('PUT')

      <label>Nama Aktivitas</label>
      <input type="text" name="nama" value="{{ $activity->nama }}" required>

      <label>Deskripsi</label>
      <textarea name="deskripsi" rows="3">{{ $activity->deskripsi }}</textarea>

      <label>Tanggal</label>
      <input type="date" name="tanggal" value="{{ $activity->tanggal }}" required>

      <div class="checkbox-row">
        <input type="checkbox" name="status" value="selesai" {{ $activity->status == 'selesai' ? 'checked' : '' }}>
        <label>Tandai sebagai selesai</label>
      </div>

      <div class="form-buttons">
        <button type="submit" class="btn-update">Update</button>
        <a href="{{ route('activities.index') }}" class="btn-cancel">Batal</a>
      </div>
    </form>
  </div>
</section>
@endsection
