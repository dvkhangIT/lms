<header>
  <div class="topbar d-flex align-items-center">
    <nav class="gap-3 navbar navbar-expand">
      <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
      </div>
      <div class="position-relative search-bar d-lg-block d-none"
        data-bs-toggle="modal" data-bs-target="#SearchModal">
        <input class="px-5 form-control" disabled type="search"
          placeholder="Search">
        <span
          class="position-absolute top-50 search-show translate-middle-y fs-5 start-0 ms-3"><i
            class='bx bx-search'></i></span>
      </div>
      <div class="top-menu ms-auto">
        <ul class="gap-1 navbar-nav align-items-center">
          <li class="nav-item mobile-search-icon d-flex d-lg-none"
            data-bs-toggle="modal" data-bs-target="#SearchModal">
            <a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
            </a>
          </li>
          <li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret"
              href="avascript:;" data-bs-toggle="dropdown"><img
                src="assets/images/county/02.png" width="22" alt="">
            </a>
          </li>
          <li class="nav-item dark-mode d-none d-sm-flex">
            <a class="nav-link dark-mode-icon" href="javascript:;"><i
                class='bx bx-moon'></i>
            </a>
          </li>
          @php
            $ncount = Auth::user()->unreadNotifications()->count();
          @endphp
          <li class="nav-item dropdown dropdown-large">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
              href="#" data-bs-toggle="dropdown"><span class="alert-count"
                id="notification-count">{{ $ncount }}</span>
              <i class='bx bx-bell'></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <a href="javascript:;">
                <div class="msg-header">
                  <p class="msg-header-title">Notifications</p>
                </div>
              </a>
              @php
                $user = Auth::user();
              @endphp
              <div class="header-notifications-list">
                @forelse ($user->notifications as $notification)
                  <a onclick="markNotificationRead('{{ $notification->id }}')"
                    class="dropdown-item" href="javascript:;">
                    <div class="d-flex align-items-center">
                      <div class="user-online">
                        <img src="assets/images/avatars/avatar-1.png"
                          class="msg-avatar" alt="user avatar">
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="msg-name">
                          {{ $notification->data['message'] }}<span
                            class="msg-time float-end">{{ Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</span>
                        </h6>
                        <p class="msg-info">New Order</p>
                      </div>
                    </div>
                  </a>
                @empty
                @endforelse
              </div>
              <a href="javascript:;">
                <div class="text-center msg-footer">
                  <button class="btn btn-primary w-100">View All
                    Notifications</button>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-large">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
              href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false"> <span class="alert-count">8</span>
              <i class='bx bx-shopping-bag'></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <a href="javascript:;">
                <div class="msg-header">
                  <p class="msg-header-title">My Cart</p>
                  <p class="msg-header-badge">10 Items</p>
                </div>
              </a>
              <div class="header-message-list">
                <a class="dropdown-item" href="javascript:;">
                  <div class="gap-3 d-flex align-items-center">
                    <div class="position-relative">
                      <div class="cart-product rounded-circle bg-light">
                        <img src="assets/images/products/11.png" class=""
                          alt="product image">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0 cart-product-title">Men White T-Shirt
                      </h6>
                      <p class="mb-0 cart-product-price">1 X $29.00</p>
                    </div>
                    <div class="">
                      <p class="mb-0 cart-price">$250</p>
                    </div>
                    <div class="cart-product-cancel"><i class="bx bx-x"></i>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item" href="javascript:;">
                  <div class="gap-3 d-flex align-items-center">
                    <div class="position-relative">
                      <div class="cart-product rounded-circle bg-light">
                        <img src="assets/images/products/02.png" class=""
                          alt="product image">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0 cart-product-title">Men White T-Shirt
                      </h6>
                      <p class="mb-0 cart-product-price">1 X $29.00</p>
                    </div>
                    <div class="">
                      <p class="mb-0 cart-price">$250</p>
                    </div>
                    <div class="cart-product-cancel"><i class="bx bx-x"></i>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item" href="javascript:;">
                  <div class="gap-3 d-flex align-items-center">
                    <div class="position-relative">
                      <div class="cart-product rounded-circle bg-light">
                        <img src="assets/images/products/03.png"
                          class="" alt="product image">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0 cart-product-title">Men White T-Shirt
                      </h6>
                      <p class="mb-0 cart-product-price">1 X $29.00</p>
                    </div>
                    <div class="">
                      <p class="mb-0 cart-price">$250</p>
                    </div>
                    <div class="cart-product-cancel"><i class="bx bx-x"></i>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item" href="javascript:;">
                  <div class="gap-3 d-flex align-items-center">
                    <div class="position-relative">
                      <div class="cart-product rounded-circle bg-light">
                        <img src="assets/images/products/04.png"
                          class="" alt="product image">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0 cart-product-title">Men White T-Shirt
                      </h6>
                      <p class="mb-0 cart-product-price">1 X $29.00</p>
                    </div>
                    <div class="">
                      <p class="mb-0 cart-price">$250</p>
                    </div>
                    <div class="cart-product-cancel"><i class="bx bx-x"></i>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item" href="javascript:;">
                  <div class="gap-3 d-flex align-items-center">
                    <div class="position-relative">
                      <div class="cart-product rounded-circle bg-light">
                        <img src="assets/images/products/05.png"
                          class="" alt="product image">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0 cart-product-title">Men White T-Shirt
                      </h6>
                      <p class="mb-0 cart-product-price">1 X $29.00</p>
                    </div>
                    <div class="">
                      <p class="mb-0 cart-price">$250</p>
                    </div>
                    <div class="cart-product-cancel"><i class="bx bx-x"></i>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item" href="javascript:;">
                  <div class="gap-3 d-flex align-items-center">
                    <div class="position-relative">
                      <div class="cart-product rounded-circle bg-light">
                        <img src="assets/images/products/06.png"
                          class="" alt="product image">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0 cart-product-title">Men White T-Shirt
                      </h6>
                      <p class="mb-0 cart-product-price">1 X $29.00</p>
                    </div>
                    <div class="">
                      <p class="mb-0 cart-price">$250</p>
                    </div>
                    <div class="cart-product-cancel"><i class="bx bx-x"></i>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item" href="javascript:;">
                  <div class="gap-3 d-flex align-items-center">
                    <div class="position-relative">
                      <div class="cart-product rounded-circle bg-light">
                        <img src="assets/images/products/07.png"
                          class="" alt="product image">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0 cart-product-title">Men White T-Shirt
                      </h6>
                      <p class="mb-0 cart-product-price">1 X $29.00</p>
                    </div>
                    <div class="">
                      <p class="mb-0 cart-price">$250</p>
                    </div>
                    <div class="cart-product-cancel"><i class="bx bx-x"></i>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item" href="javascript:;">
                  <div class="gap-3 d-flex align-items-center">
                    <div class="position-relative">
                      <div class="cart-product rounded-circle bg-light">
                        <img src="assets/images/products/08.png"
                          class="" alt="product image">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0 cart-product-title">Men White T-Shirt
                      </h6>
                      <p class="mb-0 cart-product-price">1 X $29.00</p>
                    </div>
                    <div class="">
                      <p class="mb-0 cart-price">$250</p>
                    </div>
                    <div class="cart-product-cancel"><i class="bx bx-x"></i>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item" href="javascript:;">
                  <div class="gap-3 d-flex align-items-center">
                    <div class="position-relative">
                      <div class="cart-product rounded-circle bg-light">
                        <img src="assets/images/products/09.png"
                          class="" alt="product image">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-0 cart-product-title">Men White T-Shirt
                      </h6>
                      <p class="mb-0 cart-product-price">1 X $29.00</p>
                    </div>
                    <div class="">
                      <p class="mb-0 cart-price">$250</p>
                    </div>
                    <div class="cart-product-cancel"><i class="bx bx-x"></i>
                    </div>
                  </div>
                </a>
              </div>
              <a href="javascript:;">
                <div class="text-center msg-footer">
                  <div
                    class="mb-3 d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Total</h5>
                    <h5 class="mb-0 ms-auto">$489.00</h5>
                  </div>
                  <button class="btn btn-primary w-100">Checkout</button>
                </div>
              </a>
            </div>
          </li>
        </ul>
      </div>
      @php
        $id = Auth::user()->id;
        $profileData = App\Models\User::find($id);
      @endphp
      <div class="px-3 user-box dropdown">
        <a class="gap-3 d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
          href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          <img
            src="{{ !empty($profileData->photo) ? url('upload/instructor_images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
            class="user-img" alt="user avatar">
          <div class="user-info">
            <p class="mb-0 user-name">{{ $profileData->name }}</p>
            <p class="mb-0 designattion">{{ $profileData->email }}</p>
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item d-flex align-items-center"
              href="{{ route('instructor.profile') }}"><i
                class="bx bx-user fs-5"></i><span>Profile</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center"
              href="{{ route('instructor.change.password') }}"><i
                class="bx bx-cog fs-5"></i><span>Change Password</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center"
              href="javascript:;"><i
                class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center"
              href="javascript:;"><i
                class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
          </li>
          <li><a class="dropdown-item d-flex align-items-center"
              href="javascript:;"><i
                class="bx bx-download fs-5"></i><span>Downloads</span></a>
          </li>
          <li>
            <div class="mb-0 dropdown-divider"></div>
          </li>
          <li><a class="dropdown-item d-flex align-items-center"
              href="{{ route('instructor.logout') }}"><i
                class="bx bx-log-out-circle"></i><span>Logout</span></a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>
<script>
  function markNotificationRead(notificationId) {
    fetch('/mark-notification-as-read/' + notificationId, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({})
      })
      .then(response => response.json())
      .then(data => {
        document.getElementById('notification-count').textContent = data.count
      })
      .catch(error => {
        console.log('Error', error);
      })
  }
</script>
