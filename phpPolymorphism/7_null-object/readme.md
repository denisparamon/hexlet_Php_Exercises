На Хекслете доступ к курсам оформляется через подписку. Подписка - это отдельная сущность, которая хранит в себе информацию о самой подписке: когда она началась, сколько продолжается, оплачена ли и так далее. Типичная проверка на наличие подписки (а значит доступ к платному контенту) выглядит так:  

<?php  
  
// Эти примеры сильно упрощены, к тому же Хекслет написан на Rails  <br>
// но для демонстрации идеи такая реализация подойдет  <br>
$user->getCurrentSubscription()->hasPremiumAccess();  <br>
$user->getCurrentSubscription()->hasProfessionalAccess();  <br>
Но не у всех пользователей есть подписка, на Хекслете есть и большая бесплатная часть. Так как подписка может отсутствовать, в коде придется делать так:  <br>
  <br>
<?php  <br>
<br>
if ($user->getCurrentSubscription() && $user->getCurrentSubscription()->hasPremiumAccess()) {  <br>
   // есть преимум доступ, показываем что-то особенное  <br>
}  <br>
Чтобы избежать постоянных проверок на существование подписки, мы внедрили Null Object. Теперь подписка есть всегда и достаточно написать:<br>
  <br>
<?php

if ($user->getCurrentSubscription()->hasProfessionalAccess()) {  <br>
   // есть профессиональный доступ, показываем что-то особенное <br>
}
## src/FakeSubscription.php  <br>
Реализуйте класс FakeSubscription, который повторяет интерфейс класса Subscription за исключением конструктора. В конструктор FakeSubscription принимает пользователя. Если пользователь администратор $user->isAdmin(), то все доступы разрешены, если нет – то запрещены.<br>
  
## src/User.php    <br>
Допишите конструктор пользователя, так, чтобы внутри устанавливалась реальная подписка если она передана снаружи и создавалась фейковая в ином случае.  <br>
  <br>
Примеры:  <br>
<?php  <br>
  
use App\Subscription;  <br>
use App\User;  <br>
  <br>
$user = new User('vasya@email.com', new Subscription('premium'));  <br>
$user->getCurrentSubscription()->hasPremiumAccess(); // true  <br>
$user->getCurrentSubscription()->hasProfessionalAccess(); // false  <br>
  <br>
$user = new User('vasya@email.com', new Subscription('professional'));  <br>
$user->getCurrentSubscription()->hasPremiumAccess(); // false  <br>
$user->getCurrentSubscription()->hasProfessionalAccess(); // true  <br>
  <br>
// Внутри создается фейковая, потому что подписка не передается  <br>
$user = new User('vasya@email.com');  <br>
$user->getCurrentSubscription()->hasPremiumAccess(); // false  <br>
$user->getCurrentSubscription()->hasProfessionalAccess(); // false  <br>
  <br>
$user = new User('rakhim@hexlet.io'); // администратор, проверяется по емейлу  <br>
$user->getCurrentSubscription()->hasPremiumAccess(); // true  <br>
$user->getCurrentSubscription()->hasProfessionalAccess(); // true  <br>
  