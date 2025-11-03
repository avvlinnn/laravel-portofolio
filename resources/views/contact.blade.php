@extends('layouts.app')

@section('title', 'Contact | Alin\'s Portfolio')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="contact-section">
  <h2>Let’s Connect 💬</h2>
  <p>Bisa kontak aku lewat info di kiri atau langsung kirim pesan di form kanan 👇</p>

  <div class="contact-container">
    {{-- KIRI: INFO KONTAK (diringkas) --}}
    <div class="contact-left">
      <div class="contact-item">
        <span class="icon">📧</span>
        <a href="mailto:auulinnn@gmail.com">auulinnn@gmail.com</a>
      </div>
      <div class="contact-item">
        <span class="icon">📱</span>
        <a href="tel:081390895162">0813-9089-5162</a>
      </div>
      <div class="contact-item">
        <span class="icon">💻</span>
        <a href="https://github.com/avvlinnn" target="_blank">github.com/avvlinnn</a>
      </div>
      <div class="contact-item">
        <span class="icon">📸</span>
        <a href="https://instagram.com/avvlinnnnn" target="_blank">@avvlinnnnn</a>
      </div>
    </div>

    {{-- KANAN: FORM KONTAK --}}
    <div class="contact-right">
      <form action="{{ route('sendToWhatsApp') }}" method="POST" class="contact-form">
        @csrf

        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" placeholder="Masukkan nama kamu" required>
          @error('nama') <small class="error">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Masukkan email aktif" required>
          @error('email') <small class="error">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
          <label for="nohp">Nomor HP / WhatsApp</label>
          <input type="text" id="nohp" name="nohp" placeholder="Masukkan nomor HP kamu" required>
          @error('nohp') <small class="error">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
          <label for="pesan">Pesan</label>
          <textarea id="pesan" name="pesan" rows="4" placeholder="Tulis pesan kamu di sini..." required></textarea>
          @error('pesan') <small class="error">{{ $message }}</small> @enderror
        </div>

        <div class="form-submit">
          <button type="submit" class="btn-kirim">Kirim ke WhatsApp</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
