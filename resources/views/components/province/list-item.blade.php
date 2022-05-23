<div class="flex flex-col sm:flex-row sm:gap-x-3 gap-y-3 ">
  <div class="field basis-auto">
    <span class="font-bold">ID</span>
    <span class="">{{$p->id}}</span>
  </div>
  <div class="field basis-auto">
    <div class="field">
      <span class="font-bold">Provinsi</span>
      <span class="">{{$p->name}}</span>
    </div>
  </div>
  <div class="field basis-auto">
    <span class="font-bold">Created At</span>
    <span class="">{{$p->created_at}}</span>
  </div>
  <div class="field basis-auto">
    <span class="font-bold">Created By</span>
    <span class="">{{$p->creator->name}}</span>
  </div>
</div>
