<?php get_header(); ?>

<div class="top_area">
	<div class="mov_wrap">
		<span class="obi"></span>
		<?php if(is_mobile()) : ?>
		<video src="<?php echo get_template_directory_uri(); ?>/assets_mitani/video/mitani_sp0702.mp4" autoplay muted loop playsinline id="video" class="top_mov"></video>
		<?php else: ?>
		<video src="<?php echo get_template_directory_uri(); ?>/assets_mitani/video/mitani_pc0702.mp4" autoplay muted loop playsinline id="video" class="top_mov"></video>
		<?php endif; ?>
	</div>
</div>
<div class="about_area">
	<?php if(is_mobile()) : ?>
	<h1><img class="abouttitle01" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/title_top01_sp.svg" width="308" height="214" alt="募集職種、石川県を動かす仕事。"></h1>
	<?php else: ?>
	<h1><img class="abouttitle01" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/title_top01.svg" width="648" height="162" alt="募集職種、石川県を動かす仕事。"></h1>
	<?php endif; ?>
	<p class="abouttext">仕事をするなら、<br>ワクワクする仕事のほうが<br class="sp_block">いいと思いませんか？<br>三谷サービスエンジンの事業は、<br class="sp_block">この街で暮らす人たちの<br class="sp_block">毎日を動かすこと。<br>つまり、石川県を動かす<br class="sp_block">“エンジン”になることが<br>わたしたちの使命であり、<br class="sp_block">仕事なんです。<br>「石川県を動かす」って、<br class="sp_block">ちょっとワクワクしませんか？<br>そんなわたしたちの事業に<br class="sp_block">ワクワクを感じてくれたら、<br class="sp_block">わたしたちはとってもうれしい。<br>そして、<br class="sp_block">三谷サービスエンジンという会社が<br>あなたの人生を動かす<br class="sp_block">エンジンになれたら<br>もっとうれしいです。</p>
	<p class="weare">私たち三谷サービスエンジンは<br> 石川県を動かす<span>“ENGINE”</span>です。</p>
	<img class="aboutlogo" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/main_logo.jpg" width="261" height="96" alt="TEAM ENGINE FOR ISHIKAWA">
</div>
<div id="engine15" class="engine15_area">
	<div class="engine15_top">
		<?php if(is_mobile()) : ?>
		<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/title_15engins_sp.svg" width="324" height="162" alt="15 ENGINS あなたを動かす15のENGINE">
		<?php else: ?>
		<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/title_15engins.svg" width="854" height="137" alt="15 ENGINS あなたを動かす15のENGINE">
		<?php endif; ?>
	</div>
	<img class="engine01" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine01.svg" width="230" height="88" alt="ENGINE01">
	<div class="engine_flex01">
		<?php if(!is_mobile()) : ?>
		<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine01img.jpg" width="540" height="369" alt="">
		<?php endif; ?>
		<div class="textwrap">
<!-- 			<p class="sub">東証一部上場する総合商社</p> -->
			<h2 class="engine_title">三谷産業グループの<br>エネルギー事業を担う会社！</h2>
			<span class="line"></span>
			<p class="engine_text">日々の暮らし、<br class="sp_block">社会の発展には欠かすことのできない<br>エネルギーを提供しています。</p>
		</div>
		<?php if(is_mobile()) : ?>
		<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine01img.jpg" width="540" height="369" alt="">
		<?php endif; ?>
	</div>
	<div class="engine02wrap">
		<img class="engine02" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine02.svg" width="230" height="88" alt="ENGINE02">
		<div class="engine_flex01">
			<div class="textwrap">
				<h2 class="engine_title">ENEOS県内<span class="din">NO.1</span>の<br>店舗数！</h2>
				<span class="line"></span>
				<p class="engine_text">店舗それぞれには<br class="sp_block">多くのお客さまとの信頼関係や<br>実績があります。</p>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine02img.jpg" width="540" height="369" alt="">
		</div>
	</div>
	<img class="engine03" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine03.svg" width="230" height="88" alt="ENGINE03">
	<div class="engine_flex01">
		<?php if(!is_mobile()) : ?>
		<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine03img.jpg" width="538" height="368" alt="">
		<?php endif; ?>
		<div class="textwrap">
			<h2 class="engine_title">初任給高卒<span class="din">159,000</span>円〜<br>スタート！</h2>
			<span class="line"></span>
			<p class="engine_text01">資格を取得すれば業務の幅が広がり、<br>さらなる収入アップに繋がります！</p>
			<p class="engine_text02">当社勤続年数10年程度の一般社員・<br class="sp_block">主任の平均年収406万円。<br>全国の産業計30〜34歳平均年収376万円 <br class="sp_block">※2018年厚生労働省調べ。</p>
		</div>
		<?php if(is_mobile()) : ?>
		<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine03img.jpg" width="538" height="368" alt="">
		<?php endif; ?>
	</div>
	<?php if(is_mobile()) : ?>
	<div class="sp_moveimg">
		<div class="sp_moveimg_wrap">
			<div class="sp_moveimg_inner">
				<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine03img_sp01.jpg" width="156" height="106" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine03img_sp02.jpg" width="156" height="106" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine03img_sp03.jpg" width="156" height="106" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine03img_sp04.jpg" width="156" height="106" alt="">
			</div>
		</div>
	</div>
	<div class="engine02wrap mgt0 spback02">
		<img class="engine_sp" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine04.svg" width="230" height="88" alt="ENGINE04">
		<div class="engine_flex01">
			<div class="textwrap">
				<h2 class="engine_title">努力した分<br>しっかりと評価！</h2>
				<span class="line"></span>
				<p class="engine_text">現在、夏(6月)、冬(12月)に加え、<br><span><b class="din">7</b>年連続で決算ボーナス</span>(4月)を<br class="sp_block">支給しています。</p>
			</div>
		</div>
	</div>
	<img class="engine_sp mgt" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine05.svg" width="230" height="88" alt="ENGINE05">
	<div class="engine_flex01">
		<div class="textwrap">
			<h2 class="engine_title">社員の健康を第一に<br>笑顔で元気に働ける<br>環境づくりを目指す！</h2>
			<span class="line"></span>
			<p class="engine_text"><span>休日は年間<b class="din">108</b>日<br>＋<br>有給休暇</span>があります。</p>
		</div>
	</div>
	<?php else: ?>
	<img class="engine03img mgt" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine03img02.jpg" width="1364" height="245" alt="">
	<div class="engine45wrap">
		<div class="block">
			<img class="engine04" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine04.svg" width="230" height="88" alt="ENGINE04">
			<h2 class="engine_title">努力した分<br>しっかりと評価！</h2>
			<span class="line"></span>
			<p class="engine_text">現在、夏(6月)、冬(12月)に加え、<br><span><b class="din">7</b>年連続で決算ボーナス</span>(4月)を<br class="sp_block">支給しています。</p>

		</div>
		<div class="block">
			<img class="engine05" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine05.svg" width="230" height="88" alt="ENGINE05">
			<h2 class="engine_title">社員の健康を第一に<br>笑顔で元気に働ける<br>環境づくりを目指す！</h2>
			<span class="line"></span>
			<p class="engine_text"><span>休日は年間<b class="din">108</b>日＋有給休暇</span>があります。</p>
		</div>
	</div>
	<?php endif; ?>
	<?php if(is_mobile()) : ?>
	<div class="engine02wrap">
		<img class="engine_sp" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine06.svg" width="230" height="88" alt="ENGINE06">
		<div class="engine_flex01">
			<div class="textwrap">
				<h2 class="engine_title">入社の準備に必要な<br>支度金支給有り！</h2>
				<span class="line"></span>
				<p class="engine_text">新入社員は<span>10万円</span>が<br>支度金として支給されます。</p>
				<p class="engine_text mgt">寮に入る方は更に<span>プラス10万円、<br>合計<b class="din">20</b>万円が</span><br>支度金として支給されます。</p>
			</div>
		</div>
	</div>
	<img class="engine_sp mgt" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07.svg" width="230" height="88" alt="ENGINE07">
	<div class="engine_flex01">
		<div class="textwrap">
			<h2 class="engine_title">遠方からの応募も大歓迎！</h2>
			<span class="line"></span>
			<p class="engine_text">金沢市の駅西本町と新神田に<br>社員寮(独身用)を２棟完備しています。</p>
		</div>
	</div>
	<div class="spwrap">
		<div class="engine07sliderwrap">
			<ul class="engine07main_slider">
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07sliderimg01.jpg" width="379" height="239" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07sliderimg02.jpg" width="379" height="239" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07sliderimg03.jpg" width="379" height="239" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07sliderimg04.jpg" width="379" height="239" alt=""></li>
			</ul>
			<ul class="engine07sub_slider">
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07sliderimg01.jpg" width="90" height="57" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07sliderimg02.jpg" width="90" height="57" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07sliderimg03.jpg" width="90" height="57" alt=""></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07sliderimg04.jpg" width="90" height="57" alt=""></li>
			</ul>
		</div>
	</div>
	<?php else: ?>
	<div class="engine67wrap">
		<div class="block">
			<img class="engine06" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine06.svg" width="230" height="88" alt="ENGINE06">
			<h2 class="engine_title">入社の準備に必要な<br>支度金支給有り！</h2>
			<span class="line"></span>
			<p class="engine_text">新入社員は<span>10万円</span>が支度金として支給されます。</p>
			<p class="engine_text mgt">寮に入る方は更に<span>プラス10万円、合計<b class="din">20</b>万円が</span><br>支度金として支給されます。</p>
		</div>
		<div class="block">
			<img class="engine07" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07.svg" width="230" height="88" alt="ENGINE07">
			<h2 class="engine_title">遠方からの応募も大歓迎！</h2>
			<span class="line"></span>
			<p class="engine_text">金沢市の駅西本町と新神田に<br>社員寮(独身用)を２棟完備しています。</p>
			<div class="engine07sliderwrap">
				<ul class="engine07main_slider">
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07sliderimg01.jpg" width="379" height="239" alt=""></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07sliderimg02.jpg" width="379" height="239" alt=""></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07sliderimg03.jpg" width="379" height="239" alt=""></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07sliderimg04.jpg" width="379" height="239" alt=""></li>
				</ul>
				<ul class="engine07sub_slider">
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07sliderimg01.jpg" width="90" height="57" alt=""></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07sliderimg02.jpg" width="90" height="57" alt=""></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07sliderimg03.jpg" width="90" height="57" alt=""></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine07sliderimg04.jpg" width="90" height="57" alt=""></li>
				</ul>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div class="engine08wrap spback02">
		<img class="engine08" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine08.svg" width="230" height="88" alt="ENGINE08">
		<div class="engine_flex01">
			<?php if(!is_mobile()) : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine08img.jpg" width="540" height="369" alt="">
			<?php endif; ?>
			<div class="textwrap">
				<h2 class="engine_title">スキルに応じた<br>キャリアパス！</h2>
				<span class="line"></span>
				<p class="engine_text">昇進できる条件や基準に応じて、<br>チームで目標に向かって<br class="sp_block">取り組む事ができます。</p>
			</div>
			<?php if(is_mobile()) : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine08img.jpg" width="540" height="369" alt="">
			<?php endif; ?>
		</div>
	</div>
	<?php if(is_mobile()) : ?>
	<div class="sp_moveimg">
		<div class="sp_moveimg_wrap">
			<div class="sp_moveimg_inner">
				<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine08img_sp01.jpg" width="156" height="106" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine08img_sp02.jpg" width="156" height="106" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine08img_sp03.jpg" width="156" height="106" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine08img_sp04.jpg" width="156" height="106" alt="">
			</div>
		</div>
	</div>
	<img class="engine_sp mgt" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine09.svg" width="230" height="88" alt="ENGINE09">
	<div class="engine_flex01">
		<div class="textwrap">
			<h2 class="engine_title">健康で体力とやる気が<br>あれば、年齢に関係なく<br>ずっと社員！</h2>
			<span class="line"></span>
			<p class="engine_text">定年制度はありません。</p>
		</div>
	</div>
	<div class="engine02wrap">
		<img class="engine_sp" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine10.svg" width="230" height="88" alt="ENGINE10">
		<div class="engine_flex01">
			<div class="textwrap">
				<h2 class="engine_title">一人の人間として<br>成長できる環境がある!</h2>
				<span class="line"></span>
				<p class="engine_text">社員数100名のやさしい先輩から<br>多くの技術や接客を学べます。</p>
			</div>
		</div>
	</div>
	<?php else: ?>
	<img class="engine08img02" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine08img02.jpg" width="1364" height="244" alt="">
	<div class="engine910wrap">
		<div class="block">
			<img class="engine09" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine09.svg" width="230" height="88" alt="ENGINE09">
			<h2 class="engine_title">健康で体力とやる気が<br>あれば、年齢に関係なく<br>ずっと社員！</h2>
			<span class="line"></span>
			<p class="engine_text">定年制度はありません。</p>
		</div>
		<div class="block">
			<img class="engine10" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine10.svg" width="230" height="88" alt="ENGINE10">
			<h2 class="engine_title">一人の人間として<br>成長できる環境がある!</h2>
			<span class="line"></span>
			<p class="engine_text">社員数100名のやさしい先輩から<br>多くの技術や接客を学べます。</p>
		</div>
	</div>
	<?php endif; ?>
	<?php if(is_mobile()) : ?>
	<img class="engine_sp mgt" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine11.svg" width="230" height="88" alt="ENGINE11">
	<div class="engine_flex01">
		<div class="textwrap">
			<h2 class="engine_title">社員の幸せを<br>祝福する!</h2>
			<span class="line"></span>
			<p class="engine_text">結婚・出産などのライフイベントでは、<br><span>祝金を支給</span>します。</p>
		</div>
	</div>
	<div class="engine02wrap spback02">
		<img class="engine_sp" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine12.svg" width="230" height="88" alt="ENGINE12">
		<div class="engine_flex01">
			<div class="textwrap">
				<h2 class="engine_title">豪華リゾートホテルで<br>夢心地！</h2>
				<span class="line"></span>
				<p class="engine_text">京都・神戸（有馬）のリゾートホテルの<br>会員なので<span>優待価格で利用</span>できます。</p>
			</div>
		</div>
	</div>
	<?php else: ?>
	<div class="engine1112wrap">
		<div class="block">
			<img class="engine11" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine11.svg" width="230" height="88" alt="ENGINE11">
			<h2 class="engine_title">社員の幸せを<br>祝福する!</h2>
			<span class="line"></span>
			<p class="engine_text">結婚・出産などのライフイベントでは、<br><span>祝金を支給</span>します。</p>
		</div>
		<div class="block">
			<img class="engine12" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine12.svg" width="230" height="88" alt="ENGINE12">
			<h2 class="engine_title">豪華リゾートホテルで<br>夢心地！</h2>
			<span class="line"></span>
			<p class="engine_text">京都・神戸（有馬）のリゾートホテルの<br>会員なので<span>優待価格で利用</span>できます。</p>
		</div>
	</div>
	<?php endif; ?>
	<?php if(is_mobile()) : ?>
	<img class="engine_sp mgt" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine13.svg" width="230" height="88" alt="ENGINE13">
	<div class="engine_flex01">
		<div class="textwrap">
			<h2 class="engine_title">永く勤めた方に<br>ご褒美！</h2>
			<span class="line"></span>
			<p class="engine_text">勤続10年で<span>和倉温泉加賀屋ペア宿泊券、</span><br>勤続25年で<span>旅行券</span>がもらえます。</p>
		</div>
	</div>
	<div class="engine02wrap">
		<img class="engine_sp" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine14.svg" width="230" height="88" alt="ENGINE14">
		<div class="engine_flex01">
			<div class="textwrap">
				<h2 class="engine_title">色々な場所へ<br>旅行に行ける！</h2>
				<span class="line"></span>
				<p class="engine_text">社員の親睦会として<br><span>国内旅行、海外旅行</span>があります。</p>
			</div>
		</div>
	</div>
	<img class="engine_sp mgt" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine15.svg" width="230" height="88" alt="ENGINE15">
	<div class="engine_flex01">
		<div class="textwrap">
			<h2 class="engine_title">会社取扱商品が<br>社員価格！</h2>
			<span class="line"></span>
			<p class="engine_text">ガソリン、タイヤ、車検などが<br>社員価格で購入できます。</p>
		</div>
	</div>
	<?php else: ?>
	<div class="engine131415wrap">
		<div class="block">
			<img class="engine13" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine13.svg" width="230" height="88" alt="ENGINE13">
			<h2 class="engine_title">永く勤めた方に<br>ご褒美！</h2>
			<span class="line"></span>
			<p class="engine_text">勤続10年で<span>和倉温泉加賀屋ペア宿泊券、</span><br>勤続25年で<span>旅行券</span>がもらえます。</p>
		</div>
		<div class="block">
			<img class="engine14" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine14.svg" width="230" height="88" alt="ENGINE14">
			<h2 class="engine_title">色々な場所へ<br>旅行に行ける！</h2>
			<span class="line"></span>
			<p class="engine_text">社員の親睦会として<br><span>国内旅行、海外旅行</span>があります。</p>
		</div>
		<div class="block">
			<img class="engine15" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/engine15.svg" width="230" height="88" alt="ENGINE15">
			<h2 class="engine_title">会社取扱商品が<br>社員価格！</h2>
			<span class="line"></span>
			<p class="engine_text">ガソリン、タイヤ、車検などが<br>社員価格で購入できます。</p>
		</div>
	</div>
	<?php endif; ?>
</div>
<div id="recruitoutline" class="recruit_area">
	<div class="recruit_top">
		<?php if(is_mobile()) : ?>
		<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/title_recruit_sp.svg" width="158" height="81" alt="RECRUIT 募集要項">
		<?php else: ?>
		<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/title_recruit.svg" width="166" height="89" alt="RECRUIT 募集要項">
		<?php endif; ?>
	</div>
	<div class="info_wrap">
		<div class="info_head">
			<div class="tab highschool active">
				<p>高等学校</p>
			</div>
			<div class="tab college">
				<p>短期大学/専門学校</p>
			</div>
		<?php if(is_mobile()) : ?>
		</div>
		<div class="info_head spblock">
		<?php endif; ?>
			<div class="tab fouryear">
				<p>４年制大学</p>
			</div>
			<div class="tab midcareer">
				<p>中途採用</p>
			</div>
		</div>
		<div class="info_content">
			<div class="content highschool active">
				<table>
					<tbody>
						<tr>
							<th>募集職種</th>
							<td>販売員（ガソリンスタンドスタッフ）</td>
						</tr>
						<tr>
							<th>雇用形態</th>
							<td>正社員</td>
						</tr>
						<tr>
							<th>業務内容</th>
							<td>接客、燃料の給油作業や洗車等のガソリンスタンド業務全般<br>オイルやタイヤ交換等の自動車メンテナンス、自動車用品の販売</td>
						</tr>
						<tr>
							<th>必要な<br class="sp_block">資格・免許</th>
							<td>1. 普通自動車免許（AT限定可）<br>2. 危険物取扱乙種4類 (有るとなお良し、入社後でも取得可能)  </td>
						</tr>
						<tr>
							<th>就業場所</th>
							<td>金沢市・野々市市・白山市にあるＥＮＥＯＳガソリンスタンドの１６店舗</td>
						</tr>
						<tr>
							<th>就業時間</th>
							<td>変形労働時間制 (１年単位)　　例：7:00~16:00  /  8:30~17:30  /  11:00~20:00<br><span class="cap">※就業場所により異なります。</span></td>
						</tr>
						<tr>
							<th>給与</th>
							<td>159,000（基本給156,000＋職務手当3,000）</td>
						</tr>
						<tr>
							<th>諸手当</th>
							<td>資格手当（危険物取扱乙種４類、自動車整備士、特級損害保険）、住宅手当、通勤手当、<br class="sp_none">時間外手当など<br class="sp_block"><span class="cap mgl">※通勤手当上限あり 月額50,000円まで</span></td>
						</tr>
						<tr>
							<th>資格所得<br class="sp_block">支援制度</th>
							<td>国家資格自動車整備士の実技試験費用は、会社が全額負担致します。<br>この支援を活用して自己のスキルアップを目指せます！</td>
						</tr>
						<tr>
							<th>賞与</th>
							<td>年２回</td>
						</tr>
						<tr>
							<th>昇給</th>
							<td>年１回</td>
						</tr>
						<tr>
							<th>加入保険等</th>
							<td>健康保険・厚生年金保険・ 雇用保険・労災保険・ 財形貯金</td>
						</tr>
						<tr>
							<th>企業年金</th>
							<td>確定給付年金</td>
						</tr>
						<tr>
							<th>退職金制度</th>
							<td>あり（勤続２年以上が条件）</td>
						</tr>
						<tr>
							<th>時間外労働</th>
							<td>あり（月平均26時間）</td>
						</tr>
						<tr>
							<th>休日</th>
							<td>8～9日 / 月の休み<br>年間休日数108日</td>
						</tr>
						<tr>
							<th>有給休暇</th>
							<td>入社時0日、6ヶ月経過後10日</td>
						</tr>
						<tr>
							<th>試用期間</th>
							<td>6ヶ月 　※労働条件は社員と同様。</td>
						</tr>
					</tbody>
				</table>
			</div>
			<p class="contenttext">まずは<br class="sp_block">担任の先生または進路指導の先生に<br class="sp_block">ご相談ください！</p>
			<div class="btn_wrap">
				<a href="<?php echo get_template_directory_uri(); ?>/assets_mitani/other/mitani_pdf_ol.pdf" target="_blank" rel="noopener" class="download"><span>資料ダウンロード</span></a>
				<a href="/contact/" class="tour"><span>会社見学しに行く</span></a>
			</div>
		</div>
	</div>
</div>
<div id="recruitflow" class="flow_area">
	<div class="flow_top">
		<?php if(is_mobile()) : ?>
		<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/title_flow_sp.svg" width="276" height="90" alt="採用までの流れ">
		<?php else: ?>
		<img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/title_flow.svg" width="292" height="96" alt="採用までの流れ">
		<?php endif; ?>
	</div>
	<div class="flow_wrap">
		<div class="flow">
			<img class="box" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/step01.svg" width="247" height="220" alt="STEP01 エントリー　期間内に書類を提出">
			<img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/icon_steparrow.svg" width="25" height="29" alt="">
			<img class="box" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/step02.svg" width="247" height="220" alt="STEP02 作文試験">
			<img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/icon_steparrow.svg" width="25" height="29" alt="">
			<img class="box" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/step03.svg" width="247" height="220" alt="STEP03 役員面接">
			<img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/icon_steparrow.svg" width="25" height="29" alt="">
			<img class="box" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/step04.svg" width="247" height="220" alt="STEP04 採用　選考日より一日以内に連絡">
		</div>
<!-- 		<p class="cap">※応募方法は<span>各募集要項</span>を参照ください</p> -->
	</div>
	<div class="info_wrap mgt">
		<div class="info_head">
			<div class="tab highschool active">
				<p>高等学校</p>
			</div>
			<div class="tab college">
				<p>短期大学/専門学校</p>
			</div>
		<?php if(is_mobile()) : ?>
		</div>
		<div class="info_head spblock">
		<?php endif; ?>
			<div class="tab fouryear">
				<p>４年制大学</p>
			</div>
			<div class="tab midcareer">
				<p>中途採用</p>
			</div>
		</div>
		<div class="info_content">
			<div class="content highschool">
				<table>
					<tbody>
						<tr>
							<th>募集期間</th>
							<td>9月5日以降随時</td>
						</tr>
						<tr>
							<th>選考日</th>
							<td>9月16日以降随時</td>
						</tr>
						<tr>
							<th>選考場所</th>
							<td>〒921－8801　本社（石川県野々市市御経塚3丁目47番地）<br><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25639.765570408315!2d136.58120576999954!3d36.5548195!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff834e092399b9d%3A0x7e5f4eb59ca75204!2z44CSOTIxLTg4MDEg55-z5bed55yM6YeO44CF5biC5biC5b6h57WM5aGa77yT5LiB55uu77yU77yX!5e0!3m2!1sja!2sjp!4v1625048704384!5m2!1sja!2sjp" width="100%" height="210" style="border:0;" allowfullscreen="" loading="lazy"></iframe></td>
						</tr>
						<tr>
							<th>応募方法</th>
							<td>在学先の高校からの推薦</td>
						</tr>
						<tr>
							<th>提出書類</th>
							<td>履歴書、調査書</td>
						</tr>
						<tr>
							<th>書類提出先</th>
							<td>〒921－8801<br>石川県野々市市御経塚3丁目47番地　株式会社三谷サービスエンジン業務課宛て</td>
						</tr>
						<tr>
							<th>複数応募</th>
							<td>11月1日以降可能</td>
						</tr>
						<tr>
							<th>担当者</th>
							<td>業務課　主任：北村<br>TEL 076-214-3325<br>FAX 076-214-3312<br>MAIL kitamura@ms-engine.co.jp</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="meetworker_area">
	<span class="head_space"></span>
	<div class="contentwrap">
		<?php if(is_mobile()) : ?>
		<img class="meetimg01" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/title_meetworker_sp.svg" width="286" height="86" alt="働くENGINEに会いに行く！">
		<?php else: ?>
		<img class="meetimg01" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/title_meetworker.svg" width="572" height="48" alt="働くENGINEに会いに行く！">
		<?php endif; ?>
		<p class="meettext">三谷サービスエンジンのことが<br class="sp_block">もっとよくわかる会社見学実施中です。<br>電話・メールにて<br class="sp_block">随時お申込受け付けております。<br class="sp_block">お気軽にご連絡ください！</p>
		<?php if(is_mobile()) : ?>
		<img class="meetimg02" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/meetworker_img_sp01.jpg" width="328" height="224" alt="">
		<div class="contactwrapsp">
			<a href="tel:0762143325" class="left_link"><img class="meetimg02" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/meetworker_img_sp02.jpg" width="271" height="140" alt="TEL:076-214-3325"></a>
			<a href="/contact/" class="right_link"><img class="meetimg02" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/meetworker_img_sp03.jpg" width="271" height="140" alt="MAIL:team-engine@ms-engine.co.jp　お問い合わせフォームへ"></a>
		</div>
		<?php else: ?>
		<div class="meetimg_wrap">
			<img class="meetimg02" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/meetworker_img.png" width="1232" height="452" alt="TEL:076-214-3325 MAIL:team-engine@ms-engine.co.jp　お問い合わせフォームへ">
			<div class="linkwrap">
				<p class="left_link"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/contactbtn01.jpg" width="420" height="145" alt="TEL:076-214-3325"></p>
				<a href="/contact/" class="right_link imghover"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/contactbtn02.jpg" width="420" height="145" alt="MAIL:team-engine@ms-engine.co.jp　お問い合わせフォームへ"></a>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<span class="foot_space"></span>
</div>
<div class="entry_area">
	<?php if(is_mobile()) : ?>
	<img class="entryimg" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/entry_sp.png" width="374" height="818" alt="ENTRY 石川県を動かすTEAMENGINEの一員になろう！　高校生の方はまずは担任の先生または進路指導の先生にご相談ください！">
	<?php else: ?>
	<img class="entryimg" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/entry.png" width="1364" height="823" alt="ENTRY 石川県を動かすTEAMENGINEの一員になろう！　高校生の方はまずは担任の先生または進路指導の先生にご相談ください！">
	<?php endif; ?>
	<a class="entrylink" href="/entry/"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/entry_btn.png" width="175" height="175" alt="ENTRY"></a>
</div>
<div class="movie_area">
	<span class="head_space"></span>
	<div class="contentwrap">
		<h2 class="movietitle din">SPECIAL MOVIE</h2>
		<p class="movietext">三谷サービスエンジンのことが<br class="sp_block">もっともっとよく分かる<br>働く社員に直撃インタビュー！</p>
		<a class="movielink" href="https://www.youtube.com/watch?v=pusHow0OJL4" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/movie_linkimg.jpg" width="777" height="440" alt="Youtube Movie"></a>
	</div>
	<span class="foot_space"></span>
</div>
<div class="contact_area">
	<div class="contentwrap">
		<p class="contacttext">わからないこと、気になること、<br class="sp_block">なんでもお気軽にご相談ください！</p>
		<div class="linkwrap">
			<?php if(is_mobile()) : ?>
			<a href="tel:0762143325" class="left_link"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/meetworker_img_sp02.jpg" width="271" height="140" alt="TEL:076-214-3325"></a>
			<a href="/contact/" class="right_link"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/meetworker_img_sp03.jpg" width="271" height="140" alt="MAIL:team-engine@ms-engine.co.jp　お問い合わせフォームへ"></a>
			<?php else: ?>
			<p class="left_link"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/contactbtn01.jpg" width="420" height="145" alt="TEL:076-214-3325"></p>
			<a href="/contact/" class="right_link imghover"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/contactbtn02.jpg" width="420" height="145" alt="MAIL:team-engine@ms-engine.co.jp　お問い合わせフォームへ"></a>
			<?php endif; ?>
		</div>
		<p class="incharge">担当：北村</p>
	</div>
</div>
<footer id="company" class="top_footer">
	<div class="footerwrap">
		<p class="sub din">COMPANY</p>
		<h2 class="title">会社概要</h2>
		<?php if(is_mobile()) : ?>
		<div class="spfoot">
			<p class="foot01 top">社名</p>
			<p class="foot02">株式会社三谷サービスエンジン</p>
			<p class="foot01">本社</p>
			<p class="foot03">〒921－8801<br>石川県野々市市御経塚3丁目47番地<br>TEL.076-214-3311（代表）<br>FAX.076-214-3312</p>
			<p class="foot01">設立</p>
			<p class="foot03">昭和38年4月18日</p>
			<p class="foot01">資本金</p>
			<p class="foot03">4,242万円</p>
			<p class="foot01">代表者</p>
			<p class="foot03">代表取締役社長　本村 幸宏</p>
			<p class="foot01">事業内容</p>
			<p class="foot03">ＥＮＥＯＳガソリンスタンド運営<br>(  金沢市・ 野々市市・白山市に16店舗  )<br>各種石油製品、自動車用品、<br>指定整備工場、自動車整備、<br>新車・マイカーリース・中古車販売、<br>車両買取、レンタカー事業、<br>自動車任意保険など損害保険全般、<br>空調機器の販売、<br>生活支援事業（わたしの執事さん）</p>
		</div>
		<?php else: ?>
		<table class="companytable">
			<tbody>
				<tr>
					<td>社　名</td>
					<td class="bold" colspan="3">株式会社三谷サービスエンジン</td>
				</tr>
				<tr>
					<td>本　社</td>
					<td>〒921－8801 石川県野々市市御経塚3丁目47番地<br>TEL.076-214-3311（代表）<br>FAX.076-214-3312</td>
					<td rowspan="4">事業内容</td>
					<td rowspan="4">ＥＮＥＯＳガソリンスタンド運営<br>(  金沢市・ 野々市市・白山市に16店舗 )<br><br>各種石油製品、自動車用品、指定整備工場、自動車整備、<br>新車・マイカーリース・中古車販売、車両買取<br><br>レンタカー事業、自動車任意保険など損害保険全般、<br>空調機器の販売、<br><br>生活支援事業（わたしの執事さん）</td>
				</tr>
				<tr>
					<td>設　立</td>
					<td>昭和38年4月18日</td>
				</tr>
				<tr>
					<td>資本金</td>
					<td>4,242万円</td>
				</tr>
				<tr>
					<td>代表者</td>
					<td>代表取締役社長　本村 幸宏</td>
				</tr>
			</tbody>
		</table>
		<?php endif; ?>
		<p class="copyright">©2021 Mitani Service Engine</p>
	</div>
</footer>

<?php get_footer(); ?>