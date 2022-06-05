<div class="flex flex-col sm:flex-row sm:gap-x-3 gap-y-3">
    <div class="field grow-0">
        <span class="font-bold">ID</span>
        <span class="">{{$r->id}}</span>
    </div>
    <div class="field grow">
        <div class="field">
            <span class="font-bold">NIK</span>
            <span class="">{{$r->nik}}</span>
        </div>

        <div class="field">
            <span class="font-bold">No. KK</span>
            <span class="">{{$r->kk}}</span>
        </div>
    </div>
    <div class="field grow">
        <span class="font-bold">Nama</span>
        <span class="">{{$r->name}}</span>
    </div>
    <div class="field grow">
        <span class="font-bold">Alamat</span>
        <span class="">{{$r->address}}</span>
    </div>
    <div class="field grow">
        <span class="font-bold">Agama</span>
        <span class="">{{$r->religion->name}}</span>
    </div>
    <div class="field shrink">
        <a href="{{url("/v1/residents",$r->id)}}" class="btn btn-blue rounded-md">View</a>
    </div>
</div>
