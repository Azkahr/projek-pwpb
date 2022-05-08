<div class="navbar">
    <a style="order: 4; width: 5%;" href="/">
        <img class="img-logo" src="{{ asset('img/logo 41.png') }}" alt="logo smpn 41">
    </a>
    <a href="/" style="order: 1">Home</a>
    <div class="dropdown" style="order: 2">
        <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a href="{{ route('guru') }}" class="dropdown-item">Guru</a>
            <a href="{{ route('ekskul') }}" class="dropdown-item">Ekstrakurikuler</a>
        </div>
    </div>
    <a href="#" style="order: 3">Program</a>
    <a href="{{ route('berita') }}" style="order: 5">Berita</a>
    <a href="{{ route('contact') }}" style="order: 6">Kontak</a>
    <a href="{{ route('pengumuman') }}" style="order: 7">Pengumuman</a>
</div>