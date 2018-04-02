<?php 

// получаем содержимое папки /datafiles
$files = scandir($_SERVER['DOCUMENT_ROOT'] . '/datafiles');

$result = [];

if(!empty($files)) {
    foreach ($files as $value) {
        // находим все файлы у которых имена состоят из цифр и букв латинского алфавита и имеют расширение ixt
	if (!in_array($value, ['.', '..']) && preg_match('/^[a-z0-9]+\.ixt$/i', $value)) {
        $result[] = $value;
	}
    }
}

if(!empty($result)) {
	// выводим имена файлов
	var_dump($result);
} else {
	echo 'Нет файлов удовлетворяющих заданному критерию!';
}
