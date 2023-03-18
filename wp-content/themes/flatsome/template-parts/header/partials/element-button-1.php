<?php
/**
 * Button 1 element.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

?>
<style>
	.btn_regist{
		animation: won 1s infinite cubic-bezier(.5,0,0,1);
		min-width:150px;
		max-height:40px;
		font-family:'Nunito',sans-serif;
		font-size:14px;
		color:#ffffff;
		background:hsl(292deg 49% 30%);
		border:none;
		border-radius:1000px;
		cursor:pointer;
		outline:none;
		position:relative;
		box-shadow: 0 0 0 0 #68277270;
		text-rendering: optimizeLegibility;
		box-sizing: border-box;
		font-weight: bolder;
		letter-spacing: .03em;
		line-height: 2.4em;
		transition: transform .3s,border .3s,background .3s,box-shadow .3s,opacity .3s,color .3s;
    	vertical-align: middle;
		margin-left: 40px;
	}
	@keyframes won {
		100%{
			box-shadow: 0 0 0 10px rgb(231 76 61 / 0%);
		}
	}
</style>
<li class="html header-button-1">
	<div class="header-button wrap_btn">
		<button class="btn_regist">đăng kí tư vấn</button>	
	</div>
</li>


