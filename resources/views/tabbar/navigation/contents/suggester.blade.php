<!-- ヘッダー -->
<ons-toolbar>
	<div class="left">
		<!-- サイドメニューを表示する三表示 -->
		<ons-toolbar-button ng-click="menu.toggleMenu()">
			<ons-icon icon="bars"></ons-icon>
		</ons-toolbar-button>
	</div>
	<!-- タイトル -->
	<div class="center">SyoNet</div>
</ons-toolbar>
<!-- /ヘッダー -->
<ons-page id="contents-page">
	<sugggester-title></sugggester-title>
	<button class="button button--large">１人モード</button>
	<div style="margin:10px;"></div>
	<button class="button button--large">対戦 〜　2人同時プレイ</button>
	<div style="margin:10px;"></div>
	<button class="button button--large--cta" id="tutorialButton">チュートリアル</button>
	
	<sugggester-tutorial></sugggester-tutorial>
</ons-page>