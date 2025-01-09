@extends("frontend.master")
@section("home")
  <section class="py-5 bg-white breadcrumb-area pattern-bg">
    <div class="container">
      <div class="breadcrumb-content">
        <div class="pb-4 media media-card align-items-center">
          <div class="rounded-full media-img media--img media-img-md">
            <img class="rounded-full"
              src="{{ !empty($instructor->photo) ? url("upload/instructor_images/" . $instructor->photo) : url("upload/no_image.jpg") }}"
              alt="Student thumbnail image">
          </div>
          <div class="media-body">
            <h2 class="section__title fs-30">{{ $instructor->name }}</h2>
            <span
              class="pt-1 pb-2 d-block lh-18">{{ Carbon\Carbon::parse($instructor->created_at)->diffForHumans() }}</span>
            <p class="lh-18">{{ $instructor->email }}</p>
          </div>
        </div><!-- end media -->
        <ul class="social-icons social-icons-styled social--icons-styled">
          <li><a href="#"><i class="la la-facebook"></i></a></li>
          <li><a href="#"><i class="la la-twitter"></i></a></li>
          <li><a href="#"><i class="la la-instagram"></i></a></li>
          <li><a href="#"><i class="la la-linkedin"></i></a></li>
          <li><a href="#"><i class="la la-youtube"></i></a></li>
        </ul>
      </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
  </section><!-- end breadcrumb-area -->
  <section class="teacher-details-area pt-50px">
    <div class="container">
      <div class="student-details-wrap pb-20px">
        <div class="row">
          <div class="col-lg-4 responsive-column-half">
            <div class="counter-item">
              <div class="mb-3 shadow-sm counter__icon icon-element">
                <svg class="svg-icon-color-1" width="40"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490.667 490.667"
                  xml:space="preserve">
                  <path
                    d="M245.333 85.333c-41.173 0-74.667 33.493-74.667 74.667s33.493 74.667 74.667 74.667S320 201.173 320 160s-33.493-74.667-74.667-74.667m0 128C215.936 213.333 192 189.397 192 160s23.936-53.333 53.333-53.333 53.333 23.936 53.333 53.333-23.935 53.333-53.333 53.333m149.334-42.666c-29.397 0-53.333 23.936-53.333 53.333s23.936 53.333 53.333 53.333S448 253.397 448 224s-23.936-53.333-53.333-53.333m0 85.333c-17.643 0-32-14.357-32-32s14.357-32 32-32 32 14.357 32 32-14.358 32-32 32M97.515 170.667c-29.419 0-53.333 23.936-53.333 53.333s23.936 53.333 53.333 53.333 53.333-23.936 53.333-53.333-23.915-53.333-53.333-53.333m0 85.333c-17.643 0-32-14.357-32-32s14.357-32 32-32 32 14.357 32 32-14.358 32-32 32m147.818 0c-76.459 0-138.667 62.208-138.667 138.667 0 5.888 4.779 10.667 10.667 10.667S128 400.555 128 394.667c0-64.704 52.629-117.333 117.333-117.333s117.333 52.629 117.333 117.333c0 5.888 4.779 10.667 10.667 10.667S384 400.555 384 394.667C384 318.208 321.792 256 245.333 256" />
                  <path
                    d="M394.667 298.667a96 96 0 0 0-49.728 13.867c-5.013 3.072-6.635 9.621-3.584 14.656 3.093 5.035 9.621 6.635 14.656 3.584C367.637 323.712 380.992 320 394.667 320c41.173 0 74.667 33.493 74.667 74.667 0 5.888 4.779 10.667 10.667 10.667s10.667-4.779 10.667-10.667c-.001-52.928-43.073-96-96.001-96m-248.96 13.845A96.06 96.06 0 0 0 96 298.667c-52.928 0-96 43.072-96 96 0 5.888 4.779 10.667 10.667 10.667s10.667-4.779 10.667-10.667C21.333 353.493 54.827 320 96 320c13.675 0 27.029 3.712 38.635 10.752 5.013 3.051 11.584 1.451 14.656-3.584s1.45-11.584-3.584-14.656" />
                </svg>
              </div>
              <h4 class="counter__title counter text-color-2 fs-35">1,515,351</h4>
              <p class="counter__meta">Total Students</p>
            </div><!-- end counter-item -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-4 responsive-column-half">
            <div class="counter-item">
              <div class="mb-3 shadow-sm counter__icon icon-element">
                <svg class="svg-icon-color-2" width="40"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                  xml:space="preserve">
                  <path
                    d="M472.208 201.712c9.271-9.037 12.544-22.3 8.544-34.613-4.001-12.313-14.445-21.118-27.257-22.979l-112.03-16.279a6.75 6.75 0 0 1-5.084-3.694L286.28 22.632c-5.729-11.61-17.331-18.822-30.278-18.822s-24.549 7.212-30.278 18.822l-50.101 101.516a6.76 6.76 0 0 1-5.085 3.694L58.51 144.12c-12.812 1.861-23.255 10.666-27.257 22.979s-.728 25.576 8.544 34.613l81.065 79.019a6.76 6.76 0 0 1 1.942 5.978l-19.137 111.576c-2.188 12.761 2.958 25.414 13.432 33.024 10.474 7.612 24.102 8.595 35.56 2.572l100.201-52.679a6.75 6.75 0 0 1 6.286 0l100.202 52.679c4.984 2.62 10.377 3.915 15.744 3.914 6.97 0 13.896-2.184 19.813-6.487 10.474-7.611 15.621-20.265 13.432-33.024L389.2 286.708a6.76 6.76 0 0 1 1.942-5.978zm-109.629 89.564 19.137 111.578c.64 3.734-1.665 5.863-2.686 6.604-1.022.74-3.76 2.277-7.112.513l-100.202-52.679a33.76 33.76 0 0 0-31.424-.001l-100.201 52.678c-3.354 1.763-6.091.228-7.112-.513s-3.327-2.87-2.686-6.604l19.137-111.576a33.76 33.76 0 0 0-9.711-29.886l-81.065-79.019c-2.713-2.646-2.099-5.723-1.708-6.923.389-1.201 1.702-4.052 5.451-4.596l112.027-16.279a33.76 33.76 0 0 0 25.424-18.471l50.101-101.516c1.677-3.397 4.793-3.764 6.056-3.764 1.261 0 4.377.366 6.055 3.764v.001l50.101 101.516a33.75 33.75 0 0 0 25.422 18.471l112.029 16.279c3.749.544 5.061 3.395 5.451 4.596s1.005 4.279-1.709 6.923l-81.065 79.019a33.75 33.75 0 0 0-9.71 29.885m51.204-268.651c-6.036-4.384-14.481-3.046-18.865 2.988l-14.337 19.732c-4.384 6.034-3.047 14.481 2.988 18.865a13.46 13.46 0 0 0 7.928 2.58c4.177 0 8.295-1.931 10.937-5.567l14.337-19.732c4.384-6.035 3.047-14.482-2.988-18.866M131.36 45.265l-14.337-19.732c-4.383-6.032-12.829-7.37-18.865-2.988-6.034 4.384-7.372 12.831-2.988 18.865l14.337 19.732a13.49 13.49 0 0 0 10.939 5.569c2.753 0 5.531-.839 7.927-2.581 6.034-4.383 7.372-12.83 2.987-18.865M49.552 306.829c-2.305-7.093-9.924-10.976-17.019-8.671l-23.197 7.538c-7.095 2.305-10.976 9.926-8.671 17.019 1.854 5.709 7.149 9.337 12.842 9.337 1.383 0 2.79-.215 4.177-.666l23.197-7.538c7.094-2.305 10.976-9.924 8.671-17.019m206.453 149.957c-7.459 0-13.506 6.047-13.506 13.506v24.392c0 7.459 6.047 13.506 13.506 13.506s13.506-6.047 13.506-13.506v-24.392c0-7.46-6.046-13.506-13.506-13.506m246.659-151.071-23.197-7.538c-7.092-2.303-14.714 1.577-17.019 8.672s1.576 14.714 8.671 17.019l23.197 7.538a13.5 13.5 0 0 0 4.176.664c5.694 0 10.989-3.629 12.843-9.337 2.305-7.094-1.577-14.713-8.671-17.018" />
                </svg>
              </div>
              <h4 class="counter__title counter text-color-3 fs-35">515,351</h4>
              <p class="counter__meta">Reviews</p>
            </div><!-- end counter-item -->
          </div><!-- end col-lg-4 -->
          <div class="col-lg-4 responsive-column-half">
            <div class="counter-item">
              <div class="mb-3 shadow-sm counter__icon icon-element">
                <svg class="svg-icon-color-3" width="40"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                  xml:space="preserve">
                  <path
                    d="M405.333 42.667h-44.632c-4.418-12.389-16.147-21.333-30.035-21.333h-32.229C288.417 8.042 272.667 0 256 0s-32.417 8.042-42.438 21.333h-32.229c-13.888 0-25.617 8.944-30.035 21.333h-44.631C83.146 42.667 64 61.802 64 85.333v384C64 492.865 83.146 512 106.667 512h298.667c23.52 0 42.666-19.135 42.666-42.667v-384c0-23.531-19.146-42.666-42.667-42.666M170.667 53.333c0-5.885 4.792-10.667 10.667-10.667h37.917a10.64 10.64 0 0 0 9.208-5.302c5.854-10.042 16.146-16.031 27.542-16.031s21.688 5.99 27.542 16.031a10.64 10.64 0 0 0 9.208 5.302h37.917c5.875 0 10.667 4.781 10.667 10.667V64c0 11.76-9.563 21.333-21.333 21.333H192c-11.771 0-21.333-9.573-21.333-21.333zm256 416c0 11.76-9.563 21.333-21.333 21.333H106.667c-11.771 0-21.333-9.573-21.333-21.333v-384c0-11.76 9.563-21.333 21.333-21.333h42.667c0 23.531 19.146 42.667 42.667 42.667h128c23.521 0 42.667-19.135 42.667-42.667h42.667c11.771 0 21.333 9.573 21.333 21.333v384z" />
                  <path
                    d="M160 170.667c-17.646 0-32 14.354-32 32s14.354 32 32 32 32-14.354 32-32-14.354-32-32-32m0 42.666c-5.875 0-10.667-4.781-10.667-10.667 0-5.885 4.792-10.667 10.667-10.667s10.667 4.781 10.667 10.667-4.792 10.667-10.667 10.667m0 64c-17.646 0-32 14.354-32 32s14.354 32 32 32 32-14.354 32-32c0-17.645-14.354-32-32-32M160 320c-5.875 0-10.667-4.781-10.667-10.667 0-5.885 4.792-10.667 10.667-10.667s10.667 4.781 10.667 10.667S165.875 320 160 320m0 64c-17.646 0-32 14.354-32 32s14.354 32 32 32 32-14.354 32-32-14.354-32-32-32m0 42.667c-5.875 0-10.667-4.781-10.667-10.667 0-5.885 4.792-10.667 10.667-10.667s10.667 4.781 10.667 10.667c0 5.885-4.792 10.667-10.667 10.667M373.333 192h-128a10.66 10.66 0 0 0-10.667 10.667 10.66 10.66 0 0 0 10.667 10.667h128A10.66 10.66 0 0 0 384 202.667 10.66 10.66 0 0 0 373.333 192m0 106.667h-128a10.66 10.66 0 0 0-10.667 10.667 10.66 10.66 0 0 0 10.667 10.667h128A10.66 10.66 0 0 0 384 309.334a10.66 10.66 0 0 0-10.667-10.667m0 106.666h-128A10.66 10.66 0 0 0 234.666 416a10.66 10.66 0 0 0 10.667 10.667h128A10.66 10.66 0 0 0 384 416a10.66 10.66 0 0 0-10.667-10.667" />
                </svg>
              </div>
              <h4 class="counter__title counter text-color-4 fs-35">
                {{ count($courses) }}</h4>
              <p class="counter__meta">Courses</p>
            </div><!-- end counter-item -->
          </div><!-- end col-lg-4 -->
        </div><!-- end row -->
      </div><!-- end team-single-wrap -->
    </div><!-- end container -->
    <div class="py-5 bg-gray">
      <div class="container">
        <ul class="nav nav-tabs generic-tab justify-content-center" id="myTab"
          role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="about-me-tab" data-toggle="tab"
              href="#about-me" role="tab" aria-controls="about-me"
              aria-selected="false">
              About Me
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="experience-tab" data-toggle="tab"
              href="#experience" role="tab" aria-controls="experience"
              aria-selected="false">
              Experience
            </a>
          </li>
        </ul>
        <div class="tab-content pt-40px" id="myTabContent">
          <div class="tab-pane fade show active" id="about-me" role="tabpanel"
            aria-labelledby="about-me-tab">
            <div class="card card-item">
              <div class="card-body">
                <p class="pb-3 card-text">There are many variations of passages of
                  Lorem Ipsum available, but the majority have suffered alteration
                  in some form, by injected humour, or randomised words which
                  don't look even slightly believable. Lorem ipsum dolor sit amet,
                  consectetur adipisicing elit. Ab corporis est fugiat ipsa
                  laboriosam laudantium possimus quo? Aperiam architecto laborum
                  provident rerum, totam ullam! Accusantium eius eum perferendis
                  quasi, repellendus suscipit voluptate voluptatem! Delectus
                  dolorem maxime nulla numquam quasi quod.</p>
                <p class="pb-3 card-text">Lorem ipsum dolor sit amet, consectetur
                  adipisicing elit. Alias atque ipsa magnam, magni nobis quam
                  ratione reiciendis totam? Accusantium aliquam aspernatur,
                  assumenda cupiditate deleniti eius, ex fuga iusto minus, nihil
                  perspiciatis porro provident quasi soluta ut! Consequuntur earum
                  eos magnam?</p>
                <div class="collapse" id="collapseReadMore">
                  <p class="pb-3 card-text">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Alias consequatur consequuntur
                    dolorem enim error est fuga iure magnam voluptas, voluptates.
                  </p>
                </div>
                <a class="collapse-btn collapse--btn fs-15" data-toggle="collapse"
                  href="#collapseReadMore" role="button" aria-expanded="false"
                  aria-controls="collapseReadMore">
                  <span class="collapse-btn-hide">Read more<i
                      class="ml-1 la la-angle-down fs-14"></i></span>
                  <span class="collapse-btn-show">Read less<i
                      class="ml-1 la la-angle-up fs-14"></i></span>
                </a>
              </div>
            </div>
          </div><!-- end tab-pane -->
          <div class="tab-pane fade" id="experience" role="tabpanel"
            aria-labelledby="experience-tab">
            <div class="card card-item">
              <div class="card-body">
                <p>
                  There are many variations of passages of Lorem Ipsum available,
                  but the majority have suffered alteration in some form, by
                  injected humour,
                  or randomised words which don't look even slightly believable.
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  cupiditate deleniti eius, ex fuga iusto minus,
                  nihil perspiciatis porro provident quasi soluta ut! Consequuntur
                  earum eos magnam?
                </p>
                <div class="skills-wrap pt-30px">
                  <div class="skills">
                    <div class="skill">
                      <div
                        class="flex-wrap d-flex align-items-center justify-content-between">
                        <span
                          class="pr-3 text-black fs-16 font-weight-semi-bold">HTML</span>
                        <span>99%</span>
                      </div>
                      <div class="progress_bg">
                        <div class="progress_bar"></div>
                      </div>
                    </div>
                    <div class="skill">
                      <div
                        class="flex-wrap d-flex align-items-center justify-content-between">
                        <span
                          class="pr-3 text-black fs-16 font-weight-semi-bold">CSS</span>
                        <span>99%</span>
                      </div>
                      <div class="progress_bg">
                        <div class="progress_bar"></div>
                      </div>
                    </div>
                    <div class="skill">
                      <div
                        class="flex-wrap d-flex align-items-center justify-content-between">
                        <span
                          class="pr-3 text-black fs-16 font-weight-semi-bold">Javascript</span>
                        <span>95%</span>
                      </div>
                      <div class="progress_bg">
                        <div class="progress_bar"></div>
                      </div>
                    </div>
                  </div><!-- end skills-->
                </div>
              </div>
            </div>
          </div><!-- end tab-pane -->
        </div><!-- end tab-content -->
      </div><!-- end container -->
    </div>
  </section><!-- end teacher-details-area -->
  <section class="course-area section-padding">
    <div class="container">
      <div class="pb-3 d-flex align-items-center justify-content-between">
        <h3 class="fs-24 font-weight-semi-bold">My courses</h3>
        <span class="ribbon ribbon-lg">{{ count($courses) }}</span>
      </div>
      <div class="divider"><span></span></div>
      <div class="row pt-30px">
        @foreach ($courses as $course)
          <div class="col-lg-4 responsive-column-half">
            <div class="card card-item card-preview"
              data-tooltip-content="#tooltip_content_1{{ $course->id }}">
              <div class="card-image">
                <a href="{{ url("course/details/" . $course->id . "/" . $course->course_name_slug) }}"
                  class="d-block">
                  <img class="card-img-top lazy"
                    src="{{ asset($course->course_image) }}"
                    data-src="{{ asset($course->course_image) }}"
                    alt="Card image cap">
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
                    <div class="course-badge blue">{{ round($discount) }}%
                    </div>
                  @endif
                </div>
              </div><!-- end card-image -->
              <div class="card-body">
                <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">
                  {{ $course->label }}</h6>
                <h5 class="card-title"><a
                    href="{{ url("course/details/" . $course->id . "/" . $course->course_name_slug) }}">{{ $course->course_name }}</a>
                </h5>
                <p class="card-text"><a
                    href="{{ route("instructor.details", $course->instructor_id) }}">{{ $course["user"]["name"] }}</a>
                </p>
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
                    <p class="text-black card-price font-weight-bold">
                      ${{ $course->selling_price }}</p>
                  @else
                    <p class="text-black card-price font-weight-bold">
                      ${{ $course->discount_price }} <span
                        class="before-price font-weight-medium">${{ $course->selling_price }}</span>
                    </p>
                  @endif
                  <div
                    class="shadow-sm cursor-pointer icon-element icon-element-sm"
                    title="Add to Wishlist"><i class="la la-heart-o"></i>
                  </div>
                </div>
              </div><!-- end card-body -->
            </div><!-- end card -->
          </div><!-- end col-lg-4 -->
        @endforeach
      </div><!-- end row -->
      <div class="pt-3 text-center">
        <nav aria-label="Page navigation example" class="pagination-box">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link"
                href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true"><i
                    class="la la-arrow-right"></i></span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
        <p class="pt-2 fs-14">Showing 1-6 of 24 results</p>
      </div>
    </div><!-- end container -->
  </section><!-- end courses-area -->
  @php
    $courseData = App\Models\Course::get();
  @endphp
  <!-- toltip templates -->
  @foreach ($courseData as $item)
    <div class="tooltip_templates">
      <div id="tooltip_content_1{{ $item->id }}">
        <div class="card card-item">
          <div class="card-body">
            <p class="pb-2 card-text">By <a
                href="{{ route("instructor.details", $course->instructor_id) }}">{{ $item["user"]["name"] }}</a>
            </p>
            <h5 class="pb-1 card-title"><a
                href="{{ url("course/details/" . $item->id . "/" . $item->course_name_slug) }}">{{ $item->course_name }}</a>
            </h5>
            <div class="pb-1 d-flex align-items-center">
              @if ($item->bestseller == 1)
                <h6 class="mr-2 ribbon fs-14">Bestseller</h6>
              @else
                <h6 class="mr-2 ribbon fs-14">New</h6>
              @endif
              <p class="text-success fs-14 font-weight-medium">Updated<span
                  class="pl-1 font-weight-bold">{{ $item->created_at->format("M d Y") }}</span>
              </p>
            </div>
            <ul
              class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
              <li>{{ $item->duration }} total hours</li>
              <li>{{ $item->label }}</li>
            </ul>
            <p class="pt-1 card-text fs-14 lh-22">{{ $item->prerequisites }}</p>
            @php
              $goals = App\Models\Course_goal::where("course_id", $item->id)
                  ->orderBy("id", "DESC")
                  ->get();
            @endphp
            <ul class="py-3 generic-list-item fs-14">
              @foreach ($goals as $goal)
                <li><i class="mr-1 text-black la la-check"></i>
                  {{ $goal->goal_name }}</li>
              @endforeach
            </ul>
            <div class="d-flex justify-content-between align-items-center">
              <a href="#" class="mr-3 btn theme-btn flex-grow-1"><i
                  class="mr-1 la la-shopping-cart fs-18"></i>
                Add
                to Cart</a>
              <div class="shadow-sm cursor-pointer icon-element icon-element-sm"
                title="Add to Wishlist"><i class="la la-heart-o"></i></div>
            </div>
          </div>
        </div><!-- end card -->
      </div>
    </div><!-- end tooltip_templates -->
  @endforeach
@endsection
