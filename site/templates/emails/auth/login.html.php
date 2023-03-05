Tere <?= $user->nameOrEmail() ?>,

<p>Te taotlesite Loomeklastri paneeli sisselogimiskoodi.<br>
    Antud kood kehtib <?= $timeout ?> minutit:</p>

<?= $code ?>

<p>Kui te ei ole taotlenud sisselogimiskoodi, siis palun ignoreerige seda e-kirja või võtke küsimuste korral ühendust veebilehe administraatoriga.
    Turvalisuse huvides ärge edastage seda e-kirja.</p>
<br>
<p>Здравствуйте <?= $user->nameOrEmail() ?>,</p>

<p>Вы недавно запросили код входа для панели Творческово Кластра.<br>
    Следующий код входа будет действителен в течение <?= $timeout ?> минут:</p>

<?= $code ?>

<p>Если вы не запрашивали код входа, пожалуйста, проигнорируйте это письмо или обратитесь к администратору, если у вас есть вопросы.
    В целях безопасности, пожалуйста, НЕ пересылайте это письмо.</p>