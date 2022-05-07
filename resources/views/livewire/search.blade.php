<div>
    <div class="form-group col-md-3 float-end" style="margin-right: 20px;">
        <input type="text" wire:model="search" class="form-control" placeholder="Cari Guru" autocomplete="off">
    </div>
    <br>
    
    <div class="container">
        <div class="cardG">
            @if ($teachers && $teachers->count() > 0)
                @foreach ($teachers as $teacher)
                <div class="cards mt-5">
                @if ($teacher->image)
                    <img src="{{ asset('storage/' . $teacher->image) }}" alt="Avatar" style="width:100%">
                @else
                    <img src="{{ asset('img/user.png') }}" alt="avatar" style="width: 100%">
                @endif
                    <div class="cards-content">
                        <h4><b>{{ $teacher->nama }}</b></h4> 
                        <p>{{ $teacher->nip }}</p> 
                        <p>{{ $teacher->lahir }}</p> 
                    </div>
                </div>
                @endforeach
            @else
                
            @endif
        </div>
    </div>
</div>


