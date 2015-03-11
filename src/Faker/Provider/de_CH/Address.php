<?php
namespace Faker\Provider\de_CH;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('###', '##', '#', '#/#');

    protected static $streetSuffixLong = array(
        'Gasse', 'Gässlein', 'Platz', 'Ring', 'Strasse', 'Weg', 'Allee', 'Anlage', 'Promenade'
    );
    protected static $streetSuffixShort = array(
        'gasse', 'platz', 'ring', 'strasse', 'str.', 'weg', 'allee', 'weglein', 'steg'
    );

    protected static $postcode = array('####');

    protected static $cityNames = array(
        "Basel","Bettingen","Riehen","Aesch","Allschwil","Arlesheim","Biel-Benken","Binningen","Birsfelden","Bottmingen","Ettingen","Münchenstein","Muttenz","Oberwil","Pfeffingen","Reinach","Schönenbuch","Therwil","Blauen","Brislach","Burg im Leimental","Dittingen","Duggingen","Grellingen","Laufen","Liesberg","Nenzlingen","Roggenburg","Röschenz","Wahlen","Zwingen","Arisdorf","Augst","Bubendorf","Frenkendorf","Füllinsdorf","Giebenach","Hersberg","Lausen","Liestal","Lupsingen","Pratteln","Ramlinsburg","Seltisberg","Ziefen","Anwil","Böckten","Buckten","Buus","Diepflingen","Gelterkinden","Häfelfingen","Hemmiken","Itingen","Känerkinden","Kilchberg","Läufelfingen","Maisprach","Nusshof","Oltingen","Ormalingen","Rickenbach","Rothenfluh","Rümlingen","Rünenberg","Sissach","Tecknau","Tenniken","Thürnen","Wenslingen","Wintersingen","Wittinsburg","Zeglingen","Zunzgen","Arboldswil","Bennwil","Bretzwil","Diegten","Eptingen","Hölstein","Lampenberg","Langenbruck","Lauwil","Liedertswil","Niederdorf","Oberdorf","Reigoldswil","Titterten","Waldenburg"
    );

    protected static $state = array(
        "ZH","BE","LU","UR","SZ","OW","NW","GL","ZG","FR","SO","BS","BL","SH","AR","AI","SG","GR","AG","TG","TI","VD","VS","NE","GE","JU"
    );

    protected static $country = array(
        'Afghanistan', 'Alandinseln', 'Albanien', 'Algerien', 'Amerikanisch-Ozeanien', 'Amerikanisch-Samoa', 'Amerikanische Jungferninseln', 'Andorra', 'Angola', 'Anguilla', 'Antarktis', 'Antigua und Barbuda', 'Argentinien', 'Armenien', 'Aruba', 'Aserbaidschan', 'Australien', 'Ägypten', 'Äquatorialguinea', 'Äthiopien', 'Äußeres Ozeanien',
        'Bahamas', 'Bahrain', 'Bangladesch', 'Barbados', 'Belarus', 'Belgien', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivien', 'Bosnien und Herzegowina', 'Botsuana', 'Bouvetinsel', 'Brasilien', 'Britische Jungferninseln', 'Britisches Territorium im Indischen Ozean', 'Brunei Darussalam', 'Bulgarien', 'Burkina Faso', 'Burundi',
        'Chile', 'China', 'Cookinseln', 'Costa Rica', 'Côte d’Ivoire',
        'Demokratische Republik Kongo', 'Demokratische Volksrepublik Korea', 'Deutschland', 'Dominica', 'Dominikanische Republik', 'Dschibuti', 'Dänemark',
        'Ecuador', 'El Salvador', 'Eritrea', 'Estland', 'Europäische Union',
        'Falklandinseln', 'Fidschi', 'Finnland', 'Frankreich', 'Französisch-Guayana', 'Französisch-Polynesien', 'Französische Süd- und Antarktisgebiete', 'Färöer',
        'Gabun', 'Gambia', 'Georgien', 'Ghana', 'Gibraltar', 'Grenada', 'Griechenland', 'Grönland', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard- und McDonald-Inseln', 'Honduras',
        'Indien', 'Indonesien', 'Irak', 'Iran', 'Irland', 'Island', 'Isle of Man', 'Israel', 'Italien',
        'Jamaika', 'Japan', 'Jemen', 'Jersey', 'Jordanien',
        'Kaimaninseln', 'Kambodscha', 'Kamerun', 'Kanada', 'Kap Verde', 'Kasachstan', 'Katar', 'Kenia', 'Kirgisistan', 'Kiribati', 'Kokosinseln', 'Kolumbien', 'Komoren', 'Kongo', 'Kroatien', 'Kuba', 'Kuwait',
        'Laos', 'Lesotho', 'Lettland', 'Libanon', 'Liberia', 'Libyen', 'Liechtenstein', 'Litauen', 'Luxemburg',
        'Madagaskar', 'Malawi', 'Malaysia', 'Malediven', 'Mali', 'Malta', 'Marokko', 'Marshallinseln', 'Martinique', 'Mauretanien', 'Mauritius', 'Mayotte', 'Mazedonien', 'Mexiko', 'Mikronesien', 'Monaco', 'Mongolei', 'Montenegro', 'Montserrat', 'Mosambik', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Neukaledonien', 'Neuseeland', 'Nicaragua', 'Niederlande', 'Niederländische Antillen', 'Niger', 'Nigeria', 'Niue', 'Norfolkinsel', 'Norwegen', 'Nördliche Marianen',
        'Oman', 'Osttimor', 'Österreich',
        'Pakistan', 'Palau', 'Palästinensische Gebiete', 'Panama', 'Papua-Neuguinea', 'Paraguay', 'Peru', 'Philippinen', 'Pitcairn', 'Polen', 'Portugal', 'Puerto Rico',
        'Republik Korea', 'Republik Moldau', 'Ruanda', 'Rumänien', 'Russische Föderation', 'Réunion',
        'Salomonen', 'Sambia', 'Samoa', 'San Marino', 'Saudi-Arabien', 'Schweden', 'Schweiz', 'Senegal', 'Serbien', 'Serbien und Montenegro', 'Seychellen', 'Sierra Leone', 'Simbabwe', 'Singapur', 'Slowakei', 'Slowenien', 'Somalia', 'Sonderverwaltungszone Hongkong', 'Sonderverwaltungszone Macao', 'Spanien', 'Sri Lanka', 'St. Barthélemy', 'St. Helena', 'St. Kitts und Nevis', 'St. Lucia', 'St. Martin', 'St. Pierre und Miquelon', 'St. Vincent und die Grenadinen', 'Sudan', 'Suriname', 'Svalbard und Jan Mayen', 'Swasiland', 'Syrien', 'São Tomé und Príncipe', 'Südafrika', 'Südgeorgien und die Südlichen Sandwichinseln',
        'Tadschikistan', 'Taiwan', 'Tansania', 'Thailand', 'Togo', 'Tokelau', 'Tonga', 'Trinidad und Tobago', 'Tschad', 'Tschechische Republik', 'Tunesien', 'Turkmenistan', 'Turks- und Caicosinseln', 'Tuvalu', 'Türkei',
        'Uganda', 'Ukraine', 'Unbekannte oder ungültige Region', 'Ungarn', 'Uruguay', 'Usbekistan',
        'Vanuatu', 'Vatikanstadt', 'Venezuela', 'Vereinigte Arabische Emirate', 'Vereinigte Staaten', 'Vereinigtes Königreich', 'Vietnam',
        'Wallis und Futuna', 'Weihnachtsinsel', 'Westsahara',
        'Zentralafrikanische Republik', 'Zypern',
    );

    protected static $cityFormats = array(
        '{{cityName}}',
    );

    protected static $streetNameFormats = array(
        '{{lastName}}{{streetSuffixShort}}',
        '{{firstName}}-{{lastName}}-{{streetSuffixLong}}'
    );

    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{postcode}} {{city}}",
    );

    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }

    public function streetSuffixShort()
    {
        return static::randomElement(static::$streetSuffixShort);
    }

    public function streetSuffixLong()
    {
        return static::randomElement(static::$streetSuffixLong);
    }

    /**
     * @example 'BL'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }
}
