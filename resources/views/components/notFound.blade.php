<div class="m-auto d-flex min-vh-100 align-items-center justify-content-center bg-light" dir="rtl">
  <div class="card shadow-sm text-center p-4" style="max-width:460px; width:100%;">
    <div class="mb-3">
        <img src="{{ asset('images/icon/notFound.svg') }}" alt="not found">
    </div>

    <h5 class="card-title mb-4">
        {{__('messages.message_not_found')}}
    </h5>
    <p class="card-text text-muted mb-4">
        {{__('messages.not_found_sub')}}
    </p>

    <div class="d-grid">
      <a href="{{ route('HomePage') }}" class="btn none-outline btn_back_to_home btn-lg">
        {{__('messages.not_found_btn')}}
    </a>
    </div>
  </div>
</div>
