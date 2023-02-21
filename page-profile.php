<?php
/*
 Template Name: profile
 */

 get_header();

 ?>
    <div class="page-title subpage-top">
        <div class="container">
            <div class="m-w1120">
                <h1 class="main-heading">会社案内</h1>
            </div>
        </div>
    </div>

    <div class="breadcrumb">
        <div class="container">
            <div class="m-w1120">
                <ul>
                    <li><a href="#">株式会社ジインズ</a></li>
                    <li class="current"><a href="#"> 会社案内</a></li>
                </ul>
            </div>
        </div>
    </div>

    <main class="profile-mv">
        <div class="container">
            <div class="m-w1120 inner-container">
                <div class="page-desc pc-only">
                    <h2 class="secondary-heading icon-white text-white">経営理念</h2>
                    <p class="content">私たちは、魅力あるITソリューションを創造し<br />
                        未来に向かう社会や変革に寄与していきます。<br />
                        私たちは、夢や理想を大切にし地域とともに<br />
                        幸福の礎を築いていきます。</p>
                </div>
                <div class="eng-page-name">
                    <p>Management<br />
                        philosophy</p>
                </div>
            </div>

        </div>

        <div class="m-w1120">
            <div class="page-desc sp-only">
                <h2 class="secondary-heading icon-blue">経営理念</h2>
                <p class="content">私たちは、魅力あるITソリューションを創造し<br />
                    未来に向かう社会や変革に寄与していきます。<br />
                    私たちは、夢や理想を大切にし地域とともに<br />
                    幸福の礎を築いていきます。</p>
            </div>
        </div>
    </main>

    <section class="profile-block">
        <div class="container">
            <div class="m-w1120">
                <h2 class="secondary-heading icon-blue">会社概要</h2>

                <table class="profile-table">
                    <tbody class="profile-tbody">
                        <tr class="profile-table-row">
                            <th class="table-head">社名</th>
                            <td class="table-data">株式会社ジインズ JINS Corporation</td>
                        </tr>

                        <tr class="profile-table-row">
                            <th class="table-head">代表取締役</th>
                            <td class="table-data">廣瀬　光男</td>
                        </tr>

                        <tr class="profile-table-row">
                            <th class="table-head">創立</th>
                            <td class="table-data">1996年（平成8年）4月</td>
                        </tr>

                        <tr class="profile-table-row">
                            <th class="table-head">本社</th>
                            <td class="table-data">廣〒406-0846　山梨県笛吹市境川町三椚301<br />
                                TEL：055-269-8780(代)　　FAX：055-240-1200</td>
                        </tr>

                        <tr class="profile-table-row">
                            <th class="table-head">東京事業所</th>
                            <td class="table-data">〒101-0047　東京都千代田区内神田2-5-11　桐治ビル3階<br />
                                TEL：03-6380-9917</td>
                        </tr>

                        <tr class="profile-table-row">
                            <th class="table-head">資本金</th>
                            <td class="table-data">4,300万円</td>
                        </tr>

                        <tr class="profile-table-row">
                            <th class="table-head">取引銀行</th>
                            <td class="table-data">山梨中央銀行 本店営業部<br />
                                りそな銀行 大阪営業部<br />
                                みずほ銀行 甲府支店</td>
                        </tr>

                        <tr class="profile-table-row">
                            <th class="table-head">マネジメントシステム</th>
                            <td class="table-data"><a href="#">情報セキュリティマネジメント ISO27001<br />
                                    品質マネジメント ISO9001</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="map-access">
        <div class="container bg-gray">
            <div class="m-w1120">
                <h3 class="third-heading icon-blue">アクセスマップ</h3>
                <div class="map-container">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/map.svg" alt="location access map">
                </div>
                <div class="locations-wrapper">
                    <div class="location">
                        <div>
                            <h4 class="company-type">本社 <a class="map-link" href="https://goo.gl/maps/jvgtvLSE4RQrMyz86"
                                    target="_blank">Google mapでみる</a></h4>
                            <address>
                                〒406-0846 山梨県笛吹市境川町三椚301
                            </address>
                        </div>
                        <div>
                            <a class="phone-no" href="tel:055-269-8780">TEL：055-269-8780(代)</a>
                            <ul class="tips">
                                <li>JR 石和温泉駅より車で15分</li>
                                <li>笛吹スマートICより車で5分</li>
                            </ul>
                        </div>
                    </div>

                    <div class="location">
                        <div>
                            <h4 class="company-type">東京事業所 <a class="map-link"
                                    href="https://goo.gl/maps/X57zbZv1Tmvf8TQd6" target="_blank">Google mapでみる</a></h4>
                            <address>
                                〒101-0047<br class="sp-only" />東京都千代田区内神田2-5-11　桐治ビル3階
                            </address>
                        </div>
                        <div>
                            <a class="phone-no" href="tel:TEL：03-6380-9917">TEL：03-6380-9917</a>
                            <ul class="tips">
                                <li>JR 神田駅西口徒歩4分</li>
                                <li>東京メトロ大手町A2 出口徒歩4分</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="buildings">
        <div class="container">
            <div class="bg"> <img src="<?php bloginfo('template_directory'); ?>/assets/img/blue_dots.svg" alt="background image with blue dots"></div>
            <div class="m-w1120">
                <h3 class="third-heading icon-blue">社屋について</h3>
                <div class="desc">
                    <div class="left-block">
                        <p class="large-text">脱炭素化社会へ貢献</p>
                        <p class="small-text">社屋は全て木造建築</p>
                    </div>
                    <div class="right-block">
                        <div class="right-block-container">
                            <img class="goal-img" src="<?php bloginfo('template_directory'); ?>/assets/img/logo_2.svg" alt="substainable developement goals">

                            <p>当社は、2011年社屋新設に際し、木造建築としました。</p>
                            <p>
                                その後、第2棟、そして2021年第3棟の新設に際しても、全て木造建築としています。</p>
                            <p>
                                木造建築は、めざす脱炭素社会にむけて貴重なメリットをもたらしており、世界的な社会目標に貢献することができ幸いです。　</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel splide" role="group">
            <div class="carousel-container">
                <div class="splide__arrows_container">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.621" height="5.229"
                                viewBox="0 0 22.621 5.229">
                                <path d="M-7785.665,2604.8h-21l6.353-4.315" transform="translate(7808.286 -2600.068)"
                                    fill="none" stroke="#33519e" stroke-width="1" />
                            </svg>
                        </button>
                        <button class="splide__arrow splide__arrow--next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.621" height="5.229"
                                viewBox="0 0 22.621 5.229">
                                <path id="Path_8819" data-name="Path 8819" d="M-7806.66,2604.8h21l-6.353-4.315"
                                    transform="translate(7806.66 -2600.068)" fill="none" stroke="#33519e"
                                    stroke-width="1" />
                            </svg>

                        </button>
                    </div>
                </div>
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide"><img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_img_1.png" alt=""></li>
                        <li class="splide__slide"><img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_img_2.png" alt=""></li>
                        <li class="splide__slide"><img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_img_3.png" alt=""></li>
                        <li class="splide__slide"><img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_img_4.png" alt=""></li>
                        <li class="splide__slide"><img src="<?php bloginfo('template_directory'); ?>/assets/img/slide_img_5.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container slider-textbox-container">
            <div class="m-w1120">
                <div class="slider-textbox">
                    <h3>心地よい木造オフィス</h3>
                    <p>
                        ソフト開発などの知識生産を第一とする当社にとって、木造オフィスがもつ優しさ、心地よさは大きな魅力です。仮に現代という時代のなかに脱炭素社会という目標が無かったとしても迷うことなく木造を選択したと思います。<br />
                        幸い、敷地にも恵まれ、第3期となる社屋の増設を同じ敷地に展開することができました。
                        この後は緑地をどうデザインしていくかが課題であり、楽しみでもあります。
                    </p>
                </div>
            </div>
        </div>
    </section>



    <section class="regional-activity">
        <div class="container">
            <div class="m-w1120">
                <h3 class="third-heading icon-blue">地域活動</h3>
                <div class="main-content">
                    <p> 2020年度から小学校で必修化されたプログラミング教育。</p>
                    <p> 学校教育の現場では、どうすべきかわからない、ITに詳しい教師がいない、などの不安の声もありました。</p>
                    <p> わが社では、先生たちの不安を解消し安心して取り組めるよう、先生方へのプログラミング指導、学校への出張プログラミング授業、親子プログラミング教室などへの講師の派遣等も行っています。</p>
                    <p> プログラミング教育は、IT人材育成に役立つだけではなく、子供たちが生きるために必要な力を得る一つでもあります。これからのIoT時代を担う子供たちにとって未来ある世界になるよう活動しています。
                    </p>
                </div>

                <div class="cards-container reg-cards">

                    <div class="card-wrap">
                        <div class="card">
                            <div class="card-textbox">
                                <div class="card-text">
                                    <p class="card-date">2021年11月9日</p>
                                    <h4 class="card-ttl">小学3年生親子活動 ”プログラミングを知ろう”</h4>
                                    <p class="short-desc">
                                        学校では、親子プログラミング教室が開催されました。弊社はここにボランティアで講師を派遣しています。児童のみなさんからお礼の寄せ書きが届きました。よい記念になるので、ここに掲載させていただきました。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-imagebox">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/regional_activity_01.jpg" alt="activity 1">
                        </div>
                    </div>

                    <div class="card-wrap">
                        <div class="card">
                            <div class="card-textbox">
                                <div class="card-text">
                                    <p class="card-date">2019年7月26日</p>
                                    <h4 class="card-ttl">教職員プログラミング教室</h4>
                                    <p class="short-desc">プログラミング教育推進のため、教職員向け講習を実施いたしました。先生方もとても真剣に取り組まれています。</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-imagebox">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/regional_activity_02.jpg" alt="activity 2">
                        </div>
                    </div>


                    <div class="card-wrap">
                        <div class="card">
                            <div class="card-textbox">
                                <div class="card-text">
                                    <p class="card-date">2018年10月4日</p>
                                    <h4 class="card-ttl">小学生プログラミング教室</h4>
                                    <p class="short-desc">
                                        2020年小学校においてプログラミング教育が必修化されることに先駆け、プログラミング教室を実施いたしました。児童の皆さんは目をキラキラさせてパソコンに向き合っています。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-imagebox">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/regional_activity_03.jpg" alt="activity 3">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="security-action">
        <div class="container bg-gray">
            <div class="m-w1120">
                <h3 class="third-heading icon-blue">セキュリティアクション</h3>
                <div class="security-container">
                    <div class="badges-image">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/badges.png" alt="セキュリティ対策自己宣言 普及贊同団体 と セキュリティ対策自己宣言">
                    </div>
                    <div class="content">
                        <p>
                            弊社は2007年、いち早く情報セキュリティマネジメントシステム
                            の国際規格（ISMS）を認証取得しており、お客様に信頼される企業を目指し、日々セキュリティの向上に努めております。
                        </p>
                        <p>
                            さらに2019年11月、独立行政法人情報処理推進機構（IPA）が創設した「セキュリティアクション」制度に賛同し、二つ星企業並びに普及賛同企業を宣言致しました。
                        </p>
                        <p>
                            情報セキュリティ対策を積極的に進め、普及賛同団体として「セキュリティアクション」の普及・啓蒙に取り組んでまいります。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="corporate-history">
        <div class="container">
            <div class="m-w1120">
                <h3 class="third-heading icon-blue">会社沿革</h3>

                <div class="pc-only">
                    <table class="corporate-table">
                        <tbody class="corporate-tbody">
                            <tr class="corporate-table-row">
                                <td class="corporate-year">1996年</td>
                                <td class="corporate-month">
                                    <div>4月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>甲府市相生にて創業</div>
                                </td>
                            </tr>
                            <tr class="corporate-table-row">
                                <td class="corporate-year">1998年</td>
                                <td class="corporate-month">
                                    <div>6月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>自治体ネットワーク構築開始</div>
                                </td>
                            </tr>
                            <tr class="corporate-table-row">
                                <td class="corporate-year">2000年</td>
                                <td class="corporate-month">
                                    <div>1月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>情報プラザ運営システム「ITMAX」リリース</div>
                                </td>
                            </tr>
                            <tr class="corporate-table-row">
                                <td class="corporate-year">2001年</td>
                                <td class="corporate-month">
                                    <div>2月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>グループウェアシステム「eG-MAX」リリース</div>
                                </td>
                            </tr>
                            <tr class="corporate-table-row">
                                <td class="corporate-year">2002年</td>
                                <td class="corporate-month">
                                    <div>8月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>東京事業所開設（千代田区二番町）</div>
                                </td>
                            </tr>
                            <tr class="corporate-table-row">
                                <td class="corporate-year">2003年</td>
                                <td class="corporate-month">
                                    <div>12月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>企業年金管理システム「KIZAN」リリース</div>
                                </td>
                            </tr>
                            <tr class="corporate-table-row">
                                <td class="corporate-year">2004年</td>
                                <td class="corporate-month">
                                    <div>1月</div>
                                    <div>12月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>資本金を4,300万円に増資</div>
                                    <div>コミュニティシステム「OPENCITY」リリース</div>
                                </td>
                            </tr>
                            <tr class="corporate-table-row">
                                <td class="corporate-year">2006年</td>
                                <td class="corporate-month">
                                    <div>3月</div>
                                    <div>10月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>ID統合管理ソフトウェア「ADMS」リリース</div>
                                    <div>子育て応援・男女いきいき宣言企業へ登録</div>
                                </td>
                            </tr>
                            <tr class="corporate-table-row">
                                <td class="corporate-year">2006年</td>
                                <td class="corporate-month">
                                    <div>4月</div>
                                    <div>10月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>イベント・講習会募集システム「WebEventBox」リリース</div>
                                    <div>ISO/IEC27001 情報セキュリティマネジメントシステム認証取得</div>
                                </td>
                            </tr>
                            <tr class="corporate-table-row">
                                <td class="corporate-year">2006年</td>
                                <td class="corporate-month">
                                    <div>4月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>シンクライアントシステム構築開始<br>VMwareによるサーバ仮想化システム構築開始</div>
                                </td>
                            </tr>
                            <tr class="corporate-table-row">
                                <td class="corporate-year">2011年</td>
                                <td class="corporate-month">
                                    <div>11月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>山梨本社新築移転（笛吹市境川町）</div>
                                </td>
                            </tr>
                            <tr class="corporate-table-row">
                                <td class="corporate-year">2017年</td>
                                <td class="corporate-month">
                                    <div>3月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>山梨本社南館増設</div>
                                </td>
                            </tr>
                            <tr class="corporate-table-row">
                                <td class="corporate-year">2018年</td>
                                <td class="corporate-month">
                                    <div>2月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>東京事業所移転（千代田区内神田）</div>
                                </td>
                            </tr>
                            <tr class="corporate-table-row">
                                <td class="corporate-year">2018年</td>
                                <td class="corporate-month">
                                    <div>6月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>SSOソフトウェア「ADMS SSO」リリース</div>
                                </td>
                            </tr>
                            <tr class="corporate-table-row">
                                <td class="corporate-year">2019年</td>
                                <td class="corporate-month">
                                    <div>11月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>IPA SECURITY ACTION 普及賛同企業に登録</div>
                                </td>
                            </tr>
                            <tr class="corporate-table-row">
                                <td class="corporate-year">2020年</td>
                                <td class="corporate-month">
                                    <div>3月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>ISO9001 品質マネジメントシステム認証取得</div>
                                </td>
                            </tr>
                            <tr class="corporate-table-row">
                                <td class="corporate-year">2021年</td>
                                <td class="corporate-month">
                                    <div>3月</div>
                                </td>
                                <td class="corporate-content">
                                    <div>山梨本社北館増設</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="sp-only">
                    <ul class="corporate-table">
                        <li class="corporate-list">
                            <p class="corporate-date">1996年4月</p>
                            <p class="corporate-project">甲府市相生にて創業</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">1998年6月</p>
                            <p class="corporate-project">自治体ネットワーク構築開始</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2000年1月</p>
                            <p class="corporate-project">情報プラザ運営システム「ITMAX」リリース</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2001年2月</p>
                            <p class="corporate-project">グループウェアシステム「eG-MAX」リリース</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2002年8月</p>
                            <p class="corporate-project">東京事業所開設（千代田区二番町）</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2003年12月</p>
                            <p class="corporate-project">企業年金管理システム「KIZAN」リリース</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2004年1月</p>
                            <p class="corporate-project">資本金を4,300万円に増資</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2004年12月</p>
                            <p class="corporate-project">コミュニティシステム「OPENCITY」リリース</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2006年3月</p>
                            <p class="corporate-project">ID統合管理ソフトウェア「ADMS」リリース</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2006年10月</p>
                            <p class="corporate-project">子育て応援・男女いきいき宣言企業へ登録</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2006年4月</p>
                            <p class="corporate-project">イベント・講習会募集システム「WebEventBox」リリース</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2006年10月</p>
                            <p class="corporate-project">ISO/IEC27001 情報セキュリティマネジメントシステム認証取得</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2006年4月</p>
                            <p class="corporate-project">シンクライアントシステム構築開始&lt;br /&gt;VMwareによるサーバ仮想化システム構築開始</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2011年11月</p>
                            <p class="corporate-project">山梨本社新築移転（笛吹市境川町）</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2017年3月</p>
                            <p class="corporate-project">山梨本社南館増設</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2018年2月</p>
                            <p class="corporate-project">東京事業所移転（千代田区内神田）</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2018年6月</p>
                            <p class="corporate-project">SSOソフトウェア「ADMS SSO」リリース</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2019年11月</p>
                            <p class="corporate-project">IPA SECURITY ACTION 普及賛同企業に登録</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2020年3月</p>
                            <p class="corporate-project">ISO9001 品質マネジメントシステム認証取得</p>
                        </li>
                        <li class="corporate-list">
                            <p class="corporate-date">2021年3月</p>
                            <p class="corporate-project">山梨本社北館増設</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Advertising -->
    <section class="adv-sec bg-gray">
        <div class="m-w1120">
            <div class="adv-block py-58">
            <a class="img-1" href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/adv_img01.png" alt="採用情報" /></a>
            <a class="img-2" href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/adv_img02.png" alt="採用情報" /></a>
            <a class="img-3" href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/adv_img03.png" alt="採用情報" /></a>
            <a class="img-4" href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/adv_img04.png" alt="採用情報" /></a>
            <a class="img-5" href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/adv_img05.png" alt="採用情報" /></a>
            <a class="img-6" href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/adv_img06.png" alt="採用情報" /></a>
            </div>
        </div>
    </section>
    <!-- Advertising -->
<?php
get_footer();
