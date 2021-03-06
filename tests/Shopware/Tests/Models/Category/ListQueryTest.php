<?php
/**
 * Shopware 4.0
 * Copyright © 2012 shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

/**
 * @group disable
 * @category  Shopware
 * @package   Shopware\Tests
 * @copyright Copyright (c) 2012, shopware AG (http://www.shopware.de)
 */
class Shopware_Tests_Models_Category_ListQueryTest extends Enlight_Components_Test_TestCase
{
    /**
     * @var \Shopware\Models\Category\Repository
     */
    protected $repo = null;

    protected $expected = array(
        1 => array(
            0 => array(
                'id' => 39,
                'name' => 'English',
                'position' => null,
                'parentId' => 1,
                'childrenCount' => '6',
                'articleCount' => '107',
                'emotions' => null,
                'articles' => null,
            ),
            1 => array(
                'id' => 3,
                'name' => 'Deutsch',
                'position' => 1,
                'parentId' => 1,
                'childrenCount' => '6',
                'articleCount' => '202',
                'emotions' => null,
                'articles' => null,
            ),
        ),
        3 => array(
            0 => array(
                'id' => 5,
                'name' => 'Genusswelten',
                'position' => 0,
                'parentId' => 3,
                'childrenCount' => '3',
                'articleCount' => '44',
                'emotions' => null,
                'articles' => null,
            ),
            1 => array(
                'id' => 9,
                'name' => 'Freizeitwelten',
                'position' => 1,
                'parentId' => 3,
                'childrenCount' => '2',
                'articleCount' => '27',
                'emotions' => null,
                'articles' => null,
            ),
            2 => array(
                'id' => 8,
                'name' => 'Wohnwelten',
                'position' => 2,
                'parentId' => 3,
                'childrenCount' => '3',
                'articleCount' => '49',
                'emotions' => null,
                'articles' => null,
            ),
            3 => array(
                'id' => 17,
                'name' => 'Trends + News',
                'position' => 3,
                'parentId' => 3,
                'childrenCount' => '0',
                'articleCount' => '0',
                'emotions' => null,
                'articles' => null,
            ),
            4 => array(
                'id' => 6,
                'name' => 'Sommerwelten',
                'position' => 3,
                'parentId' => 3,
                'childrenCount' => '4',
                'articleCount' => '60',
                'emotions' => null,
                'articles' => null,
            ),
            5 => array(
                'id' => 10,
                'name' => 'Beispiele',
                'position' => 4,
                'parentId' => 3,
                'childrenCount' => '11',
                'articleCount' => '37',
                'emotions' => null,
                'articles' => null,
            ),
        ),
        39 => array(
            0 => array(
                'id' => 61,
                'name' => 'Examples',
                'position' => null,
                'parentId' => 39,
                'childrenCount' => '9',
                'articleCount' => '33',
                'emotions' => null,
                'articles' => null,
            ),
            1 => array(
                'id' => 42,
                'name' => 'Trends + News',
                'position' => 0,
                'parentId' => 39,
                'childrenCount' => '0',
                'articleCount' => '0',
                'emotions' => null,
                'articles' => null,
            ),
            2 => array(
                'id' => 43,
                'name' => 'Worlds of indulgence',
                'position' => 1,
                'parentId' => 39,
                'childrenCount' => '3',
                'articleCount' => '36',
                'emotions' => null,
                'articles' => null,
            ),
            3 => array(
                'id' => 44,
                'name' => 'Leisure worlds',
                'position' => 2,
                'parentId' => 39,
                'childrenCount' => '2',
                'articleCount' => '11',
                'emotions' => null,
                'articles' => null,
            ),
            4 => array(
                'id' => 45,
                'name' => 'Home sweet home',
                'position' => 3,
                'parentId' => 39,
                'childrenCount' => '3',
                'articleCount' => '16',
                'emotions' => null,
                'articles' => null,
            ),
            5 => array(
                'id' => 46,
                'name' => 'Summertime',
                'position' => 4,
                'parentId' => 39,
                'childrenCount' => '4',
                'articleCount' => '19',
                'emotions' => null,
                'articles' => null,
            ),
        ),
        5 => array(
            0 => array(
                'id' => 11,
                'name' => 'Tees und Zubehör',
                'position' => 0,
                'parentId' => 5,
                'childrenCount' => '2',
                'articleCount' => '23',
                'emotions' => null,
                'articles' => null,
            ),
            1 => array(
                'id' => 14,
                'name' => 'Edelbrände',
                'position' => 0,
                'parentId' => 5,
                'childrenCount' => '0',
                'articleCount' => '12',
                'emotions' => null,
                'articles' => null,
            ),
            2 => array(
                'id' => 15,
                'name' => 'Köstlichkeiten',
                'position' => 0,
                'parentId' => 5,
                'childrenCount' => '0',
                'articleCount' => '9',
                'emotions' => null,
                'articles' => null,
            ),
        ),
        6 => array(
            0 => array(
                'id' => 34,
                'name' => 'Beachwear',
                'position' => 0,
                'parentId' => 6,
                'childrenCount' => '0',
                'articleCount' => '18',
                'emotions' => null,
                'articles' => null,
            ),
            1 => array(
                'id' => 35,
                'name' => 'Beauty & Care',
                'position' => 0,
                'parentId' => 6,
                'childrenCount' => '0',
                'articleCount' => '12',
                'emotions' => null,
                'articles' => null,
            ),
            2 => array(
                'id' => 36,
                'name' => 'On World Tour',
                'position' => 0,
                'parentId' => 6,
                'childrenCount' => '0',
                'articleCount' => '11',
                'emotions' => null,
                'articles' => null,
            ),
            3 => array(
                'id' => 37,
                'name' => 'Accessoires',
                'position' => 0,
                'parentId' => 6,
                'childrenCount' => '0',
                'articleCount' => '11',
                'emotions' => null,
                'articles' => null,
            ),
        ),
        8 => array(
            0 => array(
                'id' => 38,
                'name' => 'Dekoration',
                'position' => null,
                'parentId' => 8,
                'childrenCount' => '0',
                'articleCount' => '14',
                'emotions' => null,
                'articles' => null,
            ),
            1 => array(
                'id' => 32,
                'name' => 'Möbel',
                'position' => 0,
                'parentId' => 8,
                'childrenCount' => '0',
                'articleCount' => '16',
                'emotions' => null,
                'articles' => null,
            ),
            2 => array(
                'id' => 33,
                'name' => 'Küchenzubehör',
                'position' => 0,
                'parentId' => 8,
                'childrenCount' => '0',
                'articleCount' => '18',
                'emotions' => null,
                'articles' => null,
            ),
        ),
        9 => array(
            0 => array(
                'id' => 31,
                'name' => 'Vintage',
                'position' => 0,
                'parentId' => 9,
                'childrenCount' => '0',
                'articleCount' => '10',
                'emotions' => null,
                'articles' => null,
            ),
            1 => array(
                'id' => 16,
                'name' => 'Entertainment',
                'position' => 1,
                'parentId' => 9,
                'childrenCount' => '0',
                'articleCount' => '17',
                'emotions' => null,
                'articles' => null,
            ),
        ),
        10 => array(
            0 => array(
                'id' => 27,
                'name' => 'In Kürze verfügbar',
                'position' => 0,
                'parentId' => 10,
                'childrenCount' => '0',
                'articleCount' => '0',
                'emotions' => null,
                'articles' => null,
            ),
            1 => array(
                'id' => 75,
                'name' => 'Gutscheine',
                'position' => 1,
                'parentId' => 10,
                'childrenCount' => '0',
                'articleCount' => '0',
                'emotions' => null,
                'articles' => null,
            ),
            2 => array(
                'id' => 22,
                'name' => 'Konfiguratorartikel',
                'position' => 2,
                'parentId' => 10,
                'childrenCount' => '0',
                'articleCount' => '4',
                'emotions' => null,
                'articles' => null,
            ),
            3 => array(
                'id' => 30,
                'name' => 'Kundenbindung',
                'position' => 3,
                'parentId' => 10,
                'childrenCount' => '0',
                'articleCount' => '3',
                'emotions' => null,
                'articles' => null,
            ),
            4 => array(
                'id' => 21,
                'name' => 'Produktvergleiche & Filter',
                'position' => 4,
                'parentId' => 10,
                'childrenCount' => '0',
                'articleCount' => '10',
                'emotions' => null,
                'articles' => null,
            ),
            5 => array(
                'id' => 20,
                'name' => 'Darstellung',
                'position' => 5,
                'parentId' => 10,
                'childrenCount' => '0',
                'articleCount' => '6',
                'emotions' => null,
                'articles' => null,
            ),
            6 => array(
                'id' => 19,
                'name' => 'Crossselling',
                'position' => 6,
                'parentId' => 10,
                'childrenCount' => '0',
                'articleCount' => '2',
                'emotions' => null,
                'articles' => null,
            ),
            7 => array(
                'id' => 24,
                'name' => 'Versandkosten',
                'position' => 7,
                'parentId' => 10,
                'childrenCount' => '0',
                'articleCount' => '4',
                'emotions' => null,
                'articles' => null,
            ),
            8 => array(
                'id' => 74,
                'name' => 'Kundengruppen / B2B',
                'position' => 7,
                'parentId' => 10,
                'childrenCount' => '0',
                'articleCount' => '1',
                'emotions' => null,
                'articles' => null,
            ),
            9 => array(
                'id' => 25,
                'name' => 'Zahlungsarten',
                'position' => 8,
                'parentId' => 10,
                'childrenCount' => '0',
                'articleCount' => '3',
                'emotions' => null,
                'articles' => null,
            ),
            10 => array(
                'id' => 23,
                'name' => 'Preisgestaltung',
                'position' => 10,
                'parentId' => 10,
                'childrenCount' => '0',
                'articleCount' => '4',
                'emotions' => null,
                'articles' => null,
            ),
        ),
        17 => array(),
        42 => array(),
        43 => array(
            0 => array(
                'id' => 47,
                'name' => 'Teas and Accessories',
                'position' => null,
                'parentId' => 43,
                'childrenCount' => '2',
                'articleCount' => '19',
                'emotions' => null,
                'articles' => null,
            ),
            1 => array(
                'id' => 50,
                'name' => 'Brandies',
                'position' => null,
                'parentId' => 43,
                'childrenCount' => '0',
                'articleCount' => '12',
                'emotions' => null,
                'articles' => null,
            ),
            2 => array(
                'id' => 51,
                'name' => 'Delights',
                'position' => null,
                'parentId' => 43,
                'childrenCount' => '0',
                'articleCount' => '5',
                'emotions' => null,
                'articles' => null,
            ),
        ),
        44 => array(
            0 => array(
                'id' => 52,
                'name' => 'Vintage',
                'position' => null,
                'parentId' => 44,
                'childrenCount' => '0',
                'articleCount' => '5',
                'emotions' => null,
                'articles' => null,
            ),
            1 => array(
                'id' => 53,
                'name' => 'Entertainment',
                'position' => null,
                'parentId' => 44,
                'childrenCount' => '0',
                'articleCount' => '6',
                'emotions' => null,
                'articles' => null,
            ),
        ),
        45 => array(
            0 => array(
                'id' => 54,
                'name' => 'Furniture',
                'position' => null,
                'parentId' => 45,
                'childrenCount' => '0',
                'articleCount' => '6',
                'emotions' => null,
                'articles' => null,
            ),
            1 => array(
                'id' => 55,
                'name' => 'Kitchen Accessories',
                'position' => null,
                'parentId' => 45,
                'childrenCount' => '0',
                'articleCount' => '5',
                'emotions' => null,
                'articles' => null,
            ),
            2 => array(
                'id' => 56,
                'name' => 'Decoration',
                'position' => null,
                'parentId' => 45,
                'childrenCount' => '0',
                'articleCount' => '5',
                'emotions' => null,
                'articles' => null,
            ),
        ),
        46 => array(
            0 => array(
                'id' => 57,
                'name' => 'Beachwear',
                'position' => null,
                'parentId' => 46,
                'childrenCount' => '0',
                'articleCount' => '6',
                'emotions' => null,
                'articles' => null,
            ),
            1 => array(
                'id' => 58,
                'name' => 'Beauty & Care',
                'position' => null,
                'parentId' => 46,
                'childrenCount' => '0',
                'articleCount' => '4',
                'emotions' => null,
                'articles' => null,
            ),
            2 => array(
                'id' => 59,
                'name' => 'Travel around the World',
                'position' => null,
                'parentId' => 46,
                'childrenCount' => '0',
                'articleCount' => '5',
                'emotions' => null,
                'articles' => null,
            ),
            3 => array(
                'id' => 60,
                'name' => 'Accessories',
                'position' => null,
                'parentId' => 46,
                'childrenCount' => '0',
                'articleCount' => '4',
                'emotions' => null,
                'articles' => null,
            ),
        ),
        61 => array(
            0 => array(
                'id' => 69,
                'name' => 'Crossselling',
                'position' => null,
                'parentId' => 61,
                'childrenCount' => '0',
                'articleCount' => '2',
                'emotions' => null,
                'articles' => null,
            ),
            1 => array(
                'id' => 71,
                'name' => 'Payment methods',
                'position' => null,
                'parentId' => 61,
                'childrenCount' => '0',
                'articleCount' => '3',
                'emotions' => null,
                'articles' => null,
            ),
            2 => array(
                'id' => 62,
                'name' => 'Available soon',
                'position' => null,
                'parentId' => 61,
                'childrenCount' => '0',
                'articleCount' => '0',
                'emotions' => null,
                'articles' => null,
            ),
            3 => array(
                'id' => 72,
                'name' => 'Shipping costs',
                'position' => null,
                'parentId' => 61,
                'childrenCount' => '0',
                'articleCount' => '5',
                'emotions' => null,
                'articles' => null,
            ),
            4 => array(
                'id' => 64,
                'name' => 'Customer loyalty',
                'position' => null,
                'parentId' => 61,
                'childrenCount' => '0',
                'articleCount' => '3',
                'emotions' => null,
                'articles' => null,
            ),
            5 => array(
                'id' => 73,
                'name' => 'Price strategies',
                'position' => null,
                'parentId' => 61,
                'childrenCount' => '0',
                'articleCount' => '4',
                'emotions' => null,
                'articles' => null,
            ),
            6 => array(
                'id' => 65,
                'name' => 'Configurator articles',
                'position' => null,
                'parentId' => 61,
                'childrenCount' => '0',
                'articleCount' => '4',
                'emotions' => null,
                'articles' => null,
            ),
            7 => array(
                'id' => 67,
                'name' => 'Product comparison',
                'position' => null,
                'parentId' => 61,
                'childrenCount' => '0',
                'articleCount' => '6',
                'emotions' => null,
                'articles' => null,
            ),
            8 => array(
                'id' => 68,
                'name' => 'Presentation',
                'position' => null,
                'parentId' => 61,
                'childrenCount' => '0',
                'articleCount' => '6',
                'emotions' => null,
                'articles' => null,
            ),
        ),
        11 => array(
            0 => array(
                'id' => 12,
                'name' => 'Tees',
                'position' => 0,
                'parentId' => 11,
                'childrenCount' => '0',
                'articleCount' => '14',
                'emotions' => null,
                'articles' => null,
            ),
            1 => array(
                'id' => 13,
                'name' => 'Tee-Zubehör',
                'position' => 1,
                'parentId' => 11,
                'childrenCount' => '0',
                'articleCount' => '9',
                'emotions' => null,
                'articles' => null,
            ),
        ),
        14 => array(),
        15 => array(),
        16 => array(),
        19 => array(),
        20 => array(),
        21 => array(),
        22 => array(),
        23 => array(),
        24 => array(),
        25 => array(),
        27 => array(),
        30 => array(),
        31 => array(),
        32 => array(),
        33 => array(),
        34 => array(),
        35 => array(),
        36 => array(),
        37 => array(),
        38 => array(),
        47 => array(
            0 => array(
                'id' => 48,
                'name' => 'Teas',
                'position' => null,
                'parentId' => 47,
                'childrenCount' => '0',
                'articleCount' => '14',
                'emotions' => null,
                'articles' => null,
            ),
            1 => array(
                'id' => 49,
                'name' => 'Teas and accessories',
                'position' => null,
                'parentId' => 47,
                'childrenCount' => '0',
                'articleCount' => '5',
                'emotions' => null,
                'articles' => null,
            ),
        ),
        50 => array(),
        51 => array(),
        52 => array(),
        53 => array(),
        54 => array(),
        55 => array(),
        56 => array(),
        57 => array(),
        58 => array(),
        59 => array(),
        60 => array(),
        62 => array(),
        64 => array(),
        65 => array(),
        67 => array(),
        68 => array(),
        69 => array(),
        71 => array(),
        72 => array(),
        73 => array(),
        74 => array(),
        75 => array(),
        12 => array(),
        13 => array(),
        48 => array(),
        49 => array(),
    );


    /**
     * @return Shopware\Models\Category\Repository
     */
    protected function getRepo() {
        if ($this->repo === null) {
            $this->repo = Shopware()->Models()->Category();
        }
        return $this->repo;
    }

    public function testQuery() {
        foreach($this->expected as $id => $expected) {
            $filter = array(array('property' => 'c.parentId', 'value' => $id));
            $query = $this->getRepo()->getListQuery($filter, array());
            $data = $this->removeDates($query->getArrayResult());
            $this->assertEquals($data, $expected);
        }
    }

    protected function removeDates($data) {
        foreach($data as &$subCategory) {
            unset($subCategory['changed']);
            unset($subCategory['cmsText']);
            unset($subCategory['added']);
            foreach($subCategory['emotions'] as &$emotion) {
                unset($emotion['createDate']);
                unset($emotion['modified']);
            }
            foreach($subCategory['articles'] as &$article) {
                unset($article['added']);
                unset($article['changed']);
                unset($article['mainDetail']['releaseDate']);
            }
        }
        return $data;
    }

}
