<?php
namespace output;
class O{
	static $outLog = '';

	//OUT for output
	static function OUT($printData, $heading){
		//global $outLog;
		$logFormat = '<h4 style=" 
				font-weight:bold;
			    background-color: #444;
			    color:#fff;
			    margin-bottom:0;
			    text-align: center;">%s</h4>
		**************************************************</br><pre>
		%s
		</pre></br>******************************************************</br>';
		self::$outLog .= sprintf($logFormat, $heading, print_r($printData, true));
		
	}
	// *** PRINT THE DIALOG WITH THE MESSAGES
	// p = print
	static function P(){
		$dialog = '
			<div style="
		    width: 25%;
		    height: 60%;
		    background-color: #dadada;
		    position: fixed;
		    z-index: 100000;
		    top: 5%;
		    box-sizing: border-box;
		    right: 5%;
		    padding: 10px;
		    box-shadow: 0px 16px 73px 0px rgba(0,0,0,0.52);
		    overflow: scroll;
		    resize: both;
		">
			<h1 style="
			    font-size: 1.69230769230769em;
			    width: 100%;
			    text-align: center;
			    height: 1.63636363636364em;
			    line-height: 1.63636363636364em;
			    background-color: #000;
			    box-sizing: border-box;
			    color: #fff;
			">PHP Logger</h1>
			'. self::$outLog . '
		</div>
		';
		
		//echo $log;
		// echo sprintf($dialog, $log, true);
		echo $dialog;
	}
}



?>