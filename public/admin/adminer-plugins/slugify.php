<?php

/** Prefill field containing "_slug" with slugified value of a previous field (JavaScript)
* @link http://www.adminer.org/plugins/#use
* @author Jakub Vrana, http://www.vrana.cz/
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/
class AdminerSlugify {
	/** @access protected */
	var $from, $to;

	/**
	* @param string find these characters ...
	* @param string ... and replace them by these
	*/
	function AdminerSlugify($from = 'áčďéěíňóřšťúůýž', $to = 'acdeeinorstuuyz') {
		$this->from = $from;
		$this->to = $to;
	}

	function editInput($table, $field, $attrs, $value) {
		static $slugify;
		if (!$_GET["select"] && !$_GET["where"]) {
			if ($slugify === null) {
				$slugify = array();
				$prev = null;
				foreach (fields($table) as $name => $val) {
					if ($prev && preg_match('~(^|_)slug(_|$)~', $name)) {
						$slugify[$prev] = $name;
					}
					$prev = $name;
				}
			}
			$slug = $slugify[$field["field"]];
			if ($slug !== null) {
				return "<input value='" . h($value) . "' maxlength='$field[length]' size='40'$attrs onchange=\"var find = '$this->from'; var repl = '$this->to'; this.form['fields[$slug]'].value = this.value.toLowerCase().replace(new RegExp('[' + find + ']', 'g'), function (str) { return repl[find.indexOf(str)]; }).replace(/[^a-z0-9_]+/g, '-').replace(/^-|-\$/g, '').substr(0, $field[length]);\">";
			}
		}
	}
	
	/// by Mayel:
	function selectVal($val, $link, $field, $original) {
		$return = ($val === null ? "<i>NULL</i>" : (preg_match("~char|binary~", $field["type"]) && !preg_match("~var~", $field["type"]) ? "<code>$val</code>" : $val));
		
		if (preg_match('~blob|bytea|raw|file~', $field["type"]) && !is_utf8($val)) {
			$return = lang('%d byte(s)', strlen($original));
		}
		
		if(!is_null($val) && ($field['field']=='slug' || $field['field']=='username')) return '<a href="/'.$return.'" target="_blank">'.$return.'</a>';
		
		return ($link ? "<a href='" . h($link) . "'>$return</a>" : $return);
			
		//var_dump($val, $link, $field, $original);
	}

}
