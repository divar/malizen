<div class="flex flex-col sm:flex-row sm:gap-x-3 gap-y-3 ">
  <div class="field basis-auto">
    <span class="font-bold">ID</span>
    <span class="">{{$c->id}}</span>
  </div>
  <div class="field basis-auto">
    <div class="field">
      <span class="font-bold">Provinsi</span>
      <span class="">{{$c->province->name}}</span>
    </div>
  </div>
  <div class="field basis-auto">
    <div class="field">
      <span class="font-bold">Kota / Kabupaten</span>
      <span class="">{{$c->name}}</span>
    </div>
  </div>
  <div class="field basis-auto">
    <span class="font-bold">Created At</span>
    <span class="">{{$c->created_at}}</span>
  </div>
  <div class="field basis-auto">
    <span class="font-bold">Created By</span>
    <span class="">{{$c->creator->name}}</span>
  </div>
</div>
