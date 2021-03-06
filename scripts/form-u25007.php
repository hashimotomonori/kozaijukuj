<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'お問い合わせ フォーム の送信',
	'heading' => '新規フォームの送信',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'チェック済み',
		'checkbox_unchecked' => '未チェック',
		'submitted_from' => 'Web サイトから送信されたフォーム : %s',
		'submitted_by' => '訪問者の IP アドレス : %s',
		'too_many_submissions' => '最近、この IP からの送信回数が多すぎます',
		'failed_to_send_email' => '電子メールの送信に失敗しました',
		'invalid_reCAPTCHA_private_key' => '無効な reCAPTCHA プライベートキーです。',
		'invalid_reCAPTCHA2_private_key' => '無効な reCAPTCHA 2.0 プライベートキーです。',
		'invalid_reCAPTCHA2_server_response' => '無効な reCAPTCHA 2.0 サーバー応答です。',
		'invalid_field_type' => '不明なフィールドの種類「%s」です。',
		'invalid_form_config' => 'フィールド「%s」には無効な設定が含まれています。',
		'unknown_method' => '不明なサーバー要求メソッド'
	),
	'email' => array(
		'from' => 'tomonorihashimoto930@gmail.com',
		'to' => 'tomonorihashimoto930@gmail.com'
	),
	'fields' => array(
		'custom_U25008' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'お名前',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「お名前」が必要です。'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'メールアドレス',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「メールアドレス」が必要です。',
				'format' => 'フィールド「メールアドレス」には無効な電子メールが含まれています。'
			)
		),
		'custom_U25020' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'お問い合わせ内容',
			'required' => false,
			'errors' => array(
			)
		)
	)
);

process_form($form);
?>
