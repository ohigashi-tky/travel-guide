# 観光ガイドアプリ

<p align="center">
  <img src="./public/img/travelguide_logo.png" alt="TravelGuide" width="200">
</p>

<br>

## 🔨 技術スタック
<p>
  <img src="https://img.shields.io/badge/Laravel-12.x-FF2D20?logo=laravel&style=flat" />
  <img src="https://img.shields.io/badge/Vue.js-3.x-4FC08D?logo=vuedotjs&style=flat" />
  <img src="https://img.shields.io/badge/TypeScript-5.x-3178C6?logo=typescript&style=flat" />
  <img src="https://img.shields.io/badge/TailwindCSS-3.x-06B6D4?logo=tailwindcss&style=flat" />
  <img src="https://img.shields.io/badge/MySQL-8.0-4479A1?logo=mysql&style=flat" />
</p>

<br>

## 🧱 アーキテクチャ構成
**クリーンアーキテクチャ**の思想に基づき、以下のようなディレクトリ構造を採用しています。
```
tabiq-web-v2/
├── app/
│   ├── Exceptions/          # 例外処理
│   ├── Http/                # コントローラ、バリデーション、レスポンス
│   ├── Models/              # DB操作
│   ├── Providers/           # DI・サービスプロバイダ
│   └── UseCases/            # ユースケース層（1ユースケース = 1クラス）
├── bootstrap/
├── cdk/                     # AWS CDK
├── config/
├── database/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   │   ├── components/      # 共通コンポーネント
│   │   ├── composables/     # Composition APIロジック
│   │   ├── layouts/         # ページレイアウト
│   │   ├── lib/             # 汎用関数
│   │   ├── pages/           # ページコンポーネント
│   │   ├── stores/          # 状態管理
│   │   └── types/           # TypeScript型定義
│   └── views/               # Blade（Vueマウント用など）
├── storage/
├── routes/
│   ├── web.php
│   └── api.php
├── tests/
│   ├── Feature
│   └── Unit
└── CONTRIBUTING.md          # 様々なルールを記載
```

<br>

## 🔑 認証
SSO (WorkOS AuthKit)  

<br>

## 🏠 環境構築
```
pnpm install && pnpm run build
composer run dev
```
localhost:8000にアクセス