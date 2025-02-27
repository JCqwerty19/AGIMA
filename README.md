# Документация проекта

## ЗАДАЧА 1

### Обзор
Для выполнения этой задачи я использовал Laravel, чтобы обеспечить чистоту и поддерживаемость кода. Основные аспекты реализации включают использование сервисов и репозиториев, валидацию данных и улучшения фронтенда.

### Подробности
- **Разделение обязанностей**: 
  - Функции не реализовывались непосредственно в контроллерах. Вместо этого они были переданы в сервисы, а затем в репозитории. Этот подход облегчает переход между различными ORM.

- **Валидация данных**: 
  - Для валидации данных использовались классы запросов, чтобы гарантировать чистоту и валидность ввода.

- **Фронтенд**:
  - Было использовано минимальное количество Bootstrap в сочетании с шаблонами Blade для фронтенда.
  
- **Хранение данных**:
  - Данные пользователей сохраняются в `public/data.txt`.

## ЗАДАЧА 2 и ЗАДАЧА 3

### Чистота кода
- **Дополнительные улучшения**: 
  - Для поддержания чистоты кода использовались интерфейсы, классы и автозагрузка. Это обеспечивает модульную и масштабируемую структуру кода.

### Комментарии
- **Документация**:
  - Весь код подробно прокомментирован на английском языке.

С уважением,  
Ulugbek Kozimov
