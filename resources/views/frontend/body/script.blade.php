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
        var row = ''
        $('#wishlistQty').text(response.wishlistQty)
        $.each(response.wishlist, function(key, value) {
          row += `
           <div class="col-lg-4 responsive-column-half">
        <div class="card card-item">
          <div class="card-image">
            <a href="/course/details/${value.course.id}/${value.course.course_name_slug}" class="d-block">
              <img class="card-img-top" src="/${value.course.course_image}" alt="Card image cap">
            </a>
          </div><!-- end card-image -->
          <div class="card-body">
            <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">${value.course.label}</h6>
            <h5 class="card-title"><a href="/course/details/${value.course.id}/${value.course.course_name_slug}">${value.course.course_name}</a></h5>
            <div class="d-flex justify-content-between align-items-center">
              ${value.course.discount_price ==null 
              ? `<p class="card-price text-black font-weight-bold">$${value.course.selling_price}</p>`
              : `<p class="card-price text-black font-weight-bold">$${value.course.discount_price} <span
                  class="before-price font-weight-medium">$${value.course.selling_price}</span></p>`}
              <div class="icon-element icon-element-sm shadow-sm cursor-pointer"
                data-toggle="tooltip" data-placement="top" title=""data-original-title="Remove from Wishlist" id="${value.id}" onclick="wishlistRemove(this.id)"><i class="la la-heart"></i></div>
            </div>
          </div>
        </div>
      </div>
      `
        });
        $('#wishlist').html(row)
      }
    });
  }
  wishlist()
</script>
{{-- end load wishlist data --}}

{{-- start wishlist remove --}}
<script>
  function wishlistRemove(id) {
    $.ajax({
      type: "GET",
      url: "/wishlist-remove/" + id,
      dataType: "json",
      success: function(data) {
        wishlist()
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
{{-- end wishlist remove --}}
