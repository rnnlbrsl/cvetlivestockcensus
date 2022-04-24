@extends('layouts.app')
@section('title')
Livestock Census | All Records
@endsection
@section('content')
<div class="container">
    <div class="pull-right">
        <a href="{{ route('export_excel.excel') }}" class="btn btn-success" style="float:right;">Export to Excel</a>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float:right; margin-right: 10px;">Import Excel File</button>
        <br />
    </div>
    <div class="table-responsive">
        <livewire:records-table>
    </div>
    <br>
</div>
<!-- View Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">View Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/record/update" method="POST" enctype="multipart/form-data" id="form-modal-data">
                    @csrf
                    <div class="row">
                        <input type="hidden" id="csrf" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="record_id" id="record_id">
                        <div class="form-group col-md-4" style="overflow: auto;">
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>Lastname</strong></span>
                                <input type="text" name="lastname" id="lastname" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group col-md-4" style="overflow: auto;">
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>Firstname</strong></span>
                                <input type="text" name="firstname" id="firstname" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group col-md-4" style="overflow: auto;">
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>Middlename</strong></span>
                                <input type="text" name="middlename" id="middlename" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3" style="overflow: auto;">
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>Gender</strong></span>
                                <input type="text" name="gender" id="gender" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-3" style="overflow: auto;">
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>House No.</strong></span>
                                <input type="text" name="houseno" id="houseno" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-3" style="overflow: auto;">
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>Sitio</strong></span>
                                <input type="text" name="sitio" id="sitio" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-3" style="overflow: auto;">
                            <div class="md-form mb-1">
                            <span class="border-0">Barangay</span>
                            <select class="form-control" id="barangay" name="barangay">
                                <option>Alos</option>
                                <option>Amandiego</option>
                                <option>Amangbangan</option>
                                <option>Balangobong</option>
                                <option>Balayang</option>
                                <option>Bisocol</option>
                                <option>Bolaney</option>
                                <option>Baleyadaan</option>
                                <option>Bued</option>
                                <option>Cabatuan</option>
                                <option>Cayucay</option>
                                <option>Dulacac</option>
                                <option>Inerangan</option>
                                <option>Landoc</option>
                                <option>Linmansangan</option>
                                <option>Lucap</option>
                                <option>Maawi</option>
                                <option>Macatiw</option>
                                <option>Magsaysay</option>
                                <option>Mona</option>
                                <option>Palamis</option>
                                <option>Pandan</option>
                                <option>Pangapisan</option>
                                <option>Poblacion</option>
                                <option>Pocalpocal</option>
                                <option>Pogo</option>
                                <option>Polo</option>
                                <option>Quibuar</option>
                                <option>Sabangan</option>
                                <option>San Antonio</option>
                                <option>San Jose</option>
                                <option>San Roque</option>
                                <option>San Vicente</option>
                                <option>Santa Maria</option>
                                <option>Tanaytay</option>
                                <option>Tangcarang</option>
                                <option>Tawintawin</option>
                                <option>Telbang</option>
                                <option>Victoria</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Cattle and Carabao -->
                    <div class="row">
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                            <span class="border-0"><strong>Cattle</strong></span>
                                <p>Male :</p>
                                <input type="text" name="mcattlecount" id="mcattlecount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0">&nbsp;</span>
                                <p>Female :</p>
                                <input type="text" name="fcattlecount" id="fcattlecount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>Carabao</strong></span>
                                <p>Male :</p>
                                <input type="text" name="mcarabaocount" id="mcarabaocount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0">&nbsp;</span>
                                <p>Female :</p>
                                <input type="text" name="fcarabaocount" id="fcarabaocount" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- Canine and Feline -->
                    <div class="row">
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>Canine</strong></span>
                                <p>Male :</p>
                                <input type="text" name="mcaninecount" id="mcaninecount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0">&nbsp;</span>
                                <p>Female :</p>
                                <input type="text" name="fcaninecount" id="fcaninecount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>Feline</strong></span>
                                <p>Male :</p>
                                <input type="text" name="mfelinecount" id="mfelinecount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0">&nbsp;</span>
                                <p>Female :</p>
                                <input type="text" name="ffelinecount" id="ffelinecount" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- Swine and Poultry -->
                    <div class="row">
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>Swine</strong></span>
                                <p>Fattener :</p>
                                <input type="text" name="fattenercount" id="fattenercount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0">&nbsp;</span>
                                <p>Breeder :</p>
                                <input type="text" name="breedercount" id="breedercount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>Poultry</strong></span>
                                <p>Hen :</p>
                                <input type="text" name="phencount" id="phencount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0">&nbsp;</span>
                                <p>Rooster :</p>
                                <input type="text" name="proostercount" id="proostercount" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- Duck and Goat -->
                    <div class="row">
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>Duck</strong></span>
                                <p>Drake :</p>
                                <input type="text" name="drakecount" id="drakecount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0">&nbsp;</span>
                                <p>Duck :</p>
                                <input type="text" name="duckcount" id="duckcount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>Goat</strong></span>
                                <p>Buck :</p>
                                <input type="text" name="buckcount" id="buckcount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0">&nbsp;</span>
                                <p>Doe :</p>
                                <input type="text" name="doecount" id="doecount" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- Game Fowl and Native Pig -->
                    <div class="row">
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>Game Fowl</strong></span>
                                <p>Rooster :</p>
                                <input type="text" name="groostercount" id="groostercount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0">&nbsp;</span>
                                <p>Hen :</p>
                                <input type="text" name="ghencount" id="ghencount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>Native Pig</strong></span>
                                <p>Male :</p>
                                <input type="text" name="mnativecount" id="mnativecount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0">&nbsp;</span>
                                <p>Female :</p>
                                <input type="text" name="fnativecount" id="fnativecount" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- Coordinates and Image Upload -->
                    <div class="row">
                        <div class="col-md-6" style="overflow: auto">
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>Coordinates</strong></span>
                                <p>Latitude :</p>
                                <input type="text" name="latitude" id="latitude" class="form-control">                           </div>
                        </div>
                        <div class="col-md-6" style="overflow: auto">
                        <div class="md-form mb-1">
                                <span class="border-0">&nbsp;</span>
                                <p>Longitude :</p>
                                <input type="text" name="longitude" id="longitude" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="overflow: auto">
                            <input type="hidden" id="baseUrl" value="{{ asset("storage/images/") }}"/>
                            <div class="md-form mb-1">
                                <span class="border-0"><strong>Image</strong></span>
                                <br>
                                <img width="200px" height="200px" id="img"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="form-modal-data">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- End of View Modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Excel File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/import_excel/import" method="post" enctype="multipart/form-data" id="MyUploadForm">
            @csrf
            <label for="file-upload" class="custom-file-upload">
                <i class="fa fa-cloud-upload"></i> Import Excel File
            </label>
            <br />
            <input name="select_file" type="file" />
            <br />
            <br />
            <input type="submit" class="btn btn-primary" id="submit-btn" value="Upload" />
        </form>
      </div>
    </div>
  </div>
</div>


<script>
    // $(document).ready(function() {
    //     var url = new URL(window.location.href);
    //     var page = url.searchParams.get("page");
    //     if (!page) { // fetching of data only runs when there's no parameters in url
    //         fetch_record_data();
    //     }
        
    //     function fetch_record_data(query = '') {
    //         $.ajax({
    //             url: "{{ route('record.action') }}",
    //             method: 'GET',
    //             data: {query:query},
    //             dataType: 'json',
    //             success: function(data) {
    //                 $('tbody').html(data.table_data);
    //                 $('#total_records').text(data.total_data);
    //             }
    //         });
    //     }
        
    //     $(document).on('keyup', '#search', function() {
    //         var query = $(this).val();
    //         fetch_record_data(query);
    //     });
    // });
    
    /**
    * @id int record_id
    * @action str action clicked
    */
    function fetchModalData(id, action) {
        csrf = $('#csrf').val()
        $.ajax({
    		method:'POST',
    		url:"/record",
    		data:{_token: csrf, id:id},
    		success:function(data) {
    			parsed = JSON.parse(data)
                $('#record_id').val(parsed.record_id)
    			$('#lastname').val(parsed.lastname)
    			$('#firstname').val(parsed.firstname)
                $('#middlename').val(parsed.middlename)
                $('#houseno').val(parsed.houseno)
    			$('#sitio').val(parsed.sitio)
    			$('#barangay').val(parsed.barangay)
                $('#gender').val(parsed.gender)
    			$('#mcattlecount').val(parsed.mcattle)
    			$('#fcattlecount').val(parsed.fcattle)
                $('#mcarabaocount').val(parsed.mcarabao)
                $('#fcarabaocount').val(parsed.fcarabao)
    			$('#mcaninecount').val(parsed.mcanine)
    			$('#fcaninecount').val(parsed.fcanine)
                $('#mfelinecount').val(parsed.mfeline)
                $('#ffelinecount').val(parsed.ffeline)
                $('#fattenercount').val(parsed.fattener)
                $('#breedercount').val(parsed.breeder)
                $('#phencount').val(parsed.phen)
                $('#proostercount').val(parsed.prooster)
                $('#drakecount').val(parsed.drake)
                $('#duckcount').val(parsed.duck)
                $('#buckcount').val(parsed.buck)
                $('#doecount').val(parsed.doe)
                $('#groostercount').val(parsed.grooster)
                $('#ghencount').val(parsed.ghen)
                $('#mnativecount').val(parsed.mnative)
                $('#fnativecount').val(parsed.fnative)
                $('#latitude').val(parsed.latitude)
                $('#longitude').val(parsed.longitude)
                imgSrc = $('#baseUrl').val()
                parsedImg = parsed.img
                $('#img').attr("src", imgSrc.concat('/',parsedImg))
    			$('#viewModal').modal('show');
                if (action === 'view') {
                    $("#form-modal-data :input").prop("disabled", true);
                } else {
                    $("#form-modal-data :input").prop("disabled", false);
                }
       		},
    		error: function(err) {
    			console.log(err)
    		}
      	})
    }

    function buttonOnClick(id, action) {
        fetchModalData(id, action)
    }

    function buttonOnDelete(id, action) {
        console.log('this is the id', id)
        if (confirm('Do you want to delete this record?')) {
            $.ajax({
            method:'POST',
    		url:"/record/delete",
            data: {id:id},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function ()
            {
                alert('Record successfully deleted')
                location.reload()
                console.log("it Work");
            },
            error: function (error) {
                console.log(error)
            }
        });
        }
        

        // console.log("It failed");
    }
    
</script>
@endsection