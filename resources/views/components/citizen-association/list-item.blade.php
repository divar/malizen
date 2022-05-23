<div class="flex flex-col sm:flex-row sm:gap-x-3 gap-y-3 ">
  <div class="field basis-auto">
    <span class="font-bold">ID</span>
    <span class="">{{$citizen_association->id}}</span>
  </div>
  <div class="field basis-auto">
    <div class="field">
      <span class="font-bold">Kelurahan</span>
      <span class="">{{$citizen_association->village->name}}</span>
    </div>
  </div>
  <div class="field basis-auto">
    <div class="field">
      <span class="font-bold">RW</span>
      <span class="">{{$citizen_association->name}}</span>
    </div>
  </div>
  <div class="field basis-auto">
    <span class="font-bold">Created At</span>
    <span class="">{{$citizen_association->created_at}}</span>
  </div>
  <div class="field basis-auto">
    <span class="font-bold">Created By</span>
    <span class="">{{$citizen_association->creator->name}}</span>
  </div>
</div>
