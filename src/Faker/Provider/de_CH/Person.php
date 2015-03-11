<?php

namespace Faker\Provider\de_CH;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}-{{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{suffix}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{suffix}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}-{{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}} {{suffix}}',
    );

    protected static $firstNameMale = array(
        "Noah","Leon","Luca","Julian","Levin","David","Nico","Gian","Leandro","Jan","Jonas","Tim","Dario","Elias","Ben","Liam","Lukas","Matteo","Nino","Livio","Samuel","Robin","Andrin","Lionel","Fabio","Elia","Simon","Diego","Louis","Leo","Gabriel","Fabian","Nevio","Luis","Lian","Finn","Laurin","Rafael","Alexander","Joel","Benjamin","Lars","Loris","Nils","Timo","Valentin","Janis","Maximilian","Raphael","Alessio"
    );

    protected static $firstNameFemale = array(
        "Mia","Alina","Sara","Laura","Lea","Sophia","Leonie","Emma","Lara","Elin","Lena","Anna","Julia","Nina","Emilia","Lia","Elena","Lina","Sophie","Livia","Sofia","Giulia","Elina","Chiara","Jana","Nora","Alessia","Luana","Noemi","Valentina","Lisa","Olivia","Ronja","Melina","Lorena","Selina","Amélie","Emily","Ella","Mila","Luisa","Sarah","Fiona","Lynn","Jael","Hanna","Mara","Leana","Elisa","Aline"
    );

    protected static $lastName = array(
        "Ackermann","Bachmann","Baumann","Berger","Bolliger","Bucher","Egli","Felder","Frey","Geiger","Grob","Hafner","Hess","Hofmann","Hug","Jenni","Kern","Küng","Leu","Mäder","Mayer","Mettler","Näf","Probst","Rüegg","Schaub","Schmidt","Schumacher","Senn","Stadelmann","Steiger","Stucki","Tanner","Wagner","Wehrli","Winkler","Ziegler",
        "Albrecht","Bader","Baumgartner","Bernasconi","Bosshard","Bühler","Erni","Ferrari","Frick","Gerber","Gross","Hartmann","Hirt","Hofstetter","Hunziker","Kägi","Kessler","Kuhn","Lüscher","Meir","Myer","Ott","Rey","Schäfer","Schneider","Schwab","Sidler","Stalder","Steiner","Studer","Thommen","Walder","Weibel","Wirth","Zimmermann",
        "Ammann","Bär","Baur","Bianchi","Braun","Burri","Favre","Fischer","Fuchs","Giger","Gut","Hauser","Hodel","Hotz","Imhof","Kaiser","Knecht","Kunz","Lüthi","Meili","Michel","Peter","Ritter","Schär","Schnyder","Schwarz","Siegrist","Staub","Steinmann","Stutz","Tobler","Walter","Weiss","Wirz","Zollinger",
        "Amrein","Bättig","Beck","Bieri","Brun","Christen","Fehr","Forster","Furrer","Hermann","Hofer","0Huber","Isler","Kaufmann","Koch","Lang","Lustenberger","Meister","Moser","Pfister","Roos","Schärer","Schoch","Schweizer","Sigrist","Stauffer","Stocker","Suter","Vogel","0Weber","Wettstein","Wolf","Zürcher",
        "Arnold","Bauer","Benz","Blum","Brunner","Egger","Felber","Frei","Gasser","Herzog","Hoffmann","Hürlimann","Jäggi","0Keller","Kohler","Lehmann","Lutz","Merz","0Müller","Portmann","Roth","Schaller","Schuler","Seiler","Spörri","Steffen","Stöckli","Sutter","Vogt","Wegmann","Widmer","Wyss","Jud"
    );

    protected static $titleMale = array('Herr', 'Dr.', 'Ing.', 'Dipl.-Ing.', 'Prof.', 'Univ.Prof.');
    protected static $titleFemale = array('Frau', 'Dr.', 'Ing.', 'Dipl.-Ing.', 'Prof.', 'Univ.Prof.');

    protected static $suffix = array('B.Sc.', 'B.A.', 'B.Eng.', 'MBA.');

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }
}
