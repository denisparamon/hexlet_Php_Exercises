На Хекслете доступ к курсам оформляется через подписку. Подписка - это отдельная сущность, которая хранит в себе информацию о самой подписке: когда она началась, сколько продолжается, оплачена ли и так далее. Типичная проверка на наличие подписки (а значит доступ к платному контенту) выглядит так:  

```
<?php
// Эти примеры сильно упрощены, к тому же Хекслет написан на Rails
// но для демонстрации идеи такая реализация подойдет
$user->getCurrentSubscription()->hasPremiumAccess();
$user->getCurrentSubscription()->hasProfessionalAccess();
```
Но не у всех пользователей есть подписка, на Хекслете есть и большая бесплатная часть. Так как подписка может отсутствовать, в коде придется делать так:  <br>

```
<?php

if ($user->getCurrentSubscription() && $user->getCurrentSubscription()->hasPremiumAccess()) {
   // есть преимум доступ, показываем что-то особенное
} 
```
Чтобы избежать постоянных проверок на существование подписки, мы внедрили Null Object. Теперь подписка есть всегда и достаточно написать:<br>
```
<?php

if ($user->getCurrentSubscription()->hasProfessionalAccess()) {
   // есть профессиональный доступ, показываем что-то особенное
}
## src/FakeSubscription.php
```
Реализуйте класс FakeSubscription, который повторяет интерфейс класса Subscription за исключением конструктора. В конструктор FakeSubscription принимает пользователя. Если пользователь администратор $user->isAdmin(), то все доступы разрешены, если нет – то запрещены.<br>
  
## src/User.php    <br>
Допишите конструктор пользователя, так, чтобы внутри устанавливалась реальная подписка если она передана снаружи и создавалась фейковая в ином случае.  <br>

Примеры:  
```
<?php
  
use App\Subscription;
use App\User; 
 
$user = new User('vasya@email.com', new Subscription('premium')); 
$user->getCurrentSubscription()->hasPremiumAccess(); // true 
$user->getCurrentSubscription()->hasProfessionalAccess(); // false 

$user = new User('vasya@email.com', new Subscription('professional')); 
$user->getCurrentSubscription()->hasPremiumAccess(); // false 
$user->getCurrentSubscription()->hasProfessionalAccess(); // true 
 
// Внутри создается фейковая, потому что подписка не передается 
$user = new User('vasya@email.com'); 
$user->getCurrentSubscription()->hasPremiumAccess(); // false 
$user->getCurrentSubscription()->hasProfessionalAccess(); // false
 
$user = new User('rakhim@hexlet.io'); // администратор, проверяется по емейлу 
$user->getCurrentSubscription()->hasPremiumAccess(); // true 
$user->getCurrentSubscription()->hasProfessionalAccess(); // true 
```
  