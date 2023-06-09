@extends('layouts.app')

@section('title')
Utama
@endsection

@section('content')
   
<div class="row-fluid">
    <div class="header-clear p-4">
        <div class="search-box search-header background-changer bg-theme pt-1">
            <i class="fa fa-search"></i>
            <input type="text" class="rounded-s" placeholder="Cari Kempen " data-search="">
            <a href="#" class="clear-search disabled mt-0"><i class="fa fa-times color-red-dark"></i></a>
        </div>
    </div>
</div>

<div class="row-fluid bg-blue-dark pt-4 pb-2">
    <div class="col-md-12 px-4 pb-2">
        <h2 class="color-white font-900">Jariah Kilat</h2>
    </div>
    
    <div class="splide double-slider slider-no-arrows slider-no-dots splide--loop splide--ltr splide--draggable is-active" id="double-slider-home-1" style="visibility: visible;">
        <div class="splide__track" id="double-slider-home-1-track">
            <div class="splide__list" id="double-slider-home-1-list" style="transform: translateX(-937.5px);">

                <div class="splide__slide splide__slide--clone" aria-hidden="true" tabindex="-1" style="width: 187.5px;">
                    <div class="card card-style">
                        <div class="card-body">
                            <h5 class="card-title color-blue-dark">Berqat Sdn. Bhd.</h5>
                        </div>
                        <img src="{{ asset('backend/img/23.jpg') }}" class="img-fluid" alt="...">
                    </div>
                </div>

                <div class="splide__slide splide__slide--clone" aria-hidden="true" tabindex="-1" style="width: 187.5px;">
                    <div class="card card-style">
                        <div class="card-body">
                            <h5 class="card-title color-blue-dark">Berqat Sdn. Bhd.</h5>
                        </div>
                        <img src="{{ asset('backend/img/22.jpg') }}" class="img-fluid" alt="...">
                    </div>
                </div>

                <div class="splide__slide splide__slide--clone" style="width: 187.5px;">
                    <div class="card card-style">
                        <div class="card-body">
                            <h5 class="card-title color-blue-dark">Berqat Sdn. Bhd.</h5>
                        </div>
                        <img src="{{ asset('backend/img/21.jpg') }}" class="img-fluid" alt="...">
                    </div>
                </div>

            </div>
        </div>
        {{-- <ul class="splide__pagination">
            <li><button class="splide__pagination__page" type="button" aria-controls="double-slider-home-1-slide01 double-slider-home-1-slide02" aria-label="Go to page 1"></button></li>
            <li><button class="splide__pagination__page is-active" type="button" aria-controls="double-slider-home-1-slide02 double-slider-home-1-slide03" aria-label="Go to page 2" aria-current="true"></button></li>
        </ul> --}}
    </div>

</div>


<div class="row-fluid pt-4 pb-2">
    <div class="col-md-12 px-4 mb-2">
        <h2 class="color-blue-dark font-900">Jariah Berterusan</h2>
    </div>

    <div class="row p-4">
        <div class="col-6 g-0">
            <div class="card card-style">
                <img src="{{ asset('backend/img/21.jpg') }}" class="img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar" style="width: 25%"></div>
                    </div>
                    <p class="color-blue-dark">
                        RM21,000
                    </p>
                    <a href="#">Berqat Sdn. Bhd.</a>
                </div>
            </div>
        </div>
        <div class="col-6 g-0">
            <div class="card card-style">
                <img src="{{ asset('backend/img/22.jpg') }}" class="img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar" style="width: 25%"></div>
                    </div>
                    <p class="color-blue-dark">
                        RM21,000
                    </p>
                    <a href="#">Berqat Sdn. Bhd.</a>
                </div>
            </div>
        </div>
        <div class="col-6 g-0">
            <div class="card card-style">
                <img src="{{ asset('backend/img/23.jpg') }}" class="img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar" style="width: 25%"></div>
                    </div>
                    <p class="color-blue-dark">
                        RM21,000
                    </p>
                    <a href="#">Berqat Sdn. Bhd.</a>
                </div>
            </div>
        </div>
        <div class="col-6 g-0">
            <div class="card card-style">
                <img src="{{ asset('backend/img/21.jpg') }}" class="img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar" style="width: 25%"></div>
                    </div>
                    <p class="color-blue-dark">
                        RM21,000
                    </p>
                    <a href="#">Berqat Sdn. Bhd.</a>
                </div>
            </div>
        </div>
    </div>
    
</div>

{{-- Footer --}}
<div class="row">
<div id="footer-bar" class="footer-bar-1">
    <a href="index.html" class="active-nav">
        <svg width="30" height="30" viewBox="10 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="10" width="34.7733" height="34.7733" rx="11.8377" fill="#304C83"/>
            <path d="M17 14.1875L27.125 8L37.25 14.1875" stroke="white" stroke-width="1.6875" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M35 18.1249V25.3249C35 25.6978 34.6978 25.9999 34.325 25.9999H19.925C19.5522 25.9999 19.25 25.6978 19.25 25.3249V18.1249" stroke="white" stroke-width="1.6875" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M24.875 21.5H29.375" stroke="white" stroke-width="1.6875" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span>Utama</span>
        
    </a>
    <a href="index-components.html">
        <svg width="31" height="25" viewBox="0 0 31 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.25 4.27714C21.25 5.1417 20.9086 5.97207 20.2988 6.58628C18.8952 8.00073 17.5341 9.47557 16.078 10.8387C15.7444 11.1466 15.2149 11.1354 14.8955 10.8135L10.7009 6.58628C9.43302 5.30855 9.43302 3.24573 10.7009 1.968C11.9813 0.677698 14.0671 0.677698 15.3473 1.968L15.4998 2.12164L15.6522 1.96808C16.2662 1.34911 17.1022 1 17.9755 1C18.8489 1 19.685 1.34908 20.2988 1.968C20.9086 2.5823 21.25 3.41263 21.25 4.27714Z" stroke="#2C6ED3" stroke-width="1.6875" stroke-linejoin="round"/>
            <path d="M24.125 24L29.6224 18.5026C29.7842 18.3408 29.875 18.1215 29.875 17.8928V10.3438C29.875 9.15288 28.9096 8.1875 27.7188 8.1875C26.5279 8.1875 25.5625 9.15288 25.5625 10.3438V16.8125" stroke="#2C6ED3" stroke-width="1.6875" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M24.125 18.25L25.3585 17.0165C25.4892 16.8858 25.5625 16.7087 25.5625 16.5241C25.5625 16.2604 25.4134 16.0193 25.1775 15.9013L24.5409 15.583C23.4341 15.0296 22.0973 15.2465 21.2222 16.1215L19.9358 17.4079C19.3966 17.9471 19.0937 18.6784 19.0937 19.4408V24" stroke="#2C6ED3" stroke-width="1.6875" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M6.875 24L1.37763 18.5026C1.21586 18.3408 1.125 18.1215 1.125 17.8928V10.3438C1.125 9.15288 2.09038 8.1875 3.28125 8.1875C4.47212 8.1875 5.4375 9.15288 5.4375 10.3438V16.8125" stroke="#2C6ED3" stroke-width="1.6875" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M6.875 18.25L5.64144 17.0165C5.51086 16.8858 5.4375 16.7087 5.4375 16.5241C5.4375 16.2604 5.58651 16.0193 5.8224 15.9013L6.45909 15.583C7.56592 15.0296 8.90272 15.2465 9.77776 16.1215L11.0642 17.4079C11.6034 17.9471 11.9062 18.6784 11.9062 19.4408V24" stroke="#2C6ED3" stroke-width="1.6875" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span>Kempen</span>
    </a>
    <a href="index-pages.html">
        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.7491 2.89045H18.3699V0.103638H16.7774V2.89045H7.22261V0.103638H5.63015V2.89045H1.25087C0.934226 2.89082 0.630653 3.01677 0.40675 3.24067C0.182846 3.46458 0.056895 3.76815 0.0565262 4.0848V20.8057C0.056895 21.1223 0.182846 21.4259 0.40675 21.6498C0.630653 21.8737 0.934226 21.9996 1.25087 22H22.7491C23.0658 21.9996 23.3693 21.8737 23.5933 21.6498C23.8172 21.4259 23.9431 21.1223 23.9435 20.8057V4.0848C23.9431 3.76815 23.8172 3.46458 23.5933 3.24067C23.3693 3.01677 23.0658 2.89082 22.7491 2.89045ZM22.351 20.4075H1.64899V4.48291H5.63015V6.47349H7.22261V4.48291H16.7774V6.47349H18.3699V4.48291H22.351V20.4075Z" fill="#2C6ED3"/>
            <path d="M11.3728 13.7079L8.6664 11.0015L7.54038 12.1275L11.3728 15.9599L17.624 9.70878L16.4979 8.58276L11.3728 13.7079Z" fill="#2C6ED3"/>
        </svg>
        <span>Aktiviti</span>
    </a>
    <a href="index-search.html">
        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_21_265)">
            <path d="M20.8202 3.73725C20.5624 3.42782 20.2396 3.17895 19.8747 3.00833C19.5099 2.83771 19.1119 2.74951 18.7092 2.75H3.8885L3.85 2.42825C3.77121 1.75947 3.44977 1.14284 2.94662 0.695271C2.44346 0.247705 1.79358 0.000313311 1.12017 0L0.916667 0C0.673552 0 0.440394 0.0965771 0.268485 0.268485C0.0965771 0.440394 0 0.673551 0 0.916667C0 1.15978 0.0965771 1.39294 0.268485 1.56485C0.440394 1.73676 0.673552 1.83333 0.916667 1.83333H1.12017C1.34469 1.83336 1.56139 1.91579 1.72917 2.06499C1.89696 2.21418 2.00415 2.41977 2.03042 2.64275L3.29175 13.3677C3.4227 14.4831 3.9586 15.5116 4.79775 16.258C5.63689 17.0044 6.72087 17.4167 7.84392 17.4167H17.4167C17.6598 17.4167 17.8929 17.3201 18.0648 17.1482C18.2368 16.9763 18.3333 16.7431 18.3333 16.5C18.3333 16.2569 18.2368 16.0237 18.0648 15.8518C17.8929 15.6799 17.6598 15.5833 17.4167 15.5833H7.84392C7.27655 15.5817 6.72357 15.4047 6.26077 15.0765C5.79798 14.7483 5.44804 14.2849 5.25892 13.75H16.1856C17.2602 13.7501 18.3006 13.3725 19.1252 12.6834C19.9497 11.9943 20.5059 11.0373 20.6965 9.97975L21.4161 5.98858C21.4879 5.59259 21.4718 5.18564 21.3688 4.79658C21.2658 4.40752 21.0786 4.04587 20.8202 3.73725ZM19.6167 5.66317L18.8962 9.65433C18.7817 10.2896 18.4474 10.8643 17.9519 11.2779C17.4563 11.6915 16.8311 11.9176 16.1856 11.9167H4.96742L4.10483 4.58333H18.7092C18.8438 4.58253 18.977 4.6114 19.0992 4.6679C19.2215 4.7244 19.3298 4.80713 19.4164 4.91022C19.503 5.01331 19.5659 5.13422 19.6005 5.26436C19.6351 5.39449 19.6406 5.53066 19.6167 5.66317Z" fill="#2C6ED3"/>
            <path d="M6.41667 22C7.42919 22 8.25 21.1792 8.25 20.1667C8.25 19.1541 7.42919 18.3333 6.41667 18.3333C5.40415 18.3333 4.58334 19.1541 4.58334 20.1667C4.58334 21.1792 5.40415 22 6.41667 22Z" fill="#2C6ED3"/>
            <path d="M15.5833 22C16.5959 22 17.4167 21.1792 17.4167 20.1667C17.4167 19.1541 16.5959 18.3333 15.5833 18.3333C14.5708 18.3333 13.75 19.1541 13.75 20.1667C13.75 21.1792 14.5708 22 15.5833 22Z" fill="#2C6ED3"/>
            </g>
            <defs>
            <clipPath id="clip0_21_265">
            <rect width="22" height="22" fill="white"/>
            </clipPath>
            </defs>
        </svg>
        <span>Bakul</span></a>
    <a href="#" data-menu="menu-settings">
        <svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.00002 5.5C4.00002 2.46243 6.46245 0 9.50002 0C12.5375 0 15 2.46243 15 5.5C15 8.53752 12.5375 11 9.50002 11C6.46244 11 4.00002 8.53751 4.00002 5.5ZM9.50002 1.73684C7.42168 1.73684 5.73686 3.42166 5.73686 5.5C5.73686 7.5783 7.42168 9.26316 9.50002 9.26316C11.5783 9.26316 13.2632 7.57829 13.2632 5.5C13.2632 3.42167 11.5783 1.73684 9.50002 1.73684Z" fill="#2C6ED3"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.50001 12.7368C5.47559 12.7368 2.21314 15.9769 2.21314 19.9737V21.1316C2.21314 21.6112 1.82165 22 1.33872 22C0.855787 22 0.464294 21.6112 0.464294 21.1316V19.9737C0.464294 15.0176 4.50973 11 9.50001 11C14.4903 11 18.5357 15.0176 18.5357 19.9737V21.1316C18.5357 21.6112 18.1442 22 17.6613 22C17.1784 22 16.7869 21.6112 16.7869 21.1316V19.9737C16.7869 15.9769 13.5244 12.7368 9.50001 12.7368Z" fill="#2C6ED3"/>
        </svg>
        <span>Akaun</span></a>
</div></div>
{{-- End Footer --}}

@endsection