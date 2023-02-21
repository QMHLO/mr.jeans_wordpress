<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mr.jeans
 */

get_header();
?>

<!-- MV -->
<div class="mv-sec">
  <div class="mv-block m-w1120">
    <div class="mv-txt">
      <div class="txt-gp">
        <h2 class="ttl">
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/mv_ttl.png" alt="大切に" />
        </h2>
        <h3 class="sub-ttl">夢を大切に挑戦していく</h3>
        <p class="para">
          私たちは、魅力あるITソリューションを創造し<br />
          未来に向かう社会や変革に寄与していきます。
        </p>
      </div>
    </div>
    <div class="card-block">
      <div class="row">
        <div class="card one">
          <div>
            <div class="card-header">
              <h4 class="ttl">
                LINE SMART CITY <br />
                GovTech プログラム
              </h4>
            </div>
            <div class="card-body">
              <p class="txt">LINEではじめる自治体DX。LINE公式アカウントで、オンライン窓口業務を実現します。</p>
            </div>
          </div>
          <a href="#" class="view-btn"><span>Read More</span></a>
        </div>
        <div class="card two">
          <div>
            <div class="card-header">
              <h4 class="ttl">スケジュール同期システム</h4>
              <div class="ttl-img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/mv_img01.png" alt="ステ" />
              </div>
            </div>
            <div class="card-body">
              <p class="txt">グループウェア desknet’s NEO (オンプレミス版)とMicrosoft Exchange Server 2013/2016/2019、Exchange
                Online、Google Workspaceのスケジュールを双方向に同期します。</p>
            </div>
          </div>
          <a href="#" class="view-btn"><span>Read More</span></a>
        </div>
        <div class="card three">
          <div>
            <div class="card-header">
              <div class="ttl-img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/mv_img02.png" alt="ステ" />
              </div>
            </div>
            <div class="card-body">
              <p class="txt">Active Directory、グループウェア、メールサーバ等、複数システムのアカウント管理を 容易にする ID統合管理ソフトウェア
                です。組織変更、人事異動等のアカウント管理に掛かる工数や手間、管理コスト、オペレーションミスを低減します。</p>
            </div>
          </div>
          <a href="#" class="view-btn"><span>Read More</span></a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- MV -->
<!-- About -->
<section class="about-sec">
  <div class="m-w1120">
    <div class="about-block">
      <div class="sec-ttl">
        <h2>About JINS</h2>
      </div>
      <div class="row">
        <div class="col col-1">
          <p class="left-txt">
            夢や理想を大切にし地域とともに<br />
            幸福の礎を築いていきます。
          </p>
        </div>
        <div class="col col-2">
          <p class="right-txt">
            当社はITからICT事業、そして「DX時代」に向けスタートを切っています。<br />
            ID事業は自社製品ADMSがDX時代の必須のアイテムとなり、全国の自治体でのシェアNo1となり、大手企業への導入も順調です。また、ネットワーク事業はICTから「ゼロトラスト」、「サイバーセキュリティ」などセキュリティビジネスへ、ソフト開発事業はソフト開発のフィールドをクラウドベンダー各社と連携しハイブリッドなビジネスへと急拡大しています。<br />
            社員には既にニューノーマルなこの時代の中心となったテレワーク/Webでの会議などを利用する環境は全員に提供されており、全国の顧客、国内／海外ベンダーとの交渉にも活用され、制度にとらわれない「一人ひとりが主役となる会社」を目指した支援も行っています。また、今後はAIなどの先進技術を持ったメーカーやパートナーとの連携を進めて新たな事業の創生にもチャレンジします。
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About -->
<!-- Solution -->
<section class="sol-sec">
  <div class="m-w1120">
    <div class="sol-block">
      <div class="sec-ttl">
        <h2>Solution</h2>
        <span>JINSが提供するソリューション</span>
      </div>
      <div class="card-list">
        <div class="card">
          <div class="card-row">
            <div class="card-left">
              <h3 class="card-ttl">ネットワークソリューション</h3>
              <p class="card-para">ネットワークシステムの企画設計、構築、運用管理、また最適化コンサルなどお客様のご要望に応じたサービスを提供しております。</p>
              <ul>
                <li>セキュリティソリューション</li>
                <li>サーバソリューション</li>
                <li>インフラストラクチャー・ソリューション</li>
                <li>システム運用マネジメントソリューション</li>
                <li>アプリケーション・ソリューション</li>
              </ul>
            </div>
            <div class="card-right">
              <div class="card-img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/sol_img1.png" alt="ネットワークソリューション" />
              </div>
            </div>
            <a href="#" class="view-btn"><span>View More</span></a>
          </div>
        </div>
        <div class="card sec-card">
          <div class="card-row">
            <div class="card-left">
              <h3 class="card-ttl">ソフトウェアソリューション</h3>
              <p class="card-para sp">ネットワークシステムの企画設計、構築、運用管理、また最適化コンサルなどお客様のご要望に応じたサービスを提供しております。</p>
              <ul>
                <li>
                  <h4>Webサービス・ソリューション</h4>
                  様々な分野のWebシステムの構築を行っています。特定のシステムに依存せず、新規でのシステム開発、オープンソースのシステムを使用した開発など柔軟に対応いたします。
                </li>
                <li>
                  <h4>C/Sサービス・ソリューション</h4>
                  お客様の要望に合わせた独自のC/Sシステムの開発、構築を行っています。既存システムなどとの連携も考慮したシステム構築を行うことも可能です。
                </li>
              </ul>
            </div>
            <div class="card-right">
              <div class="card-img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/sol_img2.png" alt="ネットワークソリューション" />
              </div>
            </div>
            <a href="#" class="view-btn"><span>View More</span></a>
          </div>
        </div>
        <div class="card third-card">
          <div class="card-row">
            <div class="card-left">
              <h3 class="card-ttl">IDソリューション（ADMS）</h3>
              <p class="card-para">人事異動に伴うアカウント管理を効率化し、シングルサインオンで業務効率化を<br class="pc" />改善できるパッケージソフトウェアを提供しています。
              </p>
              <ul>
                <li>
                  アカウント管理にかかる時間を<br />短縮できるソフトウェア<br />
                  <div class="img">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/sol_img4.png" alt="リューション" />
                  </div>
                </li>
                <li>
                  ネットワーク強靭化運用支援<br />
                  ソフトウェア<br />
                  <div class="img">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/sol_img5.png" alt="リューション" />
                  </div>
                </li>
                <li>
                  シンプルな構成で手軽に <br />シングルサインオン
                  <div class="img">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/sol_img6.png" alt="リューション" />
                  </div>
                </li>
              </ul>
            </div>
            <div class="card-img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/sol_img3.png" alt="ネットワークソリューション" />
            </div>
            <!-- <div class="card-right"></div> -->
            <a href="#" class="view-btn"><span>View More</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Solution -->
<!-- Topics -->
<section class="topics-sec">
  <div class="m-w1120">
    <div class="topics-block">
      <div class="topics-row">
        <div class="sec-ttl">
          <h2>Topics</h2>
        </div>
        <a href="#" class="view-btn pc"><span>View More</span></a>
      </div>
      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1; //start page
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 8,
        'paged' => $paged
      );
      ?>
      <div class="topics-list">
        <?php
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="topic-item">
            <span class="date"><?php the_time('Y年m月d日'); ?></span>
            <p><?php the_content(); ?></p>
          </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>

    </div>
  </div>
</section>
<!-- Topics -->
<!-- Society  -->
<section class="society-sec">
  <div class="m-w1120">
    <div class="society-block">
      <div class="society-row">
        <div class="society-left">
          <h3 class="block-ttl">脱炭素化社会へ貢献</h3>
          <p class="block-sub-ttl">社屋は全て木造建築</p>
          <div class="block-img-txt">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/society_txt.png" alt="社屋は全て木造建築" />
          </div>
          <p class="block-para">
            当社は、2011年社屋新設に際し、木造建築としました。<br />
            その後、第2棟、そして2021年第3棟の新設に際しても、全て木造建築としています。<br />
            木造建築は、めざす脱炭素社会にむけて貴重なメリットをもたらしており、世界的な社会目標に貢献することができ幸いです。　
          </p>
          <a href="#" class="view-btn"><span>View More</span></a>
        </div>
        <div class="society-right">
          <div class="society-img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/society.png" class="pc" alt="ネットワークソリューション" />
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/society_sp.png" class="sp" alt="ネットワークソリューション" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Society  -->
<!-- Recruit -->
<section class="recruit-sec">
  <div class="recruit-block">
    <div class="recruit-card">
      <div class="inner">
        <div class="row">
          <div class="left">
            <div class="sec-ttl">
              <h2>Recruit</h2>
              <span>採用情報</span>
            </div>
            <div class="img sp">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/recruit_img01.png" alt="採用情報" />
            </div>
          </div>
          <div class="right">
            <h3 class="card-ttl">YAMANASHIからグローバルへ！</h3>
            <p class="para">
              自社ソフトの全国展開が着実にすすみ、新卒、キャリアともにエンジニア増が急務となっています。2021年新社屋も完成し、みながここで待っています！<br />
              山梨で暮らして働けるソフト会社として是非一度、当社に相談してみてください。<br />
              「YAMANASHIからグローバルへ」を目指し、2016年よりシリコンバレー視察研修制度をスタートしました。毎年11月頃に一週間の研修を行っています。<br />
              シリコンバレーはアメリカのサンフランシスコ南部に位置している、アップル社、Google社などのIT企業の拠点となっている地域です。<br />
              世界のIT大企業を視察し、見聞を広め、その後の報告会を通じて社内で情報を共有しています。<br />
              社員の成長が会社の成長と考え、個人のスキルアップ、キャリアアップを応援します。
            </p>
            <a href="#" class="view-btn"><span>View More</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Recruit -->
<!-- Contact -->
<section class="contact-sec">
  <div class="m-w1120">
    <div class="contact-block">
      <div class="sec-ttl">
        <h2>Contact us</h2>
      </div>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.8040004827058!2d138.61005011510923!3d35.6079010802114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601bfb0e1dfbb2a7%3A0x1c9e1d6842dc890!2z44K444Kk44Oz44K6!5e0!3m2!1sja!2smm!4v1675159837358!5m2!1sja!2smm" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/img/map.png" alt="採用情報" /> -->
      </div>
      <a href="#" class="inquiry-btn"><span>お問い合わせ</span></a>
    </div>
  </div>
</section>
<!-- Contact -->
<!-- Advertising -->
<section class="adv-sec index">
  <div class="m-w1120">
    <div class="adv-block">
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
