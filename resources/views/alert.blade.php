@if(session()->has('error'))
<script>
Swal.fire({
  icon: "error",
  title: "Oops...",
  text: "{{session('error')}}",
  showConfirmButton: false,
  timer: 1500
});
</script>
@endif
@if(session()->has('success'))
<script>
Swal.fire({
  icon: "success",
  title: "success",
  text: "{{session('success')}}",
//   text: "{{session('success')}}",
  showConfirmButton: false,
  timer: 1500
});
</script>
@endif

<script>
    function hapus(route,id) {
        Swal.fire({
          icon: "warning",
          title: "Yakin mau hapus sayaang?",
        //   text: "{{session('success')}}",
        //   showConfirmButton: false,
          showCancelButton: true,
          confirmButtonText:'Iya Sayaang',
          confirmButtonColor:'red',
          cancelButtonText:'Tidak Sayaang',
          cancelButtonColor:'blue',
        }).then((result)=>{
            if(result.isConfirmed){
                $('#myForm').attr('action',`/dashboard/${route}/${id}`)
                $('#myForm').submit()
            }
        });
    }
</script>
