<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty('TITLE','Dashboard');
?>
<div id="root">
        <div class="App">
            <div class="mobile__navbar ">
                <div class="mobile__navbar-close"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/mobile-close.f521cf45.svg"
                        alt="close"></div>
                <div class="mobile__navbar-logo flex-center"><a class="active"><img
                            src="<?=SITE_TEMPLATE_PATH?>/assets/images/logo-yellow.789bce48.svg" alt="logo"></a></div>
                <div class="mobile__navbar-menu">
                </div>f
            </div>
            <div class="backdrop "></div>
            <nav class="Navbar extraLargeNavbar">
                <div class="wrapper flex-s-between">
                    <div>
                        <a class="active">
                        <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/header/inc_logo.php"
	                )
                );?>
                        </a>
                    </div>
                    <div class="mobile__menu"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/mobile-menu.10823520.svg" alt="menu">
                    </div>
                    <div class="desktop__menu">
                    <?$APPLICATION->IncludeComponent(
                            "header-menu:menu",
                            "horizontal_multilevel",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "top",
                                "USE_EXT" => "Y"
                            )
                    );?>
                    </div>
                </div>
            </nav>
            <div class="hero" id="hero">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                        <div class="hero-info">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/header/inc_title.php"
	                        )
                            );?>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/header/inc_description.php"
	                        )
                            );?>
                            <div class="button"><a class="button-link">SEND MESSAGE</a></div>
                        </div>   
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="hero-image">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/header/inc_image.php"
	                        )
                            );?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="portfolio">
                <div class="wrapper">
                    <div class="row">
                        <div class="big__title">
                            <h2 class="weight800 font60 padding40">WORK SHOWCASE.</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                            <div class="portfolio__nav">
                                <ul>
                                    <li class="portfolio__nav-active font12">ALL</li>
                                    <li class="font12">BRANDING</li>
                                    <li class="font12">ILLUSTRATIONS</li>
                                    <li class="font12">WEB</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                            <div class="portfolio__filter">
                                <p class="font12">NEWEST FIRST</p><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/arrow.3d45f423.svg"
                                    alt="arrow">
                            </div>
                        </div>
                    </div>
                    
                    <div class="my-masonry-grid">
                        <div class="mint__gallery" style="width: 33.3333%;">
                        <?$APPLICATION->IncludeComponent(
                                    "work:news.list",
                                    "work",
                                    Array(
                                        "ACTIVE_DATE_FORMAT" => "j F, Y",
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "AJAX_MODE" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "Y",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "CHECK_DATES" => "Y",
                                        "DETAIL_URL" => "",
                                        "DISPLAY_BOTTOM_PAGER" => "N",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "FIELD_CODE" => array("SHOW_COUNTER", ""),
                                        "FILTER_NAME" => "",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "IBLOCK_ID" => "3",
                                        "IBLOCK_TYPE" => "work",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "MESSAGE_404" => "",
                                        "NEWS_COUNT" => "3",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_SHOW_ALWAYS" => "N",
                                        "PAGER_TEMPLATE" => ".default",
                                        "PAGER_TITLE" => "Новости",
                                        "PARENT_SECTION" => "",
                                        "PARENT_SECTION_CODE" => "",
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "PROPERTY_CODE" => array("", ""),
                                        "SET_BROWSER_TITLE" => "N",
                                        "SET_LAST_MODIFIED" => "N",
                                        "SET_META_DESCRIPTION" => "N",
                                        "SET_META_KEYWORDS" => "N",
                                        "SET_STATUS_404" => "N",
                                        "SET_TITLE" => "N",
                                        "SHOW_404" => "N",
                                        "SORT_BY1" => "ACTIVE_FROM",
                                        "SORT_BY2" => "SORT",
                                        "SORT_ORDER1" => "DESC",
                                        "SORT_ORDER2" => "ASC",
                                        "STRICT_SECTION_CHECK" => "N"
                                    )
                                );?>
                        </div>
                    </div>
                    <div class="flex-center padding40 row">
                        <div class="button"><a class="button-link">HAVE WORK FOR US?</a></div>
                    </div>
                </div>
            </div>
            <div id="partners">
                <div class="wrapper">
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal"
                        style="cursor: grab;">
                        <div class="swiper-wrapper"
                            style="transition-duration: 0ms; transform: translate3d(-1070px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                data-swiper-slide-index="1" style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center">
                                <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/partners/inc_image1.php"
	                                )
                                );?>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center">
                                <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/partners/inc_image2.php"
	                                )
                                );?>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/partners/inc_image3.php"
	                                )
                                );?></div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                                style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/partners/inc_image4.php"
	                                )
                                );?></div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                                data-swiper-slide-index="5" style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/partners/inc_image5.php"
	                                )
                                );?></div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/assets/images/partner03.0d091731.svg" alt="partner"></div>
                            </div>
                        </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
            <div id="about">
                <div class="wrapper">
                    <div class="row">
                        <div class="big__title">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/about/inc_about.php"
	                        )
                            );?>
                        </div>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/about/inc_description.php"
	                        )
                    );?>
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="team__box flex-center">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about/inc_image1.php"
                                        )
                                );?>
                                <div class="team__box-info">
                                <p class="font12 weight800">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about/inc_aboutImage1.php"
                                        )
                                );?>
                                </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="team__box flex-center">
                                <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/about/inc_image2.php"
                                            )
                                );?>
                                <div class="team__box-info">
                                <p class="font12 weight800">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about/inc_aboutImage2.php"
                                        )
                                );?>
                                </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="team__info flex-center">
                                <div>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about/inc_teamInfo.php"
                                        )
                                );?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog" id="blog">
                <div class="wrapper">
                    <div class="row">
                        <div class="big__title">
                        <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/blog/inc_blog.php"
                                        )
                        );?>
                        </div>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/blog/inc_description.php"
                                        )
                        );?>
                    <div class="padding30">
                        <div class="swiper-container swiper-container-initialized swiper-container-horizontal"
                            style="cursor: grab;">
                            <div class="swiper-wrapper" style="">
                                <?$APPLICATION->IncludeComponent(
                                    "blog:news.list",
                                    "blog",
                                    Array(
                                        "ACTIVE_DATE_FORMAT" => "j F, Y",
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "AJAX_MODE" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "Y",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "CHECK_DATES" => "Y",
                                        "DETAIL_URL" => "",
                                        "DISPLAY_BOTTOM_PAGER" => "N",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "FIELD_CODE" => array("SHOW_COUNTER", ""),
                                        "FILTER_NAME" => "",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "IBLOCK_ID" => "3",
                                        "IBLOCK_TYPE" => "blog",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "MESSAGE_404" => "",
                                        "NEWS_COUNT" => "3",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_SHOW_ALWAYS" => "N",
                                        "PAGER_TEMPLATE" => ".default",
                                        "PAGER_TITLE" => "Новости",
                                        "PARENT_SECTION" => "",
                                        "PARENT_SECTION_CODE" => "",
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "PROPERTY_CODE" => array("", ""),
                                        "SET_BROWSER_TITLE" => "N",
                                        "SET_LAST_MODIFIED" => "N",
                                        "SET_META_DESCRIPTION" => "N",
                                        "SET_META_KEYWORDS" => "N",
                                        "SET_STATUS_404" => "N",
                                        "SET_TITLE" => "N",
                                        "SHOW_404" => "N",
                                        "SORT_BY1" => "ACTIVE_FROM",
                                        "SORT_BY2" => "SORT",
                                        "SORT_ORDER1" => "DESC",
                                        "SORT_ORDER2" => "ASC",
                                        "STRICT_SECTION_CHECK" => "N"
                                    )
                                );?>
                            </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contact">
                <div class="wrapper">
                    <div class="row">
                        <div class="big__title">
                        <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/contact/inc_contact.php"
                                        )
                        );?>
                        </div>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/contact/inc_description.php"
                                        )
                        );?>
                    <div class="padding40 row">
                        <div class="col-md-12 col-lg-6">
                        <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/contact/inc_formTitle.php"
                                        )
                                );?>
                        <?$APPLICATION->IncludeComponent(
                        "contact:iblock.element.add.form",
                        "",
                        Array(
                            "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
                            "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
                            "CUSTOM_TITLE_DETAIL_PICTURE" => "",
                            "CUSTOM_TITLE_DETAIL_TEXT" => "",
                            "CUSTOM_TITLE_IBLOCK_SECTION" => "",
                            "CUSTOM_TITLE_NAME" => "Name",
                            "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
                            "CUSTOM_TITLE_PREVIEW_TEXT" => "",
                            "CUSTOM_TITLE_TAGS" => "",
                            "DEFAULT_INPUT_SIZE" => "30",
                            "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
                            "ELEMENT_ASSOC" => "CREATED_BY",
                            "GROUPS" => array("2"),
                            "IBLOCK_ID" => "2",
                            "IBLOCK_TYPE" => "form",
                            "LEVEL_LAST" => "Y",
                            "LIST_URL" => "",
                            "MAX_FILE_SIZE" => "0",
                            "MAX_LEVELS" => "100000",
                            "MAX_USER_ENTRIES" => "100000",
                            "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                            "PROPERTY_CODES" => array("3", "4", "NAME"),
                            "PROPERTY_CODES_REQUIRED" => array("3", "4", "NAME"),
                            "RESIZE_IMAGES" => "N",
                            "SEF_MODE" => "N",
                            "STATUS" => "ANY",
                            "STATUS_NEW" => "N",
                            "USER_MESSAGE_ADD" => "Спасибо. Ваша заяавка добавлено успешно.",
                            "USER_MESSAGE_EDIT" => "",
                            "USE_CAPTCHA" => "N",
                            "AJAX_MODE" => "Y",
	                    )
);?>
                            <!-- <form id="contact-form">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/contact/inc_formTitle.php"
                                        )
                                );?>                                
                                <input type="text"
                                    placeholder="Name" required="" name="name" value="">
                                    <input type="email"
                                    placeholder="Email" required="" name="email" value="">
                                    <textarea rows="6" cols="50"
                                    placeholder="Message..." required="" name="message"></textarea>
                                <div class="small__button"><button aria-label="send message" type="submit"
                                        value="Send Message">Send Message</button></div>
                            </form> -->
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="flex-center">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/contact/inc_image.php"
                                        )
                                );?>                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row center-xs">
                                <div class="col-xs-12 col-lg-3 contact__info">
                                    <div class="contact__info-box">
                                        <div>
                                        <?$APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/include/contact-info/inc_addressLogo.php"
                                                )
                                        );?>
                                        </div>
                                        <div>
                                        <?$APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/include/contact-info/inc_address.php"
                                                )
                                        );?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-lg-3 contact__info">
                                    <div class="contact__info-box">
                                        <div>
                                        <?$APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/include/contact-info/inc_phoneLogo.php"
                                                )
                                        );?>
                                        </div>
                                        <div>
                                        <?$APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/include/contact-info/inc_phone.php"
                                                )
                                        );?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-lg-3 contact__info">
                                    <div class="contact__info-box">
                                        <div>
                                        <?$APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/include/contact-info/inc_emailLogo.php"
                                                )
                                        );?>
                                        </div>
                                        <div>
                                        <?$APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/include/contact-info/inc_email.php"
                                                )
                                        );?>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row center-xs">
                                <div class="col-xs-12 col-lg-1 contact__social">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/social/inc_logoFacebook.php"
                                        )
                                );?>                               
                                </div>
                                <div class="col-xs-12 col-lg-1 contact__social">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/social/inc_logoTwitter.php"
                                        )
                                );?>                            
                                </div>
                                <div class="col-xs-12 col-lg-1 contact__social">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/social/inc_logoDribble.php"
                                        )
                                );?>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>