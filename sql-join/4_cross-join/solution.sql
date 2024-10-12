-- Запрос для получения всех возможных сочетаний блюд и напитков
SELECT dishes.dish_title, drinks.drink_title
FROM dishes
         CROSS JOIN drinks;
