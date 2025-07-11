<?php get_header(); ?>

<div class="top_area">
	<div class="topwrap">
		<h1 class="title">エントリー</h1>
		<p class="sub din">ENTRY FORM</p>
	</div>
</div>
<?php echo do_shortcode('[contact-form-7 id="5" title="エントリーフォーム" html_class="h-adr"]'); ?>
<!--
<div class="step_area">
	<div class="stepwrap">
		<div class="step wpcf7c-elm-step1">
			<p class="text01 din">STEP<span>1</span></p>
			<p class="text02">入力</p>
		</div>
		<p class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/icon_steparrow.svg" width="25" height="29" alt=""></p>
		<div class="step">
			<p class="text01 din">STEP<span>2</span></p>
			<p class="text02">内容確認</p>
		</div>
		<p class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img/icon_steparrow.svg" width="25" height="29" alt=""></p>
		<div class="step">
			<p class="text01 din">STEP<span>3</span></p>
			<p class="text02">エントリー</p>
		</div>
	</div>
</div>
<div class="form_area">
	<p class="subtext">必要事項をご入力のうえ、<br class="sp_block">「入力内容の確認」ボタンを押してください。<br>（<span class="icon"></span>は入力必須項目です。）</p>
	<table class="form_table">
		<tbody>
			<tr>
				<td class="hissu">応募区分</td>
				<td><span class="wpcf7-form-control-wrap your-oubo">
					<select name="your-oubo" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
						<option value="短期大学/専門学校">短期大学/専門学校</option>
						<option value="４年制大学">４年制大学</option>
						<option value="中途採用">中途採用</option>
					</select>
				</span></td>
			</tr>
			<tr>
				<td class="hissu">氏名</td>
				<td><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></td>
			</tr>
			<tr>
				<td class="hissu">フリガナ</td>
				<td><span class="wpcf7-form-control-wrap your-kana"><input type="text" name="your-kana" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></td>
			</tr>
			<tr>
				<td class="hissu">e-mail</td>
				<td><span class="wpcf7-form-control-wrap your-mail"><input type="text" name="your-mail" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></td>
			</tr>
			<tr>
				<td class="hissu">電話番号</td>
				<td><span class="wpcf7-form-control-wrap your-tel"><input type="text" name="your-tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></td>
			</tr>
			<tr>
				<td class="hissu">住所</td>
				<td class="address">〒<span class="wpcf7-form-control-wrap your-zipcode"><input type="text" name="your-zipcode" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span><br><span class="wpcf7-form-control-wrap your-address"><input type="text" name="your-address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></td>
			</tr>
			<tr>
				<td class="hissu">生年月日</td>
				<td><span class="wpcf7-form-control-wrap your-birthday"><input type="text" name="your-birthday" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></td>
			</tr>
			<tr>
				<td class="hissu">学校名</td>
				<td><span class="wpcf7-form-control-wrap your-school"><input type="text" name="your-school" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span><p class="cap">※既に卒業されている方は、卒業した学校名を記載してください</p></td>
			</tr>
			<tr>
				<td>学年・学部・学科</td>
				<td><span class="wpcf7-form-control-wrap your-course"><input type="text" name="your-course" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></td>
			</tr>
			<tr>
                <td>備考欄</td>
                <td>
                    <span class="wpcf7-form-control-wrap your-comment">
                        <textarea name="your-comment" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea><p class="cap">質問などありましたら、自由にご記入ください。</p>
                    </span>
                </td>
			</tr>
		</tbody>
	</table>	
	<div class="btn_wrap">
		<input type="submit" value="入力内容の確認" class="wpcf7-form-control wpcf7-submit" disabled=""><span class="ajax-loader"></span>
	</div>	
</div>
-->
<footer class="form_footer">
	<p class="copyright">©2021 Mitani Service Engine</p>
</footer>

<?php get_footer(); ?>