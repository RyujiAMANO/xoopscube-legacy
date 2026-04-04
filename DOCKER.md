# Docker 開発環境

XOOPS Cube Legacy をDockerで起動するための手順。

## 構成

| サービス | イメージ | ポート |
|---|---|---|
| web | PHP 8.2 + Apache | localhost:8080 |
| db | MySQL 8.0 (utf8mb4) | localhost:3306 |

## 起動

```bash
docker compose build
docker compose up -d
```

ブラウザで http://localhost:8080 にアクセスするとインストーラーが起動する。

## 停止

```bash
docker compose down
```

DBデータも含めて完全にクリーンにする場合：

```bash
docker compose down -v
```

## インストーラーのDB接続設定

| 項目 | 値 |
|---|---|
| ホスト | `db` |
| ユーザー | `xcl` |
| パスワード | `xcl` |
| DB名 | `xcl` |
| XOOPS_TRUST_PATH | `/var/www/xoops_trust_path` |

**注意: ホスト名は `localhost` ではなく `db` を指定すること。** `localhost` だとソケット接続になりDocker環境では失敗する。

## DB接続（Sequel Ace等）

ホスト側からDBクライアントで接続する場合：

| 項目 | 値 |
|---|---|
| Host | `127.0.0.1` |
| Port | `3306` |
| Username | `xcl` / `root` |
| Password | `xcl` / `root` |
| Database | `xcl` |

## PHP環境

- PHP 8.2 + Apache
- 日本語ロケール (ja_JP.UTF-8)
- タイムゾーン: Asia/Tokyo
- 拡張: gd, mysqli, pdo_mysql, zip, mbstring, opcache
- mod_rewrite 有効
