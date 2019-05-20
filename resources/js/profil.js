var image = $('#uploadAvatar').croppie({
  enableExif: true,
  enforceBoundary: true,
  viewport: {
    width: 310,
    height: 310,
    type: 'circle',
  },
  boundary: {
    width: 300,
    height: 300,
  },
});


image.croppie('bind', {
  url: '',
});

$('#browseFileInput').on('change', function(ev){
  if (this.files.length > 0) {
    var file = this.files[0];
    if (file['type'].split('/')[0] != 'image') {
      alert('Please upload only image file!');
      return;
    }
    var sizeInMb = file.size/1024;
    var sizeLimit= 1024*2;
    if (sizeInMb > sizeLimit) {
      alert('Your image can\'t be more than 2MB')
      return;
    }
    var fr = new FileReader();
    fr.onload = function(e){
      image.croppie('bind', {
        url: e.target.result
      }).then(function(){
        console.log('jqeury bind is complete');
      });
    }
    fr.readAsDataURL(this.files[0]);
  }
});

$('#browseFileBtn').on('click', function(){
  $('#browseFileInput').click();
});
