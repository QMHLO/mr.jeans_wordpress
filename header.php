<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mr.jeans
 */

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap"
    rel="stylesheet" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/import.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/slick.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/slick-theme.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/splide.min.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-3.4.1.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/slick.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.matchHeight.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/splide.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/common.js"></script>
  <title>Document</title>
  <script>
    (function (d) {
      var config = {
        kitId: "fbt4pfe",
        scriptTimeout: 3000,
        async: true,
      },
        h = d.documentElement,
        t = setTimeout(function () {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = "https://use.typekit.net/" + config.kitId + ".js";
      tk.async = true;
      tk.onload = tk.onreadystatechange = function () {
        a = this.readyState;
        if (f || (a && a != "complete" && a != "loaded")) return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config);
        } catch (e) { }
      };
      s.parentNode.insertBefore(tk, s);
    })(document);
  </script>
</head>

<body id="top">
  <main x-data="{ open: false, sopen: false, stopen:false, stfopen:false }">
    <!-- Header -->
    <header>
      <div class="header pc">
        <div class="m-w1120">
          <div class="row">
            <div class="left">
              <a href="<?php echo get_home_url(); ?>" class="logo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="????????????" />
              </a>
            </div>
            <div class="right">
              <ul class="nav-list">
                <li class="nav-item menu__services">
                  <a href="<?php echo get_home_url(); ?>/profile">????????????</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo get_home_url(); ?>/network-solution">??????????????????<br />
                    ?????????????????????</a>
                </li>
                <li class="nav-item menu__services3">
                  <a href="/software-solution.html">??????????????????<br />
                    ?????????????????????</a>
                </li>
                <li class="nav-item">
                  <a href="/identity-solution.html">ID?????????????????????<br />
                    ???ADMS???</a>
                </li>
                <li class="nav-item">
                  <a href="/recruitment-information.html">????????????</a>
                </li>
                <li class="nav-item">
                  <a href="/contact.html">??????????????????</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="nav-open-list">
          <div class="detail-menu menu__services--hover d-none">
            <div class="container">
              <div class="detail-row">
                <div class="left">
                  <a href="/profile.html" class="menu-name">????????????</a>
                </div>
                <div class="right">
                  <ul>
                    <li class="detail-item">
                      <a href="/profile/president-message.html">????????????????????? </a>
                    </li>
                    <li class="detail-item">
                      <a href="/profile/company-profile.html">???????????? </a>
                    </li>
                    <li class="detail-item">
                      <a href="/profile/regional-activity.html">???????????? </a>
                    </li>
                    <li class="detail-item">
                      <a href="/profile/president-profile.html">???????????????????????? </a>
                    </li>
                    <li class="detail-item">
                      <a href="/profile/access-map.html">????????????????????? </a>
                    </li>
                    <li class="detail-item">
                      <a href="/profile/security-action.html">????????????????????????????????? </a>
                    </li>
                    <li class="detail-item">
                      <a href="/profile/management-philosophy.html">???????????? </a>
                    </li>
                    <li class="detail-item">
                      <a href="/profile/company-building.html">?????????????????? </a>
                    </li>
                    <li class="detail-item">
                      <a href="/profile/corporate-history.html">???????????? </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="m-w1120"></div>
            </div>
          </div>
          <div class="detail-menu menu3 menu__services3--hover d-none">
            <div class="container">
              <div class="detail-row">
                <div class="left">
                  <a href="#" class="menu-name">??????????????????<br />
                    ?????????????????????</a>
                </div>
                <div class="right">
                  <ul>
                    <li class="detail-item">
                      <a href="/software-solution/tech-program.html">LINE SMART CITY GovTech ??????????????? </a>
                    </li>
                  </ul>
                  <ul>
                    <li class="detail-item">
                      <a href="/software-solution/syncware.html">???????????????????????????????????? SyncWare ???????????? </a>
                    </li>
                    <ul class="sub-list mb30">
                      <li class="s-item">
                        <a href="/software-solution/syncware.html/#syncware-type1">SyncWare Type1 </a>
                      </li>
                      <li class="s-item">
                        <a href="/software-solution/syncware.html/#syncware-type2">SyncWare Type2 </a>
                      </li>
                    </ul>
                  </ul>
                </div>
              </div>
              <div class="m-w1120"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-sp sp">
        <div>
          <div class="header-sp-block">
            <div class="row">
              <div class="left">
                <a href="/" class="logo">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="????????????" />
                </a>
              </div>
              <div class="right" @click="open = ! open; sopen = false; stopen = false; stfopen:false">
                <div class="menu-icon">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/img/menu_icon.png" alt="????????????" x-bind:class="open ? 'd-none' : ''" />
                  <img src="<?php bloginfo('template_directory'); ?>/assets/img/close_icon.png" alt="????????????" x-bind:class="!open ? 'd-none' : ''" />
                </div>
              </div>
            </div>
          </div>

          <div class="show-nav" x-show="open" x-transition>
            <nav>
              <ul class="nav-list">
                <li>
                  <a class="nav-item d-arr" href="#" @click="sopen = ! sopen;">????????????
                    <div class="nav-arrow" x-bind:class="sopen ? 'd-none' : ''"><img src="<?php bloginfo('template_directory'); ?>/assets/img/nav_arrow.png"
                        alt="????????????" /></div>
                    <div class="nav-arrow" x-bind:class="!sopen ? 'd-none' : ''"><img src="<?php bloginfo('template_directory'); ?>/assets/img/nav_arrow01.png"
                        alt="????????????" /></div>
                  </a>
                  <ul class="sub-nav-list" x-show="sopen" x-transition>
                    <li>
                      <a href="/profile/president-message.html" class="sub-nav-item">?????????????????????</a>
                    </li>
                    <li>
                      <a href="/profile/president-profile.html" class="sub-nav-item">????????????????????????</a>
                    </li>
                    <li>
                      <a href="/profile/management-philosophy.html" class="sub-nav-item">????????????</a>
                    </li>
                    <li>
                      <a href="/profile/company-profile.html" class="sub-nav-item">????????????</a>
                    </li>
                    <li>
                      <a href="/profile/access-map.html" class="sub-nav-item">?????????????????????</a>
                    </li>
                    <li>
                      <a href="/profile/company-building.html" class="sub-nav-item">??????????????????</a>
                    </li>
                    <li>
                      <a href="/profile/regional-activity.html" class="sub-nav-item">????????????</a>
                    </li>
                    <li>
                      <a href="/profile/security-action.html" class="sub-nav-item">?????????????????????????????????</a>
                    </li>
                    <li>
                      <a href="/profile/corporate-history.html" class="sub-nav-item">????????????</a>
                    </li>
                  </ul>
                </li>
                <li><a class="nav-item" href="/network-solution.html">???????????????????????????????????????</a></li>
                <li>
                  <a class="nav-item d-arr" href="#" @click="stopen = ! stopen; stfopen = false">???????????????????????????????????????
                    <div class="nav-arrow" x-bind:class="stopen ? 'd-none' : ''"><img src="<?php bloginfo('template_directory'); ?>/assets/img/nav_arrow.png"
                        alt="????????????" /></div>
                    <div class="nav-arrow" x-bind:class="!stopen ? 'd-none' : ''"><img
                        src="<?php bloginfo('template_directory'); ?>/assets/img/nav_arrow01.png" alt="????????????" /></div>
                  </a>
                  <ul class="sub-nav-list" x-show="stopen" x-transition>
                    <li>
                      <a href="/software-solution/tech-program.html" class="sub-nav-item">LINE SMART CITY GovTech
                        ???????????????</a>
                    </li>
                    <li>
                      <a href="#" class="sub-nav-item" @click="stfopen = ! stfopen">???????????????????????????????????? SyncWare ????????????
                        <div class="nav-arrow mt10" x-bind:class="stfopen ? 'd-none' : ''"><img
                            src="<?php bloginfo('template_directory'); ?>/assets/img/nav_arrow.png" alt="????????????" /></div>
                        <div class="nav-arrow mt10" x-bind:class="!stfopen ? 'd-none' : ''"><img
                            src="<?php bloginfo('template_directory'); ?>/assets/img/nav_arrow01.png" alt="????????????" /></div>
                      </a>
                      <ul class="sub-nav-list" x-show="stfopen" x-transition>
                        <li>
                          <a href="/software-solution/syncware.html/#syncware-type1" class="sub-nav-item">SyncWare
                            Type1</a>
                        </li>
                        <li>
                          <a href="/software-solution/syncware.html/#syncware-type2" class="sub-nav-item">SyncWare
                            Type2</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a class="nav-item" href="/identity-solution.html">ID????????????????????????ADMS???</a></li>
              </ul>
            </nav>
            <a href="/contact.html" class="inquiry-btn"><span>????????????</span></a>
            <a href="/recruitment-information.html" class="inquiry-btn info-btn"><span>????????????</span></a>
            <a href="/" class="logo">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="????????????" />
            </a>
          </div>
        </div>
      </div>
    </header>
    <!-- Header -->

    <div class="container" x-bind:class="open ? 'sfull' : ''">
      <button class="page-top" id="page-top">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/arrow.png" alt="arrow point to top" />
        PAGE TOP
      </button>
