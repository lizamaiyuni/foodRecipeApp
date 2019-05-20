if ($('.dropzone').length) {
  var previewTemplate = `
  <div class="card dz-preview dz-file-preview">
    <div class="d-none dz-details">
      <div class="dz-filename"><span data-dz-name></span></div>
      <div class="dz-size" data-dz-size></div>
    </div>
    <img data-dz-thumbnail />
    <a class="d-none btn btn-danger" data-dz-remove>
      <i class="fa fa-times" aria-hidden="true"></i>
    </a>
  </div>
  `;
  var defaultMsg = `
  <i class="fa fa-cloud-upload" aria-hidden="true"></i><br/>
  <small class="text-muted">Drag & Drop or Click Here to Browse</small>
  `

  Dropzone.autoDiscover = false;
  var recipeForm = new Dropzone("#uploadImage", {
    url: $('#recipeForm').attr('action'),
    autoProcessQueue: false,
    acceptedFiles: 'image/*',
    dictDefaultMessage: defaultMsg,
    paramName: "image",
    thumbnailHeight: null,
    thumbnailWidth: '330',
    parallelUploads: 10,
    uploadMultiple: true,
    maxFilesize: 5,
    maxFiles: 5,
    previewsContainer: '#previewContainer',
    previewTemplate: previewTemplate,
    init: function () {

        var myDropzone = this;

        //Update selector to match your button
        $("#recipeForm button[type='submit']").click(function (e) {
              e.preventDefault();
            if (myDropzone.getQueuedFiles().length === 0) {
              var blob = new Blob();
              blob.upload = { 'chunked': myDropzone.defaultOptions.chunking };
              myDropzone.uploadFile(blob);
            } else {
              myDropzone.processQueue();
            }
        });

        this.on('uploadprogress', function(file, progress){
          console.log('progress: ', progress);
        });

        this.on('sending', function(file, xhr, formData) {
            // Append all form inputs to the formData Dropzone will POST
            var data = $('#recipeForm').serializeArray();
            $.each(data, function(key, el) {
                formData.append(el.name, el.value);
            });
        });

        this.on('thumbnail', function(file){
          var btn = $(file.previewElement).find('.btn-danger');
          var detail = $(file.previewElement).find('.dz-details');
          btn.removeClass('d-none');
          detail.removeClass('d-none');
        });

        this.on("maxfilesexceeded", function(file) {
          $('#uploadMessage').removeClass('d-none');
          this.removeFile(file);
        });

        this.on('successmultiple', function(file, responseText){
          console.log('Res: ',responseText);
        });
    },
  });
}

// dinamik elemen Bahan
var inputBahanTpl = `
<div class="form-row mb-2">
   <div class="col-8">
     <input type="text" class="form-control" name="nama_bahan[]" placeholder="Nama Bahan">
   </div>
   <div class="col">
     <input type="text" class="form-control" name="kuantitas_bahan[]" placeholder="Kuantitas">
   </div>
   <button type="button" class="btn btn-link text-danger bahan-input-delete-btn">
     <i class="fa fa-trash-o" aria-hidden="true"></i>
   </button>
 </div>`;

$('#inputBahanBtn').on('click', function(){
  $('#inputBahanWrapper').append(inputBahanTpl);
});

$('body').on('click', '.bahan-input-delete-btn', function(e){
  e.preventDefault();
  $(this).parent('.form-row').remove();
});
