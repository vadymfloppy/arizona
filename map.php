<?  	
		/*			Arizona 24 v0.01                    
					CopyRight HackChik.Ru © 2024               
																			*/							
    session_start();
    
    define('HackChik', true);
	
	$action = stripslashes(htmlspecialchars(trim($_GET['action'])));
	
	$url = explode('/', $action);
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charSet="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>SAMP: Играй в GTA San Andreas Multiplayer на Arizona RP | 24/7 | На ПК и телефоне</title>
        <meta name="next-head-count" content="3"/>
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous"/>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png"/>
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png"/>
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png"/>
        <link rel="canonical" href="https://arizona-rp.com"/>
        <meta name="description" content="Играй в GTA SAMP с самым большим русскоязычным комьюнити в GTA Online. Начни играть в GTA San Andreas по сети на Arizona RolePlay с телефона или ПК всего в пару кликов прямо сейчас!"/>
        <meta property="og:title" content="SAMP: Играй в GTA San Andreas Multiplayer на Arizona RP | 24/7 | На ПК и телефоне"/>
        <meta property="og:description" content="Играй в GTA SAMP с самым большим русскоязычным комьюнити в GTA Online. Начни играть в GTA San Andreas по сети на Arizona RolePlay с телефона или ПК всего в пару кликов прямо сейчас!"/>
        <meta property="og:site_name" name="og:site_name" content="Arizona RP SAMP"/>
        <meta property="og:image" content="https://your-website.com/og-image.png"/>
        <meta property="og:url" content="https://arizona-rp.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link rel="preload" href="/_next/static/css/b9ad8607d79a2bb2.css" as="style"/>
        <link rel="stylesheet" href="/_next/static/css/b9ad8607d79a2bb2.css" data-n-g=""/>
        <link rel="preload" href="/_next/static/css/113926dcb15ccdbf.css" as="style"/>
        <link rel="stylesheet" href="/_next/static/css/113926dcb15ccdbf.css" data-n-p=""/>
        <noscript data-n-css=""></noscript>
        <script defer="" nomodule="" src="/_next/static/chunks/polyfills-c67a75d1b6f99dc8.js"></script>
        <script src="/_next/static/chunks/webpack-160ed8a1a53c79a2.js" defer=""></script>
        <script src="/_next/static/chunks/framework-2c79e2a64abdb08b.js" defer=""></script>
        <script src="/_next/static/chunks/main-e64495591397ff84.js" defer=""></script>
        <script src="/_next/static/chunks/pages/_app-fd83f146736aa145.js" defer=""></script>
        <script src="/_next/static/chunks/pages/index-0e5d6f5f990e2b55.js" defer=""></script>
        <script src="/_next/static/04ndh8U2LrPoA4SG-wQAH/_buildManifest.js" defer=""></script>
        <script src="/_next/static/04ndh8U2LrPoA4SG-wQAH/_ssgManifest.js" defer=""></script>
        <style data-href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;800&family=Sofia+Sans:ital,wght@0,700;0,800;1,700"></style>
    </head>
	<body>
        <div id="__next">
            <div class="popupLayout_layout__wznbS popupLayout_hidden_layout__7Is8J">
                <div class="popupLayout_wrapper__Adjr4">
                    <div class="popupLayout_container__h9myb popupLayout_hidden__dfr9q container_container__ilA55"></div>
                </div>
            </div>
            <header class="header_header__he2jd">
                <div class="mobile_mobile__vdWLm mobile_hidden__OLCCc">
                    <img alt="backgroundMobile" loading="lazy" width="375" height="812" decoding="async" data-nimg="1" class="mobile_bg_mobile__11_5o" style="color:transparent" src="/_next/static/media/backgroundMobile.8e151191.webp"/>
                    <div class="mobile_mobile_inner__RRnXj">
                        <nav>
                            <ul class="menu_column__t03Ll mobile_menu_mobile__AxJW3">
                                <li class="link_big_light__m5b7_ menu_border__pS1Wm">
                                    <a target="" href="/">
                                        <div></div>
                                        Главная
                                    </a>
                                </li>
                                <li class="link_big_light__m5b7_">
                                    <a target="" href="/shop">
                                        <div></div>
                                        Магазин
                                    </a>
                                </li>
                                <li class="link_big_light__m5b7_">
                                    <a target="" href="https://forum.arizona-rp.com/">
                                        <div></div>
                                        Форум
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <footer class="mobile_button_row__aULNT">
                            <button type="button" class="button_black__fCObR mobile_wide__coPYp">
                                <span class="">Кабинет →</span>
                            </button>
                            <button type="button" class="button_pink__HPFi2 mobile_wide__coPYp">
                                <span class="">Начать игру</span>
                                <div class="button_icon__pfHI_">
                                    <img alt="[object Object]" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="/_next/static/media/start_game.75f9533a.svg"/>
                                </div>
                            </button>
                        </footer>
                    </div>
                </div>
                <div class="container_container__ilA55">
                    <section class="header_content__p0Ex7">
                        <button type="button" class="button_pink__HPFi2 header_start_game__g_YhH">
                            <span class="">Начать игру</span>
                            <div class="button_icon__pfHI_">
                                <img alt="[object Object]" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="/_next/static/media/start_game.75f9533a.svg"/>
                            </div>
                        </button>
                        <div class="header_content_left__0VUrM">
                            <a class="logo_logo__Pf8Jf" href="/">
                                <img alt="logo" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="/_next/static/media/logo_icon.c39d536b.png"/>
                            </a>
                            <figure class="header_divider__h8mc_"></figure>
                            <nav>
                                <ul class="menu_row__bDrsS header_menu__ePhJ1">
                                    <li class="link_light__lkSAH menu_border__pS1Wm">
                                        <a target="" href="/">
                                            <div></div>
                                            Главная
                                        </a>
                                    </li>
                                    <li class="link_light__lkSAH">
                                        <a target="" href="/shop">
                                            <div></div>
                                            Магазин
                                        </a>
                                    </li>
                                    <li class="link_light__lkSAH">
                                        <a target="" href="https://forum.arizona-rp.com/">
                                            <div></div>
                                            Форум
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <button class="header_burger__2c_Qb">
                            <img alt="openBurgerIcon" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="/_next/static/media/open_burger.d75cc0ed.svg"/>
                        </button>
                        <nav class="header_content_right__Sj_ss">
                            <button type="button" class="button_black__fCObR button_default__3IFjQ" disabled="">
                                <div class="button_loading__xRyKH">
                                    <div class="button_animate__XIr6j">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <span class="button_hidden__KxGt7">Кабинет →</span>
                            </button>
                            <button type="button" class="button_pink__HPFi2 header_button__YAoZO">
                                <span class="">Начать игру</span>
                                <div class="button_icon__pfHI_">
                                    <img alt="[object Object]" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="/_next/static/media/start_game.75f9533a.svg"/>
                                </div>
                            </button>
                        </nav>
                    </section>
                </div>
            </header>
			<main class="min-h-screen">
                <div class="Toastify"></div>
                <section class="maps_section__Rzvvl">
                    <div class="maps_container___ph3b container_container__ilA55">
                        <header class="mapsSection_header__8_2fr">
                            <h1 class="mapsSection_title__qtMPq">Карта</h1>
                            <button type="button" class="button_download_transparent__DjOus mapsSection_back__HXwnq">
                                <span class="">Назад</span>
                            </button>
                        </header>
                        <div class="mapsSection_wrapper__9OUQu">
                            <div class="mapsSection_select_wrapper__We_rp">
                                <div class="form_label__cWZkH mapsSection_select__PwzIY">
                                    <h4 class="form_label_title__cL0ZW">Сервер</h4>
                                    <button class="form_form_select__DoLc0" type="button"></button>
                                    <span class="form_error__3VdLo"></span>
                                    <div class="form_options_wrapper__7ggYk">
                                        <ul class="form_options__B22ns"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
			
			
	 <footer class="footer_footer__5aMSc">
                <img alt="footerBg" loading="lazy" width="3456" height="893" decoding="async" data-nimg="1" class="footer_bg__N6gmr" style="color:transparent" src="/_next/static/media/footer_bg.4e632182.png"/>
                <img alt="footerBgMobile" loading="lazy" width="375" height="703" decoding="async" data-nimg="1" class="footer_bg_mobile__OwIDP" style="color:transparent" src="/_next/static/media/footer_bg_mobile.ec830f91.png"/>
                <div class="footer_container__sKRlk container_container__ilA55">
                    <div class="footer_left_side__rl8QO">
                        <figure class="footer_logo__L7nv5">
                            <a class="logo_logo__Pf8Jf" href="/">
                                <img alt="logo" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="/_next/static/media/logo_icon.c39d536b.png"/>
                            </a>
                            <p class="footer_sign__mI0r6">Arizona Games © 
                            <!-- -->
                            2024</p>
                        </figure>
                        <div class="footer_nav_list__CzAkU">
                            <div class="footer_nav_list_item__KwxvJ">
                                <h3 class="footer_nav_list_title__axR0X">Проекты</h3>
                                <ul class="menu_column__t03Ll footer_nav_list_item_hidden__nZobq">
                                    <li class="link_dark__kvd9N">
                                        <a target="_blank" href="https://rodina-rp.com/">
                                            <div></div>
                                            Rodina RP
                                        </a>
                                    </li>
                                    <li class="link_dark__kvd9N">
                                        <a target="_blank" href="https://arizona-v.com/">
                                            <div></div>
                                            Arizona V
                                        </a>
                                    </li>
                                    <li class="link_dark__kvd9N">
                                        <a target="_blank" href="https://bone-country.ru/">
                                            <div></div>
                                            Village
                                        </a>
                                    </li>
                                </ul>
                                <ul class="footer_project__JJySy">
                                    <li class="footer_project_image__9XQZ6">
                                        <a target="_blank" href="https://rodina-rp.com/">
                                            <img alt="rodina_logo.png" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="/icons/rodina_logo.png"/>
                                        </a>
                                    </li>
                                    <li class="footer_project_image__9XQZ6">
                                        <a target="_blank" href="https://arizona-v.com/">
                                            <img alt="arizona_logo.png" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="/icons/arizona_logo.png"/>
                                        </a>
                                    </li>
                                    <li class="footer_project_image__9XQZ6">
                                        <a target="_blank" href="https://bone-country.ru/">
                                            <img alt="redneck_logo.png" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="/icons/redneck_logo.png"/>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer_nav_list_item__KwxvJ">
                                <h3 class="footer_nav_list_title__axR0X">Полезное</h3>
                                <ul class="menu_column__t03Ll">
                                    <li class="link_dark__kvd9N">
                                        <a target="" href="https://forum.arizona-rp.com/">
                                            <div></div>
                                            Форум
                                        </a>
                                    </li>
                                    <li class="link_dark__kvd9N">
                                        <a target="" href="/document/terms">
                                            <div></div>
                                            Пользовательское соглашение
                                        </a>
                                    </li>
                                    <li class="link_dark__kvd9N">
                                        <a target="" href="/document/policy">
                                            <div></div>
                                            Политика конфиденциальности
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer_right_side__3rz8h">
                        <div class="footer_payments__YpMcJ footer_payments_markets__gCL5X">
                            <img alt="playMarket" loading="lazy" width="28" height="29" decoding="async" data-nimg="1" style="color:transparent" src="/_next/static/media/play_market.9d4c53aa.svg"/>
                            <img alt="rustore" loading="lazy" width="800" height="800" decoding="async" data-nimg="1" style="color:transparent" src="/_next/static/media/rustore.f4f4af55.svg"/>
                            <img alt="mir" loading="lazy" width="1174" height="408" decoding="async" data-nimg="1" style="color:transparent" src="/_next/static/media/mir.e08ce5b5.svg"/>
                        </div>
                        <div class="footer_payments__YpMcJ">
                            <img alt="mastercard" loading="lazy" width="1000" height="1000" decoding="async" data-nimg="1" style="color:transparent" src="/_next/static/media/mastercard.884fe7c8.svg"/>
                            <img alt="visa" loading="lazy" width="660" height="660" decoding="async" data-nimg="1" style="color:transparent" src="/_next/static/media/visa.df74a61e.svg"/>
                            <img alt="sbp" loading="lazy" width="1180" height="589" decoding="async" data-nimg="1" style="color:transparent" src="/_next/static/media/sbp.26540832.svg"/>
                        </div>
                        <a class="footer_support__tLtV_" href="mailto:support@arizona-rp.com">support@arizona-rp.com</a>
                    </div>
                </div>
            </footer>
        </div>
        <script id="__NEXT_DATA__" type="application/json">
            {
                "props": {
                    "pageProps": {
                    }
                },
                "page": "/maps",
                "query": {
                },
                "buildId": "04ndh8U2LrPoA4SG-wQAH",
                "nextExport": true,
                "autoExport": true,
                "isFallback": false,
                "scriptLoader": [
                ]
            }</script>
        <script>
            const params_array = window.location.search.substring(1).split("&");
            const params_result = {};
            for (let i = 0; i < params_array.length; i++) {
                const params_current = params_array[i].split("=");
                params_result[params_current[0]] = typeof (params_current[1]) == "undefined" ? "" : params_current[1];
            }
            if (params_result['utm_source']) {
                const date = new Date();
                date.setDate(date.getDate() + 1);

                Object.keys(params_result).forEach(key => {
                    document.cookie = 'utms=' + JSON.stringify(params_result) + ';expires=' + date;
                }
                )
            }
        </script>
    </body>
</html>
