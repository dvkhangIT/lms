@php
  $courses = App\Models\Course::where("status", 1)->orderBy("id", "ASC")->limit(6)->get();
  $categories = App\Models\Category::orderBy("category_name", "ASC")->get();
@endphp
<section class="course-area pb-120px">
  <div class="container">
    <div class="text-center section-heading">
      <h5 class="mb-2 ribbon ribbon-lg">Choose your desired courses</h5>
      <h2 class="section__title">The world's largest selection of courses</h2>
      <span class="section-divider"></span>
    </div><!-- end section-heading -->

    <ul class="pb-4 nav nav-tabs generic-tab justify-content-center" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business" role="tab"
          aria-controls="business" aria-selected="true">All</a>
      </li>
      @foreach ($categories as $category)
        <li class="nav-item">
          <a class="nav-link" id="business-tab" data-toggle="tab" href="#business" role="tab"
            aria-controls="business" aria-selected="false">{{ $category->category_name }}</a>
        </li>
      @endforeach
    </ul>
  </div><!-- end container -->
  <div class="card-content-wrapper bg-gray pt-50px pb-120px">
    <div class="container">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="business-tab">
          <div class="row">
            @foreach ($courses as $course)
              <div class="col-lg-4 responsive-column-half">
                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                  <div class="card-image">
                    <a href="course-details.html" class="d-block">
                      <img class="card-img-top lazy" src="{{ asset($course->course_image) }}"
                        data-src="{{ asset($course->course_image) }}" alt="Card image cap">
                    </a>
                    @php
                      $amount = $course->selling_price - $course->discount_price;
                      $discount = ($amount / $course->selling_price) * 100;
                    @endphp
                    <div class="course-badge-labels">
                      @if ($course->bestseller == 1)
                        <div class="course-badge">Bestseller</div>
                      @else
                      @endif
                      @if ($course->highestrated == 1)
                        <div class="course-badge sky-blue">Highest Rated</div>
                      @else
                      @endif
                      @if ($course->discount_price == null)
                        <div class="course-badge blue">New</div>
                      @else
                        <div class="course-badge blue">{{ round($discount) }}%</div>
                      @endif
                    </div>
                  </div><!-- end card-image -->
                  <div class="card-body">
                    <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">{{ $course->label }}</h6>
                    <h5 class="card-title"><a href="course-details.html">{{ $course->course_name }}</a></h5>
                    <p class="card-text"><a href="teacher-detail.html">{{ $course["user"]["name"] }}</a></p>
                    <div class="py-2 rating-wrap d-flex align-items-center">
                      <div class="review-stars">
                        <span class="rating-number">4.4</span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star-o"></span>
                      </div>
                      <span class="pl-1 rating-total">(20,230)</span>
                    </div><!-- end rating-wrap -->
                    <div class="d-flex justify-content-between align-items-center">
                      @if ($course->discount_price == null)
                        <p class="text-black card-price font-weight-bold">${{ $course->selling_price }}</p>
                      @else
                        <p class="text-black card-price font-weight-bold">${{ $course->discount_price }} <span
                            class="before-price font-weight-medium">${{ $course->selling_price }}</span></p>
                      @endif
                      <div class="shadow-sm cursor-pointer icon-element icon-element-sm" title="Add to Wishlist"><i
                          class="la la-heart-o"></i></div>
                    </div>
                  </div><!-- end card-body -->
                </div><!-- end card -->
              </div><!-- end col-lg-4 -->
            @endforeach
            <!-- end col-lg-4 -->
          </div><!-- end row -->
        </div><!-- end tab-pane -->
        <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
          <div class="row">
            <div class="col-lg-4 responsive-column-half">
              <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_2">
                <div class="card-image">
                  <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img11.jpg"
                      alt="Card image cap">
                  </a>
                </div><!-- end card-image -->
                <div class="card-body">
                  <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">Beginner</h6>
                  <h5 class="card-title"><a href="course-details.html">Ultimate Adobe Photoshop Training: From
                      Beginner to Pro</a></h5>
                  <p class="card-text"><a href="teacher-detail.html">Jose Portilla</a></p>
                  <div class="py-2 rating-wrap d-flex align-items-center">
                    <div class="review-stars">
                      <span class="rating-number">4.4</span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star-o"></span>
                    </div>
                    <span class="pl-1 rating-total">(20,230)</span>
                  </div><!-- end rating-wrap -->
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="text-black card-price font-weight-bold">129.99</p>
                    <div class="shadow-sm cursor-pointer icon-element icon-element-sm" title="Add to Wishlist"><i
                        class="la la-heart-o"></i></div>
                  </div>
                </div><!-- end card-body -->
              </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
              <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_2">
                <div class="card-image">
                  <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img12.jpg"
                      alt="Card image cap">
                  </a>
                  <div class="course-badge-labels">
                    <div class="course-badge green">Free</div>
                  </div>
                </div><!-- end card-image -->
                <div class="card-body">
                  <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">Beginner</h6>
                  <h5 class="card-title"><a href="course-details.html">Ultimate Adobe Photoshop Training: From
                      Beginner to Pro</a></h5>
                  <p class="card-text"><a href="teacher-detail.html">Jose Portilla</a></p>
                  <div class="py-2 rating-wrap d-flex align-items-center">
                    <div class="review-stars">
                      <span class="rating-number">4.4</span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star-o"></span>
                    </div>
                    <span class="pl-1 rating-total">(20,230)</span>
                  </div><!-- end rating-wrap -->
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="text-black card-price font-weight-bold">Free</p>
                    <div class="shadow-sm cursor-pointer icon-element icon-element-sm" title="Add to Wishlist"><i
                        class="la la-heart-o"></i></div>
                  </div>
                </div><!-- end card-body -->
              </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
              <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_2">
                <div class="card-image">
                  <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img13.jpg"
                      alt="Card image cap">
                  </a>
                  <div class="course-badge-labels">
                    <div class="course-badge sky-blue">Highest rated</div>
                  </div>
                </div><!-- end card-image -->
                <div class="card-body">
                  <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">Beginner</h6>
                  <h5 class="card-title"><a href="course-details.html">Ultimate Adobe Photoshop Training: From
                      Beginner to Pro</a></h5>
                  <p class="card-text"><a href="teacher-detail.html">Jose Portilla</a></p>
                  <div class="py-2 rating-wrap d-flex align-items-center">
                    <div class="review-stars">
                      <span class="rating-number">4.4</span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star-o"></span>
                    </div>
                    <span class="pl-1 rating-total">(20,230)</span>
                  </div><!-- end rating-wrap -->
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="text-black card-price font-weight-bold">129.99</p>
                    <div class="shadow-sm cursor-pointer icon-element icon-element-sm" title="Add to Wishlist"><i
                        class="la la-heart-o"></i></div>
                  </div>
                </div><!-- end card-body -->
              </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
              <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_2">
                <div class="card-image">
                  <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img8.jpg"
                      alt="Card image cap">
                  </a>
                  <div class="course-badge-labels">
                    <div class="course-badge">Bestseller</div>
                    <div class="course-badge blue">-39%</div>
                  </div>
                </div><!-- end card-image -->
                <div class="card-body">
                  <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">Beginner</h6>
                  <h5 class="card-title"><a href="course-details.html">Ultimate Adobe Photoshop Training: From
                      Beginner to Pro</a></h5>
                  <p class="card-text"><a href="teacher-detail.html">Jose Portilla</a></p>
                  <div class="py-2 rating-wrap d-flex align-items-center">
                    <div class="review-stars">
                      <span class="rating-number">4.4</span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star-o"></span>
                    </div>
                    <span class="pl-1 rating-total">(20,230)</span>
                  </div><!-- end rating-wrap -->
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="text-black card-price font-weight-bold">12.99 <span
                        class="before-price font-weight-medium">129.99</span></p>
                    <div class="shadow-sm cursor-pointer icon-element icon-element-sm" title="Add to Wishlist"><i
                        class="la la-heart-o"></i></div>
                  </div>
                </div><!-- end card-body -->
              </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
              <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_2">
                <div class="card-image">
                  <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img9.jpg"
                      alt="Card image cap">
                  </a>
                  <div class="course-badge-labels">
                    <div class="course-badge red">Featured</div>
                  </div>
                </div><!-- end card-image -->
                <div class="card-body">
                  <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">Beginner</h6>
                  <h5 class="card-title"><a href="course-details.html">Ultimate Adobe Photoshop Training: From
                      Beginner to Pro</a></h5>
                  <p class="card-text"><a href="teacher-detail.html">Jose Portilla</a></p>
                  <div class="py-2 rating-wrap d-flex align-items-center">
                    <div class="review-stars">
                      <span class="rating-number">4.4</span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star-o"></span>
                    </div>
                    <span class="pl-1 rating-total">(20,230)</span>
                  </div><!-- end rating-wrap -->
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="text-black card-price font-weight-bold">129.99</p>
                    <div class="shadow-sm cursor-pointer icon-element icon-element-sm" title="Add to Wishlist"><i
                        class="la la-heart-o"></i></div>
                  </div>
                </div><!-- end card-body -->
              </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
              <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_2">
                <div class="card-image">
                  <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img10.jpg"
                      alt="Card image cap">
                  </a>
                </div><!-- end card-image -->
                <div class="card-body">
                  <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">Beginner</h6>
                  <h5 class="card-title"><a href="course-details.html">Ultimate Adobe Photoshop Training: From
                      Beginner to Pro</a></h5>
                  <p class="card-text"><a href="teacher-detail.html">Jose Portilla</a></p>
                  <div class="py-2 rating-wrap d-flex align-items-center">
                    <div class="review-stars">
                      <span class="rating-number">4.4</span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star"></span>
                      <span class="la la-star-o"></span>
                    </div>
                    <span class="pl-1 rating-total">(20,230)</span>
                  </div><!-- end rating-wrap -->
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="text-black card-price font-weight-bold">129.99</p>
                    <div class="shadow-sm cursor-pointer icon-element icon-element-sm" title="Add to Wishlist"><i
                        class="la la-heart-o"></i></div>
                  </div>
                </div><!-- end card-body -->
              </div><!-- end card -->
            </div><!-- end col-lg-4 -->
          </div><!-- end row -->
          <!-- end tab-content -->
          <div class="mt-4 text-center more-btn-box">
            <a href="course-grid.html" class="btn theme-btn">Browse all Courses <i
                class="ml-1 la la-arrow-right icon"></i></a>
          </div><!-- end more-btn-box -->
        </div><!-- end container -->
      </div><!-- end card-content-wrapper -->
</section>
