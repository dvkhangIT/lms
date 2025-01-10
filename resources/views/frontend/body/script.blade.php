{{-- start wishlist add option --}}
<script>
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  })

  function addToWishList(course_id) {
    $.ajax({
      type: "POST",
      url: "/add-to-wishlist/" + course_id,
      data: "data",
      dataType: "json",
      success: function(data) {
        // Start Message 
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 6000
        })
        if ($.isEmptyObject(data.error)) {
          Toast.fire({
            icon: 'success',
            type: 'success',
            title: data.success,
          })
        } else {
          Toast.fire({
            icon: 'error',
            type: 'error',
            title: data.error,
          })
        }
        // End Message   
      }
    });
  }
</script>
{{-- end wishlist add option --}}

{{-- start load wishlist data --}}
<script>
  function wishlist() {
    $.ajax({
      type: "get",
      url: "/get-wishlist-course/",
      dataType: "json",
      success: function(response) {

      }
    });
  }
</script>
{{-- end load wishlist data --}}
