<?php
/** Adminer Editor - Compact database editor
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.3.1
*/error_reporting(6135);$fc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($fc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Tf=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Tf)$$X=$Tf;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©”vt2‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅÃôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PĞ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛĞ889¤È QØıŒî2#8Ğ­£’˜6mú²†ğjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ğ¼o(Úó¥ÉkÔ7½sàù>Œî†!ĞR\"*nSı\0@P\"Áè’(‹#[¶¥£@g¹oü­’znş9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ğè!°üë*cì÷>Î¬E7DñLJ© 1ÊJ=ÓÚŞ1L‚û?Ğs=#`Ê3\$4ì€úÈuÈ±ÌÎzGÑC YAt«?;×QÒk&ÇïYP¿uèåÇ¯}UaHV%G;ƒs¼”<A\0\\¼ÔPÑ\\Âœ&ÂªóV¦ğ\n£SUÃtíÅÇrŒêˆÆ2¤	l^íZ6˜ej…Á­³A·dó[İsÕ¶ˆJP”ªÊóˆÒŒŠ8è=»ƒ˜à6#Ë‚74*óŸ¨#eÈÀŞ!Õ7{Æ6“¿<oÍCª9v[–MôÅ-`Óõkö>lÙÚ´‹åIªƒHÚ3xú€›äw0t6¾Ã%MR%³½jhÚB˜<´\0ÉAQ<P<:šãu/¤;\\> Ë-¹„ÊˆÍÁQH\nv¡L+vÖÃ¦ì<ï\rèåvàöî¹\\* àÉçÓ´İ¢gŒnË©¸¹TĞ©2P•\r¨øß‹\"+z 8£ ¶:#€ÊèÃÎ2‹ºJ[i—‚£¨;z˜ûÑô¡rÊ3#¨Ù‰ :ãní\rã½ƒeÙpdİİ è2cˆê4²k¿Š£\rG•æE6_³¢ú=î·SZUÇ·ãŒO—ğÅ?¡éÃ¾27£cİĞÅhnÆ‹Üùu3…E>\$J[Áq[\räIŠ6.ÆJÑ\"EPrèGÌŠGA İW¡³\rº´6Ík†¢½`.-¡ªB2>#ìhØÀˆXµøu\r¡¸=‡Z  b€Å(¡â•ƒ!JZÈ”uªyO’×Z¥M˜Õ6lM[0©ä–€àß!ImñyÂ+pÉ#ag¡ŞŒvW˜:qp\"4ÅôòŸãheî…0 dÆAq-\"¡Êƒ§ÆÂ\"2ßÍÒ@‡)o‘,,”¤”×Rb`@©B@ĞÊÊ¯¤Q\n†èŠ·˜Z§„Â™=(r~‰l©~¯ÄhˆsAllÖ\n7»!1! Ü#é\0KË…A“LH(½!ÔÊ˜agH\0ÄT\ni˜/È\$ôöœ4GaÎIÉ!¸.—Å˜5§ÅM\rÑ2‘‚Ï	Ù;ƒ,öLIJ†äÃd?“ÒºÅí%Õˆ:çN@b.âª2í5’«ôt:FAw²B£E,Ç-\$ù£'ê:Ó©u©?¨tK;kÍàĞ¸¨ä\0ouMD)k_Ph˜Ó5MC}7‚…È2‡w.QB¦8)ìÀ†8(DIù=©éy`Øed\0s,`É•jŒHÄ\"(b³¢Ä\\ÙÖnl’\"Ù‚^Ëì€­eE½\nèáë±X!SqXÔÀ\r©Œ€7A±†0ê£y7pPìºğçaüA˜4‡ƒ(yÖJwm…2…òª.¯ó‰†¬fp°ÏË;Æ„5ÂJÍcÜqŒQz\\\0[Hÿ 3‘f'b¼µFğøÆY¨\nAà9_§IŞà(›fÎÓq‘VÑÅ¨äõ³4µÜò¹‚„RIÂYå&J’ºFñ}£{FTëh9[7‚h\0à‹TÖ^ö´jËÔq×j‹õÕ”§­€cÂWIğ@`_ÑsVDçÃ[¾\"{1áÈ3‡•	Úô»÷¨<…l¼l.±éĞ[¨»Ş#Ä¯º¤b°Şu­¶/Ÿ\0ä3ævaå«‘Dp>‚2½IDWÕš¢kKAŒ»hHš]¨FÆ•ã€W–!]‰Ê÷ltÜÉ•RÌ­4L[äĞÅYC cTj<c;s‡q¸p€’ Ä5ÅtóJ§m6—%J”-\\õÍeB=iß-ğ*%´·¦÷¢TV‹[&M8ó*\r™bÄY\rihˆ	„ÙPŒ9T×-VÉ°ZÔúüÛ³ù49Î²™”ƒp-´`ÙÿÜÌÇGÉÙ›' ì¹ĞôM²:§Å™')0ƒYuÚcí:!«x#×¦è¦-l*®TÉ\nYläù†š³‹*D ÉXë V\\îËØÚ®ó]y¯ƒ\nÖ2r,É†åç,ÎdĞ×~Å³İ÷s³-ç+Ö»uÛ]£\\BÀ¶¥²Iw€Ô!ƒOsØÔ¯lò YCÁĞ‚È:À@ÆœEUË._)Ë9uÿzœµvÏˆSÎ´¬1ï—é_(Sõéqé½¡r¾yuî+¥Z*ê6€uy¿<ÉÇõz\\|ØZK;áe›×–úoYåÀ;°óÃl‘´xöà-7×ô÷4rkYY?ÔÕGWt¡¼÷[KÚšÃåzoØ<¿€Íà	têÏô†¶¾ù—É€gçıjğ‡_!ào…êÊ\$ Iã¹ÀI¿.&Ü5½P\\—›]¥Àè†Æ\nCØ.ïÖ_¹ø;¿çs«iíS/gÖ:ŞPëÉ³auNÍ¨|Æaáå¯á™º¬±¢µÓâ«6ØÓÙ3Ö|÷¾‡Ä{©ceîXòù<°e«p>Ní}´í~âÿO¾¡÷Ò™Bl¿ÂjÊ/¢óKø¼Hdch-Ë¾ıºØšğ/ûîÜşÎäùÈ¶·hÔ0ÀĞŒÈĞ‹ÌúÎH©8 ");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIìÒf‰›\$±At^ sG²Étf6eŒ§yŒÊ()LäSÁÀP'…ÂáÌR'Ífq]\"˜s>	)â‘`œH2ŠEq9ˆÊ?ˆ*)‰”t'°Ï§Ø\n	\ræs<ŒPi2INÆ*(=2ÌgXá¸è.3™N„Y4èB<’L—üîi©Ì¥2İ´z=š0HøĞ'·êŒšÃuÆtt:œÂ¡Èêe¹]`pX9ŒŞo5šgòóIœÜ,2O4ãŞÑ…MÆS¸(ˆa…Š#¾Äàç’ïø|¹G‚bèôüxœ^Z[Çä™G¼ÎuTvª(Òm@Vò¸(†¼ÈbN<ŠÈ`æâXä1É+Œä9J8Â2\r£K¶9ğhå	 Áè`…‹ÆëI8ä›±S±ãt÷2ƒ+,£ÆIºã £pæ9m@Ğ:ƒ€æáxï)…ĞüC…Ãxä3…ñ4P7áü-4Çr\"p3Fhà…-5ƒ”U4Í‰¸\\6°ƒ<D\$®l—9ÍR4t7ƒdD3µpŞÎ“kÌ:)\\;° ĞÔğ\r@t…\$4O£<ş†!pdÇÔÚQJ\rÌHî}:&Œ¨ˆÂÈ„Á5YWJ­˜‹±Â`ÓN£èbKNSÉÀÉa§•ƒ´d>2WñÅ…bDj:9[21c„»È€:Xé@ËqË#“›4íL™'J”©+DHeÒ3¬.«O ÇKË°“ˆ…pV…át2Œwp;Æ“…íÿ\r?èOzDq.ª°Ğ-†\"ìZñ®cèX3!/>PúFìsØÉ²±Ã0Í(òóˆ°Ê£€àŒ‚T63sVQo¸€SÎ‘ b²ß…^r\$É@C© r2)©Œ£ “VÀ)+nÜ·zÃÁúålÚè{³K#…À9‹{†Û¯lÀºìmĞQ¨ëh»*É—PÄ:¡c˜]´7ãàø=¡LŸŒi;”2û¿§­ÜÒ<\\Jí¤Øb¥n”…ƒ¥nÁ_iÓ´îJ\n†¢¨âòõC:ª„‘`N4¶Ì–È'Aw:4}ÊÛ£ÁW\080‘ÇL3õÊJ;èiú)\\„=/NŠu=ZV6&ceaè±ÂpŞÖ.[ëvŠtPZŞèX`Ö”õŒ+zú'¦ê9½.\$\$…Ó@\n\ré]_ïÙ®¢Âh¨kk¬Ms>`Ì–ƒj¹%\\9Ğ¶ÆÔ('°jAˆ>BCd\"K\$	CAÆ ä„¤.Â².`‰â.EÑæ´–ÌÃyy\0‹D2Ï8t	Ğ6†Ã8¬FL«´×ŞíâŒB*¬ğ,Ò|\nx\\@ °@¸Ø3r ¬­ğÎWKQb,%…¯´DBfØÈ³D|ÍŒËE0/2>£Y!Ä†'õ™`æf™mHº<BãB0\r*\0Gxò‰nêY4‚¶¾Œ,L²©º–öÅ%SÆ,ıv‡0ê‘–XòQÄ1†HId`‡!.ÔVÊ›H/ÅúÃ—ÀHãù0ÆUÁ¸0Â™©`îLI©8ÖÃkŠ”2Œ4JYNÅ&8xä¥JØk:AKã¡nWØ!¦¿Iï;'ô³\":2ğê‹4Í~óJ„8ô£á’‘¨âG‡™\"MÊ=\rZ'nÇi9F§œ“™rÆ’RÊt‚3\0Ÿ”Ò²Â2µy‚B^òèb'´ÒzÈÉ²(­#”d9Itµ&WØjNa¨ÚC(¥ j”Ä–?h‰ÂØj†¡™©Ö„Z\$0«¡Ò¯´J	A_\n†!TOó4Œ<{aôú?˜æo ú‚-¹–ÃÏ?Hlÿ\"2ƒy™=Úë¨ R©ğœÑ„àš°–ÍŠëP&åG›ÀÁ4ƒË%()¤\r5Mª‚‰ÓLTí\0ÀºxBIç=ltvÄ2Jhvû´~/:èpı×:8\"Ğ´5¡«‰0î#*ì7ªøúÜ\nàq×>è¡G\$°â…):	ƒ»\"ù#ë¦KfI‡!vö+?{¡Íÿ¾Qg¥{ÏR÷Q øCäª}Õ#¸éiIbgà„ÔXàÄÃÂù}ÅË`‹}3—%@îÁ{_kø}0ä±şÈ—Öp !°aï—<7«e•‰ÖF‡?¦¸¡î½XüDù­Ñ, ØÊCk‰ƒíU™ØL>£1‹§ÜÜ‡¥ã‡Œp0#Ä\$²ÅâV)pYs5A˜:°ÊUÈ(9…5×™,F+&Ÿ*{âŒ-£Íìç:÷Ší :7¦ş:Ê™yPãè—´ŠÀXÏ+¤’\nŞI;üş\\s„÷Pà÷1‘‘ìÈr©¦NJËAT'-£”òk?ƒÙY@“¡Ïö±fÇÍbñ’”RîJÏiömÖB~ò©”K\rK«œtª4à÷;OŠKc”9%Hì5àÍd¢3ÙÀe8j¿P÷±[sğ™9,ƒÄ˜—bzK‰µÁòW&e¢d8­ú§)ÄùĞuP°¿¾œ>‘#	P&„ÃP	ƒpbaÀ¨Í¨yñ£æß\$3}ïĞ{»áİhyÊ(ÖdWø±ŠÅÙËĞ_±:°'AØ‚‡PæÃI\"Ù!ï[`ûn8å»i/@ÈäğP	ĞfœĞå†©ˆV	À£•sÑCß8¡˜°Ny‰hÜñtEnAj.-åÄ6£ÀqwJÜ?œÃ¹”AÌhu	è™Ôsé¤AíáO7“·j›æ\n	]¿0›^Œ	ƒ\nYÁš\$„Î–_\rş\$…u*÷Ş¡ÒEx/d¼pdRİdÂõ:¤IÀoDÁ›®‡sQÉ™fàÜI¤öâ8Ñ,óêKÑÏIsM@aq\n/™†ÌM˜R¹ ¢®Cş-aÇa£¾™/·Hº!å4F…óIÿÉÅpÅ”MÏ«Šş_Ø‡HÀ9{‚.´\$WÄûò#{ÌúÒ®Šü·:‰Súƒ£(À'lÕMY»:lÊ¤mD\$°\0¦¬×\0©ê´èº'¢~à¶ Z@º€¶ŒàVâº€L\"ãjnæ¾5€ğNlŠÌşşKšfj&›Mí•OøÓdbÓ°NÓğ´O\$i)ŞNĞ(¿Ğ!P)Ğ0+Ğ6HpN¦¢ØF‚àîĞ–¬?L\nìÁ-h0˜Í,.e­¤\"‡6m#õ	é’ıo&ò°ÒŞë¶gåZÅ@Pşk­&Ìº_ì¼%\\\\'ÀíÌ\0]\$(€5ƒN fqÎ|Ñp¨ `…â<ğîRîÎú úìÍ¸ş˜ìI\0Ñ¥şãL¦|Ç\$ı(Şê¸Å¬TkQ6k°B@0HõŒ˜Pƒ\rÀšˆ#Îušš+ï€Ü²pTşĞZÑ±/ü\r y´Pp%\0^8ÆÒ\r¤Àµ‘˜4¬İ\0‡¡1²¦ğQn*+B8qÂà ÏF§\0Ğ´ÌÜ±Šâ¢\næş«.®âûH’±%Ââ3ñÀ&PF–Ñ„İX¢Ïğ¨`O ±£Ë9R­B´’\r ì10Îì½‡O ¬X«Ì^+¯öïæÌiĞÈArD¬4ëÙ`Ê-š.i`4ò'Å,\$²VÅ,_c~;Bn<’1\$,]%Èlù‰D=âå\$Ñ).1b%gœ»z‰Ğü}ËÊG2¯1]8uPòïìD]	/z îä¼g‘+'„7D\0]ú²¾aäpV’ÒL€ó0÷+`Xpä˜ ÊîdË-hû+h(ÀÔäÀĞ\n„¿²fª“§s2,µ2‡@z Â.I``‡*óÌ1l?±“RËñ±W.ï.c%\$‹¢¿s+4òÑëã6Ã\$Cr‡F)0‚ô\rÓ1-ˆ`„ÓŒ ÈjÆL\r­8–²©l—0È©*.L‡KpÃ\r¤·\r£/rûLÄa8â2KÅ1nêb‚ÿ4“LíÒêË,¶Ë¬¾ïó©\nij–érói#Ç©8»1èbxÓ2à¾\$Nú\re‰ ¨\r\"8ˆ'‘³’³ª\r´-ƒPàÀYñ0°£Yb”S\0¹°ø\\jK+q6V hê1óU€z`pïò¬R±E“CÓî”X»Åöõ%”F	5ñF4f-¶tPåID6\0NFä®Nå4’_Ş0ó©\riL@Ên´¸Pé^‚¬Âîëê¾%'ËLÔ¨êG”€ïôàò\\‘Fèâ€ÊâÄ&ã4ÂĞI*5ÉO†‰OÀ·Pã)8¾)­*L;ğ½4EÌ]´\$óğÌ\0L3ËE ïEk„ÑÃÎIt%eÆ\nbô(ÎëSMª}²Ş7sÇ‹Û¯)gi¤ØFà†&êº-XH° ¼ìğBÃM5~jrPjÌ¾-|Ö¤´9 ¨–p¨¢5Š¸;o–5²õ¶–‰c\ndÒÕuÊ	 ÂÔ\rLÕhú'\nå''ò< O\0ğœe,. ú–\"t\r¯k^Ã{_Ã_gTµı`\0Ñ	Mk?ˆ2®\r:Db%È]UÍ[²1óùcuµ[¡[9]Õà´/ EV>k@éa\r_\"b6]ö E–DöQ^)È™•@Ps€ITr vT\0ØVR™W@ ëiR”2/¢b…,Xr€¬	jç^µï0•õ«ÿk’’üCÇlˆ“fl'8E–É©‘oµW¶¨ûI¤şmpë£¶ı/&ï´+´òıéX¯çk.şğ\\ÿ4Ó0d“r\"“°kb\nH\$Ğ¢†±KCâåo§OoíõG%\r¦äûÏl²–ùëÒö Õ]àP7\"*hPP€\rc¡_€X[`æêöî â7å:`‹˜Uà°ß¨–I¢ƒwêdã¶;·Š	—“x t†À‚8d\0@Ôjw˜v¶ —»{÷Â b	¨pü æñcyíö\n€ , u<	âÕ\"uyE:í÷Z`<LF£ë¨ü2ÑğcwşS¸d†%uw€÷u•ß€#pqNNßÀN’\n·#@ E‚#\"@|d%kwc\"* xò„àw‚˜\0uX.¦Âl&Xe‚ÎM†ÃB'“ @6ChÂ»`S¥‚wÿ‡G Êé¢ÓˆC[V×ø1àß\rÆşb\"Ğ\n\0\n`©JÀ¸º+—a1¦\"lW}z–]zjdO„>!‚ˆG\0[\\å¢ïF|…®¾ À^\0ZJ`î¨b·`#ãŒ5€É`W÷“E;„â(à°¹!`È¯`\"»~Eß’gƒŠhVGrı‚_ï±uåj¢Q‘*d'2g/Ø-\n€h¤ ^Àda)×•E:HØhäËãvEvˆs—Bàí­‡9wƒ\0ÜßMøßĞãŒùW”NLù…• Ë3Àè-ø=#@%øD!ÊXL*ô…êV…¹‰¸;…Ò1„ãÇ˜Ø‡ƒMk‰™X‹ØŠÀñÒâ&ù™Ùr<å[%Uøeq˜WW‰#\$ÛèŒlIVàA†W_GÆVú„šF\"&fĞ(çošdV1ƒšó*wr0±F\"Œ¯¤‰H˜‰ÑvçTq hw*†“†@Œƒˆƒs….¯0g8ú1_€zfö»äA)À¢—+<¯Òu\"­F_lO#Œ®Õân{‚XYwv,ÕÇ–½ HàÓÇ“cÌ{n7á<8ÌYfB°¬Á\0øFe–\ràù:érŠ¸\$gy¬šÌÀ6=pÍ;4ó›9\0öb%a2BÉ Ê\n ¤	(€\rº@GFª@ÙÃû%²€ß²Å 1ÓâĞ“qbÂs+£Zg´%@t%–à š3±€Ô\räD(àLÒ÷v.šğ€\\\rR ^ã€é°	×A2Â\rÖ¾;yvïˆÀ€~ÀUâÂ*¢Ğ@õø<š‰Ëq¢Wa¢·S¢úW¡„=yEš<Vº@<ù±1·³3€Ğ\$»äì\$üPÅD€¾w2UÏØ;Ï]ù¡Ç%!\n¯ó²ÃD)‘¦ó„‚I/h~Çàè‚<Â+ø€î0€ÜåsÓ34‡-´ŠèåGÓØ4ïÂòŒÅT\nÏóu3ëü<TôckşÊÅWÃÎW»âGU—±Çfme÷\\¤D!*vÅx3ƒiû2ªw2§Œ1ª|Œ\$&Ô‰+€†bG\$v!rò*-ù4­quÈ\rÑyLã0üÊtXÆ…Æ·²çÚßI“b dúµSÓï<öaòÎËç¹G´~G¬Ïà„m äg¢x-T’¶ÏÉY’á™–¼ª!(wHÃ\nãš4aäg)`ñƒ%Ó@rüY%’¬(qÜX¿˜à!cÕ\$Dy±]mjöbpR4RõÜRÄïuÜX†äpó/6 h€eâªÕ+ùnëš@ cHĞÉ¹ğ ¹Ÿ{Å”æÅÚ.\\bmVşpPé·`bQrãP€ê\0`\$WÖWÑRq2x%bY—1ÜÛû€¬²º³±>ùÍÌ1æÌìu&b\nVÌo°Nïj\n€ŞâÄEÄ†ØC3âåG\0²ış ep–£Â<~B^ A¾%/9°;åv\\¥[â›Hşl^U»ÔûÇÓh¿š¢.\\YÉ}+	üYtŞÅıqÆ‰6¢\nsüã\0‘¾äü¦c:–3¹*}ÉÜñŒÚØ7z\$ë·d\\Âç\"«· W³£Y³û+²ûIèã³e½¢Ú\0çùSï9©½ºDt[rû×šºCÖ©bÍ~é¦³DÕw/½l—¿ÉL`Õ~ ØU‡øV_àŞ\0\rŞwó)¶bÆ¦8–ï”¿Gò Ü%¼º¾WŞUáöA¾v(ùHFg¨ X©cº¢n9ö2—ô—Õn12lÀ˜\rä?\"tï\0XPÉsùÿ”Ymf±‚‚F?mñÒx5™}Hì_´ìXcûy”áÎºCåÕ.Ä\$¯`¶köd5.rx>Ç¢7şæîsÛn3¼“Ó<¼´g„ˆğ§åO(\\@èWò:PáÏƒ{ó­_Fà†”hgLÓ >°<¦6é~'²K„0Õ?@ãìEAå_Ü Ô8H.LG<øÄíd  Y¬oú¡ÒÜü«€­ÚkF<Òıp‘¾(Ûj\$9ò¬ª˜Ä?¥ÙV P?)ÍòØ¤DŠuŠ°Lb¨­àj¹Áâç}	ğ\0„Kp³ì7ÆÒZsÔ€àõDì)ë\rù:°™JQÖ“}¥”\$¨€bÁ³AØu)»Ü‡\"XÅÁMŞ%pQPÑQÂÍ\$@³¦\\’\0ÚVõ7ªÁ¨TMøX×É*ôò #)G\\ ĞK—«ÂMë0–=¯JÜ&½`¿\"x‹_ÒËb™B`–C?/ˆ´ÅªÚBUuë«83ûNR¤Îñ_]Nî‰TèÜ¿D„ª…òwI¥\n‘2«„€D:Yî‚	ôì­q1°Ğ`B‚à—F!]W5‰,:˜1Ã(­0ÇtQôFÙ	ˆŠpÕ7’'!\"@€Õ8Õ0Ü`œ7ˆ\rhC’\nXÓ¡¥\rA–CÖ	m	Q€Ìß&l&€|cåL‚d¢\"#·\"ø’¨ÂPK‚‚ôß56HÊ„bÊ—&åÄ+Î#f¨V¹/Søˆh(Td±uÀ€ô‹<=ˆxdª8Š:ám!ğ6ü8€,JP~RP–DüZÂÃu€±‘O¡`Å0X¦šŠA¢ˆwØ£0eh^Câ’\$Ä ¢ãÈ8A‚¡PçÅ(ê#+K×N4¡%\n•BÇÄ>âÜ2‡%ìüë{0ùÆ‹¾ò0ÏŸ¢/¦Ñzˆğ Ï	P¢‘“Êš @Égæ¥Dªzö¤D§ÔŠşYà¥“4œ¥¯,%l3WâÍUş²¢ÃúLr[º°øÔ…9H¥ÌgT`@7È\r‚¹N£ï– èÛ€û°>™÷ÖèñÈÁi\0pzŒ”¢Hå¢ääÑr;`IV]EÈöÖGYz\rôó˜EnÈò/{˜Ä¶™Ç	dQsbTj\$g>™~=îËŠ“Jâƒ·ÄûKYˆ£ªZ1Ò…KçRÒ”Ô»ÀÖ6Aî\r¡{”CÒt¸ 5º€=n²şcö¥N)œ”Lº=/ğ<‹<;bŒU¡†VáŸši¼1ã¤~ÕÊ`HıµªEË‡Šé_¹œ‘R<\$b9Æ¿Õ¼\n>{h@›<Ù7¸¶Bçë[„\r€<4IbM),”@Ù%082é¢¹‘˜sCO#ô2A¼ır‘ä†à|oé+Iaï¬Öu¬…Ó+&P3ÈpRM\\lˆR/³¸I¹JR“ŒŒ^j0Šäğ2~JCFdjV!¡K2;“ä‚\$vĞ6ˆ;m¤iÎd\"F		ÈUìòBtP„zµ£Ì");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress(compile_file('','minify_js'));}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($u){$gd=substr($u,-1);return
str_replace($gd.$gd,$gd,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($oe,$fc=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($oe)){foreach($X
as$Xc=>$W){unset($oe[$y][$Xc]);if(is_array($W)){$oe[$y][stripslashes($Xc)]=$W;$oe[]=&$oe[$y][stripslashes($Xc)];}else$oe[$y][stripslashes($Xc)]=($fc?$W:stripslashes($W));}}}}function
bracket_escape($u,$Fa=false){static$Ef=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($u,($Fa?array_flip($Ef):$Ef));}function
charset($g){return(version_compare($g->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($D,$Y,$Ta,$dd="",$Md="",$Xa="",$ed=""){$K="<input type='checkbox' name='$D' value='".h($Y)."'".($Ta?" checked":"").($ed?" aria-labelledby='$ed'":"").($Md?' onclick="'.h($Md).'"':'').">";return($dd!=""||$Xa?"<label".($Xa?" class='$Xa'":"").">$K".h($dd)."</label>":$K);}function
optionlist($Rd,$Oe=null,$ag=false){$K="";foreach($Rd
as$Xc=>$W){$Sd=array($Xc=>$W);if(is_array($W)){$K.='<optgroup label="'.h($Xc).'">';$Sd=$W;}foreach($Sd
as$y=>$X)$K.='<option'.($ag||is_string($y)?' value="'.h($y).'"':'').(($ag||is_string($y)?(string)$y:$X)===$Oe?' selected':'').'>'.h($X);if(is_array($W))$K.='</optgroup>';}return$K;}function
html_select($D,$Rd,$Y="",$Ld=true,$ed=""){if($Ld)return"<select name='".h($D)."'".(is_string($Ld)?' onchange="'.h($Ld).'"':"").($ed?" aria-labelledby='$ed'":"").">".optionlist($Rd,$Y)."</select>";$K="";foreach($Rd
as$y=>$X)$K.="<label><input type='radio' name='".h($D)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$K;}function
select_input($Ba,$Rd,$Y="",$fe=""){return($Rd?"<select$Ba><option value=''>$fe".optionlist($Rd,$Y,true)."</select>":"<input$Ba size='10' value='".h($Y)."' placeholder='$fe'>");}function
confirm(){return" onclick=\"return confirm('".'Are you sure?'."');\"";}function
print_fieldset($t,$id,$hg=false,$Md=""){echo"<fieldset><legend><a href='#fieldset-$t' onclick=\"".h($Md)."return !toggle('fieldset-$t');\">$id</a></legend><div id='fieldset-$t'".($hg?"":" class='hidden'").">\n";}function
bold($Na,$Xa=""){return($Na?" class='active $Xa'":($Xa?" class='$Xa'":""));}function
odd($K=' class="odd"'){static$s=0;if(!$K)$s=-1;return($s++%2?$K:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($y,$X=null){static$gc=true;if($gc)echo"{";if($y!=""){echo($gc?"":",")."\n\t\"".addcslashes($y,"\r\n\t\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'null');$gc=false;}else{echo"\n}\n";$gc=true;}}function
ini_bool($Oc){$X=ini_get($Oc);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$K;if($K===null)$K=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$K;}function
set_password($dg,$O,$V,$H){$_SESSION["pwds"][$dg][$O][$V]=($_COOKIE["adminer_key"]&&is_string($H)?array(encrypt_string($H,$_COOKIE["adminer_key"])):$H);}function
get_password(){$K=get_session("pwds");if(is_array($K))$K=($_COOKIE["adminer_key"]?decrypt_string($K[0],$_COOKIE["adminer_key"]):false);return$K;}function
q($Q){global$g;return$g->quote($Q);}function
get_vals($I,$e=0){global$g;$K=array();$J=$g->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[]=$L[$e];}return$K;}function
get_key_vals($I,$h=null,$xf=0){global$g;if(!is_object($h))$h=$g;$K=array();$h->timeout=$xf;$J=$h->query($I);$h->timeout=0;if(is_object($J)){while($L=$J->fetch_row())$K[$L[0]]=$L[1];}return$K;}function
get_rows($I,$h=null,$m="<p class='error'>"){global$g;$gb=(is_object($h)?$h:$g);$K=array();$J=$gb->query($I);if(is_object($J)){while($L=$J->fetch_assoc())$K[]=$L;}elseif(!$J&&!is_object($h)&&$m&&defined("PAGE_HEADER"))echo$m.error()."\n";return$K;}function
unique_array($L,$w){foreach($w
as$v){if(preg_match("~PRIMARY|UNIQUE~",$v["type"])){$K=array();foreach($v["columns"]as$y){if(!isset($L[$y]))continue
2;$K[$y]=$L[$y];}return$K;}}}function
escape_key($y){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$y,$A))return$A[1].idf_escape(idf_unescape($A[2])).$A[3];return
idf_escape($y);}function
where($Z,$o=array()){global$g,$x;$K=array();foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$e=escape_key($y);$K[]=$e.($x=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X)?" LIKE ".q(addcslashes($X,"%_\\")):($x=="mssql"?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$X)):" = ".unconvert_field($o[$y],q($X))));if($x=="sql"&&preg_match('~char|text~',$o[$y]["type"])&&preg_match("~[^ -@]~",$X))$K[]="$e = ".q($X)." COLLATE ".charset($g)."_bin";}foreach((array)$Z["null"]as$y)$K[]=escape_key($y)." IS NULL";return
implode(" AND ",$K);}function
where_check($X,$o=array()){parse_str($X,$Ra);remove_slashes(array(&$Ra));return
where($Ra,$o);}function
where_link($s,$e,$Y,$Od="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($e)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$Od:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$o,$N=array()){$K="";foreach($f
as$y=>$X){if($N&&!in_array(idf_escape($y),$N))continue;$ya=convert_field($o[$y]);if($ya)$K.=", $ya AS ".idf_escape($y);}return$K;}function
cookie($D,$Y,$ld=2592000){global$aa;return
header("Set-Cookie: $D=".urlencode($Y).($ld?"; expires=".gmdate("D, d M Y H:i:s",time()+$ld)." GMT":"")."; path=".preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]).($aa?"; secure":"")."; HttpOnly; SameSite=lax",false);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($dg,$O,$V,$l=null){global$Ab;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Ab))."|username|".($l!==null?"db|":"").session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($dg!="server"||$O!=""?urlencode($dg)."=".urlencode($O)."&":"")."username=".urlencode($V).($l!=""?"&db=".urlencode($l):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($md,$wd=null){if($wd!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($md!==null?$md:$_SERVER["REQUEST_URI"]))][]=$wd;}if($md!==null){if($md=="")$md=".";header("Location: $md");exit;}}function
query_redirect($I,$md,$wd,$xe=true,$Tb=true,$Yb=false,$wf=""){global$g,$m,$b;if($Tb){$ef=microtime(true);$Yb=!$g->query($I);$wf=format_time($ef);}$cf="";if($I)$cf=$b->messageQuery($I,$wf);if($Yb){$m=error().$cf;return
false;}if($xe)redirect($md,$wd.$cf);return
true;}function
queries($I){global$g;static$re=array();static$ef;if(!$ef)$ef=microtime(true);if($I===null)return
array(implode("\n",$re),format_time($ef));$re[]=(preg_match('~;$~',$I)?"DELIMITER ;;\n$I;\nDELIMITER ":$I).";";return$g->query($I);}function
apply_queries($I,$T,$Qb='table'){foreach($T
as$R){if(!queries("$I ".$Qb($R)))return
false;}return
true;}function
queries_redirect($md,$wd,$xe){list($re,$wf)=queries(null);return
query_redirect($re,$md,$wd,$xe,false,!$xe,$wf);}function
format_time($ef){return
sprintf('%.3f s',max(0,microtime(true)-$ef));}function
remove_from_uri($Yd=""){return
substr(preg_replace("~(?<=[?&])($Yd".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($F,$nb){return" ".($F==$nb?$F+1:'<a href="'.h(remove_from_uri("page").($F?"&page=$F".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($F+1)."</a>");}function
get_file($y,$qb=false){$cc=$_FILES[$y];if(!$cc)return
null;foreach($cc
as$y=>$X)$cc[$y]=(array)$X;$K='';foreach($cc["error"]as$y=>$m){if($m)return$m;$D=$cc["name"][$y];$Cf=$cc["tmp_name"][$y];$ib=file_get_contents($qb&&preg_match('~\\.gz$~',$D)?"compress.zlib://$Cf":$Cf);if($qb){$ef=substr($ib,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$ef,$ye))$ib=iconv("utf-16","utf-8",$ib);elseif($ef=="\xEF\xBB\xBF")$ib=substr($ib,3);$K.=$ib."\n\n";}else$K.=$ib;}return$K;}function
upload_error($m){$td=($m==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($m?'Unable to upload a file.'.($td?" ".sprintf('Maximum allowed file size is %sB.',$td):""):'File does not exist.');}function
repeat_pattern($de,$jd){return
str_repeat("$de{0,65535}",$jd/65535)."$de{0,".($jd%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$jd=80,$kf=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$jd).")($)?)u",$Q,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$jd).")($)?)",$Q,$A);return
h($A[1]).$kf.(isset($A[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",','),preg_split('~~u','0123456789',-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($oe,$Ic=array()){while(list($y,$X)=each($oe)){if(!in_array($y,$Ic)){if(is_array($X)){foreach($X
as$Xc=>$W)$oe[$y."[$Xc]"]=$W;}else
echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Zb=false){$K=table_status($R,$Zb);return($K?$K:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$K=array();foreach($b->foreignKeys($R)as$p){foreach($p["source"]as$X)$K[$X][]=$p;}return$K;}function
enum_input($U,$Ba,$n,$Y,$Lb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$n["length"],$B);$K=($Lb!==null?"<label><input type='$U'$Ba value='$Lb'".((is_array($Y)?in_array($Lb,$Y):$Y===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($B[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ta=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$K.=" <label><input type='$U'$Ba value='".($s+1)."'".($Ta?' checked':'').'>'.h($b->editVal($X,$n)).'</label>';}return$K;}function
input($n,$Y,$q){global$g,$Of,$b,$x;$D=h(bracket_escape($n["field"]));echo"<td class='function'>";if(is_array($Y)&&!$q){$wa=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$wa[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$wa);$q="json";}$Be=($x=="mssql"&&$n["auto_increment"]);if($Be&&!$_POST["save"])$q=null;$uc=(isset($_GET["select"])||$Be?array("orig"=>'original'):array())+$b->editFunctions($n);$Ba=" name='fields[$D]'";if($n["type"]=="enum")echo
nbsp($uc[""])."<td>".$b->editInput($_GET["edit"],$n,$Ba,$Y);else{$gc=0;foreach($uc
as$y=>$X){if($y===""||!$X)break;$gc++;}$Ld=($gc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($n["field"])))."]']; if ($gc > f.selectedIndex) f.selectedIndex = $gc;\" onkeyup='keyupChange.call(this);'":"");$Ba.=$Ld;$zc=(in_array($q,$uc)||isset($uc[$q]));echo(count($uc)>1?"<select name='function[$D]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($uc,$q===null||$zc?$q:"")."</select>":nbsp(reset($uc))).'<td>';$Qc=$b->editInput($_GET["edit"],$n,$Ba,$Y);if($Qc!="")echo$Qc;elseif(preg_match('~bool~',$n["type"]))echo"<input type='hidden'$Ba value='0'>"."<input type='checkbox'".(in_array(strtolower($Y),array('1','t','true','y','yes','on'))?" checked='checked'":"")."$Ba value='1'>";elseif($n["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$n["length"],$B);foreach($B[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ta=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$D][$s]' value='".(1<<$s)."'".($Ta?' checked':'')."$Ld>".h($b->editVal($X,$n)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$n["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$D'$Ld>";elseif(($tf=preg_match('~text|lob~',$n["type"]))||preg_match("~\n~",$Y)){if($tf&&$x!="sqlite")$Ba.=" cols='50' rows='12'";else{$M=min(12,substr_count($Y,"\n")+1);$Ba.=" cols='30' rows='$M'".($M==1?" style='height: 1.2em;'":"");}echo"<textarea$Ba>".h($Y).'</textarea>';}elseif($q=="json"||preg_match('~^jsonb?$~',$n["type"]))echo"<textarea$Ba cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$vd=(!preg_match('~int~',$n["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$n["length"],$A)?((preg_match("~binary~",$n["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$n["unsigned"]?1:0)):($Of[$n["type"]]?$Of[$n["type"]]+($n["unsigned"]?0:1):0));if($x=='sql'&&$g->server_info>=5.6&&preg_match('~time~',$n["type"]))$vd+=7;echo"<input".((!$zc||$q==="")&&preg_match('~(?<!o)int~',$n["type"])&&!preg_match('~\[\]~',$n["full_type"])?" type='number'":"")." value='".h($Y)."'".($vd?" data-maxlength='$vd'":"").(preg_match('~char|binary~',$n["type"])&&$vd>20?" size='40'":"")."$Ba>";}}}function
process_input($n){global$b;$u=bracket_escape($n["field"]);$q=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($n["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($n["auto_increment"]&&$Y=="")return
null;if($q=="orig")return($n["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($n["field"]):false);if($q=="NULL")return"NULL";if($n["type"]=="set")return
array_sum((array)$Y);if($q=="json"){$q="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$n["type"])&&ini_bool("file_uploads")){$cc=get_file("fields-$u");if(!is_string($cc))return
false;return
q($cc);}return$b->processInput($n,$Y,$q);}function
fields_from_edit(){global$_b;$K=array();foreach((array)$_POST["field_keys"]as$y=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$y];$_POST["fields"][$X]=$_POST["field_vals"][$y];}}foreach((array)$_POST["fields"]as$y=>$X){$D=bracket_escape($y,1);$K[$D]=array("field"=>$D,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($y==$_b->primary),);}return$K;}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$qc=false;foreach(table_status('',true)as$R=>$S){$D=$b->tableName($S);if(isset($S["Engine"])&&$D!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$J=$g->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$J||$J->fetch_row()){if(!$qc){echo"<ul>\n";$qc=true;}echo"<li>".($J?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$D</a>\n":"$D: <span class='error'>".error()."</span>\n");}}}echo($qc?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($Gc,$Ad=false){global$b;$K=$b->dumpHeaders($Gc,$Ad);$Wd=$_POST["output"];if($Wd!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Gc).".$K".($Wd!="file"&&!preg_match('~[^0-9a-z]~',$Wd)?".$Wd":""));session_write_close();ob_flush();flush();return$K;}function
dump_csv($L){foreach($L
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$L[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$L)."\r\n";}function
apply_sql_function($q,$e){return($q?($q=="unixepoch"?"DATETIME($e, '$q')":($q=="count distinct"?"COUNT(DISTINCT ":strtoupper("$q("))."$e)"):$e);}function
get_temp_dir(){$K=ini_get("upload_tmp_dir");if(!$K){if(function_exists('sys_get_temp_dir'))$K=sys_get_temp_dir();else{$dc=@tempnam("","");if(!$dc)return
false;$K=dirname($dc);unlink($dc);}}return$K;}function
password_file($lb){$dc=get_temp_dir()."/adminer.key";$K=@file_get_contents($dc);if($K||!$lb)return$K;$sc=@fopen($dc,"w");if($sc){chmod($dc,0660);$K=rand_string();fwrite($sc,$K);fclose($sc);}return$K;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$n,$uf){global$b,$aa;if(is_array($X)){$K="";foreach($X
as$Xc=>$W)$K.="<tr>".($X!=array_values($X)?"<th>".h($Xc):"")."<td>".select_value($W,$_,$n,$uf);return"<table cellspacing='0'>$K</table>";}if(!$_)$_=$b->selectLink($X,$n);if($_===null){if(is_mail($X))$_="mailto:$X";if($pe=is_url($X))$_=(($pe=="http"&&$aa)||preg_match('~WebKit|Firefox~i',$_SERVER["HTTP_USER_AGENT"])?$X:"https://www.adminer.org/redirect/?url=".urlencode($X));}$K=$b->editVal($X,$n);if($K!==null){if($K==="")$K="&nbsp;";elseif(!is_utf8($K))$K="\0";elseif($uf!=""&&is_shortable($n))$K=shorten_utf8($K,max(0,+$uf));else$K=h($K);}return$b->selectVal($K,$_,$n,$X);}function
is_mail($Ib){$za='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$zb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$de="$za+(\\.$za+)*@($zb?\\.)+$zb";return
is_string($Ib)&&preg_match("(^$de(,\\s*$de)*\$)i",$Ib);}function
is_url($Q){$zb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($zb?\\.)+$zb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$A)?strtolower($A[1]):"");}function
is_shortable($n){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string|bytea~',$n["type"]);}function
count_rows($R,$Z,$Vc,$r){global$x;$I=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($Vc&&($x=="sql"||count($r)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$r).")$I":"SELECT COUNT(*)".($Vc?" FROM (SELECT 1$I$vc) x":$I));}function
slow_query($I){global$b,$Df;$l=$b->database();$xf=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($l==""||$h->select_db($l))){$cd=$h->result(connection_id());echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$Df,'&kill=',$cd,'\');
}, ',1000*$xf,');
</script>
';}else$h=null;ob_flush();flush();$K=@get_key_vals($I,$h,$xf);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($K);}function
get_token(){$ue=rand(1,1e6);return($ue^$_SESSION["token"]).":$ue";}function
verify_token(){list($Df,$ue)=explode(":",$_POST["token"]);return($ue^$_SESSION["token"])==$Df;}function
lzw_decompress($Ka){$xb=256;$La=8;$Za=array();$De=0;$Ee=0;for($s=0;$s<strlen($Ka);$s++){$De=($De<<8)+ord($Ka[$s]);$Ee+=8;if($Ee>=$La){$Ee-=$La;$Za[]=$De>>$Ee;$De&=(1<<$Ee)-1;$xb++;if($xb>>$La)$La++;}}$wb=range("\0","\xFF");$K="";foreach($Za
as$s=>$Ya){$Hb=$wb[$Ya];if(!isset($Hb))$Hb=$lg.$lg[0];$K.=$Hb;if($s)$wb[]=$lg.$Hb[0];$lg=$Hb;}return$K;}function
on_help($db,$Xe=0){return" onmouseover='helpMouseover(this, event, ".h($db).", $Xe);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$o,$L,$Wf){global$b,$x,$Df,$m;$of=$b->tableName(table_status1($a,true));page_header(($Wf?'Edit':'Insert'),$m,array("select"=>array($a,$of)),$of);if($L===false)echo"<p class='error'>".'No rows.'."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$o)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($o
as$D=>$n){echo"<tr><th>".$b->fieldName($n);$rb=$_GET["set"][bracket_escape($D)];if($rb===null){$rb=$n["default"];if($n["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$rb,$ye))$rb=$ye[1];}$Y=($L!==null?($L[$D]!=""&&$x=="sql"&&preg_match("~enum|set~",$n["type"])?(is_array($L[$D])?array_sum($L[$D]):+$L[$D]):$L[$D]):(!$Wf&&$n["auto_increment"]?"":(isset($_GET["select"])?false:$rb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$n);$q=($_POST["save"]?(string)$_POST["function"][$D]:($Wf&&$n["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$n["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$q="now";}input($n,$Y,$q);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($o){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Wf?'Save and continue edit'."' onclick='return !ajaxForm(this.form, \"".'Saving'.'...", this)':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($Wf?"<input type='submit' name='delete' value='".'Delete'."'".confirm().">\n":($_POST||!$o?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Df,'">
</form>
';}global$b,$g,$Ab,$Fb,$Nb,$m,$uc,$wc,$aa,$Pc,$x,$ba,$fd,$Kd,$ee,$hf,$_c,$Df,$Gf,$Of,$Vf,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$G=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$G[]=true;call_user_func_array('session_set_cookie_params',$G);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$fc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($Ff,$Gd=null){if(is_array($Ff)){$he=($Gd==1?0:1);$Ff=$Ff[$he];}$Ff=str_replace("%d","%s",$Ff);$Gd=format_number($Gd);return
sprintf($Ff,$Gd);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$he=array_search("SQL",$b->operators);if($he!==false)unset($b->operators[$he]);}function
dsn($Db,$V,$H){try{parent::__construct($Db,$V,$H);}catch(Exception$Rb){auth_error(h($Rb->getMessage()));}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=@$this->getAttribute(4);}function
query($I,$Pf=false){$J=parent::query($I);$this->error="";if(!$J){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($J);return$J;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result($J=null){if(!$J){$J=$this->_result;if(!$J)return
false;}if($J->columnCount()){$J->num_rows=$J->rowCount();return$J;}$this->affected_rows=$J->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($I,$n=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch();return$L[$n];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$L=(object)$this->getColumnMeta($this->_offset++);$L->orgtable=$L->table;$L->orgname=$L->name;$L->charsetnr=(in_array("blob",(array)$L->flags)?63:0);return$L;}}}$Ab=array();class
Min_SQL{var$_conn;function
__construct($g){$this->_conn=$g;}function
select($R,$N,$Z,$r,$E=array(),$z=1,$F=0,$me=false){global$b,$x;$Vc=(count($r)<count($N));$I=$b->selectQueryBuild($N,$Z,$r,$E,$z,$F);if(!$I)$I="SELECT".limit(($_GET["page"]!="last"&&+$z&&$r&&$Vc&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$N)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($r&&$Vc?"\nGROUP BY ".implode(", ",$r):"").($E?"\nORDER BY ".implode(", ",$E):""),($z!=""?+$z:null),($F?$z*$F:0),"\n");$ef=microtime(true);$K=$this->_conn->query($I);if($me)echo$b->selectQuery($I,format_time($ef));return$K;}function
delete($R,$se,$z=0){$I="FROM ".table($R);return
queries("DELETE".($z?limit1($I,$se):" $I$se"));}function
update($R,$P,$se,$z=0,$Qe="\n"){$cg=array();foreach($P
as$y=>$X)$cg[]="$y = $X";$I=table($R)." SET$Qe".implode(",$Qe",$cg);return
queries("UPDATE".($z?limit1($I,$se):" $I$se"));}function
insert($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":" DEFAULT VALUES"));}function
insertUpdate($R,$M,$ke){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Ab["sqlite"]="SQLite 3";$Ab["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$ie=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($dc){$this->_link=new
SQLite3($dc);$eg=$this->_link->version();$this->server_info=$eg["versionString"];}function
query($I){$J=@$this->_link->query($I);$this->error="";if(!$J){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($J->numColumns())return
new
Min_Result($J);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($I,$n=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetchArray();return$L[$n];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($J){$this->_result=$J;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$U=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($dc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($dc);}function
query($I,$Pf=false){$zd=($Pf?"unbufferedQuery":"query");$J=@$this->_link->$zd($I,SQLITE_BOTH,$m);$this->error="";if(!$J){$this->error=$m;return
false;}elseif($J===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($J);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($I,$n=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetch();return$L[$n];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($J){$this->_result=$J;if(method_exists($J,'numRows'))$this->num_rows=$J->numRows();}function
fetch_assoc(){$L=$this->_result->fetch(SQLITE_ASSOC);if(!$L)return
false;$K=array();foreach($L
as$y=>$X)$K[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$K;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$D=$this->_result->fieldName($this->_offset++);$de='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($de\\.)?$de\$~",$D,$A)){$R=($A[3]!=""?$A[3]:idf_unescape($A[2]));$D=($A[5]!=""?$A[5]:idf_unescape($A[4]));}return(object)array("name"=>$D,"orgname"=>$D,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($dc){$this->dsn(DRIVER.":$dc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");}function
select_db($dc){if(is_readable($dc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$dc)?$dc:dirname($_SERVER["SCRIPT_FILENAME"])."/$dc")." AS a")){parent::__construct($dc);return
true;}return
false;}function
multi_query($I){return$this->_result=$this->query($I);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$ke){$cg=array();foreach($M
as$P)$cg[]="(".implode(", ",$P).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($M))).") VALUES\n".implode(",\n",$cg));}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($I,$Z,$z,$Id=0,$Qe=" "){return" $I$Z".($z!==null?$Qe."LIMIT $z".($Id?" OFFSET $Id":""):"");}function
limit1($I,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($I,$Z,1):" $I$Z");}function
db_collation($l,$bb){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($k){return
array();}function
table_status($D=""){global$g;$K=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$L){$L["Oid"]=1;$L["Auto_increment"]="";$L["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($L["Name"]));$K[$L["Name"]]=$L;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$L)$K[$L["name"]]["Auto_increment"]=$L["seq"];return($D!=""?$K[$D]:$K);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$g;$K=array();$ke="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$L){$D=$L["name"];$U=strtolower($L["type"]);$rb=$L["dflt_value"];$K[$D]=array("field"=>$D,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$rb,$A)?str_replace("''","'",$A[1]):($rb=="NULL"?null:$rb)),"null"=>!$L["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$L["pk"],);if($L["pk"]){if($ke!="")$K[$ke]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$K[$D]["auto_increment"]=true;$ke=$D;}}$cf=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$cf,$B,PREG_SET_ORDER);foreach($B
as$A){$D=str_replace('""','"',preg_replace('~^"|"$~','',$A[1]));if($K[$D])$K[$D]["collation"]=trim($A[3],"'");}return$K;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$K=array();$cf=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$cf,$A)){$K[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$A[1],$B,PREG_SET_ORDER);foreach($B
as$A){$K[""]["columns"][]=idf_unescape($A[2]).$A[4];$K[""]["descs"][]=(preg_match('~DESC~i',$A[5])?'1':null);}}if(!$K){foreach(fields($R)as$D=>$n){if($n["primary"])$K[""]=array("type"=>"PRIMARY","columns"=>array($D),"lengths"=>array(),"descs"=>array(null));}}$df=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$h);foreach(get_rows("PRAGMA index_list(".table($R).")",$h)as$L){$D=$L["name"];$v=array("type"=>($L["unique"]?"UNIQUE":"INDEX"));$v["lengths"]=array();$v["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($D).")",$h)as$He){$v["columns"][]=$He["name"];$v["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($D).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$df[$D],$ye)){preg_match_all('/("[^"]*+")+( DESC)?/',$ye[2],$B);foreach($B[2]as$y=>$X){if($X)$v["descs"][$y]='1';}}if(!$K[""]||$v["type"]!="UNIQUE"||$v["columns"]!=$K[""]["columns"]||$v["descs"]!=$K[""]["descs"]||!preg_match("~^sqlite_~",$D))$K[$D]=$v;}return$K;}function
foreign_keys($R){$K=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$L){$p=&$K[$L["id"]];if(!$p)$p=$L;$p["source"][]=$L["from"];$p["target"][]=$L["to"];}return$K;}function
view($D){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($D))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($l){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($D){global$g;$Xb="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Xb)\$~",$D)){$g->error=sprintf('Please use one of the extensions %s.',str_replace("|",", ",$Xb));return
false;}return
true;}function
create_database($l,$d){global$g;if(file_exists($l)){$g->error='File exists.';return
false;}if(!check_sqlite_name($l))return
false;try{$_=new
Min_SQLite($l);}catch(Exception$Rb){$g->error=$Rb->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($k){global$g;$g->__construct(":memory:");foreach($k
as$l){if(!@unlink($l)){$g->error='File exists.';return
false;}}return
true;}function
rename_database($D,$d){global$g;if(!check_sqlite_name($D))return
false;$g->__construct(":memory:");$g->error='File exists.';return@rename(DB,$D);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$D,$o,$lc,$eb,$Mb,$d,$Da,$be){$Zf=($R==""||$lc);foreach($o
as$n){if($n[0]!=""||!$n[1]||$n[2]){$Zf=true;break;}}$c=array();$Vd=array();foreach($o
as$n){if($n[1]){$c[]=($Zf?$n[1]:"ADD ".implode($n[1]));if($n[0]!="")$Vd[$n[0]]=$n[1][0];}}if(!$Zf){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$D&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($D)))return
false;}elseif(!recreate_table($R,$D,$c,$Vd,$lc))return
false;if($Da)queries("UPDATE sqlite_sequence SET seq = $Da WHERE name = ".q($D));return
true;}function
recreate_table($R,$D,$o,$Vd,$lc,$w=array()){if($R!=""){if(!$o){foreach(fields($R)as$y=>$n){$o[]=process_field($n,$n);$Vd[$y]=idf_escape($y);}}$le=false;foreach($o
as$n){if($n[6])$le=true;}$Cb=array();foreach($w
as$y=>$X){if($X[2]=="DROP"){$Cb[$X[1]]=true;unset($w[$y]);}}foreach(indexes($R)as$ad=>$v){$f=array();foreach($v["columns"]as$y=>$e){if(!$Vd[$e])continue
2;$f[]=$Vd[$e].($v["descs"][$y]?" DESC":"");}if(!$Cb[$ad]){if($v["type"]!="PRIMARY"||!$le)$w[]=array($v["type"],$ad,$f);}}foreach($w
as$y=>$X){if($X[0]=="PRIMARY"){unset($w[$y]);$lc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$ad=>$p){foreach($p["source"]as$y=>$e){if(!$Vd[$e])continue
2;$p["source"][$y]=idf_unescape($Vd[$e]);}if(!isset($lc[" $ad"]))$lc[]=" ".format_foreign_key($p);}queries("BEGIN");}foreach($o
as$y=>$n)$o[$y]="  ".implode($n);$o=array_merge($o,array_filter($lc));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$D":$D)." (\n".implode(",\n",$o)."\n)"))return
false;if($R!=""){if($Vd&&!queries("INSERT INTO ".table("adminer_$D")." (".implode(", ",$Vd).") SELECT ".implode(", ",array_map('idf_escape',array_keys($Vd)))." FROM ".table($R)))return
false;$Mf=array();foreach(triggers($R)as$Kf=>$yf){$Jf=trigger($Kf);$Mf[]="CREATE TRIGGER ".idf_escape($Kf)." ".implode(" ",$yf)." ON ".table($D)."\n$Jf[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$D")." RENAME TO ".table($D));if(!alter_indexes($D,$w))return
false;foreach($Mf
as$Jf){if(!queries($Jf))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$D,$f){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($D!=""?$D:uniqid($R."_"))." ON ".table($R)." $f";}function
alter_indexes($R,$c){foreach($c
as$ke){if($ke[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($gg){return
apply_queries("DROP VIEW",$gg);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$gg,$rf){return
false;}function
trigger($D){global$g;if($D=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$u='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$Lf=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$u\\s*(".implode("|",$Lf["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($u))?\\s+ON\\s*$u\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($D)),$A);$Hd=$A[3];return
array("Timing"=>strtoupper($A[1]),"Event"=>strtoupper($A[2]).($Hd?" OF":""),"Of"=>($Hd[0]=='`'||$Hd[0]=='"'?idf_unescape($Hd):$Hd),"Trigger"=>$D,"Statement"=>$A[4],);}function
triggers($R){$K=array();$Lf=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$L){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$Lf["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$L["sql"],$A);$K[$L["name"]]=array($A[1],$A[2]);}return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$I){return$g->query("EXPLAIN QUERY PLAN $I");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ke){return
true;}function
create_sql($R,$Da){global$g;$K=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$D=>$v){if($D=='')continue;$K.=";\n\n".index_sql($R,$v['type'],$D,"(".implode(", ",array_map('idf_escape',$v['columns'])).")");}return$K;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($j){}function
trigger_sql($R,$if){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$g;$K=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$K[$y]=$g->result("PRAGMA $y");return$K;}function
show_status(){$K=array();foreach(get_vals("PRAGMA compile_options")as$Qd){list($y,$X)=explode("=",$Qd,2);$K[$y]=$X;}return$K;}function
convert_field($n){}function
unconvert_field($n,$K){return$K;}function
support($ac){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$ac);}$x="sqlite";$Of=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$hf=array_keys($Of);$Vf=array();$Pd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$uc=array("hex","length","lower","round","unixepoch","upper");$wc=array("avg","count","count distinct","group_concat","max","min","sum");$Fb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Ab["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$ie=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Pb,$m){if(ini_bool("html_errors"))$m=html_entity_decode(strip_tags($m));$m=preg_replace('~^[^:]*: ~','',$m);$this->error=$m;}function
connect($O,$V,$H){global$b;$l=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($H,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($l!=""?addcslashes($l,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$l!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$eg=pg_version($this->_link);$this->server_info=$eg["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($j){global$b;if($j==$b->database())return$this->_database;$K=@pg_connect("$this->_string dbname='".addcslashes($j,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($K)$this->_link=$K;return$K;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($I,$Pf=false){$J=@pg_query($this->_link,$I);$this->error="";if(!$J){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($J)){$this->affected_rows=pg_affected_rows($J);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$n=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
pg_fetch_result($J->_result,0,$n);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($J){$this->_result=$J;$this->num_rows=pg_num_rows($J);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$K=new
stdClass;if(function_exists('pg_field_table'))$K->orgtable=pg_field_table($this->_result,$e);$K->name=pg_field_name($this->_result,$e);$K->orgname=$K->name;$K->type=pg_field_type($this->_result,$e);$K->charsetnr=($K->type=="bytea"?63:0);return$K;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($O,$V,$H){global$b;$l=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($l!=""?addcslashes($l,"'\\"):"postgres")."'",$V,$H);return
true;}function
select_db($j){global$b;return($b->database()==$j);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$ke){global$g;foreach($M
as$P){$Wf=array();$Z=array();foreach($P
as$y=>$X){$Wf[]="$y = $X";if(isset($ke[idf_unescape($y)]))$Z[]="$y = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$Wf)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).")")))return
false;}return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b,$Of,$hf;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2])){if($g->server_info>=9){$g->query("SET application_name = 'Adminer'");if($g->server_info>=9.2){$hf['Strings'][]="json";$Of["json"]=4294967295;if($g->server_info>=9.4){$hf['Strings'][]="jsonb";$Of["jsonb"]=4294967295;}}}return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database WHERE has_database_privilege(datname, 'CONNECT') ORDER BY datname");}function
limit($I,$Z,$z,$Id=0,$Qe=" "){return" $I$Z".($z!==null?$Qe."LIMIT $z".($Id?" OFFSET $Id":""):"");}function
limit1($I,$Z){return" $I$Z";}function
db_collation($l,$bb){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){$I="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$I.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$I.="
ORDER BY 1";return
get_key_vals($I);}function
count_tables($k){return
array();}function
table_status($D=""){$K=array();foreach(get_rows("SELECT c.relname AS \"Name\", CASE c.relkind WHEN 'r' THEN 'table' WHEN 'm' THEN 'materialized view' ELSE 'view' END AS \"Engine\", pg_relation_size(c.oid) AS \"Data_length\", pg_total_relation_size(c.oid) - pg_relation_size(c.oid) AS \"Index_length\", obj_description(c.oid, 'pg_class') AS \"Comment\", c.relhasoids::int AS \"Oid\", c.reltuples as \"Rows\", n.nspname
FROM pg_class c
JOIN pg_namespace n ON(n.nspname = current_schema() AND n.oid = c.relnamespace)
WHERE relkind IN ('r', 'm', 'v')
".($D!=""?"AND relname = ".q($D):"ORDER BY c.oid"))as$L)$K[$L["Name"]]=$L;return($D!=""?$K[$D]:$K);}function
is_view($S){return
in_array($S["Engine"],array("view","materialized view"));}function
fk_support($S){return
true;}function
fields($R){$K=array();$va=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$L){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$L["full_type"],$A);list(,$U,$jd,$L["length"],$qa,$xa)=$A;$L["length"].=$xa;$Sa=$U.$qa;if(isset($va[$Sa])){$L["type"]=$va[$Sa];$L["full_type"]=$L["type"].$jd.$xa;}else{$L["type"]=$U;$L["full_type"]=$L["type"].$jd.$qa.$xa;}$L["null"]=!$L["attnotnull"];$L["auto_increment"]=preg_match('~^nextval\\(~i',$L["default"]);$L["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$L["default"],$A))$L["default"]=($A[1][0]=="'"?idf_unescape($A[1]):$A[1]).$A[2];$K[$L["field"]]=$L;}return$K;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$K=array();$pf=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $pf AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption , (indpred IS NOT NULL)::int as indispartial FROM pg_index i, pg_class ci WHERE i.indrelid = $pf AND ci.oid = i.indexrelid",$h)as$L){$ze=$L["relname"];$K[$ze]["type"]=($L["indispartial"]?"INDEX":($L["indisprimary"]?"PRIMARY":($L["indisunique"]?"UNIQUE":"INDEX")));$K[$ze]["columns"]=array();foreach(explode(" ",$L["indkey"])as$Lc)$K[$ze]["columns"][]=$f[$Lc];$K[$ze]["descs"]=array();foreach(explode(" ",$L["indoption"])as$Mc)$K[$ze]["descs"][]=($Mc&1?'1':null);$K[$ze]["lengths"]=array();}return$K;}function
foreign_keys($R){global$Kd;$K=array();foreach(get_rows("SELECT conname, condeferrable::int AS deferrable, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$L){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$L['definition'],$A)){$L['source']=array_map('trim',explode(',',$A[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$A[2],$qd)){$L['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$qd[2]));$L['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$qd[4]));}$L['target']=array_map('trim',explode(',',$A[3]));$L['on_delete']=(preg_match("~ON DELETE ($Kd)~",$A[4],$qd)?$qd[1]:'NO ACTION');$L['on_update']=(preg_match("~ON UPDATE ($Kd)~",$A[4],$qd)?$qd[1]:'NO ACTION');$K[$L['conname']]=$L;}}return$K;}function
view($D){global$g;return
array("select"=>trim($g->result("SELECT pg_get_viewdef(".q($D).")")));}function
collations(){return
array();}function
information_schema($l){return($l=="information_schema");}function
error(){global$g;$K=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$K,$A))$K=$A[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($A[3]).'})(.*)~','\\1<b>\\2</b>',$A[2]).$A[4];return
nl_br($K);}function
create_database($l,$d){return
queries("CREATE DATABASE ".idf_escape($l).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($k){global$g;$g->close();return
apply_queries("DROP DATABASE",$k,'idf_escape');}function
rename_database($D,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($D));}function
auto_increment(){return"";}function
alter_table($R,$D,$o,$lc,$eb,$Mb,$d,$Da,$be){$c=array();$re=array();foreach($o
as$n){$e=idf_escape($n[0]);$X=$n[1];if(!$X)$c[]="DROP $e";else{$bg=$X[5];unset($X[5]);if(isset($X[6])&&$n[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($n[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($e!=$X[0])$re[]="ALTER TABLE ".table($R)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($n[0]!=""||$bg!="")$re[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($bg!=""?substr($bg,9):"''");}}$c=array_merge($c,$lc);if($R=="")array_unshift($re,"CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($re,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$D)$re[]="ALTER TABLE ".table($R)." RENAME TO ".table($D);if($R!=""||$eb!="")$re[]="COMMENT ON TABLE ".table($D)." IS ".q($eb);if($Da!=""){}foreach($re
as$I){if(!queries($I))return
false;}return
true;}function
alter_indexes($R,$c){$lb=array();$Bb=array();$re=array();foreach($c
as$X){if($X[0]!="INDEX")$lb[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$Bb[]=idf_escape($X[1]);else$re[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($lb)array_unshift($re,"ALTER TABLE ".table($R).implode(",",$lb));if($Bb)array_unshift($re,"DROP INDEX ".implode(", ",$Bb));foreach($re
as$I){if(!queries($I))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($gg){return
drop_tables($gg);}function
drop_tables($T){foreach($T
as$R){$ff=table_status($R);if(!queries("DROP ".strtoupper($ff["Engine"])." ".table($R)))return
false;}return
true;}function
move_tables($T,$gg,$rf){foreach(array_merge($T,$gg)as$R){$ff=table_status($R);if(!queries("ALTER ".strtoupper($ff["Engine"])." ".table($R)." SET SCHEMA ".idf_escape($rf)))return
false;}return
true;}function
trigger($D,$R=null){if($D=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");if($R===null)$R=$_GET['trigger'];$M=get_rows('SELECT t.trigger_name AS "Trigger", t.action_timing AS "Timing", (SELECT STRING_AGG(event_manipulation, \' OR \') FROM information_schema.triggers WHERE event_object_table = t.event_object_table AND trigger_name = t.trigger_name ) AS "Events", t.event_manipulation AS "Event", \'FOR EACH \' || t.action_orientation AS "Type", t.action_statement AS "Statement" FROM information_schema.triggers t WHERE t.event_object_table = '.q($R).' AND t.trigger_name = '.q($D));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$L)$K[$L["trigger_name"]]=array($L["action_timing"],$L["event_manipulation"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($g,$I){return$g->query("EXPLAIN $I");}function
found_rows($S,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$ye))return$ye[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($Je){global$g,$Of,$hf;$K=$g->query("SET search_path TO ".idf_escape($Je));foreach(types()as$U){if(!isset($Of[$U])){$Of[$U]=0;$hf['User types'][]=$U;}}return$K;}function
create_sql($R,$Da){global$g;$K='';$Fe=array();$Se=array();$ff=table_status($R);$o=fields($R);$w=indexes($R);ksort($w);$jc=foreign_keys($R);ksort($jc);$Mf=triggers($R);if(!$ff||empty($o))return
false;$K="CREATE TABLE ".idf_escape($ff['nspname']).".".idf_escape($ff['Name'])." (\n    ";foreach($o
as$bc=>$n){$ae=idf_escape($n['field']).' '.$n['full_type'].(is_null($n['default'])?"":" DEFAULT $n[default]").($n['attnotnull']?" NOT NULL":"");$Fe[]=$ae;if(preg_match('~nextval\(\'([^\']+)\'\)~',$n['default'],$B)){$Re=$B[1];$bf=reset(get_rows("SELECT * FROM $Re"));$Se[]="CREATE SEQUENCE $Re INCREMENT $bf[increment_by] MINVALUE $bf[min_value] MAXVALUE $bf[max_value] START ".($Da?$bf['last_value']:1)." CACHE $bf[cache_value];";}}if(!empty($Se))$K=implode("\n\n",$Se)."\n\n$K";foreach($w
as$Jc=>$v){switch($v['type']){case'UNIQUE':$Fe[]="CONSTRAINT ".idf_escape($Jc)." UNIQUE (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;case'PRIMARY':$Fe[]="CONSTRAINT ".idf_escape($Jc)." PRIMARY KEY (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;}}foreach($jc
as$ic=>$hc)$Fe[]="CONSTRAINT ".idf_escape($ic)." $hc[definition] ".($hc['deferrable']?'DEFERRABLE':'NOT DEFERRABLE');$K.=implode(",\n    ",$Fe)."\n) WITH (oids = ".($ff['Oid']?'true':'false').");";foreach($w
as$Jc=>$v){if($v['type']=='INDEX')$K.="\n\nCREATE INDEX ".idf_escape($Jc)." ON ".idf_escape($ff['nspname']).".".idf_escape($ff['Name'])." USING btree (".implode(', ',array_map('idf_escape',$v['columns'])).");";}if($ff['Comment'])$K.="\n\nCOMMENT ON TABLE ".idf_escape($ff['nspname']).".".idf_escape($ff['Name'])." IS ".q($ff['Comment']).";";foreach($o
as$bc=>$n){if($n['comment'])$K.="\n\nCOMMENT ON COLUMN ".idf_escape($ff['nspname']).".".idf_escape($ff['Name']).".".idf_escape($bc)." IS ".q($n['comment']).";";}foreach($Mf
as$If=>$Hf){$Jf=trigger($If,$ff['Name']);$K.="\n\nCREATE TRIGGER ".idf_escape($Jf['Trigger'])." $Jf[Timing] $Jf[Events] ON ".idf_escape($ff["nspname"]).".".idf_escape($ff['Name'])." $Jf[Type] $Jf[Statement];";}return
rtrim($K,';');}function
trigger_sql($R,$if){$K="";return
false;}function
use_sql($j){return"\connect ".idf_escape($j);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($n){}function
unconvert_field($n,$K){return$K;}function
support($ac){global$g;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($g->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col|kill|dump)$~',$ac);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){global$g;return$g->result("SHOW max_connections");}$x="pgsql";$Of=array();$hf=array();foreach(array('Numbers'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Date and time'=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),'Strings'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binary'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Network'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometry'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$Of+=$X;$hf[$y]=array_keys($X);}$Vf=array();$Pd=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$uc=array("char_length","lower","round","to_hex","to_timestamp","upper");$wc=array("avg","count","count distinct","max","min","sum");$Fb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Ab["oracle"]="Oracle";if(isset($_GET["oracle"])){$ie=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($Pb,$m){if(ini_bool("html_errors"))$m=html_entity_decode(strip_tags($m));$m=preg_replace('~^[^:]*: ~','',$m);$this->error=$m;}function
connect($O,$V,$H){$this->_link=@oci_new_connect($V,$H,$O,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$m=oci_error();$this->error=$m["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($j){return
true;}function
query($I,$Pf=false){$J=oci_parse($this->_link,$I);$this->error="";if(!$J){$m=oci_error($this->_link);$this->errno=$m["code"];$this->error=$m["message"];return
false;}set_error_handler(array($this,'_error'));$K=@oci_execute($J);restore_error_handler();if($K){if(oci_num_fields($J))return
new
Min_Result($J);$this->affected_rows=oci_num_rows($J);}return$K;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$n=1){$J=$this->query($I);if(!is_object($J)||!oci_fetch($J->_result))return
false;return
oci_result($J->_result,$n);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$y=>$X){if(is_a($X,'OCI-Lob'))$L[$y]=$X->load();}return$L;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$K=new
stdClass;$K->name=oci_field_name($this->_result,$e);$K->orgname=$K->name;$K->type=oci_field_type($this->_result,$e);$K->charsetnr=(preg_match("~raw|blob|bfile~",$K->type)?63:0);return$K;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($O,$V,$H){$this->dsn("oci:dbname=//$O;charset=AL32UTF8",$V,$H);return
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
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($I,$Z,$z,$Id=0,$Qe=" "){return($Id?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $I$Z) t WHERE rownum <= ".($z+$Id).") WHERE rnum > $Id":($z!==null?" * FROM (SELECT $I$Z) WHERE rownum <= ".($z+$Id):" $I$Z"));}function
limit1($I,$Z){return" $I$Z";}function
db_collation($l,$bb){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($k){return
array();}function
table_status($D=""){$K=array();$Le=q($D);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($D!=""?" AND table_name = $Le":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($D!=""?" WHERE view_name = $Le":"")."
ORDER BY 1")as$L){if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$L){$U=$L["DATA_TYPE"];$jd="$L[DATA_PRECISION],$L[DATA_SCALE]";if($jd==",")$jd=$L["DATA_LENGTH"];$K[$L["COLUMN_NAME"]]=array("field"=>$L["COLUMN_NAME"],"full_type"=>$U.($jd?"($jd)":""),"type"=>strtolower($U),"length"=>$jd,"default"=>$L["DATA_DEFAULT"],"null"=>($L["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$K;}function
indexes($R,$h=null){$K=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$L){$Jc=$L["INDEX_NAME"];$K[$Jc]["type"]=($L["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($L["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$K[$Jc]["columns"][]=$L["COLUMN_NAME"];$K[$Jc]["lengths"][]=($L["CHAR_LENGTH"]&&$L["CHAR_LENGTH"]!=$L["COLUMN_LENGTH"]?$L["CHAR_LENGTH"]:null);$K[$Jc]["descs"][]=($L["DESCEND"]?'1':null);}return$K;}function
view($D){$M=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($D));return
reset($M);}function
collations(){return
array();}function
information_schema($l){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$I){$g->query("EXPLAIN PLAN FOR $I");return$g->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$D,$o,$lc,$eb,$Mb,$d,$Da,$be){$c=$Bb=array();foreach($o
as$n){$X=$n[1];if($X&&$n[0]!=""&&idf_escape($n[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($n[0])." TO $X[0]");if($X)$c[]=($R!=""?($n[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$Bb[]=idf_escape($n[0]);}if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$Bb||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$Bb).")"))&&($R==$D||queries("ALTER TABLE ".table($R)." RENAME TO ".table($D)));}function
foreign_keys($R){$K=array();$I="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($R);foreach(get_rows($I)as$L)$K[$L['NAME']]=array("db"=>$L['DEST_DB'],"table"=>$L['DEST_TABLE'],"source"=>array($L['SRC_COLUMN']),"target"=>array($L['DEST_COLUMN']),"on_delete"=>$L['ON_DELETE'],"on_update"=>null,);return$K;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($gg){return
apply_queries("DROP VIEW",$gg);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Ke){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Ke));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$M=get_rows('SELECT * FROM v$instance');return
reset($M);}function
convert_field($n){}function
unconvert_field($n,$K){return$K;}function
support($ac){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$ac);}$x="oracle";$Of=array();$hf=array();foreach(array('Numbers'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Date and time'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Strings'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binary'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$Of+=$X;$hf[$y]=array_keys($X);}$Vf=array();$Pd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$uc=array("length","lower","round","upper");$wc=array("avg","count","count distinct","max","min","sum");$Fb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Ab["mssql"]="MS SQL";if(isset($_GET["mssql"])){$ie=array("SQLSRV","MSSQL","PDO_DBLIB");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$m){$this->errno=$m["code"];$this->error.="$m[message]\n";}$this->error=rtrim($this->error);}function
connect($O,$V,$H){$this->_link=@sqlsrv_connect($O,array("UID"=>$V,"PWD"=>$H,"CharacterSet"=>"UTF-8"));if($this->_link){$Nc=sqlsrv_server_info($this->_link);$this->server_info=$Nc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($j){return$this->query("USE ".idf_escape($j));}function
query($I,$Pf=false){$J=sqlsrv_query($this->_link,$I);$this->error="";if(!$J){$this->_get_error();return
false;}return$this->store_result($J);}function
multi_query($I){$this->_result=sqlsrv_query($this->_link,$I);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($J=null){if(!$J)$J=$this->_result;if(!$J)return
false;if(sqlsrv_field_metadata($J))return
new
Min_Result($J);$this->affected_rows=sqlsrv_rows_affected($J);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($I,$n=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->fetch_row();return$L[$n];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$y=>$X){if(is_a($X,'DateTime'))$L[$y]=$X->format("Y-m-d H:i:s");}return$L;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$n=$this->_fields[$this->_offset++];$K=new
stdClass;$K->name=$n["Name"];$K->orgname=$n["Name"];$K->type=($n["Type"]==1?254:0);return$K;}function
seek($Id){for($s=0;$s<$Id;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($O,$V,$H){$this->_link=@mssql_connect($O,$V,$H);if($this->_link){$J=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$L=$J->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$L[0]] $L[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($j){return
mssql_select_db($j);}function
query($I,$Pf=false){$J=@mssql_query($I,$this->_link);$this->error="";if(!$J){$this->error=mssql_get_last_message();return
false;}if($J===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result->_result);}function
result($I,$n=0){$J=$this->query($I);if(!is_object($J))return
false;return
mssql_result($J->_result,0,$n);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($J){$this->_result=$J;$this->num_rows=mssql_num_rows($J);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$K=mssql_fetch_field($this->_result);$K->orgtable=$K->table;$K->orgname=$K->name;return$K;}function
seek($Id){mssql_data_seek($this->_result,$Id);}function
__destruct(){mssql_free_result($this->_result);}}}elseif(extension_loaded("pdo_dblib")){class
Min_DB
extends
Min_PDO{var$extension="PDO_DBLIB";function
connect($O,$V,$H){$this->dsn("dblib:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$V,$H);return
true;}function
select_db($j){return$this->query("USE ".idf_escape($j));}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$ke){foreach($M
as$P){$Wf=array();$Z=array();foreach($P
as$y=>$X){$Wf[]="$y = $X";if(isset($ke[idf_unescape($y)]))$Z[]="$y = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$P).")) AS source (c".implode(", c",range(1,count($P))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Wf)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT name FROM sys.databases WHERE name NOT IN ('master', 'tempdb', 'model', 'msdb')");}function
limit($I,$Z,$z,$Id=0,$Qe=" "){return($z!==null?" TOP (".($z+$Id).")":"")." $I$Z";}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($l,$bb){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($l));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($k){global$g;$K=array();foreach($k
as$l){$g->select_db($l);$K[$l]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$K;}function
table_status($D=""){$K=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$L){if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$L){$U=$L["type"];$jd=(preg_match("~char|binary~",$U)?$L["max_length"]:($U=="decimal"?"$L[precision],$L[scale]":""));$K[$L["name"]]=array("field"=>$L["name"],"full_type"=>$U.($jd?"($jd)":""),"type"=>$U,"length"=>$jd,"default"=>$L["default"],"null"=>$L["is_nullable"],"auto_increment"=>$L["is_identity"],"collation"=>$L["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$L["is_identity"],);}return$K;}function
indexes($R,$h=null){$K=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$h)as$L){$D=$L["name"];$K[$D]["type"]=($L["is_primary_key"]?"PRIMARY":($L["is_unique"]?"UNIQUE":"INDEX"));$K[$D]["lengths"]=array();$K[$D]["columns"][$L["key_ordinal"]]=$L["column_name"];$K[$D]["descs"][$L["key_ordinal"]]=($L["is_descending_key"]?'1':null);}return$K;}function
view($D){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($D))));}function
collations(){$K=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$K[preg_replace('~_.*~','',$d)][]=$d;return$K;}function
information_schema($l){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($l,$d){return
queries("CREATE DATABASE ".idf_escape($l).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($k){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$k)));}function
rename_database($D,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($D));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$D,$o,$lc,$eb,$Mb,$d,$Da,$be){$c=array();foreach($o
as$n){$e=idf_escape($n[0]);$X=$n[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($n[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($lc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($R).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($D)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$D)queries("EXEC sp_rename ".q(table($R)).", ".q($D));if($lc)$c[""]=$lc;foreach($c
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($D)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$v=array();$Bb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Bb[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$Bb||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$Bb)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$I){$g->query("SET SHOWPLAN_ALL ON");$K=$g->query($I);$g->query("SET SHOWPLAN_ALL OFF");return$K;}function
found_rows($S,$Z){}function
foreign_keys($R){$K=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$L){$p=&$K[$L["FK_NAME"]];$p["table"]=$L["PKTABLE_NAME"];$p["source"][]=$L["FKCOLUMN_NAME"];$p["target"][]=$L["PKCOLUMN_NAME"];}return$K;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($gg){return
queries("DROP VIEW ".implode(", ",array_map('table',$gg)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$gg,$rf){return
apply_queries("ALTER SCHEMA ".idf_escape($rf)." TRANSFER",array_merge($T,$gg));}function
trigger($D){if($D=="")return
array();$M=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($D));$K=reset($M);if($K)$K["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$K["text"]);return$K;}function
triggers($R){$K=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$L)$K[$L["name"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($Je){return
true;}function
use_sql($j){return"USE ".idf_escape($j);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($n){}function
unconvert_field($n,$K){return$K;}function
support($ac){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$ac);}$x="mssql";$Of=array();$hf=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Date and time'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Strings'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binary'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$Of+=$X;$hf[$y]=array_keys($X);}$Vf=array();$Pd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$uc=array("len","lower","round","upper");$wc=array("avg","count","count distinct","max","min","sum");$Fb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Ab['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$ie=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$V,$H){$this->_link=ibase_connect($O,$V,$H);if($this->_link){$Yf=explode(':',$O);$this->service_link=ibase_service_attach($Yf[0],$V,$H);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($j){return($j=="domain");}function
query($I,$Pf=false){$J=ibase_query($I,$this->_link);if(!$J){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($J===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$n=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;$L=$J->fetch_row();return$L[$n];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($J){$this->_result=$J;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$n=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$n['name'],'orgname'=>$n['name'],'type'=>$n['type'],'charsetnr'=>$n['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
get_databases($kc){return
array("domain");}function
limit($I,$Z,$z,$Id=0,$Qe=" "){$K='';$K.=($z!==null?$Qe."FIRST $z".($Id?" SKIP $Id":""):"");$K.=" $I$Z";return$K;}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($l,$bb){}function
engines(){return
array();}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
tables_list(){global$g;$I='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$J=ibase_query($g->_link,$I);$K=array();while($L=ibase_fetch_assoc($J))$K[$L['RDB$RELATION_NAME']]='table';ksort($K);return$K;}function
count_tables($k){return
array();}function
table_status($D="",$Zb=false){global$g;$K=array();$ob=tables_list();foreach($ob
as$v=>$X){$v=trim($v);$K[$v]=array('Name'=>$v,'Engine'=>'standard',);if($D==$v)return$K[$v];}return$K;}function
is_view($S){return
false;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){global$g;$K=array();$I='SELECT r.RDB$FIELD_NAME AS field_name,
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
ORDER BY r.RDB$FIELD_POSITION';$J=ibase_query($g->_link,$I);while($L=ibase_fetch_assoc($J))$K[trim($L['FIELD_NAME'])]=array("field"=>trim($L["FIELD_NAME"]),"full_type"=>trim($L["FIELD_TYPE"]),"type"=>trim($L["FIELD_SUB_TYPE"]),"default"=>trim($L['FIELD_DEFAULT_VALUE']),"null"=>(trim($L["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($L["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($L["FIELD_DESCRIPTION"]),);return$K;}function
indexes($R,$h=null){$K=array();return$K;}function
foreign_keys($R){return
array();}function
collations(){return
array();}function
information_schema($l){return
false;}function
error(){global$g;return
h($g->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Je){return
true;}function
support($ac){return
preg_match("~^(columns|sql|status|table)$~",$ac);}$x="firebird";$Pd=array("=");$uc=array();$wc=array();$Fb=array();}$Ab["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$ie=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($j){return($j=="domain");}function
query($I,$Pf=false){$G=array('SelectExpression'=>$I,'ConsistentRead'=>'true');if($this->next)$G['NextToken']=$this->next;$J=sdb_request_all('Select','Item',$G,$this->timeout);if($J===false)return$J;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$I)){$lf=0;foreach($J
as$Wc)$lf+=$Wc->Attribute->Value;$J=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$lf,))));}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($J){foreach($J
as$Wc){$L=array();if($Wc->Name!='')$L['itemName()']=(string)$Wc->Name;foreach($Wc->Attribute
as$Aa){$D=$this->_processValue($Aa->Name);$Y=$this->_processValue($Aa->Value);if(isset($L[$D])){$L[$D]=(array)$L[$D];$L[$D][]=$Y;}else$L[$D]=$Y;}$this->_rows[]=$L;foreach($L
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($Hb){return(is_object($Hb)&&$Hb['encoding']=='base64'?base64_decode($Hb):(string)$Hb);}function
fetch_assoc(){$L=current($this->_rows);if(!$L)return$L;$K=array();foreach($this->_rows[0]as$y=>$X)$K[$y]=$L[$y];next($this->_rows);return$K;}function
fetch_row(){$K=$this->fetch_assoc();if(!$K)return$K;return
array_values($K);}function
fetch_field(){$bd=array_keys($this->_rows[0]);return(object)array('name'=>$bd[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$ke="itemName()";function
_chunkRequest($Hc,$pa,$G,$Ub=array()){global$g;foreach(array_chunk($Hc,25)as$Va){$Zd=$G;foreach($Va
as$s=>$t){$Zd["Item.$s.ItemName"]=$t;foreach($Ub
as$y=>$X)$Zd["Item.$s.$y"]=$X;}if(!sdb_request($pa,$Zd))return
false;}$g->affected_rows=count($Hc);return
true;}function
_extractIds($R,$se,$z){$K=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$se,$B))$K=array_map('idf_unescape',$B[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$se.($z?" LIMIT 1":"")))as$Wc)$K[]=$Wc->Name;}return$K;}function
select($R,$N,$Z,$r,$E=array(),$z=1,$F=0,$me=false){global$g;$g->next=$_GET["next"];$K=parent::select($R,$N,$Z,$r,$E,$z,$F,$me);$g->next=0;return$K;}function
delete($R,$se,$z=0){return$this->_chunkRequest($this->_extractIds($R,$se,$z),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$P,$se,$z=0,$Qe="\n"){$sb=array();$Rc=array();$s=0;$Hc=$this->_extractIds($R,$se,$z);$t=idf_unescape($P["`itemName()`"]);unset($P["`itemName()`"]);foreach($P
as$y=>$X){$y=idf_unescape($y);if($X=="NULL"||($t!=""&&array($t)!=$Hc))$sb["Attribute.".count($sb).".Name"]=$y;if($X!="NULL"){foreach((array)$X
as$Xc=>$W){$Rc["Attribute.$s.Name"]=$y;$Rc["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Xc)$Rc["Attribute.$s.Replace"]="true";$s++;}}}$G=array('DomainName'=>$R);return(!$Rc||$this->_chunkRequest(($t!=""?array($t):$Hc),'BatchPutAttributes',$G,$Rc))&&(!$sb||$this->_chunkRequest($Hc,'BatchDeleteAttributes',$G,$sb));}function
insert($R,$P){$G=array("DomainName"=>$R);$s=0;foreach($P
as$D=>$Y){if($Y!="NULL"){$D=idf_unescape($D);if($D=="itemName()")$G["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$G["Attribute.$s.Name"]=$D;$G["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$G);}function
insertUpdate($R,$M,$ke){foreach($M
as$P){if(!$this->update($R,$P,"WHERE `itemName()` = ".q($P["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($ac){return
preg_match('~sql~',$ac);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($l,$bb){}function
tables_list(){global$g;$K=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$K[(string)$R]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$K;}function
table_status($D="",$Zb=false){$K=array();foreach(($D!=""?array($D=>true):tables_list())as$R=>$U){$L=array("Name"=>$R,"Auto_increment"=>"");if(!$Zb){$yd=sdb_request('DomainMetadata',array('DomainName'=>$R));if($yd){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$y=>$X)$L[$y]=(string)$yd->$X;}}if($D!="")return$L;$K[$R]=$L;}return$K;}function
explain($g,$I){}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($R){return
fields_from_edit();}function
foreign_keys($R){return
array();}function
table($u){return
idf_escape($u);}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
limit($I,$Z,$z,$Id=0,$Qe=" "){return" $I$Z".($z!==null?$Qe."LIMIT $z":"");}function
unconvert_field($n,$K){return$K;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$D,$o,$lc,$eb,$Mb,$d,$Da,$be){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$D)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($k){foreach($k
as$l)return
array($l=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($ua,$ob,$y,$we=false){$Ma=64;if(strlen($y)>$Ma)$y=pack("H*",$ua($y));$y=str_pad($y,$Ma,"\0");$Yc=$y^str_repeat("\x36",$Ma);$Zc=$y^str_repeat("\x5C",$Ma);$K=$ua($Zc.pack("H*",$ua($Yc.$ob)));if($we)$K=pack("H*",$K);return$K;}function
sdb_request($pa,$G=array()){global$b,$g;list($Ec,$G['AWSAccessKeyId'],$Me)=$b->credentials();$G['Action']=$pa;$G['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$G['Version']='2009-04-15';$G['SignatureVersion']=2;$G['SignatureMethod']='HmacSHA1';ksort($G);$I='';foreach($G
as$y=>$X)$I.='&'.rawurlencode($y).'='.rawurlencode($X);$I=str_replace('%7E','~',substr($I,1));$I.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$Ec)."\n/\n$I",$Me,true)));@ini_set('track_errors',1);$cc=@file_get_contents((preg_match('~^https?://~',$Ec)?$Ec:"http://$Ec"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$I,'ignore_errors'=>1,))));if(!$cc){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$mg=simplexml_load_string($cc);if(!$mg){$m=libxml_get_last_error();$g->error=$m->message;return
false;}if($mg->Errors){$m=$mg->Errors->Error;$g->error="$m->Message ($m->Code)";return
false;}$g->error='';$qf=$pa."Result";return($mg->$qf?$mg->$qf:true);}function
sdb_request_all($pa,$qf,$G=array(),$xf=0){$K=array();$ef=($xf?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$G['SelectExpression'],$A)?$A[1]:0);do{$mg=sdb_request($pa,$G);if(!$mg)break;foreach($mg->$qf
as$Hb)$K[]=$Hb;if($z&&count($K)>=$z){$_GET["next"]=$mg->NextToken;break;}if($xf&&microtime(true)-$ef>$xf)return
false;$G['NextToken']=$mg->NextToken;if($z)$G['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($K),$G['SelectExpression']);}while($mg->NextToken);return$K;}$x="simpledb";$Pd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$uc=array();$wc=array("count");$Fb=array(array("json"));}$Ab["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$ie=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($O,$V,$H){global$b;$l=$b->database();$Rd=array();if($V!=""){$Rd["username"]=$V;$Rd["password"]=$H;}if($l!="")$Rd["db"]=$l;try{$this->_link=@new
MongoClient("mongodb://$O",$Rd);return
true;}catch(Exception$Rb){$this->error=$Rb->getMessage();return
false;}}function
query($I){return
false;}function
select_db($j){try{$this->_db=$this->_link->selectDB($j);return
true;}catch(Exception$Rb){$this->error=$Rb->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($J){foreach($J
as$Wc){$L=array();foreach($Wc
as$y=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$y]=63;$L[$y]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$L;foreach($L
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$L=current($this->_rows);if(!$L)return$L;$K=array();foreach($this->_rows[0]as$y=>$X)$K[$y]=$L[$y];next($this->_rows);return$K;}function
fetch_row(){$K=$this->fetch_assoc();if(!$K)return$K;return
array_values($K);}function
fetch_field(){$bd=array_keys($this->_rows[0]);$D=$bd[$this->_offset++];return(object)array('name'=>$D,'charsetnr'=>$this->_charset[$D],);}}}class
Min_Driver
extends
Min_SQL{public$ke="_id";function
select($R,$N,$Z,$r,$E=array(),$z=1,$F=0,$me=false){$N=($N==array("*")?array():array_fill_keys($N,true));$Ze=array();foreach($E
as$X){$X=preg_replace('~ DESC$~','',$X,1,$kb);$Ze[$X]=($kb?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($R)->find(array(),$N)->sort($Ze)->limit(+$z)->skip($F*$z));}function
insert($R,$P){try{$K=$this->_conn->_db->selectCollection($R)->insert($P);$this->_conn->errno=$K['code'];$this->_conn->error=$K['err'];$this->_conn->last_id=$P['_id'];return!$K['err'];}catch(Exception$Rb){$this->_conn->error=$Rb->getMessage();return
false;}}}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
error(){global$g;return
h($g->error);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases($kc){global$g;$K=array();$pb=$g->_link->listDBs();foreach($pb['databases']as$l)$K[]=$l['name'];return$K;}function
collations(){return
array();}function
db_collation($l,$bb){}function
count_tables($k){global$g;$K=array();foreach($k
as$l)$K[$l]=count($g->_link->selectDB($l)->getCollectionNames(true));return$K;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
table_status($D="",$Zb=false){$K=array();foreach(tables_list()as$R=>$U){$K[$R]=array("Name"=>$R);if($D==$R)return$K[$R];}return$K;}function
information_schema(){}function
is_view($S){}function
drop_databases($k){global$g;foreach($k
as$l){$Ce=$g->_link->selectDB($l)->drop();if(!$Ce['ok'])return
false;}return
true;}function
indexes($R,$h=null){global$g;$K=array();foreach($g->_db->selectCollection($R)->getIndexInfo()as$v){$vb=array();foreach($v["key"]as$e=>$U)$vb[]=($U==-1?'1':null);$K[$v["name"]]=array("type"=>($v["name"]=="_id_"?"PRIMARY":($v["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($v["key"]),"lengths"=>array(),"descs"=>$vb,);}return$K;}function
fields($R){return
fields_from_edit();}function
convert_field($n){}function
unconvert_field($n,$K){return$K;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
found_rows($S,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($R,$D,$o,$lc,$eb,$Mb,$d,$Da,$be){global$g;if($R==""){$g->_db->createCollection($D);return
true;}}function
drop_tables($T){global$g;foreach($T
as$R){$Ce=$g->_db->selectCollection($R)->drop();if(!$Ce['ok'])return
false;}return
true;}function
truncate_tables($T){global$g;foreach($T
as$R){$Ce=$g->_db->selectCollection($R)->remove();if(!$Ce['ok'])return
false;}return
true;}function
alter_indexes($R,$c){global$g;foreach($c
as$X){list($U,$D,$P)=$X;if($P=="DROP")$K=$g->_db->command(array("deleteIndexes"=>$R,"index"=>$D));else{$f=array();foreach($P
as$e){$e=preg_replace('~ DESC$~','',$e,1,$kb);$f[$e]=($kb?-1:1);}$K=$g->_db->selectCollection($R)->ensureIndex($f,array("unique"=>($U=="UNIQUE"),"name"=>$D,));}if($K['errmsg']){$g->error=$K['errmsg'];return
false;}}return
true;}function
last_id(){global$g;return$g->last_id;}function
table($u){return$u;}function
idf_escape($u){return$u;}function
support($ac){return
preg_match("~database|indexes~",$ac);}$x="mongo";$Pd=array("=");$uc=array();$wc=array();$Fb=array(array("json"));}$Ab["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$ie=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($ce,$ib=array(),$zd='GET'){@ini_set('track_errors',1);$cc=@file_get_contents($this->_url.'/'.ltrim($ce,'/'),false,stream_context_create(array('http'=>array('method'=>$zd,'content'=>json_encode($ib),'ignore_errors'=>1,))));if(!$cc){$this->error=$php_errormsg;return$cc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$cc;return
false;}$K=json_decode($cc,true);if($K===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$hb=get_defined_constants(true);foreach($hb['json']as$D=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$D)){$this->error=$D;break;}}}}return$K;}function
query($ce,$ib=array(),$zd='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($ce,'/'),$ib,$zd);}function
connect($O,$V,$H){preg_match('~^(https?://)?(.*)~',$O,$A);$this->_url=($A[1]?$A[1]:"http://")."$V:$H@$A[2]/";$K=$this->query('');if($K)$this->server_info=$K['version']['number'];return(bool)$K;}function
select_db($j){$this->_db=$j;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
__construct($M){$this->num_rows=count($this->_rows);$this->_rows=$M;reset($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);next($this->_rows);return$K;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$N,$Z,$r,$E=array(),$z=1,$F=0,$me=false){global$b;$ob=array();$I="$R/_search";if($N!=array("*"))$ob["fields"]=$N;if($E){$Ze=array();foreach($E
as$ab){$ab=preg_replace('~ DESC$~','',$ab,1,$kb);$Ze[]=($kb?array($ab=>"desc"):$ab);}$ob["sort"]=$Ze;}if($z){$ob["size"]=+$z;if($F)$ob["from"]=($F*$z);}foreach($Z
as$X){list($ab,$Nd,$X)=explode(" ",$X,3);if($ab=="_id")$ob["query"]["ids"]["values"][]=$X;elseif($ab.$X!=""){$sf=array("term"=>array(($ab!=""?$ab:"_all")=>$X));if($Nd=="=")$ob["query"]["filtered"]["filter"]["and"][]=$sf;else$ob["query"]["filtered"]["query"]["bool"]["must"][]=$sf;}}if($ob["query"]&&!$ob["query"]["filtered"]["query"]&&!$ob["query"]["ids"])$ob["query"]["filtered"]["query"]=array("match_all"=>array());$ef=microtime(true);$Le=$this->_conn->query($I,$ob);if($me)echo$b->selectQuery("$I: ".print_r($ob,true),format_time($ef));if(!$Le)return
false;$K=array();foreach($Le['hits']['hits']as$Dc){$L=array();if($N==array("*"))$L["_id"]=$Dc["_id"];$o=$Dc['_source'];if($N!=array("*")){$o=array();foreach($N
as$y)$o[$y]=$Dc['fields'][$y];}foreach($o
as$y=>$X){if($ob["fields"])$X=$X[0];$L[$y]=(is_array($X)?json_encode($X):$X);}$K[]=$L;}return
new
Min_Result($K);}}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
support($ac){return
preg_match("~database|table|columns~",$ac);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases(){global$g;$K=$g->rootQuery('_aliases');if($K){$K=array_keys($K);sort($K,SORT_STRING);}return$K;}function
collations(){return
array();}function
db_collation($l,$bb){}function
engines(){return
array();}function
count_tables($k){global$g;$K=$g->query('_mapping');if($K)$K=array_map('count',$K);return$K;}function
tables_list(){global$g;$K=$g->query('_mapping');if($K)$K=array_fill_keys(array_keys($K[$g->_db]["mappings"]),'table');return$K;}function
table_status($D="",$Zb=false){global$g;$Le=$g->query("_search?search_type=count",array("facets"=>array("count_by_type"=>array("terms"=>array("field"=>"_type",)))),"POST");$K=array();if($Le){foreach($Le["facets"]["count_by_type"]["terms"]as$R){$K[$R["term"]]=array("Name"=>$R["term"],"Engine"=>"table","Rows"=>$R["count"],);if($D!=""&&$D==$R["term"])return$K[$D];}}return$K;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$g;$J=$g->query("$R/_mapping");$K=array();if($J){$pd=$J[$R]['properties'];if(!$pd)$pd=$J[$g->_db]['mappings'][$R]['properties'];if($pd){foreach($pd
as$D=>$n){$K[$D]=array("field"=>$D,"full_type"=>$n["type"],"type"=>$n["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($n["properties"]){unset($K[$D]["privileges"]["insert"]);unset($K[$D]["privileges"]["update"]);}}}}return$K;}function
foreign_keys($R){return
array();}function
table($u){return$u;}function
idf_escape($u){return$u;}function
convert_field($n){}function
unconvert_field($n,$K){return$K;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($l){global$g;return$g->rootQuery(urlencode($l),array(),'PUT');}function
drop_databases($k){global$g;return$g->rootQuery(urlencode(implode(',',$k)),array(),'DELETE');}function
drop_tables($T){global$g;$K=true;foreach($T
as$R)$K=$K&&$g->query(urlencode($R),array(),'DELETE');return$K;}$x="elastic";$Pd=array("=","query");$uc=array();$wc=array();$Fb=array(array("json"));}$Ab=array("server"=>"MySQL")+$Ab;if(!defined("DRIVER")){$ie=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($O="",$V="",$H="",$j=null,$ge=null,$Ye=null){mysqli_report(MYSQLI_REPORT_OFF);list($Ec,$ge)=explode(":",$O,2);$K=@$this->real_connect(($O!=""?$Ec:ini_get("mysqli.default_host")),($O.$V!=""?$V:ini_get("mysqli.default_user")),($O.$V.$H!=""?$H:ini_get("mysqli.default_pw")),$j,(is_numeric($ge)?$ge:ini_get("mysqli.default_port")),(!is_numeric($ge)?$ge:$Ye));return$K;}function
set_charset($Qa){if(parent::set_charset($Qa))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $Qa");}function
result($I,$n=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch_array();return$L[$n];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$V,$H){$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$V"!=""?$V:ini_get("mysql.default_user")),("$O$V$H"!=""?$H:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($Qa){if(function_exists('mysql_set_charset')){if(mysql_set_charset($Qa,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $Qa");}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($j){return
mysql_select_db($j,$this->_link);}function
query($I,$Pf=false){$J=@($Pf?mysql_unbuffered_query($I,$this->_link):mysql_query($I,$this->_link));$this->error="";if(!$J){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($J===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$n=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
mysql_result($J->_result,0,$n);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($J){$this->_result=$J;$this->num_rows=mysql_num_rows($J);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$K=mysql_fetch_field($this->_result,$this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=($K->blob?63:0);return$K;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($O,$V,$H){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$V,$H);return
true;}function
set_charset($Qa){$this->query("SET NAMES $Qa");}function
select_db($j){return$this->query("USE ".idf_escape($j));}function
query($I,$Pf=false){$this->setAttribute(1000,!$Pf);return
parent::query($I,$Pf);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$P){return($P?parent::insert($R,$P):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$M,$ke){$f=array_keys(reset($M));$je="INSERT INTO ".table($R)." (".implode(", ",$f).") VALUES\n";$cg=array();foreach($f
as$y)$cg[$y]="$y = VALUES($y)";$kf="\nON DUPLICATE KEY UPDATE ".implode(", ",$cg);$cg=array();$jd=0;foreach($M
as$P){$Y="(".implode(", ",$P).")";if($cg&&(strlen($je)+$jd+strlen($Y)+strlen($kf)>1e6)){if(!queries($je.implode(",\n",$cg).$kf))return
false;$cg=array();$jd=0;}$cg[]=$Y;$jd+=strlen($Y)+2;}return
queries($je.implode(",\n",$cg).$kf);}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$b,$Of,$hf;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2])){$g->set_charset(charset($g));$g->query("SET sql_quote_show_create = 1, autocommit = 1");if(version_compare($g->server_info,'5.7.8')>=0){$hf['Strings'][]="json";$Of["json"]=4294967295;}return$g;}$K=$g->error;if(function_exists('iconv')&&!is_utf8($K)&&strlen($Ie=iconv("windows-1250","utf-8",$K))>strlen($K))$K=$Ie;return$K;}function
get_databases($kc){global$g;$K=get_session("dbs");if($K===null){$I=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$K=($kc?slow_query($I):get_vals($I));restart_session();set_session("dbs",$K);stop_session();}return$K;}function
limit($I,$Z,$z,$Id=0,$Qe=" "){return" $I$Z".($z!==null?$Qe."LIMIT $z".($Id?" OFFSET $Id":""):"");}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($l,$bb){global$g;$K=null;$lb=$g->result("SHOW CREATE DATABASE ".idf_escape($l),1);if(preg_match('~ COLLATE ([^ ]+)~',$lb,$A))$K=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$lb,$A))$K=$bb[$A[1]][-1];return$K;}function
engines(){$K=array();foreach(get_rows("SHOW ENGINES")as$L){if(preg_match("~YES|DEFAULT~",$L["Support"]))$K[]=$L["Engine"];}return$K;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals($g->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($k){$K=array();foreach($k
as$l)$K[$l]=count(get_vals("SHOW TABLES IN ".idf_escape($l)));return$K;}function
table_status($D="",$Zb=false){global$g;$K=array();foreach(get_rows($Zb&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($D!=""?"AND TABLE_NAME = ".q($D):"ORDER BY Name"):"SHOW TABLE STATUS".($D!=""?" LIKE ".q(addcslashes($D,"%_\\")):""))as$L){if($L["Engine"]=="InnoDB")$L["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$L["Comment"]);if(!isset($L["Engine"]))$L["Comment"]="";if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){global$g;return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&version_compare($g->server_info,'5.6')>=0);}function
fields($R){$K=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$L){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$L["Type"],$A);$K[$L["Field"]]=array("field"=>$L["Field"],"full_type"=>$L["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($L["Default"]!=""||preg_match("~char|set~",$A[1])?$L["Default"]:null),"null"=>($L["Null"]=="YES"),"auto_increment"=>($L["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$L["Extra"],$A)?$A[1]:""),"collation"=>$L["Collation"],"privileges"=>array_flip(preg_split('~, *~',$L["Privileges"])),"comment"=>$L["Comment"],"primary"=>($L["Key"]=="PRI"),);}return$K;}function
indexes($R,$h=null){$K=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$h)as$L){$D=$L["Key_name"];$K[$D]["type"]=($D=="PRIMARY"?"PRIMARY":($L["Index_type"]=="FULLTEXT"?"FULLTEXT":($L["Non_unique"]?($L["Index_type"]=="SPATIAL"?"SPATIAL":"INDEX"):"UNIQUE")));$K[$D]["columns"][]=$L["Column_name"];$K[$D]["lengths"][]=($L["Index_type"]=="SPATIAL"?null:$L["Sub_part"]);$K[$D]["descs"][]=null;}return$K;}function
foreign_keys($R){global$g,$Kd;static$de='`(?:[^`]|``)+`';$K=array();$mb=$g->result("SHOW CREATE TABLE ".table($R),1);if($mb){preg_match_all("~CONSTRAINT ($de) FOREIGN KEY ?\\(((?:$de,? ?)+)\\) REFERENCES ($de)(?:\\.($de))? \\(((?:$de,? ?)+)\\)(?: ON DELETE ($Kd))?(?: ON UPDATE ($Kd))?~",$mb,$B,PREG_SET_ORDER);foreach($B
as$A){preg_match_all("~$de~",$A[2],$af);preg_match_all("~$de~",$A[5],$rf);$K[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$af[0]),"target"=>array_map('idf_unescape',$rf[0]),"on_delete"=>($A[6]?$A[6]:"RESTRICT"),"on_update"=>($A[7]?$A[7]:"RESTRICT"),);}}return$K;}function
view($D){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($D),1)));}function
collations(){$K=array();foreach(get_rows("SHOW COLLATION")as$L){if($L["Default"])$K[$L["Charset"]][-1]=$L["Collation"];else$K[$L["Charset"]][]=$L["Collation"];}ksort($K);foreach($K
as$y=>$X)asort($K[$y]);return$K;}function
information_schema($l){global$g;return($g->server_info>=5&&$l=="information_schema")||($g->server_info>=5.5&&$l=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
create_database($l,$d){return
queries("CREATE DATABASE ".idf_escape($l).($d?" COLLATE ".q($d):""));}function
drop_databases($k){$K=apply_queries("DROP DATABASE",$k,'idf_escape');restart_session();set_session("dbs",null);return$K;}function
rename_database($D,$d){$K=false;if(create_database($D,$d)){$_e=array();foreach(tables_list()as$R=>$U)$_e[]=table($R)." TO ".idf_escape($D).".".table($R);$K=(!$_e||queries("RENAME TABLE ".implode(", ",$_e)));if($K)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$K;}function
auto_increment(){$Ea=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$Ea="";break;}if($v["type"]=="PRIMARY")$Ea=" UNIQUE";}}return" AUTO_INCREMENT$Ea";}function
alter_table($R,$D,$o,$lc,$eb,$Mb,$d,$Da,$be){$c=array();foreach($o
as$n)$c[]=($n[1]?($R!=""?($n[0]!=""?"CHANGE ".idf_escape($n[0]):"ADD"):" ")." ".implode($n[1]).($R!=""?$n[2]:""):"DROP ".idf_escape($n[0]));$c=array_merge($c,$lc);$ff=($eb!==null?" COMMENT=".q($eb):"").($Mb?" ENGINE=".q($Mb):"").($d?" COLLATE ".q($d):"").($Da!=""?" AUTO_INCREMENT=$Da":"");if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)$ff$be");if($R!=$D)$c[]="RENAME TO ".table($D);if($ff)$c[]=ltrim($ff);return($c||$be?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c).$be):true);}function
alter_indexes($R,$c){foreach($c
as$y=>$X)$c[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($gg){return
queries("DROP VIEW ".implode(", ",array_map('table',$gg)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$gg,$rf){$_e=array();foreach(array_merge($T,$gg)as$R)$_e[]=table($R)." TO ".idf_escape($rf).".".table($R);return
queries("RENAME TABLE ".implode(", ",$_e));}function
copy_tables($T,$gg,$rf){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$D=($rf==DB?table("copy_$R"):idf_escape($rf).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $D")||!queries("CREATE TABLE $D LIKE ".table($R))||!queries("INSERT INTO $D SELECT * FROM ".table($R)))return
false;}foreach($gg
as$R){$D=($rf==DB?table("copy_$R"):idf_escape($rf).".".table($R));$fg=view($R);if(!queries("DROP VIEW IF EXISTS $D")||!queries("CREATE VIEW $D AS $fg[select]"))return
false;}return
true;}function
trigger($D){if($D=="")return
array();$M=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($D));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$L)$K[$L["Trigger"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){global$g,$Nb,$Pc,$Of;$va=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Nf="((".implode("|",array_merge(array_keys($Of),$va)).")\\b(?:\\s*\\(((?:[^'\")]|$Nb)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$de="\\s*(".($U=="FUNCTION"?"":$Pc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Nf";$lb=$g->result("SHOW CREATE $U ".idf_escape($D),2);preg_match("~\\(((?:$de\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$Nf\\s+":"")."(.*)~is",$lb,$A);$o=array();preg_match_all("~$de\\s*,?~is",$A[1],$B,PREG_SET_ORDER);foreach($B
as$Yd){$D=str_replace("``","`",$Yd[2]).$Yd[3];$o[]=array("field"=>$D,"type"=>strtolower($Yd[5]),"length"=>preg_replace_callback("~$Nb~s",'normalize_enum',$Yd[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Yd[8] $Yd[7]"))),"null"=>1,"full_type"=>$Yd[4],"inout"=>strtoupper($Yd[1]),"collation"=>strtolower($Yd[9]),);}if($U!="FUNCTION")return
array("fields"=>$o,"definition"=>$A[11]);return
array("fields"=>$o,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$I){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$I);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Je){return
true;}function
create_sql($R,$Da){global$g;$K=$g->result("SHOW CREATE TABLE ".table($R),1);if(!$Da)$K=preg_replace('~ AUTO_INCREMENT=\\d+~','',$K);return$K;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($j){return"USE ".idf_escape($j);}function
trigger_sql($R,$if){$K="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$L)$K.="\n".($if=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($L["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($L["Trigger"])." $L[Timing] $L[Event] ON ".table($L["Table"])." FOR EACH ROW\n$L[Statement];;\n";return$K;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
replication_status($U){return
get_rows("SHOW $U STATUS");}function
convert_field($n){if(preg_match("~binary~",$n["type"]))return"HEX(".idf_escape($n["field"]).")";if($n["type"]=="bit")return"BIN(".idf_escape($n["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$n["type"]))return"AsWKT(".idf_escape($n["field"]).")";}function
unconvert_field($n,$K){if(preg_match("~binary~",$n["type"]))$K="UNHEX($K)";if($n["type"]=="bit")$K="CONV($K, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$n["type"]))$K="GeomFromText($K)";return$K;}function
support($ac){global$g;return!preg_match("~scheme|sequence|type|view_trigger|materializedview".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|routine|trigger|view":""):"")."~",$ac);}function
kill_process($X){return
queries("KILL ".number($X));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){global$g;return$g->result("SELECT @@max_connections");}$x="sql";$Of=array();$hf=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$Of+=$X;$hf[$y]=array_keys($X);}$Vf=array("unsigned","zerofill","unsigned zerofill");$Pd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$uc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$wc=array("avg","count","count distinct","group_concat","max","min","sum");$Fb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="4.3.1";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='https://www.adminer.org/editor/' target='_blank' id='h1'>".'Editor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($lb=false){return
password_file($lb);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){global$g;if($g){$k=$this->databases(false);return(!$k?$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$k[(information_schema($k[0])?1:0)]);}}function
schemas(){return
schemas();}function
databases($kc=true){return
get_databases($kc);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Username<td><input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Password<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($nd,$H){global$g;$g->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($nf){return
h($nf["Comment"]!=""?$nf["Comment"]:$nf["Name"]);}function
fieldName($n,$E=0){return
h($n["comment"]!=""?$n["comment"]:$n["field"]);}function
selectLinks($nf,$P=""){$a=$nf["Name"];if($P!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$P).'">'.'New item'."</a>\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$mf){$K=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($R)."
ORDER BY ORDINAL_POSITION",null,"")as$L)$K[$L["TABLE_NAME"]]["keys"][$L["CONSTRAINT_NAME"]][$L["COLUMN_NAME"]]=$L["REFERENCED_COLUMN_NAME"];foreach($K
as$y=>$X){$D=$this->tableName(table_status($y,true));if($D!=""){$Le=preg_quote($mf);$Qe="(:|\\s*-)?\\s+";$K[$y]["name"]=(preg_match("(^$Le$Qe(.+)|^(.+?)$Qe$Le\$)iu",$D,$A)?$A[2].$A[3]:$D);}else
unset($K[$y]);}return$K;}function
backwardKeysPrint($Ha,$L){foreach($Ha
as$R=>$Ga){foreach($Ga["keys"]as$cb){$_=ME.'select='.urlencode($R);$s=0;foreach($cb
as$e=>$X)$_.=where_link($s++,$e,$L[$X]);echo"<a href='".h($_)."'>".h($Ga["name"])."</a>";$_=ME.'edit='.urlencode($R);foreach($cb
as$e=>$X)$_.="&set".urlencode("[".bracket_escape($e)."]")."=".urlencode($L[$X]);echo"<a href='".h($_)."' title='".'New item'."'>+</a> ";}}}function
selectQuery($I,$wf){return"<!--\n".str_replace("--","--><!-- ",$I)."\n($wf)\n-->\n";}function
rowDescription($R){foreach(fields($R)as$n){if(preg_match("~varchar|character varying~",$n["type"]))return
idf_escape($n["field"]);}return"";}function
rowDescriptions($M,$nc){$K=$M;foreach($M[0]as$y=>$X){if(list($R,$t,$D)=$this->_foreignColumn($nc,$y)){$Hc=array();foreach($M
as$L)$Hc[$L[$y]]=q($L[$y]);$ub=$this->_values[$R];if(!$ub)$ub=get_key_vals("SELECT $t, $D FROM ".table($R)." WHERE $t IN (".implode(", ",$Hc).")");foreach($M
as$C=>$L){if(isset($L[$y]))$K[$C][$y]=(string)$ub[$L[$y]];}}}return$K;}function
selectLink($X,$n){}function
selectVal($X,$_,$n,$Ud){$K=($X===null?"&nbsp;":$X);$_=h($_);if(preg_match('~blob|bytea~',$n["type"])&&!is_utf8($X)){$K=lang(array('%d byte','%d bytes'),strlen($Ud));if(preg_match("~^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)~",$Ud))$K="<img src='$_' alt='$K'>";}if(like_bool($n)&&$K!="&nbsp;")$K=($X?'yes':'no');if($_)$K="<a href='$_'".(is_url($_)?" rel='noreferrer'":"").">$K</a>";if(!$_&&!like_bool($n)&&preg_match('~int|float|double|decimal~',$n["type"]))$K="<div class='number'>$K</div>";elseif(preg_match('~date~',$n["type"]))$K="<div class='datetime'>$K</div>";return$K;}function
editVal($X,$n){if(preg_match('~date|timestamp~',$n["type"])&&$X!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$1-$3-$5',$X);return$X;}function
selectColumnsPrint($N,$f){}function
selectSearchPrint($Z,$f,$w){$Z=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.'Search'."</legend><div>\n";$bd=array();foreach($Z
as$y=>$X)$bd[$X["col"]]=$y;$s=0;$o=fields($_GET["select"]);foreach($f
as$D=>$tb){$n=$o[$D];if(preg_match("~enum~",$n["type"])||like_bool($n)){$y=$bd[$D];$s--;echo"<div>".h($tb)."<input type='hidden' name='where[$s][col]' value='".h($D)."'>:",(like_bool($n)?" <select name='where[$s][val]'>".optionlist(array(""=>"",'no','yes'),$Z[$y]["val"],true)."</select>":enum_input("checkbox"," name='where[$s][val][]'",$n,(array)$Z[$y]["val"],($n["null"]?0:null))),"</div>\n";unset($f[$D]);}elseif(is_array($Rd=$this->_foreignKeyOptions($_GET["select"],$D))){if($o[$D]["null"])$Rd[0]='('.'empty'.')';$y=$bd[$D];$s--;echo"<div>".h($tb)."<input type='hidden' name='where[$s][col]' value='".h($D)."'><input type='hidden' name='where[$s][op]' value='='>: <select name='where[$s][val]'>".optionlist($Rd,$Z[$y]["val"],true)."</select></div>\n";unset($f[$D]);}}$s=0;foreach($Z
as$X){if(($X["col"]==""||$f[$X["col"]])&&"$X[col]$X[val]"!=""){echo"<div><select name='where[$s][col]'><option value=''>(".'anywhere'.")".optionlist($f,$X["col"],true)."</select>",html_select("where[$s][op]",array(-1=>"")+$this->operators,$X["op"]),"<input type='search' name='where[$s][val]' value='".h($X["val"])."' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";$s++;}}echo"<div><select name='where[$s][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'anywhere'.")".optionlist($f,null,true)."</select>",html_select("where[$s][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$s][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($E,$f,$w){$Td=array();foreach($w
as$y=>$v){$E=array();foreach($v["columns"]as$X)$E[]=$f[$X];if(count(array_filter($E,'strlen'))>1&&$y!="PRIMARY")$Td[$y]=implode(", ",$E);}if($Td){echo'<fieldset><legend>'.'Sort'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Td,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","50","100"),$z),"</div></fieldset>\n";}function
selectLengthPrint($uf){}function
selectActionPrint($w){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($Jb,$f){if($Jb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'From'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Subject'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$f,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Insert'."'>\n";echo"<p>".'Attachments'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($Jb)==1?'<input type="hidden" name="email_field" value="'.h(key($Jb)).'">':html_select("email_field",$Jb)),"<input type='submit' name='email' value='".'Send'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($f,$w){return
array(array(),array());}function
selectSearchProcess($o,$w){$K=array();foreach((array)$_GET["where"]as$y=>$Z){$ab=$Z["col"];$Nd=$Z["op"];$X=$Z["val"];if(($y<0?"":$ab).$X!=""){$fb=array();foreach(($ab!=""?array($ab=>$o[$ab]):$o)as$D=>$n){if($ab!=""||is_numeric($X)||!preg_match('~int|float|double|decimal~',$n["type"])){$D=idf_escape($D);if($ab!=""&&$n["type"]=="enum")$fb[]=(in_array(0,$X)?"$D IS NULL OR ":"")."$D IN (".implode(", ",array_map('intval',$X)).")";else{$vf=preg_match('~char|text|enum|set~',$n["type"]);$Y=$this->processInput($n,(!$Nd&&$vf&&preg_match('~^[^%]+$~',$X)?"%$X%":$X));$fb[]=$D.($Y=="NULL"?" IS".($Nd==">="?" NOT":"")." $Y":(in_array($Nd,$this->operators)||$Nd=="="?" $Nd $Y":($vf?" LIKE $Y":" IN (".str_replace(",","', '",$Y).")")));if($y<0&&$X=="0")$fb[]="$D IS NULL";}}}$K[]=($fb?"(".implode(" OR ",$fb).")":"0");}}return$K;}function
selectOrderProcess($o,$w){$Kc=$_GET["index_order"];if($Kc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($Kc!=""?array($w[$Kc]):$w)as$v){if($Kc!=""||$v["type"]=="INDEX"){$yc=array_filter($v["descs"]);$tb=false;foreach($v["columns"]as$X){if(preg_match('~date|timestamp~',$o[$X]["type"])){$tb=true;break;}}$K=array();foreach($v["columns"]as$y=>$X)$K[]=idf_escape($X).(($yc?$v["descs"][$y]:$tb)?" DESC":"");return$K;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Z,$nc){if($_POST["email_append"])return
true;if($_POST["email"]){$Pe=0;if($_POST["all"]||$_POST["check"]){$n=idf_escape($_POST["email_field"]);$jf=$_POST["email_subject"];$wd=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$jf.$wd",$B);$M=get_rows("SELECT DISTINCT $n".($B[1]?", ".implode(", ",array_map('idf_escape',array_unique($B[1]))):"")." FROM ".table($_GET["select"])." WHERE $n IS NOT NULL AND $n != ''".($Z?" AND ".implode(" AND ",$Z):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$o=fields($_GET["select"]);foreach($this->rowDescriptions($M,$nc)as$L){$Ae=array('{\\'=>'{');foreach($B[1]as$X)$Ae['{$'."$X}"]=$this->editVal($L[$X],$o[$X]);$Ib=$L[$_POST["email_field"]];if(is_mail($Ib)&&send_mail($Ib,strtr($jf,$Ae),strtr($wd,$Ae),$_POST["email_from"],$_FILES["email_files"]))$Pe++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('%d e-mail has been sent.','%d e-mails have been sent.'),$Pe));}return
false;}function
selectQueryBuild($N,$Z,$r,$E,$z,$F){return"";}function
messageQuery($I,$wf){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$I)."\n".($wf?"($wf)\n":"")."-->";}function
editFunctions($n){$K=array();if($n["null"]&&preg_match('~blob~',$n["type"]))$K["NULL"]='empty';$K[""]=($n["null"]||$n["auto_increment"]||like_bool($n)?"":"*");if(preg_match('~date|time~',$n["type"]))$K["now"]='now';if(preg_match('~_(md5|sha1)$~i',$n["field"],$A))$K[]=strtolower($A[1]);return$K;}function
editInput($R,$n,$Ba,$Y){if($n["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ba value='-1' checked><i>".'original'."</i></label> ":"").enum_input("radio",$Ba,$n,($Y||isset($_GET["select"])?$Y:0),($n["null"]?"":null));$Rd=$this->_foreignKeyOptions($R,$n["field"],$Y);if($Rd!==null)return(is_array($Rd)?"<select$Ba>".optionlist($Rd,$Y,true)."</select>":"<input value='".h($Y)."'$Ba class='hidden'><input value='".h($Rd)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($R)."&field=".urlencode($n["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($n))return'<input type="checkbox" value="'.h($Y?$Y:1).'"'.($Y?' checked':'')."$Ba>";$Cc="";if(preg_match('~time~',$n["type"]))$Cc='HH:MM:SS';if(preg_match('~date|timestamp~',$n["type"]))$Cc='[yyyy]-mm-dd'.($Cc?" [$Cc]":"");if($Cc)return"<input value='".h($Y)."'$Ba> ($Cc)";if(preg_match('~_(md5|sha1)$~i',$n["field"]))return"<input type='password' value='".h($Y)."'$Ba>";return'';}function
processInput($n,$Y,$q=""){if($q=="now")return"$q()";$K=$Y;if(preg_match('~date|timestamp~',$n["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$1-$3-$5'))).'(.*))',$Y,$A))$K=($A["p1"]!=""?$A["p1"]:($A["p2"]!=""?($A["p2"]<70?20:19).$A["p2"]:gmdate("Y")))."-$A[p3]$A[p4]-$A[p5]$A[p6]".end($A);$K=($n["type"]=="bit"&&preg_match('~^[0-9]+$~',$Y)?$K:q($K));if($Y==""&&like_bool($n))$K="0";elseif($Y==""&&($n["null"]||!preg_match('~char|text~',$n["type"])))$K="NULL";elseif(preg_match('~^(md5|sha1)$~',$q))$K="$q($K)";return
unconvert_field($n,$K);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($l){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($R,$if,$I){global$g;$J=$g->query($I,1);if($J){while($L=$J->fetch_assoc()){if($if=="table"){dump_csv(array_keys($L));$if="INSERT";}dump_csv($L);}}}function
dumpFilename($Gc){return
friendly_url($Gc);}function
dumpHeaders($Gc,$Ad=false){$Vb="csv";header("Content-Type: text/csv; charset=utf-8");return$Vb;}function
homepage(){return
true;}function
navigation($_d){global$ca;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="https://www.adminer.org/editor/#download" target="_blank" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($_d=="auth"){$gc=true;foreach((array)$_SESSION["pwds"]as$dg=>$Ve){foreach($Ve[""]as$V=>$H){if($H!==null){if($gc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$gc=false;}echo"<a href='".h(auth_url($dg,"",$V))."'>".($V!=""?h($V):"<i>".'empty'."</i>")."</a><br>\n";}}}}else{$this->databasesPrint($_d);if($_d!="db"&&$_d!="ns"){$S=table_status('',true);if(!$S)echo"<p class='message'>".'No tables.'."\n";else$this->tablesPrint($S);}}}function
databasesPrint($_d){}function
tablesPrint($T){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($T
as$L){$D=$this->tableName($L);if(isset($L["Engine"])&&$D!="")echo"<a href='".h(ME).'select='.urlencode($L["Name"])."'".bold($_GET["select"]==$L["Name"]||$_GET["edit"]==$L["Name"],"select")." title='".'Select data'."'>$D</a><br>\n";}}function
_foreignColumn($nc,$e){foreach((array)$nc[$e]as$mc){if(count($mc["source"])==1){$D=$this->rowDescription($mc["table"]);if($D!=""){$t=idf_escape($mc["target"][0]);return
array($mc["table"],$t,$D);}}}}function
_foreignKeyOptions($R,$e,$Y=null){global$g;if(list($rf,$t,$D)=$this->_foreignColumn(column_foreign_keys($R),$e)){$K=&$this->_values[$rf];if($K===null){$S=table_status($rf);$K=($S["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $t, $D FROM ".table($rf)." ORDER BY 2"));}if(!$K&&$Y!==null)return$g->result("SELECT $D FROM ".table($rf)." WHERE $t = ".q($Y));return$K;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($zf,$m="",$Pa=array(),$_f=""){global$ba,$ca,$b,$Ab,$x;page_headers();if(is_ajax()&&$m){page_messages($m);exit;}$Af=$zf.($_f!=""?": $_f":"");$Bf=strip_tags($Af.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$Bf,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.3.1",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.3.1",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.3.1",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.3.1",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ca');\"");?>>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape('You are offline.'),'\';
</script>

<div id="help" class="jush-',$x,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Pa!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$Ab[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):'Server');if($Pa===false)echo"$O\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Pa)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Pa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Pa
as$y=>$X){$tb=(is_array($X)?$X[1]:h($X));if($tb!="")echo"<a href='".h(ME."$y=").urlencode(is_array($X)?$X[0]:$X)."'>$tb</a> &raquo; ";}}echo"$zf\n";}}echo"<h2>$Af</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($m);$k=&get_session("dbs");if(DB!=""&&$k&&!in_array(DB,$k,true))$k=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($m){$Xf=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$xd=$_SESSION["messages"][$Xf];if($xd){echo"<div class='message'>".implode("</div>\n<div class='message'>",$xd)."</div>\n";unset($_SESSION["messages"][$Xf]);}if($m)echo"<div class='error'>$m</div>\n";}function
page_footer($_d=""){global$b,$Df;echo'</div>

';if($_d!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$Df,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($_d);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($C){while($C>=2147483648)$C-=4294967296;while($C<=-2147483649)$C+=4294967296;return(int)$C;}function
long2str($W,$ig){$Ie='';foreach($W
as$X)$Ie.=pack('V',$X);if($ig)return
substr($Ie,0,end($W));return$Ie;}function
str2long($Ie,$ig){$W=array_values(unpack('V*',str_pad($Ie,4*ceil(strlen($Ie)/4),"\0")));if($ig)$W[]=strlen($Ie);return$W;}function
xxtea_mx($og,$ng,$lf,$Xc){return
int32((($og>>5&0x7FFFFFF)^$ng<<2)+(($ng>>3&0x1FFFFFFF)^$og<<4))^int32(($lf^$ng)+($Xc^$og));}function
encrypt_string($gf,$y){if($gf=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($gf,true);$C=count($W)-1;$og=$W[$C];$ng=$W[0];$qe=floor(6+52/($C+1));$lf=0;while($qe-->0){$lf=int32($lf+0x9E3779B9);$Eb=$lf>>2&3;for($Xd=0;$Xd<$C;$Xd++){$ng=$W[$Xd+1];$Bd=xxtea_mx($og,$ng,$lf,$y[$Xd&3^$Eb]);$og=int32($W[$Xd]+$Bd);$W[$Xd]=$og;}$ng=$W[0];$Bd=xxtea_mx($og,$ng,$lf,$y[$Xd&3^$Eb]);$og=int32($W[$C]+$Bd);$W[$C]=$og;}return
long2str($W,false);}function
decrypt_string($gf,$y){if($gf=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($gf,false);$C=count($W)-1;$og=$W[$C];$ng=$W[0];$qe=floor(6+52/($C+1));$lf=int32($qe*0x9E3779B9);while($lf){$Eb=$lf>>2&3;for($Xd=$C;$Xd>0;$Xd--){$og=$W[$Xd-1];$Bd=xxtea_mx($og,$ng,$lf,$y[$Xd&3^$Eb]);$ng=int32($W[$Xd]-$Bd);$W[$Xd]=$ng;}$og=$W[$C];$Bd=xxtea_mx($og,$ng,$lf,$y[$Xd&3^$Eb]);$ng=int32($W[0]-$Bd);$W[0]=$ng;$lf=int32($lf-0x9E3779B9);}return
long2str($W,true);}$g='';$_c=$_SESSION["token"];if(!$_c)$_SESSION["token"]=rand(1,1e6);$Df=get_token();$ee=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$ee[$y]=$X;}}function
add_invalid_login(){global$b;$dc=get_temp_dir()."/adminer.invalid";$sc=@fopen($dc,"r+");if(!$sc){$sc=@fopen($dc,"w");if(!$sc)return;}flock($sc,LOCK_EX);$Tc=unserialize(stream_get_contents($sc));$wf=time();if($Tc){foreach($Tc
as$Uc=>$X){if($X[0]<$wf)unset($Tc[$Uc]);}}$Sc=&$Tc[$b->bruteForceKey()];if(!$Sc)$Sc=array($wf+30*60,0);$Sc[1]++;$Te=serialize($Tc);rewind($sc);fwrite($sc,$Te);ftruncate($sc,strlen($Te));flock($sc,LOCK_UN);fclose($sc);}$Ca=$_POST["auth"];if($Ca){$Tc=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$Sc=$Tc[$b->bruteForceKey()];$Ed=($Sc[1]>30?$Sc[0]-time():0);if($Ed>0)auth_error(lang(array('Too many unsuccessful logins, try again in %d minute.','Too many unsuccessful logins, try again in %d minutes.'),ceil($Ed/60)));session_regenerate_id();$dg=$Ca["driver"];$O=$Ca["server"];$V=$Ca["username"];$H=(string)$Ca["password"];$l=$Ca["db"];set_password($dg,$O,$V,$H);$_SESSION["db"][$dg][$O][$V][$l]=true;if($Ca["permanent"]){$y=base64_encode($dg)."-".base64_encode($O)."-".base64_encode($V)."-".base64_encode($l);$ne=$b->permanentLogin(true);$ee[$y]="$y:".base64_encode($ne?encrypt_string($H,$ne):"");cookie("adminer_permanent",implode(" ",$ee));}if(count($_POST)==1||DRIVER!=$dg||SERVER!=$O||$_GET["username"]!==$V||DB!=$l)redirect(auth_url($dg,$O,$V,$l));}elseif($_POST["logout"]){if($_c&&!verify_token()){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($ee&&!$_SESSION["pwds"]){session_regenerate_id();$ne=$b->permanentLogin();foreach($ee
as$y=>$X){list(,$Wa)=explode(":",$X);list($dg,$O,$V,$l)=array_map('base64_decode',explode("-",$y));set_password($dg,$O,$V,decrypt_string(base64_decode($Wa),$ne));$_SESSION["db"][$dg][$O][$V][$l]=true;}}function
unset_permanent(){global$ee;foreach($ee
as$y=>$X){list($dg,$O,$V,$l)=array_map('base64_decode',explode("-",$y));if($dg==DRIVER&&$O==SERVER&&$V==$_GET["username"]&&$l==DB)unset($ee[$y]);}cookie("adminer_permanent",implode(" ",$ee));}function
auth_error($m){global$b,$_c;$We=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$We]||$_GET[$We])&&!$_c)$m='Session expired, please login again.';else{add_invalid_login();$H=get_password();if($H!==null){if($H===false)$m.='<br>'.sprintf('Master password expired. <a href="https://www.adminer.org/en/extension/" target="_blank">Implement</a> %s method to make it permanent.','<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$We]&&$_GET[$We]&&ini_bool("session.use_only_cookies"))$m='Session support must be enabled.';$G=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$G["lifetime"]);page_header('Login',$m,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$ie)),false);page_footer("auth");exit;}$g=connect();}$_b=new
Min_Driver($g);if(!is_object($g)||($nd=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($g)?h($g):(is_string($nd)?$nd:'Invalid credentials.')));if($Ca&&$_POST["token"])$_POST["token"]=$Df;$m='';if($_POST){if(!verify_token()){$Oc="max_input_vars";$ud=ini_get($Oc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$ud||$X<$ud)){$Oc=$y;$ud=$X;}}}$m=(!$_POST["token"]&&$ud?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$Oc'"):'Invalid CSRF token. Send the form again.'.' '.'If you did not send this request from Adminer then close this page.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$m=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(isset($_GET["sql"]))$m.=' '.'You can upload a big SQL file via FTP and import it from server.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
email_header($Ac){return"=?UTF-8?B?".base64_encode($Ac)."?=";}function
send_mail($Ib,$jf,$wd,$tc="",$ec=array()){$Ob=(DIRECTORY_SEPARATOR=="/"?"\n":"\r\n");$wd=str_replace("\n",$Ob,wordwrap(str_replace("\r","","$wd\n")));$Oa=uniqid("boundary");$_a="";foreach((array)$ec["error"]as$y=>$X){if(!$X)$_a.="--$Oa$Ob"."Content-Type: ".str_replace("\n","",$ec["type"][$y]).$Ob."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$ec["name"][$y])."\"$Ob"."Content-Transfer-Encoding: base64$Ob$Ob".chunk_split(base64_encode(file_get_contents($ec["tmp_name"][$y])),76,$Ob).$Ob;}$Ja="";$Bc="Content-Type: text/plain; charset=utf-8$Ob"."Content-Transfer-Encoding: 8bit";if($_a){$_a.="--$Oa--$Ob";$Ja="--$Oa$Ob$Bc$Ob$Ob";$Bc="Content-Type: multipart/mixed; boundary=\"$Oa\"";}$Bc.=$Ob."MIME-Version: 1.0$Ob"."X-Mailer: Adminer Editor".($tc?$Ob."From: ".str_replace("\n","",$tc):"");return
mail($Ib,email_header($jf),$Ja.$wd.$_a,$Bc);}function
like_bool($n){return
preg_match("~bool|(tinyint|bit)\\(1\\)~",$n["full_type"]);}$g->select_db($b->database());$Kd="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$Ab[DRIVER]='Login';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$o=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$N=array(idf_escape($_GET["field"]));$J=$_b->select($a,$N,array(where($_GET,$o)),$N);$L=($J?$J->fetch_row():array());echo$L[0];exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$o=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$o):""):where($_GET,$o));$Wf=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($o
as$D=>$n){if(!isset($n["privileges"][$Wf?"update":"insert"])||$b->fieldName($n)=="")unset($o[$D]);}if($_POST&&!$m&&!isset($_GET["select"])){$md=$_POST["referer"];if($_POST["insert"])$md=($Wf?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$md))$md=ME."select=".urlencode($a);$w=indexes($a);$Rf=unique_array($_GET["where"],$w);$te="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($md,'Item has been deleted.',$_b->delete($a,$te,!$Rf));else{$P=array();foreach($o
as$D=>$n){$X=process_input($n);if($X!==false&&$X!==null)$P[idf_escape($D)]=$X;}if($Wf){if(!$P)redirect($md);queries_redirect($md,'Item has been updated.',$_b->update($a,$P,$te,!$Rf));if(is_ajax()){page_headers();page_messages($m);exit;}}else{$J=$_b->insert($a,$P);$hd=($J?last_id():0);queries_redirect($md,sprintf('Item%s has been inserted.',($hd?" $hd":"")),$J);}}}$L=null;if($_POST["save"])$L=(array)$_POST["fields"];elseif($Z){$N=array();foreach($o
as$D=>$n){if(isset($n["privileges"]["select"])){$ya=convert_field($n);if($_POST["clone"]&&$n["auto_increment"])$ya="''";if($x=="sql"&&preg_match("~enum|set~",$n["type"]))$ya="1*".idf_escape($D);$N[]=($ya?"$ya AS ":"").idf_escape($D);}}$L=array();if(!support("table"))$N=array("*");if($N){$J=$_b->select($a,$N,array($Z),$N,array(),(isset($_GET["select"])?2:1));$L=$J->fetch_assoc();if(!$L)$L=false;if(isset($_GET["select"])&&(!$L||$J->fetch_assoc()))$L=null;}}if(!support("table")&&!$o){if(!$Z){$J=$_b->select($a,array("*"),$Z,array("*"));$L=($J?$J->fetch_assoc():false);if(!$L)$L=array($_b->primary=>"");}if($L){foreach($L
as$y=>$X){if(!$Z)$L[$y]=null;$o[$y]=array("field"=>$y,"null"=>($y!=$_b->primary),"auto_increment"=>($y==$_b->primary));}}}edit_form($a,$o,$L,$Wf);}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$w=indexes($a);$o=fields($a);$oc=column_foreign_keys($a);$Jd="";if($S["Oid"]){$Jd=($x=="sqlite"?"rowid":"oid");$w[]=array("type"=>"PRIMARY","columns"=>array($Jd));}parse_str($_COOKIE["adminer_import"],$ra);$Ge=array();$f=array();$uf=null;foreach($o
as$y=>$n){$D=$b->fieldName($n);if(isset($n["privileges"]["select"])&&$D!=""){$f[$y]=html_entity_decode(strip_tags($D),ENT_QUOTES);if(is_shortable($n))$uf=$b->selectLengthProcess();}$Ge+=$n["privileges"];}list($N,$r)=$b->selectColumnsProcess($f,$w);$Vc=count($r)<count($N);$Z=$b->selectSearchProcess($o,$w);$E=$b->selectOrderProcess($o,$w);$z=$b->selectLimitProcess();$tc=($N?implode(", ",$N):"*".($Jd?", $Jd":"")).convert_fields($f,$o,$N)."\nFROM ".table($a);$vc=($r&&$Vc?"\nGROUP BY ".implode(", ",$r):"").($E?"\nORDER BY ".implode(", ",$E):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Sf=>$L){$ya=convert_field($o[key($L)]);$N=array($ya?$ya:idf_escape(key($L)));$Z[]=where_check($Sf,$o);$K=$_b->select($a,$N,$Z,$N);if($K)echo
reset($K->fetch_row());}exit;}if($_POST&&!$m){$kg=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$Ua=array();foreach($_POST["check"]as$Ra)$Ua[]=where_check($Ra,$o);$kg[]="((".implode(") OR (",$Ua)."))";}$kg=($kg?"\nWHERE ".implode(" AND ",$kg):"");$ke=$Uf=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$ke=array_flip($v["columns"]);$Uf=($N?$ke:array());break;}}foreach((array)$Uf
as$y=>$X){if(in_array(idf_escape($y),$N))unset($Uf[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Uf===array())$I="SELECT $tc$kg$vc";else{$Qf=array();foreach($_POST["check"]as$X)$Qf[]="(SELECT".limit($tc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$o).$vc,1).")";$I=implode(" UNION ALL ",$Qf);}$b->dumpData($a,"table",$I);exit;}if(!$b->selectEmailProcess($Z,$oc)){if($_POST["save"]||$_POST["delete"]){$J=true;$sa=0;$P=array();if(!$_POST["delete"]){foreach($f
as$D=>$X){$X=process_input($o[$D]);if($X!==null&&($_POST["clone"]||$X!==false))$P[idf_escape($D)]=($X!==false?$X:idf_escape($D));}}if($_POST["delete"]||$P){if($_POST["clone"])$I="INTO ".table($a)." (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($a);if($_POST["all"]||($Uf===array()&&is_array($_POST["check"]))||$Vc){$J=($_POST["delete"]?$_b->delete($a,$kg):($_POST["clone"]?queries("INSERT $I$kg"):$_b->update($a,$P,$kg)));$sa=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$jg="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$o);$J=($_POST["delete"]?$_b->delete($a,$jg,1):($_POST["clone"]?queries("INSERT".limit1($I,$jg)):$_b->update($a,$P,$jg)));if(!$J)break;$sa+=$g->affected_rows;}}}$wd=lang(array('%d item has been affected.','%d items have been affected.'),$sa);if($_POST["clone"]&&$J&&$sa==1){$hd=last_id();if($hd)$wd=sprintf('Item%s has been inserted.'," $hd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$wd,$J);if(!$_POST["delete"]){edit_form($a,$o,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$m='Ctrl+click on a value to modify it.';else{$J=true;$sa=0;foreach($_POST["val"]as$Sf=>$L){$P=array();foreach($L
as$y=>$X){$y=bracket_escape($y,1);$P[idf_escape($y)]=(preg_match('~char|text~',$o[$y]["type"])||$X!=""?$b->processInput($o[$y],$X):"NULL");}$J=$_b->update($a,$P," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($Sf,$o),!($Vc||$Uf===array())," ");if(!$J)break;$sa+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$sa),$J);}}elseif(!is_string($cc=get_file("csv_file",true)))$m=upload_error($cc);elseif(!preg_match('~~u',$cc))$m='File must be in UTF-8 encoding.';else{cookie("adminer_import","output=".urlencode($ra["output"])."&format=".urlencode($_POST["separator"]));$J=true;$cb=array_keys($o);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$cc,$B);$sa=count($B[0]);$_b->begin();$Qe=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$M=array();foreach($B[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Qe]*)$Qe~",$X.$Qe,$rd);if(!$y&&!array_diff($rd[1],$cb)){$cb=$rd[1];$sa--;}else{$P=array();foreach($rd[1]as$s=>$ab)$P[idf_escape($cb[$s])]=($ab==""&&$o[$cb[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$ab))));$M[]=$P;}}$J=(!$M||$_b->insertUpdate($a,$M,$ke));if($J)$J=$_b->commit();queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$sa),$J);$_b->rollback();}}}$of=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header('Select'.": $of",$m);$P=null;if(isset($Ge["insert"])||!support("table")){$P="";foreach((array)$_GET["where"]as$X){if(count($oc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$P.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$P);if(!$f&&support("table"))echo"<p class='error'>".'Unable to select the table'.($o?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($N,$f);$b->selectSearchPrint($Z,$f,$w);$b->selectOrderPrint($E,$f,$w);$b->selectLimitPrint($z);$b->selectLengthPrint($uf);$b->selectActionPrint($w);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$rc=$g->result(count_rows($a,$Z,$Vc,$r));$F=floor(max(0,$rc-1)/$z);}$Ne=$N;if(!$Ne){$Ne[]="*";if($Jd)$Ne[]=$Jd;}$jb=convert_fields($f,$o,$N);if($jb)$Ne[]=substr($jb,2);$J=$_b->select($a,$Ne,$Z,$r,$E,$z,$F,true);if(!$J)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$F)$J->seek($z*$F);$Kb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$x=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last"&&+$z&&$r&&$Vc&&$x=="sql")$rc=$g->result(" SELECT FOUND_ROWS()");if(!$M)echo"<p class='message'>".'No rows.'."\n";else{$Ia=$b->backwardKeys($a,$of);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$r&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);' class='jsonly'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Modify'."</a>");$Cd=array();$uc=array();reset($N);$ve=1;foreach($M[0]as$y=>$X){if($y!=$Jd){$X=$_GET["columns"][key($N)];$n=$o[$N?($X?$X["col"]:current($N)):$y];$D=($n?$b->fieldName($n,$ve):($X["fun"]?"*":$y));if($D!=""){$ve++;$Cd[$y]=$D;$e=idf_escape($y);$Fc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$tb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Fc.($E[0]==$e||$E[0]==$y||(!$E&&$Vc&&$r[0]==$e)?$tb:'')).'">';echo
apply_sql_function($X["fun"],$D)."</a>";echo"<span class='column hidden'>","<a href='".h($Fc.$tb)."' title='".'descending'."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$uc[$y]=$X["fun"];next($N);}}$kd=array();if($_GET["modify"]){foreach($M
as$L){foreach($L
as$y=>$X)$kd[$y]=max($kd[$y],min(40,strlen(utf8_decode($X))));}}echo($Ia?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($z%2==1&&$F%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($M,$oc)as$C=>$L){$Rf=unique_array($M[$C],$w);if(!$Rf){$Rf=array();foreach($M[$C]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$Rf[$y]=$X;}}$Sf="";foreach($Rf
as$y=>$X){if(($x=="sql"||$x=="pgsql")&&strlen($X)>64){$y=(strpos($y,'(')?$y:idf_escape($y));$y="MD5(".($x=='sql'&&preg_match("~^utf8_~",$o[$y]["collation"])?$y:"CONVERT($y USING ".charset($g).")").")";$X=md5($X);}$Sf.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$r&&$N?"":"<td>".checkbox("check[]",substr($Sf,1),in_array(substr($Sf,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Vc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Sf)."'>".'edit'."</a>"));foreach($L
as$y=>$X){if(isset($Cd[$y])){$n=$o[$y];if($X!=""&&(!isset($Kb[$y])||$Kb[$y]!=""))$Kb[$y]=(is_mail($X)?$Cd[$y]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$n["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($y).$Sf;if(!$_&&$X!==null){foreach((array)$oc[$y]as$p){if(count($oc[$y])==1||end($p["source"])==$y){$_="";foreach($p["source"]as$s=>$af)$_.=where_link($s,$p["target"][$s],$M[$C][$af]);$_=($p["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($p["db"]),ME):ME).'select='.urlencode($p["table"]).$_;if($p["ns"])$_=preg_replace('~([?&]ns=)[^&]+~','\\1'.urlencode($p["ns"]),$_);if(count($p["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Rf))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($Rf
as$Xc=>$W)$_.=where_link($s++,$Xc,$W);}$X=select_value($X,$_,$n,$uf);$t=h("val[$Sf][".bracket_escape($y)."]");$Y=$_POST["val"][$Sf][bracket_escape($y)];$Gb=!is_array($L[$y])&&is_utf8($X)&&$M[$C][$y]==$L[$y]&&!$uc[$y];$tf=preg_match('~text|lob~',$n["type"]);if(($_GET["modify"]&&$Gb)||$Y!==null){$xc=h($Y!==null?$Y:$L[$y]);echo"<td>".($tf?"<textarea name='$t' cols='30' rows='".(substr_count($L[$y],"\n")+1)."'>$xc</textarea>":"<input name='$t' value='$xc' size='$kd[$y]'>");}else{$od=strpos($X,"<i>...</i>");echo"<td id='$t' onclick=\"selectClick(this, event, ".($od?2:($tf?1:0)).($Gb?"":", '".h('Use edit link to modify this value.')."'").");\">$X";}}}if($Ia)echo"<td>";$b->backwardKeysPrint($Ia,$M[$C]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($M||$F)&&!is_ajax()){$Sb=true;if($_GET["page"]!="last"){if(!+$z)$rc=count($M);elseif($x!="sql"||!$Vc){$rc=($Vc?false:found_rows($S,$Z));if($rc<max(1e4,2*($F+1)*$z))$rc=reset(slow_query(count_rows($a,$Z,$Vc,$r)));else$Sb=false;}}if(+$z&&($rc===false||$rc>$z||$F)){echo"<p class='pages'>";$sd=($rc===false?$F+(count($M)>=$z?2:1):floor(($rc-1)/$z));if($x!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($F+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$F).($F>5?" ...":"");for($s=max(1,$F-4);$s<min($sd,$F+5);$s++)echo
pagination($s,$F);if($sd>0){echo($F+5<$sd?" ...":""),($Sb&&$rc!==false?pagination($sd,$F):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$sd'>".'last'."</a>");}echo(($rc===false?count($M)+1:$rc-$F*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.'Loading'.'...\');" class="loadmore">'.'Load more data'.'</a>':'');}else{echo'Page'.":",pagination(0,$F).($F>1?" ...":""),($F?pagination($F,$F):""),($sd>$F?pagination($F+1,$F).($sd>$F+1?" ...":""):"");}}echo"<p class='count'>\n",($rc!==false?"(".($Sb?"":"~ ").lang(array('%d row','%d rows'),$rc).") ":"");$yb=($Sb?"":"~ ").$rc;echo
checkbox("all",1,0,'whole result',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$yb' : checked); selectCount('selected2', this.checked || !checked ? '$yb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Modify</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'"'),'>
</div></fieldset>
<fieldset><legend>Selected <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete"',confirm(),'>
</div></fieldset>
';}$pc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($pc['sql']);break;}}if($pc){print_fieldset("export",'Export'." <span id='selected2'></span>");$Wd=$b->dumpOutput();echo($Wd?html_select("output",$Wd,$ra["output"])." ":""),html_select("format",$pc,$ra["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}echo(!$r&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",'Import',!$M);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ra["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($Kb,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$Df'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$g->query("KILL ".number($_POST["kill"]));elseif(list($R,$t,$D)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$z=11;$J=$g->query("SELECT $t, $D FROM ".table($R)." WHERE ".(preg_match('~^[0-9]+$~',$_GET["value"])?"$t = $_GET[value] OR ":"")."$D LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT $z");for($s=1;($L=$J->fetch_row())&&$s<$z;$s++)echo"<a href='".h(ME."edit=".urlencode($R)."&where".urlencode("[".bracket_escape(idf_unescape($t))."]")."=".urlencode($L[0]))."'>".h($L[1])."</a><br>\n";if($L)echo"...\n";}exit;}else{page_header('Server',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Search data in tables'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Search'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);" class="jsonly"><th>'.'Table'.'<td>'.'Rows'."</thead>\n";foreach(table_status()as$R=>$L){$D=$b->tableName($L);if(isset($L["Engine"])&&$D!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$R,in_array($R,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($R)."'>$D</a>";$X=format_number($L["Rows"]);echo"<td align='right'><a href='".h(ME."edit=").urlencode($R)."'>".($L["Engine"]=="InnoDB"&&$X?"~ $X":$X)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();