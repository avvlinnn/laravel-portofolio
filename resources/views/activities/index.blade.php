@extends('layouts.app')

@section('title', 'Activities | Alin’s Portfolio')

@section('content')
<div class="activities-container">
  {{-- HEADER --}}
  <div class="activities-header">
    <h2>Things I Do 🚀</h2>
    @auth
      <a href="{{ route('activities.create') }}" class="btn-add">+ Tambah Aktivitas</a>
    @endauth
  </div>

  {{-- GRID --}}
  @if($activities->count() > 0)
  <div class="activities-grid">
    @foreach($activities as $activity)
      <div class="activity-card">
        <div class="card-left">
          <h3>{{ $activity->nama }}</h3>
          <p class="date">📅 {{ \Carbon\Carbon::parse($activity->tanggal)->format('d M Y') }}</p>
          <span class="status {{ $activity->status == 'Selesai' ? 'done' : 'pending' }}">
            {{ $activity->status }}
          </span>
        </div>

        <div class="card-right">
          {{-- Popup View --}}
          <button type="button" class="btn-view" 
                  data-name="{{ $activity->nama }}"
                  data-date="{{ \Carbon\Carbon::parse($activity->tanggal)->format('d M Y') }}"
                  data-status="{{ $activity->status }}"
                  data-desc="{{ $activity->deskripsi ?? 'Tidak ada deskripsi.' }}">
            👁️
          </button>

          @auth
            <a href="{{ route('activities.edit', $activity->id) }}" class="btn-edit">✏️</a>
            <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" class="delete-form">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn-delete" onclick="return confirm('Yakin mau hapus aktivitas ini?')">🗑️</button>
            </form>
          @endauth
        </div>
      </div>
    @endforeach
  </div>
  @else
    <p class="no-activities">Belum ada aktivitas yang ditambahkan.</p>
  @endif
</div>

{{-- === POPUP === --}}
<div class="popup-overlay" id="popupOverlay">
  <div class="popup-box">
    <span class="popup-close" id="popupClose">×</span>
    <h3 id="popupName"></h3>
    <p class="popup-date" id="popupDate"></p>
    <p class="popup-status" id="popupStatus"></p>
    <p class="popup-desc" id="popupDesc"></p>
  </div>
</div>

{{-- SCRIPT VIEW POPUP --}}
<script>
  document.querySelectorAll('.btn-view').forEach(btn => {
    btn.addEventListener('click', () => {
      document.getElementById('popupName').textContent = btn.dataset.name;
      document.getElementById('popupDate').textContent = "📅 " + btn.dataset.date;
      document.getElementById('popupStatus').textContent = "Status: " + btn.dataset.status;
      document.getElementById('popupDesc').textContent = btn.dataset.desc;

      document.getElementById('popupOverlay').classList.add('show');
    });
  });

  document.getElementById('popupClose').addEventListener('click', () => {
    document.getElementById('popupOverlay').classList.remove('show');
  });
  document.getElementById('popupOverlay').addEventListener('click', (e) => {
    if (e.target === e.currentTarget) e.currentTarget.classList.remove('show');
  });
</script>
@endsection
