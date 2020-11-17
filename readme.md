# AskForm

市役所等の行政機関の窓口では、お客様が来客するたびに、職員が作業を一度中断して対応します。また、大きな組織では各部署でお客様に対応する担当職員も様々であるため、窓口で対応した職員から担当者が対応するまでに時間を要してしまいます。本アプリをタブレット等に組み込み各部署の窓口に設置して、お客様自身にマイナンバーと暗証番号を入力していただくと、部署内共有のCHATWORKルームに通知が入るため、職員がマイナンバーを基に担当者を検索して対応するというものです。

# DEMO
![名称未設定](https://user-images.githubusercontent.com/64448438/97950960-e0b60280-1ddb-11eb-9548-fe966a57987b.jpg)

# Features

* 開発言語：PHP 7.4.7
* フレームワーク：Laravel
* データベース：Mysql
* サーバー：AWS

# Usage
INDEX画面でマイナンバーとパスワードを入力し、確認画面に進む。確認が出来たら「担当者を呼ぶ」ボタンを押す。
CHATWORKに相談者情報の通知が入り担当者は確認する。

git clone https://github.com/ingk-18/AskForm.git

# Author

* 作成者 稲垣良輔
* E-mail　readog1224@yahoo.co.jp

# License
AskForm is under [MIT license](https://en.wikipedia.org/wiki/MIT_License).