<?PHP   
include('vendor/autoload.php');

$class = new Quest\Settings\Cyberpunk;
$attributes = $class->getAttributes();
$skills = $class->getSkills();
///$attributes = $class->getAttributes();
//$skills = $class->getSkills();
/*
$array = [
    'primary_skills' => ['corpo', 'prontezza'],
    'value_primary_skills' => [
        [7,7], [8,6], [9,5]
    ],
    'secondary_skills' => ['fascino', 'intelligenza'],
    'value_secondary_skills' => [4, 3]
];

$character = [];
shuffle($array['value_primary_skills']);
shuffle($array['primary_skills']);
shuffle($array['value_secondary_skills']);
shuffle($array['secondary_skills']);
$rand = array_rand($array['value_primary_skills']);
$character[] = array_combine($array['primary_skills'], $array['value_primary_skills'][$rand]);
$character[] = array_combine($array['secondary_skills'], $array['value_secondary_skills']);
var_dump($character);
$merge = array_merge($character[0], $character[1]);
var_dump($merge);
*/
var_dump($attributes);
var_dump($skills);