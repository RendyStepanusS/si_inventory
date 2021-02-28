

var flash = $('#flash').data('flash');
if (flash)
{
  Swal.fire({
    icon: 'success',
    title: 'Berhasil',
    text: flash,
    showConfirmButton: false,
    timer: 2000
  })
}

$(document).on('click', '#btn-hapus', function(e) {
  e.preventDefault();
  var getLink = $(this).attr('href');

  Swal.fire({
    title: 'Apakah Anda yakin?',
    text: "Data akan dihapus!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, hapus!'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = getLink;
    }
  })
})

