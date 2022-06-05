<div class="flex flex-col sm:flex-row sm:gap-x-3 gap-y-3 ">
  <div class="field basis-auto">
    <span class="font-bold">ID</span>
    <span class="">{{$neighborhood_association->id}}</span>
  </div>
  <div class="field basis-auto">
    <div class="field">
      <span class="font-bold">Kelurahan</span>
      <span class="">{{$neighborhood_association->village->name}}</span>
    </div>
  </div>
  <div class="field basis-auto">
    <div class="field">
      <span class="font-bold">RT</span>
      <span class="">{{$neighborhood_association->name}}</span>
    </div>
  </div>
  <div class="field basis-auto">
    <div class="field">
      <span class="font-bold">RW</span>
      <span class="">{{$neighborhood_association->citizenAssociation ? $neighborhood_association->citizenAssociation->name : '-'}}</span>
    </div>
  </div>
  <div class="field basis-auto">
    <span class="font-bold">Created At</span>
    <span class="">{{$neighborhood_association->created_at}}</span>
  </div>
  <div class="field basis-auto">
    <span class="font-bold">Created By</span>
    <span class="">{{$neighborhood_association->creator->name}}</span>
  </div>
  <div class="field shrink">
    <a href="{{url("/v1/neighborhood-associations",$neighborhood_association->id)}}" class="btn btn-blue rounded-md">View</a>
  </div>
</div>
