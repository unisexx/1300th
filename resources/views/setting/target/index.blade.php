@extends('layout/default')

@section('content')


<h3>กลุ่มเป้าหมาย / ปัญหาหลัก / ปัญหาย่่อย</h3>

<div style="margin-bottom:20px;">
<span style="border:1px dotted #999; display:inline-block; height:35px; padding:5px; margin-right:10px;"><img src="images/problem_target_group.png"/> กลุ่มเป้าหมาย</span>
<span style="border:1px dotted #999; display:inline-block; height:35px; padding:5px; margin-right:10px;"><img src="images/problem_main.png"/> ปัญหาหลัก</span>
<span style="border:1px dotted #999; display:inline-block; height:35px; padding:5px; margin-right:10px;"><img src="images/problem1.png"/> ปัญหาย่่อย 1</span>
<span style="border:1px dotted #999; display:inline-block; height:35px; padding:5px; margin-right:10px;"><img src="images/problem2.png"/> ปัญหาย่่อย 2</span>
<span style="border:1px dotted #999; display:inline-block; height:35px; padding:5px; margin-right:10px;"><img src="images/problem3.png"/> ปัญหาย่่อย 3</span>
</div>

<div id="btnBox">
  <input type="button" title="เพิ่มกลุ่มเป้าหมาย" value="เพิ่มกลุ่มเป้าหมาย" onclick="document.location='setting/target/form/0'" class="btn btn-success vtip" />
</div>

<div id="jstree">
    <!-- in this example the tree is populated from inline HTML -->
    <ul>
      <!-- <li class="jstree-open" data-jstree='{"icon":"images/problem_target_group.png"}'>[CH] เด็ก
        <img src="images/add_ticket.png" width="16" height="16" style="margin-left:50px;" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=add'" class="vtip" title="เพิ่มปัญหาหลัก" /> /
        <img src="images/edit2.png" width="16" height="16"  onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=edit'"  class="vtip" title="แก้ไขกลุ่มเป้าหมายนี้" /> /
        <img src="images/remove2.png" width="16" height="16" />
<ul>
        <li class="jstree-open" data-jstree='{"icon":"images/problem_main.png"}'>[CH01] ปัญหาครอบครัว
        <img src="images/add_ticket.png" width="16" height="16" style="margin-left:50px;" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=add'" class="vtip" title="เพิ่มปัญหาย่อย 1" /> /
        <img src="images/edit2.png" width="16" height="16"  onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=edit'"  class="vtip" title="แก้ไขปัญหาปัญหาหลักนี้" /> /
        <img src="images/remove2.png" width="16" height="16" />
        </li>
        <li class="jstree-open" data-jstree='{"icon":"images/problem_main.png"}'>[CH02] ปัญหารายได้และความเป็นอยู่
          <ul>
          	  <li class="jstree-open" data-jstree='{"icon":"images/problem1.png"}'>[CH0201] เร่ร่อน</li>
              <li class="jstree-open" data-jstree='{"icon":"images/problem1.png"}'>[CH0202] พลัดหลง
                <ul>
                <li class="jstree-open" data-jstree='{"icon":"images/problem2.png"}'>[CH020201] ไม่มีผู้ดูแล</li>
                <li class="jstree-open" data-jstree='{"icon":"images/problem2.png"}'>[CH020202] ไม่มีที่อยู่อาศัย
                    <ul>
                  	<li data-jstree='{"icon":"images/problem3.png"}'>problem3</li>
                  	<li data-jstree='{"icon":"images/problem3.png"}'>problem3</li>
                    </ul>
                </li>

                <li data-jstree='{"icon":"images/problem2.png"}'>problem2</li>
        		</ul>
              </li>
              <li data-jstree='{"icon":"images/problem1.png"}'>ขอทาน</li>
       	  </ul>
        </li>
        <li data-jstree='{"icon":"images/problem_main.png"}'>[CH03] ปัญหาความรุนแรง</li>
        <li data-jstree='{"icon":"images/problem_main.png"}'>[CH04] ปัญหาสุขภาพ / อุบัติเหตุ / อุบัติภัย</li>
        <li data-jstree='{"icon":"images/problem_main.png"}'>[CH05] ปัญหาเรื่องสิทธิ สวัสดิการ และกฏหมาย</li>
        <li data-jstree='{"icon":"images/problem_main.png"}'>[CH06] การถูกแสวงหาผลประโยชน์ / แจ้งเบาะแสการค้ามนุษย์</li>
        <li data-jstree='{"icon":"images/problem_main.png"}'>[CH07] ปัญหาพฤติกรรม</li>
        <li data-jstree='{"icon":"images/problem_main.png"}'>[CH08] ปัญหาตั้งครรภ์ในวัยรุ่น/ ตั้งครรภ์ไม่พึงประสงค์</li>
        </ul>
      </li>

      <li data-jstree='{"icon":"images/problem_target_group.png"}'>[YO] เยาวชน</li>
      <li data-jstree='{"icon":"images/problem_target_group.png"}'>[AD] ผู้ใหญ่</li>
      <li data-jstree='{"icon":"images/problem_target_group.png"}'>[OL] ผู้สูงอายุ</li> -->

      <!-- กลุ่มเป้าหมาย -->
      @foreach($rs as $target)
      <li class="jstree-open" data-jstree='{"icon":"images/problem_target_group.png"}'>
        [{{ $target->code }}] {{ $target->name }}
        <img src="images/add_ticket.png" width="16" height="16" style="margin-left:50px;" onclick="document.location='setting/target/form/1/{{ $target->id }}'" class="vtip" title="เพิ่มปัญหาหลัก" /> /
        <img src="images/edit2.png" width="16" height="16"  onclick="document.location='setting/target/form/0/{{ $target->id }}'"  class="vtip" title="แก้ไขกลุ่มเป้าหมายนี้" /> /
        <img src="images/remove2.png" width="16" height="16" onclick="document.location='setting/target/delete/{{ $target->id }}'" />

        <!-- ปัญหาหลัก -->
        @if(count( $target->children ) > 0 )
            <ul>
            @foreach($target->children as $problem)
                <li class="jstree-open" data-jstree='{"icon":"images/problem_main.png"}'>
                  {{ $problem->name }}
                  <img src="images/add_ticket.png" width="16" height="16" style="margin-left:50px;" onclick="document.location='setting/target/form/2/{{ $problem->id }}'" class="vtip" title="เพิ่มปัญหาย่อย1" /> /
                  <img src="images/edit2.png" width="16" height="16"  onclick="document.location='setting/target/form/1/{{ $problem->id }}'"  class="vtip" title="แก้ไขกลุ่มเป้าหมายนี้" /> /
                  <img src="images/remove2.png" width="16" height="16" onclick="document.location='setting/target/delete/{{ $problem->id }}'" />

                  <!-- ปัญหาย่่อย 1 -->
                  @if(count( $problem->children ) > 0 )
                      <ul>
                      @foreach($problem->children as $subproblem_1)
                          <li class="jstree-open" data-jstree='{"icon":"images/problem1.png"}'>
                            {{ $subproblem_1->name }}
                            <img src="images/add_ticket.png" width="16" height="16" style="margin-left:50px;" onclick="document.location='setting/target/form/3/{{ $subproblem_1->id }}'" class="vtip" title="เพิ่มปัญหาย่อย1" /> /
                            <img src="images/edit2.png" width="16" height="16"  onclick="document.location='setting/target/form/2/{{ $subproblem_1->id }}'"  class="vtip" title="แก้ไขกลุ่มเป้าหมายนี้" /> /
                            <img src="images/remove2.png" width="16" height="16" onclick="document.location='setting/target/delete/{{ $subproblem_1->id }}'" />

                            <!-- ปัญหาย่่อย 2 -->
                            @if(count( $subproblem_1->children ) > 0 )
                                <ul>
                                @foreach($subproblem_1->children as $subproblem_2)
                                    <li class="jstree-open" data-jstree='{"icon":"images/problem2.png"}'>
                                      {{ $subproblem_2->name }}
                                      <img src="images/add_ticket.png" width="16" height="16" style="margin-left:50px;" onclick="document.location='setting/target/form/4/{{ $subproblem_2->id }}'" class="vtip" title="เพิ่มปัญหาย่อย2" /> /
                                      <img src="images/edit2.png" width="16" height="16"  onclick="document.location='setting/target/form/3/{{ $subproblem_2->id }}'"  class="vtip" title="แก้ไขกลุ่มเป้าหมายนี้" /> /
                                      <img src="images/remove2.png" width="16" height="16" onclick="document.location='setting/target/delete/{{ $subproblem_2->id }}'" />

                                      <!-- ปัญหาย่่อย 3 -->
                                      @if(count( $subproblem_2->children ) > 0 )
                                          <ul>
                                          @foreach($subproblem_2->children as $subproblem_3)
                                              <li class="jstree-open" data-jstree='{"icon":"images/problem3.png"}'>
                                                {{ $subproblem_3->name }}
                                                <img style="margin-left:50px;" src="images/edit2.png" width="16" height="16"  onclick="document.location='setting/target/form/4/{{ $subproblem_3->id }}'"  class="vtip" title="แก้ไขกลุ่มเป้าหมายนี้" /> /
                                                <img src="images/remove2.png" width="16" height="16" onclick="document.location='setting/target/delete/{{ $subproblem_3->id }}'" />


                                              </li>
                                          @endforeach
                                          </ul>
                                      @endif

                                    </li>
                                @endforeach
                                </ul>
                            @endif

                          </li>
                      @endforeach
                      </ul>
                  @endif

                </li>
            @endforeach
            </ul>
        @endif

      </li>
      @endforeach
    </ul>
</div>


@endsection
