<?php

class DebugLogger {
  private function __construct() {}
  private function __clone() {}
  
  /**
   * @var SplObjectStorage
   */
  private static $storage = [];
  
  public static function add($item)
  {
  	array_push(self::$storage, $item);
  }
  
  /**
   * @return SplObjectStorage
   */
  public static function show()
  {
  	echo '<style>.rp-debug-logger{position:fixed;top:0;left:0;padding:38px 20px 20px;border:1px solid #ccc;background:#fffacd;z-index:99999999;height:100%;width:400px;overflow:auto}.rp-debug-logger pre{width:100%;white-space:normal;margin-bottom:10px;padding-top:10px;border-top:1px dotted #c3c3c3;cursor:pointer;max-height:200px;overflow:hidden}.rp-debug-logger pre:hover{background-color:#ffa}.rp-debug-logger-shadow{width:100%;height:100%;opacity:.8;background-color:#000;position:fixed;top:0;left:0;z-index:999999998}.rp-debug-logger-text pre{white-space: pre-wrap;}.rp-debug-logger-text{position:fixed;top:0;left:-400px;padding:20px;border:1px solid #ccc;background:#fffacd;z-index:999999999;height:80%;width:800px;margin:10px 0 10px 50%;overflow:auto;white-space:pre-wrap}.rp-debug-logger-close:hover{color:#ff4242}.rp-debug-logger-close{position:fixed;left:408px;font-size:24px;top:0;cursor:pointer}</style>';
  	echo '<script type="text/javascript">var load_logger_rp=function(){for(var e=document.getElementsByClassName("rp-debug-logger")[0],t=document.createElement("div"),n=0;n<e.getElementsByTagName("pre").length;n++)e.getElementsByTagName("pre")[n].addEventListener("click",function(){show_logger_rp(this.cloneNode(!0))});t.className="rp-debug-logger-close",t.innerHTML="X",t.onclick=function(){var e=document.getElementsByClassName("rp-debug-logger")[0];e.parentNode.removeChild(e)},e.appendChild(t)},show_logger_rp=function(e){var t=document.getElementsByClassName("rp-debug-logger")[0],n=document.createElement("div"),l=document.createElement("div");n.className="rp-debug-logger-shadow",l.className="rp-debug-logger-text",l.appendChild(e),t.parentNode.appendChild(n),t.parentNode.appendChild(l),n.onclick=function(){var e=document.getElementsByClassName("rp-debug-logger-shadow")[0],t=document.getElementsByClassName("rp-debug-logger-text")[0];e.parentNode.removeChild(e),t.parentNode.removeChild(t)}};window.addEventListener("load",function(){var e=document.getElementsByClassName("rp-debug-logger");e.length>0&&load_logger_rp()});</script>';
  	echo '<pre class="rp-debug-logger">';
  	foreach (self::$storage as $storage) {
  		echo "<pre>";
  		var_dump($storage);
  		echo "</pre>";
  	}
  	echo '</pre>';
  }
}

dump(123);
dump('asdasdas');
dump(new DateTime());
DebugLogger::show();	

