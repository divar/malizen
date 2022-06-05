<div class="flex flex-col sm:flex-row sm:gap-x-3 gap-y-3 ">
  <div class="field basis-auto">
    <span class="font-bold">ID</span>
    <span class="">{{$v->id}}</span>
  </div>
  <div class="field basis-auto">
    <div class="field">
      <span class="font-bold">Kecamatan</span>
      <span class="">{{$v->district->name}}</span>
    </div>
  </div>
  <div class="field basis-auto">
    <div class="field">
      <span class="font-bold">Kelurahan</span>
      <span class="">{{$v->name}}</span>
    </div>
  </div>
  <div class="field basis-auto">
    <span class="font-bold">Created At</span>
    <span class="">{{$v->created_at}}</span>
  </div>
  <div class="field basis-auto">
    <span class="font-bold">Created By</span>
    <span class="">{{$v->creator->name}}</span>
  </div>
  <div class="field shrink">
    <a href="{{url("/v1/villages",$v->id)}}" class="btn btn-blue rounded-md">View</a>
  </div>
</div>
