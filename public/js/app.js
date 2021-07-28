  $(document).ready(function(){
    $('#btndepart').on('click', function(){
      $('#frmdepartment').fadeToggle()
      $('#department').hide()
      // alert('Add New Department')
    })

    $('#cancel').on('click', function(){
        $('#frmdepartment').fadeOut()
    })

    $('#cancel1').on('click', function(){
      $('#frmemployee').fadeOut()
    })

    $('#cancel2').on('click',function(){
      $('#frmjob').fadeOut()
    })

    $('#btnuser').on('click', function(){
      $('#frmemployee').fadeToggle()
      $('#usermanagement').hide()
    })

    $('#btnjob').on('click',function(){
      $('#frmjob').fadeToggle()
      $('#jobdesc').hide()
    })

    $('#btn-error').on('click',function(){
      $('#frmdepartment').fadeToggle()
      $('.frmerror').hide()
    })
  })