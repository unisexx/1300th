@extends('layout/default')

@section('content')


<h3>กระทรวง / กรม / สำนัก/กอง / กลุ่ม/ฝ่าย</h3>

<div style="margin-bottom:20px;">
<span style="border:1px dotted #999; display:inline-block; height:35px; padding:5px; margin-right:10px;"><img src="images/dept_ministry.png"/> กระทรวง</span>
<span style="border:1px dotted #999; display:inline-block; height:35px; padding:5px; margin-right:10px;"><img src="images/dept_department.png"/> กรม</span>
<span style="border:1px dotted #999; display:inline-block; height:35px; padding:5px; margin-right:10px;"><img src="images/dept_bureau.png"/> สำนัก/กอง</span>

<span style="border:1px dotted #999; display:inline-block; height:35px; padding:5px; margin-right:10px;"><img src="images/dept_group.png" alt=""/> กลุ่ม/ฝ่าย</span></div>

<div id="btnBox">
  <input type="button" title="เพิ่มกระทรวง" value="เพิ่มกระทรวง" onclick="document.location='setting/department/form/0'" class="btn btn-success vtip" />
</div>

<div id="jstree">
    <!-- in this example the tree is populated from inline HTML -->
    <ul>
    <!-- กระทรวง -->
      @foreach($rs as $ministry)
      <li class="jstree-open" data-jstree='{"icon":"images/dept_ministry.png"}'>
        [{{ $ministry->code }}] {{ $ministry->name }}
        <img src="images/add_ticket.png" width="16" height="16" style="margin-left:50px;" onclick="document.location='setting/department/form/1/{{ $ministry->id }}'" class="vtip" title="เพิ่มกรม" /> /
        <img src="images/edit2.png" width="16" height="16"  onclick="document.location='setting/department/form/0/0/{{ $ministry->id }}'"  class="vtip" title="แก้ไขกระทรวงนี้" /> /
        <img src="images/remove2.png" width="16" height="16" onclick="return departmentDelete({{ $ministry->id }});" />

        <!-- กรม -->
        @if(count( $ministry->children ) > 0 )
            <ul>
            @foreach($ministry->children as $department)
                <li class="jstree-open" data-jstree='{"icon":"images/dept_department.png"}'>
                  [{{ $department->code }}] {{ $department->name }}
                  <img src="images/add_ticket.png" width="16" height="16" style="margin-left:50px;" onclick="document.location='setting/department/form/2/{{ $department->id }}'" class="vtip" title="เพิ่มสำนัก/กอง" /> /
                  <img src="images/edit2.png" width="16" height="16"  onclick="document.location='setting/department/form/1/{{ $department->parent->id }}/{{ $department->id }}'"  class="vtip" title="แก้ไขกรมนี้" /> /
                  <img src="images/remove2.png" width="16" height="16" onclick="return departmentDelete({{ $department->id }});" />

                  <!-- สำนัก/กอง -->
                  @if(count( $department->children ) > 0 )
                      <ul>
                      @foreach($department->children as $bureau)
                          <li class="jstree-open" data-jstree='{"icon":"images/dept_bureau.png"}'>
                            [{{ $bureau->code }}] {{ $bureau->name }}
                            <img src="images/add_ticket.png" width="16" height="16" style="margin-left:50px;" onclick="document.location='setting/department/form/3/{{ $bureau->id }}'" class="vtip" title="เพิ่มกลุ่ม/ฝ่าย" /> /
                            <img src="images/edit2.png" width="16" height="16"  onclick="document.location='setting/department/form/2/{{ $bureau->parent->id }}/{{ $bureau->id }}'"  class="vtip" title="แก้ไขสำนัก/กองนี้" /> /
                            <img src="images/remove2.png" width="16" height="16" onclick="return departmentDelete({{ $bureau->id }});" />

                            <!-- กลุ่ม/ฝ่าย -->
                            @if(count( $bureau->children ) > 0 )
                                <ul>
                                @foreach($bureau->children as $group)
                                    <li class="jstree-open" data-jstree='{"icon":"images/dept_group.png"}'>
                                      [{{ $group->code }}] {{ $group->name }}
                                      <img src="images/edit2.png" width="16" height="16" style="margin-left:50px;"  onclick="document.location='setting/department/form/3/{{ $group->parent->id }}/{{ $group->id }}'"  class="vtip" title="แก้ไขสำนัก/กองนี้" /> /
                                      <img src="images/remove2.png" width="16" height="16" onclick="return departmentDelete({{ $group->id }});" />
                                    </li>
                                @endforeach
                                </ul>
                            @endif
                            <!-- END กลุ่ม/ฝ่าย -->

                          </li>
                      @endforeach
                      </ul>
                  @endif
                  <!-- END สำนัก/กอง -->

                </li>
            @endforeach
            </ul>
        @endif
        <!-- END กรม -->

      </li>
      @endforeach
    </ul>
    <!-- END กระทรวง -->
</div>

<script>
function departmentDelete($id){
  if (confirm('ต้องการลบรายการนี้')) {
      document.location='setting/department/delete/'+$id;
  }
}
</script>



@endsection
