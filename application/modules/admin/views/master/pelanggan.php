<div class="box">
	<div class="box-header">
		<h3 class="box-title">Pelanggan</h3>
	</div>
	<div class="box-body">
		<p>
			<button class="btn btn-default" id="btnPelanggan">Tambah Data Pelanggan</button>
		</p>	


<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->

<!--
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
-->

<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-iso.css');?>" /> 

<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<div id="pelanggan" class="bootstrap-iso" style="display: none;">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">

	<form id="frmPelanggan" method="post" action="<?php echo base_url('admin/master/pelanggan/tambah');?>" class="form-horizontal">
     <div class="form-group ">
      <label class="control-label requiredField" for="kode_pelanggan">
       Kode Pelanggan
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="kode_pelanggan" name="kode_pelanggan" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="nama_pelanggan">
       Nama Pelanggan
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="nama_pelanggan" name="nama_pelanggan" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="alamatp">
       Alamat
       <span class="asteriskField">
        *
       </span>
      </label>
      <textarea class="form-control" cols="40" id="alamatp" name="alamatp" rows="10"></textarea>
     </div>
     <div class="form-group ">
      <label class="control-label " for="notelpp">
       No Telp
      </label>
      <input class="form-control" id="notelpp" name="notelpp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="faxp">
       Fax
      </label>
      <input class="form-control" id="faxp" name="faxp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="emailp">
       Email
      </label>
      <input class="form-control" id="emailp" name="emailp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="kontakp">
       Nama Kontak
      </label>
      <input class="form-control" id="kontakp" name="kontakp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="nokontakp">
       No Kontak
      </label>
      <input class="form-control" id="nokontakp" name="nokontakp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="kotap">
       Kota
      </label>
      <input class="form-control" id="kotap" name="kotap" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="provp">
       Provinsi
      </label>
      <input class="form-control" id="provp" name="provp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="kodeposp">
       Kode Pos
      </label>
      <input class="form-control" id="kodeposp" name="kodeposp" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="websitep">
       Website
      </label>
      <input class="form-control" id="websitep" name="websitep" type="text"/>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
    </div>
</div>
</div>
</div>

	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#frmPelanggan')
        .formValidation({
	        framework: 'bootstrap',
	        icon: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            kode_pelanggan: {
	                validators: {
	                    notEmpty: {
	                        message: 'This field is required'
	                    }
	                }
	            },
	            nama_pelanggan: {
	                validators: {
	                    notEmpty: {
	                        message: 'This field is required'
	                    }
	                }
	            }
	        }
        })
        .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();
            var $form = $(e.target),                  
                bv    = $form.data('formValidation'); 
            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                $form.parents('.bootbox').modal('hide');
            }, 'json');
        });

    // Login button click handler
    $('#btnPelanggan').on('click', function() {
        bootbox
            .dialog({
                title: 'Data Pelangan',
                message: $('#pelanggan'),
                show: false 
            })
            .on('shown.bs.modal', function() {
                $('#pelanggan')
                    .show()                           
                    .formValidation('resetForm', true); 
            })
            .on('hide.bs.modal', function(e) {
                $('#pelanggan').hide().appendTo('body');
            })
            .modal('show');
    });

});	
</script>

<!-- Include bootbox.js -->
<script src="<?php echo base_url('assets/js/bootbox.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/formValidation.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.scrollUp.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/scroll-fix.js');?>"></script>
