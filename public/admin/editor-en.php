<?php
/** Adminer Editor - Compact database editor
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.6.3
*/error_reporting(6135);$mc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($mc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$_g=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($_g)$$X=$_g;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");function
connection(){global$h;return$h;}function
adminer(){global$b;return$b;}function
version(){global$ca;return$ca;}function
idf_unescape($u){$ud=substr($u,-1);return
str_replace($ud.$ud,$ud,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
number_type(){return'((?<!o)int(?!er)|numeric|real|float|double|decimal|money)';}function
remove_slashes($Ie,$mc=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($Ie)){foreach($X
as$ld=>$W){unset($Ie[$y][$ld]);if(is_array($W)){$Ie[$y][stripslashes($ld)]=$W;$Ie[]=&$Ie[$y][stripslashes($ld)];}else$Ie[$y][stripslashes($ld)]=($mc?$W:stripslashes($W));}}}}function
bracket_escape($u,$Ga=false){static$lg=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($u,($Ga?array_flip($lg):$lg));}function
min_version($Lg,$Fd="",$i=null){global$h;if(!$i)$i=$h;$tf=$i->server_info;if($Fd&&preg_match('~([\d.]+)-MariaDB~',$tf,$A)){$tf=$A[1];$Lg=$Fd;}return(version_compare($tf,$Lg)>=0);}function
charset($h){return(min_version("5.5.3",0,$h)?"utf8mb4":"utf8");}function
script($Bf,$kg="\n"){return"<script".nonce().">$Bf</script>$kg";}function
script_src($Eg){return"<script src='".h($Eg)."'".nonce()."></script>\n";}function
nonce(){return' nonce="'.get_nonce().'"';}function
target_blank(){return' target="_blank" rel="noreferrer noopener"';}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($B,$Y,$Va,$rd="",$ge="",$d="",$sd=""){$J="<input type='checkbox' name='$B' value='".h($Y)."'".($Va?" checked":"").($sd?" aria-labelledby='$sd'":"").">".($ge?script("qsl('input').onclick = function () { $ge };",""):"");return($rd!=""||$d?"<label".($d?" class='$d'":"").">$J".h($rd)."</label>":$J);}function
optionlist($C,$nf=null,$Hg=false){$J="";foreach($C
as$ld=>$W){$le=array($ld=>$W);if(is_array($W)){$J.='<optgroup label="'.h($ld).'">';$le=$W;}foreach($le
as$y=>$X)$J.='<option'.($Hg||is_string($y)?' value="'.h($y).'"':'').(($Hg||is_string($y)?(string)$y:$X)===$nf?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($B,$C,$Y="",$fe=true,$sd=""){if($fe)return"<select name='".h($B)."'".($sd?" aria-labelledby='$sd'":"").">".optionlist($C,$Y)."</select>".(is_string($fe)?script("qsl('select').onchange = function () { $fe };",""):"");$J="";foreach($C
as$y=>$X)$J.="<label><input type='radio' name='".h($B)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ca,$C,$Y="",$fe="",$_e=""){$Uf=($C?"select":"input");return"<$Uf$Ca".($C?"><option value=''>$_e".optionlist($C,$Y,true)."</select>":" size='10' value='".h($Y)."' placeholder='$_e'>").($fe?script("qsl('$Uf').onchange = $fe;",""):"");}function
confirm($Nd="",$of="qsl('input')"){return
script("$of.onclick = function () { return confirm('".($Nd?js_escape($Nd):'Are you sure?')."'); };","");}function
print_fieldset($t,$wd,$Og=false){echo"<fieldset><legend>","<a href='#fieldset-$t'>$wd</a>",script("qsl('a').onclick = partial(toggle, 'fieldset-$t');",""),"</legend>","<div id='fieldset-$t'".($Og?"":" class='hidden'").">\n";}function
bold($Oa,$d=""){return($Oa?" class='active $d'":($d?" class='$d'":""));}function
odd($J=' class="odd"'){static$s=0;if(!$J)$s=-1;return($s++%2?$J:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($y,$X=null){static$nc=true;if($nc)echo"{";if($y!=""){echo($nc?"":",")."\n\t\"".addcslashes($y,"\r\n\t\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'null');$nc=false;}else{echo"\n}\n";$nc=true;}}function
ini_bool($cd){$X=ini_get($cd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
set_password($Kg,$O,$V,$G){$_SESSION["pwds"][$Kg][$O][$V]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}function
q($Q){global$h;return$h->quote($Q);}function
get_vals($H,$f=0){global$h;$J=array();$I=$h->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$f];}return$J;}function
get_key_vals($H,$i=null,$wf=true){global$h;if(!is_object($i))$i=$h;$J=array();$I=$i->query($H);if(is_object($I)){while($K=$I->fetch_row()){if($wf)$J[$K[0]]=$K[1];else$J[]=$K[0];}}return$J;}function
get_rows($H,$i=null,$n="<p class='error'>"){global$h;$ib=(is_object($i)?$i:$h);$J=array();$I=$ib->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($i)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$J;}function
unique_array($K,$w){foreach($w
as$v){if(preg_match("~PRIMARY|UNIQUE~",$v["type"])){$J=array();foreach($v["columns"]as$y){if(!isset($K[$y]))continue
2;$J[$y]=$K[$y];}return$J;}}}function
escape_key($y){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$y,$A))return$A[1].idf_escape(idf_unescape($A[2])).$A[3];return
idf_escape($y);}function
where($Z,$p=array()){global$h,$x;$J=array();foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$f=escape_key($y);$J[]=$f.($x=="sql"&&preg_match('~^[0-9]*\.[0-9]*$~',$X)?" LIKE ".q(addcslashes($X,"%_\\")):($x=="mssql"?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$X)):" = ".unconvert_field($p[$y],q($X))));if($x=="sql"&&preg_match('~char|text~',$p[$y]["type"])&&preg_match("~[^ -@]~",$X))$J[]="$f = ".q($X)." COLLATE ".charset($h)."_bin";}foreach((array)$Z["null"]as$y)$J[]=escape_key($y)." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$p=array()){parse_str($X,$Ta);remove_slashes(array(&$Ta));return
where($Ta,$p);}function
where_link($s,$f,$Y,$ie="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($f)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$ie:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($g,$p,$M=array()){$J="";foreach($g
as$y=>$X){if($M&&!in_array(idf_escape($y),$M))continue;$za=convert_field($p[$y]);if($za)$J.=", $za AS ".idf_escape($y);}return$J;}function
cookie($B,$Y,$zd=2592000){global$aa;return
header("Set-Cookie: $B=".urlencode($Y).($zd?"; expires=".gmdate("D, d M Y H:i:s",time()+$zd)." GMT":"")."; path=".preg_replace('~\?.*~','',$_SERVER["REQUEST_URI"]).($aa?"; secure":"")."; HttpOnly; SameSite=lax",false);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session($sc=false){if(!ini_bool("session.use_cookies")||($sc&&@ini_set("session.use_cookies",false)!==false))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Kg,$O,$V,$l=null){global$Fb;preg_match('~([^?]*)\??(.*)~',remove_from_uri(implode("|",array_keys($Fb))."|username|".($l!==null?"db|":"").session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($Kg!="server"||$O!=""?urlencode($Kg)."=".urlencode($O)."&":"")."username=".urlencode($V).($l!=""?"&db=".urlencode($l):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($Ad,$Nd=null){if($Nd!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($Ad!==null?$Ad:$_SERVER["REQUEST_URI"]))][]=$Nd;}if($Ad!==null){if($Ad=="")$Ad=".";header("Location: $Ad");exit;}}function
query_redirect($H,$Ad,$Nd,$Te=true,$Yb=true,$fc=false,$ag=""){global$h,$n,$b;if($Yb){$Hf=microtime(true);$fc=!$h->query($H);$ag=format_time($Hf);}$Ef="";if($H)$Ef=$b->messageQuery($H,$ag,$fc);if($fc){$n=error().$Ef.script("messagesPrint();");return
false;}if($Te)redirect($Ad,$Nd.$Ef);return
true;}function
queries($H){global$h;static$Me=array();static$Hf;if(!$Hf)$Hf=microtime(true);if($H===null)return
array(implode("\n",$Me),format_time($Hf));$Me[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H).";";return$h->query($H);}function
apply_queries($H,$T,$Vb='table'){foreach($T
as$R){if(!queries("$H ".$Vb($R)))return
false;}return
true;}function
queries_redirect($Ad,$Nd,$Te){list($Me,$ag)=queries(null);return
query_redirect($Me,$Ad,$Nd,$Te,false,!$Te,$ag);}function
format_time($Hf){return
sprintf('%.3f s',max(0,microtime(true)-$Hf));}function
remove_from_uri($se=""){return
substr(preg_replace("~(?<=[?&])($se".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$sb){return" ".($E==$sb?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($y,$wb=false){$kc=$_FILES[$y];if(!$kc)return
null;foreach($kc
as$y=>$X)$kc[$y]=(array)$X;$J='';foreach($kc["error"]as$y=>$n){if($n)return$n;$B=$kc["name"][$y];$hg=$kc["tmp_name"][$y];$kb=file_get_contents($wb&&preg_match('~\.gz$~',$B)?"compress.zlib://$hg":$hg);if($wb){$Hf=substr($kb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Hf,$Ue))$kb=iconv("utf-16","utf-8",$kb);elseif($Hf=="\xEF\xBB\xBF")$kb=substr($kb,3);$J.=$kb."\n\n";}else$J.=$kb;}return$J;}function
upload_error($n){$Kd=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?'Unable to upload a file.'.($Kd?" ".sprintf('Maximum allowed file size is %sB.',$Kd):""):'File does not exist.');}function
repeat_pattern($ye,$xd){return
str_repeat("$ye{0,65535}",$xd/65535)."$ye{0,".($xd%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\0-\x8\xB\xC\xE-\x1F]~',$X));}function
shorten_utf8($Q,$xd=80,$Of=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$xd).")($)?)u",$Q,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$xd).")($)?)",$Q,$A);return
h($A[1]).$Of.(isset($A[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",','),preg_split('~~u','0123456789',-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Ie,$Tc=array()){$J=false;while(list($y,$X)=each($Ie)){if(!in_array($y,$Tc)){if(is_array($X)){foreach($X
as$ld=>$W)$Ie[$y."[$ld]"]=$W;}else{$J=true;echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}}return$J;}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$gc=false){$J=table_status($R,$gc);return($J?$J:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$J=array();foreach($b->foreignKeys($R)as$wc){foreach($wc["source"]as$X)$J[$X][]=$wc;}return$J;}function
enum_input($U,$Ca,$o,$Y,$Qb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$Hd);$J=($Qb!==null?"<label><input type='$U'$Ca value='$Qb'".((is_array($Y)?in_array($Qb,$Y):$Y===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($Hd[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$Va=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ca value='".($s+1)."'".($Va?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$J;}function
input($o,$Y,$r){global$vg,$b,$x;$B=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$xa=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$xa[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$xa);$r="json";}$Ze=($x=="mssql"&&$o["auto_increment"]);if($Ze&&!$_POST["save"])$r=null;$Bc=(isset($_GET["select"])||$Ze?array("orig"=>'original'):array())+$b->editFunctions($o);$Ca=" name='fields[$B]'";if($o["type"]=="enum")echo
h($Bc[""])."<td>".$b->editInput($_GET["edit"],$o,$Ca,$Y);else{$Ic=(in_array($r,$Bc)||isset($Bc[$r]));echo(count($Bc)>1?"<select name='function[$B]'>".optionlist($Bc,$r===null||$Ic?$r:"")."</select>".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).script("qsl('select').onchange = functionChange;",""):h(reset($Bc))).'<td>';$ed=$b->editInput($_GET["edit"],$o,$Ca,$Y);if($ed!="")echo$ed;elseif(preg_match('~bool~',$o["type"]))echo"<input type='hidden'$Ca value='0'>"."<input type='checkbox'".(preg_match('~^(1|t|true|y|yes|on)$~i',$Y)?" checked='checked'":"")."$Ca value='1'>";elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$Hd);foreach($Hd[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$Va=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$B][$s]' value='".(1<<$s)."'".($Va?' checked':'').">".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$B'>";elseif(($Xf=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($Xf&&$x!="sqlite")$Ca.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ca.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ca>".h($Y).'</textarea>';}elseif($r=="json"||preg_match('~^jsonb?$~',$o["type"]))echo"<textarea$Ca cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$Md=(!preg_match('~int~',$o["type"])&&preg_match('~^(\d+)(,(\d+))?$~',$o["length"],$A)?((preg_match("~binary~",$o["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$o["unsigned"]?1:0)):($vg[$o["type"]]?$vg[$o["type"]]+($o["unsigned"]?0:1):0));if($x=='sql'&&min_version(5.6)&&preg_match('~time~',$o["type"]))$Md+=7;echo"<input".((!$Ic||$r==="")&&preg_match('~(?<!o)int(?!er)~',$o["type"])&&!preg_match('~\[\]~',$o["full_type"])?" type='number'":"")." value='".h($Y)."'".($Md?" data-maxlength='$Md'":"").(preg_match('~char|binary~',$o["type"])&&$Md>20?" size='40'":"")."$Ca>";}echo$b->editHint($_GET["edit"],$o,$Y);$nc=0;foreach($Bc
as$y=>$X){if($y===""||!$X)break;$nc++;}if($nc)echo
script("mixin(qsl('td'), {onchange: partial(skipOriginal, $nc), oninput: function () { this.onchange(); }});");}}function
process_input($o){global$b,$m;$u=bracket_escape($o["field"]);$r=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$kc=get_file("fields-$u");if(!is_string($kc))return
false;return$m->quoteBinary($kc);}return$b->processInput($o,$Y,$r);}function
fields_from_edit(){global$m;$J=array();foreach((array)$_POST["field_keys"]as$y=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$y];$_POST["fields"][$X]=$_POST["field_vals"][$y];}}foreach((array)$_POST["fields"]as$y=>$X){$B=bracket_escape($y,1);$J[$B]=array("field"=>$B,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($y==$m->primary),);}return$J;}function
search_tables(){global$b,$h;$_GET["where"][0]["val"]=$_POST["query"];$qf="<ul>\n";foreach(table_status('',true)as$R=>$S){$B=$b->tableName($S);if(isset($S["Engine"])&&$B!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$I=$h->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$I||$I->fetch_row()){$Ge="<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$B</a>";echo"$qf<li>".($I?$Ge:"<p class='error'>$Ge: ".error())."\n";$qf="";}}}echo($qf?"<p class='message'>".'No tables.':"</ul>")."\n";}function
dump_headers($Rc,$Sd=false){global$b;$J=$b->dumpHeaders($Rc,$Sd);$pe=$_POST["output"];if($pe!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Rc).".$J".($pe!="file"&&!preg_match('~[^0-9a-z]~',$pe)?".$pe":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($r,$f){return($r?($r=="unixepoch"?"DATETIME($f, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$f)"):$f);}function
get_temp_dir(){$J=ini_get("upload_tmp_dir");if(!$J){if(function_exists('sys_get_temp_dir'))$J=sys_get_temp_dir();else{$q=@tempnam("","");if(!$q)return
false;$J=dirname($q);unlink($q);}}return$J;}function
file_open_lock($q){$_c=@fopen($q,"r+");if(!$_c){$_c=@fopen($q,"w");if(!$_c)return;chmod($q,0660);}flock($_c,LOCK_EX);return$_c;}function
file_write_unlock($_c,$tb){rewind($_c);fwrite($_c,$tb);ftruncate($_c,strlen($tb));flock($_c,LOCK_UN);fclose($_c);}function
password_file($nb){$q=get_temp_dir()."/adminer.key";$J=@file_get_contents($q);if($J||!$nb)return$J;$_c=@fopen($q,"w");if($_c){chmod($q,0660);$J=rand_string();fwrite($_c,$J);fclose($_c);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$o,$Yf){global$b;if(is_array($X)){$J="";foreach($X
as$ld=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($ld):"")."<td>".select_value($W,$_,$o,$Yf);return"<table cellspacing='0'>$J</table>";}if(!$_)$_=$b->selectLink($X,$o);if($_===null){if(is_mail($X))$_="mailto:$X";if(is_url($X))$_=$X;}$J=$b->editVal($X,$o);if($J!==null){if(!is_utf8($J))$J="\0";elseif($Yf!=""&&is_shortable($o))$J=shorten_utf8($J,max(0,+$Yf));else$J=h($J);}return$b->selectVal($J,$_,$o,$X);}function
is_mail($Nb){$_a='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Eb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$ye="$_a+(\\.$_a+)*@($Eb?\\.)+$Eb";return
is_string($Nb)&&preg_match("(^$ye(,\\s*$ye)*\$)i",$Nb);}function
is_url($Q){$Eb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return
preg_match("~^(https?)://($Eb?\\.)+$Eb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q);}function
is_shortable($o){return
preg_match('~char|text|json|lob|geometry|point|linestring|polygon|string|bytea~',$o["type"]);}function
count_rows($R,$Z,$jd,$Cc){global$x;$H=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($jd&&($x=="sql"||count($Cc)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$Cc).")$H":"SELECT COUNT(*)".($jd?" FROM (SELECT 1$H GROUP BY ".implode(", ",$Cc).") x":$H));}function
slow_query($H){global$b,$jg,$m;$l=$b->database();$bg=$b->queryTimeout();$zf=$m->slowQuery($H,$bg);if(!$zf&&support("kill")&&is_object($i=connect())&&($l==""||$i->select_db($l))){$qd=$i->result(connection_id());echo'<script',nonce(),'>
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'kill=',$qd,'&token=',$jg,'\');
}, ',1000*$bg,');
</script>
';}else$i=null;ob_flush();flush();$J=@get_key_vals(($zf?$zf:$H),$i,false);if($i){echo
script("clearTimeout(timeout);");ob_flush();flush();}return$J;}function
get_token(){$Pe=rand(1,1e6);return($Pe^$_SESSION["token"]).":$Pe";}function
verify_token(){list($jg,$Pe)=explode(":",$_POST["token"]);return($Pe^$_SESSION["token"])==$jg;}function
lzw_decompress($La){$Cb=256;$Ma=8;$ab=array();$bf=0;$cf=0;for($s=0;$s<strlen($La);$s++){$bf=($bf<<8)+ord($La[$s]);$cf+=8;if($cf>=$Ma){$cf-=$Ma;$ab[]=$bf>>$cf;$bf&=(1<<$cf)-1;$Cb++;if($Cb>>$Ma)$Ma++;}}$Bb=range("\0","\xFF");$J="";foreach($ab
as$s=>$Za){$Mb=$Bb[$Za];if(!isset($Mb))$Mb=$Xg.$Xg[0];$J.=$Mb;if($s)$Bb[]=$Xg.$Mb[0];$Xg=$Mb;}return$J;}function
on_help($fb,$xf=0){return
script("mixin(qsl('select, input'), {onmouseover: function (event) { helpMouseover.call(this, event, $fb, $xf) }, onmouseout: helpMouseout});","");}function
edit_form($a,$p,$K,$Cg){global$b,$x,$jg,$n;$Sf=$b->tableName(table_status1($a,true));page_header(($Cg?'Edit':'Insert'),$n,array("select"=>array($a,$Sf)),$Sf);if($K===false)echo"<p class='error'>".'No rows.'."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0'>".script("qsl('table').onkeydown = editingKeydown;");foreach($p
as$B=>$o){echo"<tr><th>".$b->fieldName($o);$xb=$_GET["set"][bracket_escape($B)];if($xb===null){$xb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$xb,$Ue))$xb=$Ue[1];}$Y=($K!==null?($K[$B]!=""&&$x=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($K[$B])?array_sum($K[$B]):+$K[$B]):$K[$B]):(!$Cg&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$xb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$B]:($Cg&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($o,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]'>".script("qsl('input').oninput = fieldChange;")."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($Cg?'Save and continue edit':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n",($Cg?script("qsl('input').onclick = function () { return !ajaxForm(this.form, '".'Saving'."...', this); };"):"");}}echo($Cg?"<input type='submit' name='delete' value='".'Delete'."'>".confirm()."\n":($_POST||!$p?"":script("focus(qsa('td', qs('#form'))[1].firstChild);")));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$jg,'">
</form>
';}if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0Ñ\0\n @\0¥CÑË\"\0`E„Q∏‡ˇá?¿tvM'îJd¡d\\åb0\0ƒ\"ô¿f”à§Ós5õœÁ—AùXPaJì0Ñ•ë8Ñ#RäT©ëz`à#.©«cÌX√˛»Ä?¿-\0°Im?†.´M∂Ä\0»Ø(Ãâ˝¿/(%å\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1ÃáìŸåﬁl7úáB1Ñ4vb0òÕfsëºÍn2BÃ—±Ÿòﬁn:á#(ºb.\rDc)»»a7EÑë§¬l¶√±îËi1Ãésò¥Á-4ôáf”	»Œi7Ü≥ÈÜÑéåF√©îvt2ûÇ”!ñr0œ„„£t~ΩUç'3MÄ…WÑB¶'cÕP¬:6T\rc£Aæzr_ÓWK∂\r-ºVNFS%~√c≤ŸÌ&õ\\^ r¿õ≠ÊuÇ≈é√ûÙŸã4'7k∂ËØ¬„Q‘Êhö'g\rFB\ryT7SS•P–1=«§cIË :çdî∫m>£S8LÜJÅút.M¢èä	œã`'C°º€–889§» éQÿ˝åÓ2ç#8–ê≠£íò6m˙≤Üjà¢h´<Öå∞´å9/ÎòÁ:êJÍ) Ç§\0d>!\0ZáàvÏªnÎæºo(⁄Û•…k‘7Ωès‡˘>åÓÜ!–R\"*nS˝\0@P\"¡Ëí(ã#[∂•£@gπo¸≠ízn˛9k§8Ünöô™1¥I*àÙ=Õn≤§™è∏Ë0´c(ˆ;æ√†–Ë!∞¸Î*cÏ˜>Œé¨E7DÒLJ©†1»‰∑„`¬8(·’3M®Û\"«39È?EÅe=“¨¸~˘æ≤Ù≈Ó”∏7;…Cƒ¡õÕE\rd!)¬a*Ø5ajo\0™#` 38∂\0 Ì]ìeåÍà∆2§	mk◊¯e]Ö¡≠AZs’StZïZ!)BR®G+Œ#Jv2(„†ˆÓcÖ4<∏#sBØ0È˙Ç6YL\r≤=£Öø[◊73∆<‘:£äbxîﬂJ=	m_ æœ≈f™lŸ◊tãÂI™ÉH⁄3èx*Äõ·6`t6æ√%ùU‘LÚeŸÇò<¥\0…AQ<P<:ö#u/§:T\\>†À-ÖxJàÕçQH\nj°L+j›zÛ∞7£ï´`›é≥\nkÉÉ'ìN”vX>ÓC-TÀ©∂ú∏êÜ4*Lî%Cj>7ﬂ®äﬁ®≠ıô`˘Æú;yÿ˚∆q¡r 3#®Ÿ} :#nÌ\r„Ω^≈=CÂA‹∏›∆éÅs&8é£K&ªÙ*0—“t›S…‘≈=æ[◊Û:ù\\]√E›åù/O‡>^]ÿ√∏¬<çËÿ˜gZ‘VÜÈq∫≥äå˘ ÒÀx\\≠çËïˆπﬂﬁ∫¥Ñ\"J†\\√Æà˚##¡°ΩDÜŒx6Íú⁄5x ‹Ä∏∂Ü®\rH¯l ãÒ¯∞b˙†rº7·‘6Ü‡ˆj|¡âÙ¢€ñ*ÙFAquvyOíΩWeMã÷˜âD.F·ˆ:R–\$-°ﬁ∂µT!ÏDS`∞8Dò~ü‡A`(«emÉ¶Ú˝¢T@O1@∫ÜX¶‚ì\nLpñëP‰˛¡”¬m´yf∏£)	â´¬à⁄GSEIâÅ•xC(s(aù?\$`tE®nÑÒ±≠,˜’ \$aêãU>,Ë–í\$ZÒkDm,G\0Â†\\êêi˙£% π¢ n¨••±∑Ï›‹gê…Ñb	y`íÚ‘ÜÀWÏ∑ ‰óó°_C¿ƒT\niêœH%’da¿÷iÕ7ÌAt∞,¡ÆJÜX4nàëîà0oÕπª9g\nzmãM%`…'I¸Äç–û-ËÚ©–7:p3p«çQórEDö§◊Ï†‡b2]ÖPF†˝•…>e…˙Ü3j\nÄﬂ∞t!¡?4fêtK;£ \rŒû–∏≠!‡oäuù?”˙ÅPhûê“0uIC}'~≈»2áv˛Q®“Œ8)Ï¿Ü7ÏDI˘=ßÈy&ï¢ea‡s*h…ïjlAƒ(Íõ\"ƒ\\”Ím^iëÆM)Ç∞^É	|~’l®∂#!YÕf81RSé†¡µ!áÜË62P∆CëÙl&Ì˚‰xd!å|†Ë9∞`÷_OYÌ=—G‡[E…-eLÒCvT¨ )ƒ@êj-5®∂úpSgª.íG=Åî–ZE“ˆ\$\0¢—ÜKjÌUßµ\$†Ç¿G'I‰P©¬~˚⁄Å ;Å⁄hN€éG%*·RjÒâX[úXPf^¡±|ÊËT!µ*N–Ü∏\rU¢å^q1V!√˘Uz,√I|7∞7Ür,æ°¨7îËﬁƒæB÷˘»;È+˜®©ﬂïàA⁄pÕŒΩ«^ÅÄ°~ÿºW!3PäI8]ìΩv”Jí¡fÒq£|,ùÍË9W¯f`\0·qîZŒp}[Jdhy≠ïNÍµY|ÔôCy,™<s AÅ{eÕQ‘üÚhdÑÅÏ«á ÃB4;ks&êÉ¨Òƒ›«aﬁ¯≈˚Èîÿ;Àπ}ÁSåÀJÖÔÕ)˜=dÏ‘|ŒÃÆNd“∑IÁ*8µç¢dl√—ìÅE6~œ®êF¶ï∆±X`òM\r û/‘%B/V¿IÂN&;Í˘„0≈UC cT&.E+ÁïÛÉ¿∞äõÈ‹@≤0`;≈‡ÀGË5‰±¡ﬁ¶j'ôÅõòˆ‡∆êªY‚+∂âQZ-iÅÙúyvÉñIô5⁄Û,O|≠P÷]F€è·Ú”˘Ò\0ê¸À2ô49Õ¢ô¢Ån/œá]ÿ≥&¶™I^Æ=”lé©qfI∆ = ÷]x1GR¸&¶e∑7©∫)äÛ'™∆:B≤B±>a¶zá-•â—2.Øˆ¨∏bz¯¥‹#Ñ•ºÒìƒU·ìç∆L7-ºwøtÁ3…µÒíÙeßäˆD‰ß\$≤#˜±§j’@’Gó8Œ ì7p˙‹R†YC¡–~¡»:¿@∆÷EUâJ‹Ÿ;67v]ñJ'ÿ‹‰q1œ≥ÈElÙQ–ÜiæÕ√ŒÒÑ/Ìˇ{k<ê‡÷°M‹poÏ}–Ër¡¢qåÿûÏc’√§ô_m“wÔæç^∫uñ¥≈˘⁄¸˘Ω´ê∂«ln˛îô	é˝_ë~∑G¯nËÊã÷{k‹ûﬂw„ﬁ˘\rj~óKì\0œ›¸¶æ-Ó˙œ¢BÄ;ú‡õˆb`}¡CC,Åîπ-∂ãLÅ–8\r,áøkl˝«åÚn}-5Åäçç3uõgm∏Ú≈∏¿*ﬂ/‰Ù ˘œÓ◊èÙ`À`Ω#x‰+B?#ˆ€èN;OR\r®Ë¯Ø\$˜Œ˙ˆ…kÚˇœô\01\0kÛ\0–8ÙÕaËÈ/t†˙˚#(&Ãl&≠˘•p∏œÏÇÖ˛‚ŒiêMê{Øzp*÷-g®¬Ëvâ≈6úkÎ	Âàúd¨ÿã¨‹◊ƒA`");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:õågCIº‹\n8ú≈3)∞À7úÖÜ81– x:\nOg#)–Ír7\n\"ÜË¥`¯|2ÃgSiñH)N¶Së‰ß\ráù\"0πƒ@‰)ü`(\$s6O!”ËúV/=ùå' T4Ê=ÑòiSòç6IOì erŸxÓ9ê*≈∫∞∫n3ù\r—âvÉCÅ¡`ıö›2G%®Y„Ê·˛ü1ôÕfÙπ—»Çl§√1ë\ny£*pC\r\$ÃnçT™ï3=\\Çr9O\"„	¿‡l<ä\r«\\Ä≥I,ós\nA§∆eh+M‚ã!çq0ô˝fª`(πN{cñó+wÀÒ¡Y£ñpŸß3ä3˙ò+I¶‘jπ∫˝éœk∑≤n∏q‹Éçzi#^rÿ¿∫¥ã3Ë‚çœ[ûË∫o;ÆÀ(ã–6ç#¿“êéç\":cz>ﬂ£C2v—CX <ÅPò√c*5\n∫®Ë∑/¸P97Ò|Fª∞c0É≥®∞‰!çÉÊÖ!®úÉ!â√\nZ%√ƒá#CHÃ!®“r8Á\$•°ÏØ,»R‹î2Ö»„^0∑·@§2å‚(88P/Ç‡∏›Ñ·\\¡\$La\\Â;c‡HÑ·HXÑÅï\n Étúá·8A<œsZÙ*É;I–Œ3°¡@“2<ä¢¨!A8G<‘jø-KÉ({*\rí≈a1á°ËN4Tc\"\\“!=1^ï›M9O≥:Ü;jåä\r„X“‡L#HŒ7É#T›™/-¥ã£p ;ÅB ¬ã\nø2!É•Õt]apŒé›Ó\0R€CÀv¨M¬I,\rˆçß\0Hv∞›?kTﬁ4£äºÛuŸ±ÿ;&íêÚ+&Éõïµ\r»XèçÅbu4›°i88¬2B‰/‚Éñ4É°ÄN8A‹A)52Ì˙¯ÀÂŒ2à®s„8Áì5§•°pÁWC@Ë:òtÖ„æ¥÷eêöh\"#8_òÊcp^„à‚I]OH˛‘:zd»3g£(Ñà◊√ñk∏Óì\\6¥êòê2⁄⁄ñ˜πi√‰7≤òœ]\r√xOæn∫pË<°¡pÔQÆU–nãÚ|@ÁÀÛ#G3¡8bA® 6Ù2ü67%#∏\\8\r˝ö2»c\rÊ›ükÆÇ.(í	éí-óJ;Óõ—Û »ÈL„œ ÉºûW‚¯„ßì—•…§‚ñ˜∑ûn˚†“ßªÊ˝MŒ¿9Z–ùs]ÍzÆØ¨Îy^[ØÏ4-∫U\0ta†∂62^ïò.`§Ç‚.Cﬂjˇ[·Ñ†% Q\0`dÎM8ø¶ºÀ€\$O0`4≤ÍŒ\n\0a\rAÑ<Ü@üÉõä\r!¿:ÿBAü9Ÿ?h>§«∫†ö~Ãåó6»àh‹=À-úA7X‰¿÷á\\º\rÅëQ<Ëößqí'!XŒì2˙T ∞!åD\rß“,K¥\"Á%òH÷qR\rÑÃ†¢ÓC =éÌÇ†Ê‰é»<cî\n#<Ä5çM¯ ÍEÉúyå°îìá∞˙o\"∞cJKL2˘&£ÿeRú¿W–AŒêTw —ë;ÂJà‚·\\`)5¶‘ﬁúBÚqhT3ß‡R	∏'\r+\":Ç8§¿tVìAﬂ+]å…S72»§YàFÉºZ85‡c,ÊÙ∂J¡±/+S∏nBpoW≈dê÷\"ßQ˚¶a≠ZKpËﬁßy\$õí–œı4èI¢@L'@âxC—dfÈ~}Q*î“∫Aµ‡Qí\"B€*2\0ú.—’kF©\"\rîë∞ ÿoÉ\\Î‘¢êô⁄VijY¶•M ÙOÇ\$äà2“ThHÅ¥§™0XH™5~kL©âÖT*:~P©î2¶t“¬‡B\0˝YÖ¿»¡úüjÜvD–s.–9ìs∏πÃ§∆P•*xû™ïb§oìıˇ¢P‹\$πW/ì*√…z';¶—\$û*˘€ŸÈd‚mÌ√Éƒ'b\r—n%≈ƒ47WÏ-üí‡ˆ’†∂K¥µ≥@<≈gÊ√®bB—ˇ[7ß\\í|ÄVdR£ø6leQÃ`(‘¢,—dòÂπ8\r•]S:?ö1π`ÓÕY¿`‹AÂ“ì%æ“ZkQîsMö*—◊»{`ØJ*ùw∂◊”ä>Ó’æÙDœ˚õ>Ôe”æ∑\"Ât+po¸¸ñˆ∂≈W\$„Å‹Õ˚Q·î@»É3t`∂Üò∂-k7gÊ‰†]” lÓ¥E¿π^dW>nv¿tˆlzPH®óFvWıV\n’h;¢îB·D∞ÿ≥/ˆ:J≥›\\ + %•Òñ˜Ó·]˙˙—äΩ£wa◊›´∏áÒ=ùºXÆÚÜõN˚/å–wìJÒ_[·t)5ÙΩ˘QR2lû-:õY9”&l R;Øu#S	˝ ht†kœE!lÿ˙‘>SHÄ¿X<,ÅO∏Yy–É%Lñ]\0û	Ç”^ﬂdw–3Ì,Sc°Qtòe=ëM:4¸ˇ‘2]îÍPÓT√sé’n:©∫u>Ó/üdúº ﬁÌ¥aã'%ËìÌ›¡q“®&@÷êÀï¡ÓåñH∑G‚@w8pÒ¿ú¡ŒÅ§Z\n´ÿ{∂[≤t2Ñ√‡añ¥>	¥wåJÓ^+u~√o¯Â¬µXk’¶BZkÀ±√X=»À0>™tØ¢l≈É)WbÄ‹¶¯ı'√A“,·ÌmÜYó,ãAí¡ÒäeùÔ#VπÒ+ên1I©Œ ¡EÅ+[‚¸Ôÿ[Ø˚-RömK9«π~ç„ã˜LÄ-3Oò ¡`_0s˙ÅÀL;õ∞∏¬‡]ê6ı•|§áhˇV«T:äÇﬁûerMŒ…aı\$~eë9•>··„à¡–î¡\r’ \\î¡ÙJ1√öº¡–%¢=0{ˆ	êüÃÁ|ﬁót⁄ºì=æ¬ÛÄQÁ|\0?ı„[g@u?…ù|ƒˆ4›*Çµc-7—4\ri'^Ÿ—Âøn;ú˙ª˘âä¶(ª·¶œ{K«hÒnfµÔ⁄Zœù}l≥ËÍÁ≈]\r‰î˛pJ>—,gp{ü;Œ\0µΩu)⁄’sËNë'˝ Á„HŸ¯C9M5Í*¯è`Íkí„¨é†ˆ˛©AhY¬©*ñ©™äjJò«ÖPN+^ê D∞*∏´√ÄÓ–ÄD™⁄P‰ÏÄLQ`O&ñ£\0ÿ}ê\$ùÖ¬6êZn>≤À0€ ‹e¿ê\nÄö	Ötrp!êhV§'Py–^â*|r%|\nr\r#é∞Ñ@wÆªÌ–T.Rv‚8Ïj‚\nmB•Ôƒp®œ ˙Y0®œ¢Îm\0Ë@P\r8¿Y\rGÿ›dí	¿QGÅP%EŒ/@]\r¿ ¿{\0ÃQê‘‡¿bR M\rFŸÁ|¢Ë%0SDrß¬»†ûf/ñ‡¬‹\":‹mo≤ﬁÉ¬%ﬂ@Ê3H¶x\0¬l\0Ã≈⁄	ëÄW†ﬂÂ⁄\nÁ8\r\0}Æ@ûD…Ò`#±tÇ‰.ÄjEoDr«¢lb¿ÿŸÂtÏf4∏0Ä¿§%—0íÂ“k™z2\rÒü ÓW@¬íÁ%\r\n~1ÄÇX†§ŸÒ∫D2!∞ÙOÇ*á§≤{0<E¶ãk*mÎ0ƒ±˛÷Œ|\r\nÊ^iç¿ç ®≥!.ßr Ú ßà¸çÃˆËÓfÒÚƒ¨¿˘+:éÔû≈ãJ˙B5\$L‹ËÚPΩÏ“LƒÇ´‡∂ Z@∫ÏÍÃ`^PL%5%jpëH‚W¿on¯ˆkA#&êˆí8ŸÚ<K6Ã/ñ˘≤éÃè¢ÃÌ‰˙ÚXWe+&õ%ƒ—≤c&rjÌÒ'%“xÇ≤∞æ≈nK•2˚2÷∂ãl‡Í*·.¸réÕŒ¢âÇÇ*–\r+jpèBgÍ{ ≤ûÅ0Î%1(™äÓZã`Q#±‘é‚n*hÚ†Úv¢B‚œ¿\\F\nÇW≈r f\$Û93‰G4%d†bî:JZ!ì,Äâ_†˚f%2ÄÀ6s*FÄ—®“∫≥EQΩq~≤é`ts÷“Äëíâ(è`⁄\r¿öÆ#ÄR©¨∞±RÆrêÛ∂XÍﬁ:Rõ)ÚA*3ø\$lÀ*ŒΩ:\"XlÃ‘tbK›-Ñ¬ö“O>Rı-•d°«=§Ú\$SÙ\$Â2¿ä}7Sfπ‚[å}\"@»]†[6S|SE_>•q-‰@z`Ì;¥0±Û∆ªÀ¡C—*Ø¶[¿“¿{D∞ﬁjC\nfÂsñPÚ6'ÄéË»ï QEìíÊN\\%rÒo˜7o˙G+dW4A*Ä–#TqEŒfïæ%˘D¥ZÊ3ñß2.Ïâ≈Rk‚Äz@∂è@ªE≥D¢`C¬V!CÊ‰≈ï\0±‘€I˛)38ééM3¬@Ÿ3Lá‚ZB≥1F@L‰h~G≥1Mƒ——6ÒÇ”4‰X—îÚ}∆ûfäÀ¢INÄÛ34¿X‘Btd≥8\nbtN„‡Qb;Õ‹ëDÇ’Lè\0‘Ø\"\nÇûﬂ‰V—Õ6—¿]UıcVfÑÒ≈D`áMÒ6”O4Å4sJïã55è5ì\\x	Œ<5[F‹ﬂµy7m˜)@SV≠»ƒû#ÍxÇ’8 ’∏—ã¨£`∑\\`›-äv2≤˝’p•ú∑+vßÄ˚U´≠LÍxY.§ûâõ\0005(û@Ú¥‚∞µ[U@#µVJuX4Ìu_Ô\"JO(Dt˝_	5sΩ^ê†ı°É†—≈ƒ5∑^ª^V‡æIÍÊ\rg&]†®\r\"ZCI•6µ #µŒ\r©®‹ìá≥]7¥ê†q’0ŸÛ6}oæíó`uöÄab(ÒX”D†f˝M÷N)˝V’UUFè–æ¯ì=jSWi≈\"\\B1ƒûÿE0∂ µamP¿Ì&<•O_éLñÚë¬.cç1Z*†¿R\$Âhù∂˘mv˝[v>›≠Ìpïàùä(ÂÀ0êò∞úcP£om\0R¥˝p˜&ãw+KQÅs6Ü}5[sˆJ£’Ù2µ˘/Ä˙‡O ÚV*)ÀRµ.Du33ñF\r¬;≠„v4Ÿµ˛H˘	_!Ù≠2åµk™¶èª+™ª%:…_,‘eoËœF®ÃAJ∂O»\"%¨\nãk5`z %|√%ƒŒ´g|¿œ}l∂v2n7 ~\0Œ	®YRH˙À@÷Ìrí≠xN-Jp\0ºÇÂãf#Ä€@ÀÄmv‘xÖò\rñ¸ñ2WMO/∞\nDØ€7œ}2íÚ‰VW„WËÍw…Ä7ÂÄÒÀH∆kÑ®]∏\$‘Mz\\ÚeÅ.f¯RZÿaÜB‰πµ†QdÕKZì‡vt¿ÿÄw4Ø\0ÊZ@‡	˜ÙBc;Œbñ„>⁄B˛	3mÕn\nÎo†œJ3îÊkå(‹ç£êÇ\"‡yG\$:\rÿ≈ÜË›éìùG6Ä…≤J•Áy—ÒQˆ\\Q˙˜if˜≠ﬁ¯©(Ôm)/rì\$˘J≈/ùHÃ]*ÚÚΩÛágπZOD˜—¨äÉ]1Œg22òø±óàÔ´f…=HTÖà]N¬&¶¿ƒM\0÷[8xá»ÆEÊñ‚8&L÷Vmúv¿±™îjÑ◊ò«FÂƒ\\ôñ	ôöû&s·@Qô \\\"ÚbÄ∞	‡ƒ\rBsöIwú	úY…ú¬N ö7«C/&Ÿ´`®\n\n√ô[kòπ¥*Añ†ÒTœV*UZtz{ä.ÇÁyòSâ†ö#…3¢ipzW@yC\nKTªò1@|Ñz#‰¸Ä_CJz(B∫,V‘(K∫_°∫dOó©ÄP‡@XÖçtÉ–Ö¶∫c;˙WZzW•_Ÿ†è\0ﬁä¬CF¯xR †	‡¶\nÖÑ‡é∫∞P∆A°Ë&éööç†Èõ,÷pfV|@N®\"æ\$Ä[Öiíä≠ï¢‡¶¥‡Z•\0Zd\\\"Ö|¢W`∫∆]∫Ãtz–o\$‚\0[∞Ëﬁ±uÅeûÁÎ±…ô¨bhU-°Ç,Är „Lk8ß†÷´ÜV&⁄alßÿÎ‡dÌå◊2;	†'-°∂Jyuóõa©µ›\0†˜®ïaç£{s∂[9V\0¥áF´ëR ¬VB0S;D∫>L4∫&áZHO1Ö\0 wg ∫S•tK§®RÖz¶®⁄iº⁄+Ω3ıw≠ßzíX¢]®(G\$∞®Ø™D+∞t’π·(#™î©ôocî:	¿‡Y6º\0ñË&πº	@¶	‡ú¸)¬“!õá¥¶wÄªú# t–x∫NDÛ¿ïƒö)ÍıC£ FZ¬p¿ƒaóƒ*Fƒbπ	ØÉÕº¿å£„ƒ£˘Å§ÂÁSi/Sº!áÄzÈUH*Œ4∫Î§ÀŸ0˘K¿-∏/ì≠¿-k`∞n‹Li JÎ~¬w‡Jnæ√\"Ì`”=ÏÿV∂3OƒØ8t‰>µ˚voÎ‚E.ÆÉRz`ﬁãp∑P†ú‘E\\ŸÕ…ßŒ3LÁlÔ—•s]TëááoVØÒÄ\n†§	*Ç\rº@7)¶ D¸mù0W›5”Äﬂ”«∞®w›‘bî»›|	«ºJVºË¿ú\"Çur\r‰&N0NˆB®d¶Àd–8ÓD®Ä_Õ´◊^TˆÆH#]Ñd·+˙vÄ~¿U,–PR%ÒáÖ˘…“ﬂx‘’¡fA¡ªC¡¸m¿êÉªÕ∏∑πí€c√«y≈úD)˙õ’uH‡˜ﬂp˛p™^u\0ËÈà∞≤å}°{—°≈\rg‰s«QM§Yá2jÅ\ró|0\0X◊‚@qÕåïI`ˆª5Fç6±N÷˛V@”îsEÔpíı¨#\r˛PæT˜ñDeWÜÿºÒõ≠Å„€z!√ªÁû:¸DMV(¢©~X∏ùç9£\0Â£@òø≠40N¨‹Ω~îQ–[Tè‹ƒe˛qSv\"’\"h„\0R-¸hZ≥dóÒÖ¿‹F5¥PË”`≥9¬D&xs9W÷ó5Er@oÃwkbì1›PO-O˛OxlHˆD6/÷ø≠mÈﬁ†æ≤3•7Tê®K»~54¨	Òp#µIî>YIN\\5ÄÿÇN”É≠áóıM˚Úpr&úGÌxM»sqåÄó¯.FˇñÕ8ßCs±é hÄe5ƒ¸“›∞±Ú*‡b¯)S⁄™æÜÃ≠Ÿe˙0…-X˙ {˙5|±iñ÷¢aÇ„»ï6zÇﬁΩèÉ/Yâ≥ˇ€éM¶ ∆ÉÏ  \nR*8r o¯ @7°8BfÂz˘K√rÇπ¯A\$À∞	pë\0?Öˇ†d®k√|45}¿Aˇ√Äÿ…∂ÛWøÒJ¿2k Gi\0\"°Äû¿dÄËÌ8ë\0†>mÛ¬ÛÅ `8ØwŸ7…o4‚cGhú±Q–(ÌÄ®÷8@\$<\0p§“0≥˜òL¶eX+ÑJaÄ{ÎùB“‡¥h∂ÿ8ËCyÑÚÍP2∫ù”Æü*”EHÍ2Ω≈›DqSá€òÔpå0ŸIÇ≤ÉkΩ`ﬁ˚SÌ\n‚¬õ:È˘Bú7€‡Ë{-ô¬Ù–`ÓÄıÖ6∏A†W°‹ñ\r˛pÜW#Ù‰°?π˛¢{\0–ﬂÙºÿŒcD†ú[<êÅÑ–f‡--öp‘å¥*BÑ]ÑnW∞≤^é†R70\r„+N®GN≥\$(\0±#+yÛ@ﬁ@iD(8@\r¿h ’HàHe¢•–Ãzz¿{1ÈÖ¿∞hÑŸW1F∞Who&a…úﬁd6°Ω›jwòË…¸ª•¬`hù{v`RE›\njÜ£Â`Í‹∑æ‘«∆*‹à∞ ∏}™Y°Ò	\rYáH∂6•#\0•ÂªÜÍﬁaº¡ Q®HEl4˝d§‹ÌpÎ⁄#ôÜ®ÅÉ°®o”br+_)\r`Ç–!–|dQï>™π=Q °Ä‚Œ∂◊EOB'ë>ÙPÏÆÙ”∂ÿ A\rnKÇiµ‰ 	ä¡ÙÑù	à%<	√o;ÇSÑ@„!	≤xí‡:àÜ›Aë+\\1d\$˘jOú…7ö%∆	Â/äú∂íguÑz*∞GÇHÍ5\"8ñÇ,ü]raq®´Ó/†hã¯#ç√ı≠\$ /tnÕˆ8y∫›-ÆOÇ˝òH±bè‘≠<‚Z◊!©úÖ1°Ï`….(uoõ¿Ö≠|`GÀêSË‘BaM	⁄Ç9∆ûÓD@£ùı1âBÄtD–¯ °@?o©(HñÇqCØ∂8EºTcncR√Ç6©N%ºrHjæ‡2G\0âa¥§q ôr¡«z9b>(Pê„üxË«<ç˜)Ùx#≈8ÛË™πt≥à’hÑ2v«ÒWo2UÎŒŒt≥ò+=¿l#ÍÛœj˛D•	0§Âãõ&R£cË\$ï*Ãë-Z`‡¿\räÍ;À|A˘p‡=1‘	1ÌïÅÌ∆à®bEv(^ÄX•P2=\0}ÇWëà˜Gæ<∞ö G°πë¯¯Rù#PÉH‹Ær9	£ÉY˚¥!íLB§ëë4ÄNCÑZàÓIC¥ë‘MLm¢¬,¡f@eY†xõBS(”+ÿè<4Yå)-ÿ\rêz?\$‡Ä‹\"\"∫ç 6™E˘\r)zëíƒ@»ë¢írÑêê§*ÂÉÊJ»Ïúã¿à%\$˘e˝J˚òã\0AÂ\$⁄∞/5’—B0SÙ§úx∫ìI∫Q)Ûï<¶¨4YSë&ë{äºb„+IG=>°\rêPY`Z∏Dï`¶îU≤¢ç™F1Ää¯4d8X(√¿∞˙C%é`è„ú≠0ÀI\$É7W¬p«Å,ôúAc¿ñÈ&‘åÈp\$ê:Ëñr@Ô\"{\0004€B‡1â\rG¢Û\nC¡1Aã-P.‰v%ÙùUXIëD<)Ùø”≠&YÇG`›©WÀ\n†«ê(0}‚÷çÚ= Ê]ƒ√1ôãqcTÊ*ê@%‹ v\\ ƒÍò2,’0Œtâ\"@T¡©\rP}ì/dÃ@‡€6ãbKÚÃƒúËπâ-¢<≥â{FÊi3g¡‹)Ûò¥–ñ‰8‰fd∑„’L\$1¶Ç˘ßÖ¡çä:\"Ÿ`¿¬ä…≠©M¬35¥œÊ%1¶4Meçl°Û¬&NÍ°q#®oâN›¥@QCü≠ÍO‹çF(çv'#badVñ±†ñêè\$Ç±ëLgBÎú¢N«ë¨)‰ßÌYªé\0ß‡¶y]KPrÌî¨•@æ¶sÔâZ–áfVIπ\0ºµIdöb@&—8’≈MÆumtÀ¶‡∆Í∑7¡q3u h\n¶†4ÇM6kë<‘ƒÇ=`éD\\Cì^!«∞:0òy!°ó∞Ωìäõä)ZX(Q!‰„Á(Ñ~…‡»N∂ùDåπ“ D{");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress('');}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo'';break;case"cross.gif":echo'';break;case"up.gif":echo'';break;case"down.gif":echo'';break;case"arrow.gif":echo'';break;}}exit;}if($_GET["script"]=="version"){$_c=file_open_lock(get_temp_dir()."/adminer.version");if($_c)file_write_unlock($_c,serialize(array("signature"=>$_POST["signature"],"version"=>$_POST["version"])));exit;}global$b,$h,$m,$Fb,$Kb,$Sb,$n,$Bc,$Fc,$aa,$dd,$x,$ba,$td,$ee,$ze,$Lf,$Jc,$jg,$ng,$vg,$Bg,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";if($_SERVER["HTTP_X_FORWARDED_PREFIX"])$_SERVER["REQUEST_URI"]=$_SERVER["HTTP_X_FORWARDED_PREFIX"].$_SERVER["REQUEST_URI"];$aa=($_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off"))||ini_bool("session.cookie_secure");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_cache_limiter("");session_name("adminer_sid");$F=array(0,preg_replace('~\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$mc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",15);function
get_lang(){return'en';}function
lang($mg,$ae=null){if(is_array($mg)){$Be=($ae==1?0:1);$mg=$mg[$Be];}$mg=str_replace("%d","%s",$mg);$ae=format_number($ae);return
sprintf($mg,$ae);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Be=array_search("SQL",$b->operators);if($Be!==false)unset($b->operators[$Be]);}function
dsn($Ib,$V,$G,$C=array()){try{parent::__construct($Ib,$V,$G,$C);}catch(Exception$Wb){auth_error(h($Wb->getMessage()));}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=@$this->getAttribute(4);}function
query($H,$wg=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();if(!$this->error)$this->error='Unknown error.';return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$Fb=array();class
Min_SQL{var$_conn;function
__construct($h){$this->_conn=$h;}function
select($R,$M,$Z,$Cc,$D=array(),$z=1,$E=0,$Ge=false){global$b,$x;$jd=(count($Cc)<count($M));$H=$b->selectQueryBuild($M,$Z,$Cc,$D,$z,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&$z!=""&&$Cc&&$jd&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($Cc&&$jd?"\nGROUP BY ".implode(", ",$Cc):"").($D?"\nORDER BY ".implode(", ",$D):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");$Hf=microtime(true);$J=$this->_conn->query($H);if($Ge)echo$b->selectQuery($H,$Hf,!$J);return$J;}function
delete($R,$Ne,$z=0){$H="FROM ".table($R);return
queries("DELETE".($z?limit1($R,$H,$Ne):" $H$Ne"));}function
update($R,$P,$Ne,$z=0,$N="\n"){$Jg=array();foreach($P
as$y=>$X)$Jg[]="$y = $X";$H=table($R)." SET$N".implode(",$N",$Jg);return
queries("UPDATE".($z?limit1($R,$H,$Ne,$N):" $H$Ne"));}function
insert($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":" DEFAULT VALUES"));}function
insertUpdate($R,$L,$Ee){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}function
slowQuery($H,$bg){}function
convertSearch($u,$X,$o){return$u;}function
value($X,$o){return(method_exists($this->_conn,'value')?$this->_conn->value($X,$o):(is_resource($X)?stream_get_contents($X):$X));}function
quoteBinary($hf){return
q($hf);}function
warnings(){return'';}function
tableHelp($B){}}$Fb["sqlite"]="SQLite 3";$Fb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Ce=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($q){$this->_link=new
SQLite3($q);$Lg=$this->_link->version();$this->server_info=$Lg["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$f=$this->_offset++;$U=$this->_result->columnType($f);return(object)array("name"=>$this->_result->columnName($f),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($q){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($q);}function
query($H,$wg=false){$Qd=($wg?"unbufferedQuery":"query");$I=@$this->_link->$Qd($H,SQLITE_BOTH,$n);$this->error="";if(!$I){$this->error=$n;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$y=>$X)$J[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$B=$this->_result->fieldName($this->_offset++);$ye='(\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($ye\\.)?$ye\$~",$B,$A)){$R=($A[3]!=""?$A[3]:idf_unescape($A[2]));$B=($A[5]!=""?$A[5]:idf_unescape($A[4]));}return(object)array("name"=>$B,"orgname"=>$B,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($q){$this->dsn(DRIVER.":$q","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");$this->query("PRAGMA foreign_keys = 1");}function
select_db($q){if(is_readable($q)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$q)?$q:dirname($_SERVER["SCRIPT_FILENAME"])."/$q")." AS a")){parent::__construct($q);$this->query("PRAGMA foreign_keys = 1");return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Ee){$Jg=array();foreach($L
as$P)$Jg[]="(".implode(", ",$P).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$Jg));}function
tableHelp($B){if($B=="sqlite_sequence")return"fileformat2.html#seqtab";if($B=="sqlite_master")return"fileformat2.html#$B";}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;list(,,$G)=$b->credentials();if($G!="")return'Database does not support password.';return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$z,$ce=0,$N=" "){return" $H$Z".($z!==null?$N."LIMIT $z".($ce?" OFFSET $ce":""):"");}function
limit1($R,$H,$Z,$N="\n"){global$h;return(preg_match('~^INTO~',$H)||$h->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1,0,$N):" $H WHERE rowid = (SELECT rowid FROM ".table($R).$Z.$N."LIMIT 1)");}function
db_collation($l,$cb){global$h;return$h->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name");}function
count_tables($k){return
array();}function
table_status($B=""){global$h;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine, 'rowid' AS Oid, '' AS Auto_increment FROM sqlite_master WHERE type IN ('table', 'view') ".($B!=""?"AND name = ".q($B):"ORDER BY name"))as$K){$K["Rows"]=$h->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($B!=""?$J[$B]:$J);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$h;return!$h->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$h;$J=array();$Ee="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$K){$B=$K["name"];$U=strtolower($K["type"]);$xb=$K["dflt_value"];$J[$B]=array("field"=>$B,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$xb,$A)?str_replace("''","'",$A[1]):($xb=="NULL"?null:$xb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($Ee!="")$J[$Ee]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$B]["auto_increment"]=true;$Ee=$B;}}$Ef=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$Ef,$Hd,PREG_SET_ORDER);foreach($Hd
as$A){$B=str_replace('""','"',preg_replace('~^"|"$~','',$A[1]));if($J[$B])$J[$B]["collation"]=trim($A[3],"'");}return$J;}function
indexes($R,$i=null){global$h;if(!is_object($i))$i=$h;$J=array();$Ef=$i->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*"|`[^`]*`)++)~i',$Ef,$A)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+|(?:`[^`]*+`)+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$A[1],$Hd,PREG_SET_ORDER);foreach($Hd
as$A){$J[""]["columns"][]=idf_unescape($A[2]).$A[4];$J[""]["descs"][]=(preg_match('~DESC~i',$A[5])?'1':null);}}if(!$J){foreach(fields($R)as$B=>$o){if($o["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($B),"lengths"=>array(),"descs"=>array(null));}}$Ff=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$i);foreach(get_rows("PRAGMA index_list(".table($R).")",$i)as$K){$B=$K["name"];$v=array("type"=>($K["unique"]?"UNIQUE":"INDEX"));$v["lengths"]=array();$v["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($B).")",$i)as$gf){$v["columns"][]=$gf["name"];$v["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($B).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$Ff[$B],$Ue)){preg_match_all('/("[^"]*+")+( DESC)?/',$Ue[2],$Hd);foreach($Hd[2]as$y=>$X){if($X)$v["descs"][$y]='1';}}if(!$J[""]||$v["type"]!="UNIQUE"||$v["columns"]!=$J[""]["columns"]||$v["descs"]!=$J[""]["descs"]||!preg_match("~^sqlite_~",$B))$J[$B]=$v;}return$J;}function
foreign_keys($R){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$K){$wc=&$J[$K["id"]];if(!$wc)$wc=$K;$wc["source"][]=$K["from"];$wc["target"][]=$K["to"];}return$J;}function
view($B){global$h;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\s+~iU','',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($B))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($l){return
false;}function
error(){global$h;return
h($h->error);}function
check_sqlite_name($B){global$h;$dc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($dc)\$~",$B)){$h->error=sprintf('Please use one of the extensions %s.',str_replace("|",", ",$dc));return
false;}return
true;}function
create_database($l,$e){global$h;if(file_exists($l)){$h->error='File exists.';return
false;}if(!check_sqlite_name($l))return
false;try{$_=new
Min_SQLite($l);}catch(Exception$Wb){$h->error=$Wb->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($k){global$h;$h->__construct(":memory:");foreach($k
as$l){if(!@unlink($l)){$h->error='File exists.';return
false;}}return
true;}function
rename_database($B,$e){global$h;if(!check_sqlite_name($B))return
false;$h->__construct(":memory:");$h->error='File exists.';return@rename(DB,$B);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$B,$p,$tc,$gb,$Rb,$e,$Ea,$ve){$Gg=($R==""||$tc);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$Gg=true;break;}}$c=array();$oe=array();foreach($p
as$o){if($o[1]){$c[]=($Gg?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$oe[$o[0]]=$o[1][0];}}if(!$Gg){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$B&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($B)))return
false;}elseif(!recreate_table($R,$B,$c,$oe,$tc))return
false;if($Ea)queries("UPDATE sqlite_sequence SET seq = $Ea WHERE name = ".q($B));return
true;}function
recreate_table($R,$B,$p,$oe,$tc,$w=array()){if($R!=""){if(!$p){foreach(fields($R)as$y=>$o){if($w)$o["auto_increment"]=0;$p[]=process_field($o,$o);$oe[$y]=idf_escape($y);}}$Fe=false;foreach($p
as$o){if($o[6])$Fe=true;}$Hb=array();foreach($w
as$y=>$X){if($X[2]=="DROP"){$Hb[$X[1]]=true;unset($w[$y]);}}foreach(indexes($R)as$od=>$v){$g=array();foreach($v["columns"]as$y=>$f){if(!$oe[$f])continue
2;$g[]=$oe[$f].($v["descs"][$y]?" DESC":"");}if(!$Hb[$od]){if($v["type"]!="PRIMARY"||!$Fe)$w[]=array($v["type"],$od,$g);}}foreach($w
as$y=>$X){if($X[0]=="PRIMARY"){unset($w[$y]);$tc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$od=>$wc){foreach($wc["source"]as$y=>$f){if(!$oe[$f])continue
2;$wc["source"][$y]=idf_unescape($oe[$f]);}if(!isset($tc[" $od"]))$tc[]=" ".format_foreign_key($wc);}queries("BEGIN");}foreach($p
as$y=>$o)$p[$y]="  ".implode($o);$p=array_merge($p,array_filter($tc));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$B":$B)." (\n".implode(",\n",$p)."\n)"))return
false;if($R!=""){if($oe&&!queries("INSERT INTO ".table("adminer_$B")." (".implode(", ",$oe).") SELECT ".implode(", ",array_map('idf_escape',array_keys($oe)))." FROM ".table($R)))return
false;$tg=array();foreach(triggers($R)as$rg=>$cg){$qg=trigger($rg);$tg[]="CREATE TRIGGER ".idf_escape($rg)." ".implode(" ",$cg)." ON ".table($B)."\n$qg[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$B")." RENAME TO ".table($B));if(!alter_indexes($B,$w))return
false;foreach($tg
as$qg){if(!queries($qg))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$B,$g){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($B!=""?$B:uniqid($R."_"))." ON ".table($R)." $g";}function
alter_indexes($R,$c){foreach($c
as$Ee){if($Ee[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($Ng){return
apply_queries("DROP VIEW",$Ng);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$Ng,$Vf){return
false;}function
trigger($B){global$h;if($B=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$u='(?:[^`"\s]+|`[^`]*`|"[^"]*")+';$sg=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$u\\s*(".implode("|",$sg["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($u))?\\s+ON\\s*$u\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$h->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($B)),$A);$be=$A[3];return
array("Timing"=>strtoupper($A[1]),"Event"=>strtoupper($A[2]).($be?" OF":""),"Of"=>($be[0]=='`'||$be[0]=='"'?idf_unescape($be):$be),"Trigger"=>$B,"Statement"=>$A[4],);}function
triggers($R){$J=array();$sg=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$K){preg_match('~^CREATE\s+TRIGGER\s*(?:[^`"\s]+|`[^`]*`|"[^"]*")+\s*('.implode("|",$sg["Timing"]).')\s*(.*)\s+ON\b~iU',$K["sql"],$A);$J[$K["name"]]=array($A[1],$A[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
begin(){return
queries("BEGIN");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ROWID()");}function
explain($h,$H){return$h->query("EXPLAIN QUERY PLAN $H");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($jf){return
true;}function
create_sql($R,$Ea,$Mf){global$h;$J=$h->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$B=>$v){if($B=='')continue;$J.=";\n\n".index_sql($R,$v['type'],$B,"(".implode(", ",array_map('idf_escape',$v['columns'])).")");}return$J;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($j){}function
trigger_sql($R){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$h;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$J[$y]=$h->result("PRAGMA $y");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$ke){list($y,$X)=explode("=",$ke,2);$J[$y]=$X;}return$J;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($hc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$hc);}$x="sqlite";$vg=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Lf=array_keys($vg);$Bg=array();$je=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Bc=array("hex","length","lower","round","unixepoch","upper");$Fc=array("avg","count","count distinct","group_concat","max","min","sum");$Kb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Fb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Ce=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error,$timeout;function
_error($Ub,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($O,$V,$G){global$b;$l=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($l!=""?addcslashes($l,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$l!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Lg=pg_version($this->_link);$this->server_info=$Lg["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
value($X,$o){return($o["type"]=="bytea"?pg_unescape_bytea($X):$X);}function
quoteBinary($Q){return"'".pg_escape_bytea($this->_link,$Q)."'";}function
select_db($j){global$b;if($j==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($j,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$wg=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);$J=false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);$J=true;}else$J=new
Min_Result($I);if($this->timeout){$this->timeout=0;$this->query("RESET statement_timeout");}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$o);}function
warnings(){return
h(pg_last_notice($this->_link));}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$f=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$f);$J->name=pg_field_name($this->_result,$f);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$f);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL",$timeout;function
connect($O,$V,$G){global$b;$l=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($l!=""?addcslashes($l,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($j){global$b;return($b->database()==$j);}function
quoteBinary($hf){return
q($hf);}function
query($H,$wg=false){$J=parent::query($H,$wg);if($this->timeout){$this->timeout=0;parent::query("RESET statement_timeout");}return$J;}function
warnings(){return'';}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Ee){global$h;foreach($L
as$P){$Cg=array();$Z=array();foreach($P
as$y=>$X){$Cg[]="$y = $X";if(isset($Ee[idf_unescape($y)]))$Z[]="$y = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$Cg)." WHERE ".implode(" AND ",$Z))&&$h->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).")")))return
false;}return
true;}function
slowQuery($H,$bg){$this->_conn->query("SET statement_timeout = ".(1000*$bg));$this->_conn->timeout=1000*$bg;return$H;}function
convertSearch($u,$X,$o){return(preg_match('~char|text'.(!preg_match('~LIKE~',$X["op"])?'|date|time(stamp)?|boolean|uuid|'.number_type():'').'~',$o["type"])?$u:"CAST($u AS text)");}function
quoteBinary($hf){return$this->_conn->quoteBinary($hf);}function
warnings(){return$this->_conn->warnings();}function
tableHelp($B){$_d=array("information_schema"=>"infoschema","pg_catalog"=>"catalog",);$_=$_d[$_GET["ns"]];if($_)return"$_-".str_replace("_","-",$B).".html";}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b,$vg,$Lf;$h=new
Min_DB;$pb=$b->credentials();if($h->connect($pb[0],$pb[1],$pb[2])){if(min_version(9,0,$h)){$h->query("SET application_name = 'Adminer'");if(min_version(9.2,0,$h)){$Lf['Strings'][]="json";$vg["json"]=4294967295;if(min_version(9.4,0,$h)){$Lf['Strings'][]="jsonb";$vg["jsonb"]=4294967295;}}}return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database WHERE has_database_privilege(datname, 'CONNECT') ORDER BY datname");}function
limit($H,$Z,$z,$ce=0,$N=" "){return" $H$Z".($z!==null?$N."LIMIT $z".($ce?" OFFSET $ce":""):"");}function
limit1($R,$H,$Z,$N="\n"){return(preg_match('~^INTO~',$H)?limit($H,$Z,1,0,$N):" $H".(is_view(table_status1($R))?$Z:" WHERE ctid = (SELECT ctid FROM ".table($R).$Z.$N."LIMIT 1)"));}function
db_collation($l,$cb){global$h;return$h->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT user");}function
tables_list(){$H="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$H.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$H.="
ORDER BY 1";return
get_key_vals($H);}function
count_tables($k){return
array();}function
table_status($B=""){$J=array();foreach(get_rows("SELECT c.relname AS \"Name\", CASE c.relkind WHEN 'r' THEN 'table' WHEN 'm' THEN 'materialized view' ELSE 'view' END AS \"Engine\", pg_relation_size(c.oid) AS \"Data_length\", pg_total_relation_size(c.oid) - pg_relation_size(c.oid) AS \"Index_length\", obj_description(c.oid, 'pg_class') AS \"Comment\", CASE WHEN c.relhasoids THEN 'oid' ELSE '' END AS \"Oid\", c.reltuples as \"Rows\", n.nspname
FROM pg_class c
JOIN pg_namespace n ON(n.nspname = current_schema() AND n.oid = c.relnamespace)
WHERE relkind IN ('r', 'm', 'v', 'f')
".($B!=""?"AND relname = ".q($B):"ORDER BY relname"))as$K)$J[$K["Name"]]=$K;return($B!=""?$J[$B]:$J);}function
is_view($S){return
in_array($S["Engine"],array("view","materialized view"));}function
fk_support($S){return
true;}function
fields($R){$J=array();$wa=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$K["full_type"],$A);list(,$U,$xd,$K["length"],$ra,$ya)=$A;$K["length"].=$ya;$Ua=$U.$ra;if(isset($wa[$Ua])){$K["type"]=$wa[$Ua];$K["full_type"]=$K["type"].$xd.$ya;}else{$K["type"]=$U;$K["full_type"]=$K["type"].$xd.$ra.$ya;}$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$A))$K["default"]=($A[1]=="NULL"?null:(($A[1][0]=="'"?idf_unescape($A[1]):$A[1]).$A[2]));$J[$K["field"]]=$K;}return$J;}function
indexes($R,$i=null){global$h;if(!is_object($i))$i=$h;$J=array();$Tf=$i->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$g=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Tf AND attnum > 0",$i);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption , (indpred IS NOT NULL)::int as indispartial FROM pg_index i, pg_class ci WHERE i.indrelid = $Tf AND ci.oid = i.indexrelid",$i)as$K){$Ve=$K["relname"];$J[$Ve]["type"]=($K["indispartial"]?"INDEX":($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX")));$J[$Ve]["columns"]=array();foreach(explode(" ",$K["indkey"])as$Zc)$J[$Ve]["columns"][]=$g[$Zc];$J[$Ve]["descs"]=array();foreach(explode(" ",$K["indoption"])as$ad)$J[$Ve]["descs"][]=($ad&1?'1':null);$J[$Ve]["lengths"]=array();}return$J;}function
foreign_keys($R){global$ee;$J=array();foreach(get_rows("SELECT conname, condeferrable::int AS deferrable, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$A)){$K['source']=array_map('trim',explode(',',$A[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$A[2],$Gd)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$Gd[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$Gd[4]));}$K['target']=array_map('trim',explode(',',$A[3]));$K['on_delete']=(preg_match("~ON DELETE ($ee)~",$A[4],$Gd)?$Gd[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($ee)~",$A[4],$Gd)?$Gd[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($B){global$h;return
array("select"=>trim($h->result("SELECT view_definition
FROM information_schema.views
WHERE table_schema = current_schema() AND table_name = ".q($B))));}function
collations(){return
array();}function
information_schema($l){return($l=="information_schema");}function
error(){global$h;$J=h($h->error);if(preg_match('~^(.*\n)?([^\n]*)\n( *)\^(\n.*)?$~s',$J,$A))$J=$A[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($A[3]).'})(.*)~','\1<b>\2</b>',$A[2]).$A[4];return
nl_br($J);}function
create_database($l,$e){return
queries("CREATE DATABASE ".idf_escape($l).($e?" ENCODING ".idf_escape($e):""));}function
drop_databases($k){global$h;$h->close();return
apply_queries("DROP DATABASE",$k,'idf_escape');}function
rename_database($B,$e){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($B));}function
auto_increment(){return"";}function
alter_table($R,$B,$p,$tc,$gb,$Rb,$e,$Ea,$ve){$c=array();$Me=array();foreach($p
as$o){$f=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $f";else{$Ig=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($f!=$X[0])$Me[]="ALTER TABLE ".table($R)." RENAME $f TO $X[0]";$c[]="ALTER $f TYPE$X[1]";if(!$X[6]){$c[]="ALTER $f ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $f ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$Ig!="")$Me[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($Ig!=""?substr($Ig,9):"''");}}$c=array_merge($c,$tc);if($R=="")array_unshift($Me,"CREATE TABLE ".table($B)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Me,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$B)$Me[]="ALTER TABLE ".table($R)." RENAME TO ".table($B);if($R!=""||$gb!="")$Me[]="COMMENT ON TABLE ".table($B)." IS ".q($gb);if($Ea!=""){}foreach($Me
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($R,$c){$nb=array();$Gb=array();$Me=array();foreach($c
as$X){if($X[0]!="INDEX")$nb[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$Gb[]=idf_escape($X[1]);else$Me[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($nb)array_unshift($Me,"ALTER TABLE ".table($R).implode(",",$nb));if($Gb)array_unshift($Me,"DROP INDEX ".implode(", ",$Gb));foreach($Me
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($Ng){return
drop_tables($Ng);}function
drop_tables($T){foreach($T
as$R){$Jf=table_status($R);if(!queries("DROP ".strtoupper($Jf["Engine"])." ".table($R)))return
false;}return
true;}function
move_tables($T,$Ng,$Vf){foreach(array_merge($T,$Ng)as$R){$Jf=table_status($R);if(!queries("ALTER ".strtoupper($Jf["Engine"])." ".table($R)." SET SCHEMA ".idf_escape($Vf)))return
false;}return
true;}function
trigger($B,$R=null){if($B=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");if($R===null)$R=$_GET['trigger'];$L=get_rows('SELECT t.trigger_name AS "Trigger", t.action_timing AS "Timing", (SELECT STRING_AGG(event_manipulation, \' OR \') FROM information_schema.triggers WHERE event_object_table = t.event_object_table AND trigger_name = t.trigger_name ) AS "Events", t.event_manipulation AS "Event", \'FOR EACH \' || t.action_orientation AS "Type", t.action_statement AS "Statement" FROM information_schema.triggers t WHERE t.event_object_table = '.q($R).' AND t.trigger_name = '.q($B));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$K)$J[$K["trigger_name"]]=array($K["action_timing"],$K["event_manipulation"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routine($B,$U){$L=get_rows('SELECT routine_definition AS definition, LOWER(external_language) AS language, *
FROM information_schema.routines
WHERE routine_schema = current_schema() AND specific_name = '.q($B));$J=$L[0];$J["returns"]=array("type"=>$J["type_udt_name"]);$J["fields"]=get_rows('SELECT parameter_name AS field, data_type AS type, character_maximum_length AS length, parameter_mode AS inout
FROM information_schema.parameters
WHERE specific_schema = current_schema() AND specific_name = '.q($B).'
ORDER BY ordinal_position');return$J;}function
routines(){return
get_rows('SELECT specific_name AS "SPECIFIC_NAME", routine_type AS "ROUTINE_TYPE", routine_name AS "ROUTINE_NAME", type_udt_name AS "DTD_IDENTIFIER"
FROM information_schema.routines
WHERE routine_schema = current_schema()
ORDER BY SPECIFIC_NAME');}function
routine_languages(){return
get_vals("SELECT LOWER(lanname) FROM pg_catalog.pg_language");}function
routine_id($B,$K){$J=array();foreach($K["fields"]as$o)$J[]=$o["type"];return
idf_escape($B)."(".implode(", ",$J).")";}function
last_id(){return
0;}function
explain($h,$H){return$h->query("EXPLAIN $H");}function
found_rows($S,$Z){global$h;if(preg_match("~ rows=([0-9]+)~",$h->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Ue))return$Ue[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$h;return$h->result("SELECT current_schema()");}function
set_schema($if){global$h,$vg,$Lf;$J=$h->query("SET search_path TO ".idf_escape($if));foreach(types()as$U){if(!isset($vg[$U])){$vg[$U]=0;$Lf['User types'][]=$U;}}return$J;}function
create_sql($R,$Ea,$Mf){global$h;$J='';$ef=array();$sf=array();$Jf=table_status($R);$p=fields($R);$w=indexes($R);ksort($w);$qc=foreign_keys($R);ksort($qc);if(!$Jf||empty($p))return
false;$J="CREATE TABLE ".idf_escape($Jf['nspname']).".".idf_escape($Jf['Name'])." (\n    ";foreach($p
as$ic=>$o){$ue=idf_escape($o['field']).' '.$o['full_type'].default_value($o).($o['attnotnull']?" NOT NULL":"");$ef[]=$ue;if(preg_match('~nextval\(\'([^\']+)\'\)~',$o['default'],$Hd)){$rf=$Hd[1];$Df=reset(get_rows(min_version(10)?"SELECT *, cache_size AS cache_value FROM pg_sequences WHERE schemaname = current_schema() AND sequencename = ".q($rf):"SELECT * FROM $rf"));$sf[]=($Mf=="DROP+CREATE"?"DROP SEQUENCE IF EXISTS $rf;\n":"")."CREATE SEQUENCE $rf INCREMENT $Df[increment_by] MINVALUE $Df[min_value] MAXVALUE $Df[max_value] START ".($Ea?$Df['last_value']:1)." CACHE $Df[cache_value];";}}if(!empty($sf))$J=implode("\n\n",$sf)."\n\n$J";foreach($w
as$Uc=>$v){switch($v['type']){case'UNIQUE':$ef[]="CONSTRAINT ".idf_escape($Uc)." UNIQUE (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;case'PRIMARY':$ef[]="CONSTRAINT ".idf_escape($Uc)." PRIMARY KEY (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;}}foreach($qc
as$pc=>$oc)$ef[]="CONSTRAINT ".idf_escape($pc)." $oc[definition] ".($oc['deferrable']?'DEFERRABLE':'NOT DEFERRABLE');$J.=implode(",\n    ",$ef)."\n) WITH (oids = ".($Jf['Oid']?'true':'false').");";foreach($w
as$Uc=>$v){if($v['type']=='INDEX')$J.="\n\nCREATE INDEX ".idf_escape($Uc)." ON ".idf_escape($Jf['nspname']).".".idf_escape($Jf['Name'])." USING btree (".implode(', ',array_map('idf_escape',$v['columns'])).");";}if($Jf['Comment'])$J.="\n\nCOMMENT ON TABLE ".idf_escape($Jf['nspname']).".".idf_escape($Jf['Name'])." IS ".q($Jf['Comment']).";";foreach($p
as$ic=>$o){if($o['comment'])$J.="\n\nCOMMENT ON COLUMN ".idf_escape($Jf['nspname']).".".idf_escape($Jf['Name']).".".idf_escape($ic)." IS ".q($o['comment']).";";}return
rtrim($J,';');}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
trigger_sql($R){$Jf=table_status($R);$J="";foreach(triggers($R)as$pg=>$og){$qg=trigger($pg,$Jf['Name']);$J.="\nCREATE TRIGGER ".idf_escape($qg['Trigger'])." $qg[Timing] $qg[Events] ON ".idf_escape($Jf["nspname"]).".".idf_escape($Jf['Name'])." $qg[Type] $qg[Statement];;\n";}return$J;}function
use_sql($j){return"\connect ".idf_escape($j);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".(min_version(9.2)?"pid":"procpid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($hc){return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.(min_version(9.3)?'materializedview|':'').'scheme|routine|processlist|sequence|trigger|type|variables|drop_col|kill|dump)$~',$hc);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){global$h;return$h->result("SHOW max_connections");}$x="pgsql";$vg=array();$Lf=array();foreach(array('Numbers'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Date and time'=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),'Strings'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binary'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Network'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometry'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$vg+=$X;$Lf[$y]=array_keys($X);}$Bg=array();$je=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Bc=array("char_length","lower","round","to_hex","to_timestamp","upper");$Fc=array("avg","count","count distinct","max","min","sum");$Kb=array(array("char"=>"md5","date|time"=>"now",),array(number_type()=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Fb["oracle"]="Oracle (beta)";if(isset($_GET["oracle"])){$Ce=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($Ub,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($O,$V,$G){$this->_link=@oci_new_connect($V,$G,$O,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($j){return
true;}function
query($H,$wg=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'OCI-Lob'))$K[$y]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$f=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$f);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$f);$J->charsetnr=(preg_match("~raw|blob|bfile~",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($O,$V,$G){$this->dsn("oci:dbname=//$O;charset=AL32UTF8",$V,$G);return
true;}function
select_db($j){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$h=new
Min_DB;$pb=$b->credentials();if($h->connect($pb[0],$pb[1],$pb[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$z,$ce=0,$N=" "){return($ce?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$ce).") WHERE rnum > $ce":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$ce):" $H$Z"));}function
limit1($R,$H,$Z,$N="\n"){return" $H$Z";}function
db_collation($l,$cb){global$h;return$h->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($k){return
array();}function
table_status($B=""){$J=array();$kf=q($B);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($B!=""?" AND table_name = $kf":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($B!=""?" WHERE view_name = $kf":"")."
ORDER BY 1")as$K){if($B!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$xd="$K[DATA_PRECISION],$K[DATA_SCALE]";if($xd==",")$xd=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($xd?"($xd)":""),"type"=>strtolower($U),"length"=>$xd,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($R,$i=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$i)as$K){$Uc=$K["INDEX_NAME"];$J[$Uc]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$Uc]["columns"][]=$K["COLUMN_NAME"];$J[$Uc]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$Uc]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
view($B){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($B));return
reset($L);}function
collations(){return
array();}function
information_schema($l){return
false;}function
error(){global$h;return
h($h->error);}function
explain($h,$H){$h->query("EXPLAIN PLAN FOR $H");return$h->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$B,$p,$tc,$gb,$Rb,$e,$Ea,$ve){$c=$Gb=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($R!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$Gb[]=idf_escape($o[0]);}if($R=="")return
queries("CREATE TABLE ".table($B)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$Gb||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$Gb).")"))&&($R==$B||queries("ALTER TABLE ".table($R)." RENAME TO ".table($B)));}function
foreign_keys($R){$J=array();$H="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($R);foreach(get_rows($H)as$K)$J[$K['NAME']]=array("db"=>$K['DEST_DB'],"table"=>$K['DEST_TABLE'],"source"=>array($K['SRC_COLUMN']),"target"=>array($K['DEST_COLUMN']),"on_delete"=>$K['ON_DELETE'],"on_update"=>null,);return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Ng){return
apply_queries("DROP VIEW",$Ng);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$h;return$h->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($jf){global$h;return$h->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($jf));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$L=get_rows('SELECT * FROM v$instance');return
reset($L);}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($hc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$hc);}$x="oracle";$vg=array();$Lf=array();foreach(array('Numbers'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Date and time'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Strings'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binary'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$vg+=$X;$Lf[$y]=array_keys($X);}$Bg=array();$je=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Bc=array("length","lower","round","upper");$Fc=array("avg","count","count distinct","max","min","sum");$Kb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Fb["mssql"]="MS SQL (beta)";if(isset($_GET["mssql"])){$Ce=array("SQLSRV","MSSQL","PDO_DBLIB");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($O,$V,$G){$this->_link=@sqlsrv_connect(preg_replace('~:~',',',$O),array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$bd=sqlsrv_server_info($this->_link);$this->server_info=$bd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($j){return$this->query("USE ".idf_escape($j));}function
query($H,$wg=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(!$I)return
false;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'DateTime'))$K[$y]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$o["Name"];$J->orgname=$o["Name"];$J->type=($o["Type"]==1?254:0);return$J;}function
seek($ce){for($s=0;$s<$ce;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($O,$V,$G){$this->_link=@mssql_connect($O,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");if($I){$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($j){return
mssql_select_db($j);}function
query($H,$wg=false){$I=@mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result->_result);}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($ce){mssql_data_seek($this->_result,$ce);}function
__destruct(){mssql_free_result($this->_result);}}}elseif(extension_loaded("pdo_dblib")){class
Min_DB
extends
Min_PDO{var$extension="PDO_DBLIB";function
connect($O,$V,$G){$this->dsn("dblib:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\d)~',';port=\1',$O)),$V,$G);return
true;}function
select_db($j){return$this->query("USE ".idf_escape($j));}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Ee){foreach($L
as$P){$Cg=array();$Z=array();foreach($P
as$y=>$X){$Cg[]="$y = $X";if(isset($Ee[idf_unescape($y)]))$Z[]="$y = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$P).")) AS source (c".implode(", c",range(1,count($P))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Cg)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
connect(){global$b;$h=new
Min_DB;$pb=$b->credentials();if($h->connect($pb[0],$pb[1],$pb[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("SELECT name FROM sys.databases WHERE name NOT IN ('master', 'tempdb', 'model', 'msdb')");}function
limit($H,$Z,$z,$ce=0,$N=" "){return($z!==null?" TOP (".($z+$ce).")":"")." $H$Z";}function
limit1($R,$H,$Z,$N="\n"){return
limit($H,$Z,1,0,$N);}function
db_collation($l,$cb){global$h;return$h->result("SELECT collation_name FROM sys.databases WHERE name = ".q($l));}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($k){global$h;$J=array();foreach($k
as$l){$h->select_db($l);$J[$l]=$h->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($B=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($B!=""?"AND name = ".q($B):"ORDER BY name"))as$K){if($B!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$J=array();foreach(get_rows("SELECT c.max_length, c.precision, c.scale, c.name, c.is_nullable, c.is_identity, c.collation_name, t.name type, CAST(d.definition as text) [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$K){$U=$K["type"];$xd=(preg_match("~char|binary~",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($xd?"($xd)":""),"type"=>$U,"length"=>$xd,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($R,$i=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$i)as$K){$B=$K["name"];$J[$B]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$B]["lengths"]=array();$J[$B]["columns"][$K["key_ordinal"]]=$K["column_name"];$J[$B]["descs"][$K["key_ordinal"]]=($K["is_descending_key"]?'1':null);}return$J;}function
view($B){global$h;return
array("select"=>preg_replace('~^(?:[^[]|\[[^]]*])*\s+AS\s+~isU','',$h->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($B))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$e)$J[preg_replace('~_.*~','',$e)][]=$e;return$J;}function
information_schema($l){return
false;}function
error(){global$h;return
nl_br(h(preg_replace('~^(\[[^]]*])+~m','',$h->error)));}function
create_database($l,$e){return
queries("CREATE DATABASE ".idf_escape($l).(preg_match('~^[a-z0-9_]+$~i',$e)?" COLLATE $e":""));}function
drop_databases($k){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$k)));}function
rename_database($B,$e){if(preg_match('~^[a-z0-9_]+$~i',$e))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $e");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($B));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$B,$p,$tc,$gb,$Rb,$e,$Ea,$ve){$c=array();foreach($p
as$o){$f=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $f";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~",'\1\2',$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($tc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($f!=$X[0])queries("EXEC sp_rename ".q(table($R).".$f").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($B)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$B)queries("EXEC sp_rename ".q(table($R)).", ".q($B));if($tc)$c[""]=$tc;foreach($c
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($B)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$v=array();$Gb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Gb[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$Gb||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$Gb)));}function
last_id(){global$h;return$h->result("SELECT SCOPE_IDENTITY()");}function
explain($h,$H){$h->query("SET SHOWPLAN_ALL ON");$J=$h->query($H);$h->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($S,$Z){}function
foreign_keys($R){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$K){$wc=&$J[$K["FK_NAME"]];$wc["table"]=$K["PKTABLE_NAME"];$wc["source"][]=$K["FKCOLUMN_NAME"];$wc["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Ng){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ng)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Ng,$Vf){return
apply_queries("ALTER SCHEMA ".idf_escape($Vf)." TRANSFER",array_merge($T,$Ng));}function
trigger($B){if($B=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($B));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\s+AS\s+~isU','',$J["text"]);return$J;}function
triggers($R){$J=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$K)$J[$K["name"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$h;if($_GET["ns"]!="")return$_GET["ns"];return$h->result("SELECT SCHEMA_NAME()");}function
set_schema($if){return
true;}function
use_sql($j){return"USE ".idf_escape($j);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($hc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$hc);}$x="mssql";$vg=array();$Lf=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Date and time'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Strings'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binary'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$vg+=$X;$Lf[$y]=array_keys($X);}$Bg=array();$je=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Bc=array("len","lower","round","upper");$Fc=array("avg","count","count distinct","max","min","sum");$Kb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Fb['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$Ce=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$V,$G){$this->_link=ibase_connect($O,$V,$G);if($this->_link){$Fg=explode(':',$O);$this->service_link=ibase_service_attach($Fg[0],$V,$G);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($j){return($j=="domain");}function
query($H,$wg=false){$I=ibase_query($H,$this->_link);if(!$I){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($I===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$o=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$o['name'],'orgname'=>$o['name'],'type'=>$o['type'],'charsetnr'=>$o['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$h=new
Min_DB;$pb=$b->credentials();if($h->connect($pb[0],$pb[1],$pb[2]))return$h;return$h->error;}function
get_databases($rc){return
array("domain");}function
limit($H,$Z,$z,$ce=0,$N=" "){$J='';$J.=($z!==null?$N."FIRST $z".($ce?" SKIP $ce":""):"");$J.=" $H$Z";return$J;}function
limit1($R,$H,$Z,$N="\n"){return
limit($H,$Z,1,0,$N);}function
db_collation($l,$cb){}function
engines(){return
array();}function
logged_user(){global$b;$pb=$b->credentials();return$pb[1];}function
tables_list(){global$h;$H='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$I=ibase_query($h->_link,$H);$J=array();while($K=ibase_fetch_assoc($I))$J[$K['RDB$RELATION_NAME']]='table';ksort($J);return$J;}function
count_tables($k){return
array();}function
table_status($B="",$gc=false){global$h;$J=array();$tb=tables_list();foreach($tb
as$v=>$X){$v=trim($v);$J[$v]=array('Name'=>$v,'Engine'=>'standard',);if($B==$v)return$J[$v];}return$J;}function
is_view($S){return
false;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){global$h;$J=array();$H='SELECT r.RDB$FIELD_NAME AS field_name,
r.RDB$DESCRIPTION AS field_description,
r.RDB$DEFAULT_VALUE AS field_default_value,
r.RDB$NULL_FLAG AS field_not_null_constraint,
f.RDB$FIELD_LENGTH AS field_length,
f.RDB$FIELD_PRECISION AS field_precision,
f.RDB$FIELD_SCALE AS field_scale,
CASE f.RDB$FIELD_TYPE
WHEN 261 THEN \'BLOB\'
WHEN 14 THEN \'CHAR\'
WHEN 40 THEN \'CSTRING\'
WHEN 11 THEN \'D_FLOAT\'
WHEN 27 THEN \'DOUBLE\'
WHEN 10 THEN \'FLOAT\'
WHEN 16 THEN \'INT64\'
WHEN 8 THEN \'INTEGER\'
WHEN 9 THEN \'QUAD\'
WHEN 7 THEN \'SMALLINT\'
WHEN 12 THEN \'DATE\'
WHEN 13 THEN \'TIME\'
WHEN 35 THEN \'TIMESTAMP\'
WHEN 37 THEN \'VARCHAR\'
ELSE \'UNKNOWN\'
END AS field_type,
f.RDB$FIELD_SUB_TYPE AS field_subtype,
coll.RDB$COLLATION_NAME AS field_collation,
cset.RDB$CHARACTER_SET_NAME AS field_charset
FROM RDB$RELATION_FIELDS r
LEFT JOIN RDB$FIELDS f ON r.RDB$FIELD_SOURCE = f.RDB$FIELD_NAME
LEFT JOIN RDB$COLLATIONS coll ON f.RDB$COLLATION_ID = coll.RDB$COLLATION_ID
LEFT JOIN RDB$CHARACTER_SETS cset ON f.RDB$CHARACTER_SET_ID = cset.RDB$CHARACTER_SET_ID
WHERE r.RDB$RELATION_NAME = '.q($R).'
ORDER BY r.RDB$FIELD_POSITION';$I=ibase_query($h->_link,$H);while($K=ibase_fetch_assoc($I))$J[trim($K['FIELD_NAME'])]=array("field"=>trim($K["FIELD_NAME"]),"full_type"=>trim($K["FIELD_TYPE"]),"type"=>trim($K["FIELD_SUB_TYPE"]),"default"=>trim($K['FIELD_DEFAULT_VALUE']),"null"=>(trim($K["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($K["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($K["FIELD_DESCRIPTION"]),);return$J;}function
indexes($R,$i=null){$J=array();return$J;}function
foreign_keys($R){return
array();}function
collations(){return
array();}function
information_schema($l){return
false;}function
error(){global$h;return
h($h->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($if){return
true;}function
support($hc){return
preg_match("~^(columns|sql|status|table)$~",$hc);}$x="firebird";$je=array("=");$Bc=array();$Fc=array();$Kb=array();}$Fb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$Ce=array("SimpleXML + allow_url_fopen");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')&&ini_bool('allow_url_fopen')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($j){return($j=="domain");}function
query($H,$wg=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);$this->timeout=0;if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$Pf=0;foreach($I
as$kd)$Pf+=$kd->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$Pf,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($I){foreach($I
as$kd){$K=array();if($kd->Name!='')$K['itemName()']=(string)$kd->Name;foreach($kd->Attribute
as$Ba){$B=$this->_processValue($Ba->Name);$Y=$this->_processValue($Ba->Value);if(isset($K[$B])){$K[$B]=(array)$K[$B];$K[$B][]=$Y;}else$K[$B]=$Y;}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($Mb){return(is_object($Mb)&&$Mb['encoding']=='base64'?base64_decode($Mb):(string)$Mb);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$pd=array_keys($this->_rows[0]);return(object)array('name'=>$pd[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$Ee="itemName()";function
_chunkRequest($Sc,$qa,$F,$Zb=array()){global$h;foreach(array_chunk($Sc,25)as$Xa){$te=$F;foreach($Xa
as$s=>$t){$te["Item.$s.ItemName"]=$t;foreach($Zb
as$y=>$X)$te["Item.$s.$y"]=$X;}if(!sdb_request($qa,$te))return
false;}$h->affected_rows=count($Sc);return
true;}function
_extractIds($R,$Ne,$z){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$Ne,$Hd))$J=array_map('idf_unescape',$Hd[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$Ne.($z?" LIMIT 1":"")))as$kd)$J[]=$kd->Name;}return$J;}function
select($R,$M,$Z,$Cc,$D=array(),$z=1,$E=0,$Ge=false){global$h;$h->next=$_GET["next"];$J=parent::select($R,$M,$Z,$Cc,$D,$z,$E,$Ge);$h->next=0;return$J;}function
delete($R,$Ne,$z=0){return$this->_chunkRequest($this->_extractIds($R,$Ne,$z),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$P,$Ne,$z=0,$N="\n"){$yb=array();$fd=array();$s=0;$Sc=$this->_extractIds($R,$Ne,$z);$t=idf_unescape($P["`itemName()`"]);unset($P["`itemName()`"]);foreach($P
as$y=>$X){$y=idf_unescape($y);if($X=="NULL"||($t!=""&&array($t)!=$Sc))$yb["Attribute.".count($yb).".Name"]=$y;if($X!="NULL"){foreach((array)$X
as$ld=>$W){$fd["Attribute.$s.Name"]=$y;$fd["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$ld)$fd["Attribute.$s.Replace"]="true";$s++;}}}$F=array('DomainName'=>$R);return(!$fd||$this->_chunkRequest(($t!=""?array($t):$Sc),'BatchPutAttributes',$F,$fd))&&(!$yb||$this->_chunkRequest($Sc,'BatchDeleteAttributes',$F,$yb));}function
insert($R,$P){$F=array("DomainName"=>$R);$s=0;foreach($P
as$B=>$Y){if($Y!="NULL"){$B=idf_unescape($B);if($B=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$s.Name"]=$B;$F["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($R,$L,$Ee){foreach($L
as$P){if(!$this->update($R,$P,"WHERE `itemName()` = ".q($P["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}function
slowQuery($H,$bg){$this->_conn->timeout=$bg;return$H;}}function
connect(){global$b;list(,,$G)=$b->credentials();if($G!="")return'Database does not support password.';return
new
Min_DB;}function
support($hc){return
preg_match('~sql~',$hc);}function
logged_user(){global$b;$pb=$b->credentials();return$pb[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($l,$cb){}function
tables_list(){global$h;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$J[(string)$R]='table';if($h->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($B="",$gc=false){$J=array();foreach(($B!=""?array($B=>true):tables_list())as$R=>$U){$K=array("Name"=>$R,"Auto_increment"=>"");if(!$gc){$Pd=sdb_request('DomainMetadata',array('DomainName'=>$R));if($Pd){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$y=>$X)$K[$y]=(string)$Pd->$X;}}if($B!="")return$K;$J[$R]=$K;}return$J;}function
explain($h,$H){}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($R){return
fields_from_edit();}function
foreign_keys($R){return
array();}function
table($u){return
idf_escape($u);}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
limit($H,$Z,$z,$ce=0,$N=" "){return" $H$Z".($z!==null?$N."LIMIT $z":"");}function
unconvert_field($o,$J){return$J;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$B,$p,$tc,$gb,$Rb,$e,$Ea,$ve){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$B)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($k){foreach($k
as$l)return
array($l=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($va,$tb,$y,$Re=false){$Na=64;if(strlen($y)>$Na)$y=pack("H*",$va($y));$y=str_pad($y,$Na,"\0");$md=$y^str_repeat("\x36",$Na);$nd=$y^str_repeat("\x5C",$Na);$J=$va($nd.pack("H*",$va($md.$tb)));if($Re)$J=pack("H*",$J);return$J;}function
sdb_request($qa,$F=array()){global$b,$h;list($Pc,$F['AWSAccessKeyId'],$lf)=$b->credentials();$F['Action']=$qa;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$y=>$X)$H.='&'.rawurlencode($y).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$Pc)."\n/\n$H",$lf,true)));@ini_set('track_errors',1);$kc=@file_get_contents((preg_match('~^https?://~',$Pc)?$Pc:"http://$Pc"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$kc){$h->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Yg=simplexml_load_string($kc);if(!$Yg){$n=libxml_get_last_error();$h->error=$n->message;return
false;}if($Yg->Errors){$n=$Yg->Errors->Error;$h->error="$n->Message ($n->Code)";return
false;}$h->error='';$Uf=$qa."Result";return($Yg->$Uf?$Yg->$Uf:true);}function
sdb_request_all($qa,$Uf,$F=array(),$bg=0){$J=array();$Hf=($bg?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$A)?$A[1]:0);do{$Yg=sdb_request($qa,$F);if(!$Yg)break;foreach($Yg->$Uf
as$Mb)$J[]=$Mb;if($z&&count($J)>=$z){$_GET["next"]=$Yg->NextToken;break;}if($bg&&microtime(true)-$Hf>$bg)return
false;$F['NextToken']=$Yg->NextToken;if($z)$F['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($J),$F['SelectExpression']);}while($Yg->NextToken);return$J;}$x="simpledb";$je=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$Bc=array();$Fc=array("count");$Kb=array(array("json"));}$Fb["mongo"]="MongoDB";if(isset($_GET["mongo"])){$Ce=array("mongo","mongodb");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$server_info=MongoClient::VERSION,$error,$last_id,$_link,$_db;function
connect($Dg,$C){return@new
MongoClient($Dg,$C);}function
query($H){return
false;}function
select_db($j){try{$this->_db=$this->_link->selectDB($j);return
true;}catch(Exception$Wb){$this->error=$Wb->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($I){foreach($I
as$kd){$K=array();foreach($kd
as$y=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$y]=63;$K[$y]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$pd=array_keys($this->_rows[0]);$B=$pd[$this->_offset++];return(object)array('name'=>$B,'charsetnr'=>$this->_charset[$B],);}}class
Min_Driver
extends
Min_SQL{public$Ee="_id";function
select($R,$M,$Z,$Cc,$D=array(),$z=1,$E=0,$Ge=false){$M=($M==array("*")?array():array_fill_keys($M,true));$Af=array();foreach($D
as$X){$X=preg_replace('~ DESC$~','',$X,1,$mb);$Af[$X]=($mb?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($R)->find(array(),$M)->sort($Af)->limit($z!=""?+$z:0)->skip($E*$z));}function
insert($R,$P){try{$J=$this->_conn->_db->selectCollection($R)->insert($P);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];$this->_conn->last_id=$P['_id'];return!$J['err'];}catch(Exception$Wb){$this->_conn->error=$Wb->getMessage();return
false;}}}function
get_databases($rc){global$h;$J=array();$vb=$h->_link->listDBs();foreach($vb['databases']as$l)$J[]=$l['name'];return$J;}function
count_tables($k){global$h;$J=array();foreach($k
as$l)$J[$l]=count($h->_link->selectDB($l)->getCollectionNames(true));return$J;}function
tables_list(){global$h;return
array_fill_keys($h->_db->getCollectionNames(true),'table');}function
drop_databases($k){global$h;foreach($k
as$l){$af=$h->_link->selectDB($l)->drop();if(!$af['ok'])return
false;}return
true;}function
indexes($R,$i=null){global$h;$J=array();foreach($h->_db->selectCollection($R)->getIndexInfo()as$v){$Ab=array();foreach($v["key"]as$f=>$U)$Ab[]=($U==-1?'1':null);$J[$v["name"]]=array("type"=>($v["name"]=="_id_"?"PRIMARY":($v["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($v["key"]),"lengths"=>array(),"descs"=>$Ab,);}return$J;}function
fields($R){return
fields_from_edit();}function
found_rows($S,$Z){global$h;return$h->_db->selectCollection($_GET["select"])->count($Z);}$je=array("=");}elseif(class_exists('MongoDB\Driver\Manager')){class
Min_DB{var$extension="MongoDB",$server_info=MONGODB_VERSION,$error,$last_id;var$_link;var$_db,$_db_name;function
connect($Dg,$C){$d='MongoDB\Driver\Manager';return
new$d($Dg,$C);}function
query($H){return
false;}function
select_db($j){$this->_db_name=$j;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($I){foreach($I
as$kd){$K=array();foreach($kd
as$y=>$X){if(is_a($X,'MongoDB\BSON\Binary'))$this->_charset[$y]=63;$K[$y]=(is_a($X,'MongoDB\BSON\ObjectID')?'MongoDB\BSON\ObjectID("'.strval($X).'")':(is_a($X,'MongoDB\BSON\UTCDatetime')?$X->toDateTime()->format('Y-m-d H:i:s'):(is_a($X,'MongoDB\BSON\Binary')?$X->bin:(is_a($X,'MongoDB\BSON\Regex')?strval($X):(is_object($X)?json_encode($X,256):$X)))));}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=$I->count;}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$pd=array_keys($this->_rows[0]);$B=$pd[$this->_offset++];return(object)array('name'=>$B,'charsetnr'=>$this->_charset[$B],);}}class
Min_Driver
extends
Min_SQL{public$Ee="_id";function
select($R,$M,$Z,$Cc,$D=array(),$z=1,$E=0,$Ge=false){global$h;$M=($M==array("*")?array():array_fill_keys($M,1));if(count($M)&&!isset($M['_id']))$M['_id']=0;$Z=where_to_query($Z);$Af=array();foreach($D
as$X){$X=preg_replace('~ DESC$~','',$X,1,$mb);$Af[$X]=($mb?-1:1);}if(isset($_GET['limit'])&&is_numeric($_GET['limit'])&&$_GET['limit']>0)$z=$_GET['limit'];$z=min(200,max(1,(int)$z));$yf=$E*$z;$d='MongoDB\Driver\Query';$H=new$d($Z,array('projection'=>$M,'limit'=>$z,'skip'=>$yf,'sort'=>$Af));$df=$h->_link->executeQuery("$h->_db_name.$R",$H);return
new
Min_Result($df);}function
update($R,$P,$Ne,$z=0,$N="\n"){global$h;$l=$h->_db_name;$Z=sql_query_where_parser($Ne);$d='MongoDB\Driver\BulkWrite';$Ra=new$d(array());if(isset($P['_id']))unset($P['_id']);$We=array();foreach($P
as$y=>$Y){if($Y=='NULL'){$We[$y]=1;unset($P[$y]);}}$Cg=array('$set'=>$P);if(count($We))$Cg['$unset']=$We;$Ra->update($Z,$Cg,array('upsert'=>false));$df=$h->_link->executeBulkWrite("$l.$R",$Ra);$h->affected_rows=$df->getModifiedCount();return
true;}function
delete($R,$Ne,$z=0){global$h;$l=$h->_db_name;$Z=sql_query_where_parser($Ne);$d='MongoDB\Driver\BulkWrite';$Ra=new$d(array());$Ra->delete($Z,array('limit'=>$z));$df=$h->_link->executeBulkWrite("$l.$R",$Ra);$h->affected_rows=$df->getDeletedCount();return
true;}function
insert($R,$P){global$h;$l=$h->_db_name;$d='MongoDB\Driver\BulkWrite';$Ra=new$d(array());if(isset($P['_id'])&&empty($P['_id']))unset($P['_id']);$Ra->insert($P);$df=$h->_link->executeBulkWrite("$l.$R",$Ra);$h->affected_rows=$df->getInsertedCount();return
true;}}function
get_databases($rc){global$h;$J=array();$d='MongoDB\Driver\Command';$fb=new$d(array('listDatabases'=>1));$df=$h->_link->executeCommand('admin',$fb);foreach($df
as$vb){foreach($vb->databases
as$l)$J[]=$l->name;}return$J;}function
count_tables($k){$J=array();return$J;}function
tables_list(){global$h;$d='MongoDB\Driver\Command';$fb=new$d(array('listCollections'=>1));$df=$h->_link->executeCommand($h->_db_name,$fb);$db=array();foreach($df
as$I)$db[$I->name]='table';return$db;}function
drop_databases($k){return
false;}function
indexes($R,$i=null){global$h;$J=array();$d='MongoDB\Driver\Command';$fb=new$d(array('listIndexes'=>$R));$df=$h->_link->executeCommand($h->_db_name,$fb);foreach($df
as$v){$Ab=array();$g=array();foreach(get_object_vars($v->key)as$f=>$U){$Ab[]=($U==-1?'1':null);$g[]=$f;}$J[$v->name]=array("type"=>($v->name=="_id_"?"PRIMARY":(isset($v->unique)?"UNIQUE":"INDEX")),"columns"=>$g,"lengths"=>array(),"descs"=>$Ab,);}return$J;}function
fields($R){$p=fields_from_edit();if(!count($p)){global$m;$I=$m->select($R,array("*"),null,null,array(),10);while($K=$I->fetch_assoc()){foreach($K
as$y=>$X){$K[$y]=null;$p[$y]=array("field"=>$y,"type"=>"string","null"=>($y!=$m->primary),"auto_increment"=>($y==$m->primary),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1,),);}}}return$p;}function
found_rows($S,$Z){global$h;$Z=where_to_query($Z);$d='MongoDB\Driver\Command';$fb=new$d(array('count'=>$S['Name'],'query'=>$Z));$df=$h->_link->executeCommand($h->_db_name,$fb);$ig=$df->toArray();return$ig[0]->n;}function
sql_query_where_parser($Ne){$Ne=trim(preg_replace('/WHERE[\s]?[(]?\(?/','',$Ne));$Ne=preg_replace('/\)\)\)$/',')',$Ne);$Vg=explode(' AND ',$Ne);$Wg=explode(') OR (',$Ne);$Z=array();foreach($Vg
as$Tg)$Z[]=trim($Tg);if(count($Wg)==1)$Wg=array();elseif(count($Wg)>1)$Z=array();return
where_to_query($Z,$Wg);}function
where_to_query($Rg=array(),$Sg=array()){global$b;$tb=array();foreach(array('and'=>$Rg,'or'=>$Sg)as$U=>$Z){if(is_array($Z)){foreach($Z
as$ac){list($bb,$he,$X)=explode(" ",$ac,3);if($bb=="_id"){$X=str_replace('MongoDB\BSON\ObjectID("',"",$X);$X=str_replace('")',"",$X);$d='MongoDB\BSON\ObjectID';$X=new$d($X);}if(!in_array($he,$b->operators))continue;if(preg_match('~^\(f\)(.+)~',$he,$A)){$X=(float)$X;$he=$A[1];}elseif(preg_match('~^\(date\)(.+)~',$he,$A)){$ub=new
DateTime($X);$d='MongoDB\BSON\UTCDatetime';$X=new$d($ub->getTimestamp()*1000);$he=$A[1];}switch($he){case'=':$he='$eq';break;case'!=':$he='$ne';break;case'>':$he='$gt';break;case'<':$he='$lt';break;case'>=':$he='$gte';break;case'<=':$he='$lte';break;case'regex':$he='$regex';break;default:continue;}if($U=='and')$tb['$and'][]=array($bb=>array($he=>$X));elseif($U=='or')$tb['$or'][]=array($bb=>array($he=>$X));}}}return$tb;}$je=array("=","!=",">","<",">=","<=","regex","(f)=","(f)!=","(f)>","(f)<","(f)>=","(f)<=","(date)=","(date)!=","(date)>","(date)<","(date)>=","(date)<=",);}function
table($u){return$u;}function
idf_escape($u){return$u;}function
table_status($B="",$gc=false){$J=array();foreach(tables_list()as$R=>$U){$J[$R]=array("Name"=>$R);if($B==$R)return$J[$R];}return$J;}function
create_database($l,$e){return
true;}function
last_id(){global$h;return$h->last_id;}function
error(){global$h;return
h($h->error);}function
collations(){return
array();}function
logged_user(){global$b;$pb=$b->credentials();return$pb[1];}function
connect(){global$b;$h=new
Min_DB;list($O,$V,$G)=$b->credentials();$C=array();if($V.$G!=""){$C["username"]=$V;$C["password"]=$G;}$l=$b->database();if($l!="")$C["db"]=$l;try{$h->_link=$h->connect("mongodb://$O",$C);if($G!=""){$C["password"]="";try{$h->connect("mongodb://$O",$C);return'Database does not support password.';}catch(Exception$Wb){}}return$h;}catch(Exception$Wb){return$Wb->getMessage();}}function
alter_indexes($R,$c){global$h;foreach($c
as$X){list($U,$B,$P)=$X;if($P=="DROP")$J=$h->_db->command(array("deleteIndexes"=>$R,"index"=>$B));else{$g=array();foreach($P
as$f){$f=preg_replace('~ DESC$~','',$f,1,$mb);$g[$f]=($mb?-1:1);}$J=$h->_db->selectCollection($R)->ensureIndex($g,array("unique"=>($U=="UNIQUE"),"name"=>$B,));}if($J['errmsg']){$h->error=$J['errmsg'];return
false;}}return
true;}function
support($hc){return
preg_match("~database|indexes~",$hc);}function
db_collation($l,$cb){}function
information_schema(){}function
is_view($S){}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$B,$p,$tc,$gb,$Rb,$e,$Ea,$ve){global$h;if($R==""){$h->_db->createCollection($B);return
true;}}function
drop_tables($T){global$h;foreach($T
as$R){$af=$h->_db->selectCollection($R)->drop();if(!$af['ok'])return
false;}return
true;}function
truncate_tables($T){global$h;foreach($T
as$R){$af=$h->_db->selectCollection($R)->remove();if(!$af['ok'])return
false;}return
true;}$x="mongo";$Bc=array();$Fc=array();$Kb=array(array("json"));}$Fb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$Ce=array("json + allow_url_fopen");define("DRIVER","elastic");if(function_exists('json_decode')&&ini_bool('allow_url_fopen')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($xe,$kb=array(),$Qd='GET'){@ini_set('track_errors',1);$kc=@file_get_contents("$this->_url/".ltrim($xe,'/'),false,stream_context_create(array('http'=>array('method'=>$Qd,'content'=>$kb===null?$kb:json_encode($kb),'header'=>'Content-Type: application/json','ignore_errors'=>1,))));if(!$kc){$this->error=$php_errormsg;return$kc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$kc;return
false;}$J=json_decode($kc,true);if($J===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$jb=get_defined_constants(true);foreach($jb['json']as$B=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$B)){$this->error=$B;break;}}}}return$J;}function
query($xe,$kb=array(),$Qd='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($xe,'/'),$kb,$Qd);}function
connect($O,$V,$G){preg_match('~^(https?://)?(.*)~',$O,$A);$this->_url=($A[1]?$A[1]:"http://")."$V:$G@$A[2]";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($j){$this->_db=$j;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
__construct($L){$this->num_rows=count($this->_rows);$this->_rows=$L;reset($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);next($this->_rows);return$J;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$M,$Z,$Cc,$D=array(),$z=1,$E=0,$Ge=false){global$b;$tb=array();$H="$R/_search";if($M!=array("*"))$tb["fields"]=$M;if($D){$Af=array();foreach($D
as$bb){$bb=preg_replace('~ DESC$~','',$bb,1,$mb);$Af[]=($mb?array($bb=>"desc"):$bb);}$tb["sort"]=$Af;}if($z){$tb["size"]=+$z;if($E)$tb["from"]=($E*$z);}foreach($Z
as$X){list($bb,$he,$X)=explode(" ",$X,3);if($bb=="_id")$tb["query"]["ids"]["values"][]=$X;elseif($bb.$X!=""){$Wf=array("term"=>array(($bb!=""?$bb:"_all")=>$X));if($he=="=")$tb["query"]["filtered"]["filter"]["and"][]=$Wf;else$tb["query"]["filtered"]["query"]["bool"]["must"][]=$Wf;}}if($tb["query"]&&!$tb["query"]["filtered"]["query"]&&!$tb["query"]["ids"])$tb["query"]["filtered"]["query"]=array("match_all"=>array());$Hf=microtime(true);$kf=$this->_conn->query($H,$tb);if($Ge)echo$b->selectQuery("$H: ".print_r($tb,true),$Hf,!$kf);if(!$kf)return
false;$J=array();foreach($kf['hits']['hits']as$Oc){$K=array();if($M==array("*"))$K["_id"]=$Oc["_id"];$p=$Oc['_source'];if($M!=array("*")){$p=array();foreach($M
as$y)$p[$y]=$Oc['fields'][$y];}foreach($p
as$y=>$X){if($tb["fields"])$X=$X[0];$K[$y]=(is_array($X)?json_encode($X):$X);}$J[]=$K;}return
new
Min_Result($J);}function
update($U,$Se,$Ne,$z=0,$N="\n"){$we=preg_split('~ *= *~',$Ne);if(count($we)==2){$t=trim($we[1]);$H="$U/$t";return$this->_conn->query($H,$Se,'POST');}return
false;}function
insert($U,$Se){$t="";$H="$U/$t";$af=$this->_conn->query($H,$Se,'POST');$this->_conn->last_id=$af['_id'];return$af['created'];}function
delete($U,$Ne,$z=0){$Sc=array();if(is_array($_GET["where"])&&$_GET["where"]["_id"])$Sc[]=$_GET["where"]["_id"];if(is_array($_POST['check'])){foreach($_POST['check']as$Ta){$we=preg_split('~ *= *~',$Ta);if(count($we)==2)$Sc[]=trim($we[1]);}}$this->_conn->affected_rows=0;foreach($Sc
as$t){$H="{$U}/{$t}";$af=$this->_conn->query($H,'{}','DELETE');if(is_array($af)&&$af['found']==true)$this->_conn->affected_rows++;}return$this->_conn->affected_rows;}}function
connect(){global$b;$h=new
Min_DB;list($O,$V,$G)=$b->credentials();if($G!=""&&$h->connect($O,$V,""))return'Database does not support password.';if($h->connect($O,$V,$G))return$h;return$h->error;}function
support($hc){return
preg_match("~database|table|columns~",$hc);}function
logged_user(){global$b;$pb=$b->credentials();return$pb[1];}function
get_databases(){global$h;$J=$h->rootQuery('_aliases');if($J){$J=array_keys($J);sort($J,SORT_STRING);}return$J;}function
collations(){return
array();}function
db_collation($l,$cb){}function
engines(){return
array();}function
count_tables($k){global$h;$J=array();$I=$h->query('_stats');if($I&&$I['indices']){$Yc=$I['indices'];foreach($Yc
as$Xc=>$If){$Wc=$If['total']['indexing'];$J[$Xc]=$Wc['index_total'];}}return$J;}function
tables_list(){global$h;$J=$h->query('_mapping');if($J)$J=array_fill_keys(array_keys($J[$h->_db]["mappings"]),'table');return$J;}function
table_status($B="",$gc=false){global$h;$kf=$h->query("_search",array("size"=>0,"aggregations"=>array("count_by_type"=>array("terms"=>array("field"=>"_type")))),"POST");$J=array();if($kf){$T=$kf["aggregations"]["count_by_type"]["buckets"];foreach($T
as$R){$J[$R["key"]]=array("Name"=>$R["key"],"Engine"=>"table","Rows"=>$R["doc_count"],);if($B!=""&&$B==$R["key"])return$J[$B];}}return$J;}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$h;$I=$h->query("$R/_mapping");$J=array();if($I){$Dd=$I[$R]['properties'];if(!$Dd)$Dd=$I[$h->_db]['mappings'][$R]['properties'];if($Dd){foreach($Dd
as$B=>$o){$J[$B]=array("field"=>$B,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($o["properties"]){unset($J[$B]["privileges"]["insert"]);unset($J[$B]["privileges"]["update"]);}}}}return$J;}function
foreign_keys($R){return
array();}function
table($u){return$u;}function
idf_escape($u){return$u;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($l){global$h;return$h->rootQuery(urlencode($l),null,'PUT');}function
drop_databases($k){global$h;return$h->rootQuery(urlencode(implode(',',$k)),array(),'DELETE');}function
alter_table($R,$B,$p,$tc,$gb,$Rb,$e,$Ea,$ve){global$h;$Je=array();foreach($p
as$ec){$ic=trim($ec[1][0]);$jc=trim($ec[1][1]?$ec[1][1]:"text");$Je[$ic]=array('type'=>$jc);}if(!empty($Je))$Je=array('properties'=>$Je);return$h->query("_mapping/{$B}",$Je,'PUT');}function
drop_tables($T){global$h;$J=true;foreach($T
as$R)$J=$J&&$h->query(urlencode($R),array(),'DELETE');return$J;}function
last_id(){global$h;return$h->last_id;}$x="elastic";$je=array("=","query");$Bc=array();$Fc=array();$Kb=array(array("json"));$vg=array();$Lf=array();foreach(array('Numbers'=>array("long"=>3,"integer"=>5,"short"=>8,"byte"=>10,"double"=>20,"float"=>66,"half_float"=>12,"scaled_float"=>21),'Date and time'=>array("date"=>10),'Strings'=>array("string"=>65535,"text"=>65535),'Binary'=>array("binary"=>255),)as$y=>$X){$vg+=$X;$Lf[$y]=array_keys($X);}}$Fb=array("server"=>"MySQL")+$Fb;if(!defined("DRIVER")){$Ce=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($O="",$V="",$G="",$j=null,$Ae=null,$_f=null){global$b;mysqli_report(MYSQLI_REPORT_OFF);list($Pc,$Ae)=explode(":",$O,2);$Gf=$b->connectSsl();if($Gf)$this->ssl_set($Gf['key'],$Gf['cert'],$Gf['ca'],'','');$J=@$this->real_connect(($O!=""?$Pc:ini_get("mysqli.default_host")),($O.$V!=""?$V:ini_get("mysqli.default_user")),($O.$V.$G!=""?$G:ini_get("mysqli.default_pw")),$j,(is_numeric($Ae)?$Ae:ini_get("mysqli.default_port")),(!is_numeric($Ae)?$Ae:$_f),($Gf?64:0));$this->options(MYSQLI_OPT_LOCAL_INFILE,false);return$J;}function
set_charset($Sa){if(parent::set_charset($Sa))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $Sa");}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$o];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!((ini_bool("sql.safe_mode")||ini_bool("mysql.allow_local_infile"))&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$V,$G){if(ini_bool("mysql.allow_local_infile")){$this->error=sprintf('Disable %s or enable %s or %s extensions.',"'mysql.allow_local_infile'","MySQLi","PDO_MySQL");return
false;}$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$V"!=""?$V:ini_get("mysql.default_user")),("$O$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($Sa){if(function_exists('mysql_set_charset')){if(mysql_set_charset($Sa,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $Sa");}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($j){return
mysql_select_db($j,$this->_link);}function
query($H,$wg=false){$I=@($wg?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($O,$V,$G){global$b;$C=array(PDO::MYSQL_ATTR_LOCAL_INFILE=>false);$Gf=$b->connectSsl();if($Gf)$C+=array(PDO::MYSQL_ATTR_SSL_KEY=>$Gf['key'],PDO::MYSQL_ATTR_SSL_CERT=>$Gf['cert'],PDO::MYSQL_ATTR_SSL_CA=>$Gf['ca'],);$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\d)~',';port=\1',$O)),$V,$G,$C);return
true;}function
set_charset($Sa){$this->query("SET NAMES $Sa");}function
select_db($j){return$this->query("USE ".idf_escape($j));}function
query($H,$wg=false){$this->setAttribute(1000,!$wg);return
parent::query($H,$wg);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$P){return($P?parent::insert($R,$P):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$L,$Ee){$g=array_keys(reset($L));$De="INSERT INTO ".table($R)." (".implode(", ",$g).") VALUES\n";$Jg=array();foreach($g
as$y)$Jg[$y]="$y = VALUES($y)";$Of="\nON DUPLICATE KEY UPDATE ".implode(", ",$Jg);$Jg=array();$xd=0;foreach($L
as$P){$Y="(".implode(", ",$P).")";if($Jg&&(strlen($De)+$xd+strlen($Y)+strlen($Of)>1e6)){if(!queries($De.implode(",\n",$Jg).$Of))return
false;$Jg=array();$xd=0;}$Jg[]=$Y;$xd+=strlen($Y)+2;}return
queries($De.implode(",\n",$Jg).$Of);}function
slowQuery($H,$bg){if(min_version('5.7.8','10.1.2')){if(preg_match('~MariaDB~',$this->_conn->server_info))return"SET STATEMENT max_statement_time=$bg FOR $H";elseif(preg_match('~^(SELECT\b)(.+)~is',$H,$A))return"$A[1] /*+ MAX_EXECUTION_TIME(".($bg*1000).") */ $A[2]";}}function
convertSearch($u,$X,$o){return(preg_match('~char|text|enum|set~',$o["type"])&&!preg_match("~^utf8~",$o["collation"])&&preg_match('~[\x80-\xFF]~',$X['val'])?"CONVERT($u USING ".charset($this->_conn).")":$u);}function
warnings(){$I=$this->_conn->query("SHOW WARNINGS");if($I&&$I->num_rows){ob_start();select($I);return
ob_get_clean();}}function
tableHelp($B){$Ed=preg_match('~MariaDB~',$this->_conn->server_info);if(information_schema(DB))return
strtolower(($Ed?"information-schema-$B-table/":str_replace("_","-",$B)."-table.html"));if(DB=="mysql")return($Ed?"mysql$B-table/":"system-database.html");}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$b,$vg,$Lf;$h=new
Min_DB;$pb=$b->credentials();if($h->connect($pb[0],$pb[1],$pb[2])){$h->set_charset(charset($h));$h->query("SET sql_quote_show_create = 1, autocommit = 1");if(min_version('5.7.8',10.2,$h)){$Lf['Strings'][]="json";$vg["json"]=4294967295;}return$h;}$J=$h->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($hf=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$hf;return$J;}function
get_databases($rc){$J=get_session("dbs");if($J===null){$H=(min_version(5)?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA ORDER BY SCHEMA_NAME":"SHOW DATABASES");$J=($rc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$ce=0,$N=" "){return" $H$Z".($z!==null?$N."LIMIT $z".($ce?" OFFSET $ce":""):"");}function
limit1($R,$H,$Z,$N="\n"){return
limit($H,$Z,1,0,$N);}function
db_collation($l,$cb){global$h;$J=null;$nb=$h->result("SHOW CREATE DATABASE ".idf_escape($l),1);if(preg_match('~ COLLATE ([^ ]+)~',$nb,$A))$J=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$nb,$A))$J=$cb[$A[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$h;return$h->result("SELECT USER()");}function
tables_list(){return
get_key_vals(min_version(5)?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($k){$J=array();foreach($k
as$l)$J[$l]=count(get_vals("SHOW TABLES IN ".idf_escape($l)));return$J;}function
table_status($B="",$gc=false){$J=array();foreach(get_rows($gc&&min_version(5)?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($B!=""?"AND TABLE_NAME = ".q($B):"ORDER BY Name"):"SHOW TABLE STATUS".($B!=""?" LIKE ".q(addcslashes($B,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($B!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&min_version(5.6));}function
fields($R){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$K){preg_match('~^([^( ]+)(?:\((.+)\))?( unsigned)?( zerofill)?$~',$K["Type"],$A);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$A[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$A)?$A[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($R,$i=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$i)as$K){$B=$K["Key_name"];$J[$B]["type"]=($B=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?($K["Index_type"]=="SPATIAL"?"SPATIAL":"INDEX"):"UNIQUE")));$J[$B]["columns"][]=$K["Column_name"];$J[$B]["lengths"][]=($K["Index_type"]=="SPATIAL"?null:$K["Sub_part"]);$J[$B]["descs"][]=null;}return$J;}function
foreign_keys($R){global$h,$ee;static$ye='`(?:[^`]|``)+`';$J=array();$ob=$h->result("SHOW CREATE TABLE ".table($R),1);if($ob){preg_match_all("~CONSTRAINT ($ye) FOREIGN KEY ?\\(((?:$ye,? ?)+)\\) REFERENCES ($ye)(?:\\.($ye))? \\(((?:$ye,? ?)+)\\)(?: ON DELETE ($ee))?(?: ON UPDATE ($ee))?~",$ob,$Hd,PREG_SET_ORDER);foreach($Hd
as$A){preg_match_all("~$ye~",$A[2],$Bf);preg_match_all("~$ye~",$A[5],$Vf);$J[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$Bf[0]),"target"=>array_map('idf_unescape',$Vf[0]),"on_delete"=>($A[6]?$A[6]:"RESTRICT"),"on_update"=>($A[7]?$A[7]:"RESTRICT"),);}}return$J;}function
view($B){global$h;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\s+AS\s+~isU','',$h->result("SHOW CREATE VIEW ".table($B),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$y=>$X)asort($J[$y]);return$J;}function
information_schema($l){return(min_version(5)&&$l=="information_schema")||(min_version(5.5)&&$l=="performance_schema");}function
error(){global$h;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$h->error));}function
create_database($l,$e){return
queries("CREATE DATABASE ".idf_escape($l).($e?" COLLATE ".q($e):""));}function
drop_databases($k){$J=apply_queries("DROP DATABASE",$k,'idf_escape');restart_session();set_session("dbs",null);return$J;}function
rename_database($B,$e){$J=false;if(create_database($B,$e)){$Xe=array();foreach(tables_list()as$R=>$U)$Xe[]=table($R)." TO ".idf_escape($B).".".table($R);$J=(!$Xe||queries("RENAME TABLE ".implode(", ",$Xe)));if($J)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$J;}function
auto_increment(){$Fa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$Fa="";break;}if($v["type"]=="PRIMARY")$Fa=" UNIQUE";}}return" AUTO_INCREMENT$Fa";}function
alter_table($R,$B,$p,$tc,$gb,$Rb,$e,$Ea,$ve){$c=array();foreach($p
as$o)$c[]=($o[1]?($R!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($R!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$tc);$Jf=($gb!==null?" COMMENT=".q($gb):"").($Rb?" ENGINE=".q($Rb):"").($e?" COLLATE ".q($e):"").($Ea!=""?" AUTO_INCREMENT=$Ea":"");if($R=="")return
queries("CREATE TABLE ".table($B)." (\n".implode(",\n",$c)."\n)$Jf$ve");if($R!=$B)$c[]="RENAME TO ".table($B);if($Jf)$c[]=ltrim($Jf);return($c||$ve?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c).$ve):true);}function
alter_indexes($R,$c){foreach($c
as$y=>$X)$c[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Ng){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ng)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Ng,$Vf){$Xe=array();foreach(array_merge($T,$Ng)as$R)$Xe[]=table($R)." TO ".idf_escape($Vf).".".table($R);return
queries("RENAME TABLE ".implode(", ",$Xe));}function
copy_tables($T,$Ng,$Vf){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$B=($Vf==DB?table("copy_$R"):idf_escape($Vf).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $B")||!queries("CREATE TABLE $B LIKE ".table($R))||!queries("INSERT INTO $B SELECT * FROM ".table($R)))return
false;foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$K){$qg=$K["Trigger"];if(!queries("CREATE TRIGGER ".($Vf==DB?idf_escape("copy_$qg"):idf_escape($Vf).".".idf_escape($qg))." $K[Timing] $K[Event] ON $B FOR EACH ROW\n$K[Statement];"))return
false;}}foreach($Ng
as$R){$B=($Vf==DB?table("copy_$R"):idf_escape($Vf).".".table($R));$Mg=view($R);if(!queries("DROP VIEW IF EXISTS $B")||!queries("CREATE VIEW $B AS $Mg[select]"))return
false;}return
true;}function
trigger($B){if($B=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($B));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($B,$U){global$h,$Sb,$dd,$vg;$wa=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Cf="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$ug="((".implode("|",array_merge(array_keys($vg),$wa)).")\\b(?:\\s*\\(((?:[^'\")]|$Sb)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$ye="$Cf*(".($U=="FUNCTION"?"":$dd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$ug";$nb=$h->result("SHOW CREATE $U ".idf_escape($B),2);preg_match("~\\(((?:$ye\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$ug\\s+":"")."(.*)~is",$nb,$A);$p=array();preg_match_all("~$ye\\s*,?~is",$A[1],$Hd,PREG_SET_ORDER);foreach($Hd
as$se){$B=str_replace("``","`",$se[2]).$se[3];$p[]=array("field"=>$B,"type"=>strtolower($se[5]),"length"=>preg_replace_callback("~$Sb~s",'normalize_enum',$se[6]),"unsigned"=>strtolower(preg_replace('~\s+~',' ',trim("$se[8] $se[7]"))),"null"=>1,"full_type"=>$se[4],"inout"=>strtoupper($se[1]),"collation"=>strtolower($se[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$A[11]);return
array("fields"=>$p,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME AS SPECIFIC_NAME, ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
routine_id($B,$K){return
idf_escape($B);}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ID()");}function
explain($h,$H){return$h->query("EXPLAIN ".(min_version(5.1)?"PARTITIONS ":"").$H);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($if){return
true;}function
create_sql($R,$Ea,$Mf){global$h;$J=$h->result("SHOW CREATE TABLE ".table($R),1);if(!$Ea)$J=preg_replace('~ AUTO_INCREMENT=\d+~','',$J);return$J;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($j){return"USE ".idf_escape($j);}function
trigger_sql($R){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$K)$J.="\nCREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return(min_version(8)?"ST_":"")."AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$J){if(preg_match("~binary~",$o["type"]))$J="UNHEX($J)";if($o["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$J=(min_version(8)?"ST_":"")."GeomFromText($J)";return$J;}function
support($hc){return!preg_match("~scheme|sequence|type|view_trigger|materializedview".(min_version(5.1)?"":"|event|partitioning".(min_version(5)?"":"|routine|trigger|view"))."~",$hc);}function
kill_process($X){return
queries("KILL ".number($X));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){global$h;return$h->result("SELECT @@max_connections");}$x="sql";$vg=array();$Lf=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$vg+=$X;$Lf[$y]=array_keys($X);}$Bg=array("unsigned","zerofill","unsigned zerofill");$je=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","FIND_IN_SET","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Bc=array("char_length","date","from_unixtime","lower","round","floor","ceil","sec_to_time","time_to_sec","upper");$Fc=array("avg","count","count distinct","group_concat","max","min","sum");$Kb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array(number_type()=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="4.6.3";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='https://www.adminer.org/editor/'".target_blank()." id='h1'>".'Editor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
connectSsl(){}function
permanentLogin($nb=false){return
password_file($nb);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
serverName($O){}function
database(){global$h;if($h){$k=$this->databases(false);return(!$k?$h->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$k[(information_schema($k[0])?1:0)]);}}function
schemas(){return
schemas();}function
databases($rc=true){return
get_databases($rc);}function
queryTimeout(){return
5;}function
headers(){}function
csp(){return
csp();}function
head(){return
true;}function
css(){$J=array();$q="adminer.css";if(file_exists($q))$J[]=$q;return$J;}function
loginForm(){echo"<table cellspacing='0'>\n",$this->loginFormField('username','<tr><th>'.'Username'.'<td>','<input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="'.h($_GET["username"]).'" autocapitalize="off">'.script("focus(qs('#username'));")),$this->loginFormField('password','<tr><th>'.'Password'.'<td>','<input type="password" name="auth[password]">'."\n"),"</table>\n","<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
loginFormField($B,$Mc,$Y){return$Mc.$Y;}function
login($Bd,$G){return
true;}function
tableName($Rf){return
h($Rf["Comment"]!=""?$Rf["Comment"]:$Rf["Name"]);}function
fieldName($o,$D=0){return
h(preg_replace('~\s+\[.*\]$~','',($o["comment"]!=""?$o["comment"]:$o["field"])));}function
selectLinks($Rf,$P=""){$a=$Rf["Name"];if($P!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$P).'">'.'New item'."</a>\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$Qf){$J=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($R)."
ORDER BY ORDINAL_POSITION",null,"")as$K)$J[$K["TABLE_NAME"]]["keys"][$K["CONSTRAINT_NAME"]][$K["COLUMN_NAME"]]=$K["REFERENCED_COLUMN_NAME"];foreach($J
as$y=>$X){$B=$this->tableName(table_status($y,true));if($B!=""){$kf=preg_quote($Qf);$N="(:|\\s*-)?\\s+";$J[$y]["name"]=(preg_match("(^$kf$N(.+)|^(.+?)$N$kf\$)iu",$B,$A)?$A[2].$A[3]:$B);}else
unset($J[$y]);}return$J;}function
backwardKeysPrint($Ia,$K){foreach($Ia
as$R=>$Ha){foreach($Ha["keys"]as$eb){$_=ME.'select='.urlencode($R);$s=0;foreach($eb
as$f=>$X)$_.=where_link($s++,$f,$K[$X]);echo"<a href='".h($_)."'>".h($Ha["name"])."</a>";$_=ME.'edit='.urlencode($R);foreach($eb
as$f=>$X)$_.="&set".urlencode("[".bracket_escape($f)."]")."=".urlencode($K[$X]);echo"<a href='".h($_)."' title='".'New item'."'>+</a> ";}}}function
selectQuery($H,$Hf,$fc=false){return"<!--\n".str_replace("--","--><!-- ",$H)."\n(".format_time($Hf).")\n-->\n";}function
rowDescription($R){foreach(fields($R)as$o){if(preg_match("~varchar|character varying~",$o["type"]))return
idf_escape($o["field"]);}return"";}function
rowDescriptions($L,$vc){$J=$L;foreach($L[0]as$y=>$X){if(list($R,$t,$B)=$this->_foreignColumn($vc,$y)){$Sc=array();foreach($L
as$K)$Sc[$K[$y]]=q($K[$y]);$_b=$this->_values[$R];if(!$_b)$_b=get_key_vals("SELECT $t, $B FROM ".table($R)." WHERE $t IN (".implode(", ",$Sc).")");foreach($L
as$Ud=>$K){if(isset($K[$y]))$J[$Ud][$y]=(string)$_b[$K[$y]];}}}return$J;}function
selectLink($X,$o){}function
selectVal($X,$_,$o,$ne){$J=$X;$_=h($_);if(preg_match('~blob|bytea~',$o["type"])&&!is_utf8($X)){$J=lang(array('%d byte','%d bytes'),strlen($ne));if(preg_match("~^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)~",$ne))$J="<img src='$_' alt='$J'>";}if(like_bool($o)&&$J!="")$J=(preg_match('~^(1|t|true|y|yes|on)$~i',$X)?'yes':'no');if($_)$J="<a href='$_'".(is_url($_)?target_blank():"").">$J</a>";if(!$_&&!like_bool($o)&&preg_match(number_type(),$o["type"]))$J="<div class='number'>$J</div>";elseif(preg_match('~date~',$o["type"]))$J="<div class='datetime'>$J</div>";return$J;}function
editVal($X,$o){if(preg_match('~date|timestamp~',$o["type"])&&$X!==null)return
preg_replace('~^(\d{2}(\d+))-(0?(\d+))-(0?(\d+))~','$1-$3-$5',$X);return$X;}function
selectColumnsPrint($M,$g){}function
selectSearchPrint($Z,$g,$w){$Z=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.'Search'."</legend><div>\n";$pd=array();foreach($Z
as$y=>$X)$pd[$X["col"]]=$y;$s=0;$p=fields($_GET["select"]);foreach($g
as$B=>$zb){$o=$p[$B];if(preg_match("~enum~",$o["type"])||like_bool($o)){$y=$pd[$B];$s--;echo"<div>".h($zb)."<input type='hidden' name='where[$s][col]' value='".h($B)."'>:",(like_bool($o)?" <select name='where[$s][val]'>".optionlist(array(""=>"",'no','yes'),$Z[$y]["val"],true)."</select>":enum_input("checkbox"," name='where[$s][val][]'",$o,(array)$Z[$y]["val"],($o["null"]?0:null))),"</div>\n";unset($g[$B]);}elseif(is_array($C=$this->_foreignKeyOptions($_GET["select"],$B))){if($p[$B]["null"])$C[0]='('.'empty'.')';$y=$pd[$B];$s--;echo"<div>".h($zb)."<input type='hidden' name='where[$s][col]' value='".h($B)."'><input type='hidden' name='where[$s][op]' value='='>: <select name='where[$s][val]'>".optionlist($C,$Z[$y]["val"],true)."</select></div>\n";unset($g[$B]);}}$s=0;foreach($Z
as$X){if(($X["col"]==""||$g[$X["col"]])&&"$X[col]$X[val]"!=""){echo"<div><select name='where[$s][col]'><option value=''>(".'anywhere'.")".optionlist($g,$X["col"],true)."</select>",html_select("where[$s][op]",array(-1=>"")+$this->operators,$X["op"]),"<input type='search' name='where[$s][val]' value='".h($X["val"])."'>".script("mixin(qsl('input'), {onkeydown: selectSearchKeydown, onsearch: selectSearchSearch});","")."</div>\n";$s++;}}echo"<div><select name='where[$s][col]'><option value=''>(".'anywhere'.")".optionlist($g,null,true)."</select>",script("qsl('select').onchange = selectAddRow;",""),html_select("where[$s][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$s][val]'></div>",script("mixin(qsl('input'), {onchange: function () { this.parentNode.firstChild.onchange(); }, onsearch: selectSearchSearch});"),"</div></fieldset>\n";}function
selectOrderPrint($D,$g,$w){$me=array();foreach($w
as$y=>$v){$D=array();foreach($v["columns"]as$X)$D[]=$g[$X];if(count(array_filter($D,'strlen'))>1&&$y!="PRIMARY")$me[$y]=implode(", ",$D);}if($me){echo'<fieldset><legend>'.'Sort'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$me,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","50","100"),$z),"</div></fieldset>\n";}function
selectLengthPrint($Yf){}function
selectActionPrint($w){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($Ob,$g){if($Ob){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div>",script("qsl('div').onkeydown = partialArg(bodyKeydown, 'email');"),"<p>".'From'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Subject'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p>".script("qsl('p').onkeydown = partialArg(bodyKeydown, 'email_append');","").html_select("email_addition",$g,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Insert'."'>\n";echo"<p>".'Attachments'.": <input type='file' name='email_files[]'>".script("qsl('input').onchange = emailFileChange;"),"<p>".(count($Ob)==1?'<input type="hidden" name="email_field" value="'.h(key($Ob)).'">':html_select("email_field",$Ob)),"<input type='submit' name='email' value='".'Send'."'>".confirm(),"</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($g,$w){return
array(array(),array());}function
selectSearchProcess($p,$w){$J=array();foreach((array)$_GET["where"]as$y=>$Z){$bb=$Z["col"];$he=$Z["op"];$X=$Z["val"];if(($y<0?"":$bb).$X!=""){$hb=array();foreach(($bb!=""?array($bb=>$p[$bb]):$p)as$B=>$o){if($bb!=""||is_numeric($X)||!preg_match(number_type(),$o["type"])){$B=idf_escape($B);if($bb!=""&&$o["type"]=="enum")$hb[]=(in_array(0,$X)?"$B IS NULL OR ":"")."$B IN (".implode(", ",array_map('intval',$X)).")";else{$Zf=preg_match('~char|text|enum|set~',$o["type"]);$Y=$this->processInput($o,(!$he&&$Zf&&preg_match('~^[^%]+$~',$X)?"%$X%":$X));$hb[]=$B.($Y=="NULL"?" IS".($he==">="?" NOT":"")." $Y":(in_array($he,$this->operators)||$he=="="?" $he $Y":($Zf?" LIKE $Y":" IN (".str_replace(",","', '",$Y).")")));if($y<0&&$X=="0")$hb[]="$B IS NULL";}}}$J[]=($hb?"(".implode(" OR ",$hb).")":"1 = 0");}}return$J;}function
selectOrderProcess($p,$w){$Vc=$_GET["index_order"];if($Vc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($Vc!=""?array($w[$Vc]):$w)as$v){if($Vc!=""||$v["type"]=="INDEX"){$Hc=array_filter($v["descs"]);$zb=false;foreach($v["columns"]as$X){if(preg_match('~date|timestamp~',$p[$X]["type"])){$zb=true;break;}}$J=array();foreach($v["columns"]as$y=>$X)$J[]=idf_escape($X).(($Hc?$v["descs"][$y]:$zb)?" DESC":"");return$J;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Z,$vc){if($_POST["email_append"])return
true;if($_POST["email"]){$pf=0;if($_POST["all"]||$_POST["check"]){$o=idf_escape($_POST["email_field"]);$Nf=$_POST["email_subject"];$Nd=$_POST["email_message"];preg_match_all('~\{\$([a-z0-9_]+)\}~i',"$Nf.$Nd",$Hd);$L=get_rows("SELECT DISTINCT $o".($Hd[1]?", ".implode(", ",array_map('idf_escape',array_unique($Hd[1]))):"")." FROM ".table($_GET["select"])." WHERE $o IS NOT NULL AND $o != ''".($Z?" AND ".implode(" AND ",$Z):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$p=fields($_GET["select"]);foreach($this->rowDescriptions($L,$vc)as$K){$Ye=array('{\\'=>'{');foreach($Hd[1]as$X)$Ye['{$'."$X}"]=$this->editVal($K[$X],$p[$X]);$Nb=$K[$_POST["email_field"]];if(is_mail($Nb)&&send_mail($Nb,strtr($Nf,$Ye),strtr($Nd,$Ye),$_POST["email_from"],$_FILES["email_files"]))$pf++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('%d e-mail has been sent.','%d e-mails have been sent.'),$pf));}return
false;}function
selectQueryBuild($M,$Z,$Cc,$D,$z,$E){return"";}function
messageQuery($H,$ag,$fc=false){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$H)."\n".($ag?"($ag)\n":"")."-->";}function
editFunctions($o){$J=array();if($o["null"]&&preg_match('~blob~',$o["type"]))$J["NULL"]='empty';$J[""]=($o["null"]||$o["auto_increment"]||like_bool($o)?"":"*");if(preg_match('~date|time~',$o["type"]))$J["now"]='now';if(preg_match('~_(md5|sha1)$~i',$o["field"],$A))$J[]=strtolower($A[1]);return$J;}function
editInput($R,$o,$Ca,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ca value='-1' checked><i>".'original'."</i></label> ":"").enum_input("radio",$Ca,$o,($Y||isset($_GET["select"])?$Y:0),($o["null"]?"":null));$C=$this->_foreignKeyOptions($R,$o["field"],$Y);if($C!==null)return(is_array($C)?"<select$Ca>".optionlist($C,$Y,true)."</select>":"<input value='".h($Y)."'$Ca class='hidden'>"."<input value='".h($C)."' class='jsonly'>"."<div></div>".script("qsl('input').oninput = partial(whisper, '".ME."script=complete&source=".urlencode($R)."&field=".urlencode($o["field"])."&value=');
qsl('div').onclick = whisperClick;",""));if(like_bool($o))return'<input type="checkbox" value="'.h($Y?$Y:1).'"'.(preg_match('~^(1|t|true|y|yes|on)$~i',$Y)?' checked':'')."$Ca>";$Nc="";if(preg_match('~time~',$o["type"]))$Nc='HH:MM:SS';if(preg_match('~date|timestamp~',$o["type"]))$Nc='[yyyy]-mm-dd'.($Nc?" [$Nc]":"");if($Nc)return"<input value='".h($Y)."'$Ca> ($Nc)";if(preg_match('~_(md5|sha1)$~i',$o["field"]))return"<input type='password' value='".h($Y)."'$Ca>";return'';}function
editHint($R,$o,$Y){return(preg_match('~\s+(\[.*\])$~',($o["comment"]!=""?$o["comment"]:$o["field"]),$A)?h(" $A[1]"):'');}function
processInput($o,$Y,$r=""){if($r=="now")return"$r()";$J=$Y;if(preg_match('~date|timestamp~',$o["type"])&&preg_match('(^'.str_replace('\$1','(?P<p1>\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\2>\d{1,2})',preg_quote('$1-$3-$5'))).'(.*))',$Y,$A))$J=($A["p1"]!=""?$A["p1"]:($A["p2"]!=""?($A["p2"]<70?20:19).$A["p2"]:gmdate("Y")))."-$A[p3]$A[p4]-$A[p5]$A[p6]".end($A);$J=($o["type"]=="bit"&&preg_match('~^[0-9]+$~',$Y)?$J:q($J));if($Y==""&&like_bool($o))$J="0";elseif($Y==""&&($o["null"]||!preg_match('~char|text~',$o["type"])))$J="NULL";elseif(preg_match('~^(md5|sha1)$~',$r))$J="$r($J)";return
unconvert_field($o,$J);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($l){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($R,$Mf,$H){global$h;$I=$h->query($H,1);if($I){while($K=$I->fetch_assoc()){if($Mf=="table"){dump_csv(array_keys($K));$Mf="INSERT";}dump_csv($K);}}}function
dumpFilename($Rc){return
friendly_url($Rc);}function
dumpHeaders($Rc,$Sd=false){$bc="csv";header("Content-Type: text/csv; charset=utf-8");return$bc;}function
importServerPath(){}function
homepage(){return
true;}function
navigation($Rd){global$ca;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="https://www.adminer.org/editor/#download"',target_blank(),' id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Rd=="auth"){$nc=true;foreach((array)$_SESSION["pwds"]as$Kg=>$uf){foreach($uf[""]as$V=>$G){if($G!==null){if($nc){echo"<p id='logins'>",script("mixin(qs('#logins'), {onmouseover: menuOver, onmouseout: menuOut});");$nc=false;}echo"<a href='".h(auth_url($Kg,"",$V))."'>".($V!=""?h($V):"<i>".'empty'."</i>")."</a><br>\n";}}}}else{$this->databasesPrint($Rd);if($Rd!="db"&&$Rd!="ns"){$S=table_status('',true);if(!$S)echo"<p class='message'>".'No tables.'."\n";else$this->tablesPrint($S);}}}function
databasesPrint($Rd){}function
tablesPrint($T){echo"<ul id='tables'>",script("mixin(qs('#tables'), {onmouseover: menuOver, onmouseout: menuOut});");foreach($T
as$K){echo'<li>';$B=$this->tableName($K);if(isset($K["Engine"])&&$B!="")echo"<a href='".h(ME).'select='.urlencode($K["Name"])."'".bold($_GET["select"]==$K["Name"]||$_GET["edit"]==$K["Name"],"select")." title='".'Select data'."'>$B</a>\n";}echo"</ul>\n";}function
_foreignColumn($vc,$f){foreach((array)$vc[$f]as$uc){if(count($uc["source"])==1){$B=$this->rowDescription($uc["table"]);if($B!=""){$t=idf_escape($uc["target"][0]);return
array($uc["table"],$t,$B);}}}}function
_foreignKeyOptions($R,$f,$Y=null){global$h;if(list($Vf,$t,$B)=$this->_foreignColumn(column_foreign_keys($R),$f)){$J=&$this->_values[$Vf];if($J===null){$S=table_status($Vf);$J=($S["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $t, $B FROM ".table($Vf)." ORDER BY 2"));}if(!$J&&$Y!==null)return$h->result("SELECT $B FROM ".table($Vf)." WHERE $t = ".q($Y));return$J;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($dg,$n="",$Qa=array(),$eg=""){global$ba,$ca,$b,$Fb,$x;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$fg=$dg.($eg!=""?": $eg":"");$gg=strip_tags($fg.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex">
<title>',$gg,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME)."?file=default.css&version=4.6.3"),'">
',script_src(preg_replace("~\\?.*~","",ME)."?file=functions.js&version=4.6.3");if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME)."?file=favicon.ico&version=4.6.3"),'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME)."?file=favicon.ico&version=4.6.3"),'">
';foreach($b->css()as$rb){echo'<link rel="stylesheet" type="text/css" href="',h($rb),'">
';}}echo'
<body class="ltr nojs">
';$q=get_temp_dir()."/adminer.version";if(!$_COOKIE["adminer_version"]&&function_exists('openssl_verify')&&file_exists($q)&&filemtime($q)+86400>time()){$Lg=unserialize(file_get_contents($q));$Ke="-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwqWOVuF5uw7/+Z70djoK
RlHIZFZPO0uYRezq90+7Amk+FDNd7KkL5eDve+vHRJBLAszF/7XKXe11xwliIsFs
DFWQlsABVZB3oisKCBEuI71J4kPH8dKGEWR9jDHFw3cWmoH3PmqImX6FISWbG3B8
h7FIx3jEaw5ckVPVTeo5JRm/1DZzJxjyDenXvBQ/6o9DgZKeNDgxwKzH+sw9/YCO
jHnq1cFpOIISzARlrHMa/43YfeNRAm/tsBXjSxembBPo7aQZLAWHmaj5+K19H10B
nCpz9Y++cipkVEiKRGih4ZEvjoFysEOdRLj6WiD/uUNky4xGeA6LaJqh5XpkFkcQ
fQIDAQAB
-----END PUBLIC KEY-----
";if(openssl_verify($Lg["version"],base64_decode($Lg["signature"]),$Ke)==1)$_COOKIE["adminer_version"]=$Lg["version"];}echo'<script',nonce(),'>
mixin(document.body, {onkeydown: bodyKeydown, onclick: bodyClick',(isset($_COOKIE["adminer_version"])?"":", onload: partial(verifyVersion, '$ca', '".js_escape(ME)."', '".get_token()."')");?>});
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape('You are offline.'),'\';
var thousandsSeparator = \'',js_escape(','),'\';
</script>

<div id="help" class="jush-',$x,' jsonly hidden"></div>
',script("mixin(qs('#help'), {onmouseover: function () { helpOpen = 1; }, onmouseout: helpMouseout});"),'
<div id="content">
';if($Qa!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$Fb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$O=$b->serverName(SERVER);$O=($O!=""?$O:'Server');if($Qa===false)echo"$O\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Qa)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Qa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Qa
as$y=>$X){$zb=(is_array($X)?$X[1]:h($X));if($zb!="")echo"<a href='".h(ME."$y=").urlencode(is_array($X)?$X[0]:$X)."'>$zb</a> &raquo; ";}}echo"$dg\n";}}echo"<h2>$fg</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$k=&get_session("dbs");if(DB!=""&&$k&&!in_array(DB,$k,true))$k=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");header("X-Frame-Options: deny");header("X-XSS-Protection: 0");header("X-Content-Type-Options: nosniff");header("Referrer-Policy: origin-when-cross-origin");foreach($b->csp()as$qb){$Kc=array();foreach($qb
as$y=>$X)$Kc[]="$y $X";header("Content-Security-Policy: ".implode("; ",$Kc));}$b->headers();}function
csp(){return
array(array("script-src"=>"'self' 'unsafe-inline' 'nonce-".get_nonce()."' 'strict-dynamic'","connect-src"=>"'self'","frame-src"=>"https://www.adminer.org","object-src"=>"'none'","base-uri"=>"'none'","form-action"=>"'self'",),);}function
get_nonce(){static$Yd;if(!$Yd)$Yd=base64_encode(rand_string());return$Yd;}function
page_messages($n){$Dg=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Od=$_SESSION["messages"][$Dg];if($Od){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Od)."</div>".script("messagesPrint();");unset($_SESSION["messages"][$Dg]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($Rd=""){global$b,$jg;echo'</div>

';if($Rd!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$jg,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Rd);echo'</div>
',script("setupSubmitHighlight(document);");}function
int32($Ud){while($Ud>=2147483648)$Ud-=4294967296;while($Ud<=-2147483649)$Ud+=4294967296;return(int)$Ud;}function
long2str($W,$Pg){$hf='';foreach($W
as$X)$hf.=pack('V',$X);if($Pg)return
substr($hf,0,end($W));return$hf;}function
str2long($hf,$Pg){$W=array_values(unpack('V*',str_pad($hf,4*ceil(strlen($hf)/4),"\0")));if($Pg)$W[]=strlen($hf);return$W;}function
xxtea_mx($ah,$Zg,$Pf,$ld){return
int32((($ah>>5&0x7FFFFFF)^$Zg<<2)+(($Zg>>3&0x1FFFFFFF)^$ah<<4))^int32(($Pf^$Zg)+($ld^$ah));}function
encrypt_string($Kf,$y){if($Kf=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Kf,true);$Ud=count($W)-1;$ah=$W[$Ud];$Zg=$W[0];$Le=floor(6+52/($Ud+1));$Pf=0;while($Le-->0){$Pf=int32($Pf+0x9E3779B9);$Jb=$Pf>>2&3;for($qe=0;$qe<$Ud;$qe++){$Zg=$W[$qe+1];$Td=xxtea_mx($ah,$Zg,$Pf,$y[$qe&3^$Jb]);$ah=int32($W[$qe]+$Td);$W[$qe]=$ah;}$Zg=$W[0];$Td=xxtea_mx($ah,$Zg,$Pf,$y[$qe&3^$Jb]);$ah=int32($W[$Ud]+$Td);$W[$Ud]=$ah;}return
long2str($W,false);}function
decrypt_string($Kf,$y){if($Kf=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Kf,false);$Ud=count($W)-1;$ah=$W[$Ud];$Zg=$W[0];$Le=floor(6+52/($Ud+1));$Pf=int32($Le*0x9E3779B9);while($Pf){$Jb=$Pf>>2&3;for($qe=$Ud;$qe>0;$qe--){$ah=$W[$qe-1];$Td=xxtea_mx($ah,$Zg,$Pf,$y[$qe&3^$Jb]);$Zg=int32($W[$qe]-$Td);$W[$qe]=$Zg;}$ah=$W[$Ud];$Td=xxtea_mx($ah,$Zg,$Pf,$y[$qe&3^$Jb]);$Zg=int32($W[0]-$Td);$W[0]=$Zg;$Pf=int32($Pf-0x9E3779B9);}return
long2str($W,true);}$h='';$Jc=$_SESSION["token"];if(!$Jc)$_SESSION["token"]=rand(1,1e6);$jg=get_token();$ze=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$ze[$y]=$X;}}function
add_invalid_login(){global$b;$_c=file_open_lock(get_temp_dir()."/adminer.invalid");if(!$_c)return;$hd=unserialize(stream_get_contents($_c));$ag=time();if($hd){foreach($hd
as$id=>$X){if($X[0]<$ag)unset($hd[$id]);}}$gd=&$hd[$b->bruteForceKey()];if(!$gd)$gd=array($ag+30*60,0);$gd[1]++;file_write_unlock($_c,serialize($hd));}function
check_invalid_login(){global$b;$hd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$gd=$hd[$b->bruteForceKey()];$Xd=($gd[1]>29?$gd[0]-time():0);if($Xd>0)auth_error(lang(array('Too many unsuccessful logins, try again in %d minute.','Too many unsuccessful logins, try again in %d minutes.'),ceil($Xd/60)));}$Da=$_POST["auth"];if($Da){session_regenerate_id();$Kg=$Da["driver"];$O=$Da["server"];$V=$Da["username"];$G=(string)$Da["password"];$l=$Da["db"];set_password($Kg,$O,$V,$G);$_SESSION["db"][$Kg][$O][$V][$l]=true;if($Da["permanent"]){$y=base64_encode($Kg)."-".base64_encode($O)."-".base64_encode($V)."-".base64_encode($l);$He=$b->permanentLogin(true);$ze[$y]="$y:".base64_encode($He?encrypt_string($G,$He):"");cookie("adminer_permanent",implode(" ",$ze));}if(count($_POST)==1||DRIVER!=$Kg||SERVER!=$O||$_GET["username"]!==$V||DB!=$l)redirect(auth_url($Kg,$O,$V,$l));}elseif($_POST["logout"]){if($Jc&&!verify_token()){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.'.' '.sprintf('Thanks for using Adminer, consider <a href="%s">donating</a>.','https://sourceforge.net/donate/index.php?group_id=264133'));}}elseif($ze&&!$_SESSION["pwds"]){session_regenerate_id();$He=$b->permanentLogin();foreach($ze
as$y=>$X){list(,$Ya)=explode(":",$X);list($Kg,$O,$V,$l)=array_map('base64_decode',explode("-",$y));set_password($Kg,$O,$V,decrypt_string(base64_decode($Ya),$He));$_SESSION["db"][$Kg][$O][$V][$l]=true;}}function
unset_permanent(){global$ze;foreach($ze
as$y=>$X){list($Kg,$O,$V,$l)=array_map('base64_decode',explode("-",$y));if($Kg==DRIVER&&$O==SERVER&&$V==$_GET["username"]&&$l==DB)unset($ze[$y]);}cookie("adminer_permanent",implode(" ",$ze));}function
auth_error($n){global$b,$Jc;$vf=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$vf]||$_GET[$vf])&&!$Jc)$n='Session expired, please login again.';else{restart_session();add_invalid_login();$G=get_password();if($G!==null){if($G===false)$n.='<br>'.sprintf('Master password expired. <a href="https://www.adminer.org/en/extension/"%s>Implement</a> %s method to make it permanent.',target_blank(),'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$vf]&&$_GET[$vf]&&ini_bool("session.use_only_cookies"))$n='Session support must be enabled.';$F=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header('Login',$n,null);echo"<form action='' method='post'>\n","<div>";if(hidden_fields($_POST,array("auth")))echo"<p class='message'>".'The action will be performed after successful login with the same credentials.'."\n";echo"</div>\n";$b->loginForm();echo"</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])&&!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$Ce)),false);page_footer("auth");exit;}stop_session(true);if(isset($_GET["username"])){list($Pc,$Ae)=explode(":",SERVER,2);if(is_numeric($Ae)&&$Ae<1024)auth_error('Connecting to privileged ports is not allowed.');check_invalid_login();$h=connect();$m=new
Min_Driver($h);}$Bd=null;if(!is_object($h)||($Bd=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($h)?h($h):(is_string($Bd)?$Bd:'Invalid credentials.')));if($Da&&$_POST["token"])$_POST["token"]=$jg;$n='';if($_POST){if(!verify_token()){$cd="max_input_vars";$Ld=ini_get($cd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$Ld||$X<$Ld)){$cd=$y;$Ld=$X;}}}$n=(!$_POST["token"]&&$Ld?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$cd'"):'Invalid CSRF token. Send the form again.'.' '.'If you did not send this request from Adminer then close this page.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.'You can upload a big SQL file via FTP and import it from server.';}function
email_header($Kc){return"=?UTF-8?B?".base64_encode($Kc)."?=";}function
send_mail($Nb,$Nf,$Nd,$Ac="",$lc=array()){$Tb=(DIRECTORY_SEPARATOR=="/"?"\n":"\r\n");$Nd=str_replace("\n",$Tb,wordwrap(str_replace("\r","","$Nd\n")));$Pa=uniqid("boundary");$Aa="";foreach((array)$lc["error"]as$y=>$X){if(!$X)$Aa.="--$Pa$Tb"."Content-Type: ".str_replace("\n","",$lc["type"][$y]).$Tb."Content-Disposition: attachment; filename=\"".preg_replace('~["\n]~','',$lc["name"][$y])."\"$Tb"."Content-Transfer-Encoding: base64$Tb$Tb".chunk_split(base64_encode(file_get_contents($lc["tmp_name"][$y])),76,$Tb).$Tb;}$Ka="";$Lc="Content-Type: text/plain; charset=utf-8$Tb"."Content-Transfer-Encoding: 8bit";if($Aa){$Aa.="--$Pa--$Tb";$Ka="--$Pa$Tb$Lc$Tb$Tb";$Lc="Content-Type: multipart/mixed; boundary=\"$Pa\"";}$Lc.=$Tb."MIME-Version: 1.0$Tb"."X-Mailer: Adminer Editor".($Ac?$Tb."From: ".str_replace("\n","",$Ac):"");return
mail($Nb,email_header($Nf),$Ka.$Nd.$Aa,$Lc);}function
like_bool($o){return
preg_match("~bool|(tinyint|bit)\\(1\\)~",$o["full_type"]);}$h->select_db($b->database());$ee="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$Fb[DRIVER]='Login';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$m->select($a,$M,array(where($_GET,$p)),$M);$K=($I?$I->fetch_row():array());echo$m->value($K[0],$p[$_GET["field"]]);exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?($_POST["check"]&&count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$Cg=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$B=>$o){if(!isset($o["privileges"][$Cg?"update":"insert"])||$b->fieldName($o)=="")unset($p[$B]);}if($_POST&&!$n&&!isset($_GET["select"])){$Ad=$_POST["referer"];if($_POST["insert"])$Ad=($Cg?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$Ad))$Ad=ME."select=".urlencode($a);$w=indexes($a);$yg=unique_array($_GET["where"],$w);$Oe="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($Ad,'Item has been deleted.',$m->delete($a,$Oe,!$yg));else{$P=array();foreach($p
as$B=>$o){$X=process_input($o);if($X!==false&&$X!==null)$P[idf_escape($B)]=$X;}if($Cg){if(!$P)redirect($Ad);queries_redirect($Ad,'Item has been updated.',$m->update($a,$P,$Oe,!$yg));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$I=$m->insert($a,$P);$vd=($I?last_id():0);queries_redirect($Ad,sprintf('Item%s has been inserted.',($vd?" $vd":"")),$I);}}}$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($p
as$B=>$o){if(isset($o["privileges"]["select"])){$za=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$za="''";if($x=="sql"&&preg_match("~enum|set~",$o["type"]))$za="1*".idf_escape($B);$M[]=($za?"$za AS ":"").idf_escape($B);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$m->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));if(!$I)$n=error();else{$K=$I->fetch_assoc();if(!$K)$K=false;}if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$p){if(!$Z){$I=$m->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($m->primary=>"");}if($K){foreach($K
as$y=>$X){if(!$Z)$K[$y]=null;$p[$y]=array("field"=>$y,"null"=>($y!=$m->primary),"auto_increment"=>($y==$m->primary));}}}edit_form($a,$p,$K,$Cg);}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$w=indexes($a);$p=fields($a);$xc=column_foreign_keys($a);$de=$S["Oid"];parse_str($_COOKIE["adminer_import"],$sa);$ff=array();$g=array();$Yf=null;foreach($p
as$y=>$o){$B=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$B!=""){$g[$y]=html_entity_decode(strip_tags($B),ENT_QUOTES);if(is_shortable($o))$Yf=$b->selectLengthProcess();}$ff+=$o["privileges"];}list($M,$Cc)=$b->selectColumnsProcess($g,$w);$jd=count($Cc)<count($M);$Z=$b->selectSearchProcess($p,$w);$D=$b->selectOrderProcess($p,$w);$z=$b->selectLimitProcess();if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$zg=>$K){$za=convert_field($p[key($K)]);$M=array($za?$za:idf_escape(key($K)));$Z[]=where_check($zg,$p);$J=$m->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}$Ee=$Ag=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$Ee=array_flip($v["columns"]);$Ag=($M?$Ee:array());foreach($Ag
as$y=>$X){if(in_array(idf_escape($y),$M))unset($Ag[$y]);}break;}}if($de&&!$Ee){$Ee=$Ag=array($de=>0);$w[]=array("type"=>"PRIMARY","columns"=>array($de));}if($_POST&&!$n){$Ug=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$Wa=array();foreach($_POST["check"]as$Ta)$Wa[]=where_check($Ta,$p);$Ug[]="((".implode(") OR (",$Wa)."))";}$Ug=($Ug?"\nWHERE ".implode(" AND ",$Ug):"");if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");$Ac=($M?implode(", ",$M):"*").convert_fields($g,$p,$M)."\nFROM ".table($a);$Ec=($Cc&&$jd?"\nGROUP BY ".implode(", ",$Cc):"").($D?"\nORDER BY ".implode(", ",$D):"");if(!is_array($_POST["check"])||$Ee)$H="SELECT $Ac$Ug$Ec";else{$xg=array();foreach($_POST["check"]as$X)$xg[]="(SELECT".limit($Ac,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$Ec,1).")";$H=implode(" UNION ALL ",$xg);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$xc)){if($_POST["save"]||$_POST["delete"]){$I=true;$ta=0;$P=array();if(!$_POST["delete"]){foreach($g
as$B=>$X){$X=process_input($p[$B]);if($X!==null&&($_POST["clone"]||$X!==false))$P[idf_escape($B)]=($X!==false?$X:idf_escape($B));}}if($_POST["delete"]||$P){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($a);if($_POST["all"]||($Ee&&is_array($_POST["check"]))||$jd){$I=($_POST["delete"]?$m->delete($a,$Ug):($_POST["clone"]?queries("INSERT $H$Ug"):$m->update($a,$P,$Ug)));$ta=$h->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Qg="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$I=($_POST["delete"]?$m->delete($a,$Qg,1):($_POST["clone"]?queries("INSERT".limit1($a,$H,$Qg)):$m->update($a,$P,$Qg,1)));if(!$I)break;$ta+=$h->affected_rows;}}}$Nd=lang(array('%d item has been affected.','%d items have been affected.'),$ta);if($_POST["clone"]&&$I&&$ta==1){$vd=last_id();if($vd)$Nd=sprintf('Item%s has been inserted.'," $vd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$Nd,$I);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n='Ctrl+click on a value to modify it.';else{$I=true;$ta=0;foreach($_POST["val"]as$zg=>$K){$P=array();foreach($K
as$y=>$X){$y=bracket_escape($y,1);$P[idf_escape($y)]=(preg_match('~char|text~',$p[$y]["type"])||$X!=""?$b->processInput($p[$y],$X):"NULL");}$I=$m->update($a,$P," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($zg,$p),!$jd&&!$Ee," ");if(!$I)break;$ta+=$h->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$ta),$I);}}elseif(!is_string($kc=get_file("csv_file",true)))$n=upload_error($kc);elseif(!preg_match('~~u',$kc))$n='File must be in UTF-8 encoding.';else{cookie("adminer_import","output=".urlencode($sa["output"])."&format=".urlencode($_POST["separator"]));$I=true;$eb=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\r\n]+)+~',$kc,$Hd);$ta=count($Hd[0]);$m->begin();$N=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($Hd[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$N]*)$N~",$X.$N,$Id);if(!$y&&!array_diff($Id[1],$eb)){$eb=$Id[1];$ta--;}else{$P=array();foreach($Id[1]as$s=>$bb)$P[idf_escape($eb[$s])]=($bb==""&&$p[$eb[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$bb))));$L[]=$P;}}$I=(!$L||$m->insertUpdate($a,$L,$Ee));if($I)$I=$m->commit();queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$ta),$I);$m->rollback();}}}$Sf=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header('Select'.": $Sf",$n);$P=null;if(isset($ff["insert"])||!support("table")){$P="";foreach((array)$_GET["where"]as$X){if($xc[$X["col"]]&&count($xc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$P.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$P);if(!$g&&support("table"))echo"<p class='error'>".'Unable to select the table'.($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$g);$b->selectSearchPrint($Z,$g,$w);$b->selectOrderPrint($D,$g,$w);$b->selectLimitPrint($z);$b->selectLengthPrint($Yf);$b->selectActionPrint($w);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$zc=$h->result(count_rows($a,$Z,$jd,$Cc));$E=floor(max(0,$zc-1)/$z);}$mf=$M;$Dc=$Cc;if(!$mf){$mf[]="*";$lb=convert_fields($g,$p,$M);if($lb)$mf[]=substr($lb,2);}foreach($M
as$y=>$X){$o=$p[idf_unescape($X)];if($o&&($za=convert_field($o)))$mf[$y]="$za AS $X";}if(!$jd&&$Ag){foreach($Ag
as$y=>$X){$mf[]=idf_escape($y);if($Dc)$Dc[]=idf_escape($y);}}$I=$m->select($a,$mf,$Z,$Dc,$D,$z,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$E)$I->seek($z*$E);$Pb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$x=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&$z!=""&&$Cc&&$jd&&$x=="sql")$zc=$h->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".'No rows.'."\n";else{$Ja=$b->backwardKeys($a,$Sf);echo"<table id='table' cellspacing='0' class='nowrap checkable'>",script("mixin(qs('#table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true), onkeydown: editingKeydown});"),"<thead><tr>".(!$Cc&&$M?"":"<td><input type='checkbox' id='all-page' class='jsonly'>".script("qs('#all-page').onclick = partial(formCheck, /check/);","")." <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Modify'."</a>");$Vd=array();$Bc=array();reset($M);$Qe=1;foreach($L[0]as$y=>$X){if(!isset($Ag[$y])){$X=$_GET["columns"][key($M)];$o=$p[$M?($X?$X["col"]:current($M)):$y];$B=($o?$b->fieldName($o,$Qe):($X["fun"]?"*":$y));if($B!=""){$Qe++;$Vd[$y]=$B;$f=idf_escape($y);$Qc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$zb="&desc%5B0%5D=1";echo"<th>".script("mixin(qsl('th'), {onmouseover: partial(columnMouse), onmouseout: partial(columnMouse, ' hidden')});",""),'<a href="'.h($Qc.($D[0]==$f||$D[0]==$y||(!$D&&$jd&&$Cc[0]==$f)?$zb:'')).'">';echo
apply_sql_function($X["fun"],$B)."</a>";echo"<span class='column hidden'>","<a href='".h($Qc.$zb)."' title='".'descending'."' class='text'> ‚Üì</a>";if(!$X["fun"]){echo'<a href="#fieldset-search" title="'.'Search'.'" class="text jsonly"> =</a>',script("qsl('a').onclick = partial(selectSearch, '".js_escape($y)."');");}echo"</span>";}$Bc[$y]=$X["fun"];next($M);}}$yd=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$y=>$X)$yd[$y]=max($yd[$y],min(40,strlen(utf8_decode($X))));}}echo($Ja?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$xc)as$Ud=>$K){$yg=unique_array($L[$Ud],$w);if(!$yg){$yg=array();foreach($L[$Ud]as$y=>$X){if(!preg_match('~^(COUNT\((\*|(DISTINCT )?`(?:[^`]|``)+`)\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\(`(?:[^`]|``)+`\))$~',$y))$yg[$y]=$X;}}$zg="";foreach($yg
as$y=>$X){if(($x=="sql"||$x=="pgsql")&&preg_match('~char|text|enum|set~',$p[$y]["type"])&&strlen($X)>64){$y=(strpos($y,'(')?$y:idf_escape($y));$y="MD5(".($x!='sql'||preg_match("~^utf8~",$p[$y]["collation"])?$y:"CONVERT($y USING ".charset($h).")").")";$X=md5($X);}$zg.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$Cc&&$M?"":"<td>".checkbox("check[]",substr($zg,1),in_array(substr($zg,1),(array)$_POST["check"])).($jd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$zg)."' class='edit'>".'edit'."</a>"));foreach($K
as$y=>$X){if(isset($Vd[$y])){$o=$p[$y];$X=$m->value($X,$o);if($X!=""&&(!isset($Pb[$y])||$Pb[$y]!=""))$Pb[$y]=(is_mail($X)?$Vd[$y]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($y).$zg;if(!$_&&$X!==null){foreach((array)$xc[$y]as$wc){if(count($xc[$y])==1||end($wc["source"])==$y){$_="";foreach($wc["source"]as$s=>$Bf)$_.=where_link($s,$wc["target"][$s],$L[$Ud][$Bf]);$_=($wc["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\1'.urlencode($wc["db"]),ME):ME).'select='.urlencode($wc["table"]).$_;if($wc["ns"])$_=preg_replace('~([?&]ns=)[^&]+~','\1'.urlencode($wc["ns"]),$_);if(count($wc["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$yg))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($yg
as$ld=>$W)$_.=where_link($s++,$ld,$W);}$X=select_value($X,$_,$o,$Yf);$t=h("val[$zg][".bracket_escape($y)."]");$Y=$_POST["val"][$zg][bracket_escape($y)];$Lb=!is_array($K[$y])&&is_utf8($X)&&$L[$Ud][$y]==$K[$y]&&!$Bc[$y];$Xf=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$Lb)||$Y!==null){$Gc=h($Y!==null?$Y:$K[$y]);echo"<td>".($Xf?"<textarea name='$t' cols='30' rows='".(substr_count($K[$y],"\n")+1)."'>$Gc</textarea>":"<input name='$t' value='$Gc' size='$yd[$y]'>");}else{$Cd=strpos($X,"<i>...</i>");echo"<td id='$t' data-text='".($Cd?2:($Xf?1:0))."'".($Lb?"":" data-warning='".h('Use edit link to modify this value.')."'").">$X</td>";}}}if($Ja)echo"<td>";$b->backwardKeysPrint($Ja,$L[$Ud]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(!is_ajax()){if($L||$E){$Xb=true;if($_GET["page"]!="last"){if($z==""||(count($L)<$z&&($L||!$E)))$zc=($E?$E*$z:0)+count($L);elseif($x!="sql"||!$jd){$zc=($jd?false:found_rows($S,$Z));if($zc<max(1e4,2*($E+1)*$z))$zc=reset(slow_query(count_rows($a,$Z,$jd,$Cc)));else$Xb=false;}}$re=($z!=""&&($zc===false||$zc>$z||$E));if($re){echo(($zc===false?count($L)+1:$zc-$E*$z)>$z?'<p><a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" class="loadmore">'.'Load more data'.'</a>'.script("qsl('a').onclick = partial(selectLoadMore, ".(+$z).", '".'Loading'."...');",""):''),"\n";}}echo"<div class='footer'><div>\n";if($L||$E){if($re){$Jd=($zc===false?$E+(count($L)>=$z?2:1):floor(($zc-1)/$z));echo"<fieldset>";if($x!="simpledb"){echo"<legend><a href='".h(remove_from_uri("page"))."'>".'Page'."</a></legend>",script("qsl('a').onclick = function () { pageClick(this.href, +prompt('".'Page'."', '".($E+1)."')); return false; };"),pagination(0,$E).($E>5?" ...":"");for($s=max(1,$E-4);$s<min($Jd,$E+5);$s++)echo
pagination($s,$E);if($Jd>0){echo($E+5<$Jd?" ...":""),($Xb&&$zc!==false?pagination($Jd,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Jd'>".'last'."</a>");}}else{echo"<legend>".'Page'."</legend>",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($Jd>$E?pagination($E+1,$E).($Jd>$E+1?" ...":""):"");}echo"</fieldset>\n";}echo"<fieldset>","<legend>".'Whole result'."</legend>";$Db=($Xb?"":"~ ").$zc;echo
checkbox("all",1,0,($zc!==false?($Xb?"":"~ ").lang(array('%d row','%d rows'),$zc):""),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Db' : checked); selectCount('selected2', this.checked || !checked ? '$Db' : checked);")."\n","</fieldset>\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Modify</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'"'),'>
</div></fieldset>
<fieldset><legend>Selected <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete">',confirm(),'</div></fieldset>
';}$yc=$b->dumpFormat();foreach((array)$_GET["columns"]as$f){if($f["fun"]){unset($yc['sql']);break;}}if($yc){print_fieldset("export",'Export'." <span id='selected2'></span>");$pe=$b->dumpOutput();echo($pe?html_select("output",$pe,$sa["output"])." ":""),html_select("format",$yc,$sa["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($Pb,'strlen'),$g);}echo"</div></div>\n";if($b->selectImportPrint()){echo"<div>","<a href='#import'>".'Import'."</a>",script("qsl('a').onclick = partial(toggle, 'import');",""),"<span id='import' class='hidden'>: ","<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$sa["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</span>","</div>";}echo"<input type='hidden' name='token' value='$jg'>\n","</form>\n",(!$Cc&&$M?"":script("tableCheck();"));}}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$h->query("KILL ".number($_POST["kill"]));elseif(list($R,$t,$B)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$z=11;$I=$h->query("SELECT $t, $B FROM ".table($R)." WHERE ".(preg_match('~^[0-9]+$~',$_GET["value"])?"$t = $_GET[value] OR ":"")."$B LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT $z");for($s=1;($K=$I->fetch_row())&&$s<$z;$s++)echo"<a href='".h(ME."edit=".urlencode($R)."&where".urlencode("[".bracket_escape(idf_unescape($t))."]")."=".urlencode($K[0]))."'>".h($K[1])."</a><br>\n";if($K)echo"...\n";}exit;}else{page_header('Server',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Search data in tables'.": <input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Search'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable'>\n",script("mixin(qsl('table'), {onclick: tableClick, ondblclick: partialArg(tableClick, true)});"),'<thead><tr class="wrap">','<td><input id="check-all" type="checkbox" class="jsonly">'.script("qs('#check-all').onclick = partial(formCheck, /^tables\[/);",""),'<th>'.'Table','<td>'.'Rows',"</thead>\n";foreach(table_status()as$R=>$K){$B=$b->tableName($K);if(isset($K["Engine"])&&$B!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$R,in_array($R,(array)$_POST["tables"],true)),"<th><a href='".h(ME).'select='.urlencode($R)."'>$B</a>";$X=format_number($K["Rows"]);echo"<td align='right'><a href='".h(ME."edit=").urlencode($R)."'>".($K["Engine"]=="InnoDB"&&$X?"~ $X":$X)."</a>";}}echo"</table>\n","</form>\n",script("tableCheck();");}}page_footer();