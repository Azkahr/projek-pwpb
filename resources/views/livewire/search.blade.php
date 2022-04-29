<div>
    <div class="body col-lg-10">
        <div class="form-group col-md-3 float-end">
            <input type="text" wire:model="search" class="form-control" placeholder="Cari Guru" autocomplete="off">
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Lahir</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($teachers && $teachers->count() > 0)
                    @foreach ($teachers as $teacher)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $teacher->nama }}</td>
                            <td>{{ $teacher->nip }}</td>
                            <td>{{ $teacher->lahir }}</td>
                            <td>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Lihat
                                </button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <h3 style="text-align: center">Tidak ada hasil</h3>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
