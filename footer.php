<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mr.jeans
 */

?>

    <!-- Footer -->
    <footer>
      <div class="m-w1120">
        <div class="footer-block">
          <div class="row">
            <div class="left">
              <div class="logo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="採用情報" />
              </div>
              <div class="partner">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/footer_img01.png" alt="採用情報" />
              </div>
              <a href="tel:055-269-8780" class="ft-btn"><span class="ph-no">055-269-8780</span>
                <div class="white-line"></div>
                <p class="date">Mon-Fri 9:00～17:00</p>
              </a>

              <a href="#" class="ft-btn"><span class="inq">お問い合わせ</span></a>
            </div>
            <div class="right">
              <h3 class="com-txt">株式会社ジインズ</h3>
              <div class="locate">
                <div class="row">
                  <div class="col">
                    <h4 class="office-txt">本社</h4>
                    <p class="address">
                      〒406-0846 <br />
                      山梨県笛吹市境川町三椚301<br />
                      TEL：055-269-8780
                    </p>
                  </div>
                  <div class="col">
                    <h4 class="office-txt">東京事業所</h4>
                    <p class="address">
                      〒101-0047　<br />
                      東京都千代田区内神田2-5-11　桐治ビル3階<br />
                      TEL：03-6380-9917
                    </p>
                  </div>
                  <div class="col hide-on-pc">
                    <a href="#" class="foot-drop">
                      <p>プライバシーポリシー</p>
                    </a>
                    <a href="#" class="foot-drop">
                      <p>セキュリティポリシー</p>
                    </a>
                  </div>
                </div>
              </div>
              <div class="m-block">
                <div class="row">
                  <div class="col">
                    <a href="/profile.html">
                      <h4 class="office-txt">会社案内</h4>
                    </a>
                    <ul>
                      <li class="m-item">
                        <a href="/profile/president-message.html"> 社長メッセージ </a>
                      </li>
                      <li class="m-item"><a href="/profile/president-profile.html">社長プロフィール</a></li>
                      <li class="m-item"><a href="/profile/management-philosophy.html">経営理念</a></li>
                      <li class="m-item"><a href="/profile/company-profile.html">会社概要</a></li>
                      <li class="m-item"><a href="/profile/access-map.html">アクセスマップ</a></li>
                      <li class="m-item"><a href="/profile/company-building.html">社屋について</a></li>
                      <li class="m-item"><a href="/profile/regional-activity.html">地域活動</a></li>
                      <li class="m-item"><a href="/profile/security-action.html">セキュリティアクション</a></li>
                      <li class="m-item"><a href="/profile/corporate-history.html">会社沿革</a></li>
                    </ul>
                  </div>
                  <div class="col">
                    <a href="/network-solution.html">
                      <h4 class="office-txt">ネットワークソリューション</h4>
                    </a>
                    <a href="/software-solution.html">
                      <h4 class="office-txt mt30">ソフトウェアソリューション</h4>
                    </a>
                    <ul>
                      <li class="m-item">
                        <a href="/software-solution/tech-program.html">LINE SMART CITY GovTech <br />プログラム</a>
                      </li>
                      <li class="m-item">
                        <a href="/software-solution/syncware.html">
                          スケジュール同期システム<br />
                          SyncWare シリーズ</a>
                      </li>
                    </ul>
                    <ul class="sub-list mb30">
                      <li class="s-item"><a href="/software-solution/syncware.html/#syncware-type1">SyncWare Type1</a>
                      </li>
                      <li class="s-item"><a href="/software-solution/syncware.html/#syncware-type2"></a> SyncWare
                        Type2</li>
                    </ul>
                    <a href="/identity-solution.html">
                      <h4 class="office-txt">IDソリューション（ADMS）</h4>
                    </a>
                  </div>
                  <div class="col">
                    <a href="/recruitment-information.html">
                      <h4 class="office-txt">採用情報</h4>
                    </a>
                    <ul>
                      <li class="m-item"><a href="/recruitment-information/news.html"> 新着情報</a></li>
                      <li class="m-item"><a href="/recruitment-information/graduate-recruitment.html">新卒採用</a></li>
                      <li class="m-item"><a href="/recruitment-information/career-recruitment.html">キャリア採用</a></li>
                      <li class="m-item"><a href="/recruitment-information/internship.html">インターンシップ</a></li>
                      <li class="m-item">
                        <a href="/recruitment-information/internship-entry.html">インターンシップ<br />エントリー</a>
                      </li>
                      <li class="m-item"><a href="/recruitment-information/comprehensive-training.html">充実の研修制度</a>
                      </li>
                      <li class="m-item"><a href="/recruitment-information/happy-welfare.html">楽しい福祉厚生</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer -->
    </div>

    <div class="copyright-wrapper">
      <div class="m-w1120">
        <div class="copy-block">
          <div class="row">
            <div class="left">
              <a href="/privacy-policy.html" class="d-inline">
                <p class="mr15">プライバシーポリシー　</p>
              </a>
              <a href="/security-policy.html" class="d-inline">
                <p>セキュリティポリシー</p>
              </a>
            </div>
            <div class="right">
              <p>©2023 JINS Corporation</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php wp_footer(); ?>
  <script>
        new Splide(".splide", {
            start: 1,
            type: "loop",
            padding: 12,
            autoWidth: true,
            focus: "center",
            pagination: false,
        }).mount();

        const interval = setTimeout(() => {
            document.querySelector(".splide__arrow.splide__arrow--next").click()
            clearInterval(interval);
        }, 2000)
    </script>
</body>
</html>
