<?php
/**
 * Class and Function List:
 * Function list:
 * Classes list:
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

//codemirror languages
$config['codemirror_languages'] = array(
	'html5' => array(
		'mode' => 'htmlmixed',
		'js' => array(
			array(
				'codemirror/mode/xml/xml.js'
			) ,
			array(
				'codemirror/mode/javascript/javascript.js'
			) ,
			array(
				'codemirror/mode/css/css.js'
			) ,
			array(
				'codemirror/mode/htmlmixed/htmlmixed.js'
			) ,
		) ,
	) ,
	'css' => array(
		'mode' => 'css',
		'js' => array(
			array(
				'codemirror/mode/css/css.js'
			) ,
		) ,
	) ,
	'javascript' => array(
		'mode' => 'javascript',
		'js' => array(
			array(
				'codemirror/mode/javascript/javascript.js'
			) ,
		) ,
	) ,
	'php' => array(
		'mode' => 'php',
		'js' => array(
			array(
				'codemirror/mode/xml/xml.js'
			) ,
			array(
				'codemirror/mode/javascript/javascript.js'
			) ,
			array(
				'codemirror/mode/css/css.js'
			) ,
			array(
				'codemirror/mode/clike/clike.js'
			) ,
			array(
				'codemirror/mode/php/php.js'
			) ,
		) ,
	) ,
	'python' => array(
		'mode' => 'python',
		'js' => array(
			array(
				'codemirror/mode/python/python.js'
			) ,
		) ,
	) ,
	'ruby' => array(
		'mode' => 'ruby',
		'js' => array(
			array(
				'codemirror/mode/ruby/ruby.js'
			) ,
		) ,
	) ,
	'lua' => array(
		'mode' => 'text/x-lua',
		'js' => array(
			array(
				'codemirror/mode/lua/lua.js'
			) ,
		) ,
	) ,
	'bash' => array(
		'mode' => 'text/x-sh',
		'js' => array(
			array(
				'codemirror/mode/shell/shell.js'
			) ,
		) ,
	) ,
	'go' => array(
		'mode' => 'text/x-go',
		'js' => array(
			array(
				'codemirror/mode/go/go.js'
			) ,
		) ,
	) ,
	'c' => array(
		'mode' => 'text/x-csrc',
		'js' => array(
			array(
				'codemirror/mode/clike/clike.js'
			) ,
		) ,
	) ,
	'cpp' => array(
		'mode' => 'text/x-c++src',
		'js' => array(
			array(
				'codemirror/mode/clike/clike.js'
			) ,
		) ,
	) ,
	'diff' => array(
		'mode' => 'diff',
		'js' => array(
			array(
				'codemirror/mode/diff/diff.js'
			) ,
		) ,
	) ,
	'latex' => array(
		'mode' => 'stex',
		'js' => array(
			array(
				'codemirror/mode/stex/stex.js'
			) ,
		) ,
	) ,
	'sql' => array(
		'mode' => 'sql',
		'js' => array(
			array(
				'codemirror/mode/sql/sql.js'
			) ,
		) ,
	) ,
	'xml' => array(
		'mode' => 'xml',
		'js' => array(
			array(
				'codemirror/mode/xml/xml.js'
			) ,
		) ,
	) ,
	'text' => 'Plain Text',
	'4cs' => '4CS',
	'6502acme' => 'MOS 6502',
	'6502kickass' => 'MOS 6502 Kick Assembler',
	'6502tasm' => 'MOS 6502 TASM/64TASS',
	'68000devpac' => 'Motorola 68000 Devpac Assembler',
	'abap' => 'ABAP',
	'apl' => array(
		'mode' => 'apl',
		'js' => array(
			array(
				'codemirror/mode/apl/apl.js'
			) ,
		) ,
	) ,
	'asterisk' => array(
		'mode' => 'asterisk',
		'js' => array(
			array(
				'codemirror/mode/asterisk/asterisk.js'
			) ,
		) ,
	) ,
	'actionscript' => 'Actionscript',
	'actionscript3' => 'ActionScript3',
	'ada' => 'Ada',
	'algol68' => 'ALGOL 68',
	'apache' => 'Apache',
	'applescript' => 'AppleScript',
	'apt_sources' => 'Apt sources.list',
	'asm' => 'x86 Assembler',
	'asp' => 'ASP',
	'autoconf' => 'autoconf',
	'autohotkey' => 'Autohotkey',
	'autoit' => 'AutoIT',
	'avisynth' => 'AviSynth',
	'awk' => 'Awk',
	'bascomavr' => 'BASCOM AVR',
	'basic4gl' => 'Basic4GL',
	'bf' => 'Brainfuck',
	'bibtex' => 'BibTeX',
	'blitzbasic' => 'BlitzBasic',
	'bnf' => 'BNF (Backus-Naur form)',
	'boo' => 'Boo',
	'c_loadrunner' => array(
		'mode' => 'text/x-csrc',
		'js' => array(
			array(
				'codemirror/mode/clike/clike.js'
			) ,
		) ,
	) ,
	'c_mac' => array(
		'mode' => 'text/x-csrc',
		'js' => array(
			array(
				'codemirror/mode/clike/clike.js'
			) ,
		) ,
	) ,
	'caddcl' => 'CAD DCL (Dialog Control Language)',
	'cadlisp' => 'AutoCAD/IntelliCAD Lisp',
	'cfdg' => 'CFDG',
	'cfm' => 'ColdFusion',
	'chaiscript' => 'ChaiScript',
	'cil' => 'CIL (Common Intermediate Language)',
	'clojure' => 'Clojure',
	'cmake' => 'CMake',
	'cobol' => 'COBOL',
	'coffeescript' => 'CoffeeScript',
	'coffeescript' => array(
		'mode' => 'text/x-coffeescript',
		'js' => array(
			array(
				'codemirror/mode/coffeescript/coffeescript.js'
			) ,
		) ,
	) ,
	'csharp' => array(
		'mode' => 'text/x-csharp',
		'js' => array(
			array(
				'codemirror/mode/clike/clike.js'
			) ,
		) ,
	) ,
	'cuesheet' => 'Cuesheet',
	'd' => array(
		'mode' => 'd',
		'js' => array(
			array(
				'codemirror/mode/d/d.js'
			) ,
		) ,
	) ,
	'dcs' => 'DCS',
	'delphi' => 'Delphi (Object Pascal)',
	'div' => 'DIV',
	'dos' => 'DOS',
	'dot' => 'dot',
	'e' => 'E',
	'ecmascript' => array(
		'mode' => 'javascript',
		'js' => array(
			array(
				'codemirror/mode/javascript/javascript.js'
			) ,
		) ,
	) ,
	'eiffel' => 'Eiffel',
	'email' => 'Email (mbox/eml/RFC format)',
	'epc' => 'Enerscript',
	'erlang' => array(
		'mode' => 'erlang',
		'js' => array(
			array(
				'codemirror/mode/erlang/erlang.js'
			) ,
		) ,
	) ,
	'euphoria' => 'Euphoria',
	'f1' => 'Formula One',
	'falcon' => 'Falcon',
	'fo' => 'fo',
	'fortran' => 'Fortran',
	'freebasic' => 'FreeBasic',
	'fsharp' => 'F#',
	'gambas' => 'GAMBAS',
	'gdb' => 'GDB',
	'genero' => 'Genero',
	'genie' => 'Genie',
	'gettext' => 'GNU Gettext .po/.pot',
	'glsl' => 'glSlang',
	'gml' => 'GML',
	'gnuplot' => 'Gnuplot script',
	'go' => array(
		'mode' => 'go',
		'js' => array(
			array(
				'codemirror/mode/go/go.js'
			) ,
		) ,
	) ,
	'groovy' => array(
		'mode' => 'text/x-groovy',
		'js' => array(
			array(
				'codemirror/mode/groovy/groovy.js'
			) ,
		) ,
	) ,
	'gwbasic' => 'GwBasic',
	'haskell' => array(
		'mode' => 'text/x-haskell',
		'js' => array(
			array(
				'codemirror/mode/haskell/haskell.js'
			) ,
		) ,
	) ,
	'haxe' => array(
		'mode' => 'text/x-haxe',
		'js' => array(
			array(
				'codemirror/mode/haxe/haxe.js'
			) ,
		) ,
	) ,
	'hicest' => 'HicEst',
	'hq9plus' => 'HQ9+',
	'html4strict' => array(
		'mode' => 'htmlmixed',
		'js' => array(
			array(
				'codemirror/mode/xml/xml.js'
			) ,
			array(
				'codemirror/mode/javascript/javascript.js'
			) ,
			array(
				'codemirror/mode/css/css.js'
			) ,
			array(
				'codemirror/mode/htmlmixed/htmlmixed.js'
			) ,
		) ,
	) ,
	'icon' => 'Icon',
	'idl' => 'Unoidl',
	'ini' => 'INI',
	'inno' => 'Inno Script',
	'intercal' => 'INTERCAL',
	'io' => 'Io',
	'j' => 'J',
	'java' => array(
		'mode' => 'text/x-java',
		'js' => array(
			array(
				'codemirror/mode/clike/clike.js'
			) ,
		) ,
	) ,
	'java5' => array(
		'mode' => 'text/x-java',
		'js' => array(
			array(
				'codemirror/mode/clike/clike.js'
			) ,
		) ,
	) ,
	'jquery' => array(
		'mode' => 'javascript',
		'js' => array(
			array(
				'codemirror/mode/javascript/javascript.js'
			) ,
		) ,
	) ,

	//'kixtart' => 'PHP',
	'klonec' => 'KLone with C',
	'klonecpp' => 'KLone with C++',
	'lb' => 'Liberty BASIC',
	'lisp' => 'Generic Lisp',
	'llvm' => 'LLVM',
	'locobasic' => 'Locomotive Basic (Amstrad CPC series)',
	'logtalk' => 'Logtalk',
	'lolcode' => 'LOLcode',
	'lotusformulas' => '@Formula/@Command',
	'lotusscript' => 'LotusScript',
	'lscript' => 'Lightwave Script',
	'lsl2' => 'Linden Scripting',
	'm68k' => 'Motorola 68000 Assembler',
	'magiksf' => 'MagikSF',
	'make' => 'Make',
	'mapbasic' => 'MapBasic',
	'matlab' => 'Matlab M-file',
	'mirc' => array(
		'mode' => 'mirc',
		'js' => array(
			array(
				'codemirror/mode/mirc/mirc.js'
			) ,
		) ,
	) ,
	'mmix' => 'MMIX Assembler',
	'modula2' => 'Modula-2',
	'modula3' => 'Modula-3',
	'mpasm' => 'Microchip Assembler',
	'mxml' => 'MXML',
	'mysql' => array(
		'mode' => 'sql',
		'js' => array(
			array(
				'codemirror/mode/sql/sql.js'
			) ,
		) ,
	) ,
	'newlisp' => 'newLISP',
	'nsis' => 'Nullsoft Scriptable Install System',
	'oberon2' => 'Oberon-2',
	'objc' => 'Objective-C',
	'objeck' => 'Objeck Programming Language',
	'ocaml' => 'OCaml (Objective Caml)',
	'ocaml' => array(
		'mode' => 'text/x-ocaml',
		'js' => array(
			array(
				'codemirror/mode/ocaml/ocaml.js'
			) ,
		) ,
	) ,
	'oobas' => 'OpenOffice.org Basic',
	'oracle11' => 'Oracle 11i',
	'oracle8' => 'Oracle 8',
	'oxygene' => 'Delphi Prism (Oxygene)',
	'oz' => 'Oz',
	'pascal' => array(
		'mode' => 'text/x-pascal',
		'js' => array(
			array(
				'codemirror/mode/pascal/pascal.js'
			) ,
		) ,
	) ,
	'pcre' => 'PCRE',
	'per' => 'Per (forms)',
	'perl' => array(
		'mode' => 'perl',
		'js' => array(
			array(
				'codemirror/mode/perl/perl.js'
			) ,
		) ,
	) ,
	'perl6' => array(
		'mode' => 'perl',
		'js' => array(
			array(
				'codemirror/mode/perl/perl.js'
			) ,
		) ,
	) ,
	'pf' => 'OpenBSD packet filter',
	'pic16' => 'PIC16 Assembler',
	'pike' => 'Pike',
	'pixelbender' => 'Pixel Bender 1.0',
	'pli' => 'PL/I',
	'plsql' => array(
		'mode' => 'sql',
		'js' => array(
			array(
				'codemirror/mode/sql/sql.js'
			) ,
		) ,
	) ,
	'postgresql' => 'PostgreSQL',
	'povray' => 'Povray',
	'powerbuilder' => 'PowerBuilder (PowerScript)',
	'powershell' => 'PowerShell',
	'proftpd' => 'ProFTPd',
	'progress' => 'Progress',
	'prolog' => 'Prolog',
	'properties' => array(
		'mode' => 'text/x-properties',
		'js' => array(
			array(
				'codemirror/mode/properties/properties.js'
			) ,
		) ,
	) ,
	'providex' => 'ProvideX',
	'purebasic' => 'PureBasic',
	'q' => array(
		'mode' => 'text/x-q',
		'js' => array(
			array(
				'codemirror/mode/q/q.js'
			) ,
		) ,
	) ,
	'qbasic' => 'QBasic/QuickBASIC',
	'rails' => 'Ruby (with Ruby on Rails Framework)',
	'rebol' => 'Rebol',
	'reg' => 'Microsoft Registry Editor',
	'robots' => 'robots.txt',
	'rpmspec' => 'RPM Spec',
	'rsplus' => 'R',
	'sas' => 'SAS',
	'scala' => array(
		'mode' => 'scala',
		'js' => array(
			array(
				'codemirror/mode/clike/clike.js'
			) ,
		) ,
	) ,
	'scheme' => array(
		'mode' => 'text/x-scheme',
		'js' => array(
			array(
				'codemirror/mode/scheme/scheme.js'
			) ,
		) ,
	) ,
	'scilab' => 'SciLab',
	'sdlbasic' => 'sdlBasic',
	'smalltalk' => 'Smalltalk',
	'smarty' => 'Smarty template',
	'systemverilog' => 'SystemVerilog IEEE 1800-2009(draft8)',
	'tcl' => array(
		'mode' => 'text/x-tcl',
		'js' => array(
			array(
				'codemirror/mode/tcl/tcl.js'
			) ,
		) ,
	) ,
	'teraterm' => 'Tera Term Macro',
	'thinbasic' => 'thinBasic',
	'tsql' => 'T-SQL',
	'typoscript' => 'TypoScript',
	'unicon' => 'Unicon',
	'uscript' => 'UnrealScript',
	'vala' => 'Vala',
	'vb' => array(
		'mode' => 'text/x-vb',
		'js' => array(
			array(
				'codemirror/mode/vb/vb.js'
			) ,
		) ,
	) ,
	'verilog' => array(
		'mode' => 'text/x-verilog',
		'js' => array(
			array(
				'codemirror/mode/verilog/verilog.js'
			) ,
		) ,
	) ,
	'vhdl' => 'VHDL',
	'vim' => 'Vim scripting',
	'visualfoxpro' => 'Visual FoxPro',
	'visualprolog' => 'Visual Prolog',
	'whitespace' => 'Whitespace',
	'whois' => 'Whois response (RPSL format)',
	'winbatch' => 'WinBatch',
	'xbasic' => 'XBasic',
	'xorg_conf' => 'xorg.conf',
	'xpp' => 'Axapta/Dynamics Ax X++',
	'yaml' => array(
		'mode' => 'text/x-yaml',
		'js' => array(
			array(
				'codemirror/mode/yaml/yaml.js'
			) ,
		) ,
	) ,
	'z80' => array(
		'mode' => 'text/x-z80',
		'js' => array(
			array(
				'codemirror/mode/z80/z80.js'
			) ,
		) ,
	) ,
	'zxbasic' => 'ZXBasic',
);
