@extends("frontend.master")
@section("home")
  <section class="breadcrumb-area section-padding img-bg-2">
    <div class="overlay"></div>
    <div class="container">
      <div
        class="flex-wrap breadcrumb-content d-flex align-items-center justify-content-between">
        <div class="section-heading">
          <h2 class="text-white section__title">{{ $category->category_name }}</h2>
        </div>
        <ul
          class="flex-wrap generic-list-item generic-list-item-white generic-list-item-arrow d-flex align-items-center">
          <li><a href="index.html">Home</a></li>
          <li>{{ $category->category_name }}</li>
        </ul>
      </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
  </section><!-- end breadcrumb-area -->
  <section class="course-area section--padding">
    <div class="container">
      <div class="mb-4 filter-bar">
        <div
          class="flex-wrap filter-bar-inner d-flex align-items-center justify-content-between">
          <p class="fs-14">We found <span
              class="text-black">{{ count($courses) }}</span> courses
            available for you</p>
          <div class="flex-wrap d-flex align-items-center">
            <ul class="mr-3 filter-nav">
              <li><a href="course-grid.html" data-toggle="tooltip"
                  data-placement="top" title="Grid View" class="active"><span
                    class="la la-th-large"></span></a></li>
              <li><a href="course-list.html" data-toggle="tooltip"
                  data-placement="top" title="List View"><span
                    class="la la-list"></span></a></li>
            </ul>
            <div class="select-container select--container">
              <select class="select-container-select">
                <option value="all-category">All Category</option>
                <option value="newest">Newest courses</option>
                <option value="oldest">Oldest courses</option>
                <option value="high-rated">Highest rated</option>
                <option value="popular-courses">Popular courses</option>
                <option value="high-to-low">Price: high to low</option>
                <option value="low-to-high">Price: low to high</option>
              </select>
            </div>
          </div>
        </div><!-- end filter-bar-inner -->
      </div><!-- end filter-bar -->
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-5 sidebar">
            <div class="card card-item">
              <div class="card-body">
                <h3 class="pb-2 card-title fs-18">Search Field</h3>
                <div class="divider"><span></span></div>
                <form method="post">
                  <div class="mb-0 form-group">
                    <input class="pl-3 form-control form--control" type="text"
                      name="search" placeholder="Search courses">
                    <span class="la la-search search-icon"></span>
                  </div>
                </form>
              </div>
            </div><!-- end card -->
            <div class="card card-item">
              <div class="card-body">
                <h3 class="pb-2 card-title fs-18">Ratings</h3>
                <div class="divider"><span></span></div>
                <div class="mb-1 custom-control custom-radio fs-15">
                  <input type="radio" class="custom-control-input"
                    id="fiveStarRating" name="radio-stacked" required>
                  <label class="custom-control-label custom--control-label"
                    for="fiveStarRating">
                    <span class="rating-wrap d-flex align-items-center">
                      <span class="review-stars">
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                      </span>
                      <span class="pl-1 rating-total"><span
                          class="mr-1 text-black">5.0</span>(20,230)</span>
                    </span>
                  </label>
                </div>
                <div class="mb-1 custom-control custom-radio fs-15">
                  <input type="radio" class="custom-control-input"
                    id="fourStarRating" name="radio-stacked" required>
                  <label class="custom-control-label custom--control-label"
                    for="fourStarRating">
                    <span class="rating-wrap d-flex align-items-center">
                      <span class="review-stars">
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                      </span>
                      <span class="pl-1 rating-total"><span
                          class="mr-1 text-black">4.5 & up</span>(10,230)</span>
                    </span>
                  </label>
                </div>
                <div class="mb-1 custom-control custom-radio fs-15">
                  <input type="radio" class="custom-control-input"
                    id="threeStarRating" name="radio-stacked" required>
                  <label class="custom-control-label custom--control-label"
                    for="threeStarRating">
                    <span class="rating-wrap d-flex align-items-center">
                      <span class="review-stars">
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                      </span>
                      <span class="pl-1 rating-total"><span
                          class="mr-1 text-black">3.0 & up</span>(7,230)</span>
                    </span>
                  </label>
                </div>
                <div class="mb-1 custom-control custom-radio fs-15">
                  <input type="radio" class="custom-control-input"
                    id="twoStarRating" name="radio-stacked" required>
                  <label class="custom-control-label custom--control-label"
                    for="twoStarRating">
                    <span class="rating-wrap d-flex align-items-center">
                      <span class="review-stars">
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                      </span>
                      <span class="pl-1 rating-total"><span
                          class="mr-1 text-black">2.0 & up</span>(5,230)</span>
                    </span>
                  </label>
                </div>
                <div class="mb-1 custom-control custom-radio fs-15">
                  <input type="radio" class="custom-control-input"
                    id="oneStarRating" name="radio-stacked" required>
                  <label class="custom-control-label custom--control-label"
                    for="oneStarRating">
                    <span class="rating-wrap d-flex align-items-center">
                      <span class="review-stars">
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                        <span class="la la-star"></span>
                      </span>
                      <span class="pl-1 rating-total"><span
                          class="mr-1 text-black">1.0 & up</span>(3,230)</span>
                    </span>
                  </label>
                </div>
              </div>
            </div><!-- end card -->
            <div class="card card-item">
              <div class="card-body">
                <h3 class="pb-2 card-title fs-18">Categories</h3>
                <div class="divider"><span></span></div>
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="catCheckbox" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="catCheckbox">
                    Business<span class="ml-1 text-gray">(12,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="catCheckbox2" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="catCheckbox2">
                    UI & UX<span class="ml-1 text-gray">(12,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="catCheckbox3" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="catCheckbox3">
                    Animation<span class="ml-1 text-gray">(12,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="catCheckbox4" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="catCheckbox4">
                    Game Design<span class="ml-1 text-gray">(12,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="collapse" id="collapseMore">
                  <div class="mb-1 custom-control custom-checkbox fs-15">
                    <input type="checkbox" class="custom-control-input"
                      id="catCheckbox5" required>
                    <label
                      class="text-black custom-control-label custom--control-label"
                      for="catCheckbox5">
                      Graphic Design<span class="ml-1 text-gray">(12,300)</span>
                    </label>
                  </div><!-- end custom-control -->
                  <div class="mb-1 custom-control custom-checkbox fs-15">
                    <input type="checkbox" class="custom-control-input"
                      id="catCheckbox6" required>
                    <label
                      class="text-black custom-control-label custom--control-label"
                      for="catCheckbox6">
                      Typography<span class="ml-1 text-gray">(12,300)</span>
                    </label>
                  </div><!-- end custom-control -->
                  <div class="mb-1 custom-control custom-checkbox fs-15">
                    <input type="checkbox" class="custom-control-input"
                      id="catCheckbox7" required>
                    <label
                      class="text-black custom-control-label custom--control-label"
                      for="catCheckbox7">
                      Web Development<span class="ml-1 text-gray">(12,300)</span>
                    </label>
                  </div><!-- end custom-control -->
                  <div class="mb-1 custom-control custom-checkbox fs-15">
                    <input type="checkbox" class="custom-control-input"
                      id="catCheckbox8" required>
                    <label
                      class="text-black custom-control-label custom--control-label"
                      for="catCheckbox8">
                      Photography<span class="ml-1 text-gray">(12,300)</span>
                    </label>
                  </div><!-- end custom-control -->
                  <div class="mb-1 custom-control custom-checkbox fs-15">
                    <input type="checkbox" class="custom-control-input"
                      id="catCheckbox9" required>
                    <label
                      class="text-black custom-control-label custom--control-label"
                      for="catCheckbox9">
                      Finance<span class="ml-1 text-gray">(12,300)</span>
                    </label>
                  </div><!-- end custom-control -->
                </div><!-- end collapse -->
                <a class="collapse-btn collapse--btn fs-15"
                  data-toggle="collapse" href="#collapseMore" role="button"
                  aria-expanded="false" aria-controls="collapseMore">
                  <span class="collapse-btn-hide">Show more<i
                      class="ml-1 la la-angle-down fs-14"></i></span>
                  <span class="collapse-btn-show">Show less<i
                      class="ml-1 la la-angle-up fs-14"></i></span>
                </a>
              </div>
            </div><!-- end card -->
            <div class="card card-item">
              <div class="card-body">
                <h3 class="pb-2 card-title fs-18">Video Duration</h3>
                <div class="divider"><span></span></div>
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="videoDurationCheckbox" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="videoDurationCheckbox">
                    0-2 Hours<span class="ml-1 text-gray">(12,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="videoDurationCheckbox2" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="videoDurationCheckbox2">
                    3-6 Hours<span class="ml-1 text-gray">(12,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="videoDurationCheckbox3" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="videoDurationCheckbox3">
                    7-14 Hours<span class="ml-1 text-gray">(12,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="videoDurationCheckbox4" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="videoDurationCheckbox4">
                    16+ Hours<span class="ml-1 text-gray">(12,300)</span>
                  </label>
                </div><!-- end custom-control -->
              </div>
            </div><!-- end card -->
            <div class="card card-item">
              <div class="card-body">
                <h3 class="pb-2 card-title fs-18">Level</h3>
                <div class="divider"><span></span></div>
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="levelCheckbox" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="levelCheckbox">
                    All Levels<span class="ml-1 text-gray">(20,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="levelCheckbox2" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="levelCheckbox2">
                    Beginner<span class="ml-1 text-gray">(5,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="levelCheckbox3" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="levelCheckbox3">
                    Intermediate<span class="ml-1 text-gray">(3,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="levelCheckbox4" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="levelCheckbox4">
                    Expert<span class="ml-1 text-gray">(1,300)</span>
                  </label>
                </div><!-- end custom-control -->
              </div>
            </div><!-- end card -->
            <div class="card card-item">
              <div class="card-body">
                <h3 class="pb-2 card-title fs-18">Language</h3>
                <div class="divider"><span></span></div>
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="lanCheckbox" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="lanCheckbox">
                    English<span class="ml-1 text-gray">(12,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="laCheckbox2" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="laCheckbox2">
                    Português<span class="ml-1 text-gray">(12,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="lanCheckbox3" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="lanCheckbox3">
                    Español<span class="ml-1 text-gray">(12,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="lanCheckbox4" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="lanCheckbox4">
                    Türkçe<span class="ml-1 text-gray">(12,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="collapse" id="collapseMoreTwo">
                  <div class="mb-1 custom-control custom-checkbox fs-15">
                    <input type="checkbox" class="custom-control-input"
                      id="lanCheckbox5" required>
                    <label
                      class="text-black custom-control-label custom--control-label"
                      for="lanCheckbox5">
                      Français<span class="ml-1 text-gray">(12,300)</span>
                    </label>
                  </div><!-- end custom-control -->
                  <div class="mb-1 custom-control custom-checkbox fs-15">
                    <input type="checkbox" class="custom-control-input"
                      id="lanCheckbox6" required>
                    <label
                      class="text-black custom-control-label custom--control-label"
                      for="lanCheckbox6">
                      中文<span class="ml-1 text-gray">(12,300)</span>
                    </label>
                  </div><!-- end custom-control -->
                  <div class="mb-1 custom-control custom-checkbox fs-15">
                    <input type="checkbox" class="custom-control-input"
                      id="lanCheckbox7" required>
                    <label
                      class="text-black custom-control-label custom--control-label"
                      for="lanCheckbox7">
                      Deutsch<span class="ml-1 text-gray">(12,300)</span>
                    </label>
                  </div><!-- end custom-control -->
                  <div class="mb-1 custom-control custom-checkbox fs-15">
                    <input type="checkbox" class="custom-control-input"
                      id="lanCheckbox8" required>
                    <label
                      class="text-black custom-control-label custom--control-label"
                      for="lanCheckbox8">
                      日本語<span class="ml-1 text-gray">(300)</span>
                    </label>
                  </div><!-- end custom-control -->
                  <div class="mb-1 custom-control custom-checkbox fs-15">
                    <input type="checkbox" class="custom-control-input"
                      id="lanCheckbox9" required>
                    <label
                      class="text-black custom-control-label custom--control-label"
                      for="lanCheckbox9">
                      Polski<span class="ml-1 text-gray">(300)</span>
                    </label>
                  </div><!-- end custom-control -->
                </div><!-- end collapse -->
                <a class="collapse-btn collapse--btn fs-15"
                  data-toggle="collapse" href="#collapseMoreTwo" role="button"
                  aria-expanded="false" aria-controls="collapseMoreTwo">
                  <span class="collapse-btn-hide">Show more<i
                      class="ml-1 la la-angle-down fs-14"></i></span>
                  <span class="collapse-btn-show">Show less<i
                      class="ml-1 la la-angle-up fs-14"></i></span>
                </a>
              </div>
            </div><!-- end card -->
            <div class="card card-item">
              <div class="card-body">
                <h3 class="pb-2 card-title fs-18">By Cost</h3>
                <div class="divider"><span></span></div>
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="priceCheckbox" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="priceCheckbox">
                    Paid<span class="ml-1 text-gray">(19,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="priceCheckbox2" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="priceCheckbox2">
                    Free<span class="ml-1 text-gray">(1,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="priceCheckbox3" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="priceCheckbox3">
                    All<span class="ml-1 text-gray">(20,300)</span>
                  </label>
                </div><!-- end custom-control -->
              </div>
            </div><!-- end card -->
            <div class="card card-item">
              <div class="card-body">
                <h3 class="pb-2 card-title fs-18">Instructors</h3>
                <div class="divider"><span></span></div>
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="instructorCheckbox" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="instructorCheckbox">
                    All Instructor
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="instructorCheckbox2" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="instructorCheckbox2">
                    Aatef Jaberi
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="instructorCheckbox3" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="instructorCheckbox3">
                    Emilee Logan
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="instructorCheckbox4" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="instructorCheckbox4">
                    Harley Ferrell
                  </label>
                </div><!-- end custom-control -->
                <div class="collapse" id="collapseMoreThree">
                  <div class="mb-1 custom-control custom-checkbox fs-15">
                    <input type="checkbox" class="custom-control-input"
                      id="instructorCheckbox5" required>
                    <label
                      class="text-black custom-control-label custom--control-label"
                      for="instructorCheckbox5">
                      Nahla Jones
                    </label>
                  </div><!-- end custom-control -->
                  <div class="mb-1 custom-control custom-checkbox fs-15">
                    <input type="checkbox" class="custom-control-input"
                      id="instructorCheckbox6" required>
                    <label
                      class="text-black custom-control-label custom--control-label"
                      for="instructorCheckbox6">
                      Tomi Hensley
                    </label>
                  </div><!-- end custom-control -->
                  <div class="mb-1 custom-control custom-checkbox fs-15">
                    <input type="checkbox" class="custom-control-input"
                      id="instructorCheckbox7" required>
                    <label
                      class="text-black custom-control-label custom--control-label"
                      for="instructorCheckbox7">
                      Foley Patrik
                    </label>
                  </div><!-- end custom-control -->
                  <div class="mb-1 custom-control custom-checkbox fs-15">
                    <input type="checkbox" class="custom-control-input"
                      id="instructorCheckbox8" required>
                    <label
                      class="text-black custom-control-label custom--control-label"
                      for="instructorCheckbox8">
                      Oliver Porter
                    </label>
                  </div><!-- end custom-control -->
                  <div class="mb-1 custom-control custom-checkbox fs-15">
                    <input type="checkbox" class="custom-control-input"
                      id="instructorCheckbox9" required>
                    <label
                      class="text-black custom-control-label custom--control-label"
                      for="instructorCheckbox9">
                      Fahad Chaudhry
                    </label>
                  </div><!-- end custom-control -->
                </div><!-- end collapse -->
                <a class="collapse-btn collapse--btn fs-15"
                  data-toggle="collapse" href="#collapseMoreThree"
                  role="button" aria-expanded="false"
                  aria-controls="collapseMoreThree">
                  <span class="collapse-btn-hide">Show more<i
                      class="ml-1 la la-angle-down fs-14"></i></span>
                  <span class="collapse-btn-show">Show less<i
                      class="ml-1 la la-angle-up fs-14"></i></span>
                </a>
              </div>
            </div><!-- end card -->
            <div class="card card-item">
              <div class="card-body">
                <h3 class="pb-2 card-title fs-18">Features</h3>
                <div class="divider"><span></span></div>
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="featureCheckbox" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="featureCheckbox">
                    Captions<span class="ml-1 text-gray">(20,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="featureCheckbox2" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="featureCheckbox2">
                    Quizzes<span class="ml-1 text-gray">(5,300)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="featureCheckbox3" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="featureCheckbox3">
                    Coding Exercises<span class="ml-1 text-gray">(12)</span>
                  </label>
                </div><!-- end custom-control -->
                <div class="mb-1 custom-control custom-checkbox fs-15">
                  <input type="checkbox" class="custom-control-input"
                    id="featureCheckbox4" required>
                  <label
                    class="text-black custom-control-label custom--control-label"
                    for="featureCheckbox4">
                    Practice Tests<span class="ml-1 text-gray">(200)</span>
                  </label>
                </div><!-- end custom-control -->
              </div>
            </div><!-- end card -->
          </div><!-- end sidebar -->
        </div><!-- end col-lg-4 -->
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6 responsive-column-half">
              <div class="card card-item card-preview"
                data-tooltip-content="#tooltip_content_1">
                <div class="card-image">
                  <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="images/img-loading.png"
                      data-src="images/img8.jpg" alt="Card image cap">
                  </a>
                  <div class="course-badge-labels">
                    <div class="course-badge">Bestseller</div>
                    <div class="course-badge blue">-39%</div>
                  </div>
                </div><!-- end card-image -->
                <div class="card-body">
                  <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">All Levels</h6>
                  <h5 class="card-title"><a href="course-details.html">The
                      Business Intelligence Analyst Course 2021</a></h5>
                  <p class="card-text"><a href="teacher-detail.html">Jose
                      Portilla</a></p>
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
                    <div
                      class="shadow-sm cursor-pointer icon-element icon-element-sm"
                      title="Add to Wishlist"><i class="la la-heart-o"></i>
                    </div>
                  </div>
                </div><!-- end card-body -->
              </div><!-- end card -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column-half">
              <div class="card card-item card-preview"
                data-tooltip-content="#tooltip_content_1">
                <div class="card-image">
                  <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="images/img-loading.png"
                      data-src="images/img9.jpg" alt="Card image cap">
                  </a>
                  <div class="course-badge-labels">
                    <div class="course-badge red">Featured</div>
                  </div>
                </div><!-- end card-image -->
                <div class="card-body">
                  <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">All Levels</h6>
                  <h5 class="card-title"><a href="course-details.html">The
                      Business Intelligence Analyst Course 2021</a></h5>
                  <p class="card-text"><a href="teacher-detail.html">Jose
                      Portilla</a></p>
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
                    <div
                      class="shadow-sm cursor-pointer icon-element icon-element-sm"
                      title="Add to Wishlist"><i class="la la-heart-o"></i>
                    </div>
                  </div>
                </div><!-- end card-body -->
              </div><!-- end card -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column-half">
              <div class="card card-item card-preview"
                data-tooltip-content="#tooltip_content_1">
                <div class="card-image">
                  <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="images/img-loading.png"
                      data-src="images/img10.jpg" alt="Card image cap">
                  </a>
                </div><!-- end card-image -->
                <div class="card-body">
                  <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">All Levels</h6>
                  <h5 class="card-title"><a href="course-details.html">The
                      Business Intelligence Analyst Course 2021</a></h5>
                  <p class="card-text"><a href="teacher-detail.html">Jose
                      Portilla</a></p>
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
                    <div
                      class="shadow-sm cursor-pointer icon-element icon-element-sm"
                      title="Add to Wishlist"><i class="la la-heart-o"></i>
                    </div>
                  </div>
                </div><!-- end card-body -->
              </div><!-- end card -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column-half">
              <div class="card card-item card-preview"
                data-tooltip-content="#tooltip_content_1">
                <div class="card-image">
                  <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="images/img-loading.png"
                      data-src="images/img11.jpg" alt="Card image cap">
                  </a>
                </div><!-- end card-image -->
                <div class="card-body">
                  <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">All Levels</h6>
                  <h5 class="card-title"><a href="course-details.html">The
                      Business Intelligence Analyst Course 2021</a></h5>
                  <p class="card-text"><a href="teacher-detail.html">Jose
                      Portilla</a></p>
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
                    <div
                      class="shadow-sm cursor-pointer icon-element icon-element-sm"
                      title="Add to Wishlist"><i class="la la-heart-o"></i>
                    </div>
                  </div>
                </div><!-- end card-body -->
              </div><!-- end card -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column-half">
              <div class="card card-item card-preview"
                data-tooltip-content="#tooltip_content_1">
                <div class="card-image">
                  <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="images/img-loading.png"
                      data-src="images/img12.jpg" alt="Card image cap">
                  </a>
                  <div class="course-badge-labels">
                    <div class="course-badge green">Free</div>
                  </div>
                </div><!-- end card-image -->
                <div class="card-body">
                  <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">All Levels</h6>
                  <h5 class="card-title"><a href="course-details.html">The
                      Business Intelligence Analyst Course 2021</a></h5>
                  <p class="card-text"><a href="teacher-detail.html">Jose
                      Portilla</a></p>
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
                    <div
                      class="shadow-sm cursor-pointer icon-element icon-element-sm"
                      title="Add to Wishlist"><i class="la la-heart-o"></i>
                    </div>
                  </div>
                </div><!-- end card-body -->
              </div><!-- end card -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column-half">
              <div class="card card-item card-preview"
                data-tooltip-content="#tooltip_content_1">
                <div class="card-image">
                  <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="images/img-loading.png"
                      data-src="images/img13.jpg" alt="Card image cap">
                  </a>
                  <div class="course-badge-labels">
                    <div class="course-badge sky-blue">Highest rated</div>
                  </div>
                </div><!-- end card-image -->
                <div class="card-body">
                  <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">All Levels</h6>
                  <h5 class="card-title"><a href="course-details.html">The
                      Business Intelligence Analyst Course 2021</a></h5>
                  <p class="card-text"><a href="teacher-detail.html">Jose
                      Portilla</a></p>
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
                    <div
                      class="shadow-sm cursor-pointer icon-element icon-element-sm"
                      title="Add to Wishlist"><i class="la la-heart-o"></i>
                    </div>
                  </div>
                </div><!-- end card-body -->
              </div><!-- end card -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column-half">
              <div class="card card-item card-preview"
                data-tooltip-content="#tooltip_content_1">
                <div class="card-image">
                  <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="images/img-loading.png"
                      data-src="images/img10.jpg" alt="Card image cap">
                  </a>
                </div><!-- end card-image -->
                <div class="card-body">
                  <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">All Levels</h6>
                  <h5 class="card-title"><a href="course-details.html">The
                      Business Intelligence Analyst Course 2021</a></h5>
                  <p class="card-text"><a href="teacher-detail.html">Jose
                      Portilla</a></p>
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
                    <div
                      class="shadow-sm cursor-pointer icon-element icon-element-sm"
                      title="Add to Wishlist"><i class="la la-heart-o"></i>
                    </div>
                  </div>
                </div><!-- end card-body -->
              </div><!-- end card -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column-half">
              <div class="card card-item card-preview"
                data-tooltip-content="#tooltip_content_1">
                <div class="card-image">
                  <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="images/img-loading.png"
                      data-src="images/img11.jpg" alt="Card image cap">
                  </a>
                </div><!-- end card-image -->
                <div class="card-body">
                  <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">All Levels</h6>
                  <h5 class="card-title"><a href="course-details.html">The
                      Business Intelligence Analyst Course 2021</a></h5>
                  <p class="card-text"><a href="teacher-detail.html">Jose
                      Portilla</a></p>
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
                    <div
                      class="shadow-sm cursor-pointer icon-element icon-element-sm"
                      title="Add to Wishlist"><i class="la la-heart-o"></i>
                    </div>
                  </div>
                </div><!-- end card-body -->
              </div><!-- end card -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column-half">
              <div class="card card-item card-preview"
                data-tooltip-content="#tooltip_content_1">
                <div class="card-image">
                  <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="images/img-loading.png"
                      data-src="images/img12.jpg" alt="Card image cap">
                  </a>
                  <div class="course-badge-labels">
                    <div class="course-badge green">Free</div>
                  </div>
                </div><!-- end card-image -->
                <div class="card-body">
                  <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">All Levels</h6>
                  <h5 class="card-title"><a href="course-details.html">The
                      Business Intelligence Analyst Course 2021</a></h5>
                  <p class="card-text"><a href="teacher-detail.html">Jose
                      Portilla</a></p>
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
                    <div
                      class="shadow-sm cursor-pointer icon-element icon-element-sm"
                      title="Add to Wishlist"><i class="la la-heart-o"></i>
                    </div>
                  </div>
                </div><!-- end card-body -->
              </div><!-- end card -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 responsive-column-half">
              <div class="card card-item card-preview"
                data-tooltip-content="#tooltip_content_1">
                <div class="card-image">
                  <a href="course-details.html" class="d-block">
                    <img class="card-img-top lazy" src="images/img-loading.png"
                      data-src="images/img13.jpg" alt="Card image cap">
                  </a>
                  <div class="course-badge-labels">
                    <div class="course-badge sky-blue">Highest rated</div>
                  </div>
                </div><!-- end card-image -->
                <div class="card-body">
                  <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">All Levels</h6>
                  <h5 class="card-title"><a href="course-details.html">The
                      Business Intelligence Analyst Course 2021</a></h5>
                  <p class="card-text"><a href="teacher-detail.html">Jose
                      Portilla</a></p>
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
                    <div
                      class="shadow-sm cursor-pointer icon-element icon-element-sm"
                      title="Add to Wishlist"><i class="la la-heart-o"></i>
                    </div>
                  </div>
                </div><!-- end card-body -->
              </div><!-- end card -->
            </div><!-- end col-lg-6 -->
          </div><!-- end row -->
          <div class="pt-3 text-center">
            <nav aria-label="Page navigation example" class="pagination-box">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true"><i
                        class="la la-arrow-left"></i></span>
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
            <p class="pt-2 fs-14">Showing 1-10 of 56 results</p>
          </div>
        </div><!-- end col-lg-8 -->
      </div><!-- end row -->
    </div><!-- end container -->
  </section><!-- end courses-area -->
@endsection
