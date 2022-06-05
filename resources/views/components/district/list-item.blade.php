<div class="flex flex-col sm:flex-row sm:gap-x-3 gap-y-3 ">
  <div class="field basis-auto">
    <span class="font-bold">ID</span>
    <span class="">{{$d->id}}</span>
  </div>
  <div class="field basis-auto">
    <div class="field">
      <span class="font-bold">Kota / Kabupaten</span>
      <span class="">{{$d->city->name}}</span>
    </div>
  </div>
  <div class="field basis-auto">
    <div class="field">
      <span class="font-bold">Kecamatan</span>
      <span class="">{{$d->name}}</span>
    </div>
  </div>
  <div class="field basis-auto">
    <span class="font-bold">Created At</span>
    <span class="">{{$d->created_at}}</span>
  </div>
  <div class="field basis-auto">
    <span class="font-bold">Created By</span>
    <span class="">{{$d->creator->name}}</span>
  </div>
  <div class="field shrink">
    <a href="{{url("/v1/districts",$d->id)}}" class="btn btn-blue rounded-md">View</a>
  </div>
</div>
