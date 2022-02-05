
<div class="col-md-12">
    <div class="content-panel">
        <table class="table table-bordered table-striped table-condensed">
        <h4><i class="fa fa-angle-right"></i> Ads Table</h4>
        <hr>
        <div class="col-md-8">
            <input class="form-control" onkeyup="searchbar()" id="sch"
            placeholder="Search for..." type="text"><br>
        </div>
        <thead>
            <tr>
                <th>Vehicle Photos</th>            
                <th>Technical Inspection</th>            
                <th>License Plate Registration</th>            
                <th>Assurance</th>            
                <th>Details</th>
                <th>Created at</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <?php foreach($ads as $row):?>
            <tr>
                <td><button adid="<?php echo $row->id;?>" onclick="o_modal(this)" class="btn btn-sm btn-info">View all</button></td>
                <td><a href="/uploads/drive_document/<?php echo $row->tech_inspec?>" target="blank"  class="btn btn-sm btn-info">View</a></td>
                <td><a href="/uploads/drive_document/<?php echo $row->lics_plate?>" target="blank"  class="btn btn-sm btn-info">View</a></td>
                <td><a href="/uploads/drive_document/<?php echo $row->assurance?>" target="blank"  class="btn btn-sm btn-info">View</a></td>                
                <td><button adid="<?php echo $row->id;?>" onclick="dt_modal(this)" class="btn btn-sm btn-info">View Details</button></td>
                <td><?php echo $row->created_at;?></td>
                <td>
                    <label class="switch" onchange="is_permit(this)" ads_id="<?php echo $row->id;?>">
                        <input type="checkbox"  <?php if($row->status==1){echo "checked";} ?>>
                        <span class="slider round"></span>
                    </label>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="photomodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"></div>
            <div class="modal-body">
                <div id="photos_content"></div>
            </div>
            <div class="modal-footer"><button class="btn btn-block btn-danger" data-dismiss="modal">Close</button></div>
        </div>
    </div>
</div>
<div class="modal fade" id="detailmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"></div>
            <div class="modal-body">
                <div id="details_content"></div>
            </div>
            <div class="modal-footer"><button class="btn btn-block btn-danger" data-dismiss="modal">Close</button></div>
        </div>
    </div>
</div>

<script>
    function searchbar(){
        var key = $('#sch').val();
        $.post(
            '/admin/index.php/Admin_C/searchads',
            {
                key:key
            },
            function(data){
                $('#tbody').html(data);
            }
        );
    }
    function is_permit(e){
        var ads_id = $(e).attr('ads_id');
        $.post(
            '/admin/index.php/Admin_C/ads_permit',
            {
                ads_id:ads_id
            },
            function(data){
                toastr_call('success','success',"This is permitted successfully");
            }
        );
    }
    function o_modal(e){
        var adid = $(e).attr('adid');
        $('#photomodal').modal('show');
        $.post(
            '/admin/index.php/Admin_C/get_ads_photos',
            {
                ads_id:adid
            },
            function(data){
                $('#photos_content').html(data);
            }
        );

    }
    function dt_modal(e){
        var adid = $(e).attr('adid');
        $('#detailmodal').modal('show');
        $.post(
            '/admin/index.php/Admin_C/get_ads_details',
            {
                ads_id:adid
            },
            function(data){
                $('#details_content').html(data);
            }
        );
    }
</script>