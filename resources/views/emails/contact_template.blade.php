<h2>Pesan Baru dari Website PT Agisa Dimarta Perkasa</h2>
<p><strong>Nama:</strong> {{ $data['nama'] }}</p>
<p><strong>Perusahaan:</strong> {{ $data['perusahaan'] ?? 'Tidak diisi' }}</p>
<p><strong>Email Pengirim:</strong> {{ $data['email'] }}</p>
<p><strong>Kebutuhan:</strong> {{ $data['kebutuhan'] }}</p>
<hr>
<p><strong>Isi Pesan:</strong></p>
<p>{{ $data['pesan'] }}</p>