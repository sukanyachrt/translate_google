<html xmlns="https://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
	<title>Google Translation</title>
	<meta charset="utf-8" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet" type="text/css" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<style>
		.goog-te-banner-frame.skiptranslate {
			display: none !important;
		}

		body {
			top: 0px !important;
		}

		.goog-logo-link {
			display: none !important;
		}

		.trans-section {
			margin: 100px;
		}

		*/ body {
			top: 0px !important;
		}

		body>.skiptranslate>iframe.skiptranslate {
			display: none !important;
			visibility: hidden !important;
		}
	</style>

<body>

	<div id="google_translate_element" style="display:none"></div>
	<select class="selectpicker notranslate" data-width="fit" onchange="translateLanguage(this.value);" id="lang">
		<option data-content='<span class="flag-icon flag-icon-th"></span> ไทย' value="th">
			ไทย
		</option>
		<option data-content='<span class="flag-icon flag-icon-us"></span> English' value="en">
			English
		</option>
		<option data-content='<span class="flag-icon flag-icon-id"></span> Indonesian' value="id">
			Indonesian
		</option>
		<option data-content='<span class="flag-icon flag-icon-vn"></span> Tiếng Việt' value="vi">
			Tiếng Việt
		</option>
		<option data-content='<span class="flag-icon flag-icon-cn"></span> 体中文' value="zh-CN">
			体中文
		</option>
		<option data-content='<span class="flag-icon flag-icon-my"></span> ភាសាខ្មែរ' value="my">
			ភាសាខ្មែរ
		</option>
		<option data-content='<span class="flag-icon flag-icon-la"></span> ລາວ' value="lo">
			ລາວ
		</option>
		<option data-content='<span class="flag-icon flag-icon-my"></span> Malaysia' value="ms">
			Malaysia
		</option>
		<option data-content='<span class="flag-icon flag-icon-mm"></span> မြန်မာ' value="mm">
			မြန်မာ
		</option>
		<option data-content='<span class="flag-icon flag-icon-ph"></span> Pilipinas' value="en">
			Pilipinas
		</option>
		<option data-content='<span class="flag-icon flag-icon-kr"></span> 한국인' value="ko">
			한국인
		</option>
		<option data-content='<span class="flag-icon flag-icon-jp"></span> 日本語' value="ja">
			日本語
		</option>
		<option data-content='<span class="flag-icon flag-icon-pt"></span> Portuguese' value="pt">
			Portuguese
		</option>
	</select>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
	function googleTranslateElementInit() {
		new google.translate.TranslateElement({
			pageLanguage: "th"
		}, 'google_translate_element');
	}

	function googleTranslateElementInit() {
		new google.translate.TranslateElement({
			pageLanguage: "th"
		}, 'google_translate_element');
	}

	function translateLanguage(lang) {
		var language = document.getElementById("lang").value;
		var selectField = document.querySelector("#google_translate_element select");
		for (var i = 0; i < selectField.children.length; i++) {
			var option = selectField.children[i];
			if (option.value == lang) {
				selectField.selectedIndex = i;
				selectField.dispatchEvent(new Event('change'));
				break;
			}
		}
	}
	$(function() {
		$(".selectpicker").selectpicker();
	});
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</html>