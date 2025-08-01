<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} where faith meets the passion </title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-6.css">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.css">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="assets/css/vendor/metismenu.css">
    <!-- custom style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <x-alert />
    <!-- header style one -->
    <!-- header style one -->
    <header class="header-one header--sticky header-default">
        <div class="header-top-one-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-one">
                            <div class="left-information">
                                <a href="mailto:info@alhamdschool.com" class="email"><i
                                        class="fa-light fa-envelope"></i>info@alhamdschool.com</a>
                                <a href="tel:+92 313 0567126" class="email"><i class="fa-light fa-phone"></i>+92 313
                                    0567126</a>
                            </div>
                            <div class="right-information">
                                <ul class="social-area">
                                    <li>
                                        <a href="#">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.6688 0.5H1.33125C1.11129 0.501635 0.900811 0.589738 0.745275 0.745275C0.589738 0.900811 0.501635 1.11129 0.5 1.33125V14.6688C0.501635 14.8887 0.589738 15.0992 0.745275 15.2547C0.900811 15.4103 1.11129 15.4984 1.33125 15.5H8.5125V9.7H6.5625V7.43125H8.5125V5.7625C8.5125 3.825 9.69375 2.76875 11.4312 2.76875C12.0125 2.76875 12.5938 2.76875 13.175 2.85625V4.875H11.9813C11.0375 4.875 10.8562 5.325 10.8562 5.98125V7.425H13.1063L12.8125 9.69375H10.8562V15.5H14.6688C14.8887 15.4984 15.0992 15.4103 15.2547 15.2547C15.4103 15.0992 15.4984 14.8887 15.5 14.6688V1.33125C15.4984 1.11129 15.4103 0.900811 15.2547 0.745275C15.0992 0.589738 14.8887 0.501635 14.6688 0.5V0.5Z"
                                                    fill="white" />
                                                <path
                                                    d="M14.6688 0.5H1.33125C1.11129 0.501635 0.900811 0.589738 0.745275 0.745275C0.589738 0.900811 0.501635 1.11129 0.5 1.33125V14.6688C0.501635 14.8887 0.589738 15.0992 0.745275 15.2547C0.900811 15.4103 1.11129 15.4984 1.33125 15.5H8.5125V9.7H6.5625V7.43125H8.5125V5.7625C8.5125 3.825 9.69375 2.76875 11.4312 2.76875C12.0125 2.76875 12.5938 2.76875 13.175 2.85625V4.875H11.9813C11.0375 4.875 10.8562 5.325 10.8562 5.98125V7.425H13.1063L12.8125 9.69375H10.8562V15.5H14.6688C14.8887 15.4984 15.0992 15.4103 15.2547 15.2547C15.4103 15.0992 15.4984 14.8887 15.5 14.6688V1.33125C15.4984 1.11129 15.4103 0.900811 15.2547 0.745275C15.0992 0.589738 14.8887 0.501635 14.6688 0.5V0.5Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11.0306 1.89513C10.2398 1.859 10.0026 1.85137 8 1.85137V1.85131C5.99744 1.85131 5.76019 1.859 4.96938 1.89506C4.49378 1.90072 4.02269 1.98808 3.57669 2.15331C3.25324 2.27812 2.9595 2.46925 2.71436 2.7144C2.46922 2.95955 2.27811 3.2533 2.15331 3.57675C1.98808 4.02276 1.90072 4.49384 1.89506 4.96944C1.85894 5.76025 1.85131 5.9975 1.85131 8.00006C1.85131 10.0026 1.859 10.2399 1.89506 11.0307C1.90072 11.5063 1.98808 11.9774 2.15331 12.4234C2.27812 12.7468 2.46923 13.0405 2.71437 13.2857C2.95951 13.5308 3.25325 13.7219 3.57669 13.8467C4.02269 14.012 4.49378 14.0993 4.96938 14.105C5.76013 14.1411 5.99725 14.1487 8 14.1487C10.0028 14.1487 10.2399 14.1411 11.0306 14.105C11.5062 14.0993 11.9773 14.012 12.4233 13.8467C12.7467 13.7219 13.0405 13.5308 13.2856 13.2857C13.5308 13.0405 13.7219 12.7468 13.8467 12.4234C14.0119 11.9774 14.0993 11.5063 14.1049 11.0307C14.1411 10.2399 14.1487 10.0026 14.1487 8.00006C14.1487 5.9975 14.141 5.76025 14.1049 4.96944C14.0993 4.49384 14.0119 4.02276 13.8467 3.57675C13.7219 3.25331 13.5308 2.95958 13.2856 2.71444C13.0405 2.4693 12.7467 2.27818 12.4233 2.15338C11.9773 1.98814 11.5062 1.90079 11.0306 1.89513ZM4.90775 0.545125C5.70769 0.508625 5.96312 0.5 8 0.5C10.0369 0.5 10.2923 0.508625 11.0919 0.545438C11.7141 0.557899 12.3297 0.675778 12.9125 0.894062C13.4108 1.08672 13.8633 1.38135 14.2411 1.75907C14.6188 2.13679 14.9135 2.58927 15.1063 3.0875C15.3245 3.67018 15.4424 4.28566 15.4549 4.90775C15.4914 5.70769 15.5 5.96312 15.5 8C15.5 10.0369 15.4914 10.2923 15.4552 11.0919C15.4427 11.7141 15.3248 12.3297 15.1066 12.9125C14.9139 13.4108 14.6192 13.8633 14.2414 14.2411C13.8636 14.6189 13.4111 14.9136 12.9128 15.1063C12.33 15.3245 11.7144 15.4424 11.0922 15.4549C10.2923 15.4914 10.0369 15.5 8 15.5C5.96312 15.5 5.70769 15.4914 4.90806 15.4552C4.28586 15.4427 3.67028 15.3249 3.0875 15.1066C2.58921 14.9139 2.13667 14.6192 1.7589 14.2414C1.38112 13.8636 1.08645 13.4111 0.89375 12.9128C0.675466 12.33 0.557586 11.7144 0.545125 11.0922C0.508625 10.2923 0.5 10.0369 0.5 8C0.5 5.96312 0.508625 5.70769 0.545125 4.90806C0.557579 4.28586 0.675459 3.67028 0.89375 3.0875C1.08645 2.58921 1.38112 2.13667 1.7589 1.7589C2.13667 1.38112 2.58921 1.08645 3.0875 0.89375C3.67018 0.675493 4.28566 0.557614 4.90775 0.545125ZM12.0035 4.89644C12.5005 4.89644 12.9035 4.49349 12.9035 3.99644C12.9035 3.49938 12.5005 3.09644 12.0035 3.09644C11.5064 3.09644 11.1035 3.49938 11.1035 3.99644C11.1035 4.49349 11.5064 4.89644 12.0035 4.89644ZM7.99998 4.14868C7.23825 4.14868 6.49363 4.37456 5.86027 4.79776C5.22692 5.22095 4.73328 5.82245 4.44178 6.5262C4.15027 7.22995 4.074 8.00433 4.22261 8.75142C4.37122 9.49852 4.73802 10.1848 5.27665 10.7234C5.81527 11.262 6.50152 11.6288 7.24862 11.7774C7.99571 11.926 8.77009 11.8498 9.47384 11.5583C10.1776 11.2668 10.7791 10.7731 11.2023 10.1398C11.6255 9.50641 11.8514 8.76179 11.8514 8.00006C11.8514 6.97861 11.4456 5.999 10.7233 5.27672C10.001 4.55445 9.02143 4.14868 7.99998 4.14868ZM7.99998 10.5001C7.50553 10.5001 7.02218 10.3534 6.61106 10.0787C6.19993 9.80403 5.8795 9.41358 5.69028 8.95677C5.50106 8.49995 5.45156 7.99728 5.54802 7.51233C5.64448 7.02738 5.88258 6.58192 6.23221 6.23229C6.58185 5.88266 7.0273 5.64456 7.51226 5.54809C7.99721 5.45163 8.49988 5.50114 8.95669 5.69036C9.41351 5.87958 9.80395 6.20001 10.0787 6.61113C10.3534 7.02225 10.5 7.5056 10.5 8.00006C10.5 8.6631 10.2366 9.29898 9.76775 9.76782C9.29891 10.2367 8.66302 10.5001 7.99998 10.5001Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.3812 0.50002H1.61875C1.32795 0.498272 1.04803 0.610457 0.838927 0.812551C0.629823 1.01465 0.508163 1.29058 0.5 1.58127V14.375C0.506563 14.6662 0.627723 14.9431 0.837178 15.1455C1.04663 15.348 1.32748 15.4596 1.61875 15.4563H14.3812C14.6725 15.4596 14.9534 15.348 15.1628 15.1455C15.3723 14.9431 15.4934 14.6662 15.5 14.375V1.58127C15.4918 1.29058 15.3702 1.01465 15.1611 0.812551C14.952 0.610457 14.672 0.498272 14.3812 0.50002V0.50002ZM4.94375 13.2563H2.74375V6.12502H4.94375V13.2563ZM3.86875 5.13127C3.53097 5.13137 3.20655 4.99936 2.9648 4.76345C2.72306 4.52755 2.58316 4.20645 2.575 3.86877C2.56888 3.69723 2.59816 3.52626 2.66102 3.36653C2.72387 3.2068 2.81895 3.06172 2.94032 2.94034C3.0617 2.81897 3.20678 2.72389 3.36651 2.66104C3.52624 2.59818 3.69721 2.5689 3.86875 2.57502C4.19553 2.59777 4.50151 2.74364 4.72494 2.98317C4.94838 3.2227 5.07263 3.53808 5.07263 3.86565C5.07263 4.19321 4.94838 4.50859 4.72494 4.74812C4.50151 4.98765 4.19553 5.13352 3.86875 5.15627V5.13127ZM13.3 13.2125H11.125V9.72502C11.125 8.89377 11.125 7.81252 9.9625 7.81252C8.8 7.81252 8.625 8.72502 8.625 9.64377V13.175H6.4V6.12502H8.475V7.06252H8.51875C8.73143 6.69316 9.04155 6.38937 9.41522 6.18435C9.78888 5.97933 10.2117 5.88097 10.6375 5.90002C12.8812 5.90002 13.3 7.40002 13.3 9.30627V13.2125Z"
                                                    fill="#FFD335" />
                                                <path
                                                    d="M14.3812 0.50002H1.61875C1.32795 0.498272 1.04803 0.610457 0.838927 0.812551C0.629823 1.01465 0.508163 1.29058 0.5 1.58127V14.375C0.506563 14.6662 0.627723 14.9431 0.837178 15.1455C1.04663 15.348 1.32748 15.4596 1.61875 15.4563H14.3812C14.6725 15.4596 14.9534 15.348 15.1628 15.1455C15.3723 14.9431 15.4934 14.6662 15.5 14.375V1.58127C15.4918 1.29058 15.3702 1.01465 15.1611 0.812551C14.952 0.610457 14.672 0.498272 14.3812 0.50002V0.50002ZM4.94375 13.2563H2.74375V6.12502H4.94375V13.2563ZM3.86875 5.13127C3.53097 5.13137 3.20655 4.99936 2.9648 4.76345C2.72306 4.52755 2.58316 4.20645 2.575 3.86877C2.56888 3.69723 2.59816 3.52626 2.66102 3.36653C2.72387 3.2068 2.81895 3.06172 2.94032 2.94034C3.0617 2.81897 3.20678 2.72389 3.36651 2.66104C3.52624 2.59818 3.69721 2.5689 3.86875 2.57502C4.19553 2.59777 4.50151 2.74364 4.72494 2.98317C4.94838 3.2227 5.07263 3.53808 5.07263 3.86565C5.07263 4.19321 4.94838 4.50859 4.72494 4.74812C4.50151 4.98765 4.19553 5.13352 3.86875 5.15627V5.13127ZM13.3 13.2125H11.125V9.72502C11.125 8.89377 11.125 7.81252 9.9625 7.81252C8.8 7.81252 8.625 8.72502 8.625 9.64377V13.175H6.4V6.12502H8.475V7.06252H8.51875C8.73143 6.69316 9.04155 6.38937 9.41522 6.18435C9.78888 5.97933 10.2117 5.88097 10.6375 5.90002C12.8812 5.90002 13.3 7.40002 13.3 9.30627V13.2125Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 0.25C6.9714 0.263815 5.01064 0.982071 3.45313 2.2819C1.89562 3.58172 0.838154 5.38235 0.461624 7.37574C0.085095 9.36913 0.412903 11.4314 1.38897 13.2098C2.36504 14.9882 3.92871 16.3722 5.8125 17.125C5.68589 16.2965 5.68589 15.4535 5.8125 14.625L6.84375 10.25C6.68055 9.85378 6.59974 9.42847 6.60625 9C6.60625 7.7875 7.3125 6.875 8.1875 6.875C8.34601 6.87262 8.50317 6.90452 8.6482 6.96853C8.79323 7.03255 8.92272 7.12715 9.02778 7.24587C9.13284 7.36458 9.21101 7.50461 9.25691 7.65635C9.30282 7.80808 9.31538 7.96795 9.29375 8.125C9.29375 8.875 8.81875 10 8.56875 11.0375C8.51494 11.231 8.50854 11.4346 8.5501 11.6311C8.59165 11.8275 8.67993 12.0111 8.80747 12.1662C8.93501 12.3214 9.09805 12.4435 9.28278 12.5223C9.46752 12.601 9.66851 12.6341 9.86875 12.6188C11.4187 12.6188 12.6187 10.975 12.6187 8.6125C12.6343 8.13243 12.5497 7.65438 12.3702 7.20885C12.1907 6.76331 11.9203 6.36009 11.5763 6.02488C11.2323 5.68968 10.8222 5.42987 10.3721 5.26201C9.92209 5.09416 9.442 5.02195 8.9625 5.05C8.45056 5.02801 7.93948 5.11013 7.4602 5.29139C6.98092 5.47264 6.5434 5.74927 6.17412 6.10452C5.80485 6.45977 5.5115 6.88626 5.31184 7.35817C5.11217 7.83008 5.01033 8.33759 5.0125 8.85C5.00555 9.56384 5.22429 10.2616 5.6375 10.8438C5.66754 10.8771 5.68895 10.9174 5.69984 10.961C5.71074 11.0046 5.71079 11.0501 5.7 11.0938C5.63125 11.3688 5.48125 11.9688 5.45625 12.0875C5.43125 12.2063 5.325 12.2812 5.1625 12.2062C4.06875 11.6937 3.3875 10.1 3.3875 8.8125C3.3875 6.05625 5.39375 3.51875 9.16875 3.51875C12.2 3.51875 14.5625 5.68125 14.5625 8.575C14.5625 11.5875 12.6875 14.0125 10.0187 14.0125C9.62751 14.0261 9.23907 13.9418 8.8887 13.7671C8.53834 13.5925 8.23715 13.3331 8.0125 13.0125L7.46875 15.0938C7.20809 15.9026 6.84247 16.6738 6.38125 17.3875C7.23111 17.6387 8.11386 17.7609 9 17.75C11.3206 17.75 13.5462 16.8281 15.1872 15.1872C16.8281 13.5462 17.75 11.3206 17.75 9C17.75 6.67936 16.8281 4.45376 15.1872 2.81282C13.5462 1.17187 11.3206 0.25 9 0.25"
                                                    fill="#FFD335" />
                                                <path
                                                    d="M9 0.25C6.9714 0.263815 5.01064 0.982071 3.45313 2.2819C1.89562 3.58172 0.838154 5.38235 0.461624 7.37574C0.085095 9.36913 0.412903 11.4314 1.38897 13.2098C2.36504 14.9882 3.92871 16.3722 5.8125 17.125C5.68589 16.2965 5.68589 15.4535 5.8125 14.625L6.84375 10.25C6.68055 9.85378 6.59974 9.42847 6.60625 9C6.60625 7.7875 7.3125 6.875 8.1875 6.875C8.34601 6.87262 8.50317 6.90452 8.6482 6.96853C8.79323 7.03255 8.92272 7.12715 9.02778 7.24587C9.13284 7.36458 9.21101 7.50461 9.25691 7.65635C9.30282 7.80808 9.31538 7.96795 9.29375 8.125C9.29375 8.875 8.81875 10 8.56875 11.0375C8.51494 11.231 8.50854 11.4346 8.5501 11.6311C8.59165 11.8275 8.67993 12.0111 8.80747 12.1662C8.93501 12.3214 9.09805 12.4435 9.28278 12.5223C9.46752 12.601 9.66851 12.6341 9.86875 12.6188C11.4187 12.6188 12.6187 10.975 12.6187 8.6125C12.6343 8.13243 12.5497 7.65438 12.3702 7.20885C12.1907 6.76331 11.9203 6.36009 11.5763 6.02488C11.2323 5.68968 10.8222 5.42987 10.3721 5.26201C9.92209 5.09416 9.442 5.02195 8.9625 5.05C8.45056 5.02801 7.93948 5.11013 7.4602 5.29139C6.98092 5.47264 6.5434 5.74927 6.17412 6.10452C5.80485 6.45977 5.5115 6.88626 5.31184 7.35817C5.11217 7.83008 5.01033 8.33759 5.0125 8.85C5.00555 9.56384 5.22429 10.2616 5.6375 10.8438C5.66754 10.8771 5.68895 10.9174 5.69984 10.961C5.71074 11.0046 5.71079 11.0501 5.7 11.0938C5.63125 11.3688 5.48125 11.9688 5.45625 12.0875C5.43125 12.2063 5.325 12.2812 5.1625 12.2062C4.06875 11.6937 3.3875 10.1 3.3875 8.8125C3.3875 6.05625 5.39375 3.51875 9.16875 3.51875C12.2 3.51875 14.5625 5.68125 14.5625 8.575C14.5625 11.5875 12.6875 14.0125 10.0187 14.0125C9.62751 14.0261 9.23907 13.9418 8.8887 13.7671C8.53834 13.5925 8.23715 13.3331 8.0125 13.0125L7.46875 15.0938C7.20809 15.9026 6.84247 16.6738 6.38125 17.3875C7.23111 17.6387 8.11386 17.7609 9 17.75C11.3206 17.75 13.5462 16.8281 15.1872 15.1872C16.8281 13.5462 17.75 11.3206 17.75 9C17.75 6.67936 16.8281 4.45376 15.1872 2.81282C13.5462 1.17187 11.3206 0.25 9 0.25"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.3817 2.7875C17.2821 2.41753 17.0871 2.0802 16.8162 1.80927C16.5453 1.53835 16.2079 1.34334 15.838 1.24375C14.4755 0.875 9.00047 0.875 9.00047 0.875C9.00047 0.875 3.52547 0.875 2.16297 1.24375C1.79299 1.34334 1.45567 1.53835 1.18474 1.80927C0.913819 2.0802 0.718806 2.41753 0.61922 2.7875C0.364811 4.17704 0.241353 5.58739 0.25047 7C0.241353 8.41261 0.364811 9.82296 0.61922 11.2125C0.718806 11.5825 0.913819 11.9198 1.18474 12.1907C1.45567 12.4617 1.79299 12.6567 2.16297 12.7563C3.52547 13.125 9.00047 13.125 9.00047 13.125C9.00047 13.125 14.4755 13.125 15.838 12.7563C16.2079 12.6567 16.5453 12.4617 16.8162 12.1907C17.0871 11.9198 17.2821 11.5825 17.3817 11.2125C17.6361 9.82296 17.7596 8.41261 17.7505 7C17.7596 5.58739 17.6361 4.17704 17.3817 2.7875V2.7875ZM7.25047 9.625V4.375L11.7942 7L7.25047 9.625Z"
                                                    fill="#FFD335" />
                                                <path
                                                    d="M17.3817 2.7875C17.2821 2.41753 17.0871 2.0802 16.8162 1.80927C16.5453 1.53835 16.2079 1.34334 15.838 1.24375C14.4755 0.875 9.00047 0.875 9.00047 0.875C9.00047 0.875 3.52547 0.875 2.16297 1.24375C1.79299 1.34334 1.45567 1.53835 1.18474 1.80927C0.913819 2.0802 0.718806 2.41753 0.61922 2.7875C0.364811 4.17704 0.241353 5.58739 0.25047 7C0.241353 8.41261 0.364811 9.82296 0.61922 11.2125C0.718806 11.5825 0.913819 11.9198 1.18474 12.1907C1.45567 12.4617 1.79299 12.6567 2.16297 12.7563C3.52547 13.125 9.00047 13.125 9.00047 13.125C9.00047 13.125 14.4755 13.125 15.838 12.7563C16.2079 12.6567 16.5453 12.4617 16.8162 12.1907C17.0871 11.9198 17.2821 11.5825 17.3817 11.2125C17.6361 9.82296 17.7596 8.41261 17.7505 7C17.7596 5.58739 17.6361 4.17704 17.3817 2.7875V2.7875ZM7.25047 9.625V4.375L11.7942 7L7.25047 9.625Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main">
            <div class="container">
                <div class="header-one-wrapper">
                    <div class="left-side-header">
                        <a href="{{ url('/') }}" class="logo-area">
                            <img src="{{ asset('assets/images/logo.png') }}" width="80px" alt="logo">
                        </a>
                    </div>

                    <div class="main-nav-one">
                        <nav>
                            <ul>
                                <li style="position: static;">
                                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ url('/Contact') }}">Contact</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ url('/About') }}">About Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="header-right-area-one">
                        <div class="buttons-area">
                            <a href="{{ url('/Contact') }}" class="rts-btn btn-primary">View More</a>
                        </div>
                        <div class="menu-btn" id="menu-btn">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                <rect width="20" height="2" fill="#1F1F25"></rect>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header style end -->
    <!-- header style end -->

    <!-- Bread-Crumb style -->

    <!-- bread crumb area -->
    <div class="rts-breadcrumb-area rts-section-gap bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main-wrapper">
                        <div class="pagination-wrapper">
                            <a href="#">Home</a>
                            <i class="fa-regular fa-chevron-right"></i>
                            <a class="active" href="{{ url('/Contact') }}">Contact Us</a>
                        </div>
                        <!-- breadcrumb pagination area -->
                        <h2 class="title">Contact Us</h2>
                        <!-- breadcrumb pagination area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread crumb area end -->

    <!-- Bread-Crumb style End -->

    <!-- course area start -->
    <section class="rts-contact-area rts-section-gap inner">
        <div class="container">
            <div class="section-title-area text-center">
                <p class="pre-title justify-content-center"><img src="assets/images/banner/title-img.svg"
                        alt="">Get In Touch</p>
                <h2 class="section-title">Needs Help? Let’s Get in Touch</h2>
            </div>
            <div class="section-inner">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="get-in-touch">
                            <ul class="contact-wrapper-list">
                                <li class="phone bg-two">
                                    <div class="icon">
                                        <img src="assets/images/icon/phone.svg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Phone</h4>
                                        <p class="desc"><a href="#"> +92 313 0567126 <br>
                                                0995 6128026
                                            </a></p>
                                    </div>
                                </li>
                                <li class="phone bg-four">
                                    <div class="icon">
                                        <img src="assets/images/icon/mail.svg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Email Address</h4>
                                        <p class="desc"><a href="#">
                                                info@alhamdschool.com
                                                <br>
                                                alhamdislmic@gmail.com
                                            </a></p>
                                    </div>
                                </li>
                                <li class="phone bg-one">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icon/location.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Location Address</h4>
                                        <p class="desc">Mohalla Rarrieyan, Malkiyar, Haripur</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form action="mailto:alhamdislmic@gmail.com" class="contact-form">
                            <h3 class="heading-title">Send Us Message</h3>
                            <div class="form-inner">
                                <div class="single-input">
                                    <input type="text" name="Name" placeholder="Your Name" required>
                                </div>
                                <div class="single-input">
                                    <input type="email" name="Email" placeholder="Email Address" required>
                                </div>
                                <div class="single-input">
                                    <input type="text" name="Number" placeholder="Phone Number" required>
                                </div>
                                <div class="single-input">
                                    <div class="left-filter">
                                        <select class="nice-select" name="price">
                                            <option>Subject</option>
                                            <option value="admission">Admission</option>
                                            <option value="fees">Fees</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="single-input message">
                                    <textarea name="Message" placeholder="Message" required></textarea>
                                </div>
                                <div class="form-btn">
                                    <button type="submit" class="rts-btn btn-primary">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course area end -->
    <div class="rts-footer-area section-bg">
        <div class="container">
            <div class="footer-top">
                <form action="{{ route('subscribe') }}" method="POST">
                    @csrf
                    <h3 class="form-title">Don’t Miss Awesome Story From Our Alumni</h3>
                    <div class="form-inner">
                        <input type="email" name="Email" placeholder="Enter Your mail" required>
                        <button type="submit" class="rts-btn btn-primary border-radius">Subscribe Now</button>
                    </div>
                </form>
            </div>
            <div class="row ptb--65">
                <div class="col-lg-12">
                    <!-- footer main wrapper -->
                    <div class="footer-one-main-wrapper">
                        <!-- single sized  footer  -->
                        <div class="footer-single-wized left-logo">
                            <div class="head">
                                <a href="#">
                                    <img src="{{ asset('assets/images/logo.png') }}" width="100px" alt="logo"
                                        loading="lazy">
                                </a>
                            </div>
                            <div class="body">
                                <p class="dsic">
                                    We are passionate education dedicated to providing high-quality resources learners
                                    all backgrounds.
                                </p>
                                <ul class="wrapper-list">
                                    <li><i class="fa-regular fa-location-dot"></i>Mohalla Rarrieyan, Malkiyar, Haripur
                                    </li>
                                    <li><i class="fa-regular fa-phone"></i><a href="tel:+92 313 0567126">
                                            +92 313 0567126</a></li>
                                    <li><i class="fa-regular fa-envelope"></i>
                                        info@alhamdschool.com</li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sized  footer end -->
                        <!-- single sized  footer  -->
                        <div class="footer-single-wized">
                            <div class="head">
                                <h6 class="title">About {{ env('APP_NAME') }}</h6>
                            </div>
                            <div class="body">
                                <ul class="menu">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/About') }}">About Us</a></li>
                                    <li><a href="{{ url('/Contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sized  footer end -->
                    </div>
                    <!-- footer main wrapper end -->
                </div>
            </div>
        </div>
        <div class="copyright-area-one-border">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-area-one">
                            <p>Copyright © 2024 All Rights Reserved by {{ env('APP_NAME') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer call to action area end -->
    <!-- header style two -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk">
            <div class="inner-content">
                <h4 class="title">We Build Building and Great Constructive Homes.</h4>
                <p class="disc">
                    We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly
                    master new technologies.
                </p>
                <div class="footer">
                    <h4 class="title">Got a project in mind?</h4>
                    <a href="{{ url('/Contact') }}" class="rts-btn btn-primary">Let's talk</a>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li>
                        <a href="{{ url('/') }}" class="main">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/About') }}" class="main">About Us</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/Contact') }}" class="main">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="rts-social-style-one pl--20 mt--50">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/share/15VMcb2n5v/">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/@Al-hamdIslamicSchoolMalkiyar">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->

    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="txt-loading">
                <span data-text-preloader="A" class="letters-loading first">
                    A
                </span>
                <span data-text-preloader="L" class="letters-loading first">
                    L
                </span>
                <span data-text-preloader="H" class="letters-loading first">
                    H
                </span>
                <span data-text-preloader="A" class="letters-loading first">
                    A
                </span>
                <span data-text-preloader="M" class="letters-loading first">
                    M
                </span>
                <span data-text-preloader="D" class="letters-loading">
                    D
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- rts backto top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- rts backto top end -->

    <!-- offcanvase search -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <!-- offcanvase search -->
    <div id="anywhere-home" class="">
    </div>

    <!-- all scripts -->
    <!-- jquery min js -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <!-- jquery ui js -->
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <!-- metismenu js -->
    <script src="assets/js/vendor/metismenu.js"></script>
    <!-- magnific popup js-->
    <script src="assets/js/vendor/magnifying-popup.js"></script>
    <!-- swiper JS 10.2.0 -->
    <script src="assets/js/plugins/swiper.js"></script>
    <!-- counterup js -->
    <script src="assets/js/plugins/counterup.js"></script>
    <!-- waypoint js -->
    <script src="assets/js/vendor/waypoint.js"></script>
    <!-- wow js -->
    <script src="assets/js/vendor/waw.js"></script>
    <!-- isotop mesonary -->
    <script src="assets/js/plugins/isotop.js"></script>
    <!-- jquery imageloaded -->
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- resize sensor js -->
    <script src="assets/js/plugins/resizer-sensor.js"></script>
    <!-- sticky sidebar -->
    <script src="assets/js/plugins/sticky-sidebar.js"></script>
    <!-- gsap twinmax js -->
    <script src="assets/js/plugins/twinmax.js"></script>
    <!-- chroma js -->
    <script src="assets/js/vendor/chroma.min.js"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <!-- dymanic Contact Form -->
    <script src="assets/js/plugins/contact.form.js"></script>
    <!-- calender js -->
    <script src="assets/js/plugins/calender.js"></script>
    <!-- main Js -->
    <script src="assets/js/main.js"></script>


</body>

</html>
