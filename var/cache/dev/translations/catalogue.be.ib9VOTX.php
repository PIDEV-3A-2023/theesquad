<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('be', array (
  'validators' => 
  array (
    'This value should be false.' => 'Значэнне павінна быць Не.',
    'This value should be true.' => 'Значэнне павінна быць Так.',
    'This value should be of type {{ type }}.' => 'Тып значэння павінен быць {{ type }}.',
    'This value should be blank.' => 'Значэнне павінна быць пустым.',
    'The value you selected is not a valid choice.' => 'Абранае вамі значэнне не сапраўднае.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Вы павінны выбраць хаця б {{ limit }} варыянт.|Вы павінны выбраць хаця б {{ limit }} варыянтаў.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Вы павінны выбраць не больш за {{ limit }} варыянт.|Вы павінны выбраць не больш за {{ limit }} варыянтаў.',
    'One or more of the given values is invalid.' => 'Адзін або некалькі пазначаных значэнняў з\'яўляецца несапраўдным.',
    'This field was not expected.' => 'Гэта поле не чакаецца.',
    'This field is missing.' => 'Гэта поле адсутнічае.',
    'This value is not a valid date.' => 'Гэта значэнне не з\'яўляецца карэктнай датай.',
    'This value is not a valid datetime.' => 'Гэта значэнне не з\'яўляецца карэктнай датай i часом.',
    'This value is not a valid email address.' => 'Гэта значэнне не з\'яўляецца карэктным адрасам электроннай пошты.',
    'The file could not be found.' => 'Файл не знойдзен.',
    'The file is not readable.' => 'Файл не чытаецца.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадта вялікі ({{ size }} {{ suffix }}). Максімальна дазволены памер {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-тып файлу некарэкты ({{ type }}). Дазволеныя MIME-тыпы файлу {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Значэнне павінна быць {{ limit }} або менш.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Значэнне занадта доўгае. Яно павінна мець {{ limit }} сімвал або менш.|Значэнне занадта доўгае. Яно павінна мець {{ limit }} сімвалаў або менш.',
    'This value should be {{ limit }} or more.' => 'Значэнне павінна быць {{ limit }} або больш.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Значэнне занадта кароткае. Яно павінна мець прынамсі {{ limit }} сімвал.|Значэнне занадта кароткае. Яно павінна мець прынамсі {{ limit }} сімвалаў.',
    'This value should not be blank.' => 'Значэнне не павінна быць пустым.',
    'This value should not be null.' => 'Значэнне не павінна быць null.',
    'This value should be null.' => 'Значэнне павінна быць null.',
    'This value is not valid.' => 'Значэнне з\'яўляецца не сапраўдным.',
    'This value is not a valid time.' => 'Значэнне не з\'яўляецца сапраўдным часам.',
    'This value is not a valid URL.' => 'Значэнне не з\'яўляецца сапраўдным URL-адрасам.',
    'The two values should be equal.' => 'Абодва значэнні павінны быць аднолькавымі.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадта вялікі. Максімальна дазволены памер {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файл занадта вялікі.',
    'The file could not be uploaded.' => 'Немагчыма запампаваць файл.',
    'This value should be a valid number.' => 'Значэнне павінна быць лікам.',
    'This file is not a valid image.' => 'Гэты файл не з\'яўляецца сапраўднай выявай.',
    'This is not a valid IP address.' => 'Значэнне не з\'яўляецца сапраўдным IP-адрасам.',
    'This value is not a valid language.' => 'Значэнне не з\'яўляецца сапраўдным мовай.',
    'This value is not a valid locale.' => 'Значэнне не з\'яўляецца сапраўднай лакаллю.',
    'This value is not a valid country.' => 'Значэнне не з\'яўляецца сапраўднай краінай.',
    'This value is already used.' => 'Гэта значэнне ўжо выкарыстоўваецца.',
    'The size of the image could not be detected.' => 'Немагчыма вызначыць памер выявы.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Гэта выява занадта вялікая ({{ width }}px). Дазваляецца максімальная шырыня {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Гэта выява занадта маленькая ({{ width }}px). Дазваляецца мінімальная шырыня {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Гэты выява занадта вялікая ({{ width }}px). Дазваляецца максімальная вышыня {{ max_width }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Гэта выява занадта маленькая ({{ width }}px). Дазваляецца мінімальная вышыня {{ min_width }}px.',
    'This value should be the user\'s current password.' => 'Значэнне павінна быць цяперашнім паролем карыстальніка.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Значэнне павінна мець {{ limit }} сімвал.|Значэнне павінна мець {{ limit }} сімвалаў.',
    'The file was only partially uploaded.' => 'Файл быў запампаваны толькі часткова.',
    'No file was uploaded.' => 'Файл не быў запампаваны.',
    'No temporary folder was configured in php.ini.' => 'У php.ini не была налажана часовая папка, або часовая папка не існуе.',
    'Cannot write temporary file to disk.' => 'Немагчыма запісаць часовы файл на дыск.',
    'A PHP extension caused the upload to fail.' => 'Пашырэнне PHP выклікала памылку загрузкі.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Калекцыя павінна змяшчаць прынамсі {{ limit }} элемент.|Калекцыя павінна змяшчаць прынамсі {{ limit }} элементаў.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Калекцыя павінна змяшчаць {{ limit }} або менш элемент.|Калекцыя павінна змяшчаць {{ limit }} або менш элементаў.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Калекцыя павінна змяшчаць роўна {{ limit }} элемент.|Калекцыя павінна змяшчаць роўна {{ limit }} элементаў.',
    'Invalid card number.' => 'Несапраўдны нумар карты.',
    'Unsupported card type or invalid card number.' => 'Тып карты не падтрымліваецца або несапраўдны нумар карты.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Несапраўдны міжнародны нумар банкаўскага рахунку (IBAN).',
    'This value is not a valid ISBN-10.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISBN-10 або ISBN-13.',
    'This value is not a valid ISSN.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISSN.',
    'This value is not a valid currency.' => 'Гэта значэнне не з\'яўляецца сапраўднай валютай.',
    'This value should be equal to {{ compared_value }}.' => 'Значэнне павінна раўняцца {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Значэнне павінна быць больш чым {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Значэнне павінна быць больш чым або раўняцца {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значэнне павінна быць ідэнтычным {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Значэнне павінна быць менш чым {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Значэнне павінна быць менш чым або раўняцца {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Значэнне не павінна раўняцца {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значэнне не павінна быць ідэнтычным {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Суадносіны бакоў выявы з\'яўляецца занадта вялікім ({{ ratio }}). Дазваляецца максімальныя суадносіны {{max_ratio}} .',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Суадносіны бакоў выявы з\'яўляецца занадта маленькімі ({{ ratio }}). Дазваляецца мінімальныя суадносіны {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Выява квадратная ({{width}}x{{height}}px). Квадратныя выявы не дазволены.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Выява ў альбомнай арыентацыі ({{ width }}x{{ height }}px). Выявы ў альбомнай арыентацыі не дазволены.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Выява ў партрэтнай арыентацыі ({{ width }}x{{ height }}px). Выявы ў партрэтнай арыентацыі не дазволены.',
    'An empty file is not allowed.' => 'Пусты файл не дазволены.',
    'The host could not be resolved.' => 'Не магчыма знайсці імя хоста.',
    'This value does not match the expected {{ charset }} charset.' => 'Гэта значэнне не супадае з чаканай {{ charset }} кадыроўкай.',
    'This is not a valid Business Identifier Code (BIC).' => 'Несапраўдны банкаўскі ідэнтыфікацыйны код (BIC).',
    'Error' => 'Памылка',
    'This is not a valid UUID.' => 'Гэта несапраўдны UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Значэнне павінна быць кратным {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Банкаўскі ідэнтыфікацыйны код (BIC) не звязан з IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Гэта значэнне павінна быць у фармаце JSON.',
    'This collection should contain only unique elements.' => 'Калекцыя павінна змяшчаць толькі ўнікальныя элементы.',
    'This value should be positive.' => 'Значэнне павінна быць дадатным.',
    'This value should be either positive or zero.' => 'Значэнне павінна быць дадатным ці нуль.',
    'This value should be negative.' => 'Значэнне павінна быць адмоўным.',
    'This value should be either negative or zero.' => 'Значэнне павінна быць адмоўным ці нуль.',
    'This value is not a valid timezone.' => 'Значэнне не з\'яўляецца сапраўдным гадзінным поясам.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Гэты пароль быў выкрадзены ў выніку ўзлому дадзеных, таму яго нельга выкарыстоўваць. Калі ласка, выкарыстоўвайце іншы пароль.',
    'This value should be between {{ min }} and {{ max }}.' => 'Значэнне павінна быць паміж {{min}} і {{max}}.',
    'This value is not a valid hostname.' => 'Значэнне не з\'яўляецца карэктным імем хаста.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Колькасць элементаў у гэтай калекцыі павінна быць кратным {{compared_value}}.',
    'This value should satisfy at least one of the following constraints:' => 'Значэнне павінна задавальняць як мінімум аднаму з наступных абмежаванняў:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Кожны элемент гэтай калекцыі павінен задавальняць свайму ўласнаму набору абмежаванняў.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Значэнне не з\'яўляецца карэктным міжнародным ідэнтыфікацыйным нумарам каштоўных папер (ISIN).',
    'This value should be a valid expression.' => 'Значэнне не з\'яўляецца сапраўдным выразам.',
    'This value is not a valid CSS color.' => 'Значэнне не з\'яўляецца дапушчальным колерам CSS.',
    'This value is not a valid CIDR notation.' => 'Значэнне не з\'яўляецца сапраўднай натацыяй CIDR.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Значэнне сеткавай маскі павінна быць ад {{min}} да {{max}}.',
    'This form should not contain extra fields.' => 'Гэта форма не павінна мець дадатковых палей.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Запампаваны файл быў занадта вялікім. Калі ласка, паспрабуйце запампаваць файл меншага памеру.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-токен не сапраўдны. Калі ласка, паспрабуйце яшчэ раз адправіць форму.',
    'This value is not a valid HTML5 color.' => 'Значэнне не з\'яўляецца карэктным HTML5 колерам.',
    'Please enter a valid birthdate.' => 'Калі ласка, увядзіце карэктную дату нараджэння.',
    'The selected choice is invalid.' => 'Выбраны варыянт некарэктны.',
    'The collection is invalid.' => 'Калекцыя некарэктна.',
    'Please select a valid color.' => 'Калі ласка, выберыце карэктны колер.',
    'Please select a valid country.' => 'Калі ласка, выберыце карэктную краіну.',
    'Please select a valid currency.' => 'Калі ласка, выберыце карэктную валюту.',
    'Please choose a valid date interval.' => 'Калі ласка, выберыце карэктны інтэрвал дат.',
    'Please enter a valid date and time.' => 'Калі ласка, увядзіце карэктныя дату і час.',
    'Please enter a valid date.' => 'Калі ласка, увядзіце карэктную дату.',
    'Please select a valid file.' => 'Калі ласка, выберыце карэктны файл.',
    'The hidden field is invalid.' => 'Значэнне схаванага поля некарэктна.',
    'Please enter an integer.' => 'Калі ласка, увядзіце цэлы лік.',
    'Please select a valid language.' => 'Калі ласка, выберыце карэктную мову.',
    'Please select a valid locale.' => 'Калі ласка, выберыце карэктную лакаль.',
    'Please enter a valid money amount.' => 'Калі ласка, увядзіце карэктную колькасць грошай.',
    'Please enter a number.' => 'Калі ласка, увядзіце нумар.',
    'The password is invalid.' => 'Няправільны пароль.',
    'Please enter a percentage value.' => 'Калі ласка, увядзіце працэнтнае значэнне.',
    'The values do not match.' => 'Значэнні не супадаюць.',
    'Please enter a valid time.' => 'Калі ласка, увядзіце карэктны час.',
    'Please select a valid timezone.' => 'Калі ласка, выберыце карэктны гадзінны пояс.',
    'Please enter a valid URL.' => 'Калі ласка, увядзіце карэктны URL.',
    'Please enter a valid search term.' => 'Калі ласка, увядзіце карэктны пошукавы запыт.',
    'Please provide a valid phone number.' => 'Калі ласка, увядзіце карэктны нумар тэлефона.',
    'The checkbox has an invalid value.' => 'Флажок мае некарэктнае значэнне.',
    'Please enter a valid email address.' => 'Калі ласка, увядзіце карэктны адрас электроннай пошты.',
    'Please select a valid option.' => 'Калі ласка, выберыце карэктны варыянт.',
    'Please select a valid range.' => 'Калі ласка, выберыце карэктны дыяпазон.',
    'Please enter a valid week.' => 'Калі ласка, увядзіце карэктны тыдзень.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Памылка аўтэнтыфікацыі.',
    'Authentication credentials could not be found.' => 'Дадзеныя аўтэнтыфікацыі не знойдзены.',
    'Authentication request could not be processed due to a system problem.' => 'Запыт аўтэнтыфікацыі не можа быць апрацаваны ў сувязі з праблемай у сістэме.',
    'Invalid credentials.' => 'Несапраўдныя дадзеныя аўтэнтыфікацыі.',
    'Cookie has already been used by someone else.' => 'Нехта іншы ўжо выкарыстаў гэтыя кукі (cookie).',
    'Not privileged to request the resource.' => 'Адсутнічаюць правы на запыт гэтага рэсурсу.',
    'Invalid CSRF token.' => 'Несапраўдны CSRF-токен.',
    'No authentication provider found to support the authentication token.' => 'Не знойдзен правайдар аўтэнтыфікацыі, які можа падтрымліваць гэты токен аўтэнтыфікацыі.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесія не даступна, яе час скончыўся, або кукі (cookies) выключаны.',
    'No token could be found.' => 'Токен не знойдзен.',
    'Username could not be found.' => 'Імя карыстальніка не знойдзена.',
    'Account has expired.' => 'Скончыўся тэрмін дзеяння акаўнта.',
    'Credentials have expired.' => 'Скончыўся тэрмін дзеяння дадзеных аўтэнтыфікацыі.',
    'Account is disabled.' => 'Акаўнт адключан.',
    'Account is locked.' => 'Акаўнт заблакіраван.',
    'Too many failed login attempts, please try again later.' => 'Зашмат няўдалых спроб уваходу, калі ласка, паспрабуйце пазней.',
    'Invalid or expired login link.' => 'Спасылка для ўваходу несапраўдная або пратэрмінаваная.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Занадта шмат няўдалых спроб уваходу ў сістэму, паспрабуйце спробу праз %minutes% хвіліну.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Занадта шмат няўдалых спроб уваходу ў сістэму, паспрабуйце спробу праз %minutes% хвілін.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
  'ResetPasswordBundle' => 
  array (
    '%count% year|%count% years' => '%count% year|%count% years',
    '%count% month|%count% months' => '%count% month|%count% months',
    '%count% day|%count% days' => '%count% day|%count% days',
    '%count% hour|%count% hours' => '%count% hour|%count% hours',
    '%count% minute|%count% minutes' => '%count% minute|%count% minutes',
    'There was a problem validating your password reset request' => 'There was a problem validating your password reset request',
    'There was a problem handling your password reset request' => 'There was a problem handling your password reset request',
    'The link in your email is expired. Please try to reset your password again.' => 'The link in your email is expired. Please try to reset your password again.',
    'Please update the request_password_repository configuration in config/packages/reset_password.yaml to point to your "request password repository" service.' => 'Please update the request_password_repository configuration in config/packages/reset_password.yaml to point to your "request password repository" service.',
    'The reset password link is invalid. Please try to reset your password again.' => 'The reset password link is invalid. Please try to reset your password again.',
    'You have already requested a reset password email. Please check your email or try again soon.' => 'You have already requested a reset password email. Please check your email or try again soon.',
  ),
  'VerifyEmailBundle' => 
  array (
    '%count% year|%count% years' => '%count% year|%count% years',
    '%count% month|%count% months' => '%count% month|%count% months',
    '%count% day|%count% days' => '%count% day|%count% days',
    '%count% hour|%count% hours' => '%count% hour|%count% hours',
    '%count% minute|%count% minutes' => '%count% minute|%count% minutes',
    'The link to verify your email has expired. Please request a new link.' => 'The link to verify your email has expired. Please request a new link.',
    'The link to verify your email is invalid. Please request a new link.' => 'The link to verify your email is invalid. Please request a new link.',
    'The link to verify your email appears to be for a different account or email. Please request a new link.' => 'The link to verify your email appears to be for a different account or email. Please request a new link.',
  ),
  'flasher' => 
  array (
    'success' => 'Success',
    'error' => 'Error',
    'warning' => 'Warning',
    'info' => 'Info',
    'The resource was created' => 'The :resource was created',
    'The resource was updated' => 'The :resource was updated',
    'The resource was saved' => 'The :resource was saved',
    'The resource was deleted' => 'The :resource was deleted',
    'resource' => 'resource',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
    'filter_searchword' => 'Searchword...',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
