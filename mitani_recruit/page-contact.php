<?php get_header(); ?>

<div class="top_area contact">
	<div class="topwrap">
		<h1 class="title">お問い合わせ</h1>
	</div>
</div>
<?php echo do_shortcode('[contact-form-7 id="14" title="お問い合わせ" html_class="h-adr"]'); ?>
<!--
<div class="form_area contact">
	<p class="subtext">必要事項をご入力のうえ、<br class="sp_block">「入力内容の確認」ボタンを押してください。<br>（<span class="icon"></span>は入力必須項目です。）</p>
	<p class="subtext02">※こちらのお問い合わせフォームからの<br class="sp_block">営業活動・セールス・勧誘等は<br class="sp_block">固くお断りいたします。<br class="sp_block">送信いただいても対応いたしかねます。</p>
	<table class="form_table">
		<tbody>
			<tr>
				<td class="hissu">お問い合わせ項目</td>
				<td><span class="wpcf7-form-control-wrap your-oubo">
					<select name="your-oubo" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
						<option value="採用について">採用について</option>
						<option value="会社見学">会社見学</option>
						<option value="その他">その他</option>
					</select>
				</span></td>
			</tr>
			<tr>
                <td class="hissu">お問い合わせ内容</td>
                <td>
                    <span class="wpcf7-form-control-wrap your-comment">
                        <textarea name="your-comment" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea>
                    </span>
                </td>
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
		</tbody>
	</table>	
	<div class="btn_wrap">
		<input type="submit" value="入力内容の確認" class="wpcf7-form-control wpcf7-submit" disabled=""><span class="ajax-loader"></span>
	</div>	
</div>
-->
<img class="formcontact" src="<?php echo get_template_directory_uri(); ?>/assets_mitani/img_form/contactbtn_form.jpg" width="420" height="145" alt="お電話でのお問い合わせの方はこちら　076-214-3325">
<footer class="form_footer">
	<p class="copyright">©2021 Mitani Service Engine</p>
</footer>

<?php get_footer(); ?>