<?php

$especiales = '

<div>
<h3>Para enviar correios com caracteres especiais teste com a tabela abaixo</h3>


<p>Use em seu código os seguintes recursos</p>

<small>No começo do seu código</small>
<code>
header("Content-Type: text/html; charset=utf-8");
</code>

<small>Dentro de seu script de envio de e-mail</small>
<code>
$mail->CharSet = "UTF-8";
</code>

</div>


<div class="container-tabela-acentos">

	<h3 id="pt">Caracteres Acentuados no Português</h3>

	<table class="tabela-acentos tabela-acentos-esquerda">
	<tbody><tr><td class="c">á</td><td>&amp;aacute;</td><td class="c">Á</td><td>&amp;Aacute;</td></tr>
	<tr><td class="c">ã</td><td>&amp;atilde;</td><td class="c">Ã</td><td>&amp;Atilde;</td></tr>
	<tr><td class="c">â</td><td>&amp;acirc;</td><td class="c">Â</td><td>&amp;Acirc;</td></tr>
	<tr><td class="c">à</td><td>&amp;agrave;</td><td class="c">À</td><td>&amp;Agrave;</td></tr>
	<tr><td class="c">é</td><td>&amp;eacute;</td><td class="c">É</td><td>&amp;Eacute;</td></tr>
	<tr><td class="c">ê</td><td>&amp;ecirc;</td><td class="c">Ê</td><td>&amp;Ecirc;</td></tr>
	</tbody></table>

	<table class="tabela-acentos tabela-acentos-direita">
	<tbody><tr><td class="c">í</td><td>&amp;iacute;</td><td class="c">Í</td><td>&amp;Iacute;</td></tr>
	<tr><td class="c">ó</td><td>&amp;oacute;</td><td class="c">Ó</td><td>&amp;Oacute;</td></tr>
	<tr><td class="c">õ</td><td>&amp;otilde;</td><td class="c">Õ</td><td>&amp;Otilde;</td></tr>
	<tr><td class="c">ô</td><td>&amp;ocirc;</td><td class="c">Ô</td><td>&amp;Ocirc;</td></tr>
	<tr><td class="c">ú</td><td>&amp;uacute;</td><td class="c">Ú</td><td>&amp;Uacute;</td></tr>
	<tr><td class="c">ç</td><td>&amp;ccedil;</td><td class="c">Ç</td><td>&amp;Ccedil;</td></tr>
	</tbody></table>

</div>

<div class="container-tabela-acentos">

	<h3 id="ce">Caracteres Especiais</h3>

	<table class="tabela-acentos">
	<tbody><tr><td class="c">&nbsp;</td><td class="d">espaço (non-breaking space)</td><td>&amp;nbsp;</td><td>\0020</td></tr>
	<tr><td class="c">&amp;</td><td class="d">e comercial (ampersand)</td><td>&amp;amp;</td><td>\0026</td></tr>
	<tr><td class="c">ˆ</td><td class="d">acento circunflexo (circumflex accent)</td><td>&amp;circ;</td><td>\005E</td></tr>
	<tr><td class="c">˜</td><td class="d">acento til (tilde)</td><td>&amp;tilde;</td><td>\007E</td></tr>
	<tr><td class="c">¨</td><td class="d">acento trema (diaeresis/umlaut)</td><td>&amp;uml;</td><td>\00A8</td></tr>
	<tr><td class="c">´</td><td class="d">acento agudo (acute accent)</td><td>&amp;cute;</td><td>\00B4</td></tr>
	<tr><td class="c">¸</td><td class="d">cedilha (cedilla)</td><td>&amp;cedil;</td><td>\00B8</td></tr>
	<tr><td class="c">"</td><td class="d">aspas duplas (quotation mark)</td><td>&amp;quot;</td><td>\0022</td></tr>
	<tr><td class="c">“</td><td class="d">aspas duplas esquerda (left double quotation mark)</td><td>&amp;ldquo;</td><td>\201C</td></tr>
	<tr><td class="c">”</td><td class="d">aspas duplas direita (right double quotation mark)</td><td>&amp;rdquo;</td><td>\201D</td></tr>
	<tr><td class="c">‘</td><td class="d">aspas simples esquerda (left single quotation mark)</td><td>&amp;lsquo;</td><td>\2018</td></tr>
	<tr><td class="c">’</td><td class="d">aspas simples direita (right single quotation mark)</td><td>&amp;rsquo;</td><td>\2019</td></tr>
	<tr><td class="c">‚</td><td class="d">aspas baixas simples (single low-9 quotation mark)</td><td>&amp;sbquo;</td><td>\201A</td></tr>
	<tr><td class="c">„</td><td class="d">aspas baixas duplas (double low-9 quotation mark)</td><td>&amp;bdquo;</td><td>\201E</td></tr>
	<tr><td class="c">‹</td><td class="d">aspas angulares simples esquerda (single left-pointing angle quotation mark)</td><td>&amp;lsaquo;</td><td>\2039</td></tr>
	<tr><td class="c">›</td><td class="d">aspas angulares simples direita (single right-pointing angle quotation mark)</td><td>&amp;rsaquo;</td><td>\203A</td></tr>
	<tr><td class="c">«</td><td class="d">aspas angulares duplas esquerda</td><td>&amp;laquo;</td><td>\00AB</td> </tr>
	<tr><td class="c">»</td><td class="d">aspas angulares duplas direita</td><td>&amp;raquo;</td><td>\00BB</td> </tr>
	<tr><td class="c">º</td><td class="d">ordenal masculino (masculine ordinal indicator)</td><td>&amp;ordm;</td><td>\00BA</td></tr>
	<tr><td class="c">ª</td><td class="d">ordinal feminino (feminine ordinal indicator)</td><td>&amp;ordf;</td><td>\00AA</td></tr>
	<tr><td class="c">–</td><td class="d">travessão en (en dash)</td><td>&amp;ndash;</td><td>\2013</td></tr>
	<tr><td class="c">—</td><td class="d">travessão em (em dash)</td><td>&amp;mdash;</td><td>\2014</td></tr>
	<tr><td class="c">­ &nbsp;</td><td class="d">hífen oculto (soft hyphen)</td><td>&amp;shy;</td><td>\00AD</td></tr>
	<tr><td class="c">¯</td><td class="d">macron (macron)</td><td>&amp;macr;</td><td>\00AF</td></tr>
	<tr><td class="c">…</td><td class="d">reticências (horizontal ellipsis)</td><td>&amp;hellip;</td><td>\2026</td></tr>
	<tr><td class="c">¦</td><td class="d">barra vertical (broken bar)</td><td>&amp;brvbar;</td><td>\00A6</td></tr>
	<tr><td class="c">•</td><td class="d">marcador (bullet)</td><td>&amp;bull;</td><td>\2022</td></tr>
	<tr><td class="c">‣</td><td class="d">marcador triangular</td><td>&amp;#8227;</td><td>\2023</td></tr>
	<tr><td class="c">¶</td><td class="d">parágrafo (pilcrow sign)</td><td>&amp;para;</td><td>\00B6</td></tr>
	<tr><td class="c">§</td><td class="d">parágrafo legal (section sign)</td><td>&amp;sect;</td><td>\00A7</td></tr>
	</tbody></table>

</div>


<div class="container-tabela-acentos">

	<h3 id="cc">Caracteres Comerciais e Monetários</h3>

	<table class="tabela-acentos">
	<tbody><tr><td class="c">©</td><td class="d">copyright (copyright sign)</td><td>&amp;copy;</td><td>\00A9</td></tr>
	<tr><td class="c">®</td><td class="d">marca registrada (registered sign)</td><td>&amp;reg</td><td>\00AE</td></tr>
	<tr><td class="c">™</td><td class="d">trade mark</td><td>&amp;trade;</td><td>\2122</td></tr>
	<tr><td class="c">¤</td><td class="d">símbolo monetário (currency sign)</td><td>&amp;curren;</td><td>\00A4</td></tr>
	<tr><td class="c">¢</td><td class="d">centavo (cent sign)</td><td>&amp;cent;</td><td>\00A2</td></tr>
	<tr><td class="c">£</td><td class="d">libra esterlina (pound sign)</td><td>&amp;pound;</td><td>\00A3</td></tr>
	<tr><td class="c">¥</td><td class="d">Iene (yen sign)</td><td>&amp;yen;</td><td>\00A5</td></tr>
	<tr><td class="c">₠</td><td class="d">ECU (european currency unit)</td><td>&amp;#8352;</td><td>\20A0</td></tr>
	<tr><td class="c">₡</td><td class="d">Colón</td><td>&amp;#8353;</td><td>\20A1</td></tr>
	<tr><td class="c">₢</td><td class="d">Cruzeiro (Brasil)</td><td>&amp;#8354;</td><td>\20A2</td></tr>
	<tr><td class="c">₣</td><td class="d">Franco (França)</td><td>&amp;#8355;</td><td>\20A3</td></tr>
	<tr><td class="c">₤</td><td class="d">Lira (Itália)</td><td>&amp;#8356;</td><td>\20A4</td></tr>
	<tr><td class="c">₥</td><td class="d">Mill (US$.001)</td><td>&amp;#8357;</td><td>\20A5</td></tr>
	<tr><td class="c">₦</td><td class="d">Naira (Nigéria)</td><td>&amp;#8358;</td><td>\20A6</td></tr>
	<tr><td class="c">₧</td><td class="d">Peseta (Espanha)</td><td>&amp;#8359;</td><td>\20A7</td></tr>
	<tr><td class="c">₨</td><td class="d">Rupee (Índia)</td><td>&amp;#8360;</td><td>\20A8</td></tr>
	<tr><td class="c">₩</td><td class="d">Won (Coréia)</td><td>&amp;#8361;</td><td>\20A9</td></tr>
	<tr><td class="c">₪</td><td class="d">Sheqel (Israel) </td><td>&amp;#8362;</td><td>\20AA</td></tr>
	<tr><td class="c">₫</td><td class="d">Dong (Vietnã)</td><td>&amp;#8363;</td><td>\20AB</td></tr>
	<tr><td class="c">€</td><td class="d">Euro</td><td>&amp;euro;</td><td>\20AC</td></tr>
	<tr><td class="c">₭</td><td class="d">Kip (Laos)</td><td>&amp;#8365;</td><td>\20AD</td></tr>
	<tr><td class="c">₮</td><td class="d">Tugrik (Mongólia)</td><td>&amp;#8366;</td><td>\20AE</td></tr>
	<tr><td class="c">₯</td><td class="d">Drachma (Grécia)</td><td>&amp;#8367;</td><td>\20AF</td></tr>
	</tbody></table>


</div>

<div class="container-tabela-acentos">

	<h3 id="mt">Caracteres Matemáticos e Lógicos</h3>

	<table class="tabela-acentos">
	<tbody><tr><td class="c"><span class="subsob">A</span>¹</td><td class="d">elevado a um</td><td>&amp;sup1;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>₁</td><td class="d">um subscrito</td><td>&amp;#8321;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>²</td><td class="d">ao quadrado</td><td>&amp;sup2;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>₂</td><td class="d">dois subscrito</td><td>&amp;#8322;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>³</td><td class="d">ao cubo</td><td>&amp;sup3;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>₃</td><td class="d">trés subscrito</td><td>&amp;#8323;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>⁴</td><td class="d">elevado a quatro</td><td>&amp;#8308;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>₄</td><td class="d">quatro subscrito</td><td>&amp;#8324;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>⁵</td><td class="d">elevado a cinco</td><td>&amp;#8309;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>₅</td><td class="d">cinco subscrito</td><td>&amp;#8325;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>⁶</td><td class="d">elevado a seis</td><td>&amp;#8310;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>₆</td><td class="d">seis subscrito</td><td>&amp;#8326;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>⁷</td><td class="d">elevado a sete</td><td>&amp;#8311;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>₇</td><td class="d">sete subscrito</td><td>&amp;#8327;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>⁸</td><td class="d">elevado a oito</td><td>&amp;#8312;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>₈</td><td class="d">oito subscrito</td><td>&amp;#8328;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>⁹</td><td class="d">elevado a nove</td><td>&amp;#8313;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>₉</td><td class="d">nove subscrito</td><td>&amp;#8329;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>⁰</td><td class="d">zero sobrescrito</td><td>&amp;#8304;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>₀</td><td class="d">zero subscrito</td><td>&amp;#8320;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>⁼</td><td class="d">igual sobrescrito</td><td>&amp;#8316;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>₌</td><td class="d">igual subscrito</td><td>&amp;#8332;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>⁺</td><td class="d">mais sobrescrito</td><td>&amp;#8314;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>₊</td><td class="d">mais subscrito</td><td>&amp;#8330;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>⁻</td><td class="d">menos sobrescrito</td><td>&amp;#8315;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>₋</td><td class="d">menos subscrito</td><td>&amp;#8331;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>⁽</td><td class="d">parênteses sobrescrito</td><td>&amp;#8317;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>⁾</td><td class="d">parênteses sobrescrito</td><td>&amp;#8318;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>₍</td><td class="d">parênteses subscrito</td><td>&amp;#8333;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>₎</td><td class="d">parênteses subscrito</td><td>&amp;#8334;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>ⁿ</td><td class="d">elevado a n</td><td>&amp;#8319;</td></tr>
	<tr><td class="c"><span class="subsob">A</span>ⁱ</td><td class="d">elevado a i</td><td>&amp;#8305;</td></tr>
	</tbody></table>


	<p>&nbsp;</p><p>

	</p><table class="tabela-acentos">
	<tbody><tr><td class="c">½</td><td class="d">fração um meio</td><td>&amp;frac12;</td><td>\000BD</td></tr>

	<tr><td class="c">⅓</td><td class="d">fração um terço</td><td>&amp;#8531;</td><td>\2153</td></tr>
	<tr><td class="c">⅔</td><td class="d">fração dois terços</td><td>&amp;#8532;</td><td>\2154</td></tr>

	<tr><td class="c">¼</td><td class="d">fração um quarto</td><td>&amp;frac14;</td><td>\00BC</td></tr>
	<tr><td class="c">¾</td><td class="d">fração três quartos</td><td>&amp;frac34;</td><td>\00BE</td></tr>

	<tr><td class="c">⅕</td><td class="d">fração um quinto</td><td>&amp;#8533;</td><td>\2155</td></tr>
	<tr><td class="c">⅖</td><td class="d">fração dois quintos</td><td>&amp;#8534;</td><td>\2156</td></tr>
	<tr><td class="c">⅗</td><td class="d">fração três quintos</td><td>&amp;#8535;</td><td>\2157</td></tr>
	<tr><td class="c">⅘</td><td class="d">fração quatro quintos</td><td>&amp;#8536;</td><td>\2158</td></tr>

	<tr><td class="c">⅙</td><td class="d">fração um sexto</td><td>&amp;#8537;</td><td>\2159</td></tr>
	<tr><td class="c">⅚</td><td class="d">fração cinco sextos</td><td>&amp;#8538;</td><td>\215A</td></tr>

	<tr><td class="c">⅐</td><td class="d">fração um sétimo</td><td>&amp;#8528;</td><td>\2151</td></tr>

	<tr><td class="c">⅛</td><td class="d">fração um oitavo</td><td>&amp;#8539;</td><td>\215B</td></tr>
	<tr><td class="c">⅜</td><td class="d">fração três oitavos</td><td>&amp;#8540;</td><td>\215C</td></tr>
	<tr><td class="c">⅝</td><td class="d">fração cinco oitavos</td><td>&amp;#8541;</td><td>\215D</td></tr>
	<tr><td class="c">⅞</td><td class="d">fração sete oitavos</td><td>&amp;#8542;</td><td>\215E</td></tr>

	<tr><td class="c">⅑</td><td class="d">fração um nono</td><td>&amp;#8529;</td><td>\2151</td></tr>

	<tr><td class="c">⅒</td><td class="d">fração um décimo</td><td>&amp;#8530;</td><td>\2152</td></tr>

	<tr><td class="c">⅟</td><td class="d">fração um sobre</td><td>&amp;#8543;</td><td>\215F</td></tr>

	</tbody></table>

	<p>&nbsp;</p><p>

	</p><table class="tabela-acentos">
	<tbody><tr><td class="c">≠</td><td>diferente</td><td>&amp;ne;</td></tr>
	<tr><td class="c">≈</td><td>quase igual</td><td>&amp;asymp;</td></tr>
	<tr><td class="c">≅</td><td>aproximadamente igual</td><td>&amp;cong;</td></tr>
	<tr><td class="c">∝</td><td>proporcional</td><td>&amp;prop;</td></tr>
	<tr><td class="c">≡</td><td>idêntico</td><td>&amp;equiv;</td></tr>
	<tr><td class="c">&gt;</td><td>maior que</td><td>&amp;gt;</td></tr>
	<tr><td class="c">&lt;</td><td>menor que</td><td>&amp;lt;</td></tr>
	<tr><td class="c">≤</td><td>menor ou igual</td><td>&amp;le;</td></tr>
	<tr><td class="c">≥</td><td>maior ou igual</td><td>&amp;ge;</td></tr>
	<tr><td class="c">±</td><td>mais ou menos</td><td>&amp;plusmn;</td></tr>
	<tr><td class="c">−</td><td>sinal de subtração</td><td>&amp;minus;</td></tr>
	<tr><td class="c">×</td><td>sinal de multiplicação</td><td>&amp;times;</td></tr>
	<tr><td class="c">÷</td><td>sinal de divisão</td><td>&amp;divide;</td></tr>
	<tr><td class="c">∗</td><td>asterisco</td><td>&amp;lowast;</td></tr>
	<tr><td class="c">⁄</td><td>barra de fração</td><td>&amp;frasl;</td></tr>
	<tr><td class="c">‰</td><td>por-mil</td><td>&amp;permil;</td></tr>
	<tr><td class="c">∫</td><td>sinal de integral</td><td>&amp;int;</td></tr>
	<tr><td class="c">∑</td><td>somatório</td><td>&amp;sum;</td></tr>
	<tr><td class="c">∏</td><td>PI</td><td>&amp;prod;</td></tr>
	<tr><td class="c">µ</td><td>&amp;micro;</td></tr>
	<tr><td class="c">√</td><td>raiz quadrada</td><td>&amp;radic;</td></tr>
	<tr><td class="c">∞</td><td>infinito</td><td>&amp;infin;</td></tr>
	<tr><td class="c">∠</td><td>ângulo</td><td>&amp;ang;</td></tr>
	<tr><td class="c">⊥</td><td>perpendicular</td><td>&amp;perp;</td></tr>
	<tr><td class="c">′</td><td>minuto</td><td>&amp;prime;</td></tr>
	<tr><td class="c">″</td><td>segundo</td><td>&amp;Prime;</td></tr>
	<tr><td class="c">°</td><td>grau</td><td>&amp;deg;</td></tr>
	<tr><td class="c">∴</td><td>consequentemente</td><td>&amp;there4;</td></tr>
	<tr><td class="c">⋅</td><td>ponto</td><td>&amp;sdot;</td></tr>
	<tr><td class="c">·</td><td>ponto do meio</td><td>&amp;middot;</td></tr>
	<tr><td class="c">∂</td><td>diferença parcial</td><td>&amp;part;</td></tr>
	<tr><td class="c">ℑ</td><td>parte imaginária do número</td><td>&amp;image;</td></tr>
	<tr><td class="c">ℵ</td><td>alef</td><td>&amp;alefsym;</td></tr>
	<tr><td class="c">ℜ</td><td>parte real do número</td><td>&amp;real;</td></tr>
	<tr><td class="c">∇</td><td>nabla</td><td>&amp;nabla;</td></tr>
	<tr><td class="c">⊕</td><td>soma direta</td><td>&amp;oplus;</td></tr>
	<tr><td class="c">⊗</td><td>produto de vetor</td><td>&amp;otimes;</td></tr>
	<tr><td class="c">ø</td><td>produto vazio</td><td>&amp;oslash;</td></tr>
	<tr><td class="c">Ø</td><td>produto vazio</td><td>&amp;Oslash;</td></tr>
	<tr><td class="c">∈</td><td>elemento de/pertence a</td><td>&amp;isin;</td></tr>
	<tr><td class="c">∉</td><td>nã é elemento de</td><td>&amp;notin;</td></tr>
	<tr><td class="c">∩</td><td>interseção</td><td>&amp;cap;</td></tr>
	<tr><td class="c">∪</td><td>união</td><td>&amp;cup;</td></tr>
	<tr><td class="c">⊂</td><td>subconjunto de</td><td>&amp;sub;</td></tr>
	<tr><td class="c">⊃</td><td>superconjunto de</td><td>&amp;sup;</td></tr>
	<tr><td class="c">⊆</td><td>subconjunto de ou igual a</td><td>&amp;sube;</td></tr>
	<tr><td class="c">⊇</td><td>superconjunto de ou igual a</td><td>&amp;supe;</td></tr>
	<tr><td class="c">∃</td><td>existe</td><td>&amp;exist;</td></tr>
	<tr><td class="c">∀</td><td>qualquer</td><td>&amp;forall;</td></tr>
	<tr><td class="c">∅</td><td>vazio</td><td>&amp;empty;</td></tr>
	<tr><td class="c">¬</td><td>não lógico</td><td>&amp;not;</td></tr>
	<tr><td class="c">∧</td><td>e lógico</td><td>&amp;and;</td></tr>
	<tr><td class="c">∨</td><td>ou lógico</td><td>&amp;or;</td></tr>
	<tr><td class="c">◊</td><td>losango</td><td>&amp;loz;</td></tr>
	<tr><td class="c">↵</td><td>retorno de carro</td><td>&amp;crarr;</td></tr>
	<tr><td class="c">⌈</td><td>teto esquerdo</td><td>&amp;lceil;</td></tr>
	<tr><td class="c">⌉</td><td>teto direito</td><td>&amp;rceil;</td></tr>
	<tr><td class="c">⌊</td><td>piso esquerdo</td><td>&amp;lfloor;</td></tr>
	<tr><td class="c">⌋</td><td>piso direito</td><td>&amp;rfloor;</td></tr><tr>
	</tr></tbody></table>

</div>

<div class="container-tabela-acentos">

	<h3 id="oa">Outros Acentos e Caracteres Especiais</h3>

	<table class="tabela-acentos">
	<tbody><tr><td class="c">¡</td><td>&amp;iexcl;</td><td class="c">¿</td><td>&amp;iquest;</td></tr>
	<tr><td class="c">ñ</td><td>&amp;ntilde;</td><td class="c">Ñ</td><td>&amp;Ntilde;</td></tr>
	<tr><td class="c">ƒ</td><td>&amp;fnof;</td><td class="c">ß</td><td>&amp;szlig;</td></tr>
	<tr><td class="c">ä</td><td>&amp;auml;</td><td class="c">Ä</td><td>&amp;Auml;</td></tr>
	<tr><td class="c">å</td><td>&amp;aring;</td><td class="c">Å</td><td>&amp;Aring;</td></tr>
	<tr><td class="c">ë</td><td>&amp;euml;</td><td class="c">Ë</td><td>&amp;Euml;</td></tr>
	<tr><td class="c">è</td><td>&amp;grave;</td><td class="c">È</td><td>&amp;Egrave;</td></tr>
	<tr><td class="c">ï</td><td>&amp;iuml;</td><td class="c">Ï</td><td>&amp;Iuml;</td></tr>
	<tr><td class="c">ì</td><td>&amp;igrave;</td><td class="c">Ì</td><td>&amp;Igrave;</td></tr>
	<tr><td class="c">î</td><td>&amp;icirc;</td><td class="c">Î</td><td>&amp;Icirc;</td></tr>
	<tr><td class="c">ö</td><td>&amp;ouml;</td><td class="c">Ö</td><td>&amp;Ouml;</td></tr>
	<tr><td class="c">ò</td><td>&amp;ograve;</td><td class="c">Ò</td><td>&amp;Ograve;</td></tr>
	<tr><td class="c">ù</td><td>&amp;ugrave;</td><td class="c">Ù</td><td>&amp;Ugrave;</td></tr>
	<tr><td class="c">û</td><td>&amp;ucirc;</td><td class="c">Û</td><td>&amp;Ucirc;</td></tr>
	<tr><td class="c">ü</td><td>&amp;uuml;</td><td class="c">Ü</td><td>&amp;Uuml;</td></tr>
	<tr><td class="c">ý</td><td>&amp;yacute;</td><td class="c">Ý</td><td>&amp;Yacute;</td></tr>
	<tr><td class="c">ÿ</td><td>&amp;yuml;</td><td class="c">Ÿ</td><td>&amp;Yuml;</td></tr>
	<tr><td class="c">æ</td><td>&amp;aelig;</td><td class="c">Æ</td><td>&amp;AElig;</td></tr>
	<tr><td class="c">œ</td><td>&amp;oelig;</td><td class="c">Œ</td><td>&amp;OElig;</td></tr>
	<tr><td class="c">†</td><td>&amp;dagger;</td><td class="c">‡</td><td>&amp;Dagger;</td></tr>
	<tr><td class="c">š</td><td>&amp;scaron;</td><td class="c">Š</td><td>&amp;Scaron;</td></tr>
	<tr><td class="c">þ</td><td>&amp;thorn;</td><td class="c">Þ</td><td>&amp;THORN;</td></tr>
	<tr><td class="c">ð</td><td>&amp;eth;</td><td class="c">Ð</td><td>&amp;ETH;</td></tr>
	</tbody></table>

</div>

<div class="container-tabela-acentos">

	<h3 id="cg">Caracteres Gregos</h3>

	<table class="tabela-acentos">
	<tbody><tr><td class="c">α</td><td>&amp;alpha;</td><td class="c">Α</td><td>&amp;Alpha;</td></tr>
	<tr><td class="c">β</td><td>&amp;beta;</td><td class="c">Β</td><td>&amp;Beta;</td></tr>
	<tr><td class="c">γ</td><td>&amp;gamma;</td><td class="c">Γ</td><td>&amp;Gamma;</td></tr>
	<tr><td class="c">δ</td><td>&amp;delta;</td><td class="c">Δ</td><td>&amp;Delta;</td></tr>
	<tr><td class="c">ε</td><td>&amp;epsilon;</td><td class="c">Ε</td><td>&amp;Epsilon;</td></tr>
	<tr><td class="c">ζ</td><td>&amp;zeta;</td><td class="c">Ζ</td><td>&amp;Zeta;</td></tr>
	<tr><td class="c">η</td><td>&amp;eta;</td><td class="c">Η</td><td>&amp;Eta;</td></tr>
	<tr><td class="c">θ</td><td>&amp;theta;</td><td class="c">Θ</td><td>&amp;Theta;</td></tr>
	<tr><td class="c">ι</td><td>&amp;iota;</td><td class="c">Ι</td><td>&amp;Iota;</td></tr>
	<tr><td class="c">κ</td><td>&amp;kappa;</td><td class="c">Κ</td><td>&amp;Kappa;</td></tr>
	<tr><td class="c">λ</td><td>&amp;lambda;</td><td class="c">Λ</td><td>&amp;Lambda;</td></tr>
	<tr><td class="c">μ</td><td>&amp;mu;</td><td class="c">Μ</td><td>&amp;Mu;</td></tr>
	<tr><td class="c">ν</td><td>&amp;nu;</td><td class="c">Ν</td><td>&amp;Nu;</td></tr>
	<tr><td class="c">ξ</td><td>&amp;xi;</td><td class="c">Ξ</td><td>&amp;Xi;</td></tr>
	<tr><td class="c">ο</td><td>&amp;omicron;</td><td class="c">Ο</td><td>&amp;Omicron;</td></tr>
	<tr><td class="c">π</td><td>&amp;pi;</td><td class="c">Π</td><td>&amp;Pi;</td></tr>
	<tr><td class="c">ρ</td><td>&amp;rho;</td><td class="c">Ρ</td><td>&amp;Rho;</td></tr>
	<tr><td class="c">σ</td><td>&amp;sigma;</td><td class="c">Σ</td><td>&amp;Sigma;</td></tr>
	<tr><td class="c">ς</td><td>&amp;sigmaf;</td><td class="c">ϖ</td><td>&amp;piv;</td></tr>
	<tr><td class="c">τ</td><td>&amp;tau;</td><td class="c">Τ</td><td>&amp;Tau;</td></tr>
	<tr><td class="c">υ</td><td>&amp;upsilon;</td><td class="c">Υ</td><td>&amp;Upsilon;</td></tr>
	<tr><td class="c">φ</td><td>&amp;phi;</td><td class="c">Φ</td><td>&amp;Phi;</td></tr>
	<tr><td class="c">χ</td><td>&amp;chi;</td><td class="c">Χ</td><td>&amp;Chi;</td></tr>
	<tr><td class="c">ψ</td><td>&amp;psi;</td><td class="c">Ψ</td><td>&amp;Psi;</td></tr>
	<tr><td class="c">ω</td><td>&amp;omega;</td><td class="c">Ω</td><td>&amp;Omega;</td></tr>
	<tr><td class="c">ϑ</td><td>&amp;thetasym;</td><td class="c">ϒ</td><td>&amp;upsih;</td></tr>
	</tbody></table>

</div>


';
