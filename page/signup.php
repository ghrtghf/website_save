<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Регистрация</title>
	<link type="image/x-icon" rel="shortcut icon" href="../assets/favicon/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png" />
	<link type="image/png" sizes="192x192" rel="icon" href="../assets/favicon/android-chrome-192x192.png" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="stylesheet" href="../css/style.css" />
</head>

<body data-barba="wrapper">
	<div class="app">
		<div class="fade" data-barba="container" data-barba-namespace="signup">
			<div class="signup">
				<div class="signup__content">
					<div class="signup__header">
						<a href="../">
							<h1 class="signup__title"><img src="../assets/signup/logo.png" alt="Logo" class="logo"><span>Save's</span></h1>
						</a>
						<h2 class="signup__subtitle">Создать аккаунт</h2>
						<button class="signup__button-gosuslugi"><img src="../assets/signup/gosuslugi.svg" alt="Gosuslugi">Создать через Госуслуги</button>
						<div class="signup__or">
							<hr />
							<p>Или</p>
							<hr />
						</div>
					</div>
					<form method="POST" class="signup__form">
						<div class="signup__form-label">
							<input type="text" name="full_name" placeholder="ФИО" class="signup__form-input signup__form-input_name" id="name">
							<label for="name">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="signup__form-name">
									<path d="M12 5.25C9.72188 5.25 7.875 7.09688 7.875 9.375C7.875 11.6531 9.72188 13.5 12 13.5C14.2781 13.5 16.125 11.6531 16.125 9.375C16.125 7.09688 14.2781 5.25 12 5.25ZM12 11.25C10.9659 11.25 10.125 10.4086 10.125 9.375C10.125 8.33906 10.9641 7.5 12 7.5C13.0359 7.5 13.875 8.34094 13.875 9.375C13.875 10.4109 13.0359 11.25 12 11.25ZM12 0C5.37188 0 0 5.37188 0 12C0 18.6281 5.37188 24 12 24C18.6281 24 24 18.6281 24 12C24 5.37188 18.6281 0 12 0ZM12 21.75C9.80953 21.75 7.7925 21.015 6.16406 19.7911C6.975 18.2344 8.55 17.25 10.3219 17.25H13.6823C15.4519 17.25 17.025 18.2348 17.8392 19.7911C16.2094 21.0141 14.1891 21.75 12 21.75ZM19.5094 18.2109C18.2438 16.2328 16.0875 15 13.6781 15H10.3219C7.91437 15 5.75859 16.2305 4.49063 18.21C3.09188 16.5234 2.25 14.3578 2.25 12C2.25 6.62344 6.62391 2.25 12 2.25C17.3761 2.25 21.75 6.62391 21.75 12C21.75 14.3578 20.9062 16.5234 19.5094 18.2109Z" fill="var(--color-main)" fill-opacity="0.25" />
								</svg>
							</label>
						</div>
						<div class="signup__form-label">
							<input data-signEmail type="text" name="email" placeholder="Адрес почты" class="signup__form-input signup__form-input_mail" id="email" />
							<label for="email">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="22" viewBox="0 0 25 22" fill="none" class="signup__form-mail">
									<path d="M24 3.30351C24 1.98748 22.9504 0.920639 21.6557 0.920639H2.34432C1.04958 0.920639 0 1.98748 0 3.30351V18.8354C0 20.1514 1.04958 21.2183 2.34432 21.2183H21.6557C22.9504 21.2183 24 20.1514 24 18.8354V3.30351ZM2.35688 2.82489H21.6741C21.9326 2.82489 22.1407 3.03448 22.1407 3.29729V3.31797L12.3465 13.2743C12.2271 13.3957 12.0881 13.4139 12.0156 13.4139C11.9431 13.4139 11.8036 13.3957 11.6841 13.2743L1.88764 3.31661V3.29729C1.88764 3.03448 2.09835 2.82489 2.35688 2.82489ZM21.6741 19.314H2.35688C2.09835 19.314 1.88764 19.0964 1.88764 18.8336V6.01251L10.3583 14.6223C10.8011 15.0723 11.3899 15.3202 12.016 15.3202C12.6423 15.3201 13.2299 15.0722 13.6727 14.6222L22.1407 6.01385V18.8336C22.1407 19.0964 21.9326 19.314 21.6741 19.314Z" fill="var(--color-main)" fill-opacity="0.25" />
								</svg>
							</label>
						</div>

						<div class="signup__row">
							<label class="signup__form-label">
								<input type="text" name="phone" placeholder="Телефон" class="signup__form-input signup__form-input_tel">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="signup__form-tel">
									<path d="M17.4065 23.7517C16.4823 23.7448 15.5622 23.6288 14.6653 23.4061C11.5678 22.6587 8.37819 20.7629 5.68543 18.0678C2.99266 15.3727 1.09449 12.1825 0.347151 9.08796C-0.439765 5.83277 0.121474 3.04784 1.92571 1.2436L2.44087 0.728443C2.90827 0.261978 3.54164 0 4.20198 0C4.86232 0 5.49569 0.261978 5.96309 0.728443L8.92348 3.68824C9.39024 4.15549 9.65241 4.78892 9.65241 5.44935C9.65241 6.10979 9.39024 6.74322 8.92348 7.21046L7.17478 8.95858C8.01309 10.4296 9.1533 11.9018 10.5009 13.2494C11.8484 14.597 13.3218 15.7378 14.7923 16.5761L16.5404 14.8274C16.7716 14.596 17.0462 14.4125 17.3484 14.2873C17.6505 14.1621 17.9744 14.0977 18.3015 14.0977C18.6286 14.0977 18.9525 14.1621 19.2546 14.2873C19.5568 14.4125 19.8314 14.596 20.0626 14.8274L23.0224 17.7872C23.4893 18.2542 23.7515 18.8876 23.7515 19.548C23.7515 20.2084 23.4893 20.8417 23.0224 21.3088L22.5067 21.824C21.2347 23.0983 19.4742 23.7517 17.4065 23.7517ZM4.20198 1.77117C4.10765 1.7707 4.01418 1.78906 3.92704 1.82517C3.8399 1.86129 3.76084 1.91443 3.6945 1.98148L3.17875 2.49664C1.82764 3.84775 1.433 6.04131 2.0675 8.66969C2.73921 11.454 4.46842 14.3471 6.9361 16.8142C9.40379 19.2812 12.2962 21.0087 15.0812 21.6828C17.7101 22.3173 19.9025 21.9226 21.2536 20.5715L21.7688 20.0564C21.9034 19.9216 21.979 19.739 21.979 19.5486C21.979 19.3581 21.9034 19.1755 21.7688 19.0408L18.8096 16.081C18.6749 15.9464 18.4922 15.8708 18.3018 15.8708C18.1114 15.8708 17.9287 15.9464 17.794 16.081L15.578 18.297C15.445 18.4301 15.2732 18.5173 15.0873 18.5462C14.9015 18.5751 14.7112 18.5441 14.5441 18.4577C12.7275 17.5184 10.8961 16.1507 9.24782 14.5024C7.59955 12.8542 6.23485 11.0239 5.29315 9.2073C5.20667 9.04028 5.17557 8.85008 5.20435 8.66422C5.23314 8.47835 5.3203 8.30647 5.45325 8.17343L7.66985 5.95742C7.80445 5.82272 7.88006 5.64008 7.88006 5.44965C7.88006 5.25922 7.80445 5.07658 7.66985 4.94187L4.71005 1.98148C4.6435 1.91454 4.56432 1.86148 4.4771 1.82538C4.38989 1.78928 4.29637 1.77085 4.20198 1.77117Z" fill="var(--color-main)" fill-opacity="0.25" />
									<path d="M18.3529 13.0981C18.1179 13.0981 17.8925 13.0048 17.7263 12.8386C17.5601 12.6724 17.4667 12.447 17.4667 12.212C17.465 10.6573 16.8467 9.16689 15.7475 8.06755C14.6483 6.96821 13.1579 6.34977 11.6033 6.3479C11.3682 6.3479 11.1428 6.25453 10.9766 6.08834C10.8105 5.92216 10.7171 5.69676 10.7171 5.46173C10.7171 5.2267 10.8105 5.0013 10.9766 4.83511C11.1428 4.66893 11.3682 4.57556 11.6033 4.57556C15.8137 4.57556 19.2391 8.00208 19.2391 12.212C19.2391 12.447 19.1457 12.6724 18.9795 12.8386C18.8133 13.0048 18.5879 13.0981 18.3529 13.0981Z" fill="var(--color-main)" fill-opacity="0.25" />
									<path d="M22.0984 13.0982C21.8634 13.0982 21.638 13.0048 21.4718 12.8386C21.3056 12.6724 21.2123 12.447 21.2123 12.212C21.2123 6.91332 16.8996 2.60241 11.6033 2.60241C11.3682 2.60241 11.1428 2.50905 10.9766 2.34286C10.8105 2.17667 10.7171 1.95127 10.7171 1.71625C10.7171 1.48122 10.8105 1.25582 10.9766 1.08963C11.1428 0.923442 11.3682 0.830078 11.6033 0.830078C17.8791 0.830078 22.9846 5.93618 22.9846 12.212C22.9846 12.447 22.8912 12.6724 22.725 12.8386C22.5589 13.0048 22.3335 13.0982 22.0984 13.0982Z" fill="var(--color-main)" fill-opacity="0.25" />
								</svg>
							</label>
							<label class="signup__form-label">
								<input type="text" name="date_birth" placeholder="Дата рождения" class="signup__form-input signup__form-input_calendar" />
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="signup__form-calendar">
									<path d="M20 2H19V1C19 0.734784 18.8946 0.48043 18.7071 0.292893C18.5196 0.105357 18.2652 0 18 0C17.7348 0 17.4804 0.105357 17.2929 0.292893C17.1054 0.48043 17 0.734784 17 1V2H7V1C7 0.734784 6.89464 0.48043 6.70711 0.292893C6.51957 0.105357 6.26522 0 6 0C5.73478 0 5.48043 0.105357 5.29289 0.292893C5.10536 0.48043 5 0.734784 5 1V2H4C2.93913 2 1.92172 2.42143 1.17157 3.17157C0.421427 3.92172 0 4.93913 0 6L0 20C0 21.0609 0.421427 22.0783 1.17157 22.8284C1.92172 23.5786 2.93913 24 4 24H20C21.0609 24 22.0783 23.5786 22.8284 22.8284C23.5786 22.0783 24 21.0609 24 20V6C24 4.93913 23.5786 3.92172 22.8284 3.17157C22.0783 2.42143 21.0609 2 20 2ZM22 20C22 20.5304 21.7893 21.0391 21.4142 21.4142C21.0391 21.7893 20.5304 22 20 22H4C3.46957 22 2.96086 21.7893 2.58579 21.4142C2.21071 21.0391 2 20.5304 2 20V6C2 5.46957 2.21071 4.96086 2.58579 4.58579C2.96086 4.21071 3.46957 4 4 4H5V5C5 5.26522 5.10536 5.51957 5.29289 5.70711C5.48043 5.89464 5.73478 6 6 6C6.26522 6 6.51957 5.89464 6.70711 5.70711C6.89464 5.51957 7 5.26522 7 5V4H17V5C17 5.26522 17.1054 5.51957 17.2929 5.70711C17.4804 5.89464 17.7348 6 18 6C18.2652 6 18.5196 5.89464 18.7071 5.70711C18.8946 5.51957 19 5.26522 19 5V4H20C20.5304 4 21.0391 4.21071 21.4142 4.58579C21.7893 4.96086 22 5.46957 22 6V20Z" fill="var(--color-main)" fill-opacity="0.25" />
									<path d="M19 7H5C4.73478 7 4.48043 7.10536 4.29289 7.29289C4.10536 7.48043 4 7.73478 4 8C4 8.26522 4.10536 8.51957 4.29289 8.70711C4.48043 8.89464 4.73478 9 5 9H19C19.2652 9 19.5196 8.89464 19.7071 8.70711C19.8946 8.51957 20 8.26522 20 8C20 7.73478 19.8946 7.48043 19.7071 7.29289C19.5196 7.10536 19.2652 7 19 7Z" fill="var(--color-main)" fill-opacity="0.25" />
									<path d="M7 12H5C4.73478 12 4.48043 12.1054 4.29289 12.2929C4.10536 12.4804 4 12.7348 4 13C4 13.2652 4.10536 13.5196 4.29289 13.7071C4.48043 13.8946 4.73478 14 5 14H7C7.26522 14 7.51957 13.8946 7.70711 13.7071C7.89464 13.5196 8 13.2652 8 13C8 12.7348 7.89464 12.4804 7.70711 12.2929C7.51957 12.1054 7.26522 12 7 12Z" fill="var(--color-main)" fill-opacity="0.25" />
									<path d="M7 17H5C4.73478 17 4.48043 17.1054 4.29289 17.2929C4.10536 17.4804 4 17.7348 4 18C4 18.2652 4.10536 18.5196 4.29289 18.7071C4.48043 18.8946 4.73478 19 5 19H7C7.26522 19 7.51957 18.8946 7.70711 18.7071C7.89464 18.5196 8 18.2652 8 18C8 17.7348 7.89464 17.4804 7.70711 17.2929C7.51957 17.1054 7.26522 17 7 17Z" fill="var(--color-main)" fill-opacity="0.25" />
									<path d="M13 12H11C10.7348 12 10.4804 12.1054 10.2929 12.2929C10.1054 12.4804 10 12.7348 10 13C10 13.2652 10.1054 13.5196 10.2929 13.7071C10.4804 13.8946 10.7348 14 11 14H13C13.2652 14 13.5196 13.8946 13.7071 13.7071C13.8946 13.5196 14 13.2652 14 13C14 12.7348 13.8946 12.4804 13.7071 12.2929C13.5196 12.1054 13.2652 12 13 12Z" fill="var(--color-main)" fill-opacity="0.25" />
									<path d="M13 17H11C10.7348 17 10.4804 17.1054 10.2929 17.2929C10.1054 17.4804 10 17.7348 10 18C10 18.2652 10.1054 18.5196 10.2929 18.7071C10.4804 18.8946 10.7348 19 11 19H13C13.2652 19 13.5196 18.8946 13.7071 18.7071C13.8946 18.5196 14 18.2652 14 18C14 17.7348 13.8946 17.4804 13.7071 17.2929C13.5196 17.1054 13.2652 17 13 17Z" fill="var(--color-main)" fill-opacity="0.25" />
									<path d="M19 12H17C16.7348 12 16.4804 12.1054 16.2929 12.2929C16.1054 12.4804 16 12.7348 16 13C16 13.2652 16.1054 13.5196 16.2929 13.7071C16.4804 13.8946 16.7348 14 17 14H19C19.2652 14 19.5196 13.8946 19.7071 13.7071C19.8946 13.5196 20 13.2652 20 13C20 12.7348 19.8946 12.4804 19.7071 12.2929C19.5196 12.1054 19.2652 12 19 12Z" fill="var(--color-main)" fill-opacity="0.25" />
									<path d="M19 17H17C16.7348 17 16.4804 17.1054 16.2929 17.2929C16.1054 17.4804 16 17.7348 16 18C16 18.2652 16.1054 18.5196 16.2929 18.7071C16.4804 18.8946 16.7348 19 17 19H19C19.2652 19 19.5196 18.8946 19.7071 18.7071C19.8946 18.5196 20 18.2652 20 18C20 17.7348 19.8946 17.4804 19.7071 17.2929C19.5196 17.1054 19.2652 17 19 17Z" fill="var(--color-main)" fill-opacity="0.25" />
								</svg>
							</label>
						</div>

						<div class="signup__form-label">
							<input type="password" id="lock" name="password" placeholder="Пароль" class="signup__form-input  signup__input" />
							<label for="lock">
								<svg xmlns="http://www.w3.org/2000/svg" width="21" height="27" viewBox="0 0 21 27" fill="none" class="signup__form-lock" id="lock">
									<path d="M18.375 26.25H2.625C1.92881 26.25 1.26113 25.9734 0.768845 25.4812C0.276562 24.9889 0 24.3212 0 23.625V14C0 13.3038 0.276562 12.6361 0.768845 12.1438C1.26113 11.6516 1.92881 11.375 2.625 11.375H18.375C19.0712 11.375 19.7389 11.6516 20.2312 12.1438C20.7234 12.6361 21 13.3038 21 14V23.625C21 24.3212 20.7234 24.9889 20.2312 25.4812C19.7389 25.9734 19.0712 26.25 18.375 26.25ZM2.625 13.125C2.39294 13.125 2.17038 13.2172 2.00628 13.3813C1.84219 13.5454 1.75 13.7679 1.75 14V23.625C1.75 23.8571 1.84219 24.0796 2.00628 24.2437C2.17038 24.4078 2.39294 24.5 2.625 24.5H18.375C18.6071 24.5 18.8296 24.4078 18.9937 24.2437C19.1578 24.0796 19.25 23.8571 19.25 23.625V14C19.25 13.7679 19.1578 13.5454 18.9937 13.3813C18.8296 13.2172 18.6071 13.125 18.375 13.125H2.625Z" fill="var(--color-main)" fill-opacity="0.25" />
									<path d="M17.5 13.125H3.5C3.26794 13.125 3.04538 13.0328 2.88128 12.8687C2.71719 12.7046 2.625 12.4821 2.625 12.25V7C2.625 5.14348 3.3625 3.36301 4.67525 2.05025C5.98801 0.737498 7.76848 0 9.625 0H11.375C13.2315 0 15.012 0.737498 16.3247 2.05025C17.6375 3.36301 18.375 5.14348 18.375 7V12.25C18.375 12.4821 18.2828 12.7046 18.1187 12.8687C17.9546 13.0328 17.7321 13.125 17.5 13.125ZM4.375 11.375H16.625V7C16.625 5.60761 16.0719 4.27226 15.0873 3.28769C14.1027 2.30312 12.7674 1.75 11.375 1.75H9.625C8.23261 1.75 6.89726 2.30312 5.91269 3.28769C4.92812 4.27226 4.375 5.60761 4.375 7V11.375Z" fill="var(--color-main)" fill-opacity="0.25" />
									<path d="M10.5 19.25C10.1539 19.25 9.81554 19.1474 9.52775 18.9551C9.23997 18.7628 9.01566 18.4895 8.88321 18.1697C8.75076 17.8499 8.7161 17.4981 8.78363 17.1586C8.85115 16.8191 9.01782 16.5073 9.26256 16.2626C9.50731 16.0178 9.81913 15.8512 10.1586 15.7836C10.4981 15.7161 10.8499 15.7508 11.1697 15.8832C11.4895 16.0157 11.7628 16.24 11.9551 16.5278C12.1474 16.8155 12.25 17.1539 12.25 17.5C12.25 17.9641 12.0656 18.4092 11.7374 18.7374C11.4092 19.0656 10.9641 19.25 10.5 19.25Z" fill="var(--color-main)" fill-opacity="0.25" />
									<path d="M11.375 18.375H9.625V21.875H11.375V18.375Z" fill="var(--color-main)" fill-opacity="0.25" />
								</svg>
							</label>
							<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="signup__cross">
								<path d="M1.18331 16.8167C1.41665 17.05 1.64998 17.1667 1.99998 17.1667C2.34998 17.1667 2.58331 17.05 2.81665 16.8167L8.99998 10.6333L15.1833 16.8167C15.4166 17.05 15.7666 17.1667 16 17.1667C16.2333 17.1667 16.5833 17.05 16.8166 16.8167C17.2833 16.35 17.2833 15.65 16.8166 15.1833L10.6333 9L16.8166 2.81667C17.2833 2.35 17.2833 1.65 16.8166 1.18334C16.35 0.716669 15.65 0.716669 15.1833 1.18334L8.99998 7.36667L2.81665 1.18334C2.34998 0.716669 1.64998 0.716669 1.18331 1.18334C0.716646 1.65 0.716646 2.35 1.18331 2.81667L7.36665 9L1.18331 15.1833C0.716646 15.65 0.716646 16.35 1.18331 16.8167Z" fill="var(--color-main)" fill-opacity="0.25" />
							</svg>
							<div class="signup__eyeClose-button">
								<svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="signup__eyeClose">
									<g clip-path="url(#clip0_32_12)">
										<path d="M20.93 16.445C18.9357 17.6394 16.5073 18.3011 14 18.3333C5.83335 18.3333 1.16669 11 1.16669 11C2.61789 8.87507 4.63068 7.01855 7.07002 5.555M11.55 3.88666C12.3531 3.73897 13.1753 3.66514 14 3.66666C22.1667 3.66666 26.8334 11 26.8334 11C26.1252 12.041 25.2806 13.021 24.3134 13.9242M16.4734 12.9433C16.1529 13.2135 15.7665 13.4302 15.3372 13.5805C14.9079 13.7308 14.4444 13.8117 13.9745 13.8182C13.5045 13.8247 13.0377 13.7568 12.6019 13.6184C12.1661 13.4801 11.7702 13.2743 11.4378 13.0131C11.1055 12.752 10.8435 12.4409 10.6674 12.0985C10.4914 11.7561 10.405 11.3893 10.4133 11.0201C10.4216 10.6508 10.5244 10.2867 10.7157 9.94936C10.907 9.61203 11.1828 9.30843 11.5267 9.05666" stroke="var(--color-main)" stroke-opacity="0.25" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M1.16669 0.916664L26.8334 21.0833" stroke="var(--color-main)" stroke-opacity="0.25" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									</g>
									<defs>
										<clipPath id="clip0_32_12">
											<rect width="28" height="22" fill="white" />
										</clipPath>
									</defs>
								</svg>
								<svg width="28" height="18" viewBox="0 0 28 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="signup__eye signup__eye-hidden ">
									<path d="M14.0035 18C9.73852 18 5.70252 16.193 2.63652 12.912C2.54689 12.816 2.47705 12.7033 2.43098 12.5803C2.38491 12.4573 2.36352 12.3265 2.36803 12.1952C2.37253 12.064 2.40284 11.9349 2.45723 11.8153C2.51162 11.6958 2.58902 11.5881 2.68502 11.4985C2.78102 11.4089 2.89373 11.339 3.01671 11.293C3.1397 11.2469 3.27056 11.2255 3.40182 11.23C3.53307 11.2345 3.66215 11.2648 3.7817 11.3192C3.90124 11.3736 4.00889 11.451 4.09852 11.547C6.78152 14.419 10.2985 16 14.0035 16C18.7665 16 23.1525 13.395 25.8435 9C23.1535 4.605 18.7665 2 14.0035 2C9.06552 2 4.53152 4.801 1.87352 9.493C1.8093 9.60824 1.72292 9.70963 1.61934 9.79133C1.51577 9.87304 1.39705 9.93344 1.27003 9.96907C1.143 10.0047 1.01019 10.0148 0.879231 9.99889C0.748274 9.98296 0.621763 9.94128 0.506987 9.87624C0.392212 9.8112 0.291439 9.72409 0.210476 9.61993C0.129512 9.51578 0.0699577 9.39663 0.0352431 9.26936C0.000528604 9.14208 -0.00865981 9.0092 0.00820719 8.87836C0.0250742 8.74752 0.0676633 8.62131 0.133521 8.507C3.15052 3.18 8.33652 0 14.0035 0C19.6715 0 24.8565 3.18 27.8735 8.507C27.9585 8.65722 28.0032 8.82689 28.0032 8.9995C28.0032 9.17211 27.9585 9.34178 27.8735 9.492C24.8565 14.819 19.6715 18 14.0035 18Z" fill="var(--color-main)" fill-opacity="0.25" />
									<path d="M14.0035 14C11.2465 14 9.00354 11.757 9.00354 9C9.00354 6.243 11.2465 4 14.0035 4C16.7605 4 19.0035 6.243 19.0035 9C19.0035 11.757 16.7605 14 14.0035 14ZM14.0035 6C12.3495 6 11.0035 7.346 11.0035 9C11.0035 10.654 12.3495 12 14.0035 12C15.6575 12 17.0035 10.654 17.0035 9C17.0035 7.346 15.6575 6 14.0035 6Z" fill="var(--color-main)" fill-opacity="0.25" />
								</svg>
							</div>
						</div>
						<div class="signup__validation validation">
							<div class="signup__min validation__item">
								<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="signup__tick validation__tick validation__hidden">
									<path d="M12 1a11 11 0 1 0 11 11A11 11 0 0 0 12 1Zm5.707 8.707-7 7a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 1.414-1.414L10 14.586l6.293-6.293a1 1 0 0 1 1.414 1.414Z" fill="var(--green)" class="fill-232323"></path>
								</svg>
								<img src="../assets/new.password/cross.svg" alt="Password cross" class="validation__cross" />
								<p class="validation__text">8 символов минимум</p>
							</div>
							<div class="signup__symbol validation__item">
								<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="signup__tick validation__tick validation__hidden">
									<path d="M12 1a11 11 0 1 0 11 11A11 11 0 0 0 12 1Zm5.707 8.707-7 7a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 1.414-1.414L10 14.586l6.293-6.293a1 1 0 0 1 1.414 1.414Z" fill="var(--green)" class="fill-232323"></path>
								</svg>
								<img src="../assets/new.password/cross.svg" alt="Password cross" class="validation__cross" />
								<p class="validation__text">1 специальный символ</p>
							</div>
							<div class="signup__number validation__item">
								<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="signup__tick validation__tick validation__hidden">
									<path d="M12 1a11 11 0 1 0 11 11A11 11 0 0 0 12 1Zm5.707 8.707-7 7a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 1.414-1.414L10 14.586l6.293-6.293a1 1 0 0 1 1.414 1.414Z" fill="var(--green)" class="fill-232323"></path>
								</svg>
								<img src="../assets/new.password/cross.svg" alt="Password cross" class="validation__cross" />
								<p class="validation__text">1 число</p>
							</div>
							<div class="signup__upper validation__item">
								<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="signup__tick validation__tick validation__hidden">
									<path d="M12 1a11 11 0 1 0 11 11A11 11 0 0 0 12 1Zm5.707 8.707-7 7a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 1.414-1.414L10 14.586l6.293-6.293a1 1 0 0 1 1.414 1.414Z" fill="var(--green)" class="fill-232323"></path>
								</svg>
								<img src="../assets/new.password/cross.svg" alt="Password cross" class="validation__cross" />
								<p class="validation__text">1 заглавная буква</p>
							</div>
						</div>
						<input type="submit" value="Создать" class="signup__form-submit signup__button" />
					</form>
					<div class="signup__toLogin">
						<p>Уже есть аккаунт? <a href="./login.php">Войти</a></p>
					</div>
				</div>
				<div class="signup__background">
				</div>
			</div>
		</div>
	</div>
	<script src="../js/lib/cleave.min.js"></script>
	<script src="../js/lib/cleave-phone.ru.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script type="module" src="../js/script.js"></script>
</body>

</html>