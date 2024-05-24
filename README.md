<h1 align="center">アルバイト新人教育管理アプリ</h1>

##  制作背景
大学1年時から現在も継続中の飲食店でのアルバイトの経験から制作してみました。<br>
新人教育の際に情報共有ができていないことが原因で効率が悪くなっていたため、Webアプリケーションで解決できないかと考えたことがきっかけです。

##  概要
アルバイトで新人教育をより効率的に行うために、業務の理解度を管理するアプリ。

<a href="https://job-training-ac311910ddce.herokuapp.com/" target="_blank">アプリへGO</a>

##  開発環境
<b>使用言語：</b><br>
- PHP
- HTML
- CSS(SCSS)
- JavaScript(React)

<b>環境：</b><br>
- Laravel
- AWS
- MySQL(MariaDB)
- Github

<b>デプロイ：</b><br>
- Heroku

##  データ構成
<b>「テーブル構成・リレーション」</b><br><br>
![image](https://github.com/AkahaneJunya/job_train/assets/133526862/5c83eefc-1d92-44ae-8cb4-38c3ca0c3f95)　

##  機能
- ログイン機能
- 店長、教育係、新人新規登録、編集、削除機能
- 業務新規登録、編集、削除機能
- それぞれのバリデーション
- 業務習熟度評価、更新機能

##  使い方
<b>業務習熟度評価機能：</b><br>
店長によって登録されたそれぞれの業務について、教育係はTrainer Rateで教育の進捗を管理し、新人はNewcomer Rateで自身の理解度の状況を管理することができます。
これによって新人教育時の情報共有が容易になり、効率的に新人教育を進めることができます。
![image](https://github.com/AkahaneJunya/job_train/assets/133526862/7dd0828f-ca98-426f-96ad-16ed91d75c4d)


##  今後の計画
- 見た目の改善
- 業務習熟度評価機能にコメントを追加
- 業務習熟度の進捗をグラフで確認
