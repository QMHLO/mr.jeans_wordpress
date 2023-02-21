const tableData = [
  {
    year: "1996年",
    projects: [
      {
        month: "4月",
        content: "甲府市相生にて創業",
      },
    ],
  },
  {
    year: "1998年",
    projects: [
      {
        month: "6月",
        content: "自治体ネットワーク構築開始",
      },
    ],
  },
  {
    year: "2000年",
    projects: [
      {
        month: "1月",
        content: "情報プラザ運営システム「ITMAX」リリース",
      },
    ],
  },
  {
    year: "2001年",
    projects: [
      {
        month: "2月",
        content: "グループウェアシステム「eG-MAX」リリース",
      },
    ],
  },
  {
    year: "2002年",
    projects: [
      {
        month: "8月",
        content: "東京事業所開設（千代田区二番町）",
      },
    ],
  },
  {
    year: "2003年",
    projects: [
      {
        month: "12月",
        content: "企業年金管理システム「KIZAN」リリース",
      },
    ],
  },
  {
    year: "2004年",
    projects: [
      {
        month: "1月",
        content: "資本金を4,300万円に増資",
      },
      {
        month: "12月",
        content: "コミュニティシステム「OPENCITY」リリース",
      },
    ],
  },
  {
    year: "2006年",
    projects: [
      {
        month: "3月",
        content: "ID統合管理ソフトウェア「ADMS」リリース",
      },
      {
        month: "10月",
        content: "子育て応援・男女いきいき宣言企業へ登録",
      },
    ],
  },
  {
    year: "2006年",
    projects: [
      {
        month: "4月",
        content: "イベント・講習会募集システム「WebEventBox」リリース",
      },
      {
        month: "10月",
        content: "ISO/IEC27001 情報セキュリティマネジメントシステム認証取得",
      },
    ],
  },
  {
    year: "2006年",
    projects: [
      {
        month: "4月",
        content: "シンクライアントシステム構築開始<br />VMwareによるサーバ仮想化システム構築開始",
      },
    ],
  },
  {
    year: "2011年",
    projects: [
      {
        month: "11月",
        content: "山梨本社新築移転（笛吹市境川町）",
      },
    ],
  },
  {
    year: "2017年",
    projects: [
      {
        month: "3月",
        content: "山梨本社南館増設",
      },
    ],
  },
  {
    year: "2018年",
    projects: [
      {
        month: "2月",
        content: "東京事業所移転（千代田区内神田）",
      },
    ],
  },
  {
    year: "2018年",
    projects: [
      {
        month: "6月",
        content: "SSOソフトウェア「ADMS SSO」リリース",
      },
    ],
  },
  {
    year: "2019年",
    projects: [
      {
        month: "11月",
        content: "IPA SECURITY ACTION 普及賛同企業に登録",
      },
    ],
  },
  {
    year: "2020年",
    projects: [
      {
        month: "3月",
        content: "ISO9001 品質マネジメントシステム認証取得",
      },
    ],
  },
  {
    year: "2021年",
    projects: [
      {
        month: "3月",
        content: "山梨本社北館増設",
      },
    ],
  },
];

function app() {
  Alpine.data("corporateHistory", () => ({
    histories: tableData,
  }));
}

document.addEventListener("alpine:init", app);

new Splide(".splide", {
  start: 2,
  type: "loop",
  padding: 12,
  autoWidth: true,
  focus: "center",
  pagination: false,
}).mount();
