<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <title>Алфавит и символы языка</title>
</head>
<body>
<div class="black">
    <a href="modul1.php"> <img src="https://1.downloader.disk.yandex.ru/preview/f95757f920b6aa8fffa5293eed623ff129d3a312a9d7ab7e7a96de6d625c7f60/inf/ZeZoFfj2ti3eWULL7szGplH7THIOpr1QDSW2ndFJKTvRvHzgrI0RTB6S7N5ypsp0XbdOBn5hU9YTsWS2qKYmMw%3D%3D?uid=555148530&filename=Lovely%20Nails%20%283%29.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=555148530&tknv=v2&size=1838x937"></a>
    <a href="loading.php"> <img src="https://3.downloader.disk.yandex.ru/preview/fef01af9ac01de5e8b4a850679d8906ceb738fd086c0b035e765ada8c0a76028/inf/jA_kSFI5ol72RAKk83uu4kLC8ttpWQszL5u0tdolgdWI2PFmYyNPKz-mddwTLdfKEBC2vnsl9sfzhWkfHd3SHQ%3D%3D?uid=555148530&filename=head.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=555148530&tknv=v2&size=1838x937"></a>
</div>

<h1>Алфавит и символы языка</h1>

<div class="text">
    <h2> Основу любого языка составляет алфавит, то есть конечный, фиксированный набор символов, используемых для составления текстов на данном языке (в нашем случае - программ).</h2>
    <h2> Алфавит Паскаля:</h2>

    <ul>
        <li> прописные латинские буквы - A, B, C, D …, X, Y, Z</li>
        <li> строчные латинские буквы - а, b, c, d… х, y, z</li>
        <li> арабские цифры - (0, 1,2,3 …,7, 8, 9)</li>
        <li> набор специальных символов: скобки (квадратные, круглые, фигурные), знаки: препинания, подчеркивания, знаки арифметических операций и тд</li>
    </ul>

    <h2> В роле составных символов (неделимых элементов) рассматриваются такие последовательности символов:</h2>

    <ul>
        <li> := (знак операции присваивания)</li>
        <li> >= и <= (знаки < и >)</li>
        <li> (* и *) (начало и конец комментария)</li>
    </ul>

    <h2> Также, в языке Паскаль существует определенное количество разных цепочек символов, которые представляют собой единые смысловые элементы с фиксированным значением. Эти цепочки символов принято называть служебными словами.</h2>

    <table>
        <tr class="tab">
            <td> Служебное слово языка Паскаль </td>
            <td> Значение служебного слова </td>
        </tr>

        <tr>
            <td> and </td>
            <td> и </td>
        </tr>

        <tr>
            <td> array </td>
            <td> массив </td>
        </tr>

        <tr>
            <td> begin </td>
            <td> начало </td>
        </tr>

        <tr>
            <td> do </td>
            <td> выполнить </td>
        </tr>

        <tr>
            <td> else </td>
            <td> иначе </td>
        </tr>

        <tr>
            <td> for </td>
            <td> для </td>
        </tr>

        <tr>
            <td> if </td>
            <td> если </td>
        </tr>

        <tr>
            <td> of </td>
            <td> из </td>
        </tr>

        <tr>
            <td> or </td>
            <td> или </td>
        </tr>

        <tr>
            <td> procedure </td>
            <td> процедура </td>
        </tr>

        <tr>
            <td> program </td>
            <td> программа </td>
        </tr>

        <tr>
            <td> repeat </td>
            <td> повторить </td>
        </tr>

        <tr>
            <td> then </td>
            <td> то </td>
        </tr>

        <tr>
            <td> to </td>
            <td> до (увеличивая до) </td>
        </tr>

        <tr>
            <td> until </td>
            <td> до (до тех пор, пока) </td>
        </tr>

        <tr>
            <td> var </td>
            <td> переменная </td>
        </tr>

        <tr>
            <td> while </td>
            <td> пока </td>
        </tr>
    </table>

    <h2> Для обозначения переменных, констант, программ и прочих объектов применяются имена любые отличные от служебных слов последовательности цифр, букв и символа подчеркивания, начинающиеся с символа подчеркивания или буквы. Но некие условия соблюдать нужно:</h2>

    <ul>
        <li> идентификатор должен быть уникальным, то есть одним и тем же именем</li>
        <li> разные объекты не могут быть названы</li>
        <li> идентификатор имеет ограничение по длине (зависит от конкретной реализации языка на компьютере)</li>
        <li> идентификатор может состоять только из символов латинского алфавита, цифр и знака подчеркивания ("_")</li>
        <li> идентификатор не может начинаться с цифры</li>
    </ul>

    <h2> В Паскале константами являются любые явно заданные в программе данные (например, 7493, 'привет', 54.899). Следует обратить ваше внимание на то, что при записи числовых констант с дробной частью эта часть отделяется от целой не запятой, как, возможно, вы привыкли, а точкой. Для записи очень больших по модулю или очень малых (близких к нулю) чисел существует возможность записи их в так называемой экспоненциальной форме. С такой записью вы встречались в математике и физике, но называли ее стандартным видом числа.</h2>
    <h2 class="red"> Пример: 2.4567Е-06</h2>
    <h4 class="red">^мантисса ^порядок</h4>
    <h2> Здесь буква "Е" отделяет мантиссу (совокупность значащих цифр числа с десятичной точкой после первой) от порядка (показателя степени десятки в стандартном виде числа). Вам предстоит научиться как читать числа в таком виде, так и записывать.</h2>
    <h2> Константы, представляющие собой строковые величины, заключаются в апострофы.</h2>
    <h2> Если одна и та же величина используется в программе несколько раз, то удобнее было бы обозначить ее каким-нибудь именем и использовать это имя везде, где требуется записать соответствующую константу. Кроме сокращения размера исходного текста программы, это позволит избежать случайных ошибок, а также упростит отладку программы. Описание именованных констант начинается служебным словом Const. Далее следуют записи вида: <Идентификатор> = <значение>.</h2>
    <div class="red">
        <h2> Пример: </h2>
        <h2> Const </h2>
        <h2> Pi=3.14; </h2>
        <h2> Name1='Татьяна'; </h2>
        <h2> Name2='Виктор'; </h2>
        <h2> R21=6.33187E+03; </h2>
        <h2> W_W_W=934122; </h2>
    </div>
    <h2> Следует обратить внимание, что:</h2>

    <ul>
        <li> большинство существующих трансляторов не различают буквы разных регистров. Таким образом, записи "progRaM" и "PROGram" будем считать идентичными.</li>
        <li> некоторые символы латиницы и кириллицы совпадают по начертанию. Однако нельзя вместо буквы "К" латинской написать "K" русскую.</li>
    </ul>

    <h2> По поводу привычных арабских цифр сказать можно только то, что с их помощью записываются не только числа. Цифры в качестве обыкновенных символов могут использоваться в различных других конструкциях языка.</h2>
    <h2> Список символов и их использование:</h2>

    <ul>
        <li> . конец программы, разделение целой и дробной частей вещественного числа (десятичная точка), разделение полей в переменной типа Record</li>
        <li> , разделение элементов списков</li>
        <li> .. указание диапазона</li>
        <li> : используется в составе оператора присваивания, а также для указания формата вывода в операторе Writeln</li>
        <li> ; отделяет один раздел программы от другого, разделяет операторы</li>
        <li> ' используется для ограничения строковых констант</li>
        <li> - + * / ( ) арифметические знаки (используются по своему назначению)</li>
        <li> < > знаки отношений</li>
        <li> = используется в составе оператора присваивания, в разделах описаний констант и типов, используется как знак отношения (равно)</li>
        <li> @ имя специального оператора определения адреса переменной, подпрограммы</li>
        <li> ^ используется для именования динамических переменных</li>
        <li> {} ограничение комментариев в программе</li>
        <li> [ ] заключают в себе индексы элементов массивов</li>
        <li> _ символ подчеркивания используется также как любая буква, например, в идентификаторах - вместо пробела</li>
        <li> # обозначение символа по его коду</li>
        <li> $ обозначение директивы компилятора, обозначение шестнадцатеричного числа</li>
    </ul>

</div>
</body>
</html>