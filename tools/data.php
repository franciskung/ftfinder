<?
/**************************************************************************
 * The Fair Trade Finder                                                  *
 *                                                                        *
 * Copyright 2008-2009  Engineers Without Borders Canada                  *
 * http://itsupport.ewb.ca                                                *
 *                                                                        *
 * The Fair Trade Finder is free software: you can redistribute it        *
 * and/or modify it under the terms of the GNU General Public License     *
 * as published by the Free Software Foundation, either version 3 of      *
 * the License, or (at your option) any later version.                    *
 *                                                                        *
 * The Fair Trade Finder is distributed in the hope that it will be       *
 * useful, but WITHOUT ANY WARRANTY; without even the implied warranty    *
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the       *
 * GNU General Public License for more details.                           *
 *                                                                        *
 * You should have received a copy of the GNU General Public License      *
 * along with this software.  If not, see <http://www.gnu.org/licenses/>. *
 *                                                                        *
 * data.php:                                                              *
 * Sample data for the Fair Trade Finder.  NOT meant to be used in        *
 * production sites!                                                      *
 * (data is from an old snapshot of the Transfair database)               *
 *                                                                        *
 **************************************************************************/


 $cities = array(
"Calgary" => "-114.062474,51.053728", 
"Edmonton" => "-113.493698,53.540941", 
"Fredericton" => "-66.640351,45.959225", 
"Halifax" => "-63.573566,44.646244", 
"Hamilton" => "-79.869053,43.256692", 
"Kitchener Waterloo" => "-80.489086,43.449776", 
"London" => "-81.253959,42.982488", 
"Montreal" => "-73.639076,45.545447", 
"Ottawa" => "-75.697933,45.423494", 
"Quebec" => "-71.214695,46.812407", 
"Regina" => "-104.618013,50.447234", 
"Saskatoon" => "-106.670253,52.129267", 
"Sherbrooke" => "-71.918771,45.398598", 
"St John's" => "-52.701129,47.576727", 
"Toronto" => "-79.386755,43.670233", 
"Vancouver" => "-123.138565,49.263588", 
"Victoria" => "-123.367259,48.427500", 
"Winnipeg" => "-97.138343,49.895543", 
 );

foreach($cities as $key => $value)
{
	$tuple = explode(",", $value);
	$cities[$key] = $tuple[1] . ", " . $tuple[0];
}


 $zoomlevel = array(
"Calgary" => 12, 
"Edmonton" => 12, 
"Fredericton" => 12, 
"Halifax" =>  12, 
"Hamilton" =>  12, 
"Kitchener Waterloo" =>  12, 
"London" =>  12, 
"Montreal" =>  12, 
"Ottawa" => 12, 
"Quebec" => 12, 
"Regina" => 12, 
"Saskatoon" => 12, 
"Sherbrooke" => 12,  
"St John's" => 12, 
"Toronto" => 12, 
"Vancouver" => 12, 
"Victoria" => 12, 
"Winnipeg" => 12, 
 );

$data = array(
"Calgary"  => array(
array("Planet Foods", "-114.019146,51.016957,0", "4205 - 17th Street SE"),
array("Jacques' Caf�", "-114.034358,51.041265,0", "1101 McLeod Trail"),
array("Culligan of Canada", "-114.045622,51.100886,0", "5355 - 8th Street N"),
array("Garden's Grace", "-114.055004,51.060639,0", "1002 Edmonton Tr NE"),
array("Brule'e", "-114.077103,51.042784,0", "722 - 11th Avenue SW"),
array("Cook Book", "-114.077103,51.042784,0", "722 11th Avenue"),
array("Sunterra - Market Place", "-114.081407,51.009541,0", "803 - 49 Avenue SW"),
array("The House Coffee and Sanctuary", "-114.085887,51.052761,0", "126-10th Street NW"),
array("Sunnyside Market", "-114.085957,51.055411,0", "338 - 10th Street NW,  # 10"),
array("Community Natural Foods", "-114.091366,51.044122,0", "1304-10th Avenue"),
array("Harvest Sun", "-114.105590,51.054541,0", "303 - 19th Street NW"),
array("Ten Thousand Villages, Calgary", "-114.117856,51.053626,0", "220 Crowchild Trail"),
array("Prairie House Deli", "-114.129282,51.026009,0", "2929 Richmond Road S.W"),
array("Savory Caf�", "-114.635836,51.813710,0", "101, 322-11th Avenue"),
),
"Edmonton"  => array(
array("Peak Plantation Coffees", "-113.860836,53.512502,0", "38 - 51330 Range Road 271"),
array("Sam's on McLeod Caf�", "-113.902428,53.542536,0", "317 McLeod Avenue"),
array("Old Strathcona Farmers' Market", "-113.315689,53.536094,0", "Market Place"),
array("Ten Thousand Villages, Edmonton", "-113.454038,53.546872,0", "10432 - 82nd Avenue"),
array("Masters and Scribes", "-113.487187,53.517059,0", "9938 - 81st Ave"),
array("Sugar Bowl Caf�", "-113.512855,53.523856,0", "10922 - 88th Avenue"),
array("Muddy Waters", "-113.517813,53.518278,0", "8211 - 111 St"),
array("Organic Roots Food Market", "-113.520762,53.518350,0", "8225 - 112 Street"),
array("The Big Fresh", "-113.532412,53.541191,0", "12202 Jasper Ave"),
array("St. Thomas Coffee House", "-113.625669,53.632643,0", "44 St-Thomas Street"),
array("DeR Coffee & Tea Company", "-113.630354,53.554052,0", "10756 - 180 Street NW"),
array("Home Grown Food & Agri Products", "-113.992556,53.544375,0", "19 Granite Drive, # 10"),
),
"Fredericton"  => array(
array("Kelly's Fair Trade Caf�", "-66.642514,45.956710,0", "289 Regent Street"),
array("Fair Trade Caf�", "-66.646067,45.944513,0", "St. Thomas University"),
array("True Food Organics", "-66.650712,45.961073,0", "207 Charlotte Street"),

),
"Halifax"  => array(
array("Sweet Lou's Caf�", "-63.573941,44.649754,0", "1865 Hollis Street"),
array("Inglis Coffee Shop", "-63.579372,44.633561,0", "Inglis Street"),
array("Java Net Caf�", "-63.586570,44.640451,0", "5982 Spring Garden Rd"),
array("Perks Coffee", "-63.593155,44.646542,0", "6098 Quinpool Road"),

),
"Hamilton"  => array(
array("The Freeway", "-79.859293,43.253546,0", "333 King Street East"),
array("Riptides", "-79.864672,43.222723,0", "16 Blackthorne Avenue"),
array("The Bad Dog Caf�", "-79.886282,43.253915,0", "229 Locke Street South"),
array("The Staircase", "-79.887549,43.263064,0", "27 Dundurn Street North"),
array("Global Village Market", "-79.903021,43.263048,0", "948 King Street West"),
array("Vital Planet, Hamilton", "-79.906250,43.261713,0", "1047 King Street West"),

),
"Kitchener Waterloo"  => array(
array("Natural Food Market", "-80.515062,43.469167,0", "76 Bridgeport Rd E"),
array("Old Kitchen Cupboard", "-80.518396,43.454118,0", "710 Belmont Ave"),
array("Eating Well Organically", "-80.521707,43.462777,0", "104 King Street South"),
array("Ten Thousand Villages, Waterloo", "-80.521932,43.463610,0", "80 King Street South"),

),
"London"  => array(
array("Bit by the Bean", "-81.236495,42.932470,0", "1401 Ernest Avenue"),
array("Homeopathic Londo", "-81.250439,42.982161,0", "130 King Street"),
array("Grains, Beans & Things", "-81.250604,42.995044,0", "268 Piccadilly Street"),
array("Ten Thousand Villages, London", "-81.250972,42.991211,0", "630 Richmond Street"),
array("The Little Red Roaster", "-81.254039,42.973346,0", "138 Wortley Rd"),

),
"Montreal"  => array(
array("March� Naturel Tau (Brossard)", "-73.478676,45.431330,0", "6845 boulevard Taschereau"),
array("Fromagerie des Nations, Laval", "5.892602,45.223235,0", "March� 440"),
array("Arpents Vert", "-73.206836,45.563644,0", "245, rue Duvernay"),
array("Panier Sant�, Beloeil", "-73.214562,45.554444,0", "223, rue Cartier"),
array("Bistro Color Caf�", "-73.264409,45.444102,0", "2405, boulevard Bourgogne"),
array("Magasin du Monde, Ecole Jean-Baptiste-Meilleur", "-73.431876,45.762389,0", "777 boulevard Iberville"),
array("Service Pause-Caf� Carrera", "-73.441349,45.503837,0", "4535, avenue Thibault #6"),
array("MAXI Boucherville", "-73.442795,45.569261,0", "1235, rue Nobel"),
array("Notre-Dame Nature", "-73.443514,45.754776,0", "104, boulevard Industriel"),
array("Boutique des Fleurs et des Choses", "-73.446667,45.577067,0", "141-A, boulevard de Mortagne"),
array("La Ruche", "-73.451449,45.734192,0", "375, rue Notre-Dame"),
array("Sant� Nature Plus", "-73.484447,45.422951,0", "50, boulevard Tashereau"),
array("Caf� l'Extasse", "-73.504984,45.379345,0", "150, rue Jean Leman"),
array("Boucherie St-Laurent", "-73.507495,45.535458,0", "360, rue St-Jean"),
array("Folie en Vrac (Ste-Catherine)", "-73.555748,45.518887,0", "1254, Ste-Catherine Est"),
array("Mini Marche G-G", "-73.556164,45.518431,0", "1209, rue Ste-Catherine Est"),
array("Boni Soir", "-73.563478,45.536906,0", "2500, rue Rachel"),
array("Club Organic", "-73.564921,45.538189,0", "4341, rue Frontenac"),
array("Coop du Caf� Chaos", "-73.566490,45.516478,0", "2031, rue St-Denis"),
array("Les G�teries", "-73.569099,45.517648,0", "3443, rue St-Denis"),
array("Patisserie St-Louis de France", "-73.569161,45.519176,0", "3575, rue Berri"),
array("Avec le temps", "-73.570672,45.521199,0", "827, rue Roy Est"),
array("Val Mont", "-73.573398,45.534169,0", "1945, avenue Mont-Royal Est"),
array("Tutti Frutti", "-73.576169,45.499554,0", "1251, boulevard Maisonneuve"),
array("Toi, moi & Caf�", "-73.576922,45.481837,0", "2695, rue Notre-Dame-Ouest"),
array("March� Naturel Tau (St-Denis)", "-73.578796,45.522074,0", "4238, rue St-Denis"),
array("Dix Mille Villages, Montr�al", "-73.579491,45.522393,0", "4282, rue Saint-Denis"),
array("Fruiterie Roger", "-73.580224,45.536082,0", "1832, avenue Laurier Est"),
array("Le Frigo Vert", "-73.580511,45.497523,0", "2130, rue Mackay"),
array("Caf� Pi", "-73.580619,45.517509,0", "4127, boulevard St-Laurent"),
array("Comite de justice sociale", "-73.581438,45.493776,0", "1857, rue de Maisonneuve Ouest"),
array("Cooperative Coffees", "-73.582513,45.534584,0", "5089, rue Fabre"),
array("Ma�tre Gourmet", "-73.582712,45.534517,0", "1520 Rue Laurier Est"),
array("Le Fouvrac", "-73.582915,45.534303,0", "1451 Laurier Est"),
array("choco-fraise", "-73.583218,45.538598,0", "5440, rue Chabot #5"),
array("Les Vivres", "-73.584656,45.520023,0", "4434, rue St. Dominique"),
array("Caf� Planete", "-73.584834,45.521779,0", "163, rue Mont-Royal Est"),
array("Pomme D'Api", "-73.585048,45.547847,0", "2599, boulevard Rosemont"),
array("AbyaYala", "-73.587137,45.520427,0", "4555, boulevard St-Laurent"),
array("Rachelle Bery, Montr�al", "-73.591418,45.549125,0", "2510, Beaubien Est"),
array("Artisans du monde", "-73.594025,45.521644,0", "123, rue Laurier Ouest"),
array("United Church Book Room", "-73.598052,45.479513,0", "301, avenue Lansdowne"),
array("Bio-Terre (Epicerie Sant�)", "-73.601042,45.523407,0", "201, rue St-Viateur"),
array("Oscar", "-73.601958,45.535621,0", "6356, rue St-Hubert"),
array("Pharmacie Jean-Coutu", "-73.603111,45.536138,0", "6500, rue St-Hubert"),
array("Mission Sant� Thuy", "-73.604081,45.525212,0", "1138, avenue Bernard Ouest"),
array("National Food Shop", "-73.604504,45.478095,0", "4903, rue Sherbrooke Ouest"),
array("Capucine et Tournesol", "-73.604694,45.524537,0", "226, rue Bernard Ouest"),
array("Caf� l'Autre Monde", "-73.605955,45.523136,0", "371, rue Bernard Ouest"),
array("Un Monde � Vie", "-73.606005,45.748211,0", "1075, mont�e Masson"),
array("A Votre Sant� Aliments Naturel", "-73.607014,45.475840,0", "5126, Sherbrooke Ouest"),
array("Sant� Beaut� Johanne Verdon", "-73.610346,45.544329,0", "1278, rue Jean Talon Est"),
array("Aliments Merci Dima Jean Talon", "-73.613904,45.536216,0", "282, place du March� du Nord"),
array("Au Naturel Terrebonne", "-73.614097,45.733661,0", "554, mont�e Masson"),
array("Le Serpolet", "-73.615672,45.519612,0", "1457, avenue Van Horne"),
array("Intermed, Universite de Montr�al  - Pavillion principal", "-73.618823,45.503308,0", "2900, rue Edouard Montpetit"),
array("Fruiterie Epicerie St-Denis", "-73.622891,45.540768,0", "7692, rue St-Denis"),
array("Recette Maison", "-73.626431,45.541129,0", "350, rue Gounod"),
array("Coop Caf� Jeunesse Mutliculturel", "-73.628133,45.605722,0", "11 121, avenue Salk, suite 114"),
array("Caf� Java Mythe", "-73.633082,45.542217,0", "301, rue Guizot Est"),
array("Saveurs-Unies", "-73.634879,45.693332,0", "773, Saint-Fran�ois Xavier"),
array("Health Tree Natural Foods", "-73.636540,45.476775,0", "7133 Cote St. Luc"),
array("TEVA", "-73.648967,45.492654,0", "5143, boulevard D�carie"),
array("Le Tournesol", "-73.655667,45.563993,0", "1602, rue Fleury Est"),
array("Aliments Naturels Sylvain IHA", "-73.658005,45.560076,0", "1332, rue Fleury Est"),
array("Poids de la Sant�", "-73.660162,45.564369,0", "10598, avenue Curotte"),
array("Source de la sant�", "-73.698676,45.566842,0", "103A, boulevard de la Concorde Ouest"),
array("M�re Nature et Docteur Nature", "-73.710078,45.578711,0", "315, boulevard St-Martin Ouest"),
array("Aliments Sant� Le Petit Prince", "-73.796299,45.578953,0", "3151-B, boulevard  Dagenais Ouest"),
array("Caf� l'Alchimiste", "-73.809076,46.017002,0", "5866, rue Delorimier"),
array("Papillon Foods", "-73.816281,45.445491,0", "303, boulevard St-Jean"),
array("Dix Mille Villages, Pointe Claire", "-73.825735,45.428978,0", "290, chemin Bord-du-Lac, # 108"),
array("Jesse Natural Magasin SanT", "-73.872085,45.477456,0", "46, rue Sainte-Anne"),
array("METRO A. Martel", "-73.876812,45.574586,0", "219, rue St-Laurent"),
array("Le Fruitier", "-73.901796,45.560656,0", "315, rue Fere"),
array("Vogel, St-Eustache", "-73.902515,45.562026,0", "367, boulevard Arthur-Sauv�"),
array("METRO Le Blainvillois", "-73.904163,45.689037,0", "1360, boulevard Labelle"),
array("Paroisse St-Esprit", "-73.907983,45.563928,0", "374, Pie XII"),
array("Ferme Bio Pointe du Moulin", "-73.908308,45.352461,0", "2103, boulevard Perrot"),
array("Paroisse Ste-Marguerite", "-73.930874,45.577652,0", "255, rue Racine"),
array("GRIP McGill", "-73.959472,46.081930,0", "3647, rue Universit�"),
array("Biotop - Aliments Sant�", "-73.961458,45.391447,0", "324, Grand Boulevard"),
array("Distribution Origine Caf�", "-90.237447,46.428932,0", "Montr�al"),
),
"Ottawa"  => array(
array("D�panneur Luc Mauzerol", "-75.412205,45.586050,0", "563, rue B�langer"),
array("Pantry Plus Foods", "-75.528321,45.469469,0", "2433, boulevard St-Joseph"),
array("The Organic Basket Company", "-75.530142,45.464894,0", "1364 Gaultois Avenue"),
array("Nine to Five Coffee", "-75.611155,45.398888,0", "2630-F Lancaster Road"),
array("Jazz'oo Caf�", "-75.676895,45.439414,0", "35 Beechwood Avenue"),
array("Bread and Roses Bakery", "-75.677346,45.438849,0", "11 Beechwood Ave"),
array("Wheat Berry", "-75.677474,45.408185,0", "206 Main Street"),
array("Green Door Vegetarian Restaurant", "-75.677633,45.408455,0", "198 Main Street"),
array("Cuppedia", "-75.679496,45.411645,0", "97 Main Street"),
array("Timothy's Coffee", "-75.679745,45.386760,0", "2277 Riverside Drive"),
array("Natural Food Depot", "-75.680752,45.427521,0", "304 Wilbrod Ave"),
array("Iyaa Food Store", "-75.681191,45.424725,0", "46F Henderon Avenue"),
array("Passion in the Kitchen", "-75.681223,45.391718,0", "1200 Bank Street"),
array("Ten Thousand Villages, Ottawa 2", "-75.681970,45.392342,0", "1172 Bank Street"),
array("Lasting Impressions", "-75.683407,45.224673,0", "5552 Main Street"),
array("Perfection Satistfaction Promise Vegetarian Restaurant", "-75.683472,45.425077,0", "167 Laurier Avenue E"),
array("Satisfaction, Perfection Promise Vegetarian Restaurant", "-75.683472,45.425077,0", "167 Laurier Avenue East"),
array("Moca Loca, Gatineau", "-75.685762,45.482766,0", "B-799, boulevard de la Gappe"),
array("Kardish Foods", "-75.687517,45.401662,0", "Fifth Avenue Court # 99"),
array("Hopewell Kitchen", "-75.687704,45.391517,0", "70 Leonard Ave #A"),
array("Hopewell Kitchens", "-75.687704,45.391517,0", "70A Leonard Ave"),
array("The Wild Oat", "-75.687999,45.402358,0", "817 Bank Street"),
array("Arbour Environmental Shoppe", "-75.688270,45.402836,0", "800 Bank Street"),
array("Octopus Books", "-75.688512,45.402975,0", "116 Third Ave"),
array("Natural Choice / 4 Nature B&B", "-75.689769,45.412928,0", "263 McLeod St"),
array("Natural Food Pantry - Byward Market", "-75.690309,45.429337,0", "129 York Street"),
array("Tea Party", "-75.690562,45.429163,0", "119 York Street"),
array("Dunn's Famous Restaurant", "-75.691332,45.418981,0", "220 Elgin Street"),
array("Gagne en Sant�", "-75.692584,45.478342,0", "224, rue Bellehumeur"),
array("Boulanger Fran�ais", "-75.692613,45.430098,0", "119 Murray Street"),
array("Tea Store", "-75.692690,45.428179,0", "53 York Street"),
array("Oh Ya Caf� Plus", "-75.692797,45.427827,0", "55 Byward Market Street"),
array("Moulin de Provence", "-75.692797,45.427827,0", "55 Byward Market Street"),
array("Byward Fruit Market", "-75.693137,45.428124,0", "36 Byward market Street"),
array("Caf� M", "-75.693650,45.425779,0", "700 Sussex Drive"),
array("Planet Coffee", "-75.693788,45.427672,0", "24 York Street"),
array("Oh So Good Desserts Caf�", "-75.693852,45.427894,0", "25 York Street"),
array("Peace Garden Vegetarian", "-75.694066,45.428614,0", "47 Clarence Street"),
array("Herb and Spice Bank", "-75.694974,45.413749,0", "375 Bank Street"),
array("Maison Baguettes", "-75.694979,45.413755,0", "378 Bank St"),
array("Memories", "-75.695285,45.428102,0", "7 Clarence Street"),
array("Ottawa Organics and Natural Foods", "-75.696318,45.407714,0", "333 Catherine Street # 215"),
array("Naturally Green", "-75.696710,45.415775,0", "273 Bank Street"),
array("Golden Baguette Bakery", "-75.697407,45.416581,0", "242 Bank Street"),
array("The Marvelous Mustard Shop", "-75.697903,45.422621,0", "109a Sparks Street"),
array("Caf� l'Ange", "-75.697903,45.422621,0", "109B Sparks Street"),
array("Moca Loca Caf�", "-75.699689,45.478571,0", "B799, boulevard de la Gappe"),
array("Malone's Lakeside Bar & Grill", "-75.703853,45.397703,0", "1001 Queen Elizabeth Dr"),
array("URBeAN GRIND", "-75.711777,45.408697,0", "145 Rochester Street"),
array("Nikktinna's Caf� and Deli", "-75.711828,45.404446,0", "262 Preston Street"),
array("Le Troquet", "-75.716308,45.426756,0", "41, rue Laval"),
array("Caf� L'Argoat", "-75.716318,45.426691,0", "39A, rue Laval"),
array("The Table Vegetarian Restaurant", "-75.731590,45.399853,0", "1230 Wellington Street"),
array("D�panneur C�sar", "-75.733362,45.433048,0", "175, boulevard St-Joseph"),
array("Pain d'Alain", "-75.733450,45.426717,0", "53, boulevard St-Joseph"),
array("Caf� Gaia", "-75.735101,45.440257,0", "47-A, rue Montclair"),
array("Nicastro's Italian Food Emporium", "-75.735415,45.354001,0", "1558 Merivale Road"),
array("Salem Storehouse", "-75.735415,45.354001,0", "1558 Merivale Road"),
array("La Bo�te � Grains", "-75.736095,45.450108,0", "581, boulevard St-Joseph"),
array("Ottawa Bagel Shop & Deli", "-75.736536,45.398715,0", "1321 Wellington Street"),
array("Herb and Spice Wellington", "-75.736568,45.398709,0", "1310 Wellington Street"),
array("Loeb, Island Park", "-75.741152,45.398366,0", "345 Carleton Road"),
array("Marche JOVI", "-75.745217,45.420152,0", "50, rue B�gin"),
array("METRO Limbour", "-75.754462,45.492780,0", "2505, rue Saint-Louis"),
array("Mountain Equipment Co-op", "-75.754927,45.391606,0", "366 Richmond Road"),
array("METRO Deslauriers", "-75.755300,45.449230,0", "214, boulevard Cit� des Jeunes"),
array("Human Beans Coffee Company", "-75.756058,45.399817,0", "3-282 Ferndale Avenue"),
array("Boucherie Alain Bisson", "-75.779153,45.434114,0", "2, boulevard des Grives"),
array("Rainbow Natural Foods", "-75.790859,45.362162,0", "1487 Richmond Rd"),
array("Sol Epicerie Sant�", "-75.837100,45.395417,0", "195, rue Principale"),
array("Delice Royal 2000", "-75.894181,45.294359,0", "500 Hazeldean Road, # 16"),
array("Delice Royal  French Pastries", "-75.894181,45.294359,0", "500 Hazeldean Road, # 16"),
array("Little Euro Deli", "-75.919165,45.316178,0", "2D Goldridge Drive"),
array("Neptune's Kitchen", "-75.920014,45.347946,0", "555 Legget Drive"),
array("Stittsville Meat Market and Deli", "-75.921330,45.259020,0", "1496 Main Street"),
array("Stittsville Meat Market & Deli", "-75.921330,45.259020,0", "1496 Main Street"),
array("Heart & Soul Caf�", "-76.019677,45.421815,0", "2741 Dunrobin Road"),
array("Moca Loca, Ottawa", "-76.571132,45.517598,0", "35 Beachwood Ave"),

),
"Quebec"  => array(
array("Crackpot Ceramique Caf�", "1.626852,43.568030,0", "987, chemin de l'Eglise"),
array("Librairie L'Imprevisible", "-71.163747,46.880358,0", "2135, avenue Royale"),
array("L'Intermarche Saint-Jean", "-71.216500,46.811615,0", "850, rue Saint-Jean"),
array("Vitavie Au Naturel (Beauport)", "-71.216667,46.858970,0", "3333, boulevard du Carrefour"),
array("Le Hobbit, bistro", "-71.218769,46.810594,0", "700, rue St Jean"),
array("La Carotte Joyeuse", "-71.218882,46.810549,0", "690, rue St-Jean"),
array("Le Crac", "-71.218882,46.810549,0", "690, rue St-Jean"),
array("IGA, Qu�bec", "-71.220946,46.824685,0", "825, 4e avenue"),
array("Epicerie Langlois", "-71.221016,46.809625,0", "509, rue St-Jean"),
array("Boutique Equimonde", "-71.224727,46.813432,0", "365, boulevard Charest Est"),
array("Que Seraa Ceramique Caf�", "-71.225539,46.804868,0", "7, boulevard Ren�-L�vesque Ouest"),
array("Caf� HumaniTerre", "-71.225991,46.815902,0", "281, de la Couronne"),
array("Epicerie Sant� du Quartier", "-71.226244,46.803977,0", "1024, avenue Cartier"),
array("Supermarche BM", "-71.226977,46.804569,0", "977, avenue Cartier"),
array("Bar le Bal du L�zard", "-71.230141,46.826851,0", "1049, 3e avenue"),
array("La Fournee Bio", "-71.231604,46.828425,0", "1296, 3e avenue"),
array("La Maison Lorlan", "-71.233148,46.830081,0", "1554, 3e avenue"),
array("Provigo Jobidon", "-71.240658,46.832886,0", "2235, 1�re avenue"),
array("Les Aliments la Rosalie", "-71.246029,46.783754,0", "1646-C, chemin St-Louis"),
array("METRO St-Rodrigue", "-71.255903,46.838709,0", "4155, 4e avenue Ouest"),
array("Porte journaux", "-71.256104,46.793889,0", "1411, chemin Ste-Foy"),
array("La Boule Miche", "-71.257667,46.793207,0", "1483, chemin Sainte-Foy"),
array("Les 5 Terres", "-71.260056,46.793388,0", "1562, rue Garnier"),
array("Aliments de Sant� Laurier", "-71.283886,46.769611,0", "2700, boulevard Laurier"),
array("Alimentex", "-71.284218,46.696287,0", "1188, 1re avenue"),
array("Couleur Caf�", "-71.286261,46.782890,0", "2500, chemin des Quatre-Bourgeois"),
array("Corneau Cantin Lebourgneuf", "-71.291878,46.836239,0", "1170, Lebourgneuf"),
array("Sant� La Vie Naturel", "-71.311795,46.765049,0", "999, de Bourgogne"),
array("La Girofl�e", "-71.320809,46.769463,0", "3320 chemin Ste-Foy"),
array("Provigo J.A. Drolet", "-71.361382,46.803018,0", "1670, Notre-Dame, Ancienne Lorette"),
array("Corne d'Abondance", "-71.371940,46.812630,0", "1988, rue Notre-Dame"),
array("Naturosol", "-73.571115,45.544969,0", "2699, boulevard St-Joseph Est"),

),
"Regina"  => array(
array("The Healthy Scoop", "-101.666510,50.144361,0", "413 Main St"),
array("Ten Thousand Villages, Regina", "-104.551850,50.437881,0", "554 University Park Drive"),
array("Nature's Best Market", "-104.612621,50.443959,0", "2224 - 14 Avenue"),

),
"Saskatoon"  => array(
array("Ten Thousand Villages, Saskatoon 2", "-106.596123,52.114695,0", "A5 - 3510 8th Street East"),
array("Just Delights", "-106.648311,52.116748,0", "909 Main Street"),
array("The Fine Art Caf�", "-106.651724,52.121789,0", "702 14th Street East"),

),
"Sherbrooke"  => array(
array("Bio & Alternative Lennoxville", "-71.856598,45.367305,0", "115 Queen Sreet"),
array("A Fleur de Vie", "-71.891759,45.396646,0", "261, rue Alexandre"),
array("Carrefour de solidarit� internationale", "-71.896798,45.407099,0", "165, rue Moore"),
array("Coop la Grande Ruche", "-71.916109,45.399042,0", "25, rue Bryant"),

),
"St John's"  => array(
array("Cofffee Matters ", "-52.701769,47.571232,0", "1 Military Road"),
array("Coffee & Company ", "-52.706804,47.564360,0", "204 Water Street"),
array("Hava Java ", "-52.706996,47.564132,0", "216 Water Street"),
array("Auntie Crae's Food Shop ", "-52.708940,47.562364,0", "272 Water Street"),
array("Coffee Matters Too", "-52.710227,47.561383,0", " 320 Water Street"),
array("Food For Thought ", "-52.710510,47.562336,0", "382 Duckworth Street"),
array("Jumping Bean Coffee ", "-52.711899,47.565294,0", "47 Harvey Road"),

),
"Toronto"  => array(
array("BK Natural Foods", "-1.051887,54.528710,0", "114 Eglington Square"),
array("The Cookie Shoppe Organic Bakery", "-78.913615,43.888530,0", "25 Thickson Road North"),
array("Global Conscience", "-78.949629,43.881889,0", "328 Palace Street"),
array("Hot Beanz Coffee Company", "-79.056243,43.854427,0", "8-109 Old Kingston Rd"),
array("Honey & Spice & All Things Natural", "-79.284438,43.680779,0", "1049 Kingston Rd"),
array("The Savoury Grounds Coffee Company Ltd", "-79.287122,43.680533,0", "971 Kingston Rd"),
array("The Remarkable Bean", "-79.287129,43.672747,0", "2242 Queen Street East"),
array("Beaches Bake Shop", "-79.289709,43.680317,0", "900 Kingston Road"),
array("Miofrio - Juice and Java", "-79.298012,43.670489,0", "2169 Queen Street East"),
array("Toronto Organics", "-79.306262,43.691056,0", "34 Doncaster Road"),
array("The Mug & Truffle Chocolate Caf�", "-79.310994,43.865870,0", "144 Main Street, unit 17"),
array("Jawny Bakers Restaurant", "-79.312796,43.705463,0", "804 O'Connor Drive"),
array("Mountain View Estates Coffee Company", "-79.315930,43.710831,0", "25 Hollinger Road"),
array("Earth Grounds Espresso Bar", "-79.329096,43.696803,0", "1028 Coxwell Avenue"),
array("Le Caf� vert", "-79.341117,43.660826,0", "946 Queen Street East"),
array("Your Fundraising Source", "-79.343353,43.706908,0", "95 Thorncliffe Park Drive"),
array("The Big Carrot", "-79.352876,43.677371,0", "348 Danforth Ave"),
array("Counter Culture", "-79.377730,43.727423,0", "York University"),
array("York University Graduate Lounge", "-79.377730,43.727423,0", "York University"),
array("Cawthra Square Caf�", "-79.381138,43.666182,0", "519 Church Street"),
array("Trinity Square Caf�", "-79.381438,43.654081,0", "10 Trinity Square"),
array("Noah's, Toronto", "-79.386037,43.668463,0", "667 Yonge Street"),
array("YWCA International Boutique", "-79.386203,43.669793,0", "14 Roy's Square"),
array("Dinah's Cupboard", "-79.388861,43.670706,0", "50 Cumberland Street"),
array("Pure Juice", "-79.393407,43.688246,0", "12 St. Clair Avenue East"),
array("Wrap N' Roll, Toronto", "-79.395296,43.668442,0", "192 Bloor Street West"),
array("Whole Foods Market, Hazelton Lanes", "-79.395499,43.672048,0", "87 Avenue Road"),
array("Ten Thousand Villages, Toronto", "-79.400010,43.714592,0", "2599 Yonge Street"),
array("Essence of Life Natural Foods", "-79.400464,43.654117,0", "56D Kensington Ave"),
array("GRAB-N-GO Coffee Company", "-79.401618,43.667126,0", "300 Bloor Street West"),
array("Dooney's", "-79.408690,43.665673,0", "511 Bloor Street West"),
array("Citron", "-79.409132,43.646169,0", "813 Queen Street West"),
array("Grapefruit Moon", "-79.412992,43.669634,0", "968 Bathurst Street"),
array("Java Mama", "-79.414120,43.672516,0", "1075 Bathurst street"),
array("Karma Co-operative", "-79.415007,43.668195,0", "739 Palmerston Avenue"),
array("Birdwatch", "-79.419504,43.733094,0", "1907 Avenue Road"),
array("Wild Birds Unlimited", "-79.426844,43.826413,0", "8150 Yonge Street"),
array("Fair Grounds", "-79.430994,43.724736,0", "706 - 3311 Bathurst St"),
array("Books On The Hill", "-79.437652,43.876038,0", "12 Centre Street E, unit #5"),
array("Noah's, Thornhill", "-79.446497,43.795627,0", "7117 BathurstStreet, Unit 101"),
array("Evergreen Natural Foods", "-79.448192,43.644084,0", "161 Roncesvalles Avenue"),
array("Natural Life Health Market", "-79.450098,43.811499,0", "7700 Bathurst Street, Unit 30"),
array("Revue Cinema Snack Bar", "-79.450932,43.651163,0", "400 Roncesvalles Avenue"),
array("River Restaurant", "-79.450937,43.651176,0", "413 Roncesvalles Avenue"),
array("Coffee and All that Jazz", "-79.451187,43.651487,0", "72 Howard Park Avenue"),
array("Nature's Loft", "-79.457441,43.866214,0", "205 Donhead Village Blvd"),
array("Imperial Coffee and Services", "-79.465885,43.752882,0", "12 Kodiak Crescent"),
array("Nature's Emporium", "-79.475471,44.033904,0", "16655 Yonge Street, Unit 25"),
array("The Coffee Bar", "-79.479593,43.660149,0", "514 Annette St"),
array("Lou's Coffee Bar", "-79.479593,43.660149,0", "514 Annette Street"),
array("Better Living", "-79.530826,43.691872,0", "1500 Royal York Rd"),
array("Front Door Organics", "-79.537727,43.603402,0", "415 Horner Avenue, # 9"),
array("Olympic Roastery", "-79.621986,43.702748,0", "25-6415 Northwest Drive"),
array("The Colborne on Lakeshore", "-79.668856,43.445143,0", "174 Lakeshore Rd.East"),
array("Ontario Natural Food Co-op", "-79.677753,43.607621,0", "5685 McLaughlin Rd"),
array("The Meeting House", "-79.685557,43.510134,0", "2700 Bristol Circle"),
array("Two Wheels Caf�", "-79.689313,43.550640,0", "4099 Erin Mills Parkway, # 20"),
array("The Shop For All Reasons", "-79.712297,43.580625,0", "228 Queen Street South"),
array("Personal Service Coffee", "-79.713792,43.419910,0", "1464 Wallace Road"),
array("Wanigan Whole Foods", "-79.733590,43.691337,0", "250 Clarence Street, # 4"),
array("Intranorth", "-79.754423,43.642838,0", "6 Maddybeth Crescent"),
array("Burlington Health Foods", "-79.785456,43.354237,0", "3350 Fairview Street"),
array("Paradise Natural Foods", "-79.863183,43.508036,0", "500 Laurier Avenue"),
array("Silver Creek Espresso Bar", "-79.925308,43.648854,0", "112 Main Street S"),
array("Chicory Common", "-80.818003,44.174730,0", "180 Grarafaxa Street S"),

),
"Vancouver"  => array(
array("Roots Natural", "-122.605831,49.220493,0", "22254 Dewidney Trunk Road"),
array("Ethical Addictions Coffee House, Langley", "-122.656144,49.104606,0", "20411 Fraser Hwy"),
array("Circling Dawn", "-122.671398,45.640189,0", "Vancouver"),
array("Green Lunch Box", "-122.671398,45.640189,0", "Vancouver"),
array("Futu Entree Preparation", "-122.805659,49.277794,0", "#19 - 2773 Barnet Highway"),
array("Thrifty Foods, Coquitlam", "-122.817822,49.249084,0", "2662 Austin Avenue"),
array("Take A Break Coffee Service", "-122.834122,49.223942,0", "105 - 17 Fawcett Road"),
array("Garden Works - Ocean Park", "-122.867458,49.040527,0", "2124 - 128th Street"),
array("Jiva Organics Mfg & Dist Inc", "-122.997710,49.191351,0", "7442 Fraserpark Drive"),
array("Ital Hands", "-123.012727,49.290113,0", "4145 Yale Street"),
array("Burnaby Food Market", "-123.020848,49.214637,0", "7610 Joffre Avenue"),
array("FlowerBox", "-123.069488,49.273037,0", "1704 Charles Street"),
array("Eternal Abundance", "-123.069535,49.275537,0", "1025 Commercial Drive"),
array("Sweet Cherubim Organic and Natural Foods", "-123.069546,49.274818,0", "1105 Commercial Drive"),
array("Torrefazione Coloiera", "-123.069741,49.265015,0", "2206 Commercial Drive"),
array("Small Potatoes Urban Delivery (SPUD)", "-123.071269,49.281265,0", "1660 East Hastings Street"),
array("Ten Thousand Villages, Vancouver", "-123.090525,49.230804,0", "5920 Fraser Street"),
array("Third Wish Caf�", "-123.111043,49.282177,0", "309 West Pender Street"),
array("Canada Produce", "-123.138598,49.261519,0", "2721 Granville Street"),
array("The Elysian Room", "-123.145146,49.267145,0", "1778 West 5th Avenue"),
array("Kits Food Market", "-123.155003,49.271912,0", "1575 Yew Street"),
array("Choices, Vancouver area", "-123.165348,49.257680,0", "2627 West 16th Avenue"),
array("Southland Market", "-123.173187,49.234734,0", "3008 West 41st Avenue"),
array("Stongs Market", "-123.185248,49.245593,0", "4560 Dunbar Street"),
array("Sewell's Landing", "-123.276234,49.375492,0", "6695 Nelson Avenue"),

),
"Victoria"  => array(
array("Peppers Foods", "-123.297405,48.461135,0", "3829 Caboro Rd"),
array("Mount Douglas Market", "-123.333409,48.477159,0", "4101 Shelbourne St"),
array("Thrifty Foods, Victoria", "-123.336573,48.444448,0", "1580 Hillside Avenue"),
array("Trevor Walker", "-123.355901,48.423613,0", "1034 Fort Street"),
array("Market on Yates", "-123.359194,48.425662,0", "903 Yates Street"),
array("Planet Organic Market", "-123.364392,48.469777,0", "109 - 3995 Quadra Street"),
array("Second Story Books & Caf�", "-123.367949,48.427578,0", "579 Johnson Street"),
array("Solstice Caf�", "-123.368830,48.428493,0", "529 Pandora Avenue"),
array("Watoto Canada", "-123.373775,48.410462,0", "1950 Government Street, # 8"),

),
"Winnipeg"  => array(
array("High Point Coffee Company", "-97.026934,49.979512,0", "732 Applecross Drive"),
array("Evolution Caf� Franchise Systems", "-97.138724,49.890311,0", "163 Garry Street"),
array("Mondragon Bookstore & Coffee House", "-97.140349,49.897147,0", "1-91 Albert Street"),
array("Ten Thousand Villages, Winnipeg", "-97.147684,49.821983,0", "134 Plaza Drive"),
array("Organza Health Food", "-97.150199,49.871844,0", "664 Corydon Avenue"),
array("Canadian Lutheran World Relief/Four Corners", "-97.151951,49.951314,0", "1080 Kingsbury Avenue"),
array("AM Coffee Services", "-97.155560,49.910225,0", "753, Henry Ave"),
array("Humbold's Legacy", "-97.170951,49.881634,0", "887 Westminster Avenue"),

),
);

