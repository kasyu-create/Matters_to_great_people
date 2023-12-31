@extends('layout.layout')
@section('content')
		<div id="fh5co-main">

			<div class="fh5co-narrow-content">
				<div class="row">
					<div class="col-md-5">
						<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">私について <span>エンジニアとして</span></h2>
						<p class="fh5co-lead animate-box" data-animate-effect="fadeInLeft">東野　陽生（ひがしの　はるき）
							1995年5月21日生まれ (28歳)<br>
							大阪府堺市出身<br>
							</p>
						<p class="animate-box" data-animate-effect="fadeInLeft">株式会社ゼロイチにてバックエンドエンジニアとして２年以上働いていました。<br>
							会社に常駐しながら受託会社として保守運用をメインに業務をしていました。<br>
							会社ではPHPを使ったバックエンド処理やデータ周りを扱う事も多かったのでSQLを使ったデータの抽出や管理が多かったです。<br>
							チームの規模としては会社のバックエンドエンジニアは４人チームで、Gitを使ってコード管理を行なっていました。</p>
					</div>
					<div class="col-md-6 col-md-push-1 animate-box" data-animate-effect="fadeInLeft">
						<img src="images/IMG_3770.JPG" alt="Free HTML5 Bootstrap Template" class="img-responsive"> 
					</div>
				</div>
				
			</div>

			<div class="fh5co-narrow-content  animate-box" data-animate-effect="fadeInLeft">
				<h2 class="fh5co-heading" >携わった主なプロジェクト</span></h2>

				<div class="row">
					<div class="col-md-4 fh5co-staff">
						<img src="images/IMG_3777.png" alt="Free HTML5 Bootstrap Template" class="img-responsive" style="height: 250px;">
						<h3>携わった主なECサイト１</h3>
						<h4>Laravel Vue.js PHP SQL JSなど</h4>
						<h3>携わった主な業務</h3>
						<p>サイトの新規立ち上げ時においては、バリデーションの実装や管理画面でのCRUD処理やmigrationやseedersなどのDB管理を任されました。<br>
						   その後の運用保守では、
						   クライアントからの要望でバックエンド側の処理（お問い合わせページ実装や管理画面で商品や受注のカラム追加が多かったです。）があった時は、
						   自分でコーディングしてAWSへデプロイ作業を行っていました。</p>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="images/IMG_3780.png" alt="Free HTML5 Bootstrap Template" class="img-responsive" style="height: 250px;">
						<h3>携わった主なECサイト２</h3>
						<h4>FuelPHP PHP SQL JSなど</h4>
						<h3>携わった主な業務</h3>
						<p>サイトの新規立ち上げ時においては、お客様から頂いた商品情報や前サイトの顧客情報や受注情報などをDBに新規立ち上げ前に入れていました。<br>
							そしてその後の保守運用では、<br>商品詳細画面での商品動画の埋め込み（管理画面で個々の商品の動画を登録出来るようにし、フロント側で動画を表示させる）<br>
							商品購入時にギフトラッピング項目の追加（フロント画面の構築と受注完了時に値の登録）など運用開発では行っていました。</p>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="images/IMG_3778.png" alt="Free HTML5 Bootstrap Template" class="img-responsive" style="height: 250px;">
						<h3>携わった主なECサイト３</h3>
						<h4>FuelPHP PHP SQL JSなど</h4>
						<h3>携わった主な業務</h3>
						<p>保守運用から携わったのですが、お友達紹介機能でクーポンを発行して、お客様にメールを送信する機能実装や、
						１週間後に期限切れするクーポンがあると、メールでアナウンスするバッチ実装などを主に開発していました。<br>
						お友達紹介機能はクーポンと顧客の中間テーブルを作成し、
						お友達紹介時にレコードが生成されるようにして管理していました。<br>
						クーポン切れを告知するバッチは、SQLでクーポン切れの顧客を抽出し、
						該当顧客に対してメール送信するバッチを開発しました。
						</p>
					</div>
				</div>
			</div>

			<div class="fh5co-counters" style="background-image: url(images/hero.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
				<div class="fh5co-narrow-content animate-box">
					<div class="row" >
						<div class="col-md-4 text-center animate-box">
							<span class="fh5co-counter js-counter" data-from="0" data-to="67" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Clients Worked With</span>
						</div>
						<div class="col-md-4 text-center animate-box">
							<span class="fh5co-counter js-counter" data-from="0" data-to="130" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Completed Projects</span>
						</div>
						<div class="col-md-4 text-center animate-box">
							<span class="fh5co-counter js-counter" data-from="0" data-to="27232" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Line of Codes</span>
						</div>
					</div>
				</div>
			</div>

			<div class="fh5co-narrow-content fh5co-border-bottom">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">This Is What <span>We Love To Do</span></h2>
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-strategy"></i>
							</div>
							<div class="fh5co-text">
								<h3>大学時代（2014~2018）</h3>
								<p>お笑いに明け暮れ、３年の時に部長となり、落語の全国大会ではトップ10の成績に入りました。
								   学内での公演のみならず、京都を中心に大阪・滋賀など関西圏で出張公演も部で行っていました。
								   年間150件〜200件の出張公演の依頼を頂き、京都新聞にも取り上げて頂きました。</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-text">
								<h3>取り上げて頂いた当時の京都新聞</h3>
								<img src="images/IMG_3773.PNG" alt="Free HTML5 Bootstrap Template" class="img-responsive-me">
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-telescope"></i>
							</div>
							<div class="fh5co-text">
								<h3>町役場時代(2018~2022)</h3>
								<p>「無駄なプライドがなく、メンタル強そう」 という理由でタスクが同期の中で一番多い教育委員会に配属されました。
									町施設の貸し出し及び管理を紙の台帳をデータで管理するようにし、外部からもチェック可能に変更しました。
									使用者も利用が楽になったと意見を頂き、タスク減少に成功しました。</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-text">
								<h3>プログラミング独学時の仲間たち</h3>
							</div>
							<img src="images/ohurain.png" alt="Free HTML5 Bootstrap Template" class="img-responsive-me" style="margin-left:88px;">
						</div>
					</div>


					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-tools-2"></i>
							</div>
							<div class="fh5co-text">
								<h3>エンジニア時代(2020~2022)</h3>
								<p>前職ではバックエンドエンジニアとして２年以上働き、会社に常駐し保守運用をメインに業務をしていました。
								   会社ではPHPを使ったバックエンド処理やデータ周りを扱う事も多かったのでSQLを使ったデータの抽出や管理が多く、
								   Gitを使ってコード管理を行なっていました。</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-text">
								<h3>前職時代（１番手前です）</h3>
							</div>
							<img src="images/IMG_3774.jpeg" alt="Free HTML5 Bootstrap Template" class="img-responsive-me" style="margin-left:88px;">
						</div>
					</div>

					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-circle-compass"></i>
							</div>
							<div class="fh5co-text">
								<h3>Youtuber時代(2023)</h3>
								<p>周りが弱く自分でもいけるのではと思ったのでYoutubeに一本化しました。
								   Youtubeのチャンネル登録者が半年で2.2万人
								   Tiktokのフォロワーが1年で1.8万人を達成しました。 
								   しかし、目標していたYoutuberとして会社員時代の給料を超える事が出来なかったので、
								   エンジニアとして再び働く事にしました。</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-text">
								<h3>Youtubeのアイコン</h3>
							</div>
							<img src="images/IMG_3776.png" alt="Free HTML5 Bootstrap Template" class="img-responsive-me" style="margin-left:88px;">
						</div>
					</div>

				</div>
			</div>
		

			<div class="fh5co-narrow-content">
				<div class="row">
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<h1 class="fh5co-heading-colored">Start Your Project Now!</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p><a href="#" class="btn btn-primary btn-outline">Get Started</a></p>
					</div>
					<div class="col-md-7 col-md-push-1">
						<div class="row">
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
@endsection

