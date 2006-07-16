<?php

global $wgAllMessagesBe;
$wgAllMessagesBe = array(
# Belarusian Cyrillic alphabet:
# Аа Бб Вв Гг Дд (ДЖдж ДЗдз) Ее Ёё Жж Зз Іі Йй Кк Лл Мм Нн Оо Пп Рр Сс Тт Уу Ўў Фф Хх Цц Чч Шш Ыы Ьь Ээ Юю Яя
# Short ([^a-z]): абвгд (ДЖдж ДЗдз) еёжзійклмнопрстуўфхцчшыьэюя
#
# Belarusian Latin alphabet:
# Aa Bb Cc Ćć Čč Dd (DŽdž DZdz) Ee Ff Gg Hh Ii Jj Kk Ll Łł Mm Be Ńń Oo Pp Rr Ss Śś Šš Tt Uu Ŭŭ Vv Yy Zz Źź Žž
# Short ([^a-z]): ćč (DŽdž)  łńśšŭźž

# Note: use /u (unicode) and /i to turn of case-sensativity.
'linktrail' => '/^([абвгґджзеёжзійклмнопрстуўфхцчшыьэюяćčłńśšŭźža-z]+)(.*)$/sDu',

'1movedto2' => '[[$1]] перанесеная ў [[$2]]',
'1movedto2_redir' => '[[$1]] перанесеная ў [[$2]] з выдаленьнем перанакіраваньня',
'about' => 'Пра',
'aboutpage' => '{{ns:Project}}:Пра {{GRAMMAR:вінавальны|{{SITENAME}}}}',
'aboutsite' => 'Пра {{GRAMMAR:вінавальны|{{SITENAME}}}}',
'accmailtext' => 'Пароль для «$1» быў адасланы на адрас $2.',
'accmailtitle' => 'Пароль адасланы.',
'accountcreated' => 'Рахунак створаны',
'accountcreatedtext' => 'Рахунак удзельніка для $1 быў створаны.',
'acct_creation_throttle_hit' => 'На жаль, Вы ўжо стварылі $1 рахункаў. Болей нельга.',
'actioncomplete' => 'Дзеяньне завершанае',
'addedwatch' => 'Дададзеная ў сьпіс назіраньня',
'addedwatchtext' => "Артыкул «$1» быў дададзены да Вашага [[{{ns:Special}}:Watchlist|сьпісу назіраньня]].
Наступныя зьмены ў гэтым артыкуле і зьвязанай зь ім старонцы абмеркаваньняў будуць бачныя там, і старонка будзе выглядаць '''тлустай''' на [[{{ns:Special}}:Recentchanges|старонцы са сьпісам апошніх зьменаў]], каб зьмены было лягчэй заўважыць.

Калі Вы захочаце выдаліць артыкул са сьпісу назіраньня, націсьніце «не назіраць» у спэцыяльным радку зьверху артыкула.",
'administrators' => '{{ns:Project}}:Адміністрацыя',
'allarticles' => 'Усе артыкулы',
'allinnamespace' => 'Усе старонкі (прастора назваў: $1)',
'alllogstext' => 'Сумесны паказ журналаў загрузкі, выдаленьня, абароны, блякаваньня і адміністраваньня.
Вы можаце адфільтраваць вынікі па тыпе журналу, удзельніку ці старонцы.',
'allmessages' => 'Сыстэмныя паведамленьні',
'allmessagescurrent' => 'Бягучы тэкст',
'allmessagesdefault' => 'Тэкст па змоўчаньні',
'allmessagesmodified' => 'Паказаць толькі зьмененыя',
'allmessagesname' => 'Назва',
'allmessagesnotsupportedDB' => "'''{{ns:Special}}:AllMessages''' не падтрымліваецца, таму што адключанае '''\$wgUseDatabaseMessages'''.",
'allmessagesnotsupportedUI' => 'Ваша цяперашняя мова <b>$1</b> інтэрфэйсу не падтрымліваецца {{ns:Special}}:AllMessages гэтага сайту.',
'allmessagestext' => 'Сьпіс усіх сыстэмных паведамленьняў, якія існуюць у прасторы назваў MediaWiki.',
'allnotinnamespace'	=> 'Усе старонкі (не ў прасторы назваў $1)',
'allowemail' => 'Дазволіць атрыманьне лістоў ад іншых удзельнікаў і ўдзельніц',
'allpages' => 'Усе старонкі',
'allpagesfrom' => 'Паказаць старонкі, пачынаючы з:',
'allpagesnext' => 'Наступныя',
'allpagesprefix' => 'Паказаць старонкі, назвы якіх пачынаюцца з:',
'allpagesprev' => 'Папярэднія',
'allpagessubmit' => 'Паказаць',
'alphaindexline' => 'ад $1 да $2',
'already_bureaucrat' => 'Гэты ўдзельнік ужо зьяўляецца бюракратам',
'already_steward' => 'Гэты ўдзельнік ужо зьяўляецца кіраўніком',
'already_sysop' => 'Гэты ўдзельнік ужо зьяўляецца адміністратарам',
'alreadyloggedin' => "<strong>Удзельнік $1, Вы ўжо ўвайшлі!</strong><br />",
'ancientpages' => 'Найстарэйшыя старонкі',
'and' => 'і',
'anoneditwarning' => "'''Папярэджаньне:''' Вы не ўвайшлі. Ваш IP-адрас будзе запісаны ў гісторыі гэтай старонкі.",
'anontalk' => 'Гутаркі для гэтага IP-адраса',
'anonymous' => 'Ананімныя ўдзельнікі і ўдзельніцы {{GRAMMAR:родны|{{SITENAME}}}}',
'apr' => '04',
'april' => 'красавіка',
'article' => 'Артыкул',
'articleexists' => 'Старонка з такой назвай ужо існуе, альбо абраная Вамі назва недапушчальная.
Калі ласка, абярыце іншую назву.',
'articlepage' => 'Паказаць артыкул',
'articletitles' => "Артыкулы, якія пачынаюцца з ''$1''",
'aug' => '08',
'august' => 'жніўня',
'autoblocker'	=> "Вы аўтаматычна заблякаваныя, таму што Ваш IP-адрас нядаўна ўжываўся «[[{{ns:User}}:$1|$1]]». Прычына блякаваньня $1 наступная: «'''$2'''»",
'badarticleerror' => 'Гэтае дзеяньне немагчыма выканаць на гэтай старонцы.',
'badfilename' => 'Назва файла была зьмененая на «$1».',
'badfiletype' => '«.$1» не зьяўляецца рэкамэндаваным фарматам для файлаў выяваў.',
'badipaddress' => 'Некарэктны IP-адрас',
'badquery' => 'Няслушна сфармаваны пошукавы запыт',
'badretype' => 'Уведзеныя Вамі паролі не супадаюць.',
'badtitle' => 'Некарэктная назва',
'blanknamespace' => 'Артыкул',
'blockedtitle' => 'Удзельнік заблякаваны',
'blockip' => 'Блякаваньне ўдзельніка ці ўдзельніцы',
'blockipsuccesssub' => 'Блякаваньне пасьпяховае',
'blocklink' => 'заблякаваць',
'booksources' => 'Кнігарні',
'brokenredirects' => 'Некарэктныя перанакіраваньні',
'brokenredirectstext' => 'Наступныя перанакіраваньні спасылаюцца на неіснуючыя старонкі:',
'bydate' => 'па даце',
'byname' => 'па назьве',
'bysize' => 'па памеры',
'cancel' => 'Адмяніць',
'cannotdelete' => 'Немагчыма выдаліць указаную старонку альбо выяву. (Магчыма, яна ўжо выдаленая кімсьці іншым.)',
'categories' => 'Катэгорыі',
'categoriespagetext' => 'У {{GRAMMAR:месны|{{SITENAME}}}} існуюць наступныя катэгорыі:',
'category' => 'катэгорыя',
'category_header' => 'Артыкулы ў катэгорыі «$1»',
'categoryarticlecount' => 'У гэтай катэгорыі ёсьць $1 {{PLURAL:$1|артыкул|артыкулы|артыкулаў}}.',
'changepassword' => 'Зьмяніць пароль',
'columns' => 'Слупкоў:',
'compareselectedversions' => 'Параўнаць выбраныя вэрсіі',
'confirmdelete' => 'Пацьверджаньне выдаленьня',
'confirmemail' => 'Пацьвердзіць адрас электроннай пошты',
'confirmprotecttext' => 'Вы сапраўды жадаеце абараніць гэтую старонку?',
'confirmunprotecttext' => 'Вы сапраўды жадаеце зьняць абарону з гэтай старонкі?',
'contribslink' => 'унёсак',
'contributions' => 'Унёсак удзельніка/удзельніцы',
'copyright' => 'Зьмест старонкі падпадае пад ліцэнзію $1.',
'copyrightpage' => '{{ns:Project}}:Аўтарскія правы',
'copyrightpagename' => 'Аўтарскія правы {{GRAMMAR:родны|{{SITENAME}}}}',
'copyrightwarning' => '<strong>НЕЛЬГА БЕЗ [[{{ns:Project}}:Дазволы на выкарыстаньне матэрыялаў|ДАЗВОЛУ]] ДАДАВАЦЬ МАТЭРЫЯЛЫ, АБАРОНЕНЫЯ АЎТАРСКІМ ПРАВАМ!</strong>',
'couldntremove' => 'Немагчыма выдаліць «$1»...',
'createaccount' => 'Стварыць новы рахунак',
'createaccountmail' => 'па электроннай пошце',
'creditspage' => 'Падзякі',
'cur' => 'бяг',
'currentevents' => 'Бягучыя падзеі',
'currentevents-url' => 'Бягучыя падзеі',
'currentrev' => 'Бягучая вэрсія',
'currentrevisionlink' => 'паказаць бягучую вэрсію',
'data' => 'Зьвесткі',
'databaseerror' => 'Памылка базы зьвестак',
'dateformat' => 'Фармат даты',
'datetime' => 'Дата і час',
'deadendpages' => 'Тупіковыя старонкі',
'dec' => '12',
'december' => 'сьнежня',
'defaultns' => 'Па змоўчаньні, шукаць у наступных прасторах назваў:',
'delete' => 'Выдаліць',
'delete_and_move' => 'Выдаліць і перанесьці',
'delete_and_move_confirm' => 'Так, выдаліць старонку',
'deletecomment' => 'Прычына выдаленьня',
'deletedarticle' => 'выдаленая «[[$1]]»',
'deletedrev' => '[выдаленая]',
'deletedrevision' => 'Выдаленая старая вэрсія $1.',
'deleteimg' => 'выдаліць',
'deleteimgcompletely' => 'Выдаліць усе вэрсіі гэтага файла',
'deletepage' => 'Выдаліць старонку',
'deletesub' => '(Выдаленьне «$1»)',
'deletethispage' => 'Выдаліць гэтую старонку',
'deletionlog' => 'журнал выдаленьняў',
'dellogpage' => 'Журнал_выдаленьняў',
'dellogpagetext' => 'Сьпіс апошніх выдаленьняў.',
'diff' => 'розьн',
'difference' => '(Адрозьненьні паміж вэрсіямі)',
'disambiguations' => 'Старонкі-неадназначнасьці',
'disambiguationspage' => 'Шаблён:Неадназначнасьць',
'disclaimerpage' => '{{ns:Project}}:Адмова ад адказнасьці',
'disclaimers' => 'Адмова ад адказнасьці',
'doubleredirects' => 'Двайныя перанакіраваньні',
'edit' => 'Рэдагаваць',
'editconflict' => 'Канфлікт рэдагаваньня: $1',
'editcurrent' => 'Рэдагаваць бягучую вэрсію гэтай старонкі',
'edithelp' => 'Дапамога ў рэдагаваньні',
'edithelppage' => '{{ns:Help}}:Рэдагаваньне',
'editing' => 'Рэдагаваньне: $1',
'editingcomment' => 'Рэдагаваньне: $1 (камэнтар)',
'editingsection' => 'Рэдагаваньне: $1 (сэкцыя)',
'editsection' => 'рэдагаваць',
'editold' => 'рэдагаваць',
'editsectionhint' => 'Рэдагаваць сэкцыю «$1»',
'editthispage' => 'Рэдагаваць гэтую старонку',
'editusergroup' => 'Рэдагаваць групы ўдзельнікаў і ўдзельніц',
'email' => 'Электронная пошта',
'emailfrom' => 'Ад',
'emailmessage' => 'Паведамленьне',
'emailpage' => 'Даслаць ліст ўдзельніку ці ўдзельніцы па электроннай пошце',
'emailsend' => 'Даслаць',
'emailsubject' => 'Тэма',
'emailto' => 'Каму',
'emailuser' => 'Даслаць ліст па электроннай пошце гэтаму ўдзельніку/гэтай удзельніцы',
'enotif_newpagetext' => 'Гэта новая старонка.',
'error' => 'Памылка',
'errorpagetitle' => 'Памылка',
'exblank' => 'старонка была пустая',
'excontent' => 'колішні зьмест: «$1»',
'export' => 'Экспартаваць старонкі',
'exportcuronly' => 'Экспартаваць толькі бягучую вэрсію, бяз поўнай гісторыі',
'extlink_tip' => 'Зьнешняя спасылка (не забывайцеся пачынаць з http:// )',
'feb' => '02',
'february' => 'лютага',
'filecopyerror' => 'Немагчыма cкапіяваць файл «$1» у «$2».',
'filedeleteerror' => 'Немагчыма выдаліць файл «$1».',
'filedesc' => 'Апісаньне',
'filename' => 'Назва файла',
'filenotfound' => 'Немагчыма знайсьці файл «$1».',
'filerenameerror' => 'Немагчыма перайменаваць файл «$1» у «$2».',
'filesource' => 'Крыніца',
'fileuploadsummary' => 'Апісаньне:',
'friday' => 'пятніца',
'getimagelist' => 'атрыманьне сьпісу файлаў',
'go' => 'Старонка',
'help' => 'Дапамога',
'helppage' => '{{ns:Help}}:Зьмест',
'hide' => 'схаваць',
'hidetoc' => 'схаваць',
'hist' => 'гіст',
'history' => 'Гісторыя старонкі',
'history_short' => 'Гісторыя',
'historywarning' => 'Папярэджаньне: у старонкі, якую Вы зьбіраецеся выдаліць, ёсьць гісторыя:&nbsp;',
'hr_tip' => 'Гарызантальная лінія (не выкарыстоўвайце часта)',
'ignorewarning' => 'Праігнараваць папярэджаньне і захаваць файл.',
'illegalfilename' => 'Назва файла «$1» зьмяшчае сымбалі, якія нельга выкарыстоўваць у назвах старонак. Калі ласка, зьмяніце назву файла і паспрабуйце загрузіць яго зноў.',
'ilsubmit' => 'Шукаць',
'image_sample' => 'Прыклад.jpg',
'imagelinks' => 'Спасылкі',
'imagelist' => 'Сьпіс файлаў',
'imagelisttext' => 'Сьпіс <strong>$1</strong> файлаў, адсартаваных <strong>$2</strong>.',
'imagepage' => 'Паказаць старонку выявы',
'imgdelete' => 'выдаліць',
'imgdesc' => 'апісаньне',
'imghistory' => 'Гісторыя файла',
'import' => 'Імпартаваць старонкі',
'importfailed' => 'Немагчыма імпартаваць: $1',
'infiniteblock' => 'назаўсёды',
'info_short' => 'Інфармацыя',
'infosubtitle' => 'Інфармацыя пра старонку',
'internalerror' => 'Унутраная памылка',
'invert' => 'Адваротны выбар',
'ip_range_invalid' => 'Некарэктны дыяпазон IP-адрасоў.',
'ipaddress' => 'IP-адрас',
'ipadressorusername' => 'IP-адрас альбо імя ўдзельніка/ўдзельніцы',
'ipbexpiry' => 'Тэрмін',
'ipblocklist' => 'Сьпіс заблякаваных IP-адрасоў і імёнаў удзельнікаў',
'ipboptions' => '2 гадзіны:2 hours,1 дзень:1 day,3 дня:3 days,1 тыдзень:1 week,2 тыдня:2 weeks,1 месяц:1 month,3 месяца:3 months,6 месяцаў:6 months,1 год:1 year,назаўсёды:infinite',
'ipbotheroption' => 'іншы',
'ipbreason' => 'Прычына',
'isredirect' => 'старонка-перанакіраваньне',
'istemplate'	=> 'уключэньне',
'jan' => '01',
'january' => 'студзеня',
'jul' => '07',
'july' => 'ліпеня',
'jun' => '06',
'june' => 'чэрвеня',
'lastmodified' => 'Гэтая старонка апошні раз рэдагавалася $1.',
'lastmodifiedby' => 'Гэтую старонку апошні раз рэдагаваў $2 $1.',
'link_tip' => 'Унутраная спасылка',
'linklistsub' => '(Сьпіс спасылак)',
'linkshere' => 'Наступныя старонкі спасылаюцца на гэтую:',
'linkstoimage' => 'Наступныя старонкі спасылаюцца на гэты файл:',
'listingcontinuesabbrev' => " (працяг)",
'listredirects' => 'Сьпіс перанакіраваньняў',
'listusers' => 'Сьпіс удзельнікаў і ўдзельніц',
'loadhist' => 'Загрузка гісторыі старонкі',
'loadingrev' => 'Загрузка вэрсіі для параўнаньня',
'localtime' => 'Мясцовы час',
'log' => 'Журналы падзей',
'logout' => 'Выйсьці',
'lonelypages' => 'Старонкі-сіраціны',
'longpages' => 'Доўгія старонкі',
'mailmypassword' => 'Даслаць мне пароль',
'mainpage' => 'Галоўная старонка',
'makesysopname' => 'Імя ўдзельніка/ўдзельніцы:',
'mar' => '03',
'march' => 'сакавіка',
'math_sample' => 'Зьмясьціце тут формулу',
'math_syntax_error' => 'сынтаксычная памылка',
'math_tip' => 'Матэматычная формула (LaTeX)',
'math_unknown_error' => 'невядомая памылка',
'math_unknown_function' => 'невядомая функцыя',
'may' => '05',
'may_long' => 'траўня',
'media_sample' => 'Прыклад.ogg',
'media_tip' => 'Спасылка на мэдыя-файл',
'mimesearch' => 'Пошук па MIME',
'minlength' => 'Назва файла павінна быць не карацейшай за тры сымбалі.',
'minoredit' => 'Гэта дробная праўка',
'minoreditletter' => 'Д',
'missingimage' => '<b>Выява адсутнічае</b><br /><i>$1</i>',
'monday' => 'панядзелак',
'mostcategories' => 'Старонкі з найбольшай колькасьцю катэгорый',
'mostimages' => 'Выявы, на якія найчасьцей спасылаюцца',
'mostlinked' => 'Старонкі, на якія найчасьцей спасылаюцца',
'mostlinkedcategories' => 'Катэгорыі з найбольшай колькасьцю артыкулаў',
'mostrevisions' => 'Старонкі з найбольшай колькасьцю рэдагаваньняў',
'move' => 'Перанесьці',
'movearticle' => 'Перанесьці старонку',
'movedto' => 'перанесеная ў',
'movepage' => 'Перанесьці старонку',
'movepagebtn' => 'Перанесьці старонку',
'movereason' => 'Прычына',
'movetalk' => 'Перанесьці таксама старонку абмеркаваньня.',
'movethispage' => 'Перанесьці гэтую старонку',
'mw_math_html' => 'HTML калі магчыма, інакш PNG',
'mw_math_mathml' => 'MathML калі магчыма (экспэрымэнтальна)',
'mw_math_png' => 'Заўсёды паказваць як PNG',
'mw_math_simple' => 'HTML у простых выпадках, інакш PNG',
'mycontris' => 'Мой унёсак',
'mypage' => 'Мая старонка',
'mytalk' => 'Мае размовы',
'namespace' => 'Прастора назваў:',
'namespacesall' => 'усе',
'navigation' => 'Навігацыя',
'nbytes' => '$1 {{PLURAL:$1|байт|байта|байтаў}}',
'ncategories' => '$1 {{PLURAL:$1|катэгорыя|катэгорыі|катэгорый}}',
'newarticle' => '(Новы)',
'newarticletext' =>
"Вы прыйшлі па спасылцы на старонку, якая яшчэ не існуе.
Каб стварыць яе, напішыце тэкст у полі ніжэй (глядзіце [[{{ns:Help}}:Зьмест|старонку дапамогі]] дзеля дадатковай інфармацыі).
Калі Вы трапілі сюды памылкова, націсьніце '''назад''' у вашым браўзэры",
'newbies' => 'Пачынаючыя ўдзельнікі і ўдзельніцы',
'newimages' => 'Галерэя новых файлаў',
'newmessagesdifflink' => 'розьніца з папярэдняй вэрсіяй',
'newmessageslink' => 'новыя паведамленьні',
'newpage' => 'Новая старонка',
'newpageletter' => 'Н',
'newpages' => 'Новыя старонкі',
'newpassword' => 'Новы пароль:',
'newtitle' => 'Новая назва',
'newwindow' => '(адчыняецца ў новым акне)',
'nextdiff' => 'Перайсьці да наступнай зьмены →',
'nextn' => 'наступныя $1',
'nextpage' => 'Наступная старонка ($1)',
'nlinks' => '$1 {{PLURAL:$1|спасылка|спасылкі|спасылак}}',
'noarticletext' => 'Зараз тэкст на гэтай старонцы адсутнічае. Вы можаце [[{{ns:special}}:Search/{{PAGENAME}}|пашукаць гэтую назву]] ў іншых старонках альбо [{{fullurl:{{NAMESPACE}}:{{PAGENAME}}|action=edit}} рэдагаваць гэтую старонку].',
'nodb' => 'Немагчыма выбраць базу зьвестак $1',
'noemailtitle' => 'Адрас электроннай пошты адсутнічае',
'noexactmatch' => "'''Старонкі з гэткай назвай не існуе.''' Вы можаце '''[[:$1|стварыць гэтую старонку]]'''.",
'nohistory' => 'Гісторыя зьменаў для гэтай старонкі адсутнічае.',
'noimages' => 'Выявы адсутнічаюць.',
'nolinkshere' => 'Ніводная старонка сюды не спасылаецца.',
'nolinkstoimage' => 'Ніводная старонка не спасылаецца на гэты файл.',
'nosuchaction' => 'Няма такога дзеяньня',
'nosuchspecialpage' => 'Такой спэцыяльнай старонкі не існуе',
'nosuchuser' => 'Не існуе ўдзельніка ці ўдзельніцы «$1».
Праверце напісаньне, альбо выкарыстайце форму ніжэй, каб стварыць новы рахунак ўдзельніка ці ўдзельніцы.',
'nosuchusershort' => 'Не існуе ўдзельніка ці ўдзельніцы «$1». Праверце напісаньне.',
'notanarticle' => 'Не артыкул',
'note' => '<strong>Заўвага: </strong>',
'nov' => '11',
'november' => 'лістапада',
'nowatchlist' => 'Ваш сьпіс назіраньня — пусты.',
'nowiki_sample' => 'Пішыце сюды нефарматаваны тэкст',
'nowiki_tip' => 'Ігнараваць вікі-фарматаваньне',
'nrevisions' => '$1 {{PLURAL:$1|вэрсія|вэрсіі|вэрсій}}',
'nstab-category' => 'Катэгорыя',
'nstab-help' => 'Дапамога',
'nstab-image' => 'Файл',
'nstab-main' => 'Артыкул',
'nstab-media' => 'Мэдыя',
'nstab-mediawiki' => 'Паведамленьне',
'nstab-project' => 'Старонка праекту',
'nstab-special' => 'Спэцыяльная',
'nstab-template' => 'Шаблён',
'nstab-user' => 'Старонка ўдзельніка/ўдзельніцы',
'numauthors' => 'Колькасьць розных аўтараў і аўтарак (артыкула): $1',
'numedits' => 'Колькасьць зьменаў (артыкула): $1',
'numtalkauthors' => 'Колькасьць розных аўтараў і аўтарак (старонкі абмеркаваньня): $1',
'numtalkedits' => 'Колькасьць зьменаў (старонкі абмеркаваньня): $1',
'numwatchers' => 'Колькасьць назіральнікаў і назіральніц: $1',
'nviews' => '$1 прагляд(у,аў)',
'oct' => '10',
'october' => 'кастрычніка',
'ok' => 'Добра',
'oldpassword' => 'Стары пароль:',
'orig' => 'арыг',
'otherlanguages' => 'На іншых мовах',
'others' => 'іншыя',
'pagemovedtext' => 'Старонка «[[$1]]» перанесеная ў «[[$2]]».',
'pagetitle' => '$1 - {{SITENAME}}',
'perfcached' => 'Наступныя зьвесткі кэшаваныя і могуць быць састарэлымі.',
'perfcachedts' => 'Наступныя зьвесткі кэшаваныя і апошні раз былі абноўленыя $1.',
'permalink' => 'Сталая спасылка',
'popularpages' => 'Папулярныя старонкі',
'portal' => 'Суполка',
'portal-url' => '{{ns:Project}}:Суполка',
'postcomment' => 'Пракамэнтаваць',
'powersearch' => 'Пошук',
'preferences' => 'Устаноўкі',
'prefixindex' => 'Пошук старонак па пачатку назвы',
'prefs-misc' => 'Рознае',
'prefs-rc' => 'Апошнія зьмены',
'prefs-watchlist' => 'Сьпіс назіраньня',
'preview' => 'Прагляд',
'previewnote' => '<strong>Гэта толькі папярэдні прагляд і зьмены яшчэ не былі захаваныя!</strong>',
'previousdiff' => '← Перайсьці да папярэдняй зьмены',
'prevn' => 'папярэднія $1',
'printableversion' => 'Вэрсія для друку',
'privacy' => 'Правілы адносна прыватнасьці',
'privacypage' => '{{ns:Project}}:Правілы адносна прыватнасьці',
'projectpage' => 'Паказаць старонку праекту',
'protect' => 'Абараніць',
'protectcomment' => 'Прычына для абароны',
'protectedarticle' => 'абароненая «[[$1]]»',
'protectedpage' => 'Абароненая старонка',
'protectedpagewarning' => "<strong>ПАПЯРЭДЖАНЬНЕ:  Гэтая старонка была абароненая, таму толькі адміністратары могуць рэдагаваць яе. Упэўніцеся, што Вы кіруецеся [[{{ns:Project}}:Рэдагаваньне абароненых старонак|правіламі рэдагаваньня абароненых старонак]].</strong>",
'protectsub' => '(Абарона «$1»)',
'protectthispage' => 'Абараніць гэтую старонку',
'qbbrowse' => 'Праглядзець',
'qbedit' => 'Рэдагаваць',
'qbfind' => 'Знайсьці',
'qbpageoptions' => 'Гэтая старонка',
'qbspecialpages' => 'Спэцыяльныя старонкі',
'randompage' => 'Выпадковая старонка',
'randomredirect' => 'Выпадковае перанакіраваньне',
'rclinks' => "Паказаць апошнія $1 зьменаў за мінулыя $2 дзён<br />$3",
'rclistfrom' => 'Паказаць зьмены з $1',
'rclsub' => '(да старонак, спасылкі на якія ёсьць на «$1»)',
'rcnotefrom' => "Ніжэй знаходзяцца зьмены з <b>$2</b> (да <b>$1</b> на старонку).",
'rcshowhideanons' => '$1 ананімаў',
'rcshowhidebots' => '$1 робатаў',
'rcshowhideliu' => '$1 зарэгістраваных',
'rcshowhidemine' => '$1 мае праўкі',
'rcshowhideminor' => '$1 дробныя праўкі',
'recentchanges' => 'Апошнія зьмены',
'recentchangesall' => 'усе',
'recentchangeslinked' => 'Зьвязаныя праўкі',
'recentchangestext' => 'Сачыце за апошнімі зьменамі ў {{GRAMMAR:месны|{{SITENAME}}}} на гэтай старонцы.',
'redirectedfrom' => '(Перанакіраваная з $1)',
'redirectpagesub' => 'Старонка-перанакіраваньне',
'removechecked' => 'Выдаліць выбраныя старонкі са сьпісу назіраньня',
'removedwatch' => 'Выдаленая са сьпісу назіраньня',
'removedwatchtext' => 'Старонка «[[:$1]]» была выдаленая з Вашага сьпісу назіраньня.',
'removingchecked' => 'Выдаленьне выбраных старонак са сьпісу назіраньня...',
'resetprefs' => 'Скінуць',
'restorelink' => 'выдаленыя зьмены ($1)',
'restrictedpheading' => 'Спэцыяльныя старонкі з абмежаваным доступам',
'resultsperpage' => 'Колькасьць вынікаў на старонцы',
'retrievedfrom' => 'Атрымана з «$1»',
'returnto' => 'Вярнуцца да $1.',
'reupload' => 'Загрузіць зноў',
'reuploaddesc' => 'Вярнуцца да формы загрузкі.',
'revertimg' => 'вярнуць',
'revhistory' => 'Гісторыя зьменаў',
'revisionasof' => 'Вэрсія ад $1',
'revnotfound' => 'Вэрсія ня знойдзеная',
'rollback' => 'Адмяніць рэдагаваньні',
'rows' => 'Радкоў:',
'saturday' => 'субота',
'savearticle' => 'Захаваць старонку',
'savefile' => 'Захаваць файл',
'saveprefs' => 'Захаваць',
'saveusergroups' => 'Захаваць групы ўдзельнікаў і ўдзельніц',
'search' => 'Пошук',
'searchresults' => 'Вынікі пошуку',
'searchresultshead' => 'Пошук',
'searchresulttext' => 'Для атрыманьня больш падрабязнай інфармацыі пра пошук у {{GRAMMAR:месны|{{SITENAME}}}}, глядзіце [[{{ns:Project}}:Пошук|Пошук у {{GRAMMAR:месны|{{SITENAME}}}}]].',
'sep' => '09',
'september' => 'верасьня',
'servertime' => 'Бягучы час на сэрвэры',
'sharedupload' => 'Гэты файл зьяўляецца агульным і можа выкарыстоўвацца іншымі праектамі.',
'shortpages' => 'Кароткія старонкі',
'show' => 'паказаць',
'showbigimage' => 'Паказаць варыянт большага памеру ($1 × $2, $3 Кб)',
'showdiff'	=> 'Паказаць зьмены',
'showingresults' => "Ніжэй паданыя да <b>$1</b> вынікаў, пачынаючы з #<b>$2</b>.",
'showlast' => 'Паказаць $1 апошніх файлаў адсартаваных $2.',
'showpreview' => 'Праглядзець',
'showtoc' => 'паказаць',
'sig_tip' => 'Ваш подпіс і момант часу',
'sitestats' => 'Статыстыка {{GRAMMAR:родны|{{SITENAME}}}}',
'sitesupport' => 'Ахвяраваньні',
'siteuser' => 'Удзельнік/удзельніца {{GRAMMAR:родны|{{SITENAME}}}} $1',
'skin' => 'Афармленьне',
'skinpreview' => '(Прагляд)',
'spamprotectiontitle' => 'Фільтар для абароны ад спаму',
'specialloguserlabel' => 'Удзельнік/удзельніца:',
'specialpage' => 'Спэцыяльная старонка',
'specialpages' => 'Спэцыяльныя старонкі',
'spheading' => 'Спэцыяльныя старонкі для ўсіх удзельнікаў і ўдзельніц',
'statistics' => 'Статыстыка',
'storedversion' => 'Захаваная вэрсія',
'subcategories' => 'Падкатэгорыі',
'subcategorycount' => 'У гэтай катэгорыі ёсьць $1 {{PLURAL:$1|падкатэгорыя|падкатэгорыі|падкатэгорый}}.',
'subject' => 'Тэма/назва',
'subjectpage' => 'Паказаць тэму',
'summary' => 'Кароткае апісаньне зьменаў',
'sunday' => 'нядзеля',
'tagline' => 'Зьвесткі зь {{GRAMMAR:родны|{{SITENAME}}}}',
'talk' => 'Гутаркі',
'talkpage' => 'Абмеркаваць гэтую старонку',
'talkpagemoved' => 'Адпаведная старонка абмеркаваньня таксама перанесеная.',
'talkpagenotmoved' => 'Адпаведная старонка абмеркаваньня <strong>не</strong> перанесеная.',
'templatesused' => 'На гэтай старонцы выкарыстаныя наступныя шаблёны:',
'textboxsize' => 'Рэдагаваньне',
'thisisdeleted' => 'Праглядзець ці аднавіць $1?',
'thumbnail-more' => 'Павялічыць',
'thursday' => 'чацьвер',
'timezonelegend' => 'Часавы пояс',
'toc' => 'Зьмест',
'tog-editsection' => 'Дазволіць рэдагаваньне асобных сэкцыяў па спасылках [рэдагаваць]',
'tog-editwidth' => 'Поле рэдагаваньня ў поўную шырыню',
'tog-externaleditor' => 'Па змоўчаньні выкарыстоўваць зьнешні рэдактар',
'tog-fancysig' => 'Просты подпіс (без аўтаматычнай спасылкі)',
'tog-hideminor' => 'Хаваць дробныя зьмены ў сьпісе апошніх зьменаў',
'tog-minordefault' => 'Па змоўчаньні пазначаць усе зьмены дробнымі',
'tog-nocache' => 'Адключыць кэшаваньне старонак',
'tog-numberheadings' => 'Аўтаматычная нумарацыя загалоўкаў',
'tog-previewonfirst' => 'Папярэдні прагляд пры першым рэдагаваньні',
'tog-rememberpassword' => 'Захоўваць пароль паміж сэсіямі',
'tog-showtoc' => 'Паказваць зьмест (для старонак з колькасьцю сэкцый болей за 3)',
'tog-showtoolbar' => 'Паказваць панэль інструмэнтаў рэдагаваньня (патрабуе JavaScript)',
'tog-underline' => 'Падкрэсьліваць спасылкі:',
'tog-usenewrc' => 'Удасканалены сьпіс апошніх зьменаў (патрабуе JavaScript)',
'toolbox' => 'Інструмэнты',
'tooltip-diff' => 'Паказаць зробленыя Вамі зьмены ў тэксьце. [alt-v]',
'tooltip-minoredit' => 'Пазначыць гэтую зьмену як дробную [alt-i]',
'tooltip-preview' => 'Праглядзець Вашы зьмены. Калі ласка, выкарыстоўвайце гэтую магчымасьць перад тым, як захаваць старонку! [alt-p]',
'tooltip-save' => 'Захаваць Вашы зьмены [alt-s]',
'tooltip-watch' => 'Дадаць гэтую старонку ў Ваш сьпіс назіраньня [alt-w]',
'tuesday' => 'аўторак',
'uid' => 'ID удзельніка/удзельніцы:',
'uncategorizedcategories' => 'Некатэгарызаваныя катэгорыі',
'uncategorizedpages' => 'Некатэгарызаваныя старонкі',
'undelete' => 'Прагляд выдаленых старонак',
'undeletecomment' => 'Камэнтар:',
'underline-always' => 'Заўсёды',
'underline-never' => 'Ніколі',
'unit-pixel' => 'пкс',
'unprotect' => 'зьняць абарону',
'unusedcategories' => 'Катэгорыі, якія не выкарыстоўваюцца',
'unusedimages' => 'Файлы, якія не выкарыстоўваюцца',
'unusedtemplates' => 'Шаблёны, якія не выкарыстоўваюцца',
'unwatch' => 'Не назіраць',
'unwatchedpages' => 'Старонкі, за якімі ніхто не назірае',
'unwatchthispage' => 'Перастаць назіраць',
'upload' => 'Загрузіць файл',
'uploadbtn' => 'Загрузіць файл',
'uploadedfiles' => 'Загружаныя файлы',
'uploadedimage' => 'загружаная «[[$1]]»',
'uploadlog' => 'журнал загрузак',
'uploadlogpage' => 'Журнал загрузак',
'uploadlogpagetext' => 'Сьпіс апошніх загружаных файлаў.',
'uploadtext' => "'''Перад тым, як загрузіць файл:'''

* Азнаёмцеся з '''[[{{ns:Project}}:Правілы выкарыстаньня файлаў|правіламі выкарыстаньня файлаў]]'''.
* Праверце з дапамогай '''[[{{ns:Special}}:Imagelist|сьпісу файлаў]]''', ці не загружаны гэты файл з іншай назвай.
* Выкарыстоўвайце наступныя '''фарматы''': [[JPG]] — для фотаздымкаў; [[GIF]] — для анімацыі; [[PNG]] — для іншых выяваў; [[OGG]] — для аўдыёфайлаў.
* Давайце файлам '''зразумелыя назвы''', якія адлюстроўваюць іх зьмест. Напрыклад: ''Janka Kupala, 1910.jpg'' замест ''JK1.jpg''. Назву файла '''немагчыма''' зьмяніць пасьля загрузкі.
* Пытайцеся '''дазволу''' на публікацыю фотаздымка ва ўсіх людзей, якія там прысутнічаюць.

'''Пасьля таго, як выява загружаная:'''

* '''Абавязкова''' дадайце:
** '''дэталёвае апісаньне зьместу''';
** '''крыніцу''': файл створаны Вамі; адсканаваны з кнігі ''X''; узяты з Інтэрнэт па адрасу ''Y'';
** для файлаў, якія зроблены '''ня''' Вамі, укажыце, ці атрымалі Вы '''дазвол''' на выкарыстаньне гэтага файла ў {{GRAMMAR:месны|{{SITENAME}}}};
** '''ліцэнзіі''', згодна ўмоваў якіх магчыма распаўсюджваць файл.
* '''Выкарыстоўвайце файл''' у артыкуле(ах). Напрыклад: <code><nowiki>[[Выява:file.jpg]]</nowiki></code> ці <code><nowiki>[[Выява:file.jpg|міні|200пкс|Апісаньне]]</nowiki></code> — для выяваў; <code><nowiki>[[Мэдыя:file.ogg]]</nowiki></code> — для аўдыёфайлаў.",
'uploadvirus' => 'Файл утрымлівае вірус! Падрабязнасьці: $1',
'userexists' => 'Выбранае Вамі імя ўдзельніка/ўдзельніцы ўжо выкарыстоўваецца кімсьці іншым. Калі ласка, выберыце іншае імя.',
'userlogin' => 'Стварыць рахунак ці ўвайсьці',
'userlogout' => 'Выйсьці',
'username' => 'Імя ўдзельніка/ўдзельніцы:',
'userstats' => 'Статыстыка ўдзелу',
'userstatstext' => "Колькасьць зарэгістраваных удзельнікаў і ўдзельніц: '''$1'''.

Колькасьць адміністратараў і адміністратарак: '''$2''' (ці '''$4%'''). Падрабязнасьці глядзіце ў $3.",
'version' => 'Вэрсія',
'viewdeleted' => 'Паказаць $1?',
'viewdeletedpage' => 'Паказаць выдаленыя старонкі',
'viewprevnext' => 'Паказаць ($1) ($2) ($3).',
'viewsource' => 'Паказаць крыніцу',
'viewtalkpage' => 'Паказаць абмеркаваньне',
'wantedcategories' => 'Запатрабаваныя катэгорыі',
'wantedpages' => 'Запатрабаваныя старонкі',
'watch' => 'Назіраць',
'watchlist' => 'Мой сьпіс назіраньня',
'watchthis' => 'Назіраць за гэтай старонкай',
'watchthispage' => 'Назіраць за гэтай старонкай',
'wednesday' => 'серада',
'whatlinkshere' => 'Адкуль спасылаюцца на старонку',
'whitelistacctitle' => 'Вам не дазволена ствараць рахунак',
'wlhideshowbots' => '$1 праўкі робатаў',
'wlhideshowown' => '$1 мае праўкі',
'youremail' => 'Адрас электроннай пошты *',
'yourlanguage' => 'Мова інтэрфэйсу:',
'yourname' => 'Імя ўдзельніка/ўдзельніцы',
'yournick' => 'Мянушка:',
'yourpassword' => 'Пароль',
'yourrealname' => 'Сапраўднае імя *',
'yourtext' => 'Ваш тэкст',
);

?>
