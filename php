// Массив с высокими температурами
$highTemps = array(
    68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 
    73, 58, 63, 79, 78, 68, 72, 73, 80, 79, 
    68, 72, 75, 77, 73, 78, 82, 85, 89, 83
);

// Рассчитываем среднюю высокую температуру
$averageTemp = array_sum($highTemps) / count($highTemps);

// Находим пять самых высоких и пять самых низких температур
sort($highTemps); // Сортируем массив для получения крайних значений
$lowestTemps = array_slice($highTemps, 0, 5); // Пять самых низких
$highestTemps = array_slice($highTemps, -5); // Пять самых высоких

// Выводим результаты
echo "Средняя высокая температура: " . round($averageTemp, 2) . "°F<br>";
echo "Пять самых низких высоких температур: " . implode(", ", $lowestTemps) . "°F<br>";
echo "Пять самых теплых высоких температур: " . implode(", ", $highestTemps) . "°F<br>";
?>

// Функция для очистки и форматирования номера телефона
function cleanPhoneNumber($phone) {
    // Удаляем все ненужные символы, оставляя только цифры
    $cleaned = preg_replace('/\\D/', '', $phone);

    // Проверяем, начинается ли номер с "7" (для российскому формата)
    if (strlen($cleaned) === 11 && $cleaned[0] === '7') {
        // Если номер корректен, возвращаем его
        return $cleaned;
    } elseif (strlen($cleaned) === 10) {
        // Если номер состоит из 10 цифр, добавляем "7" в начало
        return '7' . $cleaned;
    } else {
        // Если формат номера неправильный, возвращаем false
        return false;
    }
}

// Пример использования функции
$phone = '+7 (900) 000-00-00';
$formattedPhone = cleanPhoneNumber($phone);

if ($formattedPhone) {
    echo $formattedPhone; // Выводим очищенный и форматированный номер
} else {
    echo "Некорректный номер телефона.";
}
?>

// Функция для извлечения части строки после последнего слэша
function getLastPartOfUrl($url) {
    // Используем функцию strrpos для нахождения позиции последнего слэша
    $lastSlashPosition = strrpos($url, '/');

    // Если слэш найден, возвращаем строку после него
    if ($lastSlashPosition !== false) {
        return substr($url, $lastSlashPosition + 1);
    }

    // Если слеша нет, можно вернуть оригинальный URL или пустую строку
    return $url;
}

// Пример использования функции
$url = 'http://www.wm-school.ru/7478639';
$result = getLastPartOfUrl($url);

// Вывод результата
echo $result; // Ожидаемый вывод: 7478639
?>

