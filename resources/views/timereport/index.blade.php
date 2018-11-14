@extends('layouts.app')



@section('content')
<div id="container">
<script type="text/javascript">

var dataSet = [
  {"date" : "2018/11/8", "checkinTime" : "10:00","checkoutTime" : "21:00", "workTime" : "11:00", "emp_id" : "20973323", "name" : "野比　大雄" },
{"date" : "2018/11/9", "checkinTime" : "13:00","checkoutTime" : "(24:00)", "workTime" : "11:00", "emp_id" : "20973323", "name" : "野比　大雄" },
{"date" : "2018/11/10", "checkinTime" : "(00:00)","checkoutTime" : "12:00", "workTime" : "12:00", "emp_id" : "20973323", "name" : "野比　大雄" },
{"date" : "2018/11/11", "checkinTime" : "8:30","checkoutTime" : "18:30", "workTime" : "10:00", "emp_id" : "20973323", "name" : "野比　大雄" },
{"date" : "2018/11/12", "checkinTime" : "8:30","checkoutTime" : "18:30", "workTime" : "10:00", "emp_id" : "20973323", "name" : "野比　大雄" },
{"date" : "2018/11/13", "checkinTime" : "8:30","checkoutTime" : "18:30", "workTime" : "10:00", "emp_id" : "20973323", "name" : "野比　大雄" },
{"date" : "2018/11/14", "checkinTime" : "8:30","checkoutTime" : "18:30", "workTime" : "10:00", "emp_id" : "20973323", "name" : "野比　大雄" },
{"date" : "2018/11/15", "checkinTime" : "8:30","checkoutTime" : "18:30", "workTime" : "10:00", "emp_id" : "20973323", "name" : "野比　大雄" },
{"date" : "2018/11/16", "checkinTime" : "8:30","checkoutTime" : "18:30", "workTime" : "10:00", "emp_id" : "20973323", "name" : "野比　大雄" },
{"date" : "2018/11/17", "checkinTime" : "8:30","checkoutTime" : "18:30", "workTime" : "10:00", "emp_id" : "20973323", "name" : "野比　大雄" },
{"date" : "2018/11/18", "checkinTime" : "8:30","checkoutTime" : "18:30", "workTime" : "10:00", "emp_id" : "20973323", "name" : "野比　大雄" },
{"date" : "2018/11/19", "checkinTime" : "8:30","checkoutTime" : "18:30", "workTime" : "10:00", "emp_id" : "20973323", "name" : "野比　大雄" },
{"date" : "2018/11/20", "checkinTime" : "8:30","checkoutTime" : "18:30", "workTime" : "10:00", "emp_id" : "20973323", "name" : "野比　大雄" },
{"date" : "2018/11/7", "checkinTime" : "11:00","checkoutTime" : "21:00", "workTime" : "10:00", "emp_id" : "34212346", "name" : "刚田　武" },
{"date" : "2018/11/8", "checkinTime" : "11:10","checkoutTime" : "21:05", "workTime" : "9:55", "emp_id" : "34212346", "name" : "刚田　武" },
{"date" : "2018/11/9", "checkinTime" : "11:20","checkoutTime" : "21:10", "workTime" : "9:50", "emp_id" : "34212346", "name" : "刚田　武" },
{"date" : "2018/11/10", "checkinTime" : "11:30","checkoutTime" : "21:15", "workTime" : "9:45", "emp_id" : "34212346", "name" : "刚田　武" },
{"date" : "2018/11/11", "checkinTime" : "11:40","checkoutTime" : "21:20", "workTime" : "9:40", "emp_id" : "34212346", "name" : "刚田　武" },
{"date" : "2018/11/12", "checkinTime" : "11:50","checkoutTime" : "21:25", "workTime" : "9:35", "emp_id" : "34212346", "name" : "刚田　武" },
{"date" : "2018/11/13", "checkinTime" : "12:00","checkoutTime" : "21:30", "workTime" : "9:30", "emp_id" : "34212346", "name" : "刚田　武" },
{"date" : "2018/11/14", "checkinTime" : "12:10","checkoutTime" : "21:35", "workTime" : "9:25", "emp_id" : "34212346", "name" : "刚田　武" },
{"date" : "2018/11/15", "checkinTime" : "12:20","checkoutTime" : "21:40", "workTime" : "9:20", "emp_id" : "34212346", "name" : "刚田　武" },
{"date" : "2018/11/16", "checkinTime" : "12:30","checkoutTime" : "21:45", "workTime" : "9:15", "emp_id" : "34212346", "name" : "刚田　武" },
{"date" : "2018/11/17", "checkinTime" : "12:40","checkoutTime" : "21:50", "workTime" : "9:10", "emp_id" : "34212346", "name" : "刚田　武" },
{"date" : "2018/11/18", "checkinTime" : "12:50","checkoutTime" : "21:55", "workTime" : "9:05", "emp_id" : "34212346", "name" : "刚田　武" },
{"date" : "2018/11/19", "checkinTime" : "13:00","checkoutTime" : "22:00", "workTime" : "9:00", "emp_id" : "34212346", "name" : "刚田　武" },
{"date" : "2018/11/20", "checkinTime" : "13:10","checkoutTime" : "22:05", "workTime" : "8:55", "emp_id" : "34212346", "name" : "刚田　武" },
];


$(document).ready(function() {
    var tblDatas = $('#example').DataTable( {
      ordering: false,
      info: false,
      paging: true,
      pageLength: 25,
      searching: false,
        data: dataSet,
        columns: [ 
            { data: "date" },
            { data: "checkinTime" },
            { data: "checkoutTime" },
            { data: "workTime" },
            { data: "emp_id" },
            { data: "name" }           
        ]
    } );

    
    // tblDatas.on( 'draw', function () {
    //   var recordsTotal = parseInt(tblDatas.page.info().recordsTotal);
    //   if(recordsTotal > 1){
    //     recordsTotal = recordsTotal-1;
    //   }

    //   $("#lblCnt").text(recordsTotal);
    // } );

    // $.fn.dataTable.ext.errMode = 'none';

    // tblDatas.on( 'error.dt', function (e, settings, techNote, message) {
    //    alert( 'エラーを発生しました' );
    //    } );

    // $("#selectYM").change(function(){
    //     var chgUrl= "/api/v1/utilization/" +  $("#selectYM").val();
    //     tblDatas.ajax.url(chgUrl).load();
    // });

    // $("#btnRefresh").click(function(){
    //     $("#selectYM").val(curerentYm);
    //     var chgUrl= "/api/v1/utilization/" +  curerentYm;
    //     tblDatas.ajax.url(chgUrl).load();

    // });
    
} );
</script>
    <ul class="nav nav-tabs nav-justified">
    <li style="background-color:#6666FF; color:#FFFFFF; width:100%"><h5><label>&nbsp;&nbsp;勤務結果レポート</label></h5></li>
    </ul>
    <br>
    <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="inputdate" class="d-block w-100">日付</label>
            <input type="text" id="inputdate" class="custom-control d-block w-100" value="2018/11">
            &nbsp;&nbsp;&nbsp;&nbsp;<label for="inputname" class="d-block w-100">氏名</label>
            <input type="text" id="inputname" class="custom-control d-block w-100">
            &nbsp;&nbsp;&nbsp;&nbsp;<label for="inputid" class="d-block w-100">ID</label>
            <input type="text" id="inputid" class="custom-control d-block w-100">
          </div> 
    </div>

          <div class="btn-group mr-2" style="float:right">
                <button class="btn btn-sm btn-outline-secondary">クリア</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-sm btn-outline-secondary">検索</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </div>
          <br>
          <div class="btn-group mr-2">
            <label style="color:black;font-weight:bold">現行検索条件: </label>&nbsp;&nbsp;&nbsp;&nbsp;<label id="" style="color:black;font-weight:bold">日付: 当月 (2018/11)</label>
          </div>
    <br>
    <div class="table-responsive">
      <table id="example" class="display" width="100%">
        <thead>
          <tr><th style="background-color:#6666FF; color:#FFFFFF">日付</th>               
              <th style="background-color:#6666FF; color:#FFFFFF">出勤時点</th>
              <th style="background-color:#6666FF; color:#FFFFFF">退勤時点</th>
              <th style="background-color:#6666FF; color:#FFFFFF">勤務時間</th>
              <th style="background-color:#6666FF; color:#FFFFFF">ID</th>
              <th style="background-color:#6666FF; color:#FFFFFF">氏名</th>
          </tr>
        </thead>
      </table>
    </div>
</div>
@endsection
